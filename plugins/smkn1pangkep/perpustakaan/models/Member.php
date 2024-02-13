<?php namespace Smkn1Pangkep\Perpustakaan\Models;

use Model;

/**
 * Model
 */
class Member extends Model
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
    public $table = 'smkn1pangkep_perpustakaan_member';

    /**
     * @var array Validation rules
     */
    public $rules = [
        "nama_lengkap"=>"required|min:4",
        "alamat"=>"required",
       
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
    public $belongsTo = [
        'user' =>  \Winter\User\Models\User::class
    ];
}
