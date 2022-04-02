
<?php
    require_once 'header.php';
    islemkontrol();
?>
            <!-- Main Banner 1 Area Start Here -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="inner-banner-wrapper">
                        
                    </div>
                </div>
            </div>
            <!-- Main Banner 1 Area End Here --> 
            <!-- Inner Page Banner Area Start Here -->
            <br>
            <!-- Inner Page Banner Area End Here -->          
            <!-- Settings Page Start Here -->
            <div class="settings-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <div class="row settings-wrapper">

                        <?php require_once 'hesab-sidebar.php'; ?>


                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                                <?php 

                if ($_GET['durum']=="hata") {?>

                <div class="alert alert-danger">
                    <strong>Hata!</strong> İşlem Başarısız!
                </div>
                    
                <?php } else if ($_GET['durum']=="ok") {?>

                <div class="alert alert-success">
                    <strong>Bilgi!</strong> Kayıt Başarılı!
                </div>
                    
                <?php }
                 ?>
                            
                            


                            <form action="nedmin/netting/kullanici.php" method="POST" class="form-horizontal" id="personal-info-form">
                                <div class="settings-details tab-content">
                                    <div class="tab-pane fade active in" id="Personal">
                                        <h2 class="title-section">Hesap Bilgilerimi Düzenle</h2>
                                        <div class="personal-info inner-page-padding"> 

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email Adresi</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="kullanici_mail" disabled="" id="first-name" value="<?php echo $kullanicicek['kullanici_mail'] ?>" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Ad</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="kullanici_ad" id="first-name" value="<?php echo $kullanicicek['kullanici_ad'] ?>" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Soyad</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="kullanici_soyad" id="last-name" value="<?php echo $kullanicicek['kullanici_soyad'] ?>" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Telefon GSM</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm'] ?>" id="company-name" type="text">
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            <div class="form-group">
                                                
                                                <div align="right" class="col-sm-12">
                                                    
                                                    <button class="update-btn" name="musteribilgiguncelle" id="login-update">Bilgileri Güncelle</button>
                                                </div>
                                            </div>                                        
                                        </div> 
                                    </div> 
                                                                           
                                </div> 

                            </form> 
                        </div>  
                    </div>  
                </div>  
            </div> 
            <!-- Settings Page End Here -->
            <!-- Footer Area Start Here -->
            <?php require_once 'footer.php'; ?>