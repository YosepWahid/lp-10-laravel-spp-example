<?php

use App\Models\Angkatan;
use App\Models\dana_praktek;
use App\Models\Siswa;
use App\Models\Sumbangan;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sumbangan::class);
            $table->foreignIdFor(Siswa::class);
            $table->foreignIdFor(User::class);
            $table->decimal('dibayarkan', 9, 2);
            $table->decimal('kembalian', 9, 2);
            $table->decimal('kekurangan', 9, 2);
            // $table->decimal('potongan', 9, 2)->nullable();
            // $table->decimal('total', 19, 2);
            $table->dateTime('tanggal_bayar');
            $table->string('bulan');
            $table->text('detail_keterangan')->nullable();
            $table->enum('keterangan_pembayaran', ['digital', 'manual']);
            $table->tinyInteger('status_sumbangan')->default(0);
            // $table->enum('detail_potongan', ['prestasi', 'rangking', 'bantuan'])->nullable();
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
        Schema::dropIfExists('pembayarans');
    }
};
