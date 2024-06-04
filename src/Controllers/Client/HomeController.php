<?php 

namespace  Asus\Base\Controllers\Client;

use  Asus\Base\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}