<style>
    .bg {
        background-color: #ded197;
        background-image: linear-gradient(132deg, #ded197 0%, #91f3e1 100%);
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 mb-5">
                            <div class="row">
                                <?php  foreach ($stu as $rw) {  ?>
                                <div class="col-md-4">
                                    <div class="card card-bodys bg">
                                        <div class="d-flex">
                                            <div class="my-auto ml-3">
                                                <img
                                                    class="proimg mt-2"
                                                    src="<?php $imgs = $rw->officeimage; 
                    if ($imgs) {echo base_url().''.$rw->officeimage;} else {echo base_url().'uploads/origin/def-img.png';}?>"
                                                    style="width: 80px; height: 80px; border-radius: 50px;"
                                                />
                                            </div>
                                            <div class="my-auto mx-auto">
                                                <h4 class="text-center" style="font-size: 14px;"><?php echo $rw->officename; ?></h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <center>
                                                <a class="mr-3 text-dark" href="<?php echo base_url()?>statemambers/<?php echo $rw->id ?>" data-toggle="tooltip" data-placement="right" title="Add Mamber">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </a>
                                                <a href="<?php echo base_url()?>editoffic/<?php echo $rw->id ?>" class="hosmbe mr-2 mt-3 text-dark" data-toggle="tooltip" data-placement="right" title="Edit state office">
                                                    <i class="fas fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <a class="btn btn-primary btn-sm" href="<?php echo base_url()?>viewmabers/<?php echo $rw->id ?>">view Mamber</a>
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


