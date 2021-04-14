<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('sub_tittle')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('block')->default(0);
            $table->string('phone_code');
            $table->string('phone');
            $table->timestamp('working_start_time')->useCurrent();
            $table->timestamp('working_end_time')->useCurrent();
            $table->string('email');
            $table->string('password');
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
        Schema::table('sub_vendors', function (Blueprint $table) {
            //
        });
    }
}
