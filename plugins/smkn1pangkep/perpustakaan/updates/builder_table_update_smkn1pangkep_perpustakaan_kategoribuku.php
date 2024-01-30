<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanKategoribuku extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_kategoribuku', function($table)
    {
        $table->dropColumn('kategori_id');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_kategoribuku', function($table)
    {
        $table->integer('kategori_id');
    });
}
}
