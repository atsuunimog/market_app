<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nominations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('post_id')->references('id')->on('scholarships');
            $table->foreign('user_id')->references('user_id')->on('scholarships');
            $table->string('child_full_name');
            $table->string('class');
            $table->string('parent_name');
            $table->string('email');
            $table->text('address');
            $table->string('phone_no');
            $table->string('whatsapp_no');
            $table->string('edit_code')->uniqid();
            $table->text('nomination_details')->nullable();
            $table->string('affiliate_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominations');
    }
}
