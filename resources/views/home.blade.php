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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    </head>
    <body>
        <div class="model"></div>

        <section class="hero">
            <h1>Revamp</h1>
                <h2>Transform your brant</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor asperiores beatae assumenda odit! Dolore molestiae velit at inventore officia quos quis assumenda autem nobis optio harum amet, nostrum esse. Temporibus!
                </p>
        </section>

        <div class="overlap-container">
            <section class="service">

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
                    <div class="middle-space"></div>
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
                            <div class="item"><h1>3K</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>suvs</h3></div>
                            <div class="sub-item"><p>detailed</p></div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="left-box">
                            <div class="item"><h1>5K</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>trucks</h3></div>
                            <div class="sub-item"><p>detailed</p></div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="left-box">
                            <div class="item"><h1>8K</h1></div>
                        </div>
                        <div class="right-box">
                            <div class="sub-item"><h3>bikes</h3></div>
                            <div class="sub-item"><p>detailed</p></div>
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
                    <p>Service 1</p>
                    <p>Service 2</p>
                    <p>Service 3</p>
                    <p>Service 4</p>
                    <p>Service 5</p>
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
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <p>"Client 1's testimonial."</p>
                    <h3>- Client 1</h3>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <p>"Client 2's testimonial."</p>
                    <h3>- Client 2</h3>
                </div>
                <!-- Add more slides -->
                <div class="swiper-slide">
                    <p>"Client 3's testimonial."</p>
                    <h3>- Client 3</h3>
                </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="navigation-arrows">
                <div class="swiper-button-prev">❮</div>
                <div class="swiper-button-next">❯</div>
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
