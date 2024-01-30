<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateSmkn1pangkepPerpustakaanMember extends Migration
{
    public function up()
{
    Schema::create('smkn1pangkep_perpustakaan_member', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('user_id');
        $table->string('nama_lengkap');
        $table->string('alamat');
    });
}

public function down()
{
    Schema::dropIfExists('smkn1pangkep_perpustakaan_member');
}
}
