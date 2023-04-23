<style>
.card {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    /* width: 241px; */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

p {
    font-size: 12px;
    line-height: 14px;
}

.image-container {
    position: relative;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("<?php echo base_url('assets/images/logos/wdding.webp')?>");

    background-size: cover;
    height: 136px;
}
</style>
<div class="section sectionbg my-3">
<div class="p-5">
        <h2 class="text-white p-2 text-center">राठौर बंधन परिवार की ओर से जन्मदिवस की हार्दिक बंधाई व शुभकामनाएं</h2>
        <div class="text-center">
            <a href="<?php echo base_url()?>Matrimony">Home</a> / <a href="#" class="text-muted">Social</a>
        </div>
    </div>
</div>
<div class="section">
    <div class="col-md-12">
        <div class="row">
         
            <div class="col-md-3 " >
                <div class="col-md-12">
                    <div class="card  ">
                        <div class="card-body">
                            <label style="padding: 19px;">AGE:</label>
                            <form method="post" action="<?= base_url() ?>Viewgroom">
                                <div class="row mb-5">
                                    <div class="col-md-5">
                                        <select name="frist" size="1" class="form-control">
                                            <!-- <option value="All" >All</option>   -->
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                    <h5>to</h5>

                                    <div class="col-md-5">
                                        <select name="second" size="1" class="form-control">
                                            <!-- <option value="All" >All</option>   -->
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Serche" class="btn btn-dark" />
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <input type='text' name='gn' value='Male'>   -->
            </div>

            <div class="col-md-9">
                <div class="row" id="examples">
                    <?php 
     foreach ($row as $rw) { ?>

                    <div class="col-md-4"  data-aos="zoom-in">
                        <div class="card" style="width: 260px;" >
                            <div class="image-container">
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount"></span>
                                        <?php 
             $sd=$_SESSION["id"];
          $like= json_decode($rw->like_id); if(empty($like)){ $like=[]; } ?>
                                        <?php  if(!empty($like)){ 
              foreach($like as $s){
                 if($s==$sd){
              ?>
                                        <span class="wishlist"> <i class="fas fa-star sstar"></i> </span>

                                        <?php  }  elseif($s!=$sd){ ?>
                                        <a href="#" class="hosmbe" data-id="<?php echo $rw->id ?>"
                                            style="color: #000 !important;">
                                            <span class="wishlist"> <i class="fal fa-star nstar"></i> </span>
                                        </a>

                                        <?php }  } } else{?>
                                        <a href="#" class="hosmbe" data-id="<?php echo $rw->id ?>"
                                            style="color: #000 !important;">
                                            <span class="wishlist"> <i class="fal fa-star nstar"></i></span>
                                        </a>

                                        <?php }?>
                                    </div>
                                </div>
                                <div class="mt-2 text-center">
                                    <img src="<?php $imgs = $rw->userprofileimage; 
    if ($imgs) {echo base_url().''.$rw->userprofileimage;} else {echo base_url().'assets/images/man.png';}?>"
                                        class="thumbnail-image" alt="..." />
                                </div>
                            </div>
                            <div class="product-detail-container p-2">
                                <div class="justify-content-between align-items-center">
                                    <div>
                                        <h5 class="text-dark mb-2 text-center">
                                            <b>
                                                <?php echo $rw->firstName; ?>
                                                <?php echo $rw->lastName; ?>
                                            </b>
                                        </h5>
                                    </div>

                                    <div>
                                        <p class="text-dark text-center my-2">
                                            <b>
                                                Age:
                                                <?php echo date_diff(date_create($rw->dob), date_create('today'))->y.'yrs';?>
                                            </b>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-dark text-center">
                                            <b>
                                                Belongs To:
                                                <?php echo $rw->belongs; ?>
                                            </b>
                                        </p>
                                    </div>
                                </div>

                                <center><a href="<?php echo base_url()?>metroinfo/<?php echo $rw->id ?>"
                                        class="btn btn-info btn-sm" target="_blank">view More </a></center>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(".hosmbe").on("click", function() {
    var nsateid = $(this).data("id");
    console.log("id: " + nsateid);

    $.ajax({
        type: "post",
        url: "<?php echo base_url();?>Matrimony/likedprofile",
        data: {
            nsateid: nsateid,
        },
        dataType: "json",
        success: function(data) {
            console.log(data);
            if (data["success"] == 1) {
                toastr.success("Shortlist Successfully");
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }
        },
    });
    return false;
});
$("#examples").paginate();
</script>
</div>