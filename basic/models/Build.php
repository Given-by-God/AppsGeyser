<?php


namespace app\models;


class Build extends Rules
{
    public $country;
    public $percent;
    public $get;

    public static function selectBanner()
    {
        // $user_ip = getenv('REMOTE_ADDR'); //если не localhost.

        //  $user_ip = '162.243.9.153'; //United States
        //$user_ip = '43.213.19.135'; //Japan
        //$user_ip = '62.143.9.153'; //Germany

        $user_ip = $_SESSION['ip'];
        $get = $_SESSION['get'];


        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $country = $geo["geoplugin_countryName"];

        echo "Country: ".$country."<br>";

        $user = ['country' => $country, 'get' => $get];

        $sql = 'SELECT  r.id,b.match,b.noMatch,r.country,r.get FROM rules r 
                            LEFT JOIN bannerRules b 
                                on r.id_banner = b.id';

        echo "<pre>";
    /*print_r*/($rules = \Yii::$app->db->createCommand($sql)->queryAll());
        echo "</pre>";

        $count = 0;

        $banner = '';
        for ($i = 0; $i < count($rules); $i++) {
            if ($rules[$i]['country'] == $user['country']) {
                $count++;

                if ($rules[$i]['get'] == $user['get']) {
                    $banner = $rules[$i]['match'];
                } else {
                    $banner = $rules[$i]['noMatch'];
                }
            }
        }

        if ($count == 0) {
            $banner = 'noMatch';
        }

//        print_r($user);

        return $banner;
    }

}