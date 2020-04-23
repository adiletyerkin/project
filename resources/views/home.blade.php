@extends('layouts.app')
@section('title-block')
    MAIN PAGE
@endsection
@section('content')
    <h1></h1>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://support.apple.com/library/content/dam/edam/applecare/images/ru_RU/appleapps/podcasts/watchos6-series4-audiobooks-podcasts-music-hero.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Apple Watch</h5>
        <p>Apple Watch helps you live a healthy lifestyle.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/wearables/watch-gt-2019/img/pic_s0_img.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Casio</h5>
        <p>G-SHOCK shock resistant military and tactical watches with outstanding water resistant features.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.shopify.com/s/files/1/0073/2692/4836/files/unworn_rolex_watches_1800x.jpg?v=1584647119" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rolex</h5>
        <p>Rolex watches are selected materials and attention to every detail during assembly.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
