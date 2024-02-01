<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanKoleksipribadi2 extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_koleksipribadi', function($table)
    {
        $table->renameColumn('user_id', 'member_id');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_koleksipribadi', function($table)
    {
        $table->renameColumn('member_id', 'user_id');
    });
}
}
