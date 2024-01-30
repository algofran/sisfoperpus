<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanPeminjaman extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('peminjam_id');
        $table->integer('user_id');
        $table->integer('buku_id');
        $table->string('tanggal_peminjaman');
        $table->string('tanggal_pengembalian');
        $table->string('status_peminjaman');
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_peminjaman');
}
}
