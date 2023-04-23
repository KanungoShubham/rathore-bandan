

<div class="main-panel">
    <div class="col-md-12">
        <div class="row p-5" id="examples">
            <?php  foreach ($ofcm  as $row) {  ?>
            <div class="col-md-3">
                <div class="card mt-3">
                    <div class="card-bodys">
                        <img
                            class="modal-target mb-3 mt-2 proimg"
                            alt=""
                            src="<?php $news = $row->mberimage; 
                                    if ($news) {
                 echo  base_url().$row->mberimage;
                } else {
                echo base_url().'uploads/origin/def-img.png';
                }
                    ?>"
                            style="width: 217px; height: 162px;"
                        />
                        <h5 class="mb-3 text-center"><?php echo $row->mbername ?></h5>
                        <h5 class="mb-3 text-center"><?php echo $row->mbrmobile ?></h5>
                        <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->

                        <a href="#" class="hosmbe float-right mr-2" data-id="<?php echo $row->id ?>"><i class="fas fa-edit" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
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
                        <input type="text" name="mid" id="mid" />
                        <input type="text" name="mimgup" multiple="true" id="mimgup" />
                    </div>
                    <div class="form-group">
                        <label>sselect state</label>
                        <select name="upstate" id="ums" size="1" class="form-control">
                            <option value="Andra Pradesh">Andra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Aasam">Aasam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigrah">Chandigrah</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value=" Dadar &amp; Nagar Haveli"> Dadar &amp; Nagar Haveli</option>
                            <option value=" Daman &amp; Diu"> Daman &amp; Diu</option>
                            <option value=" Delhi "> Delhi </option>
                            <option value=" Goa "> Goa </option>
                            <option value=" Gujrat  "> Gujrat </option>
                            <option value="Haryana">Haryana</option>
                            <option value=" Himachal Pradesh"> Himachal Pradesh</option>
                            <option value=" JAMMU AND KASHMIR"> JAMMU AND KASHMIR</option>
                            <option value=" Jharkhand "> Jharkhand </option>
                            <option value=" Karnataka  "> Karnataka </option>
                            <option value=" Kerala"> Kerala</option>
                            <option value=" Lakshyadeep "> Lakshyadeep </option>
                            <option value=" Madhya Pradesh"> Madhya Pradesh</option>
                            <option value=" Maharastra "> Maharastra </option>
                            <option value=" Manipur  "> Manipur </option>
                            <option value=" Meghalaya "> Meghalaya </option>
                            <option value=" Mizoram"> Mizoram</option>
                            <option value=" Nagaland "> Nagaland </option>
                            <option value=" ODISHA"> ODISHA</option>
                            <option value=" PUDUCHERRY (UT)J-R"> PUDUCHERRY (UT)J-R</option>
                            <option value=" PUNJAB "> PUNJAB </option>
                            <option value=" RAJASTHANA  "> RAJASTHANA </option>
                            <option value=" SIKKIM"> SIKKIM</option>
                            <option value="TAMILNADU ">TAMILNADU </option>
                            <option value="TELANGANA ">TELANGANA </option>
                            <option value="TRIPURA  ">TRIPURA </option>
                            <option value="UTTARAKHAND">UTTARAKHAND</option>
                            <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                            <option value="WEST BENGAL">WEST BENGAL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Post Name</label>
                        <select class="form-control" name="uppost" required="required" id="ump">
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
                        <input type="text" name="upname" class="form-control" required="required" id="upn" list="mabers" />
                        <datalist id="mabers">
                            <option value="Mr."> </option>
                            <option value="Mrs."> </option>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Board Category</label>
                        <select name="upgender" class="form-control" required="required" id="upg">
                            <option value="male">Men's Board</option>
                            <option value="female">Women's Board</option>
                            <option value="youth">Youth Board</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contact No.</label>
                        <input type="number" name="upmobile" class="form-control" required="required" id="upc" />
                    </div>
                    <div class="form-group">
                        <label>Email-id</label>
                        <input type="email" name="upemail" class="form-control" required="required" id="upem" />
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="w-75" src="" id="mig" style="height: 95px;" />
                        </div>
                        <div class="form-group col-md-8">
                            <label>Profile photo</label>
                            <input type="file" name="upimage" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Facebook Id Link:</label>
                        <input type="text" name="upfb" class="form-control" required="required" id="upf" />
                    </div>
                    <div class="form-group">
                        <label>Instagram Id Link:</label>
                        <input type="text" name="upinsta" class="form-control" required="required" id="upin" />
                    </div>
                    <div class="form-group">
                        <label>Whatsapp Number:</label>
                        <input type="number" name="upwhatsapp" class="form-control" required="required" id="upwt" />
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

//-- paginate end//
$(".hosmbe").on("click", function () {
    var sateid = $(this).data("id");
    console.log("id: " + sateid);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo base_url();?>State/stateupdatemebers/" + sateid,
        success: function (data) {
            // var result = JSON.parse(data);
            console.log(data);
            // $("#updateimage").modal('toggle');
            $("#shwoinfo").modal("show");
            // $('[name="id"]').val(data.id);
            $("#mid").val(data.id);
            $("#ums").val(data.state);
            $("#ump").val(data.mberpost);
            $("#upn").val(data.mbername);
            $("#upg").val(data.mbergender);
            $("#upc").val(data.mbrmobile);
            $("#upf").val(data.mberfb);
            $("#upin").val(data.mbrinsta);
            $("#upem").val(data.mbremail);
            $("#upwt").val(data.mbrwhatsapp);
            $("#mig").attr("src", "<?php echo base_url()?>./" + data.mberimage);
            $("#mimgup").val(data.mberimage);
        },
    });
});
$("#updatemberinfo").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>State/updatestatemberinfo",
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

            document.getElementById("updatemberinfo").reset();
        },
    });
});

  </script>                          