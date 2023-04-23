
<style>
  .cardbackc{
    background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

  }
  </style>

<?php $af=$nodm;
  if ($af) { ?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
            
              <div class="card">
                <div class="card-body">
<div class="col-md-12 mb-5">
  <div class="row">
             <?php  foreach ($nodm as $rw) {  ?>
                   <div class="col-md-4">
          <div class="card card-bodys cardbackc" >
            <div class="d-flex">
              <div class="text-center my-auto ml-3">
   <img  class=" proimg  mt-2" src="<?php $imgs = $rw->npofficeimage; 
                    if ($imgs) {echo base_url().''.$rw->npofficeimage;} else {echo base_url().'uploads/origin/def-img.png';}?>" style="width: 65px;height: 65px; border-radius: 50px;" > 
                    </div>
                    <div class="text-center my-auto mx-auto">
                    <h4 class="text-center my-auto mx-auto" style="font-size: 14px;"><b><?php echo $rw->npofficename; ?></b></h4>
             </div>
             </div>
  <div class=" mt-3 mb-3">
    
    
    <center><a class="mr-2 ml-2 text-dark" href="<?php echo base_url()?>newspapermambers/<?php echo $rw->id ?>" data-toggle="tooltip" data-placement="right" title="Add Mamber"><i class="fa fa-plus" aria-hidden="true" ></i></a>
  <a href="<?php echo base_url()?>newpapereditoffice/<?php echo $rw->id ?>" class="hosmbe  mr-2  text-dark" data-toggle="tooltip" data-placement="right" title="Edit state office"><i class="fas fa-edit " aria-hidden="true" ></i></a>
  <a class="btn btn-primary btn-sm " href="<?php echo base_url()?>newofficmamber/<?php echo $rw->id ?>">view Mamber</a>
  <a class="btn btn-primary btn-sm " href="<?php echo base_url()?>newspaper/<?php echo $rw->id ?>">Add Newspaper</a>
  </center>
  </div>
</div>
                   </div>
                     <?php   }   ?>
                   </div>
                 </div>
                   <div class="co-md-2 mb-5 ml-5">
       
     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         
         </div>


<?php } else{?>
  <h3> frist ragisterd office</h3>

<?php } ?>
  

  