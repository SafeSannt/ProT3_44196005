<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'MyFitt: Inicio';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }

    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('front/acerca_de');
        echo view('front/footer');
    }
}
