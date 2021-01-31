<?php 
date_default_timezone_set('Europe/Istanbul');
@setlocale(LC_ALL,"turkish");
$tarihguncel    = date("d.m.Y");
$saatguncel     = date("H:i");


$karsila= date("H");

if($karsila==05 || $karsila==06 || $karsila==07 || $karsila==08 || $karsila==09)
{
	$karsiladurum="sabah";
	function mesaj_yaz()
	{
		echo "Günaydin";
	}
}elseif($karsila==10 || $karsila==11 || $karsila==15 || $karsila==16 || $karsila==17)
{
	$karsiladurum="günorta";
	function mesaj_yaz(){
		echo "İyi günler";
	}
}elseif($karsila==12 || $karsila==13 || $karsila==14)
{
	$karsiladurum="sabah";
	function mesaj_yaz(){
		echo "İyi öğlenler";
	}
}elseif($karsila==18 || $karsila==19 || $karsila==20 || $karsila==21 || $karsila==22)
{
	$karsiladurum="akşam";
	function mesaj_yaz(){
		echo "İyi Akşamlar";
	}
}elseif($karsila==23 || $karsila==00 || $karsila==01 || $karsila==02 || $karsila==03 || $karsila==04)
{
	$karsiladurum="gece";
	function mesaj_yaz(){
		echo "İyi geceler";
	}
}
else
{
	function mesaj_yaz()
	{
		$karsiladurum="hata";
		echo "Hata oluştu";
	}	
}
	
function dene($inde)
{
	echo $inde." Ekrana bas";	
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Tarih</title>
<style type="text/css">
#zamankapsa{
	background-color:purple;
	width:280px;
	height:50px;
	float:left;
	display:block;
	padding:1px;
	border-radius:4px;
}
.zamankapsa_gorsel{
	width:48px;
	height:48px;
	float:left;
	background-color:white;
	border-radius:20px;

	}
.zamankapsa_gorsel img {
	border-radius:20px;
}
.zamankapsa_tarih{
	color:white;
	padding-left:7px;
	margin:1px;
	display:block;
	float:left;
}
.tarih_cizgi{
	padding-top:4px;
	padding-bottom:1px;
	border-bottom:2px solid;
	border-color:white;
	width:289px;
}
.tarih_icerik1{
	width:280px;
	height:20px;
	text-align:center;
}
.tarih_icerik2{
	width:280px;
	height:20px;
	margin:0 auto;
	text-align:center;
}
.zamankapsa_karsila{
	color:white;
	display:block;
	padding-left:7px;
}
</style>

</head>
<body>
<div id="zamankapsa">
<div class="zamankapsa_gorsel">
<?php echo "<img style='margin-left:2px; margin-top:2px; width:45px;' src='https://cdn3.iconfinder.com/data/icons/forall/995/challenge-128.png'>"; ?>
</div>
<div class="tarih_icerik1">
<span class="zamankapsa_tarih">
<?php echo "Tarih : ".$tarihguncel." Saat: ".$saatguncel."<br/>"; ?>
</span>
</div>

<div class="tarih_cizgi"></div>
<div class="tarih_icerik2">
<span class="zamankapsa_karsila">
<?php mesaj_yaz(); ?>
</span>
</div>
</div>


</body>
</html>