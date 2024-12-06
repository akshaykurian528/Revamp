<x-home-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pricing_section.css') }}">
        <link rel="stylesheet" href="{{ asset('css/process_section.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    </head>
    <body>
        <div class="model"></div>

        <section class="hero">
            <p>Timings: Mon - Fri 10a.m - 5p.m</p>
            <h1>Revamp</h1>
                <h2>PPF COATING | WRAPPING | GRAPHENE COATING | CERAMIC COATING | POLISHING</h2>
        </section>

        <div class="overlap-container">
            <section class="service">
                <h3>Best In Class Services In Kerala</h3>
                <h2 class="service-heading">Our Car Services</h2>

                <div class="features-container">
                    <!-- Top Left Feature -->
                    <div class="feature feature-top-left">
                        <div class="feature-icon">
                            <img src="{{ asset('images/Frame 1.png') }}" alt="Feature 1 Icon">
                        </div>
                        <h3>Coating</h3>
                        <p>Professional car coating services, providing unmatched protection and a stunning, long-lasting shine.</p>
                    </div>
                    
                    <!-- Top Right Feature -->
                    <div class="feature feature-top-right">
                        <div class="feature-icon">
                            <img src="{{ asset('images/Frame 2.png') }}" alt="Feature 2 Icon">
                        </div>
                        <h3>Polishing</h3>
                        <p>Restore your car’s showroom shine with our professional car polishing services.</p>
                    </div>

                    <!-- Bottom Left Feature -->
                    <div class="feature feature-bottom-left">
                        <div class="feature-icon">
                            <img src="{{ asset('images/Frame 3.png') }}" alt="Feature 3 Icon">
                        </div>
                        <h3>Washing</h3>
                        <p>Revitalize your ride with our professional car washing services, leaving your vehicle spotless.</p>
                    </div>

                    <!-- Bottom Right Feature -->
                    <div class="feature feature-bottom-right">
                        <div class="feature-icon">
                            <img src="{{ asset('images/Frame 4.png') }}" alt="Feature 4 Icon">
                        </div>
                        <h3>Cleaning</h3>
                        <p>Professional car cleaning services that restore your vehicle’s shine and make it look brand new.</p>
                    </div>

                    <!-- Empty Space in the Middle -->
                    <div class="middle-space"><img src="{{ asset('images/revamp-logo-mark.png') }}" alt=""></div>
                </div>
            </section>

            <section class="overall">
                <div class="video-wrapper">
                    <video src="{{ asset('videos/car_vid.mp4') }}" autoplay muted loop></video>
                </div>
                <div class="flex-container">
                    <div class="section">
                        <div class="left-box">
                            <div class="item"><h1>7K</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>cars</h3></div>
                            <div class="sub-item"><p>detailed</p></div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="left-box">
                            <div class="item"><h1>5K</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>Happy</h3></div>
                            <div class="sub-item"><p>customers</p></div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="left-box">
                            <div class="item"><h1>10+</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>years</h3></div>
                            <div class="sub-item"><p>experience</p></div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="left-box">
                            <div class="item"><h1>100%</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>customer</h3></div>
                            <div class="sub-item"><p>satisfaction</p></div>
                        </div>
                    </div>
                </div>  
            </section>
        </div>

        <section class="slider">
            <div class="slider"></div>
            <div class="slider-images"> 
                <div class="img"><img src="{{ asset('images/img1.jpg') }}" alt=""></div>
            </div>
            
            <div class="slider-title">
                <div class="slider-title-wrapper">
                    <p>Polishing</p>
                    <p>Detailed Car Wash</p>
                    <p>Ceramic Coating</p>
                    <p>Wrapping</p>
                    <p>Paint Protection</p>
                </div>
            </div>

            <div class="slider-counter">
                <div class="counter">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                </div>
                <div><p>&mdash;</p></div>
                <div><p>5</p></div>
            </div>

            <div class="slider-preview">
                <div class="preview active"><img src="{{ asset('images/img1.jpg') }}" alt=""></div>
                <div class="preview"><img src="{{ asset('images/img2.jpg') }}" alt=""></div>
                <div class="preview"><img src="{{ asset('images/img3.jpg') }}" alt=""></div>
                <div class="preview"><img src="{{ asset('images/img4.jpg') }}" alt=""></div>
                <div class="preview"><img src="{{ asset('images/img5.jpg') }}" alt=""></div>
            </div>

            <div class="slider-indicators">
                <p>+</p>
                <p>+</p>
            </div>
        </section>

        <div class="t-sec">
            <div class="t-sec-head">
                <h3>What Our Clients Think About Us</h3>
                <h2>Client's Review</h2>
            </div>
            <div class="testimonials-section">
                <!-- Images Slider -->
                <div class="swiper images-slider">
                    <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                    <img src="/images/client1.jpg" alt="Client 1">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                    <img src="/images/client2.jpg" alt="Client 1">
                    </div>
                    <!-- Add more slides -->
                    <div class="swiper-slide">
                    <img src="/images/client3.jpg" alt="Client 1">
                    </div>
                    </div>
                </div>

                <!-- Reviews Slider -->
                <div class="swiper reviews-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="name">
                                <h3>Mohan</h3>
                            </div>
                            <div class="review">
                                <p>"I got my TATA Harrier vehicle graphene coated by Revamp and it looks excellent.
                                    Revamp team has done an excellent job. I got the best deal from them. I appreciate the effort from the team and customer care executive Mrs.Divya regarding the customer interaction, detailed explanation of the process and steps, updating the work progress during each step and delivery with great quality and perfection.
                                    Thanks Revamp and team!!!"
                                </p>  
                            </div>
                            <div class="other-details">
                                <p class="star">⭐⭐⭐⭐⭐</p>
                                <p>TATA Harrier / Graphine Coating</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="name">
                                <h3>Arpana</h3>
                            </div>
                            <div class="review">
                                <p>"Revamp By Pothens Is Undoubtedly The Best Car Detailing Centre In Thiruvananthapuram. I Strongly Recommend Revamp By Pothens To Everyone (From My Own Experience). I had done Graphene Coating For My Tata Nexon From Here. Sidharth And His Team Done Their Job Perfectly.
                                    I Am 110% Satisfied With Their Work.They Are Also Offering 5 Years Warranty For Graphene Coating."
                                </p>  
                            </div>
                            <div class="other-details">
                                <p class="star">⭐⭐⭐⭐⭐</p>
                                <p>Tata Nexon / Graphene Coating</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="name">
                                <h3>Abey</h3>
                            </div>
                            <div class="review">
                                <p>"I recently had the pleasure of visiting Revamp for a complete 
                                    detailing service for my car, and I must say that the experience exceeded my 
                                    expectations in every way possible. From the moment I entered the shop to the moment 
                                    I picked up my vehicle, I was thoroughly impressed by the level of professionalism, 
                                    attention to detail, and overall quality of service provided."
                                </p>  
                            </div>
                            <div class="other-details">
                                <p class="star">⭐⭐⭐⭐⭐</p>
                                <p>Honda Civic / Detailing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="vid-cont">
            <div class="video-background">
                <video autoplay muted loop>
                    <source src="{{ asset('videos/car_slwmo.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-container">
                    <div class="card-1">
                        <h3>We Have<br>Mastered The<br>Art Of Detailing</h3>
                        <p>CarWash offers a range of customizable<br>services to cater to your specific needs.</p>
                    </div>
                    <div class="card-2">
                        <div class="experience">
                            <h3>12+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="service-1">
                            <h3>Professional Services</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minus pariatur nihil quibusdam eligendi ipsum cupiditate enim quia dicta quaerat! Quam itaque, architecto incidunt velit temporibus nulla fuga voluptas? Tenetur!</p>
                        </div>
                        <div class="service-2">
                            <h3>High-End Equipment</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minus pariatur nihil quibusdam eligendi ipsum cupiditate enim quia dicta quaerat! Quam itaque, architecto incidunt velit temporibus nulla fuga voluptas? Tenetur!</p>
                        </div>
                        <div class="button-container">
                            <button class="button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="process-section">
            <h2>How Our Process Works</h2>
            <div class="steps-container">

                <!-- Step 1 -->
                <div class="step">
                    <div class="icon-container">
                        <img class="fas fa-water" src="{{ asset('images/Frame 1.png') }}" alt="Feature 1 Icon">
                    </div>
                    <h3>Easy Booking</h3>
                    <p>We’ve simplified the booking process to save you time. Fill out our quick online form with details about your car and the services you need. Once submitted, we’ll confirm your appointment and guide you through the next steps.</p>
                </div>

                <!-- Step 2 -->
                <div class="step">
                    <div class="icon-container">
                        <img class="fas fa-car-side" src="{{ asset('images/Frame 2.png') }}" alt="Feature 2 Icon">
                    </div>
                    <h3>Professional Assessment</h3>
                    <p>On the day of your appointment, our experts will thoroughly inspect your vehicle. We’ll discuss your specific requirements and provide a detailed plan of action tailored to your car’s needs, ensuring complete transparency.</p>
                </div>

                <!-- Step 3 -->
                <div class="step">
                    <div class="icon-container">
                        <img class="fas fa-shield-alt" src="{{ asset('images/Frame 3.png') }}" alt="Feature 3 Icon">
                    </div>
                    <h3>Premium Detailing</h3>
                    <p>Sit back as our skilled team rejuvenates your car using cutting-edge tools and top-quality products. From interior deep cleaning to exterior polishing, we ensure every inch of your vehicle receives the care it deserves.</p>
                </div>

                <!-- Step 4 -->
                <div class="step">
                    <div class="icon-container">
                        <img class="fas fa-brush" src="{{ asset('images/Frame 4.png') }}" alt="Feature 4 Icon">
                    </div>
                    <h3>Hassle-Free Delivery</h3>
                    <p>Once your car looks pristine, we’ll deliver it back to you at your preferred location or have it ready for pickup. We ensure the process is smooth, leaving you with a car that feels brand new.</p>
                </div>
            </div>
        </section>

        <section class="pricing-section">
            <h2 class="pricing-heading">The Perfect Plan for Your Needs</h2>
            <p class="pricing-subheading">Our transparent pricing makes it easy to find a plan that works within your financial constraints.</p>
            
            <div class="pricing-table">
                <div class="pricing-card">
                    <h3 class="plan-title">Budget</h3>
                    <p class="plan-price">Rs.15000<span>/Starting</span></p>
                    <p class="plan-limit">Ceramic Coating</p>
                    <ul class="plan-features">
                    <li>Hatchback: 15000</li>
                    <li>Sedan: 17000</li>
                    <li>Large SUV: 19000</li>
                    </ul>
                    <p class="plan-limit">Graphene Coating</p>
                    <ul class="plan-features">
                        <li>Hatchback: 16000</li>
                        <li>Sedan: 18000</li>
                        <li>Large SUV: 20000</li>
                    </ul>
                    <a href="#" class="plan-cta">Get Started</a>
                </div>
                <div class="pricing-card">
                    <h3 class="plan-title">Intermediate</h3>
                    <p class="plan-price">Rs. 25000<span>/Starting</span></p>
                    <p class="plan-limit">Ceramic Coating</p>
                    <ul class="plan-features">
                        <li>Hatchback: 25000</li>
                        <li>Sedan: 27500</li>
                        <li>Large SUV: 30000</li>
                    </ul>
                    <p class="plan-limit">Graphene Coating</p>
                    <ul class="plan-features">
                        <li>Hatchback: 27500</li>
                        <li>Sedan: 37500</li>
                        <li>Large SUV: 45000</li>
                    </ul>
                    <a href="#" class="plan-cta">Get Started</a>
                </div>
                <div class="pricing-card recommended">
                    <h3 class="plan-title">Professional</h3>
                    <p class="plan-price">Rs. 45000<span>/Starting</span></p>
                    <p class="plan-limit">Nano Diamond Coating</p>
                    <ul class="plan-features">
                        <li>Hatchback: 45000</li>
                        <li>Sedan: 55000</li>
                        <li>Large SUV: 65000</li>
                    </ul>
                    <p class="plan-limit">Included With The Plan</p>
                    <ul class="plan-features">
                        <li>Detailed Wash</li>
                        <li>Paint Correction</li>
                        <li>Body Paint & More</li>
                    </ul>
                    <a href="#" class="plan-cta">Get Started</a>
                </div>
            </div>
        </section>

        
        <script src="https://unpkg.com/lenis@1.1.17/dist/lenis.min.js"></script>
        <script src="https://unpkg.com/three@0.134.0/build/three.min.js"></script>
        <script src="https://unpkg.com/three@0.134.0/examples/js/loaders/GLTFLoader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CustomEase.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script type="module" src="{{ asset('js/3dmodel_script.js') }}"></script>
        <script type="module" src="{{ asset('js/slider.js') }}"></script>
        <script>const imageBasePath = "{{ asset('images') }}";</script>
        <script type="module" src="{{ asset('js/testimonials.js') }}"></script>
    </body>
    </html>

    <x-whatsapp-widget />
</x-home-layout>
