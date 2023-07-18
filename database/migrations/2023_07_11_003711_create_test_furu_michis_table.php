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
        Schema::create('test_furu_michis', function (Blueprint $table) {
            $table->id();
            //
            $table->integer('num')->default(123)->comment('数値情報のテスト');
            $table->string('str', 128)->default('')->comment('文字情報のテスト');
            // $table->timestamps();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_furu_michis');
    }
};
