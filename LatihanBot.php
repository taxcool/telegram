<?php

$token_bot="397156077:AAHJEPryrOUB4crv8Ueq_UZ_MBYDktQ3_5U";
$data['chat_id']=217150963;
$data['text']= "Test Lewat Github";
function kirimperintah($perintah,$token_bot,array $keterangan=null){
  $url="https://api.telegram.org/bot&#8221;.$token_bot."/".";
  $url.=$perintah."?";
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$keterangan);
  $output = curl_exec($ch);
  curl_close($ch);

  return $output;
}
kirimperintah("sendMessage",$token_bot,$data);
echo "done";
?>
