<?php

#  "#" işaretinin olduğu yer hatalı kod demektir ayrıca başlık ve açıklama içinde kullanılmıştır.
#  "//" işareti kod satırlarını yorum satırına çevirmek için kullanılmıştır.

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
//$yas="30";
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
// $ortalama = ($vize*0.4) + ($final*0.6);
//echo  "{$ad} isimli ögrencinin vize notu {$vize},final notu {$final} ve  ortalaması ", $ortalama , "dür";

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

#Arttırma / azaltma  operatörleri 

//$a = 2;
//$b = 6 ;
//$c = ++$a + $b++ - --$a + ($b+$a--);
//echo "$a $b $c";
# yukardaki kodun çıktısı nedir ?
#1716 

#Karşılaştırma Operatörleri 
# Operatörlerin sağındaki ve solundaki değerlerin,öperatörlerin belirli ifadeyi sağlayıp sağlamadığını kontrol eder.Eğer yanlış ise "false" dögru ise "true ifadesini döndürür. 
 
//$a = 2;
//$b = 6;
//$c = 3;
//$d= '3';
//$karsılastir= $a == $b;
//echo $karsılastir; 
?>
