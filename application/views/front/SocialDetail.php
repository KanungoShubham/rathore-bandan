
<style>
        .image-container {
            background-image: url("<?php echo base_url('assets/images/logos/nsl.png')?>");
        height: 287px;
        background-repeat: no-repeat;
        -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

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
    </style>
<section class="py-5 header">
  
  


  <div class="row mx-auto" >
      <div class="col-md-3">
          <!-- Tabs nav -->
          <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <i class="fa fa-building mr-2" aria-hidden="true"></i>
                  <span class="font-weight-bold small text-uppercase">Social Grope</span></a>

              <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <i class="fas fa-users"></i>
                  <span class="font-weight-bold small text-uppercase">Members</span></a>

              
                
              </div>

              <div class="card">
                  <div class="card-body">
                      <h4 class="mb-3">Contact Us</h4>
                      <div class="d-flex mb-3">
                      <i class="far fa-map-marker-alt"></i><h6 class="ml-3"><?php echo $social['district']?><?php echo $social['state']?> <?php echo $social['country']?> , <?php echo $social['city']?> (<?php echo $social['pincode']?>) </h6>

                      </div>
                      <div class="d-flex mb-3">
                      <i class="far fa-mobile"></i><h6 class="ml-3"><?php echo implode(", ",json_decode($social['officmobile'])); ?> </h6>

                      </div>
                      <div class="d-flex mb-3">
                      <i class="far fa-phone-office"></i><h6 class="ml-3"><?php echo implode(", ",json_decode($social['officelandline'])); ?> </h6>

                      </div>
                      <div class="d-flex mb-3">
                      <i class="fal fa-envelope"></i><h6 class="ml-3"><?php echo implode(", ",json_decode($social['officehemail'])); ?> </h6>

                      </div>
                      <div class="d-flex mb-3">
                     <a href="<?php echo $social['socialfacebook']?>"><i class="fab fa-facebook-f lif"></i></a>  <a  class="ml-4" href="<?php echo $social['socialinstagram']?>"><i class="fab fa-instagram lin"></i></a>

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
                        <h4 class="mx-2 text-white"><?php echo date('F j Y', strtotime($social['socialyear'])) ?></h4>
                    </div>
                </div>
                <div class="text-center">
                    <img
                        src="<?php $imgs = $social['profileimage']; 
                   if ($imgs) {echo base_url().''.$social['profileimage'];} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                        class="card-img-top modal-target nimag"
                    />
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h2 class="mx-2 text-center"><?php echo $social['socialname']?></h2>
                    </div>
                </div>
                <div class="mx-3">
                    <h3 class="mx-2">About Us</h3>
                    <p class="garborder mx-2"></p>
                    <div class="ap">
                        <?php echo  $social['socialdec']?>
                    </div>
                </div>


</div>
           
          
             
           <div class="tab-pane fade rounded bg-white p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
           <div class="row" id="examples">
           <?php  foreach ($smaber as $row) {  ?>
            
            <div class="col-md-4">
                        <div class="cards mt-3">
                            <div class="product-detail-container p-2">
                                <div class="justify-content-between align-items-center">
                                    <div class="d-flex">
                                        <div>
                                            <img
                                                class="modal-target mb-3 profile"
                                                alt=""
                                                src="<?php $news = $row->image; 
                                            if ($news) {
                        echo  base_url().$row->image;
                        } else {
                        echo base_url().'assets/usercover/rathore.png';
                        }
                    ?>"
                                                style="border-radius: 50px !important;"
                                            />
                                        </div>
                                        <div>
                                            <p class="text-dark ml-3" style="font-size: 14px;">
                                                <b> <?php echo $row->post?> </b>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div>
                                                <h5 class="text-dark mb-3">
                                                    <b> Name &nbsp;:&nbsp;<?php echo  $row->name ?></b>
                                                </h5>
                                            </div>

                                            <div>
                                                <p class="text-dark d-flex">
                                                    <b>
                                                        <i class="far fa-mobile"></i>
                                                        <?php echo $row->mobile?>
                                                    </b>
                                                </p>
                                            </div>
                                            <div>
                                                <p class="text-dark d-flex">
                                                    <b>
                                                        <i class="fal fa-envelope"></i>
                                                        <?php echo $row->emailid?>
                                                    </b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 iconin">
                                            <div>
                                                <p class="text-dark">
                                                    <a class="mb-2" href="<?php echo $row->facboock?>" target="_blank"><i class="fab fa-facebook-f lif mb-2"></i></a>
                                                    <a class="mb-2" href="<?php echo $row->instagram?>" target="_blank"><i class="fab fa-instagram lin mb-2"></i></a>
                                                    <a class="mb-2" href="https://wa.me/<?php echo $row->whatsappno?>" target="_blank"><i class="fab fa-whatsapp liw mb-2"></i></a>
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