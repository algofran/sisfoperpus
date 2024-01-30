<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanUlasanbuku extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_ulasanbuku', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('user_id');
        $table->integer('buku_id');
        $table->string('ulasan');
        $table->integer('rating');
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_ulasanbuku');
}
}
