<x-mylayouts.layout-default title="" hideBanner="true">

    <!-- Hero -->
    <section class="about-hero">
        <div class="container text-center">
            <h1>About Chef NV</h1>
            <p>Crafting unforgettable culinary experiences with passion, creativity and quality.</p>
        </div>
    </section>

    <!-- About -->
    <section class="about-section py-5">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('template_default/images/NatV.jpg') }}" class="img-fluid rounded shadow" alt="Chef NV">
                </div>

                <div class="col-lg-6">

                    <span class="section-subtitle">Meet the Chef</span>

                    <h2>Creating Desserts That Bring People Together</h2>

                    <p>
                        Welcome to Chef NV! My name is Nathalie Vasquez and my passion is creating handcrafted meals,
                        pastries and desserts that turn everyday moments into lasting
                        memories.
                    </p>

                    <p>
                        With professional culinary and pastry training, every menu is
                        carefully designed using quality ingredients, elegant presentation
                        and attention to every detail.
                    </p>

                    <div class="row mt-4">

                        <div class="col-6">
                            <div class="stat-box">
                                <h3>4+</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="stat-box">
                                <h3>500+</h3>
                                <p>Happy Customers</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Services -->

    <section class="services py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="section-subtitle">What We Offer</span>

                <h2>Our Specialties</h2>

            </div>

            <div class="row">

                <div class="col-lg-4 mb-4">

                    <div class="service-card">

                        <i class="fa-solid fa-cake-candles"></i>

                        <h4>Custom Cakes</h4>

                        <p>
                            Beautiful cakes designed for birthdays,
                            weddings and every celebration.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 mb-4">

                    <div class="service-card">

                        <i class="fa-solid fa-cookie"></i>

                        <h4>Pastries</h4>

                        <p>
                            Fresh pastries, desserts and handcrafted
                            sweet treats made daily.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4 mb-4">

                    <div class="service-card">

                        <i class="fa-solid fa-utensils"></i>

                        <h4>Catering</h4>

                        <p>
                            Corporate lunches, private events and
                            special occasions.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Why Choose Us -->

    <section class="why-us py-5">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h2>Why Choose Chef NV?</h2>

                    <ul class="feature-list">

                        <li>✔ Fresh Quality Ingredients</li>

                        <li>✔ Handcrafted Daily</li>

                        <li>✔ Elegant Presentation</li>

                        <li>✔ Professional Service</li>

                        <li>✔ Reliable Delivery</li>

                    </ul>

                </div>

                <div class="col-lg-6">

                    <img src="{{ asset('template_default/images/about-food.jpg') }}" class="img-fluid rounded shadow">

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->

    <section class="cta-section">

        <div class="container text-center">

            <h2>Let's Make Your Next Event Unforgettable</h2>

            <p>
                From intimate celebrations to small scale catering,
                Chef NV is here to serve you.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                Contact Us
            </a>

        </div>



    </section>




</x-mylayouts.layout-default>
