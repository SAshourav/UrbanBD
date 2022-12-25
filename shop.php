<?php
include('server/connection.php');

//use the search section
if(isset($_POST['search'])){
  $category = $_POST['category'];
  $price = $_POST['price'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE product_category =? AND product_price <=?");

  $stmt->bind_param("si", $category, $price);
  $stmt->execute();

  $products = $stmt->get_result(); 

  //return all the products
}else{
  $stmt = $conn->prepare("SELECT * FROM products");

  $stmt->execute();

  $products = $stmt->get_result(); 
}

 //array

?>

<?php include('layout/header.php'); ?>

        <!--Shop-->

    <div class="grid-container">
           <!-- Search Section-->
        <section id="search" class="my-5 py-5 ms-2">
          <div class="container mt-5 py-5 ms-2">
            <p>Search Product</p>
            <hr>
          </div>

            <form action="shop.php" method="POST">
              <div class="row mx-auto container">
                <div class="col-lg-12 col-md-12 col-sm-12">

                  <p>Category</p>
                    <div class="form-check">
                      <input class="form-check-output" value="shoes" type="radio" name="category" id="category-one">
                      <label class="form-check-label" for="flexRedioDefault1">
                        Shoes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-output" value="coats" type="radio" name="category" id="category-two" checked>
                      <label class="form-check-label" for="flexRedioDefault2">
                        Coats
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-output" value="watches" type="radio" name="category" id="category-two" checked>
                      <label class="form-check-label" for="flexRedioDefault3">
                        Watches
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-output" value="bags" type="radio" name="category" id="category-two" checked>
                      <label class="form-check-label" for="flexRedioDefault4">
                        Bags
                      </label>
                    </div>

                </div>
              </div>

              <div class="row mx-auto container mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p>Price</p>
                  <input name="price" value="100" type="range" class="form-range w-50" min="1" max="99999" id="customRange2">
                  <div class="w-50">
                    <span style="float: left;">1</span>
                    <span style="float: right;">99999</span>
                  </div>
                </div>
              </div>

              <div class="form-group my-3 mx-3">
                <input type="submit" name="search" value="Search" class="btn btn-primary">
              </div>

            </form>
        </section>

        <!-- Featured Section-->
        <section id="featured" class="my-5 py-5">
            <div class="container mt-5 py-5">
              <h3>Our Products</h3>
              <hr>
              <p>Here you can check out our products</p>
            </div>
            <div class="row mx-auto container">

          <?php while ($row = $products->fetch_assoc()) { ?>

              <div onclick="window.location.href='single_product.html';" class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
                <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
              </div>
              
              <?php } ?>
              
              <nav aria-label="page navigation example">
                <ul class="pagination mt-5">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>

            </div>
        </section>

    </div>
       






      <!--Footer-->

      <?php include('layout/footer.php'); ?>