<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rules".
 *
 * @property int $id
 * @property string $country
 * @property string $get
 * @property int $id_banner
 *
 * @property BannerRules $banner
 */
class Rules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'get', 'id_banner'], 'required'],
            [['country', 'get'], 'string'],
            [['id_banner'], 'integer'],
            [['id_banner'], 'exist', 'skipOnError' => true, 'targetClass' => BannerRules::className(), 'targetAttribute' => ['id_banner' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'get' => 'Get',
            'id_banner' => 'Id Banner',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanner()
    {
        return $this->hasOne(BannerRules::className(), ['id' => 'id_banner']);
    }
}
