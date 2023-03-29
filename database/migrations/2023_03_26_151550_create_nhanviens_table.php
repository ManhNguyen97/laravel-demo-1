<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->id();
            $table->string('MaNV');
            $table->string('HoTen');
            $table->string('NgaySinh');
            $table->string('GioiTinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->string('GhiChu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanviens');
    }
};
