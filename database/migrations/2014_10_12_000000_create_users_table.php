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
            $table->date('date_of_birth')->nullable();
            $table->integer('gender')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('contact_number')->nullable();
            $table->boolean('email_notification_is_active')->default(true);
            $table->boolean('sms_notification_is_active')->default(true);
            $table->string('avatar')->nullable();
            $table->integer('user_type_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
