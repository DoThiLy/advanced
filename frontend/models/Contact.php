<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class Contact extends Model{
    public $name;
    public $email;

    public function rules(){
        return[
            // name, email, subject and body are required
            [['name', 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
       ];
    }
}