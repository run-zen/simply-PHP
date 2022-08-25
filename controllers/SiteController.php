<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): bool|array|string
    {
        $params = [
            'name' => 'Ranjan'
        ];
        return $this->render('home', $params);
    }
    public function contact(): string
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request): string
    {
        $body = $request->getBody();
        return 'handling submitted data';
    }
}