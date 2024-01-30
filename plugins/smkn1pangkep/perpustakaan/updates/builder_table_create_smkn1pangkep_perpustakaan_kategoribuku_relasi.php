<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanKategoribukuRelasi extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_kategoribuku_relasi', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('kategoribuku');
        $table->integer('buku_id');
        $table->integer('kategori_id');
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_kategoribuku_relasi');
}
}
