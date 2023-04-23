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
<a href="<?php echo base_url()?>Matrimony">Home</a> / <a href="#" class="text-muted">Social</a>
</div>
</div>

</div>

<div class="section">
    <div class="container">
        <div class="row" id="examples">
            <?php  foreach ($row as $rw) {  ?>

            <div class="col-md-3 mb-5 "  data-aos="zoom-in">
                <div class="cards" style="width: 260px;">
                    <div class="image-container">
                        <img src="<?php $imgs = $rw->image; 
    if ($imgs) {echo base_url().''.$rw->image;} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                            class="himag"
                        />
                    </div>
                    <div class="product-detail-container p-2">
                        <div class="justify-content-between align-items-center">
                            <div>
                                <h5 class="text-dark mb-2">
                                    <b> Name:<?php echo $rw->hospicname; ?> </b>
                                </h5>
                            </div>

                            <div>
                                <p class="text-dark">
                                    <b>
                                        Address:
                                        <?php echo $rw->address; ?>
                                    </b>
                                </p>
                            </div>
                        </div>

                        <center><a href="<?php echo base_url()?>HospiceDetail/<?php echo $rw->id ?>" class="btn btn-info btn-sm" target="_blank">view More </a></center>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>
<script>
    $("#examples").paginate();
</script>
<!-- end section -->
<!-- section -->
