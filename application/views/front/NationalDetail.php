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
        border-radius: 24%;
        margin-top: -138px;
    }
    .cards {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        /* height: 228px; */
        /* width: 241px; */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transform: scale(1);
        transition: transform 0.3s ease-in-out;
    }
    .iconin {
        margin-top: -23px;
    }
</style>
<section class="py-5 header">
    <div class="row mx-auto">
        <div class="col-md-3">
            <!-- Tabs nav -->
            <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="fa fa-building mr-2" aria-hidden="true"></i>
                    <span class="font-weight-bold small text-uppercase">office information</span>
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
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Contact Us</h4>
                    <div class="d-flex mb-3">
                        <i class="far fa-map-marker-alt"></i>
                        <h6 class="ml-3">
                            <?php echo $national['address']?>
                            <?php echo $national['country']?>
                            <?php echo $national['state']?>
                            <?php echo $national['city']?>
                            (<?php echo $national['pincode']?>)
                        </h6>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="far fa-mobile"></i>
                        <h6 class="ml-3"><?php echo implode(", ",json_decode($national['officmobile'])); ?></h6>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="far fa-phone-office"></i>
                        <h6 class="ml-3"><?php echo implode(", ",json_decode($national['officelandline'])); ?></h6>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fal fa-envelope"></i>
                        <h6 class="ml-3" style="width: 250px;"><?php echo implode(", ",json_decode($national['officehemail'])); ?></h6>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="<?php echo $national['officefacebook']?>"><i class="fab fa-facebook-f lif"></i></a> <a class="ml-4" href="<?php echo $national['officeinstagram']?>"><i class="fab fa-instagram lin"></i></a>
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
                            <h4 class="mx-2 text-white"><?php echo date('j F Y', strtotime($national['officeyears'])) ?></h4>
                        </div>
                    </div>
                    <div class="text-center">
                        <img
                            src="<?php $imgs = $national['officeimage']; 
             if ($imgs) {echo base_url().''.$national['officeimage'];} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                            class="card-img-top modal-target nimag"
                            alt="..."
                        />
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h2 class="mx-2 text-center"><?php echo $national['officename']?></h2>
                        </div>
                    </div>
                    <div class="mx-3">
                        <h3 class="mx-2">About Us</h3>
                        <p class="garborder mx-2"></p>
                        <div class="ap">
                            <?php echo $national['officedesc']?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade rounded bg-white p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row" id="examples">
                        <?php  foreach ($nmale as $row) {  ?>

                        <div class="col-md-6 mb-5" data-aos="zoom-in">
                            <div class="cards mt-3">
                                <div class="product-detail-container p-2">
                                    <div class="justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div>
                                                <img
                                                    class="modal-target mb-3 profile"
                                                    alt=""
                                                    src="<?php $news = $row->nmberimage; 
                    if ($news) {
                    echo  base_url().$row->nmberimage;
                    } else {
                        echo base_url().'assets/images/man.png';
                    }
                    ?>"
                                                    style="border-radius: 50px !important;"
                                                />
                                            </div>
                                            <div>
                                                <p class="text-dark ml-3" style="font-size: 14px;">
                                                    <b> <?php echo $row->nmberpost?> </b>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div>
                                                    <h5 class="text-dark mb-3">
                                                        <b> Name &nbsp;:&nbsp;<?php echo  $row->nmbername ?></b>
                                                    </h5>
                                                </div>

                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="far fa-mobile"></i>
                                                            <?php echo $row->nmbrmobile?>
                                                        </b>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="fal fa-envelope"></i>
                                                            <?php echo $row->nmbremail?>
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 iconin">
                                                <div>
                                                    <p class="text-dark">
                                                        <a class="mb-2" href="<?php echo $row->nmberfb?>" target="_blank"><i class="fab fa-facebook-f lif mb-2"></i></a>
                                                        <a class="mb-2" href="<?php echo $row->nmbrinsta?>" target="_blank"><i class="fab fa-instagram lin mb-2"></i></a>
                                                        <a class="mb-2" href="https://wa.me/<?php echo $row->nmbrwhatsapp?>" target="_blank"><i class="fab fa-whatsapp liw mb-2"></i></a>
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
                        <?php  foreach ($nfmale as $rwoman) {  ?>

                        <div class="col-md-6 mb-5" data-aos="zoom-in">
                            <div class="cards mt-3">
                                <div class="product-detail-container p-2">
                                    <div class="justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div>
                                                <img
                                                    class="modal-target mb-3 profile"
                                                    alt=""
                                                    src="<?php $new = $rwoman->nmberimage; 
                                                if ($new) {
                                                echo  base_url().$rwoman->nmberimage;
                                                } else {
                                                    echo base_url().'assets/images/woman.png';
                                                }
                                                ?>"
                                                    style="border-radius: 50px !important;"
                                                />
                                            </div>
                                            <div>
                                                <p class="text-dark ml-3" style="font-size: 14px;">
                                                    <b> <?php echo $rwoman->nmberpost?> </b>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div>
                                                    <h5 class="text-dark mb-3">
                                                        <b> Name &nbsp;:&nbsp;<?php echo  $rwoman->nmbername ?></b>
                                                    </h5>
                                                </div>

                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="far fa-mobile"></i>
                                                            <?php echo $rwoman->nmbrmobile?>
                                                        </b>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="fal fa-envelope"></i>
                                                            <?php echo $rwoman->nmbremail?>
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2 iconin">
                                                <div>
                                                    <p class="text-dark">
                                                        <a href="<?php echo $rwoman->nmberfb?>" target="_blank"><i class="fab fa-facebook-f lif mb-3"></i></a>
                                                        <a href="<?php echo $rwoman->nmbrinsta?>" target="_blank"><i class="fab fa-instagram lin mb-3"></i></a>
                                                        <a href="https://wa.me/<?php echo $rwoman->nmbrwhatsapp?>" target="_blank"><i class="fab fa-whatsapp liw mb-3"></i></a>
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
                        <?php  foreach ($nyouth as $ryo) {  ?>

                        <div class="col-md-6 mb-5">
                            <div class="cards mt-3">
                                <div class="product-detail-container p-2">
                                    <div class="justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div>
                                                <img
                                                    class="modal-target mb-3 profile"
                                                    alt=""
                                                    src="<?php $yo = $ryo->nmberimage; 
                                      if ($yo) {
                  echo  base_url().$ryo->nmberimage;
                  } else {
                    echo base_url().'assets/images/youth.png';
                  }
              ?>"
                                                    style="border-radius: 50px !important;"
                                                />
                                            </div>
                                            <div>
                                                <p class="text-dark ml-3" style="font-size: 14px;">
                                                    <b> <?php echo $ryo->nmberpost?></b>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">
                                                <div>
                                                    <h5 class="text-dark mb-3">
                                                        <b> Name &nbsp;:&nbsp;<?php echo  $ryo->nmbername ?></b>
                                                    </h5>
                                                </div>

                                                <div>
                                                    <p class="text-dark d-flex">
                                                        <b>
                                                            <i class="far fa-mobile"></i>
                                                            <?php echo $ryo->nmbrmobile?>
                                                        </b>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h5 class="text-dark d-flex">
                                                        <b>
                                                            <i class="fal fa-envelope"></i>
                                                            <?php echo $ryo->nmbremail?>
                                                        </b>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-md-2 iconin">
                                                <div>
                                                    <p class="text-dark">
                                                        <a href="<?php echo $ryo->nmberfb?>" target="_blank"><i class="fab fa-facebook-f lif mb-3"></i></a>
                                                        <a href="<?php echo $ryo->nmbrinsta?>" target="_blank"><i class="fab fa-instagram lin mb-3"></i></a>
                                                        <a href="https://wa.me/<?php echo $ryo->nmbrwhatsapp?>" target="_blank"><i class="fab fa-whatsapp liw mb-3"></i></a>
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
    </div>
</section>

<div id="modals" class="modals">
    <span id="modal-close" class="modal-close">&times;</span>
    <img id="modal-content" class="modal-content" />
    <div id="modal-caption" class="modal-caption"></div>
</div>
<script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>
<script>
    $("#examples").paginate();
    $("#wom").paginate();
    $("#yoth").paginate();
    $("#gerally").paginate();
    var modal = document.getElementById("modals");

    var modalClose = document.getElementById("modal-close");
    modalClose.addEventListener("click", function () {
        modal.style.display = "none";
    });
    document.addEventListener("click", function (e) {
        if (e.target.className.indexOf("modal-target") !== -1) {
            var img = e.target;
            var modalImg = document.getElementById("modal-content");
            var captionText = document.getElementById("modal-caption");
            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
        }
    });
</script>
