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
# gün isminde veri atayın eğer hafta içi ise okul mod değilse tatil mod yazdıran kodu yapınız.

//$history = date("l");
//if($history == "Saturday" || $history == "Sunday"){
  //    echo "Tatil mod ";
  // }
//else{
  // echo "okul mod ";
  //}

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
# SWİTCH CASE 
#  bu kod C# ta olduğu gibi (if-else) karar yapısıdır.

//switch(ifade){
//case label1 : 
# kod blogu
//break ;
# kod blogu
//case label2:
# kod blogu
//break;
//case label3 :
# kod blogu
//break;
//default:
# kod blogu }

# favori rengi switch case kullanarak bulma.

//$favcolor = "siyah";
//switch ($favcolor) {
//case "siyah":
//echo "Senin favori rengin siyah!"; 
//break;
//case "yeşil":
//echo "Senin favori rengin yeşil!"; 
//break;
//case "kırmızı":
//echo "Senin favori rengin kırmızı!";
//break;
//default:
//echo "Favori rengin siyah, kırmızı ya da yeşil değil.";
//}

#yaz meyvesi mi kış meyvesi mi olduğunu bulma .

//$meyve="çilek";
//switch($meyve){
//case "çilek":
//echo " bu bir yaz meyvesi ";
//break;
//case "mandalina ":
//echo "bu bir kış meyvesi ";
//break ;
//default:
//echo" yazdıklarının hiçbiri meyve değil ! ";
//}

#rakamları girilen sayıya göre sınıflandırma

//$rakam="bir";
//switch($rakam){
//case "bir":
//echo " rakam :1  ";
//break;
//case "iki ":
//echo "rakam : 2 ";
//break ;
//default:
//echo" yazdıklarının hiçbiri rakam değil ! ";
//}

#sayının tek veya çift olduğuna karar veren program.

//$sayi= "bu sayı çift";
//switch($sayi%2){
//case "2":
//echo "bu sayı çift";
//break ;
//case "1":
//echo "bu sayı tek";
//break ; 
//default:
//echo "bu sayı sıfır";
//}

#ÖRNEKLER 

# sayının negatif veya pozitif olma durumunu bulma

//  $deger= -12;
//  if ($deger > 0 ) {
//    echo "değer pozitif ";
//  }
// elseif ($deger < 0) {
//  echo "değer negatif ";
// }
// //else {
//  echo"değer sıfırdan büyük veya küçük olmalı ";
// }

# üçgenin alanını hesaplayıp ekrana yazdıran kod

// $taban = 3;
// $yukseklik = 10 ;
// $alan = ($taban * $yukseklik)/ 2;
// echo "diktörtgenin alanı :". $alan;

# diktörtgenin alanını ve çevresini hesaplayan kod 

// $kısa_kenar = 7;
// $uzun_kenar = 15;
// $alan = $kısa_kenar * $uzun_kenar;
// $cevre = ($kısa_kenar*2) +( $uzun_kenar*2);
// echo " dikdörgen alanı : ".$cevre  , "dikdörtgeninin alanı: ".$alan; 

# kapalı otoparkta park eden personel aracın park ücreti 1 saati 15 tl,misafir aracının park ücreti 20 Tl üç saatten sonra personel aracına %5 indirim uyguluyor.parka giren aracın park ücretini hesaplayan kod 

// $personel_araci = 15 ;
// $misafir_araci = 20;
// $personel_indirim = $personel_araci * 0.10 ;
// $misafir_indirim = $misafir_araci * 0.05;
// $saat = 5 ; 
// $misafir_araci *= $saat ;  
// $personel_araci *=$saat ;
// if ($saat > 2 )
// {
//    $personel_araci = $personel_araci - ($personel_indirim *0.1);
//    $misafir_araci = $misafir_araci - ($misafir_indirim *0.05);
// }

//  echo "Personel Ücreti ".$personel_indirim . "<br> Misafir Ücreti : ".$misafir_indirim; 

# For döngüsü 

# sıfırdan 10 a kadar olan kodu yazalım

//  for ($i=0; $i <10 ; $i++) { 
//    echo $i ,"<br>";
//  }
# çift sayıları yazdıran php kodu 

//  for ($i=2; $i < 25; $i+=2) {           # burada kullanılan "i+=2" sayıları ikişer ikişer alır.
//      echo $i . "<br>";
//  }

# asal sayıları bulan for kodu  

//  for ($i=2; $i <50  ; $i++) { 
//    $asal = true ;
//    for ($j=2; $j < $i ; $j++) { 
//      if ($i%$j==0) {
//        $asal = false;
//        break;
//      }
//    }
//       if ($asal) {
//        echo $i."<br>";
//       }
//  }

# girilen sayının faktöriyelini hesaplayan kodu yazınız.

// $n = 5;
// $sonuc = 1;
// for ($i = $n; $i > 0; $i--) {
//     $sonuc *= $i;
// }
// echo "Faktöriyel: " . $sonuc;  


# çarpım tablosunu ekrana yazdıran kod.

// for ($i=1; $i <= 10; $i++) { 
//   for ($j=1; $j <= 10; $j++) { 
//       echo "$i x $j = ". $i * $j."<br>" ;             
//   }
//   echo "<br>";
// }

# üçgen oluştur  

// $satir = 5;
// for ($i = 1; $i <= $satir; $i++) {
//     for ($j = 1; $j <= $satir - $i; $j++) {
//         echo " &nbsp;&nbsp; ";
//     }
//     for ($k = 1; $k <= 2 * $i - 1; $k++) {
//         echo " *";
//     }
//     echo "<br>";
// }
 # Yeni kod 
// $satir = 5;
// for ($i = 1; $i <= $satir; $i++) {
//     for ($j = 1; $j <= $satir - $i + 1; $j++) {
//         echo "&nbsp;";
//     }
//     for ($k = 1; $k <= $i - 1; $k++) {
//         echo "  *";
//     }
//     echo "<br>";
// }
# 1 ile 100 arasındaki tek sayıların toplamını bul,Çift sayıların toplamını bul ikisinin ortalamasını bul 

// $tek_sayi = 0;
// $cift_sayi = 0;

// for ($i = 1; $i <= 100; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         if ($j % 2 == 0) {
//             $cift_sayi += $j;
//         } else {
//             $tek_sayi += $j;
//         }
//     }
// }

// $ortalama = ($tek_sayi + $cift_sayi) / 2;

// echo "1 ile 100 arasındaki tek sayıların toplamı: $tek_sayi\n "."<br>";
// echo "1 ile 100 arasındaki çift sayıların toplamı: $cift_sayi\n"."<br>";
// echo "İki toplamın ortalaması: $ortalama\n"."<br>";






?>



























