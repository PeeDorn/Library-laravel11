<?php

use App\Models\User;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default(1);
            $table->string('Subject');
            $table->string('KeyWord');
            $table->string('ISBN');
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->date('published_date');
            $table->string('barcode');
            $table->string('material_type');
            $table->string('edition')->nullable();
            $table->string('editor')->nullable();
            $table->string('published_in_the')->nullable();
            $table->string('shelves');
            $table->string('case_number');
            $table->integer('book_order');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
