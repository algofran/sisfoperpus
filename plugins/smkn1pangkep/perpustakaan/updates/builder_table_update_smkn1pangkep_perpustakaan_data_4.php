<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanData4 extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_data', function($table)
    {
        $table->renameColumn('reating', 'rating');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_data', function($table)
    {
        $table->renameColumn('rating', 'reating');
    });
}
}
