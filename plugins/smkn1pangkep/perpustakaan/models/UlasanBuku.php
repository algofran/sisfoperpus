<?php namespace Smkn1Pangkep\Perpustakaan\Models;

use Model;

/**
 * Model
 */
class UlasanBuku extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'smkn1pangkep_perpustakaan_ulasanbuku';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
    public function  getMemberIdOptions(){
        return Member::get()->pluck("nama_lengkap","id");
    }
    public function  getBukuIdOptions(){
        return Buku::get()->pluck("judul","id");
    }
    public $belongsTo = [
        'member' =>  Member::class,
        'buku' => Buku::class
    ];
}
