<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {

            $table->foreignId('category_id')->after('price')->nullable()->constrained();
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
