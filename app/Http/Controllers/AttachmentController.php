<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use App\Models\Attachment;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{
    public function store(Request $request, Document $document)
    {

        $request->validate([
            'description' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,pdf,doc,docx,zip,rar|max:2097152', // Adjust mime types and size as needed
        ]);

        try {
            $path = $request->file('file')->storePublicly('Attachments/' . $document->id, 's3');

            // Ensure the file exists in S3
            if (!Storage::disk('s3')->exists($path)) {
                return response()->json(['error' => 'File not found on S3'], 404);
            }

            // Create the attachment record
            $attachment = $document->attachments()->create([
                'description' => $request->input('description', 'No description'), // Use request input or default value
                'file' => $path,
            ]);

            return new AttachmentResource($attachment);
        } catch (\Throwable $th) {
            // Log the exception message and return an error response
            Log::error('File upload failed: ' . $th->getMessage());
            return response()->json(['error' => 'File upload failed'], 500);
        }
    }

    public function destroy(Document $document, Attachment $attachment)
    {
        $attachment->delete();
    }
}
