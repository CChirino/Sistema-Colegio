@extends('layouts.admin')

@section('titulo', 'Dashboard')


@section('content')
        {{-- <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard V.1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="analytics-sparkle-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Computer Technologies</h5>
                            <h2>$<span class="counter">5000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                            <span class="text-success">20%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Accounting Technologies</h5>
                            <h2>$<span class="counter">3000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                            <span class="text-danger">30%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>Electrical Engineering</h5>
                            <h2>$<span class="counter">2000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                            <span class="text-info">60%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>Chemical Engineering</h5>
                            <h2>$<span class="counter">3500</span> <span class="tuition-fees">Tuition Fees</span></h2>
                            <span class="text-inverse">80%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="traffic-analysis-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu">
                        <i class="fa fa-facebook"></i>
                        <div class="social-edu-ctn">
                            <h3>50k Likes</h3>
                            <p>You main list growing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                        <i class="fa fa-twitter"></i>
                        <div class="social-edu-ctn">
                            <h3>30k followers</h3>
                            <p>You main list growing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                        <i class="fa fa-linkedin"></i>
                        <div class="social-edu-ctn">
                            <h3>7k Connections</h3>
                            <p>You main list growing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                        <i class="fa fa-youtube"></i>
                        <div class="social-edu-ctn">
                            <h3>50k Subscribers</h3>
                            <p>You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="library-book-area mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-cards-item">
                        <div class="single-product-image">
                            <a href="#"><img src="{{ asset('asset/img/product/profile-bg.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-product-text">
                            <img src="{{ asset('asset/img/product/pro4.jpg')}}" alt="">
                            <h4><a class="cards-hd-dn" href="#">Angela Dominic</a></h4>
                            <h5>Web Designer & Developer</h5>
                            <p class="ctn-cards">Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</p>
                            <a class="follow-cards" href="#">Follow</a>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span class="counter">199</span></h3>
                                        <p>Articles</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span class="counter">599</span></h3>
                                        <p>Like</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span class="counter">399</span></h3>
                                        <p>Comment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                        <div class="single-review-st-hd">
                            <h2>Reviews</h2>
                        </div>
                        <div class="single-review-st-text">
                            <img src="{{ asset('asset/img/notification/1.jpg ')}}" alt="">
                            <div class="review-ctn-hf">
                                <h3>Sarah Graves</h3>
                                <p>Highly recommend</p>
                            </div>
                            <div class="review-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                        <div class="single-review-st-text">
                            <img src="{{ asset('asset/img/notification/2.jpg ')}}" alt="">
                            <div class="review-ctn-hf">
                                <h3>Garbease sha</h3>
                                <p>Awesome Pro</p>
                            </div>
                            <div class="review-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                        <div class="single-review-st-text">
                            <img src="{{ asset('asset/img/notification/3.jpg')}}" alt="">
                            <div class="review-ctn-hf">
                                <h3>Gobetro pro</h3>
                                <p>Great Website</p>
                            </div>
                            <div class="review-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                        <div class="single-review-st-text">
                            <img src="{{ asset('asset/img/notification/4.jpg')}}" alt="">
                            <div class="review-ctn-hf">
                                <h3>Siam Graves</h3>
                                <p>That's Good</p>
                            </div>
                            <div class="review-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                        <div class="single-review-st-text">
                            <img src="{{ asset('asset/img/notification/5.jpg')}}" alt="">
                            <div class="review-ctn-hf">
                                <h3>Sarah Graves</h3>
                                <p>Highly recommend</p>
                            </div>
                            <div class="review-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                        <div class="single-review-st-text">
                            <img src="{{ asset('asset/img/notification/6.jpg')}}" alt="">
                            <div class="review-ctn-hf">
                                <h3>Julsha Grav</h3>
                                <p>Sei Hoise bro</p>
                            </div>
                            <div class="review-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="single-product-image">
                            <a href="#"><img src="{{ asset('asset/img/product/book-4.jpg')}}" alt=""></a>
                        </div>
                        <div class="single-product-text edu-pro-tx">
                            <h4><a href="#">Title Demo Here</a></h4>
                            <h5>Lorem ipsum dolor sit amet, this is a consec tetur adipisicing elit</h5>
                            <div class="product-price">
                                <h3>$45</h3>
                                <div class="single-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <button type="button" class="button-default cart-btn">Read More</button>
                                <button type="button" class="button-default"><i class="fa fa-heart"></i></button>
                                <button type="button" class="button-default"><i class="fa fa-share"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <div class="courses-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Browser Status</h3>
                        <ul class="basic-list">
                            <li>Google Chrome <span class="pull-right label-danger label-1 label">95.8%</span></li>
                            <li>Mozila Firefox <span class="pull-right label-purple label-2 label">85.8%</span></li>
                            <li>Apple Safari <span class="pull-right label-success label-3 label">23.8%</span></li>
                            <li>Internet Explorer <span class="pull-right label-info label-4 label">55.8%</span></li>
                            <li>Opera mini <span class="pull-right label-warning label-5 label">28.8%</span></li>
                            <li>Mozila Firefox <span class="pull-right label-purple label-6 label">26.8%</span></li>
                            <li>Safari <span class="pull-right label-purple label-7 label">31.8%</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                        <h3 class="box-title">Visits from countries</h3>
                        <ul class="country-state">
                            <li>
                                <h2><span class="counter">1250</span></h2> <small>From Australia</small>
                                <div class="pull-right">75% <i class="fa fa-level-up text-danger ctn-ic-1"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">1050</span></h2> <small>From USA</small>
                                <div class="pull-right">48% <i class="fa fa-level-up text-success ctn-ic-2"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">6350</span></h2> <small>From Canada</small>
                                <div class="pull-right">55% <i class="fa fa-level-up text-success ctn-ic-3"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success ctn-vs-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:55%;"> <span class="sr-only">55% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">950</span></h2> <small>From India</small>
                                <div class="pull-right">33% <i class="fa fa-level-down text-success ctn-ic-4"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success ctn-vs-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:33%;"> <span class="sr-only">33% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">3250</span></h2> <small>From Bangladesh</small>
                                <div class="pull-right">60% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">60% Complete</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="courses-title">
                            <a href="#"><img src="{{ asset('asset/img/courses/1.jpg')}}" alt="" /></a>
                            <h2>Apps Development</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container pt-4 pb-4">
        @include('custom.message')
        <div class="row">
            <div class="col-sm-4">
                <img class="card-img-user pb-1 pt-1" src="{{asset('storage/'.Auth::user()->image)}}">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h6>{{ auth()->user()->nombre }} {{ auth()->user()->apellido }} </h6>
                        <p class="card-text">{{ auth()->user()->email }}</p>
                        <p class="card-text">{{ auth()->user()->direccion }}</p>
                        <p class="card-text">{{ auth()->user()->fecha_nacimiento }}</p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-8 pt-4">
                <img src="{{ asset('asset/img/logo/bienvenida.jpeg')}}" >
            </div>
            {{-- <div class="col-sm-8">
                <table class="table pb-1 pt-1 ">
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">7:00 a 8:30</th>
                            <td>Matematica</td>
                            <td>Matematica</td>
                            <td>Lenguaje</td>
                            <td>Lenguaje</td>
                            <td>Historia Universal</td>
                        </tr>
                        <tr>
                            <th scope="row">8:30 a 9:30</th>
                            <td>Matematica</td>
                            <td>Historia de Venezuela</td>
                            <td>Lenguaje</td>
                            <td>Biologia</td>
                            <td>Historia Universal</td>
                        </tr>
                        <tr>
                            <th scope="row">9:30 a 10:30</th>
                            <td>R</td>
                            <td>E </td>
                            <td>C</td>
                            <td>R</td>
                            <td>E           O</td>                        
                        </tr>
                        <tr>
                            <th scope="row">10:30 a 11:30</th>
                            <td>Biologia</td>
                            <td>Geografia General</td>
                            <td>Educacion Artistica</td>
                            <td>Educacion Fisica</td>
                            <td>Ingles</td>                        
                        </tr>
                        <tr>
                            <th scope="row">11:30 a 12:30</th>
                            <td>Biologia</td>
                            <td>Geografia General</td>
                            <td>Educacion Artistica</td>
                            <td>Educacion Fisica</td>
                            <td>Ingles</td>   
                        </tr>
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-sm-4 pt-4 pb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Materias</h5>
                        <p class="card-text">Proximamente tendras </p>
                      </div>
                </div>
            </div>
            <div class="col-sm-4 pt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notificaciones</h5>
                        <p class="card-text">Proximamente tendras notificaciones</p>
                      </div>
                </div>
            </div>
            <div class="col-sm-4 pt-4">
                <img src="{{ asset('asset/img/logo/LogoEscuela.png')}}" width="300">
            </div>
        </div>
    </div> --}}
    {{-- <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
