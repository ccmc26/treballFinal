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
        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            // $table->unsignedBigInteger('stock')->nullabel();
            // $table->tinyInteger('discount')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_mime')->nullable();
            $table->integer('photo_size')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 10, 2);
            // $table->timestamps();

            $table->foreignIdFor(User::class, 'created_by')->nullable();
            $table->foreignIdFor(User::class, 'updated_by')->nullable();

            $table->softDeletes();
            $table->foreignIdFor(User::class, 'deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo');
    }
};
