<?php namespace Smkn1Pangkep\Perpustakaan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Peminjam extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'peminjam' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Smkn1Pangkep.Perpustakaan', 'peminjam', 'peminjam');
    }
}
