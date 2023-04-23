<style type="text/css">

  .sectionbg{
    background-image: url("<?php echo base_url('assets/images/rdbg.jpg')?>");
    background-size:cover;
  }
      .card{
   
      /* background-color: #0a3d62; */
      color: #fff;
      box-shadow: 20px 20px 50px rgb(0 0 0 0.5) !important;
    background: rgba(255, 255, 255, 0.1);
      }
      .card-body{
      padding: 0px;
      min-height: 0px;
      }
     
      .card-text{
      font-size: 10px;
      font-style: italic;
      padding-bottom: 10px;
      }
      .bg-custom{
      background-color:#00cc99;
      }
      .bg-custom p{
      padding: 10px;
      line-height: 1;
      }
      .bg-effects{
        box-shadow: 20px 20px 50px rgb(0 0 0 0.5) !important;
    background: rgba(255, 255, 255, 0.1);
      border-top-right-radius: 50px;
      border-bottom-right-radius: 50px;
      padding-left: 10px;
      padding-top: 10px;
      }
     .info-font{
        font-size: 1.3rem;
     }
      
    </style>
    <div>
    </div>
 <div class="section sectionbg">
    <div class="pt-5">
    <div class="col-md-12">
        <div class="row" id="examples">
        <?php  foreach ($row as $rw) {  ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="bg-effects">
                                    <h2 class="card-title text-white mb-1">RB<?php echo $rw->id; ?></h2>
                                    <p class="card-text text-white"><?php echo $rw->Belongs; ?></p>
                                </div>
                                <ul class="p-4">
                                    <li class="my-2 info-font">Full Name :-<span><?php echo $rw->Fristname; ?> <?php echo $rw->Lastname; ?></span></li>
                                   
                                    <li class="my-2 info-font">City :-<span><?php echo $rw->district; ?></span></li>
                                    <li class="my-2 info-font">Phone :-<span><?php echo $rw->Mobilenumber; ?></span></li>
                                    <li class="my-2 info-font">Emails :-<span><?php echo $rw->Email; ?></span></li>
                                </ul>
                            </div>
                            <div class="col-md-4 my-auto pt-5">
                            <img src="<?php $imgs = $rw->proimage; 
    if ($imgs) {echo base_url().''.$rw->proimage;} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                            class="rounded-circle"
                        />
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
