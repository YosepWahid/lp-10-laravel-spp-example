<?php

use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\Kelas;
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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Angkatan::class);
            $table->foreignIdFor(Kelas::class);
            $table->bigInteger('nisn')->unique();
            $table->string('wali_kelas');
            $table->string('nama_siswa');
            $table->string('tpln')->nullable();
            $table->text('alamat')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};
