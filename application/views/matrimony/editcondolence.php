<div class="container bootstrap snippets bootdeys">
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" id="bbinfo" enctype="multipart/form-data" method="POST">
                <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Name</label>
                                <input id="ddayid" class="form-control" type="text" name="ddayid" value="<?php echo $cupday['id'];?>" />
                                <input id="name" class="form-control" type="text" name="name" value="<?php echo $cupday['name'];?>" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Massge</label>
                                <textarea class="form-control" name="business" id="business" required="required"> <?php echo $cupday['massge'];?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Death Of </label>
                                <input id="udod" class="form-control" type="date" name="udod" value="<?php echo $cupday['dod'];?>" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Whatsapp Number</label>
                                <input id="mobile" class="form-control" type="text" name="mobile" value="<?php echo $cupday['mobile'];?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="my-input" class="text-right">  Image</label>
                            <input id="dimage" class="form-control" type="file" name="dimage"  accept="image/png, image/gif,image/jpeg,image/jpg"/>
                            <input id="updimage" class="form-control" type="text" name="updimage" value="<?php echo $cupday['image'];?>" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="<?php echo base_url().''.$cupday['image'];?>" />
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
        url: "<?php echo base_url();?>Matrimony/condolencupdate/",
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