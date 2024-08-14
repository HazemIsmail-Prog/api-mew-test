<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('contract_id')->constrained('contracts'); //replace with many to many later
            $table->foreignId('from_id')->constrained('stakeholders');
            $table->foreignId('to_id')->constrained('stakeholders');
            $table->string('type'); // ['incoming','outgoing']
            $table->string('title');
            $table->string('ref')->nullable();
            $table->text('content')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('is_completed')->default(false); // ['completed','pending']
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
