
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




                <div class="settings-details tab-content">
                    <div class="tab-pane fade active in" id="Personal">
                        <h2 class="title-section">Siparişlerim</h2>
                        <div class="personal-info inner-page-padding"> 



                           <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Sipariş Tarihi</th>
                                  <th scope="col">Sipariş Numarası</th>
                                  
                                  <th scope="col">Detay</th>
                                  
                              </tr>
                          </thead>
                          <tbody>

                            <?php 
                            //Belirli veriyi seçme işlemi
                            $siparissor=$db->prepare("SELECT * FROM siparis where kullanici_id=:kullanici_id order by siparis_zaman DESC");
                            $siparissor->execute(array(
                                'kullanici_id' => $_SESSION['userkullanici_id']

                            ));

                            $say=0;

                            while($siparicek=$siparissor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                                

                                <tr>
                                  <th scope="row"><?php echo $say ?></th>
                                  <td><?php echo $siparicek['siparis_zaman'] ?></td>
                                  <td><?php echo $siparicek['siparis_id'] ?></td>
                                  <td><a href="siparis-detay?siparis_id=<?php echo $siparicek['siparis_id'] ?>"><button class="btn btn-primary btn-xs">Detay</button></a></td>
                                  
                              </tr>
                          <?php } ?>

                          </tbody>
                      </table>


















                  </div> 
              </div> 

          </div> 


      </div>  
  </div>  
</div>  
</div> 
<!-- Settings Page End Here -->
<!-- Footer Area Start Here -->
<?php require_once 'footer.php'; ?>

<script type="text/javascript">

    $(document).ready(function(){

        $("#kullanici_tip").change(function(){

            var tip=$("#kullanici_tip").val();
            if (tip=="PERSONAL") {

                $("#kurumsal").hide();
                $("#tc").show();

            } else if (tip=="PRIVATE_COMPANY"){

                $("#kurumsal").show();
                $("#tc").hide();
            }
        }).change();
    });




</script>
