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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("nik");
            $table->string("tempat_lahir");
            $table->text("alamat");
            $table->string("jenis_kelamin");
            $table->string("no_paspor");
            $table->date("masa_berlaku_paspor");
            $table->string("no_visa");
            $table->date("masa_berlaku_visa");
            $table->string("lampiran_ktp");
            $table->string("lampiran_kk");
            $table->string("pas_foto");
            $table->string("paspor");
            $table->string("jenis_paket");
            $table->string("jenis_kamar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
