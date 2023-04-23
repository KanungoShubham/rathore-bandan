<div class="container bootstrap snippets bootdeys">
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" id="binfo" enctype="multipart/form-data" method="POST">
                <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category">Blog category</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="Matrimony">Matrimony</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right"> Blog Hadding</label>
                                <input id="hadding" class="form-control" type="text" name="hadding" required />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="my-input" class="text-right">Blog Description</label>
                                <textarea class="form-control" name="description" id="description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="my-input" class="text-right">Blog Image</label>
                            <input id="bimage" class="form-control" type="file" name="bimage" accept="image/png,image/gif,image/jpeg,image/jpg,image/webp" required />
                        </div>
                        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript">
// add eduction//

$('#binfo').submit(function(e) {
    e.preventDefault();
    for (description in CKEDITOR.instances)
        CKEDITOR.instances[description].updateElement();
    $.ajax({
        url: '<?php echo base_url();?>Matrimony/addblog/',
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
            console.log(data)
            if (data['warning'] == 2) {

                toastr.warning(data['message'], "You bLog already registered ");

            } else if (data['success'] == 1) {

                toastr.success(data['message'], " Successfully");
                $("#binfo").trigger("reset");


            }





        },
    });


});
</script>