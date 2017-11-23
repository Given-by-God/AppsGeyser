<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bannerRules".
 *
 * @property int $id
 * @property string $match
 * @property string $noMatch
 *
 * @property Rules[] $rules
 */
class BannerRules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bannerRules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['match', 'noMatch'], 'required'],
            [['match', 'noMatch'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'match' => 'Match',
            'noMatch' => 'No Match',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rules::className(), ['id_banner' => 'id']);
    }
}
