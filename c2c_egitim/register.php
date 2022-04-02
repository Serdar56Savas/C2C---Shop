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
                    <h2 class="title-section">Üye Kayıt İşlemleri</h2>
                    <div class="registration-details-area inner-page-padding">
                        <?php 

				if ($_GET['durum']=="farklisifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
				</div>
					
				<?php } elseif ($_GET['durum']=="eksiksifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
				</div>
					
				<?php } elseif ($_GET['durum']=="mukerrerkayit") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
				</div>
					
				<?php } elseif ($_GET['durum']=="basarisiz") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
				</div>
					
				<?php }
				 ?>
                        <form action="nedmin/netting/kullanici.php" method="POST" id="personal-info-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Mail Adresiniz *</label>
                                        <input type="text" required="" id="first-name" name="kullanici_mail" placeholder="Mail Adresinizi Lütfen Giriniz " class="form-control">
                                    </div>
                                </div>
                                
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Adınız *</label>
                                        <input type="text" required="" id="first-name" name="kullanici_ad" placeholder="Adınızı Giriniz.. " class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Soyadınız *</label>
                                        <input type="text" required="" id="last-name" name="kullanici_soyad" placeholder="Soyadınızı Giriniz.." class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">Şifreniz *</label>
                                        <input type="password" id="first-name" required="" placeholder="Şifrenizi Giriniz.." name="kullanici_passwordone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Şifreniz Tekrar *</label>
                                        <input type="password" id="last-name" required="" placeholder="Şifrenizi Lütfen Tekrardan Giriniz.." name="kullanici_passwordtwo" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                    <div class="pLace-order">
                                        <button class="update-btn disabled" type="submit" name="musterikaydet" >Gönder</button>
                                    </div>
                                </div>
                            </div> 
                        </form>                      
                    </div> 
                </div>
            </div>
            <!-- Registration Page Area End Here -->
            <?php require_once 'footer.php'; ?>