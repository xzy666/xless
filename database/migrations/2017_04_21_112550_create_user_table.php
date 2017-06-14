<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
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
            $table->string('name');
            $table->string('github_id')->nullable();
            $table->string('weibo_id')->nullable();
            $table->smallInteger('is_admin')->default(0);
            $table->string('confirm_code', 64)->unique()->nullable();
            $table->tinyInteger('status')->default(false);
            $table->string('email',100)->unique();
            $table->string('github_name')->nullable();
            $table->string('github_url')->nullable();
            $table->string('weibo_name')->nullable();
            $table->string('weibo_link')->nullable();
            $table->string('website')->nullable();
            $table->string('description')->nullable();
            $table->string('password');
            $table->enum('email_notify_enabled', ['yes',  'no'])->default('yes')->index();
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
