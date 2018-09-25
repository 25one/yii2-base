<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Start extends ActiveRecord
{

    public function rules()
    {
       return [
          //[['name'], 'safe'],
       ];
    }

}
