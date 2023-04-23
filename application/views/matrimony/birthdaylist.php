<style>
    .bc{
        background: linear-gradient(rgba(0, 70, 102, 0.6),rgba(0, 70, 102, 0.6)),url(<?php echo base_url().'assets/birthdayimages/bd.webp';?>);
    background-size: 300px 176px;
    background-repeat: no-repeat;
    border-radius: 24px;


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
                                <?php  foreach ($birthdaylist as $rw) {  ?>
                                <div class="col-md-4 mb-5">
                                    <div class="card card-bodys bc" >
                                      <div class="d-flex">
                                        <div class="mt-2 ml-3">
                                        <img class="proimg " src="<?php $imgs = $rw->image; if ($imgs) {echo base_url().''.$rw->image;} else {echo base_url().'uploads/origin/def-img.png';}?>"
                                            style="width: 90px; height: 90px; border-radius: 50px;"
                                        />
                                </div>
                                <div class="my-auto mx-auto">
                                        <h4 class="text-center text-white " style="font-size: 14px;"><?php echo $rw->name; ?></h4>
                                </div>
                                </div>
                                        <div class="mt-3 mb-3">
                                            

                                            <center>
                                               
                                                <a href="<?php echo base_url()?>updatbirthday/<?php echo $rw->id ?>" class="hosmbe  btn btn-info btn-sm " >
                                                    Update birthday
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

         