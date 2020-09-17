<!DOCTYPE html>
<html>
<title>Pizza Salih</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("https://images7.alphacoders.com/596/thumb-1920-596343.jpg");
  min-height: 90%;
}
</style>
<body>


  
<!-- Header with image -->
<header class="bgimg header w3-grayscale-min">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Saat 10:00 - 00:00 Arası Açık</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">Salih Akkuş<br>ÇITIR PIZZA</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>Salih Akkuş<br>ÇITIR PIZZA</b></span>
    
  </div>
</header>



<!-- Menu Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">MENU</h1>
    
      <div id="Pizza">
      
      <form action="/cart.php" method="POST">
      
      <h1><b>Süper Boy</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₺ 50.00</span></h1>
      <input class="w3-right w3-tag w3-white w3-round" type="text" placeholder="Miktar" name="super"></span>
      <p class="w3-text-black">Domates, Mozzarella, Taze Fesleğen, Sucuk, Pastırma, Yeşil Biber</p>

      <hr>

      <h1><b>Standart Boy</b> <span class="w3-right w3-tag w3-dark-grey w3-round">₺ 30.00</span></h1>
      <input class="w3-right w3-tag w3-white w3-round" type="text" placeholder="Miktar" name="standart"></span>
      <p class="w3-text-black">Domates, Mozzarella, Pastırma, Taze Fesleğen</p>
      
      <hr>

      <h1><b>Diyettim Boy</b> <span class="w3-tag w3-orange w3-round">Popüler!</span> <span class="w3-right w3-tag w3-dark-grey w3-round">₺ 15.00</span> </h1> 
      <input class="w3-right w3-tag w3-white w3-round" type="text" placeholder="Miktar" name="diyetteyim"></span>
      <p class="w3-text-black">Domates, Mozzarella, Yeşil Biber,Taze Fesleğen, Kaşar Peyniri</p>

      <hr>

      <h3> 
      <input type="checkbox" id="ogrenci1" name="ogrenci" value="deger1">
      <label for="ogrenci"> Öğrenciyim</label><br>
    <input type="text" class="w3-right w3-tag w3-white w3-round" placeholder = "Şefin Şanslı Sayısı" name="sayi">
    </h3>
      
      <input type="submit" value = "Sipariş Ver"> <span class="w3-right w3-tag w3-dark-grey w3-round"> </span>



      </form>  



      
    </div>
    <br>
    
    
<!-- Photo Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge">
  <div class="w3-content">


    <img src="https://i.pinimg.com/originals/16/8e/91/168e918ec34bcf357051b427362a9d3a.jpg" style="width:100%" class=" w3-margin-bottom">
    <h1><b>Açılış Saatleri</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Pazartesi 10.00 - 24.00</p>
        <p>Salı 10.00 - 24.00</p>
        <p>Çarşamba 10.00 - 24.00</p>
        <p>Perşembe 10:00 - 24:00</p>
      </div>
      <div class="w3-col s6">
        <p>Cuma 10:00 - 12:00</p>
        <p>Cumartesi 10:00 - 23:00</p>
        <p>Pazar KAPALI</p>
      </div>
    </div>
    
  </div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Salih Akkuş</p>
  <p>1020222598</p>
</footer>


</body>
</html>
