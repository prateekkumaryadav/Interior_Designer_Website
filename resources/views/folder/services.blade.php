@extends('folder.master')
@section('content')

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Our Services</h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Services</li>
        </ul>
    </div>
</section>
<!-- home page service grids -->
<section id="services" class="services py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="title-big">Our Services</h3>
      <div class="row text-center img-grids pt-2">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="ser-bg1">
            <div class="p-md-5 p-3">
                <img src="assets/images/icon1.png" alt="" class="img-fluid" />
                <h4><a href="#url">Plans and Projects</a></h4>
                <!-- <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                doloret quas saepe autem, dolor set.</p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
          <div class="ser-bg2">
            <div class="p-md-5 p-3">
                <img src="assets/images/icon2.png" alt="" class="img-fluid" />
                <h4><a href="#url">Interior Furniture</a></h4>
                <!-- <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                doloret quas saepe autem, dolor set.</p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
          <div class="ser-bg3">
            <div class="p-md-5 p-3">
                <img src="assets/images/icon3.png" alt="" class="img-fluid" />
                <h4><a href="#url">Home Decoratoin</a></h4>
                <!-- <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                doloret quas saepe autem, dolor set.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page service grids -->
@stop