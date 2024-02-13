<?php namespace Smkn1Pangkep\Perpustakaan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Smkn1Pangkep\Perpustakaan\Models\Peminjaman as ModelPeminjaman;

class Peminjaman extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'editbuku' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Smkn1Pangkep.Perpustakaan', 'peminjam');

    }

    public function onKembali(){
        $input=input();
        $peminjaman= ModelPeminjaman::find($input["id"]);
        $peminjaman->tanggal_pengembalian = date("Y-m-d H:i:s");
        $peminjaman->status_peminjaman =1;
        $peminjaman->save();
        return $this->listRefresh(); 

    }
}
