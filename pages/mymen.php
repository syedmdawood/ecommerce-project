<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="We will simple add to cart using javascript localstorage">
   <meta name="keywords" content="add to cart, add to cart javascript, localstorage add to cart, ecommerce shopping javascript, shooping cart demo">
   <!-- <meta name="author" content="Rajamanickam"> -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="./cart.css">

   <title>Document</title>
</head>
<style>
   hr{
      color: black !important;
   }
</style>

<body>
   <?php include 'navbar.php' ?>

   <center>
      <h1 class="mt-5 my-5 mb-0"><b>Our Mens Collection</b></h1>
   </center>
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
                                       <img src="../Pictures/Men/mj1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Air Jordan 6 Retro</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Air Jordan 6 Retro</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Be cool. Stay cool. The AJ6 Cool Grey lets your style take flight with a colorway rooted to the Jordan Brand DNA .
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 200 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Air-Jordan-6-Retro" data-price="200" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mamx1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max Plus </a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop2" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop2" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max Plus</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 175 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Air-Max-Plus" data-price="175" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mamx2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max Terrascape Plus </a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop3" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop3" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max Terrascape Plus</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 100 </h4>
                                       <span>(5.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Black-Infinity" data-price="100" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mamx3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max Penny</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop4" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop4" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max Penny</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.

                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 199 </h4>
                                       <span>(3.6)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Penny" data-price="199" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mb1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Zoon Freak 4</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop5" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop5" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Zoon Freak 4</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Giannis is an incessant storm of stamina and skill that keeps coming at opponents for 4 quarters or more.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 89 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Zoon-Freak" data-price="89" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mb2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Giannis Importality</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop6" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop6" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Giannis Importality</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          All little hoopers want playtime to last forever. The Giannis Immortality 2 helps make that happen.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 65 </h4>
                                       <span>(4.3)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Giannis-Importality" data-price="65" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mb3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Air Jordan XXXVII SP</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop7" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop7" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Air Jordan XXXVII SP</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          You've got the hops and the speed—lace up in shoes that enhance what you bring to the court.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 160 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Air-Jordan-XXXVII-SP" data-price="160" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Primary</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop8" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop8" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Primary</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Run, spin, lift, stretch—no matter where your workout takes you, we have you covered in the sweat-wicking Primary Top. We designed it to be soft and comfortable, with underarm ventilation to help keep you cool during your reps
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 40 </h4>
                                       <span>(4.3)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Primary" data-price="40" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Primary</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop9" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop9" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Primary</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Run, spin, lift, stretch—no matter where your workout takes you, we have you covered in the sweat-wicking Primary Top. We designed it to be soft and comfortable, with underarm ventilation to help keep you cool during your reps

                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 40 </h4>
                                       <span>(4.1)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Primary-2" data-price="40" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Windrunners</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop10" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop10" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Windrunners</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Get ready to run Boston with this classic-fit Nike Windrunner jacket. Crafted from lightweight fabric, it has a breathable inner lining and rear vent to help you stay cool and comfortable.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 120 </h4>
                                       <span>(3.8)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Windrunners" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-4.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sprtswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop11" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop11" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Sportswear Tank sets you up with a soft cotton jersey feel and bold branding at the chest for warm-weather comfort and style.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 45 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear" data-price="45" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-5.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Rise 365</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop12" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop12" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Rise 365</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          A lightweight favorite returns with more breathability. The Nike 365 Top is made with runner-informed data for cooling in areas where you need it.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 40 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Rise-365" data-price="40" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-6.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Invincible 3</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop13" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop13" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Invincible 3</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Run, spin, lift, stretch—no matter where your workout takes you, we have you covered in the sweat-wicking Primary Top. We designed it to be soft and comfortable, with underarm ventilation to help keep you cool during your reps

                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 120 </h4>
                                       <span>(4.2)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Invincible-3" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-7.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sprotswear Tech Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop14" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop14" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sprotswear Tech Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Sportswear Club Fleece Pants combine classic style with the soft comfort of fleece.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 60 </h4>
                                       <span>(5.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sprotswear-Tech-Fleece" data-price="60" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-8.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike SProtswear Club Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop15" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop15" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike SProtswear Club Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Sportswear Club Fleece Pants combine classic style with the soft comfort of fleece.

                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 55 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sprotswear-Club-Fleece" data-price="55" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mc-9.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike DRI FIT Run Division</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop16" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop16" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike DRI FIT Run Division</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Sportswear Club Fleece Pants combine classic style with the soft comfort of fleece.

                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 120</h4>
                                       <span>(3.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-DRI-FIT-Run-Division" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/md1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Blazer Mid '77 Vintage</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop17" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop17" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Blazer Mid '77 Vintage</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          In the ‘70s, Nike was the new shoe on the block. So new in fact, we were still breaking into the basketball scene and testing prototypes on the feet of our local team.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 105 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Blazer-Mid-'77-Vintage" data-price="105" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/md2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike High Dunk Retro</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop18" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop18" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike High Dunk Retro</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Recognizing the Dunk's roots as the top-ranking college team sneaker, the Be True To Your School pack looks to the original ad campaign for inspiration.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 125 </h4>
                                       <span>(2.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-High-Dunk-Retro" data-price="125" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/md3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike High Retro Premium</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop19" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop19" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike High Retro Premium</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          50 years after the birth of the genre, hip hop is still influencing streetwear. Nike shoes have always been an integral part of this culture.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 135 </h4>
                                       <span>(3.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-High-Retro-Premium" data-price="135" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/Men/mh1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sprotswear Tech Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop20" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop20" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sprotswear Tech Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Sportswear Club Fleece Pants combine classic style with the soft comfort of fleece.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 145 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sprotswear-Tech-Fleece" data-price="145" class="default-btn border-radius-5"> Add to cart</button>
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
                  <button type="button" class="btn btn-secondary"><a href="./signupform.php">Buy Now</a></button>
                  <!-- <button type="button" class="btn btn-danger clear-all">Clear All</button> -->
               </div>
            </div>
         </div>
      </div>
     
   </main>
   
   <?php include 'footer.php'; ?>

   <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

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