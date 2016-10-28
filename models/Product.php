<?php
/**
 * Created by PhpStorm.
 * User: coookiezfan
 * Date: 10/24/2016
 * Time: 9:05 PM
 */

namespace app\models;
use yii2\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'product';

    }
    public  function  getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'product_id']);

    }
}