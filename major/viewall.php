<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewall</title>
</head>
    <style>
            body{
                background-color: #B2D3C2;
                }
            .categories {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 12px;
            margin: 40px;
            }

            .category {
            width: 200px;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            }

            .category:hover {
            box-shadow: 0 0 10px rgb(106, 203, 91);
            transition: transform 0.3s ease-in-out;
            transform: scale(1.02);
            }

            .category h2 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #198754;
            }

            .category img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 5px;
            }

            .category a {
            display: inline-block;
            padding: 6px 12px;
            background-color: #198754;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            }

            .category a:hover {
            background-color: #0d6efd;
            }

            .product-listing {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin: 40px;
            }

            .product-listing .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            }

            .product-listing .product img {
            width: 100%;
            height: auto;
            max-height: 150px;
            object-fit: cover;
            }

            .product-listing .product h3 {
            margin: 10px 0;
            }

            .product-listing .product p {
            font-size: 14px;
            margin-bottom: 10px;
            }

            .product-listing .product .price {
            font-weight: bold;
            }

            .product-listing .product a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            border-radius: 5px;
            }

            .pay {
            outline: none;
            border: none;
            border-radius: 5px;
            background-color: rgb(51, 165, 51);
            color: white;
            padding: 10px 20px;
            margin: 15px 0 10px 0;
            font-weight: bolder;
            box-shadow: 0 0 10px gray;
            cursor: pointer;
            }

            .pay:hover {
            opacity: 0.8;
            }
            @media screen and (min-width: 320px) {
            .nav-list li {
                display: none;
            }

            .nav-center {
                margin: 0;
            }

            .cart-btn {
                display: flex;
                width: 50%;
                justify-content: flex-end;
            }

            .menu-icon {
                padding-left: 1rem;
            }

            .nav-title {
                font-size: 1.1rem;
                padding-right: 4rem;
            }

            .search-border .search {
                font-size: 0.9rem;
                font-weight: 600;
            }

            .section-title {
                font-size: 1rem;
            }

            .products-center {
                grid-template-columns: repeat(1, 1fr);
                padding: 1rem;
                grid-column-gap: 0;
                grid-row-gap: 3rem;
            }

            .product {
                width: 100%;
                padding-bottom: 0.5rem;
            }

            .product-title {
                font-size: 0.95rem;
                padding-inline: 1rem;
            }

            .product-price {
                margin-right: 1rem;
                font-size: 1.1rem;
            }

            .add-to-cart {
                font-size: 0.7rem;
                padding: 10px 20px;
                margin-top: 20px;
            }

            footer {
                font-size: 0.8rem;
            }

            .cart-items {
                font-size: 0.8rem;
            }

            /* modal */
            .cart {
                width: 90%;
                padding: 0.5rem;
            }

            .cart-item {
                font-size: 0.8rem;
                margin-bottom: 1.5rem;
            }

            .cart-title {
                font-size: 0.8rem;
            }

            .cart-item-desc h4 {
                font-weight: 500;
                font-size: 0.8rem;
                padding: 0 5px 0 3px;
            }

            .cart-item-desc {
                border: none;
            }

            .cart-item-desc h5 {
                font-size: 0.8rem;
            }

            .cart-item-img {
                width: 5rem;
                height: 5rem;
            }

            .cart-item-controller {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .cart-footer .cart-total {
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }

            .cart-footer button {
                flex-direction: column;
                font-size: 0.9rem;
                margin-right: 0.1rem;
            }

            .trash {
                padding-left: 20px;
            }
            }

            @media screen and (min-width: 550px) and (max-width: 768px) {
            .menu-icon span {
                display: none;
            }

            .nav-center {
                margin: 0;
            }

            .cart-btn {
                display: flex;
                width: 10%;
            }

            .nav-title {
                padding: 0;
            }

            .nav-list li {
                display: flex;
                font-size: 0.8rem;
            }

            .nav-icon {
                font-size: 0.9rem;
            }

            .cart-items {
                font-size: 0.8rem;
            }

            .search-border .search {
                font-size: 0.8rem;
            }

            .products-center {
                grid-template-columns: repeat(2, 1fr);
                grid-column-gap: 1rem;
            }

            .cart-item {
                font-size: 0.8rem;
            border-bottom: 1px solid #7a74747c;
            }
            
            .cart {
                width: 80%;
                padding: 2rem 1rem;
            }

            .cart-title {
                font-size: 1rem;
            }

            .cart-item-desc h4 {
                font-size: 1rem; 
            }

            .cart-item-desc h5 {
                font-size: 1rem;
            }

            .cart-item-img {
                width: 8rem;
            }

            .cart-footer .cart-total {
                font-size: 1rem;
            }

            .cart-footer button {
                font-size: 1rem;
            }

            .trash {
                padding-left: 30px;
            }
            }

            @media screen and (min-width: 768px) {
            .menu-icon span {
                display: none;
            }

            .nav-title {
                font-size: 1.3rem;
            }

            .cart-btn {
                display: flex;
                width: 10%;
                margin: 10px 0px 0px 10px;
            }

            .nav-list li {
                display: flex;
                font-size: 0.9rem;
            }

            .nav-icon {
                font-size: 1rem;
            }

            .cart-items {
                font-size: 0.9rem;
            }

            .search-border {
                padding-block: 0.5rem;
            }

            .section-title {
                font-size: 1.2rem;
            }

            .products-center {
                grid-template-columns: repeat(3, 1fr);
                grid-column-gap: 1.2rem;
                grid-row-gap: 3.5rem;
            }

            .product-title {
                font-size: 0.9rem;
            }

            .product-price {
                font-size: 0.9rem;
            }

            .add-to-cart {
                font-size: 0.8rem;
            }

            footer {
                font-size: 0.9rem;
            }

            /* modal */
            .cart-item {
                font-size: 0.9rem;
            }

            .cart-item-desc h4 {
                font-weight: 500;
                font-size: 1rem;
                padding: 10px;
            }

            .cart-item-desc h5 {
                font-size: 1rem;
            }

            .cart-footer .cart-total {
                font-size: 0.9rem;
            }

            .cart-footer button {
                font-size: 0.9rem;
            }

            /*  */
            .cart {
            width: 70%;
            padding: 2rem 1rem;
            }

            .cart-title {
            font-size: 1.2rem;
            }

            .cart-item-img {
            width: 10rem;
            height: 6rem;
            }

            .cart-footer .cart-total {
            font-size: 1rem;
            }

            .cart-footer button {
            font-size: 1rem;
            }

            .trash {
            padding-left: 30px;
            }
            }

            @media screen and (min-width: 1024px) {
            .menu-icon span {
                display: none;
            }

            .nav-list {
                display: flex;
            }

            .nav-title {
                font-size: 1.7rem;
            }

            .nav-list li {
                font-size: 1.1rem;
            }

            .nav-icon {
                font-size: 1.2rem;
            }

            .cart-items {
                font-size: 1.1rem;
            }

            .search-border {
                padding-block: 0.7rem;
            }

            .search-border .search {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .products-center {
                padding: 2rem 1.3rem;
                grid-column-gap: 3rem;
                grid-row-gap: 5rem;
            }

            .product {
                width: 18rem;
            }

            .product-title {
                font-size: 1rem;
            }

            .product-price {
                font-size: 1rem;
            }

            .add-to-cart {
                font-size: 0.9rem;
            }

            footer {
                font-size: 1rem;
            }

            /* modal */
            .cart-item {
                font-size: 1.1rem;
            }

            .cart-title {
                font-size: 1.5rem;
            }

            .cart-item-desc h4 {
                font-weight: 700;
                font-size: 1rem;
                padding: 10px;
            }

            .cart-item-desc h5 {
                font-size: 1rem;
            }

            .cart-footer .cart-total {
                font-size: 1.2rem;
            }

            .cart-footer button {
                font-size: 1.2rem;
            }

            .cart-item-img {
                width: 14rem;
                height: 8rem;
            }
            }


    </style>
<body>
    
<section class="categories">
    <h2>Shop by Category</h2>
    <article class="category">
      <h2>Fresh Produce</h2>
      <img src="fresh coll.JPG" alt="Fresh Produce">
      <a href="#produce">Shop Produce</a>
    </article>
    <article class="category">
      <h2>Seeds & Bulbs</h2>
      <img src="BeFunky-collage.jpg" alt="Seeds & Bulbs">
      <a href="#seeds">Shop Seeds</a>
    </article>
    <article class="category">
      <h2>Farm Tools</h2>
      <img src="BeFunky-collage1.jpg" alt="Farm Tools">
      <a href="#tools">Shop Tools</a>
    </article>
  </section>

  <section id="produce" class="product-listing">
    <h2>Fresh Produce</h2>
    <div class="product-list">
      <article class="product">
        <img src="RICEE.jpg" alt="rice">
        <h3>Basmati Rice</h3>
        <p>a staple grain, versatile in cooking, and gluten-free of West Bengal.</p>
        <span class="price">₹50 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="product1.jpg" alt="wheat">
        <h3>Wheat</h3>
        <p>a versatile grain of West Bengal used to make flour for bread.</p>
        <span class="price">₹10 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="Mango-Himsager-600x749.jpg" alt="mango">
        <h3>Mangoes</h3>
        <p>Mangoes are tropical fruits with sweet, juicy flesh and a large seed.</p>
        <span class="price">70 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a>
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="jute.jpeg" alt="jute">
        <h3>Jute</h3>
        <p>Jute is a fiber plant used to make burlap and textiles.</p>
        <span class="price">₹52 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
    <div class="product-list">
      <article class="product">
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="ganna.JPG" alt="ganna">
        <h3>Sugarcane</h3>
        <p>Sugarcane is a tall grass cultivated for sugar production.</p>
        <span class="price">₹8.77 per pc</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="potato.jpeg" alt="potato">
        <h3>Potatoes</h3>
        <p>Potatoes are starchy tubers with versatile culinary uses worldwide.</p>
        <span class="price">₹22 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="product2.jpeg" alt="corn">
        <h3>Maize</h3>
        <p>Maize, or corn, is a cereal grain used for food, feed, and industrial purposes.</p>
        <span class="price">21.72 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
    <div class="product-list">
      <article class="product">
        <img src="brinjal.JPG" alt="Apple">
        <h3>Eggplant</h3>
        <p>Eggplants are purple, spongy vegetables used in various cuisines worldwide.</p>
        <span class="price">₹40 per kg</span>
        <a href= "payment.php" class="pay">Buy Now</a></article>
    </div>
  </section>

  <section id="seeds" class="product-listing">
    <h2>Seeds & Bulbs</h2>
    <div class="product-list">
      <article class="product">
        <h3>Tomato Seeds (Roma)</h3>
        <p>High-yielding Roma tomato seeds, perfect for salads and sauces.</p>
        <img src="tomato-seeds.jpg" alt="Tomato Seeds">
        <span class="price">₹750/kg</span>
        <a href= "payment.php" class="pay">Buy Now</a>
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Onion Seeds (Red Globe)</h3>
        <p>Sweet and flavorful Red Globe onion seeds, ideal for slicing and storage.</p>
        <img src="onion.jpg" alt="Onion Seeds">
        <span class="price">₹800/kg</span>
        <a href= "payment.php" class="pay">Buy Now</a>
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Mustard Seeds</h3>
        <p>Mustard seeds are small, round seeds with a pungent flavor.</p>
        <img src="brown-mustard-seeds-500x500.jpg" alt="Mustard Seeds">
        <span class="price">₹80/kg</span>
        <a href= "payment.php" class="pay">Buy Now</a>
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Sunflower Seeds</h3>
        <p>Sunflower seeds are edible kernels with a mild, nutty flavor.</p>
        <img src="sunflower-seeds.jpg" alt="Sunflower Seeds">
        <span class="price">₹250/kg</span>
        <a href= "payment.php" class="pay">Buy Now</a>
      </article>
    </div>
    <div class="product-list">
      <article class="product">
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Soybean Seeds</h3>
        <p>Soybean seeds are small, nutritious legumes used for oil and food.</p>
        <img src="soyabean_seed.jpg" alt="soybean Seeds">
        <span class="price">₹110/kg</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
  </section>

  <section id="tools" class="product-listing">
    <h2>Farm Tools</h2>
    <div class="product-list">
      <article class="product">
        <h3>Hand Trowel</h3>
        <p>A versatile stainless steel hand trowel for digging, planting, and weeding.</p>
        <img src="710116-1.jpg" alt="Hand Trowel">
        <span class="price">₹2,471</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Pruning Shears</h3>
        <p>Sharp and durable pruning shears for trimming plants and branches.</p>
        <img src="BAP108-20-F_02_bahco.jpeg" alt="Pruning Shears">
        <span class="price">₹19,463</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Automatic Weather Station</h3>
        <p>A weather station that records temperature, humidity, wind speed, and UV index.</p>
        <img src="automatic weather station.JPG" alt="weather">
        <span class="price">₹23,851.50</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Agricultural Drone</h3>
        <p>
          A high-resolution drone equipped with a camera capable of capturing images in 4K resolution.
        </p>
        <img src="equipment2.jpg" alt="drone">
        <span class="price">₹2,499</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
    <div class="product-list">
      <article class="product">
      </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Irrigation Controller</h3>
        <p>
          Control the flow of water in your garden using this smart irrigation controller.
        </p>
        <img src="irrigation controller.JPG" alt="irrigation">
        <span class="price">₹11,696</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
    <div class="product-list">
      <article class="product">
        <h3>Wireless Smart Agriculture Robot using Arduino ( Agribot )</h3>
        <p>
          This robot is equipped with a cutting blade and can harvest crops automatically.
        </p>
        <img src="harvestrobot.jpg" alt="harvestrobot">
        <span class="price">₹12,000</span>
        <a href= "payment.php" class="pay">Buy Now</a>
       </article>
    </div>
  </section>
</body>
</html>