<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanKategoribuku extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_kategoribuku', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('kategori_id');
        $table->string('namakategori');
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_kategoribuku');
}
}
