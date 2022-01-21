<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhSachHinhDichVusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_sach_hinh_dich_vus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hinh');
            $table->foreignId('id_bang')->references('id')->on('dich_vus');
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
        Schema::dropIfExists('danh_sach_hinh_dich_vus');
    }
}
