  <?php
    include('layout/header.php');

  ?>

    <!-- Here Is the home section-->

    <section id="home">
      <div class="container">
        <h5 style="color: red;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 2rem;">NEW ARRIVALS !!</h5>
        <h1 style="color: white; font-size: 5rem;"><span>Best Prices</span></h1>
        <h1 style="color: white; font-size: 5rem;">Best Quality..</h1>
        <p style="color: white;font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 1.5rem;">Urban shop offers the best product for the most affordable price</p>
        <a href="#"><button style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Shop Now</button></a>
      </div>
    </section>

    <!---Brand--->
    <section id="brand" class="container">
      <div class="row">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/1.png"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/2.png"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/3.png"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/4.png"/>
      </div>
    </section>

    <!--New-->
    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <!---One--->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/new1.jpeg"/>
          <div class="details">
            <h2>Extremely Awesome Shoes</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!--Two-->
        
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/new2.jpg"/>
          <div class="details">
            <h2>Awesome Jackets</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>

        <!--Three-->

        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/new3.png"/>
          <div class="details">
            <h2>50% OFF Watches</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>      
      </div>
    </section>

    <!--Featured-->

    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr class="mx-auto">
        <p>Here you can check out our featured products</p>
      </div>
      <div class="row mx-auto container-fluid">

        <?php include('server\get_fetured_products.php'); ?>

        <?php while($row= $featured_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        
        <?php } ?>

      </div>
    </section>

    <!--Banner-->

    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4 style="color:white ;">MID SEASON'S SALE</h4>
        <h1>Autumn Collection <br> UP to 30% OFF</h1>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </section>

    <!--Clothes-->

    <section id="featured" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Dresses & Coats</h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing clothes</p>
      </div>
      <div class="row mx-auto container-fluid">

          <?php include('server/get_coats.php'); ?>

          <?php while($row = $coats_products->fetch_assoc()) { ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name'] ?></h5>
          <h4 class="p-price">Tk<?php echo $row['product_price'] ?></h4>
          <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php } ?>

      </div>
    </section>

    <!--Watches-->
    <section id="watches" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Best Watches</h3>
        <hr class="mx-auto">
        <p>Here you can check out our unique watches</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_watches.php'); ?>
      <?php while($row = $watches->fetch_assoc()) { ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name'] ?></h5>
          <h4 class="p-price">Tk<?php echo $row['product_price'] ?></h4>
          <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php } ?>

      </div>
    </section>


    <!--Shoes-->

    <section id="shoes" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Shoes</h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing shoes</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_shoes.php'); ?>
      <?php while($row = $shoes->fetch_assoc()) { ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name'] ?></h5>
          <h4 class="p-price">Tk<?php echo $row['product_price'] ?></h4>
          <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php } ?>

      </div>
    </section>

     <?php include('layout/footer.php'); ?>
