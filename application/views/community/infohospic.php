<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body"></div>
                    <div class="courses-container mt-3">
                        <div class="course">
                            <div class="course-preview">
                                <img
                                    src="<?php $imgs = $hodata['image']; 
                    if ($imgs) {
echo base_url().''.$hodata['image'];
} else {
echo base_url().'assets/usercover/rathore.png';
}
    ?>"
                                    alt=""
                                    class="images"
                                />
                            </div>
                            <div class="course-info">
                                <h6 class="mb-2">
                                    Hospicename: <b><?php echo $hodata['hospicname']; ?></b>
                                </h6>
                                <h6 class="mb-2">
                                    Mobile number: <b><?php echo (!empty(json_decode($hodata['mobile']))) ?str_replace('_', ' ',implode(', ', json_decode($hodata['mobile']))) : ''; ?></b>
                                </h6>
                                <h6 class="mb-2">
                                    Email: <b><?php echo (!empty(json_decode($hodata['hemail']))) ?str_replace('_', ' ',implode(', ', json_decode($hodata['hemail']))) : ''; ?></b>
                                </h6>

                                <button class="btns" data-toggle="modal" data-target="#updateform">View info</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Add Hospice Gralley</h3>
                            <?php if($hodga->num_rows()<20){?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addgrally">Add Gralley</button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div class="row">
                            <?php  foreach ($hodga->result() as $rows) { ?>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-bodys">
                                      <div>
                                        <img
                                              class=" garliyss modal-target"
                                              alt=""
                                              src="<?php $gi = $rows->images; 
                                              if ($gi) {
                                              echo  base_url().$rows->images;
                                              } else {
                                              echo base_url().'uploads/origin/def-img.png';
                }
                    ?>"
                                        />
                                        <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->
              </div>
              <div>
                                        <a href="#" class="userinfo float-right mr-2" data-id="<?php echo $rows->id ?>"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                    </div>
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
    <div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h2>Update Mebares</h2>
            <div class="col-md-12">
                <div class="row p-5" id="examples">
                    <?php  foreach ($hmb->result() as $hm) { ?>
                    <div class="col-md-3">
                        <div class="card mt-3">
                            <div class="card-bodys">
                                <img
                                    class="modal-target mb-3"
                                    alt=""
                                    src="<?php $news = $hm->careimage; 
                                    if ($news) {
                 echo  base_url().$hm->careimage;
                } else {
                echo base_url().'uploads/origin/def-img.png';
                }
                    ?>"
                                    style="width: 195px; height: 150px;"
                                />
                                <h5 class="mb-3 text-center"><?php echo $hm->carename ?></h5>
                                <h5 class="mb-3 text-center"><?php echo $hm->carepost ?></h5>
                                <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->

                                <a href="#" class="hosmbe float-right mr-2" data-id="<?php echo $hm->id ?>"><i class="fas fa-edit" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addgrally" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Garllay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addhospicgarelly" method="POST" enctype="multipart/form-data">
                        <input type="number" name="rgid" value="<?php echo $hodata['id'] ?>" />
                        <input type="text" name="rgnumber" value="<?php echo $hodata['registrationnmber'] ?>" />
                        <input type="text" name="rguniq" value="<?php echo $hodata['hopicuniqid'] ?>" />
                        <input type="file" name="garllay" class="form-control mb-2 mt-2" required="required" />
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                            <input type="hidden" name="ueid" id="uid" />
                            <input type="hidden" name="uiges" multiple="true" id="ueuim" />
                        </div>
                        <div class="form-group">
                            <input type="file" name="ueics" multiple="true" />

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
    <div class="modal fade" id="updateform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog d-block" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Hospice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" id="updatehosipcs">
                        <div class="form-group">
                            <label for="exampleInputName1">Community Hall / Hospice Name</label>
                            <input type="text" class="form-control" name="uhospicid" value="<?php echo $hodata['id'] ?>" />
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Hospice Name" name="upname" required="required" value="<?php echo $hodata['hospicname'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Community Hall / Hospice(Registration Number)</label>
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputName1"
                                placeholder="Community Hall / Hospice(Registration Number"
                                name="registrationupnmber"
                                required="required"
                                value="<?php echo $hodata['registrationnmber'] ?>"
                            />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Community Hall / Hospice(Registration Year)</label>
                            <input
                                type="date"
                                class="form-control"
                                id="exampleInputName1"
                                placeholder="Community Hall / Hospice(Registration Year)"
                                name="registratioupyear"
                                required="required"
                                value="<?php echo $hodata['registratioyear'] ?>"
                            />
                        </div>
                        <div class="form-group">
                            <label>Community Hall / Hospice Description</label>
                            <textarea class="form-control" name="uphospice_desc" id="uphospice_desc" required="required"><?php echo $hodata['hospice_desc'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Facilities</label>
                            <textarea class="form-control" name="upfacilities" id="upfacilities" required="required">                  <?php echo $hodata['facilities'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Note / Terms(if any)</label>
                            <textarea class="form-control" name="upnote" id="upnote" required="required"><?php echo $hodata['note'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Community Hall / Hospice (Total Room)</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="Community Hall / Hospice (Total Room)" name="uproom" required="required" value="<?php echo $hodata['room'] ?>" />
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Price From (per day)</label>
                                <input type="number" class="form-control" id="exampleInputName1" placeholder="Price From (per day)" name="uppricefromhospic" required="required" value="<?php echo $hodata['pricefromhospic'] ?>" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Price To (per day)</label>
                                <input type="number" class="form-control" id="exampleInputName1" placeholder="Price To (per day)" name="uppricetohospic" required="required" value="<?php echo $hodata['pricetohospic'] ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Electricity (per unit)</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="Electricity (per unit)" name="uphospicelectricity" required="required" value="<?php echo $hodata['hospicelectricity'] ?>" />
                        </div>

                        <?php 
              $desired= json_decode($hodata['mobile']);   
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
                            <input type="number" name="upmobile[]" class="form-control mb-3" placeholder="Enter Mobile Number" value="<?php echo $desired [$i]; ?>" />
                            <?php } }?>
                        </div>

                        <fieldset class="MOBU">
                            <div class="repeatable"></div>
                            <div class="form-group col-lg-12">
                                <input type="button" value="+" class="btn btn-primary add" />
                            </div>
                        </fieldset>
                        <?php 
              $Landline= json_decode($hodata['landline']);   
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
                            <input type="number" name="uplandline[]" class="form-control mb-3" placeholder="Enter Landline Number" value="<?php echo $Landline [$i]; ?>" />
                            <?php } }?>
                        </div>

                        <fieldset class="LADU">
                            <div class="repeatable"></div>
                            <div class="form-group col-lg-12">
                                <input type="button" value="+" class="btn btn-primary add" />
                            </div>
                        </fieldset>
                        <?php 
              $Email= json_decode($hodata['hemail']);   
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
                            <input type="email" name="uphemail[]" class="form-control mb-3" placeholder="Enter Email Id" value="<?php echo $Email [$i]; ?>" />
                            <?php } }?>
                        </div>

                        <fieldset class="EMAU">
                            <div class="repeatable"></div>
                            <div class="form-group col-lg-12">
                                <input type="button" value="+" class="btn btn-primary add" />
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label> Facebook Page Link: <span>*</span></label>
                            <input type="text" name="upfacebook" placeholder="Facebook Page Link" class="form-control" value="<?php echo $hodata['facebook']; ?>" />
                        </div>
                        <div class="form-group">
                            <label> Instagram Page Link: <span>*</span></label>
                            <input type="text" name="upinstagram" placeholder="Instagram Page Link" class="form-control" value="<?php echo $hodata['instagram']; ?>" />
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <img
                                        src="<?php $imgs = $hodata['image']; 
                                        if ($imgs) {
                        echo base_url().''.$hodata['image'];
                        } else {
                        echo base_url().'assets/usercover/rathore.png';
                        }
                        ?>"
                                        alt=""
                                        class="user-profile mb-4"
                                        style="width: 120px;"
                                    />
                                </div>

                                <div class="col-md-6 my-auto">
                                    <input type="hidden" name="upimage" class="form-control" value="<?php echo $hodata['image']; ?>" />
                                    <input type="file" name="upnewimage" />
                                </div>
                            </div>
                        </div>

                        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- SOCIAL PANEL HTML -->

    <div class="modal fade" id="shwoinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered d-block" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="updatemberinfo" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="mid" id="mid" />
                            <input type="hidden" name="mimgup" multiple="true" id="mimgup" />
                        </div>
                        <div class="form-group">
                            <label> Post Name</label>
                            <select class="form-control" name="upcarepost" required="required" id="mpost">
                                <option selected="" disabled="">Select post / position</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Chairmen">Chairmen</option>
                                <option value="Executive-chairmen">Executive-chairmen</option>
                                <option value="Vice-Chairmen">Vice-Chairmen</option>
                                <option value="General-Secretary">General secretary</option>
                                <option value="Secretary">Secretary</option>
                                <option value="Joint-Secretary">Joint secretary</option>
                                <option value="Treasury-Chairmen">Treasury chairmen</option>
                                <option value="Co-tresury-chairmen">Co-treasury chairmen</option>
                                <option value="Education-Minister">Education minister</option>
                                <option value="Organisation-Minister">Organisation minister</option>
                                <option value="Office-minister">Office minister</option>
                                <option value="Publicity-Minister">Publicity minister</option>
                                <option value="Adviser">Adviser</option>
                                <option value="Member">Member</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="upcarename" class="form-control" required="required" list="mabers" id="mname" />
                            <datalist id="mabers">
                                <option value="Mr."> </option>
                                <option value="Mrs."> </option>
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label>Board Category</label>
                            <select name="upcaregender" class="form-control" required="required" id="mgn">
                                <option value="male">Men's Board</option>
                                <option value="female">Women's Board</option>
                                <option value="youth">Youth Board</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="number" name="upcaremobile" class="form-control" required="required" id="mmob" />
                        </div>
                        <div class="form-group">
                            <label>Email-id</label>
                            <input type="email" name="upcaremail" class="form-control" required="required" id="mema" />
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="w-75" src="" id="mig" style="height: 95px;" />
                            </div>
                            <div class="form-group col-md-8">
                                <label>Profile photo</label>
                                <input type="file" name="upcareimage" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Facebook Id Link:</label>
                            <input type="text" name="upcarefb" class="form-control" required="required" id="mf" />
                        </div>
                        <div class="form-group">
                            <label>Instagram Id Link:</label>
                            <input type="text" name="upcareinsta" class="form-control" required="required" id="min" />
                        </div>
                        <div class="form-group">
                            <label>Whatsapp Number:</label>
                            <input type="number" name="upcarewhatsapp" class="form-control" required="required" id="mw" />
                        </div>
                        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>
    <script>
        $("#examples").paginate();
    </script>
    <script type="text/javascript">
        $("#addhospicgarelly").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo base_url();?>Hospic/addgrallys",
                type: "POST",
                dataType: "json",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (data) {
                    console.log(data);
                    if (data["success"] == 1) {
                        toastr.success(data["message"], "Successfully");
                        $("#addgrally").modal("toggle");
                        $("#addhospicgarelly").trigger("reset");
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    } else if (data["error"] == 0) {
                        toastr.error(data["message"], "Not valid ");
                        $("#addgrally").modal("toggle");
                        $("#addhospicgarelly").trigger("reset");

                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    }

                    document.getElementById("addhospicgarelly").reset();
                },
            });
        });
        $(".userinfo").on("click", function () {
            var userid = $(this).data("id");
            console.log("id: " + userid);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "<?php echo base_url();?>Hospic/editgr/" + userid,
                success: function (data) {
                    // var result = JSON.parse(data);
                    console.log(data);
                    // $("#updateimage").modal('toggle');
                    $("#updateimage").modal("show");
                    // $('[name="id"]').val(data.id);
                    $("#uid").val(data.id);
                    $("#ueimage").attr("src", "<?php echo base_url()?>./" + data.images);
                    $("#ueuim").val(data.images);
                },
            });
        });
        $(".hosmbe").on("click", function () {
            var huserid = $(this).data("id");
            console.log("id: " + huserid);

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "<?php echo base_url();?>Hospic/hosupmber/" + huserid,

                success: function (data) {
                    // var result = JSON.parse(data);
                    console.log(data);
                    // $("#updateimage").modal('toggle');
                    $("#shwoinfo").modal("show");
                    // $('[name="id"]').val(data.id);
                    $("#mid").val(data.id);
                    $("#mpost").val(data.carepost);
                    $("#mname").val(data.carename);
                    $("#mgn").val(data.caregender);
                    $("#mmob").val(data.caremobile);
                    $("#mema").val(data.caremail);
                    $("#mf").val(data.carefb);
                    $("#min").val(data.careinsta);
                    $("#mw").val(data.carewhatsapp);
                    $("#mig").attr("src", "<?php echo base_url()?>./" + data.careimage);
                    $("#mimgup").val(data.careimage);
                },
            });
        });

        $("#euimages").submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo base_url();?>Hospic/updateimagess",
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
                        $("#euimages").trigger("reset");
                    } else if (data["success"] == 1) {
                        toastr.success(data["message"], "Image Successfully update");
                        $("#updateimage").modal("toggle");
                        $("#euimages").trigger("reset");
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    }

                    document.getElementById("euimages").reset();
                },
            });
        });

        $("#updatehosipcs").submit(function (e) {
            e.preventDefault();
            for (uphospice_desc in CKEDITOR.instances) {
                CKEDITOR.instances[uphospice_desc].updateElement();
            }
            for (upfacilities in CKEDITOR.instances) {
                CKEDITOR.instances[upfacilities].updateElement();
            }
            for (upnote in CKEDITOR.instances) {
                CKEDITOR.instances[upnote].updateElement();
            }

            $.ajax({
                url: "<?php echo base_url();?>Hospic/updatehospice/ ",
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
                        $("#updatehosipcs").trigger("reset");
                    } else if (data["success"] == 1) {
                        toastr.success(data["message"], "Successfully update");
                        $("#updateform").modal("toggle");
                        $("#updatehosipcs").trigger("reset");
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    }

                    document.getElementById("euimages").reset();
                },
            });
        });

        $("#updatemberinfo").submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo base_url();?>Hospic/updatemberinfo",
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
                        $("#updatemberinfo").trigger("reset");
                    } else if (data["success"] == 1) {
                        toastr.success(data["message"], "Successfully update");
                        $("#shwoinfo").modal("toggle");
                        $("#updatemberinfo").trigger("reset");
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    }
                },
            });
        });
    </script>
</div>
