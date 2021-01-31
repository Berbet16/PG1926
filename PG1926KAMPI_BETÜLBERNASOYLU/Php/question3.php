<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Asal Sayı Bulma-2</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
<?php
$sayi=$_POST['sayi'];
 
$asal=0; $i=2;
 
do
{
	if ($sayi % $i == 0)
	{
		$asal = 1;
	}
	$i++;
}
while($i<$sayi);
 
if ($asal != 1)
{
	$sonuc="Sayı Asaldır";
}
else
{
	$sonuc="Sayı Asal Değildir";
}
 
?>
 
<table width="435" border="1" bgcolor="#FFFF66">
  <tr bgcolor="#00CCCC">
    <td colspan="2" align="center">PHP Asal Sayı Bulma</td>
  </tr>
  <tr bgcolor="#99FF66">
    <td width="206">Girilen Sayı:</td>
    <td width="213"><?php echo $sayi; ?></td>
  </tr>
  <tr bgcolor="#CC9966">
    <td colspan="2">
    
<h1><?php echo $sonuc; ?>  </h1>
 
    
    </td>
  </tr>
</table>
<A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
<br />
 
</body>
</html>
 