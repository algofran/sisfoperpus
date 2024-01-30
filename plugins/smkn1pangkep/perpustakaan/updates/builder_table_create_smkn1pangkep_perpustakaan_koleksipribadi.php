<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanKoleksipribadi extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_koleksipribadi', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('koleksi_id');
        $table->integer('user_id');
        $table->integer('buku_id');
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_koleksipribadi');
}
}
