<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="We will simple add to cart using javascript localstorage">
   <meta name="keywords" content="add to cart, add to cart javascript, localstorage add to cart, ecommerce shopping javascript, shooping cart demo">
   <meta name="author" content="Rajamanickam">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./cart.css">

   <title>Document</title>
</head>
<style>
   hr{
    color: black !important;
  }
</style>

<body>
<?php include 'navbar.php'; ?>
<center><h1 class="mt-5 my-5 mb-0"><b>Our Accessories Collection</b></h1></center>

<main>
      <section>
         <div class="featured-area pt-100 pb-70">
            <div class="container">
               <div class="tab featured-tab-area">
                  <div class="tab_content current active pt-45">

                     <div class="tabs_item current">
                        <div class="row justify-content-center">
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/access/socks.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Everyday Plus Cushioned</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Everyday Plus Cushioned</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Everyday Plus Cushioned Socks bring comfort to your workout with extra cushioning under the heel and forefoot and a snug, supportive arch band. Sweat-wicking power and breathability up top help keep your feet dry and cool to help push you through that extra set.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 35 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Everyday-Plus-Cushioned" data-price="35" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/access/s1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Everyday Plus Cushioned</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Everyday Plus Cushioned</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Everyday Plus Cushioned Socks bring comfort to your workout with extra cushioning under the heel and forefoot and a snug, supportive arch band. Sweat-wicking power and breathability up top help keep your feet dry and cool to help push you through that extra set.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 35 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Everyday-Plus-Cushioned" data-price="35" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/access/h2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Dri-FIT ADV Classic 99</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop3" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop3" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Dri-FIT ADV Classic 99</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Fly under the radar in this unstructured, mid-depth Nike Club Cap. Washed for a well-worn, well-loved look, it's a lightweight, easy-to-wear curved-brim cap with a simple design that you can add to practically any look.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 40 </h4>
                                       <span>(5.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Dri-FIT-ADV-Classic-99" data-price="40" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/access/h3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop4" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop4" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Fly under the radar in this unstructured, mid-depth Nike Club Cap. Washed for a well-worn, well-loved look, it's a lightweight, easy-to-wear curved-brim cap with a simple design that you can add to practically any look.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 40 </h4>
                                       <span>(3.6)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear" data-price="40" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/access/g2.jpeg" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Marquee Edge</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop5" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop5" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Marquee Edge</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Reimagining sport shields for every day, the Marquee sunglasses offer panoramic views in an ultralight frame. The rubberized zones at the top bar, nose pad and temples help give you a grippy, stay-put fit while adding unexpected pops of bold color.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 120 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Marquee-Edge" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/access/g3.jpeg" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike NV03</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop6" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop6" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike NV03</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Reimagining sport shields for every day, the Marquee sunglasses offer panoramic views in an ultralight frame. The rubberized zones at the top bar, nose pad and temples help give you a grippy, stay-put fit while adding unexpected pops of bold color.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 130 </h4>
                                       <span>(4.3)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-NV03" data-price="130" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                          
                           

                        </div>
                     </div>

                     <p id="not_found"></p>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Your Cart</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <table class="show-cart table">

                  </table>
                  <div class="grand-total">Total price: $<span class="total-cart"></span></div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-secondary" ><a href="./signupform.php">Buy Now</a></button>
                  <!-- <button type="button" class="btn btn-danger clear-all">Clear All</button> -->
               </div>
            </div>
         </div>
      </div>
   </main>

   <?php include 'footer.php'?>
   




   <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- only Script -->
<script>
   var shoppingCart = (function() {

      cart = [];

      function Item(name, price, count) {
         this.name = name;
         this.price = price;
         this.count = count;
      }

      // Save cart
      function saveCart() {
         localStorage.setItem('shoppingCart', JSON.stringify(cart));
      }

      // Load cart
      function loadCart() {
         cart = JSON.parse(localStorage.getItem('shoppingCart'));
      }
      if (localStorage.getItem("shoppingCart") != null) {
         loadCart();
      }


      var obj = {};

      // Add to cart
      obj.addItemToCart = function(name, price, count) {
         for (var item in cart) {
            if (cart[item].name === name) {
               cart[item].count++;
               saveCart();
               return;
            }
         }
         var item = new Item(name, price, count);
         cart.push(item);
         saveCart();
      }
      // Set count from item
      obj.setCountForItem = function(name, count) {
         for (var i in cart) {
            if (cart[i].name === name) {
               cart[i].count = count;
               break;
            }
         }
      };
      // Remove item from cart
      obj.removeItemFromCart = function(name) {
         for (var item in cart) {
            if (cart[item].name === name) {
               cart[item].count--;
               if (cart[item].count === 0) {
                  cart.splice(item, 1);
               }
               break;
            }
         }
         saveCart();
      }

      // Remove all items from cart
      obj.removeItemFromCartAll = function(name) {
         for (var item in cart) {
            if (cart[item].name === name) {
               cart.splice(item, 1);
               break;
            }
         }
         saveCart();
      }

      // Clear cart
      obj.clearCart = function() {
         cart = [];
         saveCart();
      }

      // Count cart 
      obj.totalCount = function() {
         var totalCount = 0;
         for (var item in cart) {
            totalCount += cart[item].count;
         }
         return totalCount;
      }

      // Total cart
      obj.totalCart = function() {
         var totalCart = 0;
         for (var item in cart) {
            totalCart += cart[item].price * cart[item].count;
         }
         return Number(totalCart.toFixed(2));
      }

      // List cart
      obj.listCart = function() {
         var cartCopy = [];
         for (i in cart) {
            item = cart[i];
            itemCopy = {};
            for (p in item) {
               itemCopy[p] = item[p];
            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy)
         }
         return cartCopy;
      }
      return obj;
   })();


   // Add item
   $('.default-btn').click(function(event) {
      // alert('working');
      event.preventDefault();
      var name = $(this).data('name');
      var price = Number($(this).data('price'));
      shoppingCart.addItemToCart(name, price, 1);
      displayCart();
   });

   // Clear items
   $('.clear-cart').click(function() {
      shoppingCart.clearCart();
      displayCart();
   });


   function displayCart() {
      var cartArray = shoppingCart.listCart();
      var output = "";
      for (var i in cartArray) {
         output += "<tr>" +
            "<td>" + cartArray[i].name + "</td>" +
            "<td>(" + cartArray[i].price + ")</td>" +
            "<td><div class='input-group'>" +
            "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
            "</div></td>" +
            "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>" +
            " = " +
            "<td>" + cartArray[i].total + "</td>" +
            "</tr>";
      }
      $('.show-cart').html(output);
      $('.total-cart').html(shoppingCart.totalCart());
      $('.total-count').html(shoppingCart.totalCount());
   }

   // Delete item button

   $('.show-cart').on("click", ".delete-item", function(event) {
      var name = $(this).data('name')
      var null_val = $(this).data('undefined')
shoppingCart.removeItemFromCartAll(name);
shoppingCart.removeItemFromCartAll(null_val);
      displayCart();
   })

   // Item count input
   $('.show-cart').on("change", ".item-count", function(event) {
      var name = $(this).data('name');
      var count = Number($(this).val());
      shoppingCart.setCountForItem(name, count);
      displayCart();
   });
   displayCart();

   //////// ui script start /////////
   // Tabs Single Page
   $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
   $('.tab ul.tabs li a').on('click', function(g) {
      var tab = $(this).closest('.tab'),
         index = $(this).closest('li').index();
      tab.find('ul.tabs > li').removeClass('current');
      $(this).closest('li').addClass('current');
      tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
      tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
      g.preventDefault();
   });

   // search function
   $('#search_field').on('keyup', function() {
      var value = $(this).val();
      var patt = new RegExp(value, "i");

      $('.tab_content').find('.col-lg-4').each(function() {
         var $table = $(this);

         if (!($table.find('.featured-item').text().search(patt) >= 0)) {
            $table.not('.featured-item').hide();
         }
         if (($table.find('.col-lg-4').text().search(patt) >= 0)) {
            $(this).show();
            document.getElementById('not_found').style.display = 'none';
         } else {
            document.getElementById("not_found").innerHTML = " Product not found..";
            document.getElementById('not_found').style.display = 'block';
         }

      });

   });
</script>

</html>