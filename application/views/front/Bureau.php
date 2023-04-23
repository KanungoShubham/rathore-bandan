<style>
#demo {
    background-image: url(<?php echo  base_url().'assets/images/sdg.png'?>);

    margin: auto;
}

.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;

    text-align: center;
    font-size: 1.2rem;

    font-weight: bold;
    line-height: 2rem;
}

@media(max-width:767px) {
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;

        text-align: center;
        font-size: 0.7rem;

        font-weight: bold;
        line-height: 1.5rem;
    }
}

.carousel-caption img {
    width: 6rem;
    border-radius: 5rem;
    margin-top: 2rem;
}

@media(max-width:767px) {
    .carousel-caption img {
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem;
    }
}

#image-caption {
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem;
}

@media(max-width:767px) {
    #image-caption {
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem;
    }
}

.ifa {
    background-color: rgb(223, 56, 89);
    padding: 1.4rem;
}

@media(max-width:767px) {
    i {
        padding: 0.8rem;
    }
}

.carousel-control-prev {
    justify-content: flex-start;
}

.carousel-control-next {
    justify-content: flex-end;
}

.carousel-control-prev,
.carousel-control-next {
    transition: none;
    opacity: unset;
}

.blogcard {
    display: flex;
    flex-direction: column;
    width: clamp(20rem, calc(20rem + 2vw), 22rem);
    overflow: hidden;
    box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
    border-radius: 1em;
    background: #ECE9E6;
    background: linear-gradient(to right, #FFFFFF, #FFFFFF);

}

.card__body {
    padding: 1rem;
    display: flex;
    flex-direction: column;
    gap: .5rem;
}


.tag {
    align-self: flex-start;
    padding: .25em .75em;
    border-radius: 1em;
    font-size: .75rem;
}

.tag+.tag {
    margin-left: .5em;
}

.tag-blue {
    background: #56CCF2;
    background: linear-gradient(to bottom, #2F80ED, #56CCF2);
    color: #fafafa;
}

.tag-brown {
    background: #D1913C;
    background: linear-gradient(to bottom, #FFD194, #D1913C);
    color: #fafafa;
}

.tag-red {
    background: #cb2d3e;
    background: linear-gradient(to bottom, #ef473a, #cb2d3e);
    color: #fafafa;
}

.card__body h4 {
    font-size: 1.5rem;
    text-transform: capitalize;
}

.card__footer {
    display: flex;
    padding: 1rem;
    margin-top: auto;
}

.user {
    display: flex;
    gap: .5rem;
}

.user__image {
    border-radius: 50%;
    width: 50px;
    height: 50px;
}

.user__info>small {
    color: #666;
}

.blogimg {
    max-width: 100%;
    display: block;
    object-fit: cover;
}
p{
    text-align: justify;
    margin-bottom: 5px;
}
</style>
<div class="container-fluid p-0 mt-5" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style=" min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Groom & Bride</h1>
                        <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                            <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">
                                We're getting married</h3>
                        </div>
                        <button type="button" class="btn-play mx-auto" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style=" min-height: 400px;">
                <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Groom & Bride</h1>
                        <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                            <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">
                                We're getting married</h3>
                        </div>
                        <button type="button" class="btn-play mx-auto" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                <span class="carousel-control-prev-icon mt-3"></span>
            </div>
        </a>
        <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                <span class="carousel-control-next-icon mt-3"></span>
            </div>
        </a>
    </div>
</div>
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-5 sectionbackground" id="about"
    style="background-image:url(<?php echo  base_url().'assets/metromoal/img/mwbg.gif'?>);">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About</h6>
            <h1 class="font-secondary display-4 text-white">Groom & Bride</h1>
            <i class="far fa-heart text-dark"></i>
        </div>


        <div class="row">

            <div class="float-left">
                <div class="card " style="width: 20rem; border-radius: 10px;">
                    <div class="mb-3 mt-4">
                        <img src="<?php echo  base_url().'assets/images/wdiing_grooms.webp'?>" style="width: 296px;
                   height: 250px;">
                    </div>
                    <div class="mb-3">
                        <center><a href="<?php echo base_url()?>Viewgroom/" class="btn btn-info btn-sm">View Groom </a>
                        </center>
                    </div>
                </div>
            </div>
            <div style="margin-left: 500px;">
                <div class="card " style="width: 20rem; border-radius: 10px;">
                    <div class="mb-3 mt-4">
                        <img src="<?php echo  base_url().'assets/images/bride.webp'?>" style="width: 296px;
                   height: 250px;">
                    </div>
                    <div class="mb-3">
                        <center><a href="<?php echo base_url()?>Viewbride/" class="btn btn-info btn-sm ">View Bride </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5 pb-5" id="blog">
    <div class="section-title position-relative text-center">
        <h1 class="font-secondary display-4  text-center"><b>Matrimonial Blog</b></h1>
        <i class="far fa-heart text-dark"></i>
    </div>
    <div class="row">
    <?php  foreach ($blogs as $rw) {  ?>
        <div class="col-md-4">
            <center>
                <div class="blogcard">
                    <div class="card__header">
                        <img src="<?php $imgs = $rw->bimage; 
    if ($imgs) {echo base_url().''.$rw->bimage;} else {echo base_url().'assets/images/logos/rathore.png';}?>" alt="card__image"
                            class="card__image blogimg" width="600">
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue"><?php echo $rw->category; ?></span>
                        <h4><?php echo $rw->hadding; ?></h4>
                      <?php echo $rw->description; ?>
                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <img src="<?php $imgs = $datas['proimage']; 
                    if ($imgs) {
echo base_url().''.$datas['proimage'];
} else {
echo base_url().'assets/images/ur.png'; 
}
    ?>" alt="user__image" class="user__image blogimg">
                            <div class="user__info mx-3">
                                <h5><?php echo $datas['Fristname']; ?> <?php echo $datas['Lastname']; ?></h5>
                                <h6 class="font-weight-light text-left"> <?php echo $rw->current_time; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
<?php } ?>

</div>
<div class="mt-5">

        <center><a href="" class="btn btn-info btn-sm rounded-pill" target="_blank">view More </a></center>
</div>
    </div>
    <div class="container-fluid  pb-5" id="story">
        <div class="section-title position-relative text-center">
            <h1 class="font-secondary display-4  text-center"><b>Success Stories</b></h1>
            <i class="far fa-heart text-dark"></i>
        </div>


        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <p class="h5 text-white">If Shai Reznik's TDD videos don't convince you to add automated testing
                            your code,
                            I don't know what will.This was the very best explanation of frameworks for brginners
                            that I've ever seen.
                        </p>
                        <img src="https://i.imgur.com/lE89Aey.jpg">
                        <div id="image-caption">Nick Doe</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p class=" h5 text-white">If Shai Reznik's TDD videos don't convince you to add automated
                            testing your code,
                            I don't know what will.This was the very best explanation of frameworks for brginners
                            that I've ever seen.</p>
                        <img src="https://i.imgur.com/QptVdsp.jpg" class="img-fluid">
                        <div id="image-caption">Cromption Greves</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p class=" h5 text-white">If Shai Reznik's TDD videos don't convince you to add automated
                            testing your code,
                            I don't know what will.This was the very best explanation of frameworks for brginners
                            that I've ever seen.</p>
                        <img src="https://i.imgur.com/jQWThIn.jpg" class="img-fluid">
                        <div id="image-caption">Harry Mon</div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <i class='fas fa-arrow-left ifa'></i>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <i class='fas fa-arrow-right ifa'></i>
            </a>
        </div>



    </div>