<style type="text/css">
    .error {
        color: red;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>

                        <?php if($newsgarlly->num_rows()<12){?>
                        <form enctype="multipart/form-data" id="newspaerform" method="POST" class="forms-sample">
                            <input type="text" name="officid" value="<?php echo $news?>" />
                            <div class="form-group">
                                <label> year : <span>*</span></label>
                                <select name="years" class="form-control" required="required" id="year">
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> News paper thumbnail: <span>*</span></label>

                                <input type="file" id="thumbnail" class="form-control" name="thumbnail" accept=".png,.jpg" />
                            </div>
                            <div class="form-group">
                                <label> News paper : <span>*</span></label>

                                <input type="file" id="newspaperi" class="form-control" name="newspaperi" accept=".pdf" />
                            </div>

                            <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-panel">
            <div class="col-md-12 mb-5 grid-margin stretch-card">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">News Paper</h4>

                            <?php  foreach ($newsgarlly->result() as $rows) { ?>
                            <div class="col-md-3">
                                <div>
                                    <a href="<?php echo   base_url().$rows->paper ?>" target="_blank">
                                        <img
                                            class="garliyss modal-target"
                                            alt=""
                                            src="<?php $gi = $rows->paper_thumbnail; 
                                    if ($gi) {
                 echo  base_url().$rows->paper_thumbnail;
                } else {
                echo base_url().'uploads/origin/def-img.png';
                }
                    ?>"
                                            style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;"
                                        />
                                    </a>
                                    <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
          <!-- main-panel ends -->
          
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.js"></script>
   
        <script>
    $("#newspaerform").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Newspaper/addnewpaper",
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
                $("#newspaerform").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Successfully ");

                $("#newspaerform").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

    </script>