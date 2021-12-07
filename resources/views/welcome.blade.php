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
    <!-- Section: Home -->
    <section class="layer-overlay overlay-white-1" data-tm-bg-img="images/bg/bg2.jpg">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row justify-content-md-center">
            <div class="col-md-6">
              <div class="bg-white-transparent-8 text-center pt-20 pb-50 outline-border-5px">
                <h1 class="font-size-54 text-uppercase">Best <span class="text-theme-colored1">Template</span></h1>
                <h5 class="">Every day we bring hope to millions of children in the world's hardest places as a sign of God's unconditional love.</h5>
                <a class="btn btn-theme-colored1 btn-round mt-15" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Analysis -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 mb-lg-30">
              <div class="tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top p-30 border-10px">
                <div class="icon-box-wrapper">
                  <div class="icon-wrapper">
                    <a class="icon icon-type-font-icon icon-lg icon-gray icon-bordered icon-circled mb-20"
                      >
                    <i class="flaticon-medical-ambulance14 font-48"></i></a>
                  </div>
                  <div class="icon-text">
                    <h4 class="icon-box-title">
                      Emergency Care
                    </h4>
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam interdum.</p>
                    </div>
                    <div class="btn-view-details text-center">
                      <a  target="_self"
                        href="#"
                        class="btn btn-light btn-sm">
                      Read More</a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb-lg-30">
              <div class="tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top p-30 border-10px">
                <div class="icon-box-wrapper">
                  <div class="icon-wrapper">
                    <a class="icon icon-type-font-icon icon-lg icon-gray icon-bordered icon-circled mb-20"
                      >
                    <i class="flaticon-medical-illness font-48"></i></a>
                  </div>
                  <div class="icon-text">
                    <h4 class="icon-box-title">
                      Operation Theatre
                    </h4>
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam interdum.</p>
                    </div>
                    <div class="btn-view-details text-center">
                      <a  target="_self"
                        href="#"
                        class="btn btn-light btn-sm">
                      Read More</a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-icon-box icon-box icon-top tm-iconbox-icontype-font-icon text-center iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top p-30 border-10px">
                <div class="icon-box-wrapper">
                  <div class="icon-wrapper">
                    <a class="icon icon-type-font-icon icon-lg icon-gray icon-bordered icon-circled mb-20"
                      >
                    <i class="flaticon-medical-medical51"></i></a>
                  </div>
                  <div class="icon-text">
                    <h4 class="icon-box-title">
                      Outdoor Checkup
                    </h4>
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam interdum.</p>
                    </div>
                    <div class="btn-view-details text-center">
                      <a  target="_self"
                        href="#"
                        class="btn btn-light btn-sm">
                      Read More</a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Depertment -->
    <section class="" data-tm-bg-img="images/pattern/p4.png">
      <div class="container">
        <div class="section-title">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="tm-sc-section-title section-title section-title-style1 text-center">
                <div class="title-wrapper">
                  <h2 class="title">
                    <span class="">Our</span>
                    <span class="text-theme-colored1">Departments</span>
                  </h2>
                  <div class="title-seperator-line"></div>
                  <div class="paragraph">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry’s standard dummy text ever since the been when an unknown printer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
              <div class="tm-sc-departments">
                <div class="tm-departments-item department-items type-department-items">
                  <a href="#">
                  <img src="{{asset('images/depertment/dp1.jpg')}}" class="img-fullwidth" alt=""/></a>
                  <div class="details">
                    <h5 class="title">
                      <a href="#">
                      Blood Test</a>
                    </h5>
                    <div class="excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                    </div>
                    <div class="btn-view-details">
                      <a href="#"
                        class="btn btn-theme-colored1 btn-sm">
                      View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
              <div class="tm-sc-departments">
                <div class="tm-departments-item department-items type-department-items">
                  <a href="#">
                  <img src="{{asset('images/depertment/dp2.jpg')}}" class="img-fullwidth" alt=""/></a>
                  <div class="details">
                    <h5 class="title">
                      <a href="#">
                      Urology</a>
                    </h5>
                    <div class="excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                    </div>
                    <div class="btn-view-details">
                      <a href="#"
                        class="btn btn-theme-colored1 btn-sm">
                      View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
              <div class="tm-sc-departments">
                <div class="tm-departments-item department-items type-department-items">
                  <a href="#">
                  <img src="{{asset('images/depertment/dp3.jpg')}}" class="img-fullwidth" alt=""/></a>
                  <div class="details">
                    <h5 class="title">
                      <a href="#">
                      Dental</a>
                    </h5>
                    <div class="excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                    </div>
                    <div class="btn-view-details">
                      <a href="#"
                        class="btn btn-theme-colored1 btn-sm">
                      View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
              <div class="tm-sc-departments">
                <div class="tm-departments-item department-items type-department-items">
                  <a href="#">
                  <img src="{{asset('images/depertment/dp4.jpg')}}" class="img-fullwidth" alt=""/></a>
                  <div class="details">
                    <h5 class="title">
                      <a href="#">
                      Neurology </a>
                    </h5>
                    <div class="excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                    </div>
                    <div class="btn-view-details">
                      <a href="#"
                        class="btn btn-theme-colored1 btn-sm">
                      View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb-30">
              <div class="tm-sc-departments">
                <div class="tm-departments-item department-items type-department-items">
                  <a href="#">
                  <img src="{{asset('images/depertment/dp5.jpg')}}" class="img-fullwidth" alt=""/></a>
                  <div class="details">
                    <h5 class="title">
                      <a href="#">
                      Cardiology</a>
                    </h5>
                    <div class="excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                    </div>
                    <div class="btn-view-details">
                      <a href="#"
                        class="btn btn-theme-colored1 btn-sm">
                      View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-departments">
                <div class="tm-departments-item department-items type-department-items">
                  <a href="#">
                  <img src="{{asset('images/depertment/dp1.jpg')}}" class="img-fullwidth" alt=""/></a>
                  <div class="details">
                    <h5 class="title">
                      <a href="#">
                      Orthopaedist</a>
                    </h5>
                    <div class="excerpt">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                    </div>
                    <div class="btn-view-details">
                      <a href="#"
                        class="btn btn-theme-colored1 btn-sm">
                      View Details</a>
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
    <section>
      <div class="container">
        <div class="section-title">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="tm-sc-section-title section-title section-title-style1 text-center">
                <div class="title-wrapper">
                  <h2 class="title">
                    <span class="">Our</span>
                    <span class="text-theme-colored1">Doctors</span>
                  </h2>
                  <div class="title-seperator-line"></div>
                  <div class="paragraph">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry’s standard dummy text ever since the been when an unknown printer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 mb-lg-30">
              <div class="tm-sc-staff tm-sc-staff-grid staff-style1-simple">
                <div class="isotope-item">
                  <div class="tm-staff">
                    <div class="staff-inner">
                      <div class="box-hover-effect">
                        <div class="staff-header effect-wrapper">
                          <div class="thumb">
                            <img src="{{asset('images/team/tm5.jpg')}}" class="img-fullwidth" alt=""/>
                          </div>
                          <div class="overlay-shade shade-white"></div>
                          <div class="icons-holder icons-holder-middle staff-social-links">
                            <div class="icons-holder-inner">
                              <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                <li><a class="styled-icons-item" target="_blank" href="http://a"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://b"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://c"><i class="fab fa-linkedin"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://d"><i class="fab fa-skype"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="staff-content">
                          <h5 class="name"><a href="#">Eliza Thopper</a></h5>
                          <div class="speciality">Dentist</div>
                          <div class="short-bio">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae illo sint debitis...
                          </div>
                          <ul class="contact-info">
                          </ul>
                          <div class="staff-btn">
                            <div class="btn-view-details">
                              <a href="#"
                                class="btn - btn-theme-colored1 - btn-sm - btn-flat">
                              View Details</a>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb-lg-30">
              <div class="tm-sc-staff tm-sc-staff-grid staff-style1-simple">
                <div class="isotope-item">
                  <div class="tm-staff">
                    <div class="staff-inner">
                      <div class="box-hover-effect">
                        <div class="staff-header effect-wrapper">
                          <div class="thumb">
                            <img src="{{asset('images/team/tm6.jpg')}}" class="img-fullwidth" alt=""/>
                          </div>
                          <div class="overlay-shade shade-white"></div>
                          <div class="icons-holder icons-holder-middle staff-social-links">
                            <div class="icons-holder-inner">
                              <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                <li><a class="styled-icons-item" target="_blank" href="http://a"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://b"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://c"><i class="fab fa-linkedin"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://d"><i class="fab fa-skype"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="staff-content">
                          <h5 class="name"><a href="#">Eliza Thopper</a></h5>
                          <div class="speciality">Cardiologist</div>
                          <div class="short-bio">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae illo sint debitis...
                          </div>
                          <ul class="contact-info">
                          </ul>
                          <div class="staff-btn">
                            <div class="btn-view-details">
                              <a href="#"
                                class="btn - btn-theme-colored1 - btn-sm - btn-flat">
                              View Details</a>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="tm-sc-staff tm-sc-staff-grid staff-style1-simple">
                <div class="isotope-item">
                  <div class="tm-staff">
                    <div class="staff-inner">
                      <div class="box-hover-effect">
                        <div class="staff-header effect-wrapper">
                          <div class="thumb">
                            <img src="{{asset('images/team/tm7.jpg')}}" class="img-fullwidth" alt=""/>
                          </div>
                          <div class="overlay-shade shade-white"></div>
                          <div class="icons-holder icons-holder-middle staff-social-links">
                            <div class="icons-holder-inner">
                              <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                <li><a class="styled-icons-item" target="_blank" href="http://a"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://b"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://c"><i class="fab fa-linkedin"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="http://d"><i class="fab fa-skype"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="staff-content">
                          <h5 class="name"><a href="#">Eliza Thopper</a></h5>
                          <div class="speciality">Cardiologist</div>
                          <div class="short-bio">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae illo sint debitis...
                          </div>
                          <ul class="contact-info">
                          </ul>
                          <div class="staff-btn">
                            <div class="btn-view-details">
                              <a href="#"
                                class="btn - btn-theme-colored1 - btn-sm - btn-flat">
                              View Details</a>
                            </div>
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
    </section>
    <!-- End Divider -->

    <!-- Section: Testimonial -->
    <section class="" data-tm-bg-img="images/pattern/p4.png">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12">
              <div class="tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style4-modern owl-dots-light-skin owl-dots-center testimonial-has-quote-icon">
                <!-- Isotope Gallery Grid -->
                <div id="testimonials-holder-117227" class="owl-carousel owl-theme tm-owl-carousel-3col" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                  <!-- the loop -->
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="{{asset('images/testimonials/1.jpg')}}" class="img-thumbnail rounded-circle" alt=""/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Robert Jonson</h5>
                            <span class="job-position">CEO</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="{{asset('images/testimonials/2.jpg')}}" class="img-thumbnail rounded-circle" alt=""/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Jessica Bela</h5>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="{{asset('images/testimonials/3.jpg')}}" class="img-thumbnail rounded-circle" alt=""/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Mark Smith</h5>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="{{asset('images/testimonials/1.jpg')}}" class="img-thumbnail rounded-circle" alt=""/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Rebecca Williams</h5>
                            <span class="job-position">Manager</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of the loop -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->

    <!-- Section: Service -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-7">
              <h3 class="mt-0">Our Services</h3>
              <div class="paragraph">
                <p>Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque possimus optio quo. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore</p>
              </div>
              <div class="row mb-10">
                <div class="col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"
                        >
                      <i class="flaticon-medical-ambulance14"></i></a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">
                          Emergency Care
                        </h5>
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
                      <a class="icon icon-type-font-icon icon-gray mb-20"
                        >
                      <i class="flaticon-medical-illness"></i></a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">
                          Operation Theater
                        </h5>
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
                      <a class="icon icon-type-font-icon icon-gray mb-20"
                        >
                      <i class="flaticon-medical-stethoscope10"></i></a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">
                          Outdoor Checkup
                        </h5>
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
                      <a class="icon icon-type-font-icon icon-gray mb-20"
                        >
                      <i class="flaticon-medical-balls"></i></a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">
                          Cancer Service
                        </h5>
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
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"
                        >
                      <i class="flaticon-medical-drops1"></i></a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">
                          Blood Test
                        </h5>
                        <div class="content">
                          <p>consectetur adipisicing elit.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
                <div class="mb-sm-50 col-sm-6">
                  <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left mb-30">
                    <div class="icon-box-wrapper">
                      <a class="icon icon-type-font-icon icon-gray mb-20"
                        >
                      <i class="flaticon-medical-tablets9"></i></a>
                      <div class="icon-text">
                        <h5 class="icon-box-title">
                          Pharmacy
                        </h5>
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
            <div class="col-md-12 col-lg-5 col-xl-5">
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

    <!-- Section: News & Updates-->
    <section>
      <div class="container">
        <div class="section-title">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="text-center mb-60">
                <div class="tm-sc-section-title section-title section-title-style1 text-center">
                  <div class="title-wrapper">
                    <h2 class="title icon-bottom"> <span class="">Our </span> <span class="text-theme-colored1">Latest</span> News</h2>
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
            <div class="col-md-12">
                <!-- Isotope Gallery Grid -->
                <div id="gallery-holder-618422" class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                  <div class="isotope-layout-inner">
                    <div class="isotope-item isotope-item-sizer"></div>

                    <!-- Isotope Item Start -->
                    <div class="isotope-item">
                      <div class="isotope-item-inner">
                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                          <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                              <div class="post-thumb lightgallery-lightbox">
                                <div class="post-thumb-inner">
                                  <div class="thumb"> <img src="{{asset('images/blog/b1.jpg')}}" alt="Image"/></div>
                                </div>
                              </div>
                              <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                              <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                              <div class="entry-meta mt-0">
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span>
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> 214 Comments</span>
                              </div>

                              <div class="post-excerpt">
                                <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                              </div>
                              <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow"> View Details </a></div>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->

                    <!-- Isotope Item Start -->
                    <div class="isotope-item">
                      <div class="isotope-item-inner">
                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                          <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                              <div class="post-thumb lightgallery-lightbox">
                                <div class="post-thumb-inner">
                                  <div class="thumb"> <img src="{{asset('images/blog/b2.jpg')}}" alt="Image"/></div>
                                </div>
                              </div>
                              <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                              <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                              <div class="entry-meta mt-0">
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span>
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> 214 Comments</span>
                              </div>

                              <div class="post-excerpt">
                                <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobisLorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                              </div>
                              <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow"> View Details </a></div>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->

                    <!-- Isotope Item Start -->
                    <div class="isotope-item">
                      <div class="isotope-item-inner">
                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                          <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                              <div class="post-thumb lightgallery-lightbox">
                                <div class="post-thumb-inner">
                                  <div class="thumb"> <img src="{{asset('images/blog/b3.jpg')}}" alt="Image"/></div>
                                </div>
                              </div>
                              <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                              <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                              <div class="entry-meta mt-0">
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span>
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> 214 Comments</span>
                              </div>

                              <div class="post-excerpt">
                                <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                              </div>
                              <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow"> View Details </a></div>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                    
                    <!-- Isotope Item Start -->
                    <div class="isotope-item">
                      <div class="isotope-item-inner">
                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                          <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                              <div class="post-thumb lightgallery-lightbox">
                                <div class="post-thumb-inner">
                                  <div class="thumb"> <img src="{{asset('images/blog/b1.jpg')}}" alt="Image"/></div>
                                </div>
                              </div>
                              <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                              <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                              <div class="entry-meta mt-0">
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span>
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> 214 Comments</span>
                              </div>

                              <div class="post-excerpt">
                                <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                              </div>
                              <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow"> View Details </a></div>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->

                    <!-- Isotope Item Start -->
                    <div class="isotope-item">
                      <div class="isotope-item-inner">
                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                          <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                              <div class="post-thumb lightgallery-lightbox">
                                <div class="post-thumb-inner">
                                  <div class="thumb"> <img src="{{asset('images/blog/b2.jpg')}}" alt="Image"/></div>
                                </div>
                              </div>
                              <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                              <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                              <div class="entry-meta mt-0">
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span>
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> 214 Comments</span>
                              </div>

                              <div class="post-excerpt">
                                <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                              </div>
                              <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow"> View Details </a></div>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->

                    <!-- Isotope Item Start -->
                    <div class="isotope-item">
                      <div class="isotope-item-inner">
                        <div class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                          <article class="post type-post status-publish format-standard has-post-thumbnail">
                            <div class="entry-header">
                              <div class="post-thumb lightgallery-lightbox">
                                <div class="post-thumb-inner">
                                  <div class="thumb"> <img src="{{asset('images/blog/b3.jpg')}}" alt="Image"/></div>
                                </div>
                              </div>
                              <a class="link" href="#"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="entry-content">
                              <h5 class="entry-title"><a href="#" rel="bookmark">Capitalize on low hanging fruit to identify a ballpark test</a></h5>
                              <div class="entry-meta mt-0">
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored"></i> Jul 20, 2019</span>
                                <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored"></i> 214 Comments</span>
                              </div>

                              <div class="post-excerpt">
                                <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis....</div>
                              </div>
                              <div class="post-btn-readmore"> <a href="#" class="btn btn-plain-text-with-arrow"> View Details </a></div>
                              <div class="clearfix"></div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                  </div>
                </div>
                <!-- End Isotope Gallery Grid -->
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