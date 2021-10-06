@extends('layouts.landing')

@section('content')
    <section id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-banner">
                        <div class="d-sm-flex justify-content-between">
                            <div data-aos="zoom-in-up">
                                <div class="banner-title">
                                    <h3 class="font-weight-medium">
                                        Water Treatment & Water Filter
                                    </h3>
                                </div>
                                <p class="mt-2">
                                    Tag: Agen Mesin depot air minum, Filter Air Rumah Tangga, Filter Kolam Renang, Sparepart, <br>Mesin RO Hexagonal, Tirta Mediatama, Water Filter, Water Treatmen
                                </p>
                                <a class="btn btn-secondary mt-3">Lihat Katalog</a>
                            </div>
                            <div class="mt-5 mt-lg-0">
                                <img src="{{ asset('images/group.png') }}" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="text-dark">We’re offering</h5>
                    <h3 class="font-weight-medium text-dark mb-5">Creative Digital Agency</h3>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img src="{{ asset('images/integrated-marketing.svg') }}" alt="integrated-marketing" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">Integrated
                            Marketing
                        </h6>
                        <p>Lorem ipsum dolor sit amet,
                            pretium pretium tempor.Lorem ipsum
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img src="{{ asset('images/design-development.svg') }}" alt="design-development" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">Design &
                            Development
                        </h6>
                        <p>Lorem ipsum dolor sit amet,
                            pretium pretium tempor.Lorem ipsum
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img src="{{ asset('images/digital-strategy.svg') }}" alt="digital-strategy" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital
                            Strategy
                        </h6>
                        <p>Lorem ipsum dolor sit amet,
                            pretium pretium tempor.Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img src="{{ asset('images/digital-marketing.svg') }}" alt="digital-marketing" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital
                            Marketing
                        </h6>
                        <p>Lorem ipsum dolor sit amet,
                            pretium pretium tempor.Lorem ipsum
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img src="{{ asset('images/growth-strategy.svg') }}" alt="growth-strategy" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">Growth
                            Strategy
                        </h6>
                        <p>Lorem ipsum dolor sit amet,
                            pretium pretium tempor.Lorem ipsum
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <img src="{{ asset('images/saving-strategy.svg') }}" alt="saving-strategy" data-aos="zoom-in">
                        <h6 class="text-dark mb-3 mt-4 font-weight-medium">Saving
                            Strategy
                        </h6>
                        <p>Lorem ipsum dolor sit amet,
                            pretium pretium tempor.Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-process" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up">
                    <h5 class="text-dark">Bingung??</h5>
                    <h3 class="font-weight-medium text-dark">Apa yang anda butuhkan sekarang ada disini!</h3>
                    <h5 class="text-dark mb-3">Kami adalah agen yang melayani pemasangan :</h5>
                    {{-- <p class="font-weight-medium mb-4">Lorem ipsum dolor sit amet, <br>
                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur
                    </p> --}}
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ asset('images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Mesin Depot Air Minum</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ asset('images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Mesin RO Hexagonal</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ asset('images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Filter Air Rumah Tangga</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ asset('images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Filter Kolam Renang</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <img src="{{ asset('images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Dan Sparepart-nya.</p>
                    </div>
                </div>
                <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="{{ asset('images/idea.png') }}" alt="idea" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="our-projects" id="projects">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center mb-2">
                        <h3 class="font-weight-medium text-dark ">Let's See Our Latest Project</h3>
                        <div><a href="#" class="btn btn-outline-primary">View more</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5" data-aos="fade-up">
            <div class="owl-carousel-projects owl-carousel owl-theme">
                <div class="item">
                    <img src="{{ asset('images/carousel/slider1.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider2.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider3.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider4.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider5.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider1.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider2.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider3.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider4.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider5.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider1.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider2.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider3.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider4.jpg') }}" alt="slider">
                </div>
                <div class="item">
                    <img src="{{ asset('images/carousel/slider5.jpg') }}" alt="slider">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5 mt-5 pb-5 mb-5">
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
                        <img src="{{ asset('images/satisfied-client.svg') }}" alt="satisfied-client" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
                            <h5 class="text-dark mb-0">Satisfied clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
                        <img src="{{ asset('images/finished-project.svg') }}" alt="satisfied-client" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span></h4>
                            <h5 class="text-dark mb-0">Finished Project</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
                        <img src="{{ asset('images/team-members.svg') }}" alt="Team Members" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
                            <h5 class="text-dark mb-0">Team Members</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
                        <img src="{{ asset('images/our-blog-posts.svg') }}" alt="Our Blog Posts" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span></h4>
                            <h5 class="text-dark mb-0">Our Blog Posts</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row  mt-md-0 mt-lg-4">
                <div class="col-sm-6 text-white" data-aos="fade-up">
                    <p class="font-weight-bold mb-3">Testimoni</p>
                    <h3 class="font-weight-medium">Pelayanan yang baik adalah<br>bisnis yang baik</h3>
                    <ul class="flipster-custom-nav">
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
                        </li>
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link"  title="1"></a>
                        </li>
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
                        </li>
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link"  title="3"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6" data-aos="fade-up">
                    <div id="testimonial-flipster">
                        <ul>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ asset('images/testimonial/testimonial1.jpg') }}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Mark Spenser</h6>
                                    <p class="testimonial-destination">Accounts</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ asset('images/testimonial/testimonial2.jpg') }}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Tua Manuera</h6>
                                    <p class="testimonial-destination">Director,Dj market</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ asset('images/testimonial/testimonial3.jpg') }}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Sarah Philip</h6>
                                    <p class="testimonial-destination">Chief Accountant</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ asset('images/testimonial/testimonial4.jpg') }}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Mark Spenser</h6>
                                    <p class="testimonial-destination">Director,Dj market</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients pt-5 mt-5"  data-aos="fade-up" data-aos-offset="-400">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <img src="{{ asset('images/deloit.svg') }}" alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                        <img src="{{ asset('images/erricson.svg') }}" alt="erricson" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
                        <img src="{{ asset('images/netflix.svg') }}" alt="netflix" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                        <img src="{{ asset('images/instagram.svg') }}" alt="instagram" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
                        <img src="{{ asset('images/coinbase.svg') }}" alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-list" id="plans">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-offset="-500">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h3 class="font-weight-medium text-dark ">Produk Terbaik Kami</h3>
                            <h5 class="text-dark ">Pilih paket produk terbaik dari kami untuk usaha anda dengan penawaran yang lebih terjamin. </h5>
                        </div>
                        {{-- <div class="mb-5 mb-lg-0 mt-3 mt-lg-0">
                            <div class="d-flex align-items-center">
                                <p class="mr-2 font-weight-medium monthly text-active check-box-label">Monthly</p>
                                <label class="toggle-switch toggle-switch">
                                <input type="checkbox" checked  id="toggle-switch">
                                <span class="toggle-slider round"></span>
                                </label>
                                <p class="ml-2 font-weight-medium yearly check-box-label">Yearly</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row"  data-aos="fade-up" data-aos-offset="-300">
                <div class="col-sm-4">
                    <div class="pricing-box">
                        <img src="{{ asset('images/starter.svg') }}" alt="starter">
                        <h6 class="font-weight-medium title-text">Starter Business</h6>
                        <h1 class="text-amount mb-4 mt-2">$23</h1>
                        <ul class="pricing-list">
                            <li>Create a free website</li>
                            <li>Connect Domain</li>
                            <li>Business and ecommerce</li>
                            <li>Idea for smaller professional websites</li>
                            <li>Web space</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Puchase Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pricing-box selected">
                        <img src="{{ asset('images/proffessional.svg') }}" alt="starter">
                        <h6 class="font-weight-medium title-text">Professional</h6>
                        <h1 class="text-amount mb-4 mt-2">$45</h1>
                        <ul class="pricing-list">
                            <li>Create a free website</li>
                            <li>Connect Domain</li>
                            <li>Business and ecommerce</li>
                            <li>Idea for smaller professional websites</li>
                            <li>Web space</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Puchase Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pricing-box">
                        <img src="{{ asset('images/premium.svg') }}" alt="starter">
                        <h6 class="font-weight-medium title-text">Premium</h6>
                        <h1 class="text-amount mb-4 mt-2">$87</h1>
                        <ul class="pricing-list">
                            <li>Create a free website</li>
                            <li>Connect Domain</li>
                            <li>Business and ecommerce</li>
                            <li>Idea for smaller professional websites</li>
                            <li>Web space</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Puchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactus" id="contact">
        <div class="container">
            <div class="row mb-5 pb-5">
                <div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
                    <img src="{{ asset('images/contact.jpg') }}" alt="contact" class="img-fluid">
                </div>
                <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
                    <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Kritik dan Saran</h3>
                    <h5 class="text-dark mb-5">Kami siap melayani anda dengan profesional dan sepenuh hati.</h5>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap*">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="mail" placeholder="Email*">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Pesan*" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <a href="#" class="btn btn-secondary">KIRIM</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
