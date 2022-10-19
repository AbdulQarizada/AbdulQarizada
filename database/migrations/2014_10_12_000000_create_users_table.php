<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


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
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->integer('IsActive')->nullable();
            $table->date('DOB')->nullable();
            $table->text('Avatar')->nullable();




            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
     User::create(['FirstName' => 'AbdulWahab','LastName' => 'Qarizada','IsActive' => 1,'dob'=>'1993-12-14','email' => 'ab_wahabqarizada@outlook.com','password' => Hash::make('khan@!@#123'),'email_verified_at'=>'2022-01-02 17:04:58','avatar' => 'images/avatar-1.jpg','created_at' => now(),]);
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
