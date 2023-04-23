
<style>
  .bg{
    background-color: #ccffff;
background-image: -webkit-linear-gradient(160deg, #ccffff 0%, #80D0C7 100%);
background-image: -moz-linear-gradient(160deg, #ccffff 0%, #80D0C7 100%);
background-image: -o-linear-gradient(160deg, #ccffff 0%, #80D0C7 100%);
background-image: linear-gradient(160deg, #ccffff 0%, #80D0C7 100%);
border-radius: 19px;
box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }

  </style>
<div class="col-md-10 my-3">
  <div class="row">
                     <?php  foreach ($row as $rw) {  ?>
                   <div class="col-md-4 mb-3">
                    <div class="card " >
                      <div class="card-body bg">
                        <div class="d-flex">
                          <div>
                        <img  class="rounded-circle proimg " src="<?php $imgs = $rw->userprofileimage; 
                    if ($imgs) 
                    {echo base_url().''.$rw->userprofileimage;} 
                    elseif($rw->gender == "Male") {
                      echo base_url().'assets/images/man.png';
                      }elseif($rw->gender == "Female") {
                          echo base_url().'assets/images/woman.png';
                          }
                           ?>"style="height: 78px;     width: 78px;" >  
                    </div>
                    <div class="my-auto mx-auto">
     <h4 class="text-center" style="font-size: 14px;"><b>Name: <?php echo $rw->firstName; ?><?php echo $rw->lastName; ?></b></h4>
     <h6 class="text-center" style="font-size: 13px;"> <b><?php echo $rw->belongs; ?></b></h6>
                     </div>
                     </div>
       
     <center> <a href="<?php echo base_url()?>bruinfo/<?php echo $rw->id ?>" class="btn btn-info btn-sm " target="_blank">View Details</a>  </center> 
                      </div>
                    </div>
                   </div>
                     <?php   }   ?>
                
                     </div>
                   </div>
          

   


