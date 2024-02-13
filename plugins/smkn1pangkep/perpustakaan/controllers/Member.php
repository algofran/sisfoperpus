<?php namespace Smkn1Pangkep\Perpustakaan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Smkn1Pangkep\Perpustakaan\Models\Member as ModelMember;  
use Winter\User\Models\User;  

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

    public function formAfterCreate($model) {
        $input = input();
        $user = new User;

        trace_log($input);

        $user->email = $input['email'];
        $user->name = $model->nama_lengkap;
        $user->username = $input['email'];
        $user->surname = $model->nama_lengkap;
        $user->password = $input['password'];
        $user->password_confirmation = $input['password'];
        $user->save();


        
    }
}
