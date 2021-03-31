<?php
ob_start();
$API_KEY = "TUIT.RU";  /////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
define('API_KEY',$API_KEY);/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
}else{
return json_decode($res);
} 
}/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$cid = $message->chat->id;
$cid= $message->from->id;
$cid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$mid = $message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
mkdir("Malumotlar");/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$soatsad = date('H:i:s', strtotime('0 hour'));
///////////////////////////////////////////////
$s1=  "1-✅";
$s2=  "2-✅️";
$s3=  "3-✅️";
$s4=  "4-✅️";
$s5=  "5-✅️";/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$s6=  "6-✅️";
$s7=  "7-✅️";
$s8=  "8-✅️";
$s9=  "9-✅️";
$s10= "10-✅️";
//////////////////////////////////////////
$p1=  "1-❌";/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$p2=  "2-❌";
$p3=  "3-❌";
$p4=  "4-❌"; 
$p5=  "5-❌"; 
$p6=  "6-❌";
$p7=  "7-❌";
$p8=  "8-❌";
$p9=  "9-❌";/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$p10= "10-❌";
////////////////////////////////////////////

  $yangilash =json_encode([
			'keyboard'=>[
			   [['text'=>'🥳Boshlash']],
		    	[['text'=>'Natijalar']],
				
			]
  ]);  
////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$soat = date('H:i:s', strtotime('0 hour'));
if($text  == '/start' or $text == 'Bosh sahifa'){
bot('sendmessage',[
  'chat_id'=>$chat_id ,
  'text'=>"👋Assalomu alaykum!!!!!",
  'reply_markup'=>$yangilash,
  'parse_mode'=>'markdown'
  
  ]);
}
///////////////////////////To'g'ri javob////////////////////////
//////////////////////////1- savol//////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
$baza = file_get_contents("Malumotlar/$chat_id/$chat_id.text");
$soatsad = date('H:i:s', strtotime('0 hour'));
if($text  == '🥳Boshlash'){
    file_put_contents("Malumotlar/$chat_id/soat1221.text","$soatsad");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"1.빈칸에 들어갈 가장 알맞은 것을 고르십시오.
새 직장을 구하기 어려울 때 고용센터를__________ 좋은 직장을 구할 수 있습니다. ",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"권하면"]],[['text'=>"권하고"]],
       [['text'=>"통하면"]],[['text'=>"통하고"]],
]
       ])
  ]);
}/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
//////////////////////////2- savol/////////////
if($text  == '통하면'){
 file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$s1");
    file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "\n1");
       $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"2. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.
이사하는 날에는 너무 바쁘고 정신이 없어서 중요한 물건들을 챙기기 어렵습니다. 그래서 귀중품들을 미리 언니에게  __________.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"맡겨도 됩니다"]], [['text'=>"맡겨 두었습니다"]],
       [['text'=>"빌려도 됩니다"]], [['text'=>"빌려도 됩니다"]],
]
       ])
  ]);
}

//////////////////////////3- savol//////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == '맡겨 두었습니다'){
 
file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n2");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s2");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"3. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.              
외국인상담소에 가면 한국 여행에 대한 정보를 얻을 수 있습니다. 게다가 외국인상담소를 통해서 여행을 가면 여행비를 할인 받아서__________다녀올 수 있습니다.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"저렴하게"], ['text'=>"조용하게"]],
       [['text'=>"저렴하거나"], ['text'=>"조용하거나"]],
]
       ])
  ]);
}

//////////////////////////4- savol//////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == '저렴하게'){
 
   file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n3");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s3");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"4. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.                                   
 김치찌개를 만들려면 먼저 냄비에 김치하고 돼지고기를  __________볶습니다. 볶은 재료에 물을 붓고 끓이면 김치찌개가 완성됩니다.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
      [['text'=>"넣고"]], [['text'=>"넣으려고"]],
       [['text'=>"놓고"]],[['text'=>"놓으나"]],
]
       ])
  ]);
}

/////////////////////////5- savol////////////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == '넣고'){
  file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n4");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s4");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"5. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.              
   가：요즘 주말에 할 일이 없어서 너무____________. 뭐 재미있는 일 없을까요? 
      나：글쎄요. 저도 주말에는 보통 집에서 낮잠을 자거나 텔레비전을 보는데요.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"귀찮아요"], ['text'=>"심심해요"]],
       [['text'=>"반가워요"], ['text'=>"즐거워요"]],
]
       ])
  ]);
}

//////////////////////////6- savol/////////////////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == '즐거워요'){
    if($malumotlar_id !=$chat_id){
   file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n5");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s5");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"6. “Jaloliddin Manguberdi” ordeni tasis etilgan sanani aniqlang.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"1999-yil 5-noyabr"]], [['text'=>"1999-yil 30-aprel"]],
       [['text'=>"2000-yil 16-may"]], [['text'=>"2000-yil 30 avgust"]],
]
       ])
  ]);
}
}
//////////////////////////7- savol/////////////////////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == '2000-yil 30 avgust'){
   
    file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n6");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s6");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
     'text'=>"7. 2012-yilda O'zbekiston va Korea munosabatlarining necha yilligi nishonlangan?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"15-yiligi"]], [['text'=>"18-yilligi"]],
       [['text'=>"20 yilligi"]], [['text'=>"23-yilligi"]],
]
       ])
  ]);
}

//////////////////////////8- savol/////////////////////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == "20 yilligi"){
  
    file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n7");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s7");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"8. Mo'g'inlar nechanchi yilda Koryoga bostirib kirgan?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"1231-yil"]], [['text'=>"1238-yil"]],
       [['text'=>"1260-yil"]], [['text'=>"1300-yil"]],
]
       ])
  ]);
}

//////////////////////////9- savol//////////////////////////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == '1231-yil'){
  
    file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n8");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s8");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
     'text'=>"9. Koreaning eng baland cho`qqisi qayerda joylashgan?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"Ulsan"]], [['text'=>"Pusan"]],
       [['text'=>"Chejudo"]], [['text'=>"Seul"]],
]
       ])
  ]);
}

//////////////////////////10- savol/////////////////////////////////////////////////////////////////////////////////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN KOD ////////////@infoyoshtexnik kanali uchun 
if($text  == 'Chejudo'){
   
    file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n9");
    file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s9");
    $mod12 = file_get_contents("Malumotlar/$chat_id/baza.$chat_id.text");
     $baza = file_get_contents("Malumotlar/$chat_id/$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"10. O`zbekistondagi eng baland cho'qqi Hazrati sulton necha metrdan iborat?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"3855 m"]],[['text'=>"4643 m"]],
       [['text'=>"4975 m"]],[['text'=>"5210 m"]],
]
       ])
  ]);
}
//******************************xato javoblar**************************************************************
///////////////////////////////notug'rilar ///////////////////////////////////////////////////////////////////
$xatilar_soni = file_get_contents("Malumotlar/$chat_id/xatolar.$chat_id.text");
$xatolar_test = file_get_contents("Malumotlar/$chat_id/$chat_id.xatotext");
///////////////////////////////////////22222222222222222/////////////
if($text  == '권하면' or $text  == "권하고" or $text  == "통하고"){
   
 file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n1");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "Xatolar:\n$p1");    
    $u2 = substr_count($mod12,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
   'text'=>"2. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.
이사하는 날에는 너무 바쁘고 정신이 없어서 중요한 물건들을 챙기기 어렵습니다. 그래서 귀중품들을 미리 언니에게  __________.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"맡겨도 됩니다"]], [['text'=>"맡겨 두었습니다"]],
       [['text'=>"빌려도 됩니다"]], [['text'=>"빌려도 됩니다"]],
]
       ])
  ]);
}

///////////////////////////////333333333333333333333333333333333//////////////
if($text  == '맡겨도 됩니다' or $text  == "빌려도 됩니다" or $text  == "빌려도 됩니다"){
   
file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n2");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p2");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
   'text'=>"3. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.              
외국인상담소에 가면 한국 여행에 대한 정보를 얻을 수 있습니다. 게다가 외국인상담소를 통해서 여행을 가면 여행비를 할인 받아서__________다녀올 수 있습니다.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"저렴하게"], ['text'=>"조용하게"]],
       [['text'=>"저렴하거나"], ['text'=>"조용하거나"]],
]
       ])
  ]);
}
//////////////////////////4- savol//////////////////////////////////////////////////
if($text  == '조용하게' or $text  == "저렴하거나" or $text  == "조용하거나"){
   
    file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n3");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p3");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
   'text'=>"4. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.                                   
 김치찌개를 만들려면 먼저 냄비에 김치하고 돼지고기를  __________볶습니다. 볶은 재료에 물을 붓고 끓이면 김치찌개가 완성됩니다.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
      [['text'=>"넣고"]], [['text'=>"넣으려고"]],
       [['text'=>"놓고"]],[['text'=>"놓으나"]],
]
       ])
  ]);
}

/////////////////////////5- savol////////////////////////////////////////////////////////////
if($text  == '넣으려고' or $text  == "놓고" or $text  == "놓으나"){
  
    file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n4");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p4");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
     'text'=>"5. 빈칸에 들어갈 가장 알맞은 것을 고르십시오.              
   가：요즘 주말에 할 일이 없어서 너무____________. 뭐 재미있는 일 없을까요? 
      나：글쎄요. 저도 주말에는 보통 집에서 낮잠을 자거나 텔레비전을 보는데요.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"귀찮아요"], ['text'=>"심심해요"]],
       [['text'=>"반가워요"], ['text'=>"즐거워요"]],
]
       ])
  ]);
}

//////////////////////////6- savol//////////////////////////////////////////////////////////////
if($text  == '귀찮아요' or $text  == "반가워요" or $text  == "심심해요"){
    
    file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n5");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p5");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
     'text'=>"6. “Jaloliddin Manguberdi” ordeni tasis etilgan sanani aniqlang.",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"1999-yil 5-noyabr"]], [['text'=>"1999-yil 30-aprel"]],
       [['text'=>"2000-yil 16-may"]], [['text'=>"2000-yil 30 avgust"]],
]
       ])
  ]);
}

//////////////////////////7- savol/////////////////////////////////////////////////////////////////////////////////
if($text  == '1999-yil 5-noyabr' or $text  == "1999-yil 30-aprel" or $text  == "2000-yil 16-may"){
  
    file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n6");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p6");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
      'text'=>"7. 2012-yilda O'zbekiston va Korea munosabatlarining necha yilligi nishonlangan?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"15-yiligi"]], [['text'=>"18-yilligi"]],
       [['text'=>"20 yilligi"]], [['text'=>"23-yilligi"]],
]
       ])
  ]);
}

//////////////////////////8- savol/////////////////////////////////////////////////////////////////////////////////////
if($text  == '15-yiligi' or $text  == "18-yilligi" or $text  == "23-yilligi"){
   
    file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n7");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p7");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"8. Mo'g'inlar nechanchi yilda Koryoga bostirib kirgan?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"1231-yil"]], [['text'=>"1238-yil"]],
       [['text'=>"1260-yil"]], [['text'=>"1300-yil"]],
]
       ])
  ]);
}

//////////////////////////9- savol///////////////////////////////////////////////////////////////////////
if($text  == '1260-yil' or $text  == "1300-yil" or $text  == "1238-yil"){
   
    file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n8");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p8");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
     'text'=>"9. Koreaning eng baland cho`qqisi qayerda joylashgan?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"Ulsan"]], [['text'=>"Pusan"]],
       [['text'=>"Chejudo"]], [['text'=>"Seul"]],
]
       ])
  ]);
}

//////////////////////////10- savol////////////////////////////////////////////////////////////
if($text  == 'Ulsan' or $text  == "Pusan" or $text  == "Seul"){
   
file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n9");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p9");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"10. O`zbekistondagi eng baland cho'qqi Hazrati sulton necha metrdan iborat?",
    'reply_markup'=>json_encode([
    'keyboard'=>[
       [['text'=>"3855 m"]],[['text'=>"4643 m"]],
       [['text'=>"4975 m"]],[['text'=>"5210 m"]],
]
       ])
  ]);
}


/////////////////////////////////////////tugashi ////////////////////////////////////////////////////////////////////
if($text  == '3855 m' or $text  == "4975 m" or $text  == "5210 m"){
  
    file_put_contents("Malumotlar/$chat_id/malumotlar_id.text", "$chat_id");
file_put_contents("Malumotlar/$chat_id/xatolar.$chat_id.text", "$xatilar_soni\n10");
file_put_contents("Malumotlar/$chat_id/$chat_id.xatotext", "$xatolar_test\n$p10");   
$xatilar_soni = file_get_contents("Malumotlar/$chat_id/xatolar.$chat_id.text");
$xatolar_test = file_get_contents("Malumotlar/$chat_id/$chat_id.xatotext");
$jami = file_get_contents("Malumotlar/$chat_id/soat1221.text");
    $mod12 = file_get_contents("Malumotlar/$chat_id/$chat_id.text");
     $baza = file_get_contents("Malumotlar/$chat_id/$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
    $u3 = substr_count($xatilar_soni,"\n"); 
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>-1001359204469,
    'text'=>"M'alumotlar
        -------------------
        $elon
        Natijalar:
        To'g'ri:$u2
        Xato: $u3
        -------------------
        $baza
        -------------------
        $xatolar_test
        Boshlagan  vaqti: $jami  
        Tugatgan  vaqti: $soatsad 
        ",
        'parse_mode'=>"markdown"
  ]);
  bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"M'alumotlar
        -------------------
        $elon
        Natijalar:
        To'g'ri:$u2
        Xato: $u3
        -------------------
        $baza
        -------------------
        $xatolar_test
        Boshlangan vaqti: $jami  
        Tugagan vaqti: $soatsad 
        ",
        'parse_mode'=>"markdown"
  ]);
  bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"Barcha savollarga javob berib bo'ldingiz, natijalar tez orada e'lon qilinadi. Iltimos kuting!
        ",
     
  ]);
  unlink("Malumotlar/$chat_id/xatolar.$chat_id.text");  
  unlink("Malumotlar/$chat_id/$chat_id.xatotext");
  unlink("Malumotlar/$callcid/soat1221.text");
   unlink("Malumotlar/$chat_id/baza.$chat_id.text");
      unlink("Malumotlar/$chat_id/$chat_id.text");
}


/////////////////////////////////////////tugashi ////////////////////////
if($text  == '4643 m'){
  
file_put_contents("Malumotlar/$chat_id/malumotlar_id.text", "$chat_id");
file_put_contents("Malumotlar/$chat_id/baza.$chat_id.text", "$mod12\n10");
file_put_contents("Malumotlar/$chat_id/$chat_id.text", "$baza\n$s10");   
    $xatilar_soni = file_get_contents("Malumotlar/$chat_id/xatolar.$chat_id.text");
    $xatolar_test = file_get_contents("Malumotlar/$chat_id/$chat_id.xatotext");
    $jami = file_get_contents("Malumotlar/$chat_id/soat1221.text");
  $mod12 = file_get_contents("Malumotlar/$chat_id/$chat_id.text");
     $baza = file_get_contents("Malumotlar/$chat_id/$chat_id.text");
    $u2 = substr_count($mod12,"\n"); 
    $u3 = substr_count($xatilar_soni,"\n");
   bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>-1001359204469,
    'text'=>"M'alumotlar
        -------------------
        $elon
        Natijalar:
        To'g'ri:$u2
        Xato: $u3
        -------------------
        To'g'ri:
        $baza
        -------------------
        $xatolar_test
        Boshlangan vaqti: $jami  
        Tugagan vaqti: $soatsad 
        ",
        'parse_mode'=>"markdown"
        
  ]);
  bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"M'alumotlar
        -------------------
        $elon
        Natijalar:
        To'g'ri:$u2
        Xato: $u3
        -------------------
        $baza
        -------------------
        $xatolar_test
        Boshlangan vaqti: $jami  
        Tugagan vaqti: $soatsad 
        ",
        'parse_mode'=>"markdown"
  ]);
  bot('sendMessage',[
    'message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"Barcha savollarga javob berib bo'ldingiz, natijalar tez orada e'lon qilinadi. Iltimos kuting!
        ",
      
  ]);
  unlink("Malumotlar/$chat_id/xatolar.$chat_id.text");
  unlink("Malumotlar/$chat_id/$chat_id.xatotext");
    unlink("Malumotlar/$callcid/soat1221.text");
     unlink("Malumotlar/$chat_id/$chat_id.xatotext");
     unlink("Malumotlar/$chat_id/$chat_id.text");
}

/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN
/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN

/////////TUIT.RU SAYT ADMIN TOMONIDAN YOZILGAN