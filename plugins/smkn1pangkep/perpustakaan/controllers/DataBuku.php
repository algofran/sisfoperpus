<?php namespace Smkn1Pangkep\Perpustakaan\Controllers;

use Backend\Classes\Controller;
use \Smkn1Pangkep\Perpustakaan\Models\UlasanBuku;
use \Smkn1Pangkep\Perpustakaan\Models\Buku;
use BackendMenu;

class DataBuku extends Controller
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
        BackendMenu::setContext('Smkn1Pangkep.Perpustakaan', 'databuku');

    }
    public function onReloadRating(){
        $this->hitungRating();
        return $this->listRefresh();
    }
    public function hitungRating(){
        $buku = Buku::get();
        trace_log("hitung rating");
        foreach($buku as $data){
            $ulasan=UlasanBuku::where('buku_id', $data->id)->get();

            $totalRating = 0;
            $rating = 0;

            foreach($ulasan as $u) {
                $totalRating += $u->rating;
                trace_log($u->rating);
            }
            trace_log($totalRating);
            if (count ($ulasan )> 1)
            $rating = ($totalRating / count($ulasan))   ;
            trace_log($rating);
            $data->rating = $rating;
            $data->save();

        }
    }
}
