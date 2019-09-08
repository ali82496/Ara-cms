<?php
 
//آدرس فایلی که میخواهیم دانلود کنیم 
$fileUrl = 'https://lh104.irandns.com:2222/CMD_FILE_MANAGER/domains/code%2Dstudent.ir/public%5Fhtml/themes/nova/web%2Dcont%2Epy';
 
//آدرس و نام فایل تو محلی که قراره ذخیره بشه
$saveTo = 'website/a.theme';
 
//باز کردن Hanlder فایل.
$fp = fopen($saveTo, 'w+');
 
//اگر فایل باز نشد خطا نشان بده
if($fp === false){
    throw new Exception('Could not open: ' . $saveTo);
}
 
//باز کردن هندل curl
$ch = curl_init($fileUrl);
 
//پاس دادن هندل فایل خدمان به CURL
curl_setopt($ch, CURLOPT_FILE, $fp);
 
//تایم آوت بشه اگه فایل تا ۲۰ ثانیه دانلود نشه
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 
//اجرای درخواست کورل موردنظر.
curl_exec($ch);
 
//اگه خطا رخ داد کنترل کن
if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}
 
//وضعیت درخواست HHTP رو میگیریم
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 
//هندلر رو میبندیم
curl_close($ch);
 
if($statusCode == 200){
    echo 'Downloaded!';
} else{
    echo "Status Code: " . $statusCode;
}

echo "done";
?>