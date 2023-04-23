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
width:100%;
        height: 150px;
    }
    .himag {
        width: 100%;
        height: 150px;
    }
    .cards:hover {
        transform: scale(1.1);
    }
    .card__title{
        font-size:16px;

    }
.box{
    height:28px;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;

  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 10px;
}

.flip-card-front {
  background-color: #fff;
  color: #000;
}

.flip-card-back {
  background-color: #002966;
  color: #fff;

  transform: rotateY(180deg);
}
.flip-card-back > p {
font-size:1rem;
  color: #fff;
padding:0 5%;

}
.card__text{
    color:#000;
}
    </style>
<div class="container">
<div class="row col-md-12">  
<?php  foreach ($row as $rw) {  ?>
    <div class="col-md-4 my-4">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="image-container">
                    <img
                        src="<?php $imgs = $rw->eimage; 
    if ($imgs) {echo base_url().''.$rw->eimage;} else {echo base_url().'assets/images/logos/rathore.png';}?>"
                        class="himag"
                    />
                    <div class="d-flex btn btn-dark text-white float-right box">
                        <p class="text-white">
                            <b>
                                Organised by :
                                <?php echo $rw->parsonanme ?>
                            </b>
                        </p>
                    </div>
                </div>
                <div class="card__content mt-5 mx-2">
                    <h2 class="card__title">
                        <b><?php echo $rw->eventname ?></b>
                    </h2>
                    <p class="card__text">
                        Date :
                        <?php echo  date('j F Y', strtotime( $rw->eventdate))?>
                    </p>
                    <div class="d-flex">
                        <p class="card__text">
                            Event Time :
                            <?php echo  date('H:i:a', strtotime( $rw->starttime))?> To
                            <?php echo  date('H:i:a', strtotime( $rw->endtime))?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flip-card-back">
                <h5 class="text-white my-2 mx-3" style="font-size:1.1rem;">Event Details</h5>
               <?php echo $rw->description ?>
            </div>
        </div>
    </div>
</div>

<?php } ?>

 </div> 
 </div> 