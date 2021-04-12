<?php

// readfile("deneme.txt"); var olan sayfayı okur.
// touch("nurten.php"); dosya oluşturur.

/*
a (append) // Böyle bir dosya yoksa oluştur.

mkdir("nurten") // klasör (dizin)  oluşturur.


$ac = fopen("deneme2.txt","a");
fwrite($ac, "nurten")

fclose($ac);
?>

rmdir("nurten2"); // klasör (dizin) silmek için kullanılır.
unlink("deneme123.txt"); // dosyayı silmek için kullanılır.

echo readfile("deneme3.txt"); // Verinin tamamını okur.

<?php
$dosyalar =glob("*.txt");
foreach ($$dosyalar as $dosya) {

	$ac = fopen($dosya, "a");
	fwrite($ac, "seni buldum :) /n");
	fclose($ac);
}


$dosya = "kullanicilar.csv";
$oku = fopen($dosya, "r");
while (!fgets($oku))
{
	$satir = fgets($oku);
	$parcala= explode(";", $satir);
	if (($parcala[2]=="nurtenagn@gmail.com") && ($parcala[3]=="12345")) 
	{
		echo "Hosgeldin Nurten";
	}

?>

*/

<?php
$dosya = "kullanicilar.csv";
$ad = "Nurten";
$tip = "AKGÜN";
$tarih = date("Y-m-d h:İ:s");

$ekle =$ad.";".$soyad.";".$tip.";".$tarih."\n";

$yaz = fopen($dosya, "a");
$fwrite($yaz,$ekle);
fclose($yaz);

$oku = fopen($dosya, "r");
while (!feof($oku)) 
{

	$satir = fgets($oku);
	$parcala = explode(";",$satir);
	if ($parcala[0]=="Nurten")
	{
		echo "Katılım tarihiniz: ".$parcala[3];
	}
}



}
?>

