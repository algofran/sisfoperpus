<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanMember extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_member', function($table)
    {
        $table->integer('user_id')->nullable()->change();
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_member', function($table)
    {
        $table->integer('user_id')->nullable(false)->change();
    });
}
}
