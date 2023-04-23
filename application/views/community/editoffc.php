
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form id="updateofiiceinfo" method="POST" enctype="multipart/form-data" id="updateofiiceinfo">
                        <div class="form-group">
                            <input type="text" name="upofid" value="<?php echo $rw ['id'] ; ?>" />
                            <input type="text" name="upimgup" multiple="true" value="<?php echo $rw ['officeimage'];?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">office Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="upofficename" required="required" value="<?php echo $rw ['officename']; ?>" />
                        </div>

                        <div class="form-group">
                            <label>Office Description</label>
                            <textarea class="form-control" name="upofficedesc" id="upofficedesc" required="required"><?php echo $rw['officedesc']; ?></textarea>
                        </div>

                        <?php 
              $desired= json_decode($rw['officmobile']);   
              if(empty($desired)){
                  $desired=[];
                 }            
               ?>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <?php
                if(!empty($desired)){
                  for ($i=0; $i < count($desired); $i++) {
                    ?>
                            <input type="number" name="officmobile[]" class="form-control mb-3" placeholder="Enter Mobile Number" value="<?php echo $desired [$i]; ?>" />
                            <?php } }?>
                        </div>

                        <fieldset class="OMOB">
                            <div class="repeatable"></div>
                            <div class="form-group col-lg-12">
                                <input type="button" value="+" class="btn btn-primary add" />
                            </div>
                        </fieldset>
                        <?php 
              $Landline= json_decode($rw['officelandline']);   
              if(empty($Landline)){
                  $Landline=[];
                 }            
               ?>
                        <div class="form-group">
                            <label>Landline Number</label>
                            <?php
                if(!empty($Landline)){
                  for ($i=0; $i < count($Landline); $i++) {
                    ?>
                            <input type="number" name="officelandline[]" class="form-control mb-3" placeholder="Enter Landline Number" value="<?php echo $Landline [$i]; ?>" />
                            <?php } }?>
                        </div>

                        <fieldset class="OLAD">
                            <div class="repeatable"></div>
                            <div class="form-group col-lg-12">
                                <input type="button" value="+" class="btn btn-primary add" />
                            </div>
                        </fieldset>
                        <?php 
              $Email= json_decode($rw['officehemail']);   
              if(empty($Email)){
                  $Email=[];
                 }            
               ?>
                        <div class="form-group">
                            <label>Email</label>
                            <?php
                if(!empty($Email)){
                  for ($i=0; $i < count($Email); $i++) {
                    ?>
                            <input type="email" name="officehemail[]" class="form-control mb-3" placeholder="Enter Email Id" value="<?php echo $Email [$i]; ?>" />
                            <?php } }?>
                        </div>

                        <fieldset class="OEMA">
                            <div class="repeatable"></div>
                            <div class="form-group col-lg-12">
                                <input type="button" value="+" class="btn btn-primary add" />
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label> Facebook Page Link: <span>*</span></label>
                            <input type="text" name="upofficefacebook" placeholder="Facebook Page Link" class="form-control" value="<?php echo $rw['officefacebook']; ?>" />
                        </div>
                        <div class="form-group">
                            <label> Instagram Page Link: <span>*</span></label>
                            <input type="text" name="upofficeinstagram" placeholder="Instagram Page Link" class="form-control" value="<?php echo $rw['officeinstagram']; ?>" />
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img
                                    class="proimg mt-2"
                                    src="<?php $imgs = $rw['officeimage']; 
                    if ($imgs) {echo base_url().''.$rw['officeimage'];} else {echo base_url().'uploads/origin/def-img.png';}?>"
                                    style="width: 100px; height: 80px;"
                                />
                            </div>
                            <div class="form-group col-md-8">
                                <label>Profile photo</label>
                                <input type="file" name="upofimage" class="form-control" />
                            </div>
                        </div>

                        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
   <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
<script>
         $("#updateofiiceinfo").submit(function (e) {
    e.preventDefault();

    for (upofficedesc in CKEDITOR.instances) {
        CKEDITOR.instances[upofficedesc].updateElement();
    }

    $.ajax({
        url: "<?php echo base_url();?>State/updateofiiceinfo",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 0) {
                toastr.error(data["message"], "User alredy ragister");
                $("#updateofiiceinfo").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Successfully ");
                $("#updateofiiceinfo").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

</script>