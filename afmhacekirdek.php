<?php
	
	define("AFMHA_SURUM_NUMARASI","0.52");
	define("AFMHA_SURUM_ISMI","");
	define("AFMHA_SURUM_TARIHI","17.09.2015 20.59");
	
	class afmha{
	
		public $veri;
		
		public function vekle($a){
			$this->veri = $a;
		}
		public function vsil(){
			$this->veri = NULL;
		}
		function durdur(){
			exit;
		}
		
	}
	
	class hesapmakinesi{
		
		public $deger;
		public $deger2;
		
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
			if($x = 10){
				while ($z > $y){
					$y = $y+1;
					$x = $x / 10;
				}
			}
			else
			{
				while ($z < $y){
					$z = $z + 1;
					$x = $x * $l;
				}
			}
			echo $x;
		}
		public function yuzde_al($a,$b){
			$this->deger = $a;
			$this->deger2 = $b;
			$c = 100;
			$d = $this->deger2 * $c;
			$e = $d/$this->deger;
			return $e;
		}
	}
	function yaz ($de){
		echo $de;
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
				setcookie($a,$b,$c);
			}
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
				setcookie($a,$b,time()-3600);
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
	function ip(){
		
		global $afmha_ip;
		
		$afmha_ip = $_SERVER['REMOTE_ADDR'];
		
	}
	function bakim($a="Bakımdayız",$b="Sitemiz şuan da bakımda"){
		echo '
			<div id="bakim" style="width: 100%; background-color: #ff5656; color: red; border: 2.5px dotted red;">
				<b>'.$a.'</b>
				<br><br>
				<span>'.$b.'</span>
			</div>
		';
	}
	class dosya_islemleri{
		function dosya_olustur($a="deneme.txt",$b="0777"){
			$olustur = mkdir($a,$b);
			if($olustur){
				return "Dosya Oluşturuldu.";
			}else{
				return "Dosya Oluşturulamadı.";
			}
		}
		function dosya_sil($a="deneme.txt"){
			$sil = unlink($a);
			if($sil){
				return "Dosya silindi.";
			}else{
				return "Dosya silinemedi.";
			}
		}
		function dosya_ismi_degistir($a="deneme.txt",$b="deneme.html"){
			$degistir = rename($a,$b);
			if($degistir){
				return "Dosya ismi değiştirildi.";
			}else{
				return "Dosya ismi değiştirilemedi.";
			}
		}
		function dosya_icindekiler($a="anasayfa"){
			$dosya = opendir($a);
			while($veriler = readdir($dosya)){
				echo $veriler.'<br>';
			}
		}
	}
	
	function afmha_bilgi(){
			
			echo '
			<div style="width: 700px;border: 1px solid #eee;background-color: #222;color: #fff;position: relative;margin: auto;text-shadow: 0.25px 0.25px 0.25px #000;">
				<h1>Afmha Çekirdek</h1>
				<hr>
				<ul>
					<li>Sürüm: '.AFMHA_SURUM_NUMARASI.'</li>
					<li>Sürüm İsmi: '.AFMHA_SURUM_ISMI.'</li>
					<li>Sürüm Tarihi: '.AFMHA_SURUM_TARIHI.'</li>
				</ul>
			</div>
			';
		
	}
	
	function afmhasifrele($a){
		global $afmhasifre;
		$afmhasifre = strlen($a);
		$afmhasifre .= substr_count($a,"a");
		$afmhasifre .= substr_count($a,"b");
		$afmhasifre .= substr_count($a,"c");
		$afmhasifre .= substr_count($a,"ç");
		$afmhasifre .= substr_count($a,"d");
		$afmhasifre .= substr_count($a,"e");
		$afmhasifre .= substr_count($a,"f");
		$afmhasifre .= substr_count($a,"g");
		$afmhasifre .= substr_count($a,"ğ");
		$afmhasifre .= substr_count($a,"ı");
		$afmhasifre .= substr_count($a,"i");
		$afmhasifre .= substr_count($a,"j");
		$afmhasifre .= substr_count($a,"k");
		$afmhasifre .= substr_count($a,"l");
		$afmhasifre .= substr_count($a,"m");
		$afmhasifre .= substr_count($a,"n");
		$afmhasifre .= substr_count($a,"o");
		$afmhasifre .= substr_count($a,"ö");
		$afmhasifre .= substr_count($a,"p");
		$afmhasifre .= substr_count($a,"r");
		$afmhasifre .= substr_count($a,"s");
		$afmhasifre .= substr_count($a,"ş");
		$afmhasifre .= substr_count($a,"t");
		$afmhasifre .= substr_count($a,"u");
		$afmhasifre .= substr_count($a,"ü");
		$afmhasifre .= substr_count($a,"v");
		$afmhasifre .= substr_count($a,"y");
		$afmhasifre .= substr_count($a,"z");
		$afmhasifre .= substr_count($a,"x");
		$afmhasifre .= substr_count($a,"q");
		$afmhasifre .= substr_count($a,"w");
		$afmhasifre .= substr($a, 0, 1);
		$sifre2 = substr($sifre, 3, 3);
		$afmhasifre .= $sifre2;
		return $sifre;
	}
	
	function konsol(){
		echo '
	<style type="text/css">
		#konsol{
			padding: 5px;
			background-color: #000;
			color: #fff;
			width: 800px;
			height: 500px;
			position: relative;
			margin: auto;
		}
		#veriler{
			width: 800px;
			height: 450px;
			overflow: scroll;
			overflow-x: hidden;
		}
		#komutgir{
			border: 1px solid #fff;
			background-color: #000;
			width: 700px;
			padding: 3px;
			color: #fff;
		}
	</style>
	
	<form action="" method="POST">
	
		<div id="konsol">
		<div id="veriler">
			';
				
				if($_POST){
				
					if($_POST['komut']){
						
						switch($_POST['komut']){
							
							case "php_bilgi":
							
								phpinfo();
							
							break;
							
							case "afmha_çekirdek_bilgi":
							
								afmha_bilgi();
							
							break;
							
							case "zaman":
							
								echo date("H:i:s j F Y")." haftanın ".date("w").". günü";
							
							break;
							
						}
						echo $_POST['komut'];
					}
				
				}
		echo '</div>
		<hr>
		<input type="text" name="komut" id="komutgir"><input type="submit" value="yolla">
		</div>
	
	</form>
	';
	}
	function a_yaz($a='echo="Hata";'){
		eval($a);
	}
	function b64($a=""){
	
		global $afmha_sifrelenen_veri;
		$afmha_sifrelenen_veri = base64_encode($a);
		return $afmha_sifrelenen_veri;
	
	}
	function b64d($a=""){
		
		global $afmha_sifre_ciktisi;
		$afmha_sifre_ciktisi = base64_decode($a);
		return $afmha_sifre_ciktisi;
		
	}
	class zaman{
		public $baslangic;
		public $bitis;
		public $izin;
		public function baslangic($a=0){
			$this->baslangic = microtime();
			if($a == 1){
				return $this->baslangic." zamanında başlandı.";
			}
			$this->izin = 1;
		}
		public function bitis(){
			if($this->izin == 1){
				$this->bitis = microtime();
				return abs($this->baslangic-$this->bitis);
			}else{
				return "Hesaplama izini sistem tarafından verilmemiş.";
			}
		}
	}
	
	$co = new cookie();
	$hm = new hesapmakinesi();
	$d = new dosyalar();
	$yi = new yazi_islemler();
	$di = new dosya_islemleri();
	$z = new zaman();

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
	$bakim();		=> Bakım tasarımı eklemeye yarar.
	*/

?>
