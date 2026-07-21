<x-mylayouts.layout-default :hideBanner="true">


    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid" src="{{ asset('template_default/images/strawberry_cake.jpg') }}"
                            alt="">
                        {{-- <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">

                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">Best Sellers {{ date('Y') }}</h1>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country.</p>

                                    <p><a href="#" class="btn-custom">About Me</a></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid" src="{{ asset('template_default/images/assorted_platter.jpg') }}"
                            alt="">
                        {{-- <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">

                                <div class="horizontal">
                                    <h1 class="mb-4 mt-3">New Collection {{ date('Y') }}</h1>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country.</p>

                                    <p><a href="#" class="btn-custom">About Me</a></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0"></div>
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid" src="{{ asset('template_default/images/home1.jpg') }}"
                            alt="">
        </div>



        </div>

        <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0"></div>
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <img class="one-third order-md-last img-fluid" src="{{ asset('template_default/images/home_cookies.jpg') }}"
                            alt="">



    </section

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-bag"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Affordable Shipping</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                                the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Support Customer</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                                the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-4 py-md-5">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Secure Payments</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                                the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="{{ route('shop.details', $product->id) }}" class="img-prod"><img class="img-fluid"
                                src="{{ $product->getImage() }}" alt="Colorlib Template">
                            <span class="status">New Arrival</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Lifestyle</span>
                                </div>
                                <div class="rating">
                                    <p class="text-right mb-0">
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                                    </p>
                                </div>
                            </div>
                            <h3><a href="{{ route('shop.details', $product->id) }}">{{ $product->title }}</a></h3>
                            <div class="pricing">
                                <p class="price"><span>${{ $product->getPrice() }}</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="{{ route('cart.addfromstorepage', $product->id) }}" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                            class="ion-ios-cart ml-1"></i></span></a>
                                <a href="{{ route('shop.details', $product->id) }}"" class="buy-now text-center py-2">Details<span><i
                                            class="ion-ios-information-circle ml-1 ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url('{{ asset('template_default/images/tarts.jpg') }}');">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="25000">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="50">0</strong>
                                    <span>Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Brands</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="45000">0</strong>
                                    <span>Users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('template_default/images/NatV.jpg') }});">
                    <a href="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1" target="_blank"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate fadeInUp ftco-animated">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Established Since 2020</h2>
                        </div>
                    </div>
                    <div class="pb-md-5 pb-4">
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                            Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where
                            they abused her for their.</p>
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                            Writers ambushed her.</p>
                        <p><a href="#" class="btn btn-primary">About Me</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="services-flow">
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-bag"></span>
                            </div>
                            <div class="text">
                                <h3>Affordable Shipping</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-heart-box"></span>
                            </div>
                            <div class="text">
                                <h3>Valuable Gifts</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-payment-security"></span>
                            </div>
                            <div class="text">
                                <h3>All Day Support</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                        <div class="services-2 p-4 d-flex ftco-animate">
                            <div class="icon">
                                <span class="flaticon-customer-service"></span>
                            </div>
                            <div class="text">
                                <h3>All Day Support</h3>
                                <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="heading-section ftco-animate mb-5">
                        <h2 class="mb-4">Our satisfied customer says</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                            blind texts. Separated they live in</p>
                    </div>
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4"
                                    style="background-image: url({{ asset('template_default/images/person_1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4"
                                    style="background-image: url({{ asset('template_default/images/choose-2.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4"
                                    style="background-image: url({{ asset('template_default/images/person-3.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4"
                                    style="background-image: url({{ asset('template_default/images/person-1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="user-img mb-4"
                                    style="background-image: url({{ asset('template_default/images/person-1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-mylayouts.layout-default>
