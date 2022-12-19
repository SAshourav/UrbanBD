<?php


/*
  not paid
  shipped
  delivered
 */

include('server/connection.php');

if(isset($_POST['order_details_btn']) && isset($_POST['order_id'])){
    $order_id = $_POST['order_id'];
    $order_status = $_POST['order_status'];
    $stmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
    $stmt->bind_param('i', $order_id);
    $stmt->execute();
    $order_details = $stmt->get_result();
}else{
    header('location: account.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account | Urban</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>


  <!-- Here Is the navbar section-->

  <nav class="navbar navbar-expand-lg py-3 bg-white fixed-top">
      <div class="container-fluid">
        <img class="logo" src="assets/imgs/logo.png" alt="">
        <h2 class="brand">The Urban Shop</h2>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="shop.html">Shop</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>

            <li class="nav-item">
              <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
              <a href="Account.html"><i class="fas fa-user"></i></a>
            </li>

 
          </ul>
        </div>
      </div>
</nav>


 <!--orders details-->

<section id="orders" class="orders container my-5 py-3">
      <div class="container mt-5">
          <h2 class="font-weight-bold text-center">Order details</h2>
          <hr class="mx-auto">
      </div>

      <table class="mt-5 pt-5 mx-auto">
          <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
          </tr>

          <?php while($row = $order_details->fetch_assoc()){ ?>
         
                  <tr>
                      <td>
                          <div class="product-info">
                           <img src="assets/imgs/<?php echo $row['product_image'];?>"/>
                            <div>
                              <p class="mt-3"><?php echo $row['product_name']; ?></p>
                            </div>
                          </div>
                          
                      </td>
                      <td>
                        <span><?php echo $row['product_price'];?>Tk</span>
                      </td>
                      <td>
                        <span><?php echo $row['product_quantity'];?></span>
                      </td>          
                      
                      
                      

                  </tr>  
                  
                  <?php } ?>
                  
               
      </table>


      <?php if($order_status == "not paid"){?>
            <form style="float:right;">
            <input type="submit" class="btn btn-primary" value="Pay Now"/>
            </form>
        <?php } ?>
      

   </section>



 <!--Footer-->

 <footer class="mt-5 py-5">
            <div class="row container mx-auto pt-5">
             <div class="footer-one col-lg-3 col-md-6 col-sm-12">
               <img class="logo" src="assets/imgs/logo.png"/>
               <p class="pt-3">We provide the best products for the most affordable prices</p>
             </div>
             <div class="footer-one col-lg-3 col-md-6 col-sm-12">
               <h5 class="pb-2">Featured</h5>
               <ul class="text-uppercase">
                 <li><a href="#">men</a></li>
                 <li><a href="#">women</a></li>
                 <li><a href="#">boys</a></li>
                 <li><a href="#">girls</a></li>
                 <li><a href="#">new arrivals</a></li>
                 <li><a href="#">clothes</a></li>
               </ul>
             </div>
     
             <div class="footer-one col-lg-3 col-md-6 col-sm-12">
               <h5 class="pb-2">Contact Us</h5>
               <div>
                 <h6 class="text-uppercase">Address</h6>
                 <p>Basundhara R/A , Dhaka</p>
               </div>
               <div>
                 <h6 class="text-uppercase">Phone</h6>
                 <p>123 456 789</p>
               </div>
               <div>
                 <h6 class="text-uppercase">Email</h6>
                 <p>sabbir.ahmed5@northsouth.edu</p>
                 <p>sajid.mahmud7@northsouth.edu</p>
               </div>
             </div>
             <div class="footer-one col-lg-3 col-md-6 col-sm-12">
               <h5 class="pb-2">Instagram</h5>
               <div class="row">
                 <img src="assets/imgs/instagram/bag.jpg" class="img-fluid w-25 h-100 m-2"/>
                 <img src="assets/imgs/instagram/jacket.jpg" class="img-fluid w-25 h-100 m-2"/>
                 <img src="assets/imgs/instagram/shoe.jpg" class="img-fluid w-25 h-100 m-2"/>
                 <img src="assets/imgs/Featured1.jpg" class="img-fluid w-25 h-100 m-2"/>
                 <img src="assets/imgs/Featured2.jpg" class="img-fluid w-25 h-100 m-2"/>
               </div>
             </div>
            </div>
     
     
             <div class="copyright mt-5">
               <div class="row container mx-auto">
                 <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                  <img src="assets/imgs/payment.jpg"/> 
                 </div>
                 <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                    <p>eCommerce @ 2030 All Right Reserved</p>
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                   <a href="#"><i class="fab fa-facebook"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-snapchat"></i></a>
                  </div>
               </div>
             </div>
     
          </footer>
     




  <!-- JavaScript Bundle with Popper -->
  <script
           src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
           crossorigin="anonymous"
         ></script>
       </body>
     </html>