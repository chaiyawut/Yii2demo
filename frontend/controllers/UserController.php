<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use Yii;
/**
 * Description of UserController
 *
 * @author CHAIYAWUT KHIDKHEM
 */
class UserController extends Controller{
    public function actionIndex(){
        $username = "chaiaywut";
        $users = ['fname'=>'chaiyawut','laname'=>'khidkhem'];
                 
        return $this->render("index",["users"=>$users]);
        
    }
    //put your code here
}
