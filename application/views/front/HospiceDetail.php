<style>
    .nimag {
        height: 220px;
        width: 220px;
        border: 1px solid;
        border-radius: 24%;
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
    .iconin {
        margin-top: -23px;
    }
    .pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: 0;
    line-height: normal;
    color: #000000;
    background-color: #fff;
    border: solid #e1e1e1 1px;
    border-radius: 0;
    width: auto;
    text-align: center;
    height: 40px;
    line-height: 28px;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff !important;
    background-color: #007bff;
    border-color: #007bff;
}
a{
    color:#000 !important;
}
</style>
<section class="py-5 header">
    <div class="row mx-auto">
        <div class="col-md-3">
            <!-- Tabs nav -->
            <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="fa fa-building mr-2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">Hospice information</span>
                </a>

                <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <i class="fa fa-male mr-2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">Men's Board</span>
                </a>

                <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <i class="fa fa-female mr-2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">Women's Board</span>
                </a>

                <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fa fa-child mr2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">Youth Board</span>
                </a>
                <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-garllay" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fa fa-image mr-2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">Hospice Gallery</span>
                </a>
                <a class="nav-link mb-3 p-3 shadow" id="v-pills-Donation-tab" data-toggle="pill" href="#v-pills-Donation" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fa fa-image mr-2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">Donation</span>
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Contact Us</h4>
                    <div class="d-flex mb-3">
                        <i class="far fa-map-marker-alt"></i>
                        <h6 class="ml-3">
                            <?php echo $hospice['address']?>
                            <?php echo $hospice['country']?>
                            <?php echo $hospice['state']?>
                            <?php echo $hospice['city']?>
                            (<?php echo $hospice['pincode']?>)
                        </h6>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="far fa-mobile"></i>
                        <h6 class="ml-3"><?php echo implode(", ",json_decode($hospice['mobile'])); ?></h6>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="far fa-phone-office"></i>
                        <h6 class="ml-3"><?php echo implode(", ",json_decode($hospice['landline'])); ?></h6>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fal fa-envelope"></i>
                        <h6 class="ml-3"><?php echo implode(", ",json_decode($hospice['hemail'])); ?></h6>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="<?php echo $hospice['facebook']?>"><i class="fab fa-facebook-f lif"></i></a> <a class="ml-4" href="<?php echo $hospice['instagram']?>"><i class="fab fa-instagram lin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <!-- Tabs content -->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade shadow rounded bg-white show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <img
                        src="<?php $imgs = $hospice['image']; 
                   if ($imgs) {echo base_url().''.$hospice['image'];} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                        class="card-img-top modal-target"
                        alt="..."
                        style="height: 400px;"
                    />
                    <div>
                        <h2 class="mx-2"><?php echo $hospice['hospicname']?></h2>
                        <p class="garborder mx-2"></p>
                    </div>
                    <div class="mx-3">
                        <h3 class="mx-3">About Us</h3>
                        <p class="garborder mx-2"></p>
                        <div class="ap mx-5">
                            <?php echo $hospice['hospice_desc']?>
                        </div>
                    </div>
                    <div class="mx-3 mb-3">
                        <h3 class="mx-3">Our Facilities</h3>
                        <p class="garborder mx-2"></p>
                        <div class="pt-3 lm mx-5">
                            <?php echo $hospice['facilities']?>
                        </div>
                    </div>

                    <div class="mx-3 mb-3">
                        <h3 class="mx-3">Our Pricings / Details</h3>
                        <p class="garborder mx-2"></p>
                        <div class="pt-3 d-flex mx-5">
                            <h6 class="mb-4">Per day charges(Seasons Dependable)</h6>
                            &nbsp; -&nbsp;
                            <h6>Rs.<?php echo $hospice['pricetohospic']?>/- To Rs.<?php echo $hospice['pricetohospic']?>/-</h6>
                        </div>
                        <div class="d-flex mx-5">
                            <h6 class="mb-4">Electricity Charges</h6>
                            &nbsp; -&nbsp;
                            <h6>Rs.<?php echo $hospice['hospicelectricity']?>/- per unit</h6>
                        </div>
                        <div class="d-flex mx-5">
                            <h6 class="mb-4">Total Room</h6>
                            &nbsp; -&nbsp;
                            <h6><?php echo $hospice['room']?></h6>
                        </div>
                    </div>
                    <div class="mx-3 mb-3">
                        <h3 class="mx-3">Note</h3>
                        <p class="garborder mx-2"></p>
                        <div class="pt-3 ap mx-5">
                            <?php echo $hospice['note']?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade rounded bg-white p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row" id="examples">
                        <?php  foreach ($man as $row) {  ?>

                        <div class="col-md-6 mb-5" data-aos="zoom-in">
                            <div class="cards mt-3">
                                <div class="product-detail-container p-2">
                                    <div class="justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div>
                                                <img
                                                    class="modal-target mb-3 profile"
                                                    alt=""
                                                    src="<?php $news = $row->careimage; 
                                            if ($news) {
                        echo  base_url().$row->careimage;
                        } else {
                        echo base_url().'assets/images/man.png';
                        }
                    ?>"
                                                    style="border-radius: 50px !important;"
                                                />
                                            </div>
                                            <div>
                                                <p class="text-dark ml-3" style="font-size: 14px;">
                                                    <b> <?php echo $row->carepost?>  (Men's Board)</b>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 pl-5">
                                                <div>
                                                    <h5 class="text-dark mb-3">
                                                        <b> Name &nbsp;:&nbsp;<?php echo  $row->carename ?></b>
                                                    </h5>
                                                </div>

                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="far fa-mobile"></i>
                                                            <?php echo $row->caremobile?>
                                                        </b>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="fal fa-envelope"></i>
                                                            <?php echo $row->caremail?>
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 iconin">
                                                <div>
                                                    <p class="text-dark">
                                                        <a class="mb-2" href="<?php echo $row->carefb?>" target="_blank"><i class="fab fa-facebook-f lif mb-2"></i></a>
                                                        <a class="mb-2" href="<?php echo $row->careinsta?>" target="_blank"><i class="fab fa-instagram lin mb-2"></i></a>
                                                        <a class="mb-2" href="https://wa.me/<?php echo $row->carewhatsapp?>" target="_blank"><i class="fab fa-whatsapp liw mb-2"></i></a>
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

                <div class="tab-pane fade rounded bg-white p-3" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="row" id="wom">
                        <?php  foreach ($woman as $rwoman) {  ?>
                        <div class="col-md-6 mb-5" data-aos="zoom-in">
                            <div class="cards mt-3">
                                <div class="product-detail-container p-2">
                                    <div class="justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div>
                                                <img
                                                    class="modal-target mb-3 profile"
                                                    alt=""
                                                    src="<?php $news = $rwoman->careimage; 
                                            if ($news) {
                        echo  base_url().$rwoman->careimage;
                        } else {
                            echo base_url().'assets/images/woman.png';
                        }
                    ?>"
                                                    style="border-radius: 50px !important;"
                                                />
                                            </div>
                                            <div>
                                                <p class="text-dark ml-3" style="font-size: 14px;">
                                                    <b> <?php echo $rwoman->carepost?></b>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 pl-5">
                                                <div>
                                                    <h5 class="text-dark mb-3">
                                                        <b> Name &nbsp;:&nbsp;<?php echo  $rwoman->carename ?></b>
                                                    </h5>
                                                </div>

                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="far fa-mobile"></i>
                                                            <?php echo $rwoman->caremobile?>
                                                        </b>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="fal fa-envelope"></i>
                                                            <?php echo $rwoman->caremail?>
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 iconin">
                                                <div>
                                                    <p class="text-dark">
                                                        <a class="mb-2" href="<?php echo $rwoman->carefb?>" target="_blank"><i class="fab fa-facebook-f lif mb-2"></i></a>
                                                        <a class="mb-2" href="<?php echo $rwoman->careinsta?>" target="_blank"><i class="fab fa-instagram lin mb-2"></i></a>
                                                        <a class="mb-2" href="https://wa.me/<?php echo $rwoman->carewhatsapp?>" target="_blank"><i class="fab fa-whatsapp liw mb-2"></i></a>
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

                <div class="tab-pane fade rounded bg-white p-3" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="row" id="yoth">
                        <?php  foreach ($youth as $ryo) {  ?>
                        <div class="col-md-6 mb-5" data-aos="zoom-in">
                            <div class="cards mt-3">
                                <div class="product-detail-container p-2">
                                    <div class="justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div>
                                                <img
                                                    class="modal-target mb-3 profile"
                                                    alt=""
                                                    src="<?php $news = $ryo->careimage; 
                                            if ($news) {
                        echo  base_url().$ryo->careimage;
                        } else {
                            echo base_url().'assets/images/youth.png';
                        }
                    ?>"
                                                    style="border-radius: 50px !important;"
                                                />
                                            </div>
                                            <div>
                                                <p class="text-dark ml-3" style="font-size: 14px;">
                                                    <b> <?php echo $ryo->carepost?></b>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 pl-5">
                                                <div>
                                                    <h5 class="text-dark mb-3">
                                                        <b> Name &nbsp;:&nbsp;<?php echo  $ryo->carename ?></b>
                                                    </h5>
                                                </div>

                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="far fa-mobile"></i>
                                                            <?php echo $ryo->caremobile?>
                                                        </b>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="fal fa-envelope"></i>
                                                            <?php echo $ryo->caremail?>
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 iconin">
                                                <div>
                                                    <p class="text-dark">
                                                        <a class="mb-2" href="<?php echo $ryo->carefb?>" target="_blank"><i class="fab fa-facebook-f lif mb-2"></i></a>
                                                        <a class="mb-2" href="<?php echo $ryo->careinsta?>" target="_blank"><i class="fab fa-instagram lin mb-2"></i></a>
                                                        <a class="mb-2" href="https://wa.me/<?php echo $ryo->carewhatsapp?>" target="_blank"><i class="fab fa-whatsapp liw mb-2"></i></a>
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

                <div class="tab-pane fade rounded bg-white p-3" id="v-pills-garllay" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="row" id="gerally">
                        <?php  foreach ($gallery as $rga) {  ?>

                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="border border-info mt-3">
                                <img
                                    class="modal-target mb-3 proimg gimages"
                                    alt=""
                                    src="<?php $ga = $rga->images; 
                                            if ($ga) {
                        echo  base_url().$rga->images;
                        } else {
                        echo base_url().'assets/usercover/rathore.png';
                        }
                    ?>"
                                />
                            </div>
                        </div>

                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade rounded bg-white p-3" id="v-pills-Donation" role="tabpanel" aria-labelledby="v-pills-Donation-tab">
                <table id="user_data" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                            
                               <th width="35%" >Name</th>  
                               <th width="35%" class="text-center">Donation name</th>  
                               <th width="35%" class="text-center">Rupay (&#x20B9;)</th>  
                               <th width="35%" class="text-center">Mobile Number</th>  
                               <th width="35%" >Address</th>  
                           
                          </tr>  
 
                     </thead> 
                     <?php foreach ($dontion as $c){ ?>

<tr>
    <td ><?php echo $c->name; ?></td>
    <td class="text-center"><?php echo $c->dontion_type; ?></td>
    <td class="text-center"> <?php echo $c->dontion; ?> /-</td>
    <td class="text-center"><?php echo $c->mobile; ?></td>  
    <td><?php echo $c->address; ?></td>             
</tr>

<?php } ?> 
                </table> 
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
 <script>
 $('#examples').paginate();$('#wom').paginate();$('#yoth').paginate(); $('#gerally').paginate();
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
$(document).ready( function () {
$('#user_data').DataTable();
} );
</script>