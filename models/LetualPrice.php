<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "letual_price".
 *
 * @property integer $id
 * @property string $article
 * @property string $old_price
 * @property string $new_price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property LetualProduct $article0
 */
class LetualPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'letual_price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['article'], 'string', 'max' => 100],
            [['old_price', 'new_price'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article' => 'Article',
            'old_price' => 'Old Price',
            'new_price' => 'New Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle0()
    {
        return $this->hasOne(LetualProduct::className(), ['article' => 'article']);
    }
}