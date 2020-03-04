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
            $table->id();
            $table->string('username',20);
            $table->string('email')->unique();
            $table->string('password',256);
            $table->string('status',4);
            $table->boolean('viewo_rders');
            $table->boolean('manager_editor');
            $table->boolean('manage_rate');
            $table->boolean('deposit_able');
            $table->boolean('order_amount_manage');
            $table->integer('last_login_time');
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
        Schema::dropIfExists('users');
    }
}
