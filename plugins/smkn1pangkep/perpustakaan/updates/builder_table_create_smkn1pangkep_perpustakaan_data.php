<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanData extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_data', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->integer('tahun_terbit');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_data');
}
}
