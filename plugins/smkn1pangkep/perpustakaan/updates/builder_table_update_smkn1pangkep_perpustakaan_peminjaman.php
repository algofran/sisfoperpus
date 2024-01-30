<?php namespace Smkn1Pangkep\Perpustakaan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateSmkn1pangkepPerpustakaanPeminjaman extends Migration
{
    public function up()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->date('tanggal_peminjaman')->nullable(false)->unsigned(false)->default(null)->change();
        $table->date('tanggal_pengembalian')->nullable(false)->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('smkn1pangkep_perpustakaan_peminjaman', function($table)
    {
        $table->string('tanggal_peminjaman', 255)->nullable(false)->unsigned(false)->default(null)->change();
        $table->string('tanggal_pengembalian', 255)->nullable(false)->unsigned(false)->default(null)->change();
    });
}
}
