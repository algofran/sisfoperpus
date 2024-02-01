<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanPeminjaman4 extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->renameColumn('user_id', 'member_id');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->renameColumn('member_id', 'user_id');
    });
}
}