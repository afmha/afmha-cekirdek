<?php
	
	class hesapmakinesi{
		function t ($s1,$s2){
			echo $s1+$s2;
		}
		function c ($s1,$s2){
			echo $s1-$s2;
		}
		function cc ($s1,$s2){
			echo $s1*$s2;
		}
		function b ($s1,$s2){
			echo $s1/$s2;
		}
		function m ($s1,$s2){
			echo $s1%$s2;
		}
		function ust ($x,$y){
			$z = 1;
			$l = $x;
			while ($z < $y){
				$z = $z + 1;
				$x = $x * $l;
			}
			echo $x;
		}
	}
	function yaz ($de){
		echo $yaz;
	}
	function yaz_r ($x){
		print_r($x);
	}
	function s_baslik ($y){
		echo '<title>'.$y.'</title>';
	}
	class dosyalar{
		function dosya_cagir ($k){
			include($k);
		}
		function dosya_cagir2 ($k){
			include_once($k);
		}
		function dosya_cagir3 ($k){
			require($k);
		}
		function dosya_cagir4 ($k){
			require_once($k);
		}
		function jsdosya($x){
		echo '<script type="text/javascript" src="'.$x.'" language="javascript"></script>';
		}
		function sdosya($t,$x,$t2){
			echo '<script type="'.$t.'" src="'.$x.'" language="'.$t2.'"></script>';
		}
	}
	function afmha(){
		phpinfo();
	}
	function engelle($z){
		if (!defined('CONFIG_CLASS_INCLUDED')) {
			die($z);
		}
	}
	function sunucu(){
		print_r($_SERVER);
	}
	function rastgele($sayimiz1,$sayimiz2){
		$rastgelesayi = rand($sayimiz1,$sayimiz2);
		echo $rastgelesayi;
	}
	function tarih(){
		echo date('d.m.Y H:i:s');
	}
	class yazi_islemler{
		function e_slash($d){
			$e_slash = addslashes($d);
			global $e_slash;
		}
		function k_slash($d){
			$k_slash = stripslashes($d);
			global $k_slash;
		}
		function tumubuyuk($tb){
			$tumb = strtoupper($tb);
			global $tumb;
		}
		function tumukucuk($tk){
			$tumk = strtolower($tk);
			global $tumk;
		}
		function basbuyuk($bb){
			$basbuyuk = strtoupper($bb);
			global $basbuyuk;
		}
		function tumubasbuyuk($tbb){
			$tumbb = strtolower($tbb);
			global $tumubasbuyuk;
		}
	}
	class cookie{
		function olustur($a,$b,$c=""){
			if($c == ""){
				setcookie($a,$b,time()+60*60*24);
			}else{
			setcookie($a,$b,$c);}
			global $cookie_afmha_cikti;
			if(isset($_COOKIE[$a])){
				$cookie_afmha_cikti = "İşlem tamam.";
			}
			else
			{
				$cookie_afmha_cikti = "İşlem sırasında bir hata meydana geldi.";
			}
		}
		function sil($a,$b,$c=" "){
			if($c == " "){
				setcookie($a,$b,'time() - 3600');
			}else{
			setcookie($a,$b,$c);}
			global $cookie_afmha_cikti;
			if(isset($_COOKIE[$a])){
				$cookie_afmha_cikti = "İşlem sırasında bir hata meydana geldi..";
			}
			else
			{
				$cookie_afmha_cikti = "İşlem tamam.";
			}
		}
		function kullan($a){
			global $cookie_afmha_cikti;
			if(isset($_COOKIE[$a])){
				global $cookie_afmha;
				$cookie_afmha = $_COOKIE[$a];
			}
			else
			{
				$cookie_afmha_cikti = "Cookie yok.";
			}
		}
	}
	
	$co = new cookie();
	$hm = new hesapmakinesi();
	$d = new dosyalar();
	$yi = new yazi_islemler();

	/*
	t();				=> Toplama İşlemi t(5,5);
	c();				=> Çıkarma İşlemi c(5,5);
	cc();				=> Çarpma İşlemi cc(55);
	b();				=> Bölme İşlemi b(5,5);
	m();				=> Modül İşlemi m(5,5); (Bölümden kalanı verir.)
	ust();				=> Üst Alma İşlemi ust(5,5);
	yaz();				=> Yazı Yazma yaz("Merhaba Dünya");
	yaz_r();			=> Yazı Yazdırma yaz_r("Merhaba Dünya");
	s_baslik();			=> Başlık Belirleme s_baslik("Title");
	dosya_cagir();		=> Dosya Çağırma İşlemi {include} dosya_cagir("deneme.php");
	dosya_cagir2();		=> Dosya Çağırma İşlemi {include_once} dosya_cagir2("deneme.php");
	dosya_cagir3();		=> Dosya Çağırma İşlemi {require} dosya_cagir3("deneme.php");
	dosya_cagir4();		=> Dosya Çağırma İşlemi {require_once} dosya_cagir4("deneme.php");
	afmha();			=> PHPİNFO bilgisini çeker. {phpinfo();} afmha();
	dizi();				=> Dizi oluşturmaya yarar.$dizi = Global bir dizidir. {V0.16 sürümünde kaldırıldı.}
	jsdosya();			=> Bir JavaScript dosyası çağırmaya yarar. jsdosya("deneme.js");
	sdosya();			=> Herhangi bir Script dosyasını çağırmaya yarar. sdosya("text/javascript","deneme.js","javascript"); TÜRÜ - DOSYA URL - DİLİ
	engelle();			=> Bir sayfaya direk erişimi engeller. engelle("mesaj");
	mysql_baglanti();	=> MySql sunucusuna bağlantı sağlar. mysql_baglanti("host","kullaniciadi","sifre","veritabani","Bağlantı Kuruldu Mesajı","Bağlantı Kurulamadı Mesajı");
	mysql_kapat();		=> MySql bağlantısını sonlandırır. mysql_kapat($deneme_baglantisi);
	e_slash();			=> Bir veride "" tırnaklarına ters slaş işareti koymaya yarar.
	k_slash();			=> Bir verideki ters slaş işaretlerini kaldırmaya yarar.
	tumubuyuk();		=> Yazıların tümünü büyük harf ile yazar.
	tumukucuk();		=> Yazıların tümünü küçük harf ile yazar.
	basbuyuk();			=> Yazıların sadece başındaki harfi büyük yapar.
	tumubasbuyuk();		=> Tüm yazıların sadece kelime başlarını büyük yapar.
	$co->ekle();		=> Cookie(Çerez) eklemeye yarar.
	$co->kaldir();		=> Cookie(Çerez) silmeye yarar.
	$co->kullan();		=> Cookie(Çerez) kullanmaya yarar.
	*/

?>
