  <style>
.bc {
    background-color: #FAACA8;
    background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 66%);

}
.fa-plus:before {
    content: "\f067";
    margin-right: 3px;
    font-size: 11px;
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
                                  <?php  foreach ($data as $rw) {  ?>
                                  <div class="col-md-6 mb-5">
                                      <div class="card card-bodys bc">
                                          <div class="d-flex">
                                              <div class="mt-2 ml-3">
                                                  <img class="proimg "
                                                      src="<?php $imgs = $rw->image; if ($imgs) {echo base_url().''.$rw->image;} else {echo base_url().'uploads/origin/def-img.png';}?>"
                                                      style="width: 90px; height: 90px; border-radius: 50px;" />
                                              </div>
                                              <div class="my-auto mx-auto">
                                                  <h4 class="text-center " style="font-size: 14px;">
                                                      <?php echo $rw->hospicname; ?></h4>
                                              </div>
                                          </div>
                                          <div class="mt-3 mb-3">


                                              <center>
                                                  <a class="mr-2 hosmbe btn btn-dark btn-sm fa fa-plus"
                                                      href="<?php echo base_url()?>addmeber/<?php echo $rw->id ?>"
                                                     >Add Member</a>
                                                  <a class="mr-2 hosmbe btn btn-dark btn-sm fa fa-plus"
                                                      href="<?php echo base_url()?>adddonation/<?php echo $rw->id ?>"
                                                     >Add Donation</a>
                                                  <a href="<?php echo base_url()?>updatehospic/<?php echo $rw->id ?>"
                                                      class="hosmbe mr-2   btn btn-dark btn-sm fas fa-edit" >
                                                       Edit Hospice
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