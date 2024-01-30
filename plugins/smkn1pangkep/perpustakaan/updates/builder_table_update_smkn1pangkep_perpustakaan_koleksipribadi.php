<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanKoleksipribadi extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_koleksipribadi', function($table)
    {
        $table->dropColumn('koleksi_id');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_koleksipribadi', function($table)
    {
        $table->integer('koleksi_id');
    });
}
}
