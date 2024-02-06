<?php namespace Smkn1Pangkep\Perpustakaan\Models;

use Model;

/**
 * Model
 */
class Buku extends Model
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
    public $table = 'smkn1pangkep_perpustakaan_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $attachOne = [
        'cover' => 'System\Models\File'
    ];

    public function  getKategoribukuIdOptions(){
        return KategoriBuku::get()->pluck("namakategori","id");
    }
}
