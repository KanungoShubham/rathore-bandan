


<style>

   .front {
    background-image: url("<?php echo base_url('assets/images/condl.jpeg')?>");
    background-size: 360px;
    height: 294px;
   background-repeat: no-repeat;
   padding: 2px;
   border-top-right-radius: 5%;
    border-top-left-radius: 5%;
    border-bottom-left-radius: 5%;
}
.userimg{
   
  display: block;
  margin-left: auto;
  margin-right: auto;


}
.bcard{
    background-image: url("<?php echo base_url('assets/images/backdod.jpg')?>");
margin-bottom: 35px;
    box-shadow: 0 10px 20px 0 rgb(26 44 57 / 14%);
    border: none;
    border-radius: 12px;
}
p {
    color: #fff;
    font-size: 21px;
    line-height: 21px;
    font-family: 'OleoScriptSwashCaps-Regular';
}
.fn{
    font-family: 'OleoScriptSwashCaps-Regular';
    color:#fff;
}
</style>

<div class="section sectionbg my-3" >
<div class="p-5">
<h2 class="text-white p-2 text-center">राठौर बंधन परिवार की ओर से जन्मदिवस की हार्दिक बंधाई व शुभकामनाएं</h2>
<div class="text-center">
<a href="<?php echo base_url()?>Matrimony">Home</a> / <a href="#" class="text-muted">condolence</a>
</div>
</div>

</div>

<div class="section">
    <div class="container">
        <div class="row" id="examples">
            <?php  foreach ($row as $rw) {  ?>

            <div class="col-md-12 mb-3">
                
                <div class="bcard">
                <div class="row">
                    <div class="col-md-4">
                    <div class="front">
                        <div style="margin-top: 30px;">
                        <img src="<?php $imgs = $rw->image; 
    if ($imgs) {echo base_url().''.$rw->image;} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                            class="userimg"
                        />
            </div>
                        </div>
            </div>
            <div class="col-md-8">
                        <div class="py-4">
                        <!-- <h3 class="text-center"> Happy Birthday</h3> -->
                        <h3 class="fn" ><?php echo $rw->name; ?> </h3>
                    
            </div>
            <div>
              <?php echo $rw->massge; ?>
            </div>
            <div>
           <h4 class="fn"> Date of Death  :- <?php echo date("j F Y",strtotime($rw->dod)) ;?></h4>
            </div>
                 
                </div>
                
                </div>
            </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>
<script>
    $("#examples").paginate();
</script>
<!-- end section -->
<!-- section -->
