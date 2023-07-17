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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id')->lenght(11);
            $table->unsignedInteger('pel_id_gol')->lenght(3);
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->text('pel_alamat');
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50);
            $table->enum('pel_aktif', ['Y', 'N']);
            $table->unsignedBigInteger('pel_id_user')->lenght(11);
            $table->timestamps();
        });

        Schema::table('tb_pelanggan', function (Blueprint $table) {
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('pel_id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
