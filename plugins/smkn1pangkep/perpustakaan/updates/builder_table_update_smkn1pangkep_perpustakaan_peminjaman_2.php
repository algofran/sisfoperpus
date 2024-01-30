<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanPeminjaman2 extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->dropColumn('peminjam_id');
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->integer('peminjam_id');
    });
}
}
