<div class="container bootstrap snippets bootdeys mb-4">
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" id="bbinfo" enctype="multipart/form-data" method="POST">
                <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Birthday boy/girl Name</label>
                                <input id="bdayid" class="form-control" type="text" name="bdayid" value="<?php echo $upbday['id'];?>" hidden/>
                                <input id="ebirthdayname" class="form-control" type="text" name="ebirthdayname" value="<?php echo $upbday['name'];?>" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Birthday Massge</label>
                                <textarea class="form-control" name="business" id="business" required="required"> <?php echo $upbday['massge'];?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Death Of Birth</label>
                                <input id="dob" class="form-control" type="date" name="dob" value="<?php echo $upbday['dob'];?>" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Whatsapp Number</label>
                                <input id="mobile" class="form-control" type="text" name="mobile" value="<?php echo $upbday['mobile'];?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="my-input" class="text-right"> Birthday boy/girl Image</label>
                            <input id="bimage" class="form-control" type="file" name="bimage" accept="image/png, image/gif,image/jpeg,image/jpg"/>
                            <input id="upbimage" class="form-control" type="text" name="upbimage"  value="<?php echo $upbday['image'];?>" />
                        </div>
                        <div class="col-md-4 mb-2">
                            <img src="<?php echo base_url().''.$upbday['image'];?>" />
                        </div>
                        <div class="text-center">
                        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                       </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" >
    // add eduction//
    $("#bbinfo").submit(function (e) {
    e.preventDefault();
    for (business in CKEDITOR.instances) CKEDITOR.instances[business].updateElement();
    $.ajax({
        url: "<?php echo base_url();?>Matrimony/birthdayupdate/",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["warning"] == 2) {
                toastr.warning(data["message"], "You Bussines already registered ");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], " Successfully");
                $("#bbinfo").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

    </script>