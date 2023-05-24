<?php

use App\Models\angkatan;
use App\Models\jurusan;
use App\Models\kelas;
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
            $table->foreignIdFor(kelas::class);
            $table->foreignidfor(angkatan::class);
            $table->foreignIdFor(jurusan::class);
            $table->string('nama_siswa');
            $table->string('nama_wali_kelas');
            $table->bigInteger('nisn')->unique();
            $table->bigInteger('hp')->nullable();
            $table->text('alamat')->nullable();
            $table->string('profile')->nullable();
            $table->enum('status', ['lulus', 'tidak_lulus'])->nullable();
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
