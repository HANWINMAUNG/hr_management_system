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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('employee_id')->nullable();
            $table->string('phone')->unique()->nullabel();
            $table->string('nrc_number')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->date('date_of_join')->nullable();
            $table->boolean('is_present')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
