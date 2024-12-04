<x-home-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <div class="model"></div>

        <section class="hero">
            <h1>Revamp</h1>
                <h2>Transform your brant</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor asperiores beatae assumenda odit! Dolore molestiae velit at inventore officia quos quis assumenda autem nobis optio harum amet, nostrum esse. Temporibus!
                </p>
        </section>

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

        <section>
            <div class="vid">
                <video src="{{ asset('videos/car_vid.mp4') }}" autoplay muted loop></video>
            </div>
        </section>

        <section class="overall">
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

        <section class="vid-cont">
            <div class="video-background">
                <video autoplay muted loop>
                    <source src="{{ asset('videos/car_vid.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-container">
                <div class="card">
                    <!-- Card 1 content -->
                    <h2>Card 1 Title</h2>
                    <p>This is the content of card 1.</p>
                </div>
                <div class="card">
                    <!-- Card 2 content -->
                    <h2>Card 2 Title</h2>
                    <p>This is the content of card 2.</p>
                </div>
                </div>
            </div>
        </section>


        <section class="outro">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque quos facere sint facilis repellendus molestias accusantium saepe iure, sequi omnis cum voluptatum explicabo perspiciatis iste et nisi atque nobis.
            </h2>
        </section>
        <script src="https://unpkg.com/lenis@1.1.17/dist/lenis.min.js"></script>
        <script src="https://unpkg.com/three@0.134.0/build/three.min.js"></script>
        <script src="https://unpkg.com/three@0.134.0/examples/js/loaders/GLTFLoader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
        <script type="module" src="{{ asset('js/3dmodel_script.js') }}"></script>
    </body>
    </html>

    <x-whatsapp-widget />
</x-home-layout>
