<?php

use App\Models\siswa;
use App\Models\sumbangan;
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
            $table->foreignIdFor(sumbangan::class);
            $table->foreignIdFor(siswa::class);
            $table->decimal('bayar', 9, 2);
            $table->decimal('kurang', 9, 2);
            $table->decimal('kembalian', 9, 2);
            $table->enum('jalur', ['manual', 'digital']);
            $table->tinyInteger('status');
            $table->text('deskripsi');
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
