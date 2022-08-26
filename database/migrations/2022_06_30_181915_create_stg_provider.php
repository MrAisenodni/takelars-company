<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStgProvider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stg_provider', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->date('company_birth_date');
            $table->string('company_birth_place');
            $table->string('company_phone_number');
            $table->string('company_address');
            $table->string('company_email');
            $table->text('company_description')->nullable();
            $table->text('company_logo')->nullable();
            $table->text('company_logo_text')->nullable();

            // Social Media Company
            $table->text('company_facebook')->nullable();
            $table->text('company_twitter')->nullable();
            $table->text('company_instagram')->nullable();
            $table->text('company_linkedin')->nullable();

            // Owner structure table
            $table->string('owner_name')->nullable();
            $table->unsignedInteger('owner_position_id')->nullable();
            $table->date('owner_birth_date');
            $table->string('owner_birth_place');
            $table->string('owner_phone_number')->nullable();
            $table->string('owner_address')->nullable();
            $table->string('owner_email')->nullable();
            $table->text('owner_photo')->nullable();
            
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
        Schema::dropIfExists('stg_provider');
    }
}
