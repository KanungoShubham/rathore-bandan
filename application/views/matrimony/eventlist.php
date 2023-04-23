<style>
    .bc{
        background-color: #0093E9;
background-image: -webkit-linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
background-image: -moz-linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
background-image: -o-linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);


    }
    </style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description">
                            Basic form elements
                        </p>

                        <div class="col-md-12">
                            <div class="row">
                                <?php  foreach ($evlist as $rw) {  ?>
                                <div class="col-md-4 mb-5">
                                    <div class="card card-bodys bc" >
                                      <div class="d-flex">
                                        <div class="mt-2 ml-3">
                                        <img class="proimg " src="<?php $imgs = $rw->eimage; if ($imgs) {echo base_url().''.$rw->eimage;} else {echo base_url().'uploads/origin/def-img.png';}?>"
                                            style="width: 90px; height: 90px; border-radius: 50px;"
                                        />
                                </div>
                                <div class="my-auto mx-auto">
                                        <h4 class="text-center text-white " style="font-size: 14px;"><?php echo $rw->eventname; ?></h4>
                                </div>
                                </div>
                                        <div class="mt-3 mb-3">
                                            

                                            <center>
                                               
                                                <a href="<?php echo base_url()?>updatevent/<?php echo $rw->id ?>" class="hosmbe  btn btn-info btn-sm " >
                                                    Update event
                                                </a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <?php   }   ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

         