<?php

namespace app\controllers;


class PostController extends AppController
{
    public function actionIndex(){
        $world = 'Hello, World';
        $hi = 'hi! new var';
        return $this->render('index', compact('world','hi'));
    }
    public function actionTest(){
        return $this->render('test');
    }
}