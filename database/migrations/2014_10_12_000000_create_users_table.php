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
            $table->string('phone_code');
            // $table->unsignedInteger('phone_code');
            // $table->foreign('phone_code')->references('id')->on('countries')->onDelete('cascade');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('block')->default(0);
            // $table->unsignedInteger('vendor_id');
            // $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
            $table->integer('role')->default(1);
            $table->timestamp('last_activity')->useCurrent();
            $table->string('ip_address')->nullable();
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
