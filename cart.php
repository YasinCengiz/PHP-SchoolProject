<!DOCTYPE html>
<html>
<title>Sepet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
</style>
<body style="background-color:rgb(147,102,99);">
  

<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Salih Akkuş <br> Çıtır Pizza</h1>
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Sepet</h1>
    <h1><b><strong>Özet</strong></b>
    <?php


    if ($_POST["diyetteyim"])
    {  

      // Öğrenci
        if (isset($_POST['ogrenci']) )
        {
          $miktar = $_POST["diyetteyim"];
          $sepet = $miktar * 15;
          $indirim = ($sepet / 100) * 5;
          $ozet = $sepet - $indirim;
          $ozet = floor($ozet * 2) / 2;
          echo "<h1><b> $miktar Adet Diyetteyim Boy Sipariş Verdiniz.";
          echo "<h1><b> Toplam: $ozet ₺</b>";


        }
        
        else

        {
          $miktar = $_POST["diyetteyim"];
          $sepet = $miktar * 15;
          $sepet = floor($sepet * 2) / 2;
          echo "<h1><b> $miktar Adet Diyetteyim Boy Sipariş Verdiniz.";
          echo "<h1><b> Toplam: $sepet ₺</b>";

        }


        if ($_POST["sayi"])
        {
          $number = [4,8,12,16,20,24,28,32,36,40,44,48,52,56,60,64,68,72,76,80,84,88,92,96];
          $random = $number[rand(0,23)];
          $sansli_sayi = $random;
          $sayi = $_POST["sayi"];
          if ($sayi == $sansli_sayi)
          {
            echo "<br>Tebrikler Şefin Şanslı Sayısını Bildiniz. <br> Bir Adet Diyettteyim Boy Pizza Kazandınız.";
          }
          else
          {
            echo "<br>Şefin Şanslı Sayısını Bilemediniz.";
          }
        }

    }



    if ($_POST["standart"])
    {  

      // Öğrenci
        if (isset($_POST['ogrenci']) )
        {
          $miktar = $_POST["standart"];
          $sepet = $miktar * 15;
          $indirim = ($sepet / 100) * 5;
          $ozet = $sepet - $indirim;
          $ozet = floor($ozet * 2) / 2;
          echo "<h1><b> $miktar Adet Standart Boy Sipariş Verdiniz.";
          echo "<h1><b> Toplam: $ozet ₺</b>";


        }
        
        else

        {
          $miktar = $_POST["standart"];
          $sepet = $miktar * 15;
          $sepet = floor($sepet * 2) / 2;
          echo "<h1><b> $miktar Adet Standart Boy Sipariş Verdiniz.";
          echo "<h1><b> Toplam: $sepet ₺</b>";

        }


        if ($_POST["sayi"])
        {
          $sansli_sayi = 0;
          $sayi = $_POST["sayi"];
          if ($sayi == $sansli_sayi)
          {
            echo "<br>Tebrikler Şefin Şanslı Sayısını Bildiniz. <br> Bir Adet Diyettteyim Boy Pizza Kazandınız.";
          }
          else
          {
            echo "<br>Şefin Şanslı Sayısını Bilemediniz.";
          }
        }

    }



    if ($_POST["super"])
    {  

      // Öğrenci
        if (isset($_POST['ogrenci']) )
        {
          $miktar = $_POST["super"];
          $sepet = $miktar * 15;
          $indirim = ($sepet / 100) * 5;
          $ozet = $sepet - $indirim;
          $ozet = floor($ozet * 2) / 2;
          echo "<h1><b> $miktar Adet Süper Boy Sipariş Verdiniz.";
          echo "<h1><b> Toplam: $ozet ₺</b>";


        }
        
        else

        {
          $miktar = $_POST["super"];
          $sepet = $miktar * 15;
          $sepet = floor($sepet * 2) / 2;
          echo "<h1><b> $miktar Adet Süper Boy Sipariş Verdiniz.";
          echo "<h1><b> Toplam: $sepet ₺</b>";

        }


        if ($_POST["sayi"])
        {
          $sansli_sayi = 12;
          $sayi = $_POST["sayi"];
          if ($sayi == $sansli_sayi)
          {
            echo "<br>Tebrikler Şefin Şanslı Sayısını Bildiniz. <br> Bir Adet Diyettteyim Boy Pizza Kazandınız.";
          }
          else
          {
            echo "<br>Şefin Şanslı Sayısını Bilemediniz.";
          }
        }

    }



    ?>
    </div>
</div>





</body>
</html>
