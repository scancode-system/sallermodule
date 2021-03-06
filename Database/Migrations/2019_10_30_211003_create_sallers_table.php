<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sallers', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
           $table->string('login')->unique();
           $table->string('email')->unique()->nullable();
           $table->decimal('goal', 10, 2)->default(0);
           $table->timestamp('email_verified_at')->nullable();
           $table->string('password');
           
           $table->rememberToken();
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
        Schema::dropIfExists('sallers');
    }
}
