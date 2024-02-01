<?php namespace Smkn1Pangkep\Perpustakaan\Models;

use Model;

/**
 * Model
 */
class KoleksiPribadi extends Model
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
    public $table = 'smkn1pangkep_perpustakaan_koleksipribadi';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

<<<<<<< HEAD
    public $belongsTo = [
        'member' =>  Member::class,
        'buku' => Buku::class
=======
    public $belongsTo =[
        "user"=> user
>>>>>>> 1212f6e4595b0cdcb85df47a1b469f06391ebb7b
    ];
}

