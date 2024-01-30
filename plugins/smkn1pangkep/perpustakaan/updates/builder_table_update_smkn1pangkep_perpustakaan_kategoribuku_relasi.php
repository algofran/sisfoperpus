<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanKategoribukuRelasi extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_kategoribuku_relasi', function($table)
    {
        $table->integer('kategoribuku_id');
        $table->dropColumn('kategoribuku');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_kategoribuku_relasi', function($table)
    {
        $table->dropColumn('kategoribuku_id');
        $table->string('kategoribuku', 255);
    });
}
}
