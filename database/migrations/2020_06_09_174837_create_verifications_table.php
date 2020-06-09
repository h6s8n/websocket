<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->unique();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('name');
            $table->string('family');
            $table->string('national_card');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('birthday_date');
            $table->string('address');
            $table->string('card_number');
            $table->string('sheba');
            $table->string('national_card_image_address');
            $table->boolean('started')->default(false);
            $table->boolean('approved')->default(false);
            $table->boolean('finished')->default(false);
            $table->softDeletes();
            $table->timestamps();

            
            

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifications');
    }
}
