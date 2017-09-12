<?php

namespace app\models;

use Yii;
use app\models\Mahasiswa;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "jenis_kelamin".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property Mahasiswa[] $mahasiswas
 */
class JenisKelamin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_kelamin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_jenis_kelamin' => 'id']);
    }

    public function getCount()
    {
        return Mahasiswa::find()
            ->andWhere(['id_jenis_kelamin' => $this->id])
            ->count();
    }  

    public static function getList()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }

}
