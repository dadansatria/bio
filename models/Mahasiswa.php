<?php

namespace app\models;

use Yii;
use app\models\JenisKelamin;
use app\models\Kampus;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property integer $id_jenis_kelamin
 * @property string $tanggal_lahir
 * @property integer $id_kampus
 * @property string $no_kontak
 * @property string $foto
 *
 * @property JenisKelamin $idJenisKelamin
 * @property Kampus $idKampus
 * @property User[] $users
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'id_jenis_kelamin', 'tanggal_lahir', 'id_kampus'], 'required'],
            [['alamat'], 'string'],
            [['id_jenis_kelamin', 'id_kampus'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['nama', 'no_kontak', 'foto'], 'string', 'max' => 255],
            [['id_jenis_kelamin'], 'exist', 'skipOnError' => true, 'targetClass' => JenisKelamin::className(), 'targetAttribute' => ['id_jenis_kelamin' => 'id']],
            [['id_kampus'], 'exist', 'skipOnError' => true, 'targetClass' => Kampus::className(), 'targetAttribute' => ['id_kampus' => 'id']],
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
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'id_kampus' => 'Id Kampus',
            'no_kontak' => 'No Kontak',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisKelamin()
    {
        return $this->hasOne(JenisKelamin::className(), ['id' => 'id_jenis_kelamin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKampus()
    {
        return $this->hasOne(Kampus::className(), ['id' => 'id_kampus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_mahasiswa' => 'id']);
    }

    public static function getGrafikPerJenisKelamin()
    {
        $chart = null;

        foreach(JenisKelamin::find()->all() as $data)
        {
            $chart .= '{"label":"'.$data->nama.'","value":"'.$data->getCount().'"},';
        }
        return $chart;
    }

    public static function getGrafikPerKampus()
    {
        $chart = null;

        foreach(Kampus::find()->all() as $data)
        {
            $chart .= '{"label":"'.$data->nama.'","value":"'.$data->getCount().'"},';
        }
        return $chart;
    }    

}
