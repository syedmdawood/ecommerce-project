

<?php
// Start the session
session_start();

// Check if cart data is stored in the session
if (isset($_SESSION['cart'])) {
    $cartData = $_SESSION['cart'];
} else {
    $cartData = array(); // Empty cart
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="stylesheet" href="./cart.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>




    <!-- <style>
        form{
            width: 350px;
            /* text-align: center; */
            align-item: center;
            /* margin-left:500px; */
        }
        form input{
            /* text-align: right; */
            /* width:80%; */
        }
        .input{
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-item: right;
        }
        .input input{
            position: right;
        }
        .div{
            display: flex;
            /* flex-direction: column; */
        }
        #radio{
            display: flex;
            flex-direction:column;
        }
    </style> -->
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Credit card form -->
<section>
  <div class="row">
    <div class="col-md-8 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Biling details</h5>
        </div>
        <div class="card-body">
          <form action="signinsert.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form6Example1" class="form-control" name="fname"/>
                  <label class="form-label" for="form6Example1">First name</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form6Example2" class="form-control" name="lname" />
                  <label class="form-label" for="form6Example2">Last name</label>
                </div>
              </div>
            </div>

            <!-- Text input -->
           
            <!-- Text input -->
    
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form6Example5" class="form-control" name="email" />
              <label class="form-label" for="form6Example5">Email</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
              <input type="number" id="form6Example6" class="form-control" name="phone" />
              <label class="form-label" for="form6Example6">Phone</label>
            </div>

            <hr class="my-4" />

        

           

            <h5 class="mb-4">Payment</h5>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3"
                checked />
              <label class="form-check-label" for="checkoutForm3">
                Credit card
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm4" />
              <label class="form-check-label" for="checkoutForm4">
                Cash On Dilivery
              </label>
            </div>

        

            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="formNameOnCard" class="form-control" name="cardname" />
                  <label class="form-label" for="formNameOnCard">Name on card</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="formCardNumber" class="form-control" name="cardno" />
                  <label class="form-label" for="formCardNumber">Credit card number</label>
                </div>
              </div>
            </div>

          

            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>

    <?php foreach ($cartData as $item): ?>
    <div class="col-md-4 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Summary</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            <?php echo $item['name']; ?>
              <span><?php echo $item['price']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Total amount</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong>$53.98</strong></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- Credit card form -->



     



<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>




</body>
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
      var null_val = $(this).data('null')
      var nulll_val = $(this).data("syntaxError")
      shoppingCart.removeItemFromCartAll(name);
      shoppingCart.removeItemFromCartAll(null_val);
      shoppingCart.removeItemFromCartAll(nulll_val);
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
   
   
   
   $('.default-btn').click(function(event) {
        event.preventDefault();
        var name = $(this).data('name');
        var price = Number($(this).data('price'));

        var product = {
            name: name,
            price: price
        };

        // Check if a session is started
        if (typeof(Storage) !== "undefined") {
            // Get existing cart data from session
            var existingCart = JSON.parse(sessionStorage.getItem('cart')) || [];

            // Add the new product to the cart
            existingCart.push(product);

            // Save the updated cart data back to the session
            sessionStorage.setItem('cart', JSON.stringify(existingCart));
        }
    });




</script>


</html>