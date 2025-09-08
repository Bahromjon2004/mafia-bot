<?php
error_reporting(0);
ob_start();
define('API_KEY', '8200246903:AAGRSKMUz-MK53SIPewqqLKwC-kmArNYvNs');
$admin = "8157453806"; 
$kanali = "https://t.me/+OBHNixmXBTFlM2Qy";

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY💴 - " . $val->Rate . " sum\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " sum\n";
           }
       }
      return $response;
   }   function Parse($p1, $p2, $p3) {
$num1 = strpos($p1, $p2);
if($num1 === false) return 0;
$num2 = substr($p1, $num1);
return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
$String = file_get_contents('http://obhavo.uz/namangan');
$tt = '<h2>'.Parse($String, '<h2>', '</h2>').'</h2><div class="current-day">'.Parse($String, '<div class="current-day">', '</div>').'</div>
<div class="current-forecast">
            	<span><img src="http://obhavo.uz/images/icons/partlycloudy.png" /></span> <span><strong>'.Parse($String, '<div class="current-forecast">', '</div>').'</strong></span></div><div class="current-forecast-desc">';
$ttt = Parse($String, '<div class="current-forecast-desc">', '</div>').'</div>';

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$fromid=$update->message->from->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="Qitmirxonbot";
$soat = date('H:i', strtotime('2 hour'));
$sana = date('d-M Y',strtotime('2 hour'));
$sana2 = date('z',strtotime('2 hour'));
$gmt = date('O',strtotime('2 hour'));
$oynomi = date('F',strtotime('2 hour'));
$buoy = date('t',strtotime('2 hour'));
$message = $update->message;
$description = $message->chat->description;
$rasm = $message->chat->photo;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$description = $message->chat->description;
$fadmin = $message->from->id;
$from_id=$update->message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$show=file_get_contents("lang/$fromid/lang.txt");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");
mkdir("lang");
mkdir("text");

$update = json_decode(file_get_contents('php://input'));
$ufname = $efede['message']['from']['first_name'];
$uname = $efede['message']['from']['last_name'];

$channel = $update->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id;
$channel_id = $channel->chat->id;
$channel_user = $channel->chat->username;
$chanel_doc = $channel->document;
$chanel_video = $channel->video;
$channel_audio = $channel->audio;
$channel_audioTitle = $channel_audio->title;
$message_ch = $update->channel_post;
$message_ch_photo = $message_ch->photo;
$channel_id = $channel->chat->id;
$channel_poto = $channel->photo;

$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$type = $message->chat->type;
$text = $message->text;
if($type=="supergroup" or $type=="group"){
    $ex = $msgs[$text];
$ex = explode("|",$ex);
    $txt = $ex[rand(0,count($ex)-1)];
bot("sendmessage",[
	'chat_id'=>$message->chat->id,
	'text'=>"$txt",
	'reply_to_message_id'=>$mid
	]);
}


$filee = "coin/$cid.step";
$folder = "coin"; 
$folder2 = "azo"; 

if($replytx){
    if($type=="supergroup"  or $type=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
	
}
}
if($text=="/tozalan"){
unlink("msgs.json");
bot("sendmessage",[
"chat_id"=>$cid,
"text"=>"tozalandi"
]);
}

if($text=="/doc"){
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("msgs.json")
]);
}

$us = bot('getChatMembersCount',[
'chat_id'=>$cid
]);
$count = $us->result;

// KANALDAN FORWARD
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

if(isset($chpmesid) and (strtolower($chuser) == strtolower(str_replace("@","",$kanali)))){
unlink("news.dat");
file_put_contents("news.txt",$chpmesid);
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
}
// KANALDAN FORWARD


// SOZLAMA 
if(isset($text1)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"salom"=>"true",
"link"=>"true",
"chats"=>"true",
"media"=>"true",
"kirish"=>"true",
"audio"=>"true",
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Ssalom = $baza["salom"];
$Slink = $baza["link"];
$Schats = $baza["chats"];
$Smedia = $baza["media"];
$Skirish = $baza["kirish"];
$Saudio = $baza["audio"];


$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$cid = $update->inline_query->query;
$description = $update->inline_query->chat->description;
$first_name = $update->inline_query->first_name;
if (mb_stripos($cid,"@") !== false) {
    $user = bot("getchat",[
        'chat_id' => $cid,
    ]);
    $type = $user->result->type;
    $id = $user->result->id;
    $us = bot('getChatMembersCount',[
        'chat_id' => $cid
    ]);
    $count = $us->result;
    if ($type == "channel") {
        bot('answerInlineQuery', [
            'inline_query_id' => $update->inline_query->id,
            'cache_time' => 1,
            'results' => json_encode([[
                'type' => 'article',
                'id' => base64_encode(1),
                'title' => "$cid haqida ma'lumot",
                'input_message_content' => [
    'disable_web_page_preview' => true,
    'parse_mode' => 'markdown',
    'message_text' => "*📡 Kanal useri:* [$cid]\n*👥 A'zolari:* `$count`\n*🆔 Kanal id:* $id\n$description\n$first_name",
],
'reply_markup' => [
    'inline_keyboard' => [
        [
            ["switch_inline_query" => "@", 'text' => "🆔 Aniqlash"]
        ],
        [
            ['text' => '🤖 Botga Kirish', 'url' => 'https://t.me/Mafiyaku_bot']
        ]
    ]
]
            ]]) // <-- json_encode yopilishi
        ]);   // <-- bot('answerInlineQuery', ...) yopilishi
    }
}
//end
if($type=="supergroup"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$cid\ngruppasi haqida ma'lumot",
'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode' => 'markdown',
    'message_text'=>"*📡 Gruppa useri:* [$cid]\n*👥 Gruppa a'zolari*: `$count`\n*🆔 Gruppa id:* $id",
],
'reply_markup' => [
    'inline_keyboard' => [
        [
            ['switch_inline_query' => "@", 'text' => "🆔 Aniqlash"]
        ],
        [
            ['text' => '✅ Botga Kirish', 'url' => 'https://t.me/Mafiyaku_bot']
        ]
    ]
]   // ✅ bu yerga ; qo‘shish kerak emas, lekin pastdagilarni yopish kerak
    ])
]);
}
if($data=="english"){
   bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"*Yozinig📝*
text",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);
mkdir("lang/$from_id");
mkdir("text/$from_id");
file_put_contents("lang/$from_id/lang.txt","english");
}

if(mb_stripos($mtext,"url=") !== false){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"♻*Tayyor*

`http://telegram.me/share/url?$mtext`

*🎓Yaratuvchi:* [@MengliyevBahrom]",
   ]);
 }
if($data and $show == "english"){
   bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);

file_put_contents("text/$from_id/text.txt","$text");
$uos=file_get_contents("text/$from_id/text.txt");

#language English
$English=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=".urlencode($uos)))->text[0];

   bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"$English",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);

unlink("lang/$from_id/lang.txt");
rmdir("lang/$from_id");
#
unlink("text/$from_id/text.txt");
rmdir("text/$from_id");
}


if($chanel_video or $channel_audio or $channel_poto or $chanel_doc or $channel_text){
    
    $export = bot('exportChatInviteLink',[
    'chat_id'=>$channel_id,
    ]);
    $a = $export->result;
    bot('editMessageCaption',[
        'chat_id'=>$channel_id,
        'caption'=>"👇👉Bizga qo'shiling👈👇\n [🌐 @$channel_user] ✅ \n 🆔 : [$channel_mid] \n 🆔 : [$channel_id]",
        'message_id'=>$channel_mid,
        'parse_mode'=> 'Markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"❤Postni yuborish❤", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]],
[['text'=>"❤Do'stlarni chaqirish❤", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user"]],
            ]
        ])
        ]);
}

if(mb_stripos($text1,"@")!==false){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$mid,
 'text'=>"Xabaringiz o‘chirildi❤👍",
]);
}

    if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
      $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
    ]);
    }else{
      $test = "<b>👋Assalomu alekum</b> <a href='tg://user?id=$new_chat_members'>$ism</a> 
😊<b>$title</b> guruhimizga xush kelibsiz!\n👥<b>Guruh a'zolari soni:</b> <b>$count</b>";
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$test,
       'parse_mode'=>'html'
     ]);
   }
    }

if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }
  
    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❗<b>Guruhga faqat adminlar bot qo'shishi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}

   if($data == "reklamaqilish"){
      $ball = file_get_contents("coin/$chat_id2.dat");
      $in = "🕵*Do'stlaringizni taklif qilish uchun ssilka:*➡️ [https://telegram.me/Mafiyaku_bot?start=$chat_id2]

_👤Har bitta taklif qilingan va bu botdan oldin foydalanmagan odamga 50 ochko olasiz!
🔘1000 ochko'ga 1ta gruppa yoki kanal reklama qilishingiz mumkin☑️️_

✅To'plagan ochko'ngiz: $ball";
 bot('editMessageText',[
      'chat_id'=>$chat_id2,
      'message_id'=>$message_id2,
      'parse_mode'=>'markdown',
      'text'=>$in,
      ]);
    }

if($text1 == "/start" or $text1 == "/startQITMIRBEK_ROBOT"){
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $chat_id) !== false){ 
  }else{
    $bgun = file_get_contents("bugun.$kun1");
    $bgun += 1;
    file_put_contents("bugun.$kun1",$bgun);
  }

  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanali,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=> $tekshir,
  ]);
  }
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,"$chat_id") !== false ){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"Гирром килиш яхши эмас",
      ]);
    } else {

      $id = "$chat_id \n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);

      $usr = file_get_contents("coin/$refid.dat");
$usr = $usr + 50; 
      file_put_contents("coin/$refid.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refid,
'text'=>"Достигизни таклиф килганиз учун 50 очко берилди 👏🏻
яна достларизни таклиф килинг ✌🏻",
      ]);
    }
  }

  file_put_contents("coin/$cid.dat");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mesid,
  'parse_mode'=>'markdown',
  'text'=>$start1,
  'reply_to_message_id' => $mesid,
]); 
bot('sendPhoto',[  
'chat_id'=>$chat_id,  
'photo'=>new CURLFile("uzx.jpg"),  
'caption'=>"Biz bilan birga boling doyimo hizmatizdamiz 😉 Albatta @MengliyevBahrom", 
]);  
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$chat_id,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$baza=file_get_contents("stat/user.list");
if(mb_stripos($baza,$chat_id)!==false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"👋*Assalomu alekum $first_name 

📡Botdan to'liq foydalanish uchun ro'yhatdan otishingiz kerak\n
Jinsingizni tasdiqlang!*",
'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'👨‍🎓Erkak', 'callback_data' => "Jinsi: 👨‍🎓Erkak"],['text'=>'👩‍🎓Ayol', 'callback_data' => "Jinsi: 👩‍🎓Ayol"]],
]   
])
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "⚜*Salom $name
Mening ismim Qitmirbek dostlarim esa Qitmir deb chaqirishadi!\n\n❤ Men guruhlarda gaplasha olaman va  guruh adminlari uchun qulay bo‘lgan  buyruqlar orqali guruhni boshqarishga ko‘maklashaman!*\n
📃*Men xuddi insonga o'xshayman guruhga qo'shsangiz ko'plab so'zlar yodlayman yana odam deb o'ylamang!*\n
*🆔Men yana inline rejimda kanal va gruppa haqida ma'lumot ham beraman sinab ko'rish tugmasi orqali tekshirib ko'rishingiz mumkin*\n\n❤*Admin xaqida:* @BOLAJAK_STUDENTT
💰*Search music:* [@Muztv_tntmisicru_music_bot]
😈*Yaratuvchi:* [@MengliyevBahrom]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🛠Buyruqlar', 'callback_data' => "stat"],['text'=>'📊Statistika', 'callback_data' => "stat1"]],
       [['text'=>'📡Reklama berish', 'callback_data'=> "reklama"],['text'=>'🤖 Botlarimiz', 'callback_data'=> "botlarimiz"]],
       [['text'=>'🌟Yangiliklar','callback_data' => "uzim"],['text'=>'👨‍💻Admin','callback_data' => "a"]],
          [['text' =>'📋Malumot','callback_data'=>"malumot"],['text'=>'🎮Foydali bolim','callback_data'=>"foydali"]],
  [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/Mafiyaku_bot?startgroup=new']]
]   
]),
]);
}
}
}

$callfname = $update->callback_query->from->first_name;
$calluname = $update->callback_query->from->last_name;

if(mb_stripos($data,"Jinsi:")!==false){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=> "*📃Yoshingizni kiriting*",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'10-15','callback_data'=>"🎓Yoshi: 10-15"]],
[['text'=>'15-20','callback_data'=>"🎓Yoshi: 15-20"],['text'=>'25-30','callback_data'=>"🎓Yoshi: 25-30"]],
[['text'=>'30-35','callback_data'=>"🎓Yoshi: 30-35"],['text'=>'35-50','callback_data'=>"🎓Yoshi: 35-55"]],
]
]),
]);
  bot('sendmessage',[
    'chat_id'=>$admin,
'parse_mode'=>"markdown",
    'text'=>"🎓*Foydalanuvch: $callfname $calluname 
$data $data*",
    ]);

}

if(mb_stripos($data,"🎓Yoshi:")!==false){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
'text'=> "⚜*Salom $name
Mening ismim Qitmirbek dostlarim esa Qitmir deb chaqirishadi!\n\n❤ Men guruhlarda gaplasha olaman va  guruh adminlari uchun qulay bo‘lgan  buyruqlar orqali guruhni boshqarishga ko‘maklashaman!*\n
📃*Men xuddi insonga o'xshayman guruhga qo'shsangiz ko'plab so'zlar yodlayman yana odam deb o'ylamang!*\n
*🆔Men yana online rejimda kanal va gruppa haqida ma'lumot ham beraman sinab ko'rish tugmasi orqali tekshirib ko'rishingiz mumkin*\n\n❤*Admin xaqida:* @MengliyevBahrom
💰*Search music:* @Muztv_tntmisicru_music_bot
😈*Yaratuvchi:* @MengliyevBahrom",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🛠Buyruqlar', 'callback_data' => "stat"],['text'=>'📊Statistika', 'callback_data' => "stat1"]],
       [['text'=>'📡Reklama berish', 'callback_data'=> "reklama"],['text'=>'🤖 Botlarimiz', 'callback_data'=> "botlarimiz"]],
       [['text'=>'🌟Yangiliklar','callback_data' => "uzim"],['text'=>'👨‍💻Admin','callback_data' => "a"]],
            [['text' =>'📋Malumot','callback_data'=>"malumot"],['text'=>'🎮Foydali bolim','callback_data'=>"foydali"]],
  [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/Mafiyaku_bot?startgroup=new']]
]   
]),
]);
  bot('sendmessage',[
    'chat_id'=>$admin,
'parse_mode'=>"markdown",
    'text'=>"🎓*Foydalanuvch: $callfname $calluname 
$data $data*",
    ]);
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}

if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📊Siz Statistika bo'limidasiz",
      'show_alert'=>true
        ]);
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('2 hour'));
$bugun = date('d-M Y',strtotime('2 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
       'text'=> "📊<b>Bot foydalanuvchilari:</b>
    
🌎 <b>Hammasi:</b> <b>$obsh</b>
├👤: <b>$us</b>
└👥: <b>$gr</b>

👤 - <b>Foydalanuvchilar</b>
👥 - <b>Guruhlar</b>

<b>📆 $bugun ⏰ $soat</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'♻Yangilash', 'callback_data' => "statistika"]],
  [['text'=>'🔙Orqaga', 'callback_data' => "back"]],
  [['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/Mafiyaku_bot?startgroup=new']]
]
]),
]);
}

if($data=="statistika"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🌎 Hammasi: $obsh
├👤: $us
└👥: $gr

👤 - Foydalanuvchilar
👥 - Guruhlar
📆 $bugun ⏰ $soat",
      'show_alert'=>true
        ]);
}

if($data=="foydali"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🎮Siz foydali bo'limdasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=> "❤*Siz foydali bo'limdasiz
📃O'zingizga kerakli bo'limni tanlang:*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'⛅Obu Havo☁','callback_data'=>"obhavo"]],
[['text'=>'💸Valyutalar💰','callback_data'=>"kurs"]],
[['text'=>'📃Tezkor yangiliklar📄','callback_data'=>"yan"]],
[['text'=>'🎁Yangi yilga qolgan vaqt🎄','callback_data'=>"new"]],
[['text'=>'🌍Vaqt mintaqasi🌐','callback_data'=>"vaqt"]],
[['text'=>'🔁 Tarjimon 🔄','callback_data'=>"tarjimon"]],
[['text'=>'🔙Orqaga ','callback_data'=>"back"],['text'=>'❤Tarqatish❤','url'=>'http://telegram.me/share/url?url=https://t.me/Mafiyaku_bot']]
]
]),
]);
}

if($data=="tarjimon"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "Siz tarjimon bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Ushbu bo'lim orqali istalgan so'zni 2ta tilga tarjima qila olasiz",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'English','callback_data'=>"english"]],
[['text'=>'Uzbek','callback_data'=>"uzbek"]]
]
]),
]);
}

if($data=="obhavo"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "𓻅Siz obhavo ma'lumoti bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=> "⛅*Ushbu bo'lim orqali obhavo haqida ma'lumot olasiz
😎O'zingizga kerakli shaharni tanlang:*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'⛅Andijon☁','callback_data'=>"ano"],['text'=>'⛅Namangan☁','callback_data'=>"obn"]],
[['text'=>'⛅Toshkent☁','callback_data'=>"tosh"],['text'=>'⛅Fargona☁','callback_data'=>"fer"]],
[['text'=>'⛅Samarqand☁','callback_data'=>"sam"], ['text'=>'⛅Urganch☁','callback_data'=>"ur"]],
[['text'=>'⛅Buxoro☁','callback_data'=>"buh"],['text'=>'⛅Guliston☁','callback_data'=>"gul"]],
[['text'=>'⛅Zarafshon☁','callback_data'=>"zar"],['text'=>'⛅Navoiy☁','callback_data'=>"nav"]],
[['text'=>'⛅Nukus☁','callback_data'=>"nuk"],['text'=>'⛅Jizzax☁','callback_data'=>"jiz"]],
[['text'=>'⛅Qarshi☁','callback_data'=>"qar"],['text'=>'⛅Xiva☁','callback_data'=>"xiv"]],
[['text'=>'⛅Termiz☁','callback_data'=>"ter"],['text'=>'📡Bahromjon','url'=>'https://telegram.me/MengliyevBahrom']],
[['text'=>'🔙Orqaga','callback_data'=>"foydali"],['text'=>'❤Tarqatish❤','url'=>'http://telegram.me/share/url?url=https://t.me/Mafiyaku_bot']]
]
]),
]);
}

if($data=="back"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "❤Siz bosh menyudasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
'text'=> "⚜*Salom $name
Mening ismim Qitmirbek dostlarim esa Qitmir deb chaqirishadi!\n\n❤ Men guruhlarda gaplasha olaman va  guruh adminlari uchun qulay bo‘lgan  buyruqlar orqali guruhni boshqarishga ko‘maklashaman!*\n
📃*Men xuddi insonga o'xshayman guruhga qo'shsangiz ko'plab so'zlar yodlayman yana odam deb o'ylamang!*\n
*🆔Men yana online rejimda kanal va gruppa haqida ma'lumot ham beraman sinab ko'rish tugmasi orqali tekshirib ko'rishingiz mumkin*\n\n❤*Admin xaqida:* [@BOLAJAK_STUDENTT]
💰*Search music:* [@Muztv_tntmisicru_music_bot]
😈*Yaratuvchi:* [@MengliyevBahrom]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'🛠Buyruqlar', 'callback_data' => "stat"],['text'=>'📊Statistika', 'callback_data' => "stat1"]],
       [['text'=>'📡Reklama berish', 'callback_data'=> "reklama"],['text'=>'🤖 Botlarimiz', 'callback_data'=> "botlarimiz"]],
       [['text'=>'🌟Yangiliklar','callback_data' => "uzim"],['text'=>'👨‍💻Admin','callback_data' => "a"]],
        [['text' =>'📋Malumot','callback_data'=>"malumot"],['text'=>'🎮Foydali bolim','callback_data'=>"foydali"]],
  [["switch_inline_query"=>"@", 'text' => "🆔Sinab korish"],['text'=>'👥Guruhga qo‘shish','url'=>'telegram.me/Mafiyaku_bot?startgroup=new']]
]   
]),
]);
}

if($data=="malumot"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📋Siz ma'lumot bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "📃*Botning barcha imkoniyatlarini bilish uchun qo'llanmani o'qib chiqing qo'llanma pastda*",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>'🔙Orqaga qaytish','callback_data'=>"back"]]
]
]),
]);
}



if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}
     
if($data=="stat"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🌐Siz buyruqlar bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "❤<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Del </b> - Bot xabarni o'chiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi;
<b>Leavechat</b> - Bot guruhni tark etadi.

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=8157453806'>Student</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga', 'callback_data' => "back"]],
[['text'=>'🌟Qoshimchalar', 'callback_data' => "uzim"]],
[['url' => 'https://telegram.me/Mafiyaku_bot?startgroup=new', 'text' => "Guruhga Qo‘shish"],],
]
]),
]);
}

if($data=="uzim"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🌟Siz yangiliklar bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🌟<b>Qo'shimcha buyruqlar</b>

<b>/bot</b> va so'z - Keep Calmga yozish
<b>/love</b> va so'z - I Love ga yozish
<b>/screen</b> saytnomi - saytni rasmga olish
<b>/rasm</b> - Ushbu buyruq orqali profilingizdagi rasmni ko'ra olasiz
<b>/malumot</b> - Bot admini, guruh va siz haqingizda ma'lumot beradi
<b>url=</b> va so'z - Share ssilka tayyorlash
<b>/sozlamalar</b> - Botni guruhga sozlash 
<b>/admin </> - Admin haqida bilish uchun buyruq

<b>/id</b> - Sizning id raqamni aytadi
<b>/gid</b> - Gruppa idini aytadi
<b>/savol</b> va so'z - Bot haqida savol va takliflar
<b>/php</b> va so'z - Adminga xabar yuborish 
<b>soat</b> - Aniq soatni aytadi
<b>sana</b> - Aniq kun va oyni aytadi
<b>status</b> - Statuslar jo'natadi

♻<b>Botimizga</b> <b>yangi funksiyalar</b> <b>qo'shilishda</b> <b>davom etadi!</b>

<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=8157453806'>Bahrom</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga', 'callback_data' => "back"]],
[['url' => 'https://telegram.me/Mafiyaku_bot?startgroup=new', 'text' => "👥Guruhga Qo‘shish"],],
]
]),
]);
}

if($data=="a"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "👤Siz Admin bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "👮*Bot admini va reklama bo'yicha:* [Student](https://t.me/MengliyevBahrom)
💰*Telegramda ishlash:* [Search music](https://t.me/Muztv_tntmisicru_music_bot)

☎️ *Telefon:* +998 906167140\n\n
⏳ *Ish Vaqti:* 08:00 - 22:00\n\n
*Bot yasattirish uchun* [🔏Student](https://t.me/MengliyevBahrom) *bilan narxlarni kelishib oling*",
    'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
 [['text'=>'👨‍💻 Admin','url'=>'https://telegram.me/MengliyevBahrom'],],  
[['text'=>'🔙Orqaga', 'callback_data' => "back"]],
[['url' => 'https://telegram.me/Mafiyaku_bot?startgroup=new', 'text' => "👥Guruhga Qo‘shish"],],
]
]),
]);
}
    
    if($data=="reklama"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📬Siz reklama bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Salom, Siz bizning botimizda reklama joylash imkoniyatiga egasiz marhamat kerakli bo'limni tanlang:* 👇 ",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'📬Xabarnoma','callback_data'=>"habarnoma"], ['text'=>'⚠Qoidalar','callback_data'=>"qoida"]],
[['text'=>'Reklama','callback_data'=>"reklamaqilish"]],
[['text'=>'🔙 Back', 'callback_data'=> "back"]]
]
]),
]);
}

    if($data=="habarnoma"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📬Siz xabarnoma bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*📬Kerakli xabarnoma turini tanlang:* 👇 ",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'👤Userlarga yuborish','callback_data'=>"useruz"]], 
[['text'=>'👥Guruhlarga yuborish','callback_data'=>"guruhuz"]],
[['text'=>'👤User va 👥Guruhlarga yuborish', 'callback_data'=> "userguruh"]],
[['text'=>'🔙Orqaga qaytish','callback_data'=>"reklama"]]
]
]),
]);
}

   if($data =="useruz"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "👤Userlarga reklama yuborish bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*👤Userlarga yuboriladigan xabarnomani narxlari bilan tanishing va buyurtma bering*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'📬Buyurtma berish♻','url'=>"https://t.me/Mafiyaku_bot"],], 
[['text'=>'📃Malumot','callback_data'=>"usermalumot"],['text'=>'🚔Bosh menu','callback_data'=> "back"]],
[['text'=>'🔙Orqaga','callback_data'=>"habarnoma"],['text'=>'Keyingi🔜','callback_data'=>"guruhuz"]]
]
]),
]);
}

   if($data =="guruhuz"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "👥Guruhlargalarga reklama yuborish bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*👤Userlarga yuboriladigan xabarnomani narxlari bilan tanishing va buyurtma bering*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'📬Buyurtma berish♻','url'=>"https://t.me/hakkers_cha_nnelbot"],], 
[['text'=>'📃Malumot','callback_data'=>"guruhmalumot"],['text'=>'🚔Bosh menu','callback_data'=> "back"]],
[['text'=>'🔙Orqaga','callback_data'=>"reklama"],['text'=>'Keyingi🔜','callback_data'=>"userguruh"]]
]
]),
]);
}


if($data=="userguruh"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "👥Guruhlarga va 👤Userlarga reklama yuborish bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*👥Guruhlarga va 👤Userlarga yuboriladigan xabarnomani narxlari bilan tanishing va buyurtma bering*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'📬Buyurtma berish♻','url'=>"https://t.me/Mafiyaku_bot"],], 
[['text'=>'📃Malumot','callback_data'=>"userguruhmalumot"],['text'=>'🚔Bosh menu','callback_data'=> "back"]],
[['text'=>'🔙Orqaga','callback_data'=>"guruhuz"]]
]
]),
]);
}

if($data=="usermalumot"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📬Xabarnoma turi: Userlarga yuborish
💰 Narxi: 15000so'm",
      'show_alert'=>true
        ]);
}

if($data=="guruhmalumot"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📬Xabarnoma turi: Guruhlarga yuborish
💰 Narxi: 20000so'm",
      'show_alert'=>true
        ]);
}

if($data=="userguruhmalumot"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📬Xabarnoma turi: Userlar va Guruhlarga yuborish
💰 Narxi: 40000so'm",
      'show_alert'=>true
        ]);
}

if($data=="qoida"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "⚠Quyidagi turdagi reklamalar qabul qilinmaydi

🔞Pornografik reklamalar 
ℹBehayo reklamalar 
🚫Davlat siyosatiga zid reklamalar
😈 Yolg'ondan yozilgan reklamalar",
      'show_alert'=>true
        ]);
}

if($data=="botlarimiz"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "♻Siz botlarimiz bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Salom, biz yaratgan botlarimiz bilan tanishib chiqing. Sizlarga ham botlar kerak bo‘lsa, bizga murojaat qiling!*\n*Jamoamiz:* [@MengliyevBahrom]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'💰Hacker','url'=>'https://telegram.me/Mafiyaku_bot'],],
   [['text'=>'💝Admin','url'=>'https://telegram.me/Mafiyaku_bot'],], 
    [['text'=>'😈Search music','url'=>'https://telegram.me/Muztv_tntmisicru_music_bot'],], 
    [['text'=>'👨‍💻 Admin', 'callback_data'=> "a"],['text'=>'🔙 Back', 'callback_data'=> "back"]],
]
]),
]);
}


if($text1 == "/buyruqlar" or $text1 == "/buyruqlar@Mafiyaku_bot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$bs = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
  $bss = $bs->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$bss,
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "❤<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Del </b> - Bot xabarni o'chiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi;
<b>Leavechat</b> - Bot guruhni tark etadi.

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\nYana qo'shimcha funksiyalar pastdagi bo'limda mavjud!\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=8157453806'>Student</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga', 'callback_data' => "back"]],
[['text'=>'🌟Qoshimchalar', 'callback_data' => "uzim"]],
[['url' => 'https://telegram.me/Mafiyaku_bot?startgroup=new', 'text' => "👥Guruhga Qo‘shish"],],
]
]),
]);
}
}
// Qo'shimcha funksiyalar

if(mb_stripos($mtext,"/bot") !== false){ 
$soz = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @MengliyevBahrom",
]);
}

if(mb_stripos($mtext,"/love") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0ABy%20%20@BOLAJAK_STUDENTT&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @MengliyevBahrom",
]);
}

$id = $update->message->from->id;
$get = file_get_contents("https://api.telegram.org/bot704207778:AAFsSQcjc3Zr-qV20P_De7NbGsx7O_jtNJQ/getUserProfilePhotos?user_id=$id&limit=99");
$json = json_decode($get);
$photo = $json->result->photos[0][0]->file_id;

if(mb_stripos($mtext,"/rasm" or $mtext,"/rasm2@Mafiyaku_bot") !== false){ 
  bot('sendPhoto',[
       'chat_id'=>$chat_id,
        'photo'=>$photo,
        'parse_mode'=>'markdown',
        'caption'=>"by @MengliyevBahrom",
        'reply_to_message_id'=>$update->message->message_id,
    ]);
}

if(mb_stripos($mtext,"/malumot") !== false){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'html',
'text'=>"📡<b>Nikingiz:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
♻<b>ID:</b> $fadmin
🔰<b>Guruh idi:</b> $chat_id
🔗<b>Username:</b> @$username 
👥<b>Guruh a'zolar soni :</b> $count
📤<b>Guruh nomi:</b> $title
👮<b>Bot admini:</b> <a href='tg://user?id=8157453806'>BAHROM</a>", 
      ]);
   }

if($text1 == "/title"){
bot('setChatTitle',[
'chat_id'=>$chat_id,
'title'=>"$title",
]);
}

if(mb_stripos($mtext,"/screen") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"by @MengliyevBahrom",
]);
}

/// YANGI KOD
if($text1 == "/sozlamalar" or $text1 == "/sozlamalar@Mafiyaku_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️";
}else{
$salom = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️";
}else{
$link = "✅";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️";
}else{
$chats = "✅";
}
$media = $baza["media"];
if($media == "false"){
$media = "☑️";
}else{
$media = "✅";
}

$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️";
}else{
$audio = "✅";
}

$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️";
}else{
$kirish = "✅";
}

file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Lichkangizga yubordim!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"❤ <b>'$title' guruhi sozlamalari!</b>\n\n👇 Sozlash uchun kerakli tugmani bosing!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"M()salom","text"=>"🛎 Salomlashish $salom"],],
[["callback_data"=>"M()link","text"=>"🛎 Linklarni O‘chirish $link"],],
[["callback_data"=>"M()chats","text"=>"🛎 Guruhda Suhbatlashish $chats"],],
[["callback_data"=>"M()media","text"=>"🛎 Gif, Sticker O‘chirish $media"],],
[["callback_data"=>"M()audio","text"=>"🛎 Audio o'chirish $audio"],],
[["callback_data"=>"M()kirish","text"=>"🛎 Kirdi Chiqdilarni o'chirish $kirish"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️";
}else{
$salom = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️";
}else{
$link = "✅";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️";
}else{
$chats = "✅";
}
$media = $baza["media"];
if($media == "false"){
$media = "☑️";
}else{
$media = "✅";
}

$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️";
}else{
$audio = "✅";
}

$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️";
}else{
$kirish = "✅";
}

bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"❤ <b>'$title' guruhi sozlamalari!</b>\n\n👇 Sozlash uchun kerakli tugmani bosing!",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"M()salom","text"=>"🛎 Salomlashish $salom"],],
[["callback_data"=>"M()link","text"=>"🛎 Linklarni O‘chirish $link"],],
[["callback_data"=>"M()chats","text"=>"🛎 Guruhda Suhbatlashish $chats"],],
[["callback_data"=>"M()media","text"=>"🛎 Gif, Sticker O‘chirish $media"],],
[["callback_data"=>"M()audio","text"=>"🛎 Audio o'chirish $audio"],],
[["callback_data"=>"M()kirish","text"=>"🛎 Kirdi Chiqdilarni o'chirish $kirish"],],
]
]),
]);
}
/// YANGI KOD END

   $kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if($data == 'new'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🎄⛄Yangi yilga: $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!",
'show_alert'=>true
]);
    }

    if($data == "vaqt"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📆Bugun: $sana-yil
⏰Soat: $soat
💮Oy nomi: $oynomi
🔯Yilning: $sana2-kuni
🔱Vaqt mintaqasi: $gmt
🌠Bu oy $buoy kundan iborat",
       'show_alert'=>true
        ]);
    }

    if($text1 == "/admin" or $text == "/admin@Mafiyaku_bot"){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🎓 Admin haqida bilish uchun, pastdagi tugmani bosing!",
        'reply_markup'=>json_encode([   
        'inline_keyboard'=>[   
         [['text'=>'🔙Orqaga', 'callback_data' => "/start"]],
            [['text'=>'🎓 Admin', 'callback_data' => "admin"]]
]   
]),
]);
}

    if($data == "admin"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "❤ Bot admini: @MengliyevBahrom\nSizlarga ham botlar kerak bo'lsa, bizga murojaat qiling. Siz istagan botlarni tez, arzon, sifatli va eng asosiysi, arzon narxlar-da yaratib beramiz!",
       'show_alert'=>true
        ]);
    }
               $soat = date('H:i', strtotime('2 hour')); 
$data1 = $update->callback_query->data;   
if($data1 == 'kurs'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>kurs()."\n\nHozir soat⏰: $soat",
'show_alert'=>true
]);
    }

$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
    break;
}  
if($data1 == 'yan'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🆕 $line\n\n⏰Soat : $soat",
'show_alert'=>true
]);
    }

// Obu Havo kodi

if($data1 == 'zar'){ 
$anb9 = file_get_contents('http://obhavo.uz/zarafshan'); 
$ex1=explode("\n",$anb9);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Zarafshon $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
    
if($data1 == 'qar'){ 
$anb10 = file_get_contents('http://obhavo.uz/karshi'); 
$ex1=explode("\n",$anb10);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Qarshi $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
    
if($data1 == 'ter'){ 
$anb11 = file_get_contents('http://obhavo.uz/termez'); 
$ex1=explode("\n",$anb11);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Termiz $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
    
if($data1 == 'ur'){ 
$anb12 = file_get_contents('http://obhavo.uz/urgench'); 
$ex1=explode("\n",$anb12);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Urganch $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
    
if($data1 == 'xiv'){ 
$anb13 = file_get_contents('http://obhavo.uz/khiva'); 
$ex1=explode("\n",$anb13);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Xiva $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
}

if($data1 == 'fer'){ 
$anb1 = file_get_contents('http://obhavo.uz/ferghana'); 
$ex1=explode("\n",$anb1);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Farg’ona $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'tosh'){ 
$anb2 = file_get_contents('http://obhavo.uz/tashkent'); 
$ex1=explode("\n",$anb2);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); $tongr = trim($tongr); 
$oqgr = trim($oqgr); $kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]); 
 $shamol=str_replace('</p>',' ',$shamol);
 $shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]); 
 $qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Toshkent $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'buh'){ 
$anb3 = file_get_contents('http://obhavo.uz/bukhara'); 
$ex1=explode("\n",$anb3);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]); 
 $tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]); 
 $bugun=str_replace('</div>',' ',$bugun);
 $bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]); 
 $shamol=str_replace('</p>',' ',$shamol);
 $shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Buhoro $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n?? $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'gul'){ $anb4 = file_get_contents('http://obhavo.uz/gulistan'); $ex1=explode("\n",$anb4);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]); 
 $kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]); 
 $tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]); 
 $shamol=str_replace('</p>',' ',$shamol);
 $shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb);
 $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Guliston $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'jiz'){ 
$anb5 = file_get_contents('http://obhavo.uz/jizzakh'); 
$ex1=explode("\n",$anb5);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]); 
 $bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);
  $shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);
  $qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Jizzah $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'nav'){ 
$anb6 = file_get_contents('http://obhavo.uz/navoi'); 
$ex1=explode("\n",$anb6);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Navoi $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
    
if($data1 == 'nuk'){ 
$anb7 = file_get_contents('http://obhavo.uz/nukus'); 
$ex1=explode("\n",$anb7);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]); 
 $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Nukus $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
    
if($data1 == 'sam'){ 
$anb8 = file_get_contents('http://obhavo.uz/samarkand'); 
$ex1=explode("\n",$anb8);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Samarqand $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'obn'){  
$String = file_get_contents('http://obhavo.uz/namangan');
$ex1=explode("\n",$String);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); $tongr = trim($tongr); 
$oqgr = trim($oqgr); $kungr = trim($kungr);  
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]); 
 $shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);    
 $qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Namangan $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    } 

if($data1 == 'ano'){ 
$anb = file_get_contents('http://obhavo.uz/andijan'); 
$ex1=explode("\n",$anb);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  
$oqgr=str_replace('</p>',' ',$oqgr); 
$tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  
$tongr=str_replace('</p>',' ',$tongr); 
$bugun=str_replace('<div class="current-day">',' ',$ex1[68]); 
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun); 
$tongr = trim($tongr); 
$oqgr = trim($oqgr); 
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  
$havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
$bosim=str_replace('<p>',' ',$ex1[84]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$shamol=str_replace('<p>',' ',$ex1[83]);  
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$oy=str_replace('<p>',' ',$ex1[87]);  
$oy=str_replace('</p>',' ',$oy); 
$oy=str_replace('&#039;','`',$oy); 
$oy= trim($oy);    
$qch=str_replace('<p>',' ',$ex1[88]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[89]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  
$gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2); 
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Andijon $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if((stripos($mtext,"latifa")!==false) or (stripos($mtext,"латифа")!==false)){
    $latif = file_get_contents("latifa.txt");
  $latifa = explode("✅",$latif);
  $soz = $latifa[rand(0,count($latifa)-1)];
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

		if(stripos($mtext,"soat") !== false){
		$soat = date('H:i', strtotime('2 hour'));
  $text = "⏰O'zbekistonda hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"sana") !== false){
        $bugun = date('d-M Y',strtotime('2 hour'));
  $text = "📆O'zbekistonda bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*🆔Sizning idingiz:* $fadmin";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*🆔Guruh idi:* $chat_id";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(isset($doc) or isset($gif)){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}
}

if((stripos($mtext,"Zo‘r") !== false) or (stripos($mtext,"yaxshi")!==false) or (stripos($mtext,"Zor")!==false) or (stripos($mtext,"Zo'r")!==false)){
  $name = $message->from->first_name;
  $input = array("Qayerdansiz?","Juda  yaxshi😁","👍","Ok.","Qaysi viloyatdansiz?", "Nima uchun","Har doim shunday bo'lsin.","Qayerliksiz?");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Andijon")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoq")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"qo‘qonl")!==false) or (stripos($mtext,"Qo'qon")!==false) or (stripos($mtext,"Pop")!==false) or (stripos($mtext,"Archabuloq")!==false)){
$input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"hmm") !== false) or (stripos($mtext,"xmm")!==false)){
  $name = $message->from->first_name;
  $input = array("Nega  hmm deysiz gapiring","Hmmmmmmmmmm","Nima hmm?","😂","Zeriktizmi?","Negadur zerikdim", "Tinchlikmi?","Mb kam qoldimi deyman😁","Qayerliksiz?");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"tinchlikmi") !== false)){
  $name = $message->from->first_name;
  $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Student") !== false) or (stripos($mtext,"Studentt")!==false) or (stripos($mtext,"Student")!==false)){
  $name = $message->from->first_name;
  $input = array("Adminga xabar yozish uchun /php dan so'ng xabaringizni qoldiring","Adminga /php dan so'ng xabar yozing admin albatta ko'radi");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Oltinvodiy") !== false) or (stripos($mtext,"izminka")!==false) or (stripos($mtext,"yagona")!==false)){
  $name = $message->from->first_name;
  $input = array("😉Ha oltinvodiyda dam ogiz keldimi yuring menam birga boraman","😑Hozi izminka sovuq nimaga gapirdiz","👍yagona meni yaratuvchimni shaxsiy bari boringlar zur joy");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"/php") !== false) or (stripos($mtext,"/php")!==false) or (stripos($mtext,"/php")!==false)){
  $name = $message->from->first_name;
  $input = array("😄Voy axmoq xabar qoldiring desam qoldiripti","👮Uzr lekin adminimiz xabarni o'qimadi");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"ozidan") !== false) or (stripos($mtext,"o'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"sentridan")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Andijon")!==false)){
$input = array("Voy,men ham Andijonlik","Hamqishloq ekanmiz☺","Men ham eski shahardanman😊","Qayeridan?","Bitta joydan ekanmiz");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"yog'e")!==false)){
$input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"😉Assalomu alaykum hojayin gruppa tinch",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Assalom","Salom $name ,guruhimiz sizga yoqtimi?","Salom, ismiz nima?","Assalomu alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Vaalaykum salom,baxtli bo‘ling😊.","Yaxshimisiz $name,namuncha ko‘rinmay ketdiz?", "Juda sersalom ekansiz☺", "Assalomu aleykum.", "Salom $name.", "Iye keling,endi sizni eslab turgandik","Ana,yana bitta kampot keldi😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom beruras","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim.Tringlab hech qoymagan telegramda chap qo‘lim🤣🤣🤣","Sizni ko‘radigan kun ham  bor ekanu!","Salom,yaxshimisiz?","Qaleysiz?","Assalomu aleykum hojayin😉 Ishlar qaley?","Sava","Привет ","Hello $name,qaleysiz?","Salom.Nik daxshatu a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqda to‘g‘ri shu yerga kelevering,ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam,garov haqida unuting😆","Bolla, qizla bitta fikr bor!","Keling,sizni ham ko‘radigan  kun  bor ekanu");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }

if(stripos($mtext,"kimni") !== false){
  $input  = array("Bilmasam?","katta holangni😂","Bugun havo zoru a?","Men bilmayman");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}


if(stripos($mtext,"qanaqa") !== false){
  $input  = array("Man qayerdan bilay?","Hech qanaqa😆","Shunaqa","Bilmasam");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"qaleys") !== false) or (stripos($mtext,"qaleysiz")!==false)  or (stripos($mtext,"qaliysan")!==false) or (stripos($mtext,"qaneysan")!==false)  or  (stripos($mtext,"qanneysan")!==false)){
  $input = array("Chotki😁","Zo‘r", "Zo‘r,o‘zizchi?","Kechagidan  yaxshi😁","Yaxshi,so‘raganingiz uchun rahmat!", "Norm", "Zo‘r o‘zizchi?", "Chidasa bo‘ladi👌");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"QITMIRBEK") !== false) or (stripos($mtext,"Qitmir") !== false) or (stripos($mtext,"Asalim") !== false) or (stripos($mtext,"Jonim")!==false)){
  $input = array("Qaleysiz?","Har zamonda bir yozib turingda siz ham","Uydagilar uylanasan deb qoymayapti","Glavnizdagi rasm 👍","Bugun hamma jim negadur","Shu ismimni deb hamma meni topolonchi deb o'ylaydi😜","Admin ko'rinmaydimi???","Mb iz kam qopti😂", "Men shu yerdaman.", "Hov", "Shunaqa chaqirishiz juda ham yoqadida☺️", "Nima?", "Menda ishiz bormi?", "Hozir kimdur meni esladimi?","Tinchgina “ужин” qilishga ham qoyishmaydiye bular","Qulog‘im  sizda!","Labbay!","Eshitaman","Hozi kelaman mb kam qopti","Salom  biror nima kerakmi?","Shu ismni qayerdadur eshitganmanda🤔","Ana kapitan");
  $rand=rand(0,14);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"rahmat")!==false) or (stripos($mtext,"raxmat")!== false)){
  $input = array("😊Arzimaydi","Arziysiz","😊","Rahmatga hojat yo‘q☺");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"kimman") !== false){
  $name = $message->from->first_name;
  $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘ziz  bilmasaiz men qayerdan bilay?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi😢","N1","Kapitan","Ponchik","Kunfu panda","Kim tan.Shu serialni kim  ko‘rgan?","Kim bo‘lsangiz  ham  avvalo inson bo’ling!","Bruslini  quritilgani😂","Boyvacha","Eng zo‘risiz","Man  qayerdan bilay");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"kimsan")!== false){
  $name = $message->from->first_name;
  $input = array("N1","Shu savolni eshitsam negadur nikimga hech nima yozilmagan ekan degan hayolga boraman!?.","Hazilkash robotcha!","kim deb o‘ylaysiz?","Traktorchi Abdusatorni qo‘shinisi Sobirni amakivachasiga boja bo‘lgan G‘anisher degan aka boru, o‘sha moshiniga tonirofka qildiribdi😜","Kapitan Telegram","Qitmirman, yana Miki bilan adashtirib yubormeng😂","Sirliman🎩","O‘ziz kimsiz?","Har doim shu savolni  beruvirib charchamadizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz!?","Menmi?","Nima edi😡...Vux qo‘rqib ketdiza?","QITMIRBEK😉,","Gruppani adminiman!");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"Status")!==false) or (stripos($mtext,"status")!== false)){
  $input = array("😐Voy status esdan chiqti","Yaxshi status yupkaga oxshashi kere etiborni tortadigan darajada kaltaligi bilan @MengliyevBahrom","Bu dunyoda dardingni hatto qalamga ham aytma srazi borib qogozga sotadi @MengliyevBahrom","Qiziq a... 
Inson yerga yiqilsa kulamiz
Iphone yerga tushib ketsa achinamiz. @MengliyevBahrom","Kimdur manda qalesan ?
Axvollaring qale ?
Ishlaring joyidami ?
deb so'rashsa yuzimda tabassum bilan
Hammasi yaxshi hammasi joyida
deb javob beraman
Lekin kimdur kozlarimga qarab togrisini ayt deyishini xolardim @MengliyevBahrom","Yurak suyaksiz ammo eng kop sinadigan ham YURAKDIR @MengliyevBahrom","Dunyoda aytish qiyin bolgan eng uzun va qiyin beshta soz bor. Mana ular : 
1.Sinxrofazotron. 
2.Fenolftalein.
3.Dixlordifeniltrixloretan.
4.Tetragidrokannabinol. 
5. Eng qiyini va kopchilik talafuz qila olmaydigon soz bu KECHIRING @MengliyevBahrom","Dunyoda achchiq bomasa shirinni qadri yoq! @MengliyevBahrom","ALLOH AYTADI
Agar bandam menga bir qadam yursa men ikki qadam yuraman, Agar bandam mega qarab yurib kelsa men yugurib boraman. @MengliyevBahrom","AyriM InsonlanI YaqindaN BilganiM SarI ItlagA BogaN MexriM OshvottI @MengliyevBahrom","FuUuUu blin 
Ishi tushsa  typing
Ishi tushmasa online @MengliyevBahrom","Hayot yurak chizmasiga o'xshaydi, Agar bir tekkis chiziqaa aylansa bu sening o'lganingni anglatadi !!!...... @MengliyevBahrom","Osmon musaffoligiga sabab u yerda odamlar yashamaydi... @MengliyevBahrom","Qanotlaringga kuch yig'may turib Xayotda baland parvoz qilma! Chunki balanddan sho'ng'ishning oqibati ayanchli.. @MengliyevBahrom","Haqiqiy yigit sevgani haqida boshqalarga so'zlab bermaydi. @MengliyevBahrom");
  $rand=rand(0,30);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((mb_stripos($mtext,"/savol") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"Xabaringiz meditorlarga yetkazildi!",
]);
}
if((mb_stripos($mtext,"/savol") !== false) or (mb_stripos($mtext,"Ahror")!==false) or (stripos($mtext,"Ахтамов")!==false) or (mb_stripos($mtext,"Shavkat")!==false) or (mb_stripos($mtext,"Шавкат")!==false)){ 
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b>$chat_id<b>) guruhidan taklif:</b>\n<code>$mtext</code>\n  <b>Xabarchi  haqida  ma'lumotlar: </b>
👤<b>Ismi:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
🆔<b>ID</b>si: $fadmin
🔅<b>Usernamesi:</b> @$username ", null, false
      ]);
   }
   
   if((mb_stripos($mtext,"#STUDENT") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"Xabaringiz adminga yetkazildi!",
]);
}
if((mb_stripos($mtext,"#zed") !== false) or (mb_stripos($mtext,"/zed")!==false)){
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b>$chat_id<b>) guruhida sizni eslashdi:</b>\n<code>$mtext</code>\n  <b>Xabarchi  haqida  ma'lumotlar: </b>
👤<b>Ismi:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
🆔<b>ID</b>: $fadmin
🔅<b>Username:</b> @$username ", null, false
      ]);
   }

  if((stripos($mtext,"reo")!==false) and $fadmin == $admin){
      $sx=explode("\n",$mtext);
      $useid = $sx[2];
      $chatidsi  = $sx[1];
      $vaqti = $sx[3];
      $minut = strtotime("+$vaqti minutes");
   bot('restrictChatMember', [
      'chat_id' => "-$chatidsi",
      'user_id' => $useid,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❤ <a href='tg://user?id=$useid'>Foydalanuvchi</a> -$chatidsi guruhida <b>$vaqti</b> ga <b>Read only</b> rejimiga tushdirildi!",
      'parse_mode' => 'html'
  ]);
}

  if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
  $input = array("Ok!!!","Nok🍐","Sok","👌","Tok⚡","😏","☺","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if($text1 == "ro" or $text1 == "Ro" or $text1 == "RO" or $text1 == "/ro@Mafiyaku_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+99999999999999 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❤ <a href='tg://user?id=$id'>$from_user_first_name</a> siz <b>Read only</b> rejimiga tushirildingiz!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "Kick"  or  $text1 == "kick"  or $text1 == "/kick" or $text1 == "/kick@Mafiyaku_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❤ <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>Kick</b> bo‘ldi!",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="Banan" or $text1 == "Xayr" or $text1 == "Ban"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "❤ <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldingiz!",
        'parse_mode'=>'html'
    ]);
  }

  if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"bot?start=")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
  if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
  }else{
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
    $minut = strtotime("+120 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mid,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "❤ <a href='tg://user?id=$fadmin'>$first_name</a> siz <b>2 soat</b>ga <b>Read only</b> rejimiga tushdingiz.\n⚠ <b>Sabab:</b> <i>Reklama!</i> ",
        'parse_mode' => 'html'
    ]);
}
}
  }

    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"Axmoq")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"скаман")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"чумо")!==false)  or  (stripos($mtext,"далбаёб")!==false) or  (stripos($mtext,"скай")!==false) or (stripos($mtext,"секс")!==false) or (stripos($mtext,"далбан")!==false) or (stripos($mtext,"йибан")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"жалаб")!==false) or (stripos($mtext,"кутинга")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"куток")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"хуй")!==false) or (stripos($mtext,"сучка")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"омини")!==false) or (stripos($mtext,"омнга")!==false) or  (stripos($mtext,"сикаман")!==false)  or  (stripos($mtext,"гандон")!==false) or  (stripos($mtext,"сука")!==false) or (stripos($mtext,"жопа")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+10800 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "❤ <a href='tg://user?id=$fadmin'>$first_name</a> <b>3 kun</b>ga <b>Read only</b> rejimiga tushdirildi.\n⚠ <b>Sabab:</b> <i>Haqorat qildi!</i> ",
        'parse_mode' => 'html'
    ]);
}
}

 if($text1 == "Addpm" or $text1 == "addpm" or $text1 == "/addpm@Mafiyaku_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "Delpm" or $text1 == "delpm" or $text1 == "/delpm@Mafiyaku_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> siz endi guruh adminstratori <b>emassiz</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "Unro" or $text1 == "UNRO" or $text1 == "unro" or $text1 == "/unro@Mafiyaku_bot"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>\nEndi qoidani <b>buzmaysiz</b> degan umiddaman❗️",
    'parse_mode'=>'html'
  ]);
}
}

if($text1=="Pmadd"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}

if($text1=="Pmme"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$admin,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if($text1=="Pmu"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if ($text1=="Del"&&$fadmin==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

if($text1 == "pin" or $text1 == "Pin" or $text1 == "/pin" or $text1 == "/pin@Mafiyaku_bot" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}



if((stripos($mtext,"Sw")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"✅",
       ]);
  }
  

 if($text1 == "Del" or $text1 == "/del" or $text1== "del" or  $text1 == "/del@Mafiyaku_bot"){
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

 if($text1 == "ban" or $text1 == "Ban" or $text1== "/ban@Mafiyaku_bot" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "❤ <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldi!",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "Unban" or $text1 == "/unban" or $text1== "/unban@Mafiyaku_bot" or  $text1 == "unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "❤ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi!",
        'parse_mode'=>'html'
    ]);
}
}

 if($text1 == "Warn" or $text1 == "warn" or $text1== "/warn@Mafiyaku_bot" or  $text1 == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq bo‘ldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+10800000 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

 if($text1 == "Unwarn" or $text1 == "unwarn" or $text1== "/unwarn@Mafiyaku_bot" or  $text1 == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}

$replyik = $message->reply_to_message->text;
    $yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text1 == "/send" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
       if($text1 == "/sendg" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
    ?>
