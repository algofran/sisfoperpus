<?php namespace Smkn1Pangkep\Perpustakaan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class KoleksiPribadi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'koleksipribadi' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Smkn1Pangkep.Perpustakaan', 'databuku', 'koleksipribadi');
    }
}
