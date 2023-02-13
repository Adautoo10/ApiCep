<?php 

namespace App\Controller;

include 'Controller.php';

class EnderecoController extends Controller
{
    public static function teste()
    {
        //var_dump("Querid@s Alun@s");
        //parent::getResponseAsJSON("Querid@s Alun@s");

        $cidades = ['Jau', 'Bariri', 'Itapui', "DC"];
        parent::getResponseAsJSON($cidades);

    }

}