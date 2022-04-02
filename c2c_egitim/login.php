<?php require_once 'header.php'; ?>
<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container">
        <div class="inner-banner-wrapper">

        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->

<!-- Inner Page Banner Area End Here -->          
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Üye Giriş İşlemleri</h2>
        <div class="registration-details-area inner-page-padding">
        <?php 

if ($_GET['durum']=="hata") {?>

<div class="alert alert-danger">
    <strong>Hata!</strong> Hatalı Giriş
</div>                   

<?php } else if ($_GET['durum']=="exit") {?>

<div class="alert alert-success">
    <strong>Bilgi!</strong> Başarıyla Çıkış Yapıldı
</div>                   

<?php } else if ($_GET['durum']=="kayitok") {?>

<div class="alert alert-success">
    <strong>Bilgi!</strong> Kaydınız başarılı giriş yapabilirsiniz.
</div>                   

<?php } else if ($_GET['durum']=="captchahata") {?>

<div class="alert alert-danger">
    <strong>Hata!</strong> Güvenlik Kodu Hatalı
</div>                   

<?php } else if ($_GET['durum']=="mailno") {?>

<div class="alert alert-danger">
    <strong>Hata!</strong> Mail sunucumuzda problem var lütfen daha sonra tekrar deneyiniz...
</div>                   

<?php }
?>
    <form action="nedmin/netting/kullanici.php" method="POST" id="personal-info-form">



        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                <div class="form-group">
                    <label class="control-label" for="first-name">Mail Adresiniz *</label>
                    <input type="text" id="first-name" required="" placeholder="Mail Adresinizi Giriniz.." name="kullanici_mail" class="form-control">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                <div class="form-group">
                    <label class="control-label" for="last-name">Şifreniz *</label>
                    <input type="password" id="last-name" required="" placeholder="Şifrenizi Lütfen  Giriniz.." name="kullanici_password" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                <div class="form-group">
                <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
                <a class="btn btn-danger btn-xs" href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Değiştir ]</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="last-name">Güvenlik Kodunu Giriniz *</label>
                            <input type="text" id="last-name" required="" placeholder="Güvenlik Kodunu Giriniz" name="captcha_code" class="form-control">
                        </div>
                    </div>
        </div>

        


        <div class="row">

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
            <div class="pLace-order">
                <button class="update-btn disabled" type="submit" name="musterigiris" >Gönder</button>
            </div>
        </div>
    </div> 
</form>                      
</div> 
</div>
</div>
<!-- Registration Page Area End Here -->
<?php require_once 'footer.php'; ?>