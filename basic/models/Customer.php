<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "bannerRules".
 *
 * @property int $id
 * @property string $match
 * @property string $noMatch
 *
 * @property Rules[] $rules
 */
class Customer extends Model
{

       function __construct($ip,$get,array $config = [])
       {
           parent::__construct($config);

           session_start();
           $_SESSION['ip'] = $ip;
           $_SESSION['get'] = $get;
       }


    public $ip;
    public $get;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'get'], 'required'],
            [['ip', 'get'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ip' => 'ID asd asd ',
            'get' => 'Match asd a d',
        ];
    }


}
