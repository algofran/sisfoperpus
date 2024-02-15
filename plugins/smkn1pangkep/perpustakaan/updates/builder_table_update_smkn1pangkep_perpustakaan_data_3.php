<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanData3 extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_data', function($table)
    {
        $table->integer('reating');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_data', function($table)
    {
        $table->dropColumn('reating');
    });
}
}
