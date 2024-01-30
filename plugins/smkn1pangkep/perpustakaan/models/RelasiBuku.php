<?php namespace Smkn1Pangkep\Perpustakaan\Models;

use Model;

/**
 * Model
 */
class RelasiBuku extends Model
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
    public $table = 'smkn1pangkep_perpustakaan_kategoribuku_relasi';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
