<style>
    .cards {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        /* width: 241px; */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transform: scale(1);
        transition: transform 0.3s ease-in-out;
    }
    p {
        font-size: 12px;
        line-height: 14px;
    }
    h5{
      line-height: 23px;

    }
    .image-container {
        position: relative;

        height: 150px;
    }
    .himag {
        width: 260px;
        height: 148px;
    }
    .cards:hover {
        transform: scale(1.2);
    }
</style>



<div class="section sectionbg my-3" >
<div class="p-5">
<h2 class="text-white p-2 text-center">राठौर बंधन परिवार की ओर से जन्मदिवस की हार्दिक बंधाई व शुभकामनाएं</h2>
<div class="text-center">
<a href="<?php echo base_url()?>Matrimony">Home</a> / <a href="#" class="text-muted">State Level Committe</a>
</div>
</div>

</div>
 <form method='post' action="<?= base_url() ?>Statelevel" >
 
  
  <div class="row mb-5">
    <h5 class="ml-5 mt-2">select state</h5>
    <div class="col-md-3 ">
        
    <select name="search" size="1" class="form-control" >
   <option><?= $search ?></option>
    <option value="All" >All</option>  
    <option value="Andra Pradesh">Andra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Aasam">Aasam</option><option value="Bihar">Bihar</option><option value="Chandigrah">Chandigrah</option><option value="Chhattisgarh">Chhattisgarh</option><option value=" Dadar &amp; Nagar Haveli"> Dadar &amp; Nagar Haveli</option><option value=" Daman &amp; Diu"> Daman &amp; Diu</option><option value=" Delhi "> Delhi </option><option value=" Goa "> Goa </option><option value=" Gujrat  "> Gujrat  </option><option value="Haryana">Haryana</option><option value=" Himachal Pradesh"> Himachal Pradesh</option><option value=" JAMMU AND KASHMIR"> JAMMU AND KASHMIR</option><option value=" Jharkhand "> Jharkhand </option><option value=" Karnataka  "> Karnataka  </option><option value=" Kerala"> Kerala</option><option value=" Lakshyadeep "> Lakshyadeep </option><option value=" Madhya Pradesh"> Madhya Pradesh</option><option value=" Maharastra "> Maharastra </option><option value=" Manipur  "> Manipur  </option><option value=" Meghalaya "> Meghalaya </option><option value=" Mizoram"> Mizoram</option><option value=" Nagaland "> Nagaland </option><option value=" ODISHA"> ODISHA</option><option value=" PUDUCHERRY (UT)J-R"> PUDUCHERRY (UT)J-R</option><option value=" PUNJAB "> PUNJAB </option><option value=" RAJASTHANA  "> RAJASTHANA  </option><option value=" SIKKIM"> SIKKIM</option><option value="TAMILNADU ">TAMILNADU </option><option value="TELANGANA ">TELANGANA </option><option value="TRIPURA  ">TRIPURA  </option><option value="UTTARAKHAND">UTTARAKHAND</option><option value="UTTAR PRADESH">UTTAR PRADESH</option><option value="WEST BENGAL">WEST BENGAL</option></select>
    
</div>
<input type='submit' name='submit' value='Serche' class="btn btn-dark">
</div>

  
  </form>
 <div class="section">
 <div class="container">
     <div class="row" id="examples">
     <?php  foreach ($row as $rw) {  ?>

<div class="col-md-3 mb-5" data-aos="zoom-in">
    <div class="cards" style="width: 260px;">
        <div class="image-container">
            <img src="<?php $imgs = $rw->officeimage; 
if ($imgs) {echo base_url().''.$rw->officeimage;} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                class="himag"
            />
        </div>
        <div class="product-detail-container p-2">
            <div class="justify-content-between align-items-center">
                <div>
                    <h5 class="text-dark mb-2">
                        <b> Name &nbsp;:&nbsp;<?php echo $rw->officename; ?> </b>
                    </h5>
                </div>
                <div>
                    <p class="text-dark">
                        <b>
                        state &nbsp;:&nbsp;
                            <?php echo $rw->state; ?>
                        </b>
                    </p>
                </div>
                <div>
                    <p class="text-dark">
                        <b>
                            Address &nbsp;:&nbsp;
                            <?php echo $rw->address; ?>
                        </b>
                    </p>
                </div>
            </div>

            <center><a href="<?php echo base_url()?>StatelevleDetail/<?php echo $rw->id ?>" class="btn btn-info btn-sm" target="_blank">view More </a></center>
        </div>
    </div>
</div>

<?php } ?>



 </div>
 </div>
 </div>
 <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
 <script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>  
 <script>$('#examples').paginate();</script>
<!-- end section -->
<!-- section -->
