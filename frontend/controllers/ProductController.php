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
 * Description of ProductController
 *
 * @author CHAIYAWUT KHIDKHEM
 */
class ProductController extends Controller{
public function actionIndex(){
    $users = ['fname'=>'chaiyawut',
                'laname'=>'khidkhem',
            'tle'=>'0903478500','email'=>'chaiyawut.kh57@snru.ac.th'
            ,'men'=>'Men'];    
        
        return $this->render("tbproduct",["users"=>$users]);
    }
    //put your code here
    
   
}
