<?php

#  "#" işaretinin olduğu yer hatalı kod demektir ayrıca başlık ve açıklama içinde kullanılmıştır.
#  "//" işareti kod satırlarını yorum satırına çevirmek için kullanılmıştır.


# PHP'ye Giriş

//$veri ="selam ";
//$$veri='selam  dünyalı';
//echo $veri . '<br>';
//echo $$veri ."<br>" ;
//echo ${$veri} . "<br>";
 
# Değişkenler ve Sabitler

//$veri ='selam';
//echo "$veri PHP<br>";
//echo "$veri PHP<br>";
//echo "{$veri} PHP<br>";
//#echo "${veri} PHP" ;

# var_dump() fonksiyonu PHP'de değişkenlerin ve verilerin türünü öğrenmekte kullanılır.

//  var_dump(10);
# kelimenin uzunluğunu ekrana yazdırır.
// $a="FFK";
//var_dump($a);
# değişken türünü verir.
//$a=15;
//$b=getType($a);
# değişken türünü tekrar ayarlar.
//$c=setType($a,"double");
 
//var_dump($b."\n".$a);


# örnek:
# 4 tane veri tanımlaması yapalım.Bu veriler isim,soyisim,yaşve okul bilgilerini tutsun.Echo kullanarak bu bilgileri aşağidakı formatta ekrana yazdıran kodu PHP ile yazalım.

//$ad= "feyza" ;
//$soyad="kaya" ;
//$yas= 30;
//$okul="AĞLASUN MYO";

//echo $ad . "<br>";
//echo $soyad."<br>";
//echo $yas ."<br>";
//echo $okul ."<br>";

//$ad = "Hüdayi Emre";
//$soyad = "SARIÇA";
//$yas1="18";
//$okul="AĞLASUN MYO";


//echo $ad . "<br>";
//echo $soyad."<br>";
//echo $yas1 ."<br>";
//echo $okul ."<br>" ;

# girilen iki yaşın ortalamasını bulma. 
//$ortalama = $yas + $yas1 / 2;
//echo $ortalama;

# bir sayının bölümünden kalanı gösteren PHP programı.
//$sayi1= 67;
//$sayi2= 34;
//$kalan = $sayi1 %  $sayi2; 
//echo $kalan ;

# girilen verilerin farkını alan PHP programı.
//$a = 29;
//$b = 32;
//$c = 56;
//$d = 35;
//$toplam = ($a + $b) - ($c + $d) ;
//echo $toplam ;


# girilen nota göre vize ve final notunu alan ve kullanıcın ismini ekrana yazdıran PHP programı.

//$ad = "Hüdayi Emre Sarıça";
//$vize = 100;
//$final= 100;
//$ortalama = ($vize*0.4) + ($final*0.6);
//echo  "{$ad} isimli ögrencinin vize notu {$vize},final notu {$final} ve  ortalaması ", $ortalama , "dır";

# Operatörler
 
# Aritmetik Operatörler 

# PHPde matematik işlemi yapmak için kullanılır.
 
//$a = 2;
//$b = 6; 
//$c = 5;
//$sonuc = $a + $b * $c;
//echo $sonuc;

#Atama Operatörü 
#matematiksel ifadelerin daha kısa yazılmalarını sağlayan operatörlerdir.Böylece kodlar daha düzenli görünür ve kod kısa yazılmış olur.

//$a= 10 ;
//$b= 12 ;
//$c= 15 ;
//$d= 20 ;

 #b ve a verisine birleştirme operatörü kullanarak a ve b yi birleştirme.
 
//$birlesik = $a.=$b;

//echo $birlesik;
 
 #b ve a verisine  atama operatörü kullanarak a ve b nin toplamını bulma.

//$toplam = $b+=$a;

//echo $toplam;
 
#1.ÖRNEK:
//$a = 12;
//$b = 10;
//$c = 20;
# atama operatörü kullanarak a ya a ile b nin toplamını yazdırma.

//echo $a+=$b ;

# atama operatörü kullanarak a ya a ile b nin çarpımını yazdırma.

//echo $a*=$b;

#atama operatörü kullanarak b'yle c yi birleştir b ye atama.
 
//echo $b.=$c;

#2.ÖRNEK:
# isim (string ifadeleri) atama operatörleriyle birleştirme.

//$veri = "hüdayi   ";
//$veri2 = "   merhaba";
//echo $veri .= $veri2;

#3.Örnek:

//$a = 15.3;

//$b = 25.2;

//echo $a /= $b  ;


#Arttırma / Azaltma  operatörleri 

//$a = 2;
//$b = 6 ;
//$c = ++$a + $b++ - --$a + ($b+$a--);
//echo "$a $b $c";
# yukardaki kodun çıktısı nedir ?
#1716 

#ÖRNEKLER

#1.bu kodun çıktısı nedir?
//$a = 3;
//$b = 5;
//$c = ($a++ + $b)*(--$a*++$b);
//echo $c; 
 # bu kodun çıktısı 144 dür.

#2.bu kodun çıktısı nedir?
//$a = 2;
//$b = 5;
//$c = ($a++ * ++$b) - ($a-- + $b++);
//echo $c; 
#bu kodun çıktısı 3 tür.

#3.bu kodun çıktısı nedir?
//$a = 1;
//$b = 5; 
//$c = ($b++ / $a) * (++$b+$a+$b++);
//echo $c;
# bu kodun çıktısı 75'tir.

#4.bu kodun çıktısı nedir?
//$a= 4 ;
//$b= 7 ;
//$c = $b*$b++ + ($a++ / 2)- --$b;
//echo $c ;
# bu kodun sonucu 44 tür.


#5.bu kodun çıktısı nedir?
//$a = 10;
//$b = 3;
//$c = 2 ;
//$d = (++$c + $b )* (++$b % --$c );
//echo $d;
# bu kodun çıktısı 0 dır.

# 6.bu kodun çıktısı nedir ? 
//$a = 10;
//$b = 3;
//$c = 2 ;
//$d = ($a * ++$b )- (++$a + $b++) /$c ;
//echo $d;
# bu kodun çıktısı 32.5 dur.

#Karşılaştırma Operatörleri 
# Operatörlerin sağındaki ve solundaki değerlerin,Operatörlerin belirli ifadeyi sağlayıp sağlamadığını kontrol eder.Eğer yanlış ise "false" dögru ise "true ifadesini döndürür. 
 
//$a = 2;
//$b = 6;
//$c = 3;
//$d= '3';
//$karsılastir= $a == $b;
//echo $karsılastir; 
 
#Mantıksal Operatörler
# Bu operatörler sayesinde birden fazla karşılaştırma denetlenebilir.
# Bu operatörler şunlardır " :"  ve, "&&" , veya "||" ,değil"!" operatörleridir.


# İF-ELSE kullanımı
//$a = 10;
//$b= 8;
//if($a>$b)
//echo "a  b den büyüktür";


#  C# da olan ? : operatörleride kullanılabilir.
// echo 5 > 3 ? "yes " : "no ";

//$a=13;
//$b=$a<10 ? "merhaba" : " güle güle";
// echo $b;

# Sonsuz tane  iç içe İF yazılabilir.

//$a= 2;
//$b= 5;
//$c= 6;
//$d= 7;
//if($a==1 || $a==2){

//if ($b == 3 || $b==4) {

//if ($c == 5 && $d!=c)   {
  //  }
//echo  $a ,$b ,$c ,$d;
  //}
//}

# Elseİf Yapısı
# bir değişkenin farklı durumlarını  kontrol etmek için kullanılır.

//$t = date("H,M");
  //echo "bu sunucuda şuan saat:  ".$t ; 
//if ($t < 10) {
  // echo "Günaydın!";
//} elseif ($t < 20) {
  // echo "İyi günler!";
//} else {
  //  echo "İyi geceler!";
 //}
# gün isminde veri atayın eğer hafta içi ise okul mod değilse tatil mod yazdıran kodu yapınız.

//$history = date("l");
//if($history == "Saturday" || $history == "Sunday"){
  //    echo "Tatil mod ";
  // }
//else{
  // echo "okul mod ";
  //}
# hız isminde bir değişken tanımlayınız.Eğer hız 130'dan büyükse ekrana yavaş yazılsın 130 a eşit veya küçüse hızınız normal yazdırın.

//$hız =110;
//if ($hız >= 130 ){
  //echo "yavaş";
//}
//else {
 //echo " hızınız normal ";
//}
 
# Bu kod, cinsiyet ve yaş bilgilerine dayanarak askerlik durumunu kontrol eden bir PHP kodudur.
//$cinsiyet = false;
//$yas = 18;
//if (!$cinsiyet && $yas >= 18){
//echo "askere git";
//}
//else{
//echo "kadınlar için askerlik yok";
//}

# 



?>



























