<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMgmArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_article', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedInteger('category_id')->nullable(); // Join ke tabel mst_category
            $table->unsignedInteger('tag_id')->nullable(); // Join ke tabel mst_tag
            $table->string('publish_by')->nullable();
            $table->date('publish_date')->nullable();
            $table->text('description')->nullable();
            $table->text('picture')->nullable();
            
            // Struktur Baku
            $table->boolean('active')->default(1);
            $table->string('created_by')->nullable();
            $table->dateTime('created_at')->default(now());
            $table->string('updated_by')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_article');
    }
}
