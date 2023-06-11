<?php


// error_reporting(0);
// set_time_limit(0);
// error_reporting(0);
// date_default_timezone_set('America/Buenos_Aires');



$host = "localhost";
    $user = "root";
    $pass = "";
    $db = "confi";
    $conexion = new mysqli($host, $user, $pass, $db);


 function RandomString($length)
    {
        $characters       = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

        $capt = RandomString(4);
     

  $consulta = $conexion->query("SELECT * FROM captcha WHERE id='2'");
          $codigo = $consulta->fetch_assoc();
          $cod = $codigo['codigo']; 
  




echo "Tu codigo es: ". $cod;















// $ch = curl_init();
// /////////========Luminati
// ////////=========Socks Proxy
// // curl_setopt($ch, CURLOPT_PROXY, $poxySocks); 
// curl_setopt($ch, CURLOPT_URL, 'https://api.codinary.org/v1/imageCaptcha/?text=k67s'); 
// curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 'authority: api.codinary.org',
// 'method: GET',
// 'path: /v1/imageCaptcha/?text=k67s',
// 'scheme: https',
// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
// 'accept-encoding: gzip, deflate, br',
// 'upgrade-insecure-requests: 1',
// 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0'
//   ));
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_POSTFIELDS, 'text=k67s');

// $result = curl_exec($ch);

// $encode = json_encode($result);
// // echo "hola";
// echo "hola";


// curl_close($ch);



?>