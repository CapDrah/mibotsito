<?php 
 
 
 
$botToken = "1942873721:AAFeEo9uNm6yZ3Twr9nH-owIsFz_rODmnaI"; 
      $website = "https://api.telegram.org/bot".$botToken;
      error_reporting(0);
      $update = file_get_contents('php://input');
      $update = json_decode($update, TRUE);
      global $website;
      $print = print_r($update);
      $chatId = $update["message"]["chat"]["id"]; 
      $userId = $update["message"]["from"]["id"];
      $firstname = $update["message"]["from"]["first_name"];
      $username = $update["message"]["from"]["username"];
      $message = $update["message"]["text"];
      $new_chat_member = $update["message"]["new_chat_member"];
      $newusername = $update["message"]["new_chat_member"]["username"];
      $newgId = $update["message"]["new_chat_member"]["id"];
      $newfirstname = $update["message"]["new_chat_member"]["first_name"];
      $chatname = $update["message"]["chat"]["title"]; 
      $c_mention = '<a href="tg://user?id='.$chatId.'">'.$chatname.'</a>';
      $message_id = $update["message"]["message_id"];
      $mention = '<a href="tg://user?id='.$userId.'">'.$firstname.'</a>';
      $mention1 = '<a href="tg://user?id=1137898271">GαɱҽMαʂƚҽɾ</a>';
      $type = $update["message"]["chat"]["type"];
      $sticker = $update["message"]["message"];
      $gay_per = rand(1,100);
      $chatid2 = $update["callback_query"]["message"]["chat"]["id"];
      $msgid = $update['callback_query']['message']['message_id'];
      $message_id2 = $update["callback_query"]["message"]["message_id"];
      $data = $update["callback_query"]["data"];
      $userId = $update["message"]["from"]["id"]; 
      $firstname = $update["message"]["from"]["first_name"]; 
      $username = $update["message"]["from"]["username"]; 
      $message = $update["message"]["text"]; 
      $message_id = $update["message"]["message_id"]; 
      $r_userId = $update["message"]["reply_to_message"]["from"]["id"];
      $r_message = $update["message"]["reply_to_message"]["text"];  
      $r_firstname = $update["message"]["reply_to_message"]["from"]["first_name"];  
      $r_username = $update["message"]["reply_to_message"]["from"]["username"]; 
      $r_msg_id = $update["message"]["reply_to_message"]["message_id"]; 
      $mention3 = '<a href="tg://user?id='.$r_userId.'">'.$r_firstname.'</a>';
 
 
 
//////////=========[Start Command]=========////////// 
 
if($message == "/start"){
	sendMessage($chatId, $message_id, "Hola"); 

}
//////////=========[Funtions]=========////////// 
 
// if($message == "hola"){
//   sendMessage($chatId, $message_id, "Hola @$username, como va tu dia?"); 
// }

// if(preg_match('/Bien|bien|fabuloso/', $message)) {
//   sendMessage($chatId, $message_id, "@$username me alegro :3"); 
// }

if(preg_match('/50 cent|blood Cent|50 Cent Blood On The Sand/', $message)) {
  if(preg_match('/por favor|Por favor|xfavor/', $message)) {

$juego = urlencode("El juego que buscas puede ser

  https://t.me/HablandoUnPocoDePs3/264249");

sendMessage($chatId, $message_id, $juego);

}else{
  sendMessage($chatId, $message_id, "Formula de nuevo la pregunta diciendo por favor ");
  exit();
}
}


if(preg_match('/FarCry4|Far Cry 4|FarCry 4|farcry4|far cry 4|farcry 4|Farcry 4/', $message)) {
  if(preg_match('/por favor|Por favor|xfavor/', $message)) {

$juego = urlencode("El juego que buscas puede ser

  https://t.me/HablandoUnPocoDePs3/125332");

sendMessage($chatId, $message_id, $juego);

}else{
  sendMessage($chatId, $message_id, "Formula de nuevo la pregunta diciendo por favor ");
  exit();
}
}


// if($message == "farcry" || $message == "Farcry"){
//   $messa = urlencode("Tengo estos FarCry para ti:
//     ");
// }



  function editMessage ($chatId, $msgid, $message) {    

          $url = $GLOBALS[website]."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$msgid."&parse_mode=HTML";
          file_get_contents($url);
         
  }      

  function sendMessage ($chatId,$message_id, $message) {

    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
   $data = file_get_contents($url);
  $data = json_decode($data);
  $msgID = $data->result->message_id;
  return $msgID;
    }
 
 
?>