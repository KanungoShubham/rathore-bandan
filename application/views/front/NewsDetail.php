
<style>
        .image-container {
        background-color: #0093e9;
        background-image: -webkit-linear-gradient(160deg, #0093e9 0%, #80d0c7 100%);
        background-image: -moz-linear-gradient(160deg, #0093e9 0%, #80d0c7 100%);
        background-image: -o-linear-gradient(160deg, #0093e9 0%, #80d0c7 100%);
        background-image: linear-gradient(160deg, #0093e9 0%, #80d0c7 100%);
        height: 250px;
    }
    .nimag {
        height: 220px;
        width: 220px;
        border: 1px solid;
        border-radius: 50%;
        margin-top: -138px;
    }
    .cards {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        /* width: 241px; */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transform: scale(1);
        transition: transform 0.3s ease-in-out;
    }
    .iconin{
        margin-top: -23px;
    }
    .paprimage{
        height: 300px;
    width: 250px;
    border: 3px solid #000;

    }
    </style>
<section class="py-5 header">
  
  


  <div class="row mx-auto" >
      <div class="col-md-3">
          <!-- Tabs nav -->
          <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <i class="fa fa-building mr-2" aria-hidden="true"></i>
                  <span class="font-weight-bold small text-uppercase">office information</span></a>

              <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <i class="fas fa-users"></i>
                  <span class="font-weight-bold small text-uppercase">Members</span></a>

                <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                <i class="fas fa-newspaper"></i>
                  <span class="font-weight-bold small text-uppercase">Monthly Paper</span></a>
                
              </div>

              <div class="card">
                  <div class="card-body">
                      <h4 class="mb-3">Contact Us</h4>
                      <div class="d-flex mb-3">
                      <i class="far fa-map-marker-alt"></i><h6 class="ml-3"><?php echo $news['npaddress']?> <?php echo $news['npcountry']?> <?php echo $news['npstate']?> <?php echo $news['npdistrict']?> (<?php echo $news['nppincode']?>) </h6>

                      </div>
                      <div class="d-flex mb-3">
                      <i class="far fa-mobile"></i><h6 class="ml-3"><?php echo implode(", ",json_decode($news['npofficmobile'])); ?> </h6>

                      </div>
                      <div class="d-flex mb-3">
                      <i class="far fa-phone-office"></i><h6 class="ml-3"><?php echo implode(", ",json_decode($news['npofficelandline'])); ?> </h6>

                      </div>
                      <div class="d-flex mb-3">
                      <i class="fal fa-envelope"></i><h6 class="ml-3"><?php echo implode(", ",json_decode($news['npofficehemail'])); ?> </h6>

                      </div>
                      <div class="d-flex mb-3">
                     <a href="<?php echo $news['npofficefacebook']?>"><i class="fab fa-facebook-f lif"></i></a>  <a  class="ml-4" href="<?php echo $news['npofficeinstagram']?>"><i class="fab fa-instagram lin"></i></a>

                      </div>
                      
          </div>
      </div>
  </div>


      <div class="col-md-9">
          <!-- Tabs content -->
          <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade shadow rounded bg-white show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
             
              <div class="image-container">
                    <div class="d-flex btn btn-dark text-white float-right">
                        <h4 class="mx-2 text-white">oping years</h4>
                        :-
                        <h4 class="mx-2 text-white"><?php echo date('F j Y', strtotime($news['nprgyrars'])) ?></h4>
                    </div>
                </div>
                <div class="text-center">
                    <img
                        src="<?php $imgs = $news['npofficeimage']; 
                   if ($imgs) {echo base_url().''.$news['npofficeimage'];} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                        class="card-img-top modal-target nimag"
                    />
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2 class="mx-2 text-center"><?php echo $news['npofficename']?></h2>
                    </div>
                </div>
                <div class="mx-3">
                    <h3 class="mx-2">About Us</h3>
                    <p class="garborder mx-2"></p>
                    <div class="ap">
                        <?php echo $news['npdec']?>
                    </div>
                </div>
             
             
             
    
</div>
           
          
             
           <div class="tab-pane fade rounded bg-white p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
           <div class="row" id="examples">
           <?php  foreach ($maber as $row) {  ?>


            <div class="col-md-6 mb-5">
                        <div class="cards mt-3">
                            <div class="product-detail-container p-2">
                                <div class="justify-content-between align-items-center">
                                    <div class="d-flex">
                                        <div>
                                            <img
                                                class="modal-target mb-3 profile"
                                                alt=""
                                                src="<?php $news = $row->memberimage; 
                                            if ($news) {
                        echo  base_url().$row->memberimage;
                        } else {
                        echo base_url().'assets/images/peoples.png';
                        }
                    ?>"
                                                style="border-radius: 50px !important;"
                                            />
                                        </div>
                                        <div>
                                            <p class="text-dark ml-3" style="font-size: 14px;">
                                                <b> <?php echo $row->memberpost?> </b>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10 pl-5">
                                            <div>
                                                <h5 class="text-dark mb-3">
                                                    <b> Name &nbsp;:&nbsp;<?php echo  $row->membername ?></b>
                                                </h5>
                                            </div>

                                            <div>
                                                <p class="text-dark d-flex">
                                                    <b>
                                                        <i class="far fa-mobile"></i>
                                                        <?php echo $row->membernumber?>
                                                    </b>
                                                </p>
                                            </div>
                                            <div>
                                                <p class="text-dark d-flex">
                                                    <b>
                                                        <i class="fal fa-envelope"></i>
                                                        <?php echo $row->memberemailid?>
                                                    </b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 iconin">
                                            <div>
                                                <p class="text-dark">
                                                    <a class="mb-2" href="<?php echo $row->memberfb?>" target="_blank"><i class="fab fa-facebook-f lif mb-2"></i></a>
                                                    <a class="mb-2" href="<?php echo $row->memberinsta?>" target="_blank"><i class="fab fa-instagram lin mb-2"></i></a>
                                                    <a class="mb-2" href="https://wa.me/<?php echo $row->memberwtnum?>" target="_blank"><i class="fab fa-whatsapp liw mb-2"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                  
                 
            
                           <?php } ?>
                           </div>
          </div>
              
            
              
              <div class="tab-pane fade  rounded bg-white p-3" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <div class="row" id="yoth">
              <?php  foreach ($nt as $sct) {  ?>
                  <div class="col-md-4 ">
                 <div class="">
                    <a href="<?php  echo base_url().''.$sct->paper ?>" target="_blank"> <img src="<?php $imgs = $sct->paper_thumbnail; 
             if ($imgs) {echo base_url().''.$sct->paper_thumbnail;} else {echo base_url().'assets/images/logos/rathore.png';}?>" class="card-img-top paprimage"></a>

              </div>



            
                           </div>
                           <?php } ?>
                   </div>
              </div>
                       
              
   
          </div>
      </div>
  </div>

</section>

<div id="modals" class="modals">
<span id="modal-close" class="modal-close">&times;</span>
<img id="modal-content" class="modal-content">
<div id="modal-caption" class="modal-caption"></div>
</div>
<script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>  
<script>$('#examples').paginate();$('#wom').paginate();$('#yoth').paginate(); $('#gerally').paginate();
var modal = document.getElementById('modals');

var modalClose = document.getElementById('modal-close');
modalClose.addEventListener('click', function() { 
modal.style.display = "none";
});
document.addEventListener('click', function (e) { 
if (e.target.className.indexOf('modal-target') !== -1) {
var img = e.target;
var modalImg = document.getElementById("modal-content");
var captionText = document.getElementById("modal-caption");
modal.style.display = "block";
modalImg.src = img.src;
captionText.innerHTML = img.alt;
}
});
</script>