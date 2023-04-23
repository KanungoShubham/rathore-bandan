


<style>
   .front {
    background-image: url("<?php echo base_url('assets/images/bday.webp')?>");
    background-size: 390px;
    height: 234px;
   background-repeat: no-repeat;
   padding: 2px;
   border-top-right-radius: 5%;
    border-top-left-radius: 5%;
    border-bottom-left-radius: 5%;
}
.userimg{
    width: 150px;
    height: 150px;
  border-radius: 10%;
  display: block;
  margin-left: auto;


}
.bcard{
    background: rgb(42,65,82);
background: linear-gradient(90deg, rgba(42,65,82,1) 0%, rgba(41,57,87,1) 84%, rgba(91,121,143,1) 100%);
margin-bottom: 35px;
    box-shadow: 0 10px 20px 0 rgb(26 44 57 / 14%);
    border: none;
    border-radius: 12px;
}
p {
    color:#DCE35B;
    font-size: 21px;
    line-height: 21px;
    font-family: 'OleoScriptSwashCaps-Regular';
}
.fn{
    font-family: 'OleoScriptSwashCaps-Regular';
    color:#DCE35B;
}
</style>
<div class="section sectionbg my-3" >
<div class="p-5">
<h2 class="text-white p-2 text-center">राठौर बंधन परिवार की ओर से जन्मदिवस की हार्दिक बंधाई व शुभकामनाएं</h2>
<div class="text-center">
<a href="<?php echo base_url()?>Matrimony">Home</a> / <a href="#" class="text-muted">Brithday</a>
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
                        <img src="<?php $imgs = $rw->image; 
    if ($imgs) {echo base_url().''.$rw->image;} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                            class="userimg"
                        />
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
                 <h4 class="fn"> Date of Birth  :- <?php echo date("j F Y",strtotime($rw->dob)) ;?></h4>
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
