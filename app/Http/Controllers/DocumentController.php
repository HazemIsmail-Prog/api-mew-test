<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use App\Http\Resources\DocumentResource;
use App\Http\Resources\StepResource;
use App\Models\Document;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 5);

        $documents = Document::query()
            ->orderBy('is_completed')
            ->orderBy('id', 'desc')
            ->with('sender')
            ->with('receiver')
            ->with('contract')
            ->with('lastStep')
            ->when($request->filled('filters.search'), function (Builder $q) use ($request) {
                $q->where(function (Builder $q) use ($request) {
                    $q->whereAny(
                        [
                            'title',
                            'content',
                            'notes',
                            'ref'
                        ],
                        'LIKE',
                        "%" . $request->input('filters.search') . "%"
                    );

                    $q->orWhereRelation('steps', 'action', 'like', "%" . $request->input('filters.search') . "%");
                });
            })
            ->when($request->filled('filters.contract_id'), function (Builder $q) use ($request) {
                $q->whereIn('contract_id', $request->input('filters.contract_id'));
            })
            ->when($request->filled('filters.from_id'), function (Builder $q) use ($request) {
                $q->whereIn('from_id', $request->input('filters.from_id'));
            })
            ->when($request->filled('filters.to_id'), function (Builder $q) use ($request) {
                $q->whereIn('to_id', $request->input('filters.to_id'));
            })
            ->paginate($perPage);

        return DocumentResource::collection($documents);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'nullable',
            'notes' => 'nullable',
            'type' => 'required',
            'contract_id' => 'required',
            'to_id' => 'required',
            'from_id' => 'required',
        ]);
        $validated['created_by'] = auth()->id();
        $document = Document::create($validated);
        return new DocumentResource($document);
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        // Eager load the relationships
        $document->load([
            'sender',
            'receiver',
            'contract',
            'lastStep',
        ]);

        return [
            'document' => new DocumentResource($document),
            'steps' => StepResource::collection($document->steps),
            'attachments' => AttachmentResource::collection($document->attachments),
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'nullable',
            'notes' => 'nullable',
            'type' => 'required',
            'contract_id' => 'required',
            'to_id' => 'required',
            'from_id' => 'required',
            'created_by' => 'required',
        ]);
        $document->update($validated);
        $document->load([
            'sender',
            'receiver',
            'contract',
            'lastStep',
        ]);

        return response()->json(new DocumentResource($document), 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
    }

    public function toggleIsCompleted(Document $document)
    {
        $document->is_completed = !$document->is_completed;
        $document->save();
        return response()->json(new DocumentResource($document), 200, [], JSON_UNESCAPED_UNICODE);
    }
}
