<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <style>
        .home{
            padding: 0;
            margin-bottom: 3rem;
        }
        .home .slide{
            min-height: 100vh;
            background-size: cover !important;
            background-position: center !important;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: -1;
            width:100%;
        }
        .home .slide .content{
            width:80rem;
            text-align: center;
        }
        .home .content{
            text-align: center;
        }
        .home .content h1{
            font-size: 2rem;
            color:  black;
            text-transform: uppercase;
            text-shadow: 0 .3rem .5rem rgba(0,0,0,.1);
        }
        .home .content h2{
            font-size: 1.5rem;
            color: black;
            padding:.5rem 0;
        }
        .home .content .btn{
            padding: 7px 9px;
            margin-left: 10px;
            background-color: transparent;
            color: white;
            border: 1px solid white;
            cursor: pointer;
            margin: 0 .5rem;
        }
        .home .content .btn:hover {
        background-color: white;
        color: #4CAF50;
        }
        
    </style>
    
</head>
<body>
    <section class="home" id="home">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(rice1.jpg) no-repeat;">
                    <div class="content">
                    <h1>Cultivating Innovation</h1>
                    <h2>Insights & Innovations in Smart Farming</h2>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(farming2.jpg) no-repeat;">
                    <div class="content">
                    <h1>Cultivating Innovation</h1>
                    <h2>Insights & Innovations in Smart Farming</h2>
                        
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(farming3.jpg) no-repeat;">
                    <div class="content">
                    <h1>Cultivating Innovation</h1>
                    <h2>Insights & Innovations in Smart Farming</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction :false,
        }
        });
    </script>
</body>
</html>