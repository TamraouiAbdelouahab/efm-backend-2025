<?php

namespace Modules\PkgWidget\App\Services;
use Modules\PkgWidget\Models\Apprenant;

class WidgetService {

    public function getNombreApprenant()
    {   
        $nombretotal = Apprenant::count();
        $total = ['type'=>'valeur','title' => 'Total', 'total' => $nombretotal];
        return $total;
    }
    public function getApprenantsActifs()
    {
        $Apprenants = Apprenant::where('status', 1)->limit(5)->get();
        $NombreApprenants = Apprenant::count();
        $total = [  'type' => 'liste',
                    'title' => 'Total',
                    'NombreApprenants'=> $NombreApprenants,
                    'Apprenants' => $Apprenants
                ];
        return $total;
    }









}






