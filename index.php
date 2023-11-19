<?php
session_start();
$username = $_SESSION["username"];

include("baglanti.php");

$adsoyad=$telefon=$email=$konu=$mesaj="";

if(isset($_POST["submit"])) {
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES 
    ('$adsoyad','$telefon','$email','$konu','$mesaj')";
    $query=mysqli_query($baglan,$ekle);
}

    


?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>anasayfa | motor</title>
    <script src="https://kit.fontawesome.com/1996318f72.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


<linkrel rel="stylesheet"
 href="owl/owl.carousel.min.css">
<linkrel rel="stylesheet"
 href="owl/owl.theme.default.min.css">

</head>
<body>
    
<section id = "menu">
<div id = "logo"><i class="fa-solid fa-motorcycle"></i>MOTOSİKLET</div>

<nav>
<a href=""><i class="fa-solid fa-right-to-bracket"></i>  kayit</a>    
<a href=""><i class="fa-solid fa-house ikon"></i>anasayfa</a>
<a href="#egitimlergo"><i class="fa-solid fa-graduation-cap ikon"></i>eğitimler</a>
<a href=""><i class="fa-solid fa-helmet-safety ikon"></i>ekipmanlar</a>
<a href=""><i class="fa-solid fa-person-biking ikon"></i>motorlar</a>
<a href="#h3iletisim"><i class="fa-regular fa-comment ikon"></i>iletişim</a>
<a href="#hakkimdago"><i class="fa-solid fa-circle-info"></i>   hakkimda</a>
</nav>
</section>

<section  id = "anasayfa" >
<div  id = "black">

</div>
<div id="icerik" >
<p>Hos geldin asko 1<?php echo $username ?></p>

<h2>MOTOSİKLET</h2>
<hr width="300" align ="left">
<p>Motosikletle alakali bilgi almak ve kendinizi 
    geliştirmek istiyorsaniz bu web sitesi size yardimci olacaktir

</p>
<input type="submit" value="kayit">
<input type="submit" value="Giriş">

</section>
</div>

<section id="egitimler">
    <div class="container">
      <h3 id="egitimlergo">Eğitimler</h3>  


<div class="card item" >
    <img src="img/ekipman2.jpeg" alt="" class="img-fluid">

    <h5 class="baslikcard">Ekipmanlar</h5>

    <p class="cardp">Nedir ve ne işe yarar?</p>
</div>

<div class="card item" >
    <img  src="img/oturus.png" alt="" class="img-fluid">

    <h5 class="baslikcard">Oturuş</h5>

    <p class="cardp">Doğru oturuş pozisyonu. </p>
</div>

<div class="card item" >
    <img 
    src="img/surus2.jpg" alt="" class="img-fluid">
    <h5
     class="baslikcard">Sürüş</h5>
    <p class="cardp">Yeni başlayanlar için.</p>
</div>

<div class="card item" >
    <img 
    src="img/fren.jpg" alt="" class="img-fluid ">
    <h5
     class="baslikcard">Frenleme</h5>
    <p class="cardp">Etkili frenleme nasil yapilir?
        ABS`nin önemi.
    </p>
</div>

<div class="card item" >
    <img 
    src="img/viraj.jpg" alt="" class="img-fluid">
    <h5
     class="baslikcard">Viraj</h5>
    <p class="cardp">Viraj nasil alinir ve nelere dikkat edilir?</p>
</div>

<div class="card item" >
    <img 
    src="img/cesitler.jpg" alt="" class="img-fluid">
    <h5
     class="baslikcard">Motosiklet Çeşitleri</h5>
    <p class="cardp">Motosikletinize göre kullanim şekilleri</p>
</div>
</section>
<section id="iletisim">
 <div class="container"></div>
 <h3 id="h3iletisim" >İletişim</h3>

 <form action="index.php" method="post">

 <div id="iletisimopak"> </div>
 </form>

    <form id="formgroup" action="" method="POST">
        <div id="solform">
            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
            <input type="text" name="tel" placeholder="telefon numarasi" required class="form-control">
        </div>
        <div id="sagform">
            <input type="email" name="mail" placeholder="email adresiniz" required class="form-control">
            <input type="text" name="konu" placeholder="konu başliği" required class="form-control">
        </div>
        <textarea name="mesaj" id="" cols="30" placeholder="mesaj girin" rows="10" required class="form-control"></textarea>
        <input type="submit" value="Gönder" name="submit">
    </form>
    <div id="adres">
        <h4>email adresim</h4>
        <p>email : muratfahli2018@gmail.com</p>
    </div>
 </div>

<footer>
    <div id="copyright">2023 tüm haklari saklidir</div>
    <div id="socialfooter">
        <a href="#"><i class="fa-solid fa-envelope social"></i></a>
</div>
<a href="#anasayfa"><i class="fa-solid fa-up-long"></i></a>
</footer>
</section>

<section id = "hakkimda"> 
    <h3 id="hakkimdago">hakkimda</h3>
    <div class="container">
        <div id="sol">
            <h5 id="h5sol">METİN YAZILACAK sadfasdfasdfas
                dfasdfasdfasdfasdfasdf
                adfasdfasdfasdfasdfasdfas
                dfasdfasdfasdfas</h5>
        <div id="sag">
            
            
        </div>
        </div>
        <p id="pson">son metin sdas asdas asdas
             asdasd asdasd asdfsdfsdf sdfsdfsdf sdfsdfsdf 
            asdasdaasd asdasdasd asd sdasdasd asdas 
        </p>
         </div>
    <img src="" alt="" class="img-fluid">
    
    </section>

    </div>

</body>
</html>


