<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanPeminjaman3 extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->date('tanggal_pengembalian')->nullable()->change();
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->date('tanggal_pengembalian')->nullable(false)->change();
    });
}
}
