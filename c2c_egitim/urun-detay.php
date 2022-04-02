<?php
require_once 'header.php'; 
$urunsor=$db->prepare("SELECT urun.*,kullanici.* FROM urun Inner Join kullanici ON urun.kullanici_id=kullanici.kullanici_id where  urun_id=:id and urun_durum=:durum");
$urunsor->execute(array(
    'id' => $_GET['urun_id'],
    'durum' => 1

));

$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)


?>
<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container">
        <div class="inner-banner-wrapper">
            <h2 style="color: white;"><?php echo $uruncek['urun_ad'] ?></h2>

        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">

        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Product Details Page Start Here -->
<div class="product-details-page bg-secondary">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive">
                    </div>                                
                    
                    <div class="product-tag-line">

                        <!--<ul class="product-tag-item">
                            <li><a href="#">Live Preview</a></li>
                            <li><a href="#">Screenshots</a></li>
                            <li><a href="#">Documentation</a></li>
                        </ul>-->
                        <ul class="social-default">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="product-details-title">
                                    <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Ürün Açıklaması</a></li>
                                    <li><a href="#review" data-toggle="tab" aria-expanded="false">Yorumlar</a></li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="description">
                                        <p><?php echo html_entity_decode( $uruncek['urun_detay']) ?></p>
                                    </div>
                                    <div class="tab-pane fade" id="review">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-8">



                                                    <div class="comments-list">

                                                        <?php 
                                                        $yorumsor=$db->prepare("SELECT yorumlar.*,kullanici.* FROM yorumlar INNER JOIN kullanici ON yorumlar.kullanici_id=kullanici.kullanici_id where urun_id=:id order by yorum_zaman DESC");
                                                        $yorumsor->execute(array(
                                                            'id' => $_GET['urun_id']
                                                        ));

                                                        if (!$yorumsor->rowCount()) {

                                                         echo "Bu ürün için henüz yorum girilmemiştir";
                                                     }

                                                     while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) { ?>

                                                         <div class="media">

                                                            <div class="media-body">

                                                                <h4 class="media-heading user_name"><img style="border-radius: 30px; float: left; margin-right: 10px;" width="32" height="32" class="img-responsive" src="<?php echo $yorumcek['kullanici_magazafoto'] ?>" alt="Profil Resmi"> <?php echo $yorumcek['kullanici_ad']." ".$yorumcek['kullanici_soyad'] ?> 

                                                                <ul style="float:right" class="default-rating">

                                                                    <?php 

                                                                    switch ($yorumcek['yorum_puan']) {

                                                                        case '5': ?>

                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>

                                                                        <?php                                                                           
                                                                        break;

                                                                        case '4': ?>

                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>


                                                                        <?php                                                                           
                                                                        break;

                                                                        case '3': ?>

                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>


                                                                        <?php                                                                           
                                                                        break;

                                                                        case '2': ?>

                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>


                                                                        <?php                                                                           
                                                                        break;

                                                                        case '1': ?>

                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>         
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>
                                                                        <li><i style="color:grey" class="fa fa-star" aria-hidden="true"></i></li>


                                                                        <?php                                                                           
                                                                        break;


                                                                    }


                                                                    ?>





                                                                    <li>(<span> <?php echo $yorumcek['yorum_puan'] ?></span> )</li>
                                                                </ul>
                                                            </h4>
                                                            <?php echo $yorumcek['yorum_detay'] ?>

                                                        </div>
                                                    </div>

                                                    <hr>

                                                <?php } ?>



                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div> 
                    <!--<h3 class="title-inner-section">More Product by PsdBosS</h3>                               
                    <div class="row more-product-item-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\product\more1.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Ballet - Dance</a></h4>
                                    <div class="p-title">PSD Template</div>
                                    <div class="p-price">$12</div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\product\more2.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Ballet - Dance</a></h4>
                                    <div class="p-title">PSD Template</div>
                                    <div class="p-price">$20</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\product\more3.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Ballet - Dance</a></h4>
                                    <div class="p-title">PSD Template</div>
                                    <div class="p-price">$49</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\product\more4.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Ballet - Dance</a></h4>
                                    <div class="p-title">PSD Template</div>
                                    <div class="p-price">$18</div>
                                </div>
                            </div>
                        </div>                                  
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\product\more5.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Ballet - Dance</a></h4>
                                    <div class="p-title">PSD Template</div>
                                    <div class="p-price">$59</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="img\product\more6.jpg" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="#">Grand Ballet - Dance</a></h4>
                                    <div class="p-title">PSD Template</div>
                                    <div class="p-price">$48</div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Ürün Fiyatı</h3>
                            <ul class="sidebar-product-price">
                                <li style="text-align: center;"><?php echo  $uruncek['urun_fiyat'] ?><span style="font-size:12px;"> TL</span></li>
                                <li>

                                </li>
                                
                            </ul>
                            <form action="odeme" method="POST">

                                <ul class="sidebar-product-btn">

                                    <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">

                                    <?php

                                    if (empty($_SESSION['userkullanici_id'])) {?>

                                        <li><a href="login" class="buy-now-btn" id="buy-button"><i class="fa fa-ban" aria-hidden="true"></i>Giriş Yapın</a></li>

                                   <?php }

                                   else if ($_SESSION['userkullanici_id']==$uruncek['kullanici_id']) { ?>


                                    <li><a  class="add-to-cart-btn" id="cart-button"><i class="fa fa-ban" aria-hidden="true"></i>Kendi Ürününüz</a></li>

                                <?php } else  { ?>

                                    <li><button type="submit" class="add-to-cart-btn" id="cart-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Satın Al</button></li>

                                <?php }




                                ?>

                            </ul>
                        </form>
                    </div>
                </div>                                
                <div class="sidebar-item">
                    <div class="sidebar-item-inner">
                        <ul class="sidebar-sale-info">
                            <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                            <li>

                                <?php 

                                $urunsay=$db->prepare("SELECT COUNT(urun_id) as say FROM siparis_detay where urun_id=:id");
                                $urunsay->execute(array(
                                    'id' => $_GET['urun_id']
                                ));

                                $saycek=$urunsay->fetch(PDO::FETCH_ASSOC);

                                echo $saycek['say'];

                                ?>


                            </li>
                            <li>Satış</li>                                           
                        </ul>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-inner">
                        <h3 class="sidebar-item-title">Ürün Bilgileri</h3>
                        <ul class="sidebar-product-info">
                            <li>Ürün Adı:<span> <?php echo  $uruncek['urun_ad'] ?></span></li>
                            <li>Ürün Fiyatı:<span> <?php echo  $uruncek['urun_fiyat'] ?> TL</span></li>
                            <li>Ürün Çıkış Tarihi:<span> <?php echo  $uruncek['urun_zaman'] ?></span></li>
                            <li>Toplam İndirme:<span> 613</span></li>
                            <li>Web Tarayacılar:<span> IE9, IE10, IE11, Firefox, Safari, Opera, Chrome</span></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-item-inner">
                        <h3 class="sidebar-item-title">Ürün Yazarı</h3>
                        <div class="sidebar-author-info">
                            <img style="width: 73px; height: 63px;" src="<?php echo $uruncek['kullanici_magazafoto'] ?>" alt="product" class="img-responsive">
                            <div class="sidebar-author-content">
                                <h3><?php echo $uruncek['kullanici_ad']." ".substr($uruncek['kullanici_soyad'],0,1) ?>.</h3>
                                <a href="satici-<?=seo($uruncek['kullanici_ad']."-".$uruncek['kullanici_soyad'])."-".$uruncek['kullanici_id'] ?>" class="view-profile">View Profile</a>
                            </div>
                        </div>
                        <ul class="sidebar-badges-item">
                            <li><img src="img\profile\badges1.png" alt="badges" class="img-responsive"></li>
                            <li><img src="img\profile\badges2.png" alt="badges" class="img-responsive"></li>
                            <li><img src="img\profile\badges3.png" alt="badges" class="img-responsive"></li>
                            <li><img src="img\profile\badges4.png" alt="badges" class="img-responsive"></li>
                            <li><img src="img\profile\badges5.png" alt="badges" class="img-responsive"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>                        
    </div>
</div>
</div>
<!-- Product Details Page End Here -->
<?php require_once 'footer.php'; ?>