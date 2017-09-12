<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Helper extends Component
{
    public static function rp($jumlah,$null='0.00',$desimal=2)
    {
        $output = '';

        if ($jumlah == null || empty($jumlah)) {
            return Yii::$app->formatter->asCurrency(0);
        } elseif (is_integer($jumlah)) {
            return Yii::$app->formatter->asCurrency(90);
        } else {
            return Yii::$app->formatter->asCurrency(90);
        }

        return $output;
    }

    public static function getTanggalSingkat($tanggal)
    {
        if($tanggal==null)
            return null;

        if($tanggal=='0000-00-00')
            return null;

        $time = strtotime($tanggal);

        return date('j',$time).' '.Helper::getBulanSingkat(date('m',$time)).' '.date('Y',$time);
    }

    public static function getTanggal($tanggal)
    {
        if($tanggal==null)
            return null;

        if($tanggal=='0000-00-00')
            return null;

        $time = strtotime($tanggal);

        return date('j',$time).' '.Helper::getBulanLengkap(date('m',$time)).' '.date('Y',$time);
    }

    public static function getBulanSingkat($i)
    {
        $bulan = '';

        if(strlen($i)==1) $i = '0'.$i;

        if($i=='01') $bulan = 'Jan';
        if($i=='02') $bulan = 'Feb';
        if($i=='03') $bulan = 'Mar';
        if($i=='04') $bulan = 'Apr';
        if($i=='05') $bulan = 'Mei';
        if($i=='06') $bulan = 'Jun';
        if($i=='07') $bulan = 'Jul';
        if($i=='08') $bulan = 'Agt';
        if($i=='09') $bulan = 'Sep';
        if($i=='10') $bulan = 'Okt';
        if($i=='11') $bulan = 'Nov';
        if($i=='12') $bulan = 'Des';

        return $bulan;

    }

    public static function getBulanLengkap($i)
    {
        $bulan = '';

        if(strlen($i)==1) $i = '0'.$i;

        if($i=='01') $bulan = 'Januari';
        if($i=='02') $bulan = 'Februari';
        if($i=='03') $bulan = 'Maret';
        if($i=='04') $bulan = 'April';
        if($i=='05') $bulan = 'Mei';
        if($i=='06') $bulan = 'Juni';
        if($i=='07') $bulan = 'Juli';
        if($i=='08') $bulan = 'Agustus';
        if($i=='09') $bulan = 'September';
        if($i=='10') $bulan = 'Oktober';
        if($i=='11') $bulan = 'November';
        if($i=='12') $bulan = 'Desember';

        return $bulan;

    }

    public static function getWaktuWIB($waktu)
    {
        if($waktu == '')
            return null;
        else {
        $time = strtotime($waktu);

        $h = date('N',$time);

        if($h == '1') $hari = 'Senin';
        if($h == '2') $hari = 'Selasa';
        if($h == '3') $hari = 'Rabu';
        if($h == '4') $hari = 'Kamis';
        if($h == '5') $hari = 'Jumat';
        if($h == '6') $hari = 'Sabtu';
        if($h == '7') $hari = 'Minggu';


        $tgl = date('j',$time);

        $h = date('n',$time);

        if($h == '1') $bulan = 'Januari';
        if($h == '2') $bulan = 'Februari';
        if($h == '3') $bulan = 'Maret';
        if($h == '4') $bulan = 'April';
        if($h == '5') $bulan = 'Mei';
        if($h == '6') $bulan = 'Juni';
        if($h == '7') $bulan = 'Juli';
        if($h == '8') $bulan = 'Agustus';
        if($h == '9') $bulan = 'September';
        if($h == '10') $bulan = 'Oktober';
        if($h == '11') $bulan = 'November';
        if($h == '12') $bulan = 'Desember';

        $tahun  = date('Y',$time);

        $pukul = date('H:i:s',$time);

        $output = $hari.', '.$tgl.' '.$bulan.' '.$tahun.' | '.$pukul.' WIB';

        return $output;
        }

    }

    public function getHari($h = null)
    {
        if($h == '1') {
            return 'Senin';
        } elseif($h == '2') {
            return 'Selasa';
        } elseif($h == '3') {
            return 'Rabu';
        } elseif($h == '4') {
            return 'Kamis';
        } elseif($h == '5') {
            return 'Jumat';
        } elseif($h == '6') {
            return 'Sabtu';
        } elseif($h == '7') {
            return 'Minggu';
        } else {
            return null;
        }
    }

    public static function getBulanList($index = true)
    {
        $bulan = [];
        $i = 1;

        if ($index) {
            while ($i <= 12) {
                if (strlen($i) == 1) $i = '0'.$i;

                $bulan[$i] = self::getBulanLengkap($i);
                $i++;
            }
        } else {
            while ($i <= 12) {
                $bulan[] = self::getBulanLengkap($i);
                $i++;
            }
        }

        return $bulan;
    }

    public static function getBulanListInt()
    {
        $bulan = [];
        $i = 1;
        while ($i <= 12) {
            $bulan[$i] = self::getBulanLengkap($i);
            $i++;
        }

        return $bulan;
    }

    public static function getBulanListFilter()
    {
        $bulan = [];
        $i = 1;
        while ($i <= 12) {
            if (strlen($i) == 1) $i = '0'.$i;

            $bulan[$i] = self::getBulanLengkap($i);
            $i++;
        }

        return $bulan;
    }

    public static function getListPaging()
    {
        $paging = [
           20 => '20 Data (Default)',
            5 => '5 Data',
           10 => '10 Data',
           50 => '50 Data',
           100 => '100 Data',
           0 => 'Semua Data',
        ];
        return $paging;
    }

    public static function chr($char,$append = null)
    {
        if($char > 90) {
            if ($append == null) {
                $append = 64;
            }

            return self::chr(($char - 26), ++$append);
        } else {
            if ($append !== null) {
                $append = chr($append);
            }

            return $append . chr($char);
        }
    }

    public static function chrKecil($char, $append = null)
    {
        if($char > 122) {
            if ($append == null) {
                $append = 97;
            }

            return self::chrKecil(($char - 26), ++$append);
        } else {
            if ($append !== null) {
                $append = chr($append);
            }

            return $append . chr($char);
        }
    }

    public static function getFormatRupiahExcel()
    {
        return '[$Rp-421] #,##0.00';
    }

    public static function getFormatRupiahExcelTanpaRp()
    {
        return '#,##0.00';
    }

    public static function getTerbilang($rp,$tri=0)
    {
        $ones = array(
            "",
            " satu",
            " dua",
            " tiga",
            " empat",
            " lima",
            " enam",
            " tujuh",
            " delapan",
            " sembilan",
            " sepuluh",
            " sebelas",
            " dua belas",
            " tiga belas",
            " empat belas",
            " lima belas",
            " enam belas",
            " tujuh belas",
            " delapan belas",
            " sembilan belas"
        );

        $tens = array(
            "",
            "",
            " dua puluh",
            " tiga puluh",
            " empat puluh",
            " lima puluh",
            " enam puluh",
            " tujuh puluh",
            " delapan puluh",
            " sembilan puluh"
        );

        $triplets = array(
            "",
            " ribu",
            " juta",
            " miliar",
            " triliun",
        );

        // chunk the number, ...rxyy
        $r = (int) ($rp / 1000);
        $x = ($rp / 100) % 10;
        $y = $rp % 100;

        // init the output string
        $str = "";

        // do hundreds
        if ($x > 0)
        {
            if($x==1)
                $str =  " seratus";
            else
                $str = $ones[$x] . " ratus";
        }

        // do ones and tens
        if ($y < 20)
            $str .= $ones[$y];
        else
            $str .= $tens[(int) ($y / 10)] . $ones[$y % 10];

        // add triplet modifier only if there
        // is some output to be modified...
        if ($str != "")
            $str .= $triplets[$tri];

        // continue recursing?
        if ($r > 0)
            return Helper::getTerbilang($r, $tri+1).$str;
        else
            return $str;
    }

    public static function konversiRomawi($nomor)
    {
        $table = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $return = '';
        while($nomor > 0)
        {
            foreach($table as $rom => $arb)
            {
                if($nomor >= $arb)
                {
                    $nomor -= $arb;
                    $return .= $rom;
                    break;
                }
            }
        }

        return $return;
    }

    public static function getKode()
    {
        //removed number 0, capital o, number 1 and small L
        //Total: keys = 32, elements = 33
        $characters = array(
            "A","B","C","D","E","F","G","H","J","K","L","M",
            "N","P","Q","R","S","T","U","V","W","X","Y","Z",
            "1","2","3","4","5","6","7","8","9");

        //make an "empty container" or array for our keys
        $keys = array();

        //first count of $keys is empty so "1", remaining count is 1-6 = total 7 times
        while(count($keys) < 6) {
        //"0" because we use this to FIND ARRAY KEYS which has a 0 value
        //"-1" because were only concerned of number of keys which is 32 not 33
        //count($characters) = 33
            $x = mt_rand(0, count($characters)-1);
            if(!in_array($x, $keys)) {
                $keys[] = $x;
            }
        }
        
        $random_chars='';
    
        foreach($keys as $key){
            $random_chars .= $characters[$key];
        }
        
        return $random_chars;   
    
    }
}
