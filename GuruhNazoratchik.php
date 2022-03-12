<?php
ob_start();
define('19917460','5217338886:AAHvW_mjTvitPXleQ1K1gHx1SSAGQRWeUT8');
$admin = "1414668610";
$mybot="@Qorovullka_Robot";
$myrobot="Qorovullka_Robot";
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
//O'zgaruvchilar boshlandi
$update = json_decode(file_get_contents('php://input'));
$efede = json_decode(file_get_contents('php://input'), true);
$message = $update->message;
$mes_id = $update->message->message_id;
$from_id = $message->from->id;
$mid = $message->message_id;
$forid = $update->message->forward_from->message_id;
$edname = $editm ->from->first_name;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");
$fadmin = $message->from->id;
$from = $message->from;
$new_user = $message->new_chat_member;
$new_user_id= $message->new_chat_member->id;
$new_fname= $message->new_chat_member->first_name;
$username = $message->from->username;
$fname= $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$text = $message->text;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$ctitle = $update->message->chat->title;
$cuname = $update->message->chat->username;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$turi = $update->message->chat->type;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$uid = $update->message->from->id;
$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
$good = $json->ok;
$rchid=$update->message->reply_to_message->from->id;
$runame=$update->message->reply_to_message->from->first_name;
//edit message o'zgaruvchilari
$edit = $update->edited_message;
$editfrom = $edit->from->id;
$editcid = $edit->chat->id;
$edittype = $edit->chat->type;
$editmid = $edit->message_id;
$edittext = $edit->text;
$editcap = $edit->caption;

//O'zgaruvchilar tugadi
$gett = bot('getChatMember', [
     'chat_id' => $chat_id,
     'user_id' => $user_id,
     ]);
     $get = $gett->result->status;
 //azolar sonini aniqlash    
     $mem = bot('getChatMembersCount',[
'chat_id'=>$cid,
]);
$azo = $mem->result;


//Reklamalarni o'chirish boshlandi
if((mb_stripos($text,"@")!==false or mb_stripos($update->message->caption,"@")!==false or mb_stripos($text,"http")!==false or mb_stripos($update->message->caption,"http")!==false or mb_stripos($text,"telegram.me")!==false or mb_stripos($update->message->caption,"telegram.me")!==false or mb_stripos($text,"t.me")!==false or mb_stripos($update->message->caption,"t.me")!==false or mb_stripos($text,".uz")!==false or mb_stripos($text,".ru")!==false or mb_stripos($text,".net")!==false or mb_stripos($text,".com")!==false or mb_stripos($update->message->caption,".uz")!==false or mb_stripos($update->message->caption,".ru")!==false or mb_stripos($update->message->caption,".net")!==false or mb_stripos($update->message->caption,".com")!==false) ){
 $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
if($turi == "supergroup" or $turi == "group"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
}}
if(isset($edit)){
if($edittype == "group" or  $edittype == "supergroup"){
if(mb_stripos($edittext,"@")!==false or mb_stripos($editcap,"@")!==false or mb_stripos($edittext,"http")!==false or mb_stripos($editcap,"http")!==false or mb_stripos($edittext,"telegram.me")!==false or mb_stripos($editcap,"telegram.me")!==false or mb_stripos($edittext,"t.me")!==false or mb_stripos($editcap,"t.me")!==false or mb_stripos($editcap,".uz")!==false or mb_stripos($editcap,".ru")!==false or mb_stripos($editcap,".net")!==false or mb_stripos($editcap,".com")!==false or
mb_stripos($edittext,".uz")!==false or mb_stripos($edittext,".ru")!==false or mb_stripos($edittext,".net")!==false or mb_stripos($edittext,".com")!==false){
$gett = bot('getChatMember', [
   'chat_id' => $editcid,
   'user_id' => $editfrom,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $editcid,
'message_id'=>$editmid,
]);
}}}}
if(mb_stripos($text,"ض") or mb_stripos($text, 'ص') or mb_stripos($text, 'ث') or mb_stripos($text, 'ق') or mb_stripos($text, 'ف') or mb_stripos($text, 'غ') or mb_stripos($text, 'ع') or mb_stripos($text, 'ه') or mb_stripos($text, 'خ') or mb_stripos($text, 'ح') or mb_stripos($text, 'ج') or mb_stripos($text, 'ش') or mb_stripos($text, 'س') or mb_stripos($text, 'ي') or mb_stripos($text, 'ب') or mb_stripos($text, 'ل') or mb_stripos($text, 'ا') or mb_stripos($text, 'ت') or mb_stripos($text, 'ن') or mb_stripos($text, 'م') or mb_stripos($text, 'ك') or mb_stripos($text, 'ط') or mb_stripos($text, 'ذ') or mb_stripos($text, 'ء') or mb_stripos($text, 'ؤ') or mb_stripos($text, 'ر') or mb_stripos($text, 'ى') or mb_stripos($text, 'ئ') or mb_stripos($text, 'ة') or mb_stripos($text, 'و') or mb_stripos($text, 'ز') or mb_stripos($text, 'ظ') or mb_stripos($text, 'د') or mb_stripos($tx, 'أ') or mb_stripos($text, 'إ') or mb_stripos($text, 'آ')){
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
if($message->entities[0]->type =="text_link"){
$gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=>$mid
]);
}}
if($edit->entities[0]->type =="text_link"){
$gett = bot('getChatMember', [
   'chat_id' => $editcid,
   'user_id' => $editfrom,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $editcid,
'message_id'=>$editmid,
]);
}}
//Reklamalarni o'chirish tugadi


//Kirdi chiqdilarni o'chirish
if(isset($message->new_chat_member) or isset($message->left_chat_member)){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}


//start buyrug'i
if($text=="/start"){
if($message->chat->type=="private"){
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"‎Salom👋
Man o'zbekcha va arabcha reklamalarni, ssilkalani guruhlarda ochirib beraman👨🏻‍✈️ 

Man ishlashim uchun guruhizga qoshib admin berishiz va guruhingizga /go so'zini yozib yuborishingiz kerak😄

📃 Bot Yangiliklari - <a href='https://t.me/AV_Project_info'>SSILKA</a>",
'parse_mode'=>html,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"➕Guruhga qo'shish",'url'=>"https://telegram.me/$myrobot?startgroup=new"]],
]
])
]);
}
}

//Smile o'yinlar uchun ball berish boshlanadi
$valu = $message->dice->value;
if(isset($message->dice))
if($valu==5 or $valu==4 or $valu==3 or $valu==2 or $valu==1){
if($message->chat->type=="supergroup" or $message->chat->type=="group" ){
bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "
•   [$fname](tg://user?id=$fadmin)

•  ❗ Sizga [$valu]  ball.",
'parse_mode'=>markdown,
]);
}
}

if($valu==6 ){
if($message->chat->type=="supergroup" or $message->chat->type=="group" ){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "
•   [$fname](tg://user?id=$fadmin)

•  👏 6-Ball siz yutdingiz! ",
'parse_mode'=>markdown,
]);
}
}
//Smile o'yinlar uchun ball berish tugadi