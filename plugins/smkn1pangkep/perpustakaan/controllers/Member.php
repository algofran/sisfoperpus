<?php namespace Smkn1Pangkep\Perpustakaan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Smkn1Pangkep\Perpustakaan\Models\Member as ModelMember;    

class Member extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'member' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Smkn1Pangkep.Perpustakaan', 'member');
    }

    public function onSave() {
        $input = input();
        $member = new ModelMember;
        
        
    }
}
