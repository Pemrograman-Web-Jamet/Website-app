<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <html>
        <head>
            <style>
            * {
                box-sizing: border-box
            }
            body {
                font-family: Verdana, sans-serif;
                margin: 0
            }
            .mySlides {
                display: none
            }
            img {
                vertical-align: middle;
            }
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }
            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }
            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }
            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }
            /* Caption text */
            .text {
                color: #ffffff;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }
            /* Number text (1/3 etc) */
            .numbertext {
                color: #ffffff;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }
            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #999999;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }
            .active,
            .dot:hover {
                background-color: #111111;
            }
            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }
            @-webkit-keyframes fade {
                from {
                opacity: .4
                }
                to {
                opacity: 1
                }
            }
            @keyframes fade {
                from {
                opacity: .4
                }
                to {
                opacity: 1
                }
            }
            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .prev,
                .next,
                .text {
                font-size: 11px
                }
            }
            </style>
        </head>

        <body>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                        <img src="https://github.com/adecahyaaa/Pemrograman-Web-V/blob/main/logo.png?raw=true"  style="width:100%">
                    <div class="text">London, Ebgland</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                        <img src="https://parade.com/.image/t_share/MTkwNTc1OTc4MjgyMDk5ODM3/animal-jokes-kids.jpg" style="width:100%">
                    <div class="text">Sunset in Romania</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                        <img src="https://marynashkvorets.com/wp-content/uploads/2020/06/inspirational-quotes-public-speaking-confidence-1-sally-hogshead.png" style="width:100%">
                    <div class="text">New York, USA</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
        </body>
    </html>

        <script src="home.js"></script>

        <?= $this->endSection(); ?>