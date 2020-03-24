<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            //people data
            $table->char('cpf', 11)->unique()->nullable();
            $table->string('name');
            $table->char('phone', 11);
            $table->date('birth')->nullable();
            $table->char('gender')->nullable();
            $table->text('notes')->nullable();

            //auth data
            $table->string('email')->unique();
            $table->string('password');

            //permission
            $table->string('status')->default('active');
            $table->string('permission')->default('app.user');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        
        });

        Schema::dropIfExists('users');
    }
}
