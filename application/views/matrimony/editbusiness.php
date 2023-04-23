<?php if($business!=null){?>

  <div class="container bootstrap snippets bootdeys mb-5">
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" id="binfo" enctype="multipart/form-data" method="POST">
                <div class="card mb-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Your Business name</label>
                                <input id="my-input" class="form-control" type="text" name="businessid" value="<?php echo $business['id'];?>" />
                                <input id="my-input" class="form-control" type="text" name="businessname" value="<?php echo $business['businessname'];?>" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Business owner Name</label>
                                <input id="my-input" class="form-control" type="text" name="ownername" value="<?php echo $business['ownername'];?>" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Business Description</label>
                                <textarea class="form-control" name="business" id="business" required="required"><?php echo $business['business_dsc'];?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Mobile number</label>
                                <input id="my-input" class="form-control" type="number" name="mobile" value="<?php echo $business['mobile'];?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="my-input" class="text-right"> Your Business Baner Image</label>
                            <input id="my-input" class="form-control" type="file" name="bimage" />
                            <input id="my-input" class="form-control" type="text" name="upbimage" value="<?php echo $business['image'];?>" />
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo base_url().''.$business['image'];?>" />
                        </div>
                        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if($businessgarlly->num_rows()<4){?>

    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body">
                    <div>Add image gallery</div>
                    <div>
                        <form class="forms-sample" id="addbisimag" enctype="multipart/form-data" method="POST">
                            <input id="infod" class="form-control" type="text" name="infod" value="<?php echo $business['id'];?>" />
                            <input id="buinesg" class="form-control" type="file" name="buinesg" />
                            <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body">
                    <div>garlley</div>
                    <div class="col-md-12">
                        <div class="row">
                            <?php  foreach ($businessgarlly->result() as $rows) { ?>
                            <div class="col-md-3">
                                <div class="card mb-3 mx-3">
                                    <div class="card-body" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                                        <img class="garliyss modal-target" alt="" src="<?php $gi = $rows->images; 
                                    if ($gi) {
                 echo  base_url().$rows->images;
                } else {
                echo base_url().'uploads/origin/def-img.png';
                }
                    ?>"/>
                                        <a href="#" class="userinfo" data-id="<?php echo $rows->id ?>"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } else { ?>
Fill the first From
<?php } ?>

<div class="modal fade" id="updateimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered d-block" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="euimages" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="ueid" id="uid" />
                        <input type="text" name="nuiges" multiple="true" id="ueuim" />
                    </div>
                    <div class="form-group">
                        <input type="file" name="nueics" multiple="true" id="nueics" />

                        <input type="submit" class="btn btn-danger" name="submit" value="Upload" />
                    </div>
                    <div>
                        <img class="w-25" src="" id="ueimage" style="height: 120px;" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" >
    // add eduction//

    $("#binfo").submit(function (e) {
    e.preventDefault();
    for (business in CKEDITOR.instances) CKEDITOR.instances[business].updateElement();
    $.ajax({
        url: "<?php echo base_url();?>Matrimony/businessupdate/",
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
                $("#binfo").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], " Successfully");
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }
        },
    });
});
$("#addbisimag").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/businessgrally/",
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
                $("#addbisimag").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], " Successfully");
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }
        },
    });
});
$(".userinfo").on("click", function () {
    var userid = $(this).data("id");
    console.log("id: " + userid);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo base_url();?>Matrimony/businessnewgarllry/" + userid,

        success: function (data) {
            // var result = JSON.parse(data);
            console.log([data.id]);
            $("#updateimage").modal("show");
            // $('[name="id"]').val(data.id);
            $("#uid").val(data.id);
            $("#ueimage").attr("src", "<?php echo base_url()?>./" + data.images);
            $("#ueuim").val(data.images);
        },
    });
});
$("#euimages").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/businessgarlleyupdate",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#euimages").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Image Successfully update");
                $("#updateimage").modal("toggle");
                $("#euimages").trigger("reset");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

    </script>