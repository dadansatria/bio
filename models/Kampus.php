<?php

namespace app\models;

use Yii;
use app\models\Mahasiswa;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kampus".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 *
 * @property Mahasiswa[] $mahasiswas
 */
class Kampus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kampus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat'], 'required'],
            [['alamat'], 'string'],
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
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_kampus' => 'id']);
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

    public function findAllMahasiswa()
    {
        return $this->mahasiswas;

        /*ATAU BISA JUGA KAYA GINI*/

/*        return Mahasiswa::find()
            ->where(['id_kampus' => $this->id]);*/
    }
}
