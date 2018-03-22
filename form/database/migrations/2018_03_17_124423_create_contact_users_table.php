<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name', 32);
            $table->string('first_name', 32);
            $table->string('last_name_kana',64);
            $table->string('company', 64);
            $table->string('email');
            $table->string('category', 64);
            $table->text('message');
            $table->text('remark');
            $table->softDeletes('delFlag');
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
        Schema::dropIfExists('contact_users');
    }
}
