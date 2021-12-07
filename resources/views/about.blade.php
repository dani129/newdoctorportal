@extends('layouts.newApp')
@section('header')
    @include('partials.header')
@endsection
@section('menu')
    @include('partials.menu')
@endsection
@section('content')
  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="{{asset('images/bg/bg1.jpg')}}">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">About</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">About Us</a></span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section>
      <div class="container pt-70">
        <div class="row">
          <div class="col-md-8">
            <h2 class="mt-0">Welcome To <span class="text-theme-colored1"> Medinova</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.</p>
            <div class="row">
              <div class="col-md-6">
                <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top border-2px mb-30 mb-sm-30 p-20">
                  <div class="icon-box-wrapper">
                    <div class="icon-wrapper">
                      <a class="icon icon-type-font-icon icon-dark icon-border-effect icon-circled mt-10">
                        <i class="flaticon-medical-medical51"></i>
                      </a>
                    </div>
                    <div class="icon-text pl-10">
                      <h4 class="icon-box-title"> Qualified <span class="text-theme-colored1">Doctors</span></h4>
                      <div class="content">
                        <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="post-btn-readmore mt-15"> <a href="#" class="btn btn-plain-text-with-arrow"> Read more </a></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top border-2px mb-30 mb-sm-30 p-20">
                  <div class="icon-box-wrapper">
                    <div class="icon-wrapper">
                      <a class="icon icon-type-font-icon icon-dark icon-border-effect icon-circled mt-10">
                        <i class="flaticon-medical-ambulance14"></i>
                      </a>
                    </div>
                    <div class="icon-text pl-10">
                      <h4 class="icon-box-title"> Emergency <span class="text-theme-colored1">Services</span></h4>
                      <div class="content">
                        <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="post-btn-readmore mt-15"> <a href="#" class="btn btn-plain-text-with-arrow"> Read more </a></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top border-2px mb-30 mb-sm-30 p-20">
                  <div class="icon-box-wrapper">
                    <div class="icon-wrapper">
                      <a class="icon icon-type-font-icon icon-dark icon-border-effect icon-circled mt-10">
                        <i class="fa fa-credit-card"></i>
                      </a>
                    </div>
                    <div class="icon-text pl-10">
                      <h4 class="icon-box-title"> Online <span class="text-theme-colored1">Payment</span></h4>
                      <div class="content">
                        <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="post-btn-readmore mt-15"> <a href="#" class="btn btn-plain-text-with-arrow"> Read more </a></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top border-2px mb-30 mb-sm-30 p-20">
                  <div class="icon-box-wrapper">
                    <div class="icon-wrapper">
                      <a class="icon icon-type-font-icon icon-dark icon-border-effect icon-circled mt-10">
                        <i class="fa fa-comments"></i>
                      </a>
                    </div>
                    <div class="icon-text pl-10">
                      <h4 class="icon-box-title"> Affordable <span class="text-theme-colored1">Billing</span></h4>
                      <div class="content">
                        <p>Default text for Box Content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                      <div class="post-btn-readmore mt-15"> <a href="#" class="btn btn-plain-text-with-arrow"> Read more </a></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="tm-sc-services position-relative z-index-1" data-tm-margin-top="-122">
              <div class="service-list">
                <div class="top bg-theme-colored1">
                  <h3 class="text-white text-center p-30 pl-20 m-0">Check Latest Services</h3>
                </div>
                <div class="bottom">
                  <ul>
                    <li>
                      <h4 class="title">Cancer Services</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur.</p>
                      <a class="text-black-999 text-hover-theme-colored1" href="#"><i class="fa fa-angle-double-right"></i> Read more</a>
                    </li>
                    <li>
                      <h4 class="title">Diagnostic center</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur.</p>
                      <a class="text-black-999 text-hover-theme-colored1" href="#"><i class="fa fa-angle-double-right"></i> Read more</a>
                    </li>
                    <li>
                      <h4 class="title">Modern Technology</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur.</p>
                      <a class="text-black-999 text-hover-theme-colored1" href="#"><i class="fa fa-angle-double-right"></i> Read more</a>
                    </li>
                    <li class="p-0">
                      <a class="btn btn-theme-colored1 btn-flat btn-block mt-0 p-15" href="#">View All Services <i class="fa fa-angle-right"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->

    <!-- Section: Service -->
    <section class="bg-white-f5">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
              <h2>Our Services</h2>
              <p>Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque possimus optio quo. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore suscipit perferendis aperiam labore debitis atque odit neque Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque possimus optio quo.</p>
              <div class="row mb-10">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-ambulance14" ></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title"> Emergency Care</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-illness"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Operation Theater</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-10">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-stethoscope10"></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Outdoor Checkup</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30 " >
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-balls" ></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Cancer Service</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30 " >
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-drops1" ></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">Blood Test</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="mb-sm-50 col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30" >
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"> <i class="flaticon-medical-tablets9" ></i> </a>
                      <div class="icon-text">
                        <h5 class="icon-box-title" > Pharmacy</h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
              <img src="{{asset('images/services/sc4.jpg')}}" class="attachment-full mb-10" alt=""/>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header bg-theme-colored1" id="headingOne">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How much does a business plan cost?
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-theme-colored2" id="headingTwo">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Do you provide client references?
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-theme-colored1" id="headingThree">
                    <h5 class="text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How much does a business plan cost?
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mt-10 mb-0">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital Nanotech immersion.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->

    <!-- Section: Team -->
    <section class="">
      <div class="container">
        <div class="section-title">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="text-center mb-60">
                <div class="tm-sc-section-title section-title section-title-style1 text-center">
                  <div class="title-wrapper">
                    <h2 class="title icon-bottom"> <span class="">Our </span> <span class="text-theme-colored1">Doctors</span></h2>
                    <div class="title-seperator-line"></div>
                    <div class="paragraph">
                    <p>Explore Our Completed Services! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="tm-sc-staff tm-sc-staff-carousel staff-style3-modern owl-dots-light-skin owl-dots-center">
                <!-- Isotope Gallery Grid -->
                <div id="staff-holder-945632" class="owl-carousel owl-theme tm-owl-carousel-4col" data-nav="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                  <!-- the loop -->
                  <div class="tm-carousel-item">
                    <div class="tm-staff">
                      <div class="staff-inner">
                        <div class="box-hover-effect">
                          <div class="staff-header effect-wrapper">
                            <div class="thumb">
                              <img src="{{asset('images/team/t1.jpg')}}" class="img-fullwidth" alt=""/>
                            </div>
                            <div class="overlay-shade shade-white"></div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                  <li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="staff-content">
                            <h5 class="name"><a href="#">Maria Angel</a></h5>
                            <div class="speciality">Dentist</div>
                            <ul class="contact-info"></ul>
                            <div class="staff-working-hours">
                              <ul class="working-hours">
                                <li class="clearfix">
                                  <span>Monday - Friday</span>
                                  <div class="value">8.00 - 17.00</div>
                                </li>
                                <li class="clearfix">
                                  <span>Saturday</span>
                                  <div class="value">9.00 - 16.00</div>
                                </li>
                              </ul>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                            <div class="staff-btn">
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-staff">
                      <div class="staff-inner">
                        <div class="box-hover-effect">
                          <div class="staff-header effect-wrapper">
                            <div class="thumb">
                              <img src="{{asset('images/team/t2.jpg')}}" class="img-fullwidth" alt=""/>
                            </div>
                            <div class="overlay-shade shade-white"></div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                  <li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="staff-content">
                            <h5 class="name"><a href="#">Jason Jack</a></h5>
                            <div class="speciality">Cardiologist</div>
                            <ul class="contact-info"></ul>
                            <div class="staff-working-hours">
                              <ul class="working-hours">
                                <li class="clearfix">
                                  <span>Monday - Friday</span>
                                  <div class="value">8.00 - 17.00</div>
                                </li>
                                <li class="clearfix">
                                  <span>Saturday</span>
                                  <div class="value">9.00 - 16.00</div>
                                </li>
                              </ul>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                            <div class="staff-btn">
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-staff">
                      <div class="staff-inner">
                        <div class="box-hover-effect">
                          <div class="staff-header effect-wrapper">
                            <div class="thumb">
                              <img src="{{asset('images/team/t3.jpg')}}" class="img-fullwidth" alt=""/>
                            </div>
                            <div class="overlay-shade shade-white"></div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                  <li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="staff-content">
                            <h5 class="name"><a href="#">Eliz Thopper</a></h5>
                            <div class="speciality">Cardiologist</div>
                            <ul class="contact-info"></ul>
                            <div class="staff-working-hours">
                              <ul class="working-hours">
                                <li class="clearfix">
                                  <span>Monday - Friday</span>
                                  <div class="value">8.00 - 17.00</div>
                                </li>
                                <li class="clearfix">
                                  <span>Saturday</span>
                                  <div class="value">9.00 - 16.00</div>
                                </li>
                              </ul>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                            <div class="staff-btn">
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-staff">
                      <div class="staff-inner">
                        <div class="box-hover-effect">
                          <div class="staff-header effect-wrapper">
                            <div class="thumb">
                              <img src="{{asset('images/team/t4.jpg')}}" class="img-fullwidth" alt=""/>
                            </div>
                            <div class="overlay-shade shade-white"></div>
                            <div class="icons-holder icons-holder-middle">
                              <div class="icons-holder-inner">
                                <ul class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                  <li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="staff-content">
                            <h5 class="name"><a href="#">Jason Thomas</a></h5>
                            <div class="speciality">Neurologiest</div>
                            <ul class="contact-info">
                            </ul>
                            <div class="staff-working-hours">
                              <ul class="working-hours">
                                <li class="clearfix">
                                  <span>Monday - Friday</span>
                                  <div class="value">8.00 - 17.00</div>
                                </li>
                                <li class="clearfix">
                                  <span>Saturday</span>
                                  <div class="value">9.00 - 16.00</div>
                                </li>
                              </ul>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a class="styled-icons-item" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                            <div class="staff-btn">
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->

  </div>
  <!-- end main-content -->
@endsection
@section('footer')
    @include('partials.footer')
@endsection
