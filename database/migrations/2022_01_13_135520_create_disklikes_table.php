<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisklikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disklikes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_nguoidung')->references('id')->on('users');
            $table->foreignId('id_baiviet')->references('id')->on('bai_viets');
            $table->integer('luotdislike');
            $table->softDeletes();
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
        Schema::dropIfExists('disklikes');
    }
}
