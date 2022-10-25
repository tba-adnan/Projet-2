<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->nullable();
            $table->unsignedInteger('id_promo')->nullable();
            $table->foreign('id_promo')
            ->references('id')
            ->on('promotions')
            ->onDelete('cascade');
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
        //
    }
};
