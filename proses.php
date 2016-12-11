<?php
$url = $_POST['url'];
$ambil = file_get_contents("https://api.instagram.com/oembed/?url=".$url."");
$hsl = json_decode($ambil, true);
$md = $hsl['media_id'];
$pro = file_get_contents("http://75.102.21.228/add?id=".$md."");
if($pro == 0 ){
	echo "Sukses suntik like";
}elseif (!$pro != 0) {
	echo "gagal nyuntik";
}elseif (!$pro) {
	echo "Link curlnya sudah di hapus sama yg punya";
}else{
	echo "entah";
}
?>