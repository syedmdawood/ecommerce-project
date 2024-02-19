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
<center><h1 class="mt-5 my-5 mb-0"><b>Our Women Collection</b></h1></center>

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
                                       <img src="../Pictures/Women/wam1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air VaporMax Plus</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air VaporMax Plus</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Air VaporMax Plus looks to the past to propel you into the future. Nodding to the '98 original with its floating cage and padded upper, it adds heel-to-toe VaporMax Air technology to ramp up the comfort and create a modern look.                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 210 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Air-VaporMax-Plus" data-price="210" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wam2.jpeg" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air VaporMax 2021 Flykint </a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop2" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop2" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air VaporMax 2021 Flykint</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Have you ever walked on Air? Step into this shoe to truly see how it's done. Look through or remove the perforated insole to see the transparent Nike Air unit.                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 150 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Air-VaporMax-2021-Flykint" data-price="150" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wam3.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max 2090 </a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop3" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop3" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max 2090</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. 
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
                                       <button type="button" data-name="Nike-Air-Max-2090" data-price="100" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wd1.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Blazer Mid '77 Vintage</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop4" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop4" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Blazer Mid '77 Vintage</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          You're not just in the game, you're leading it. Celebrating women who ball and the off-court lifestyle embedded into everyday life, the Blazer Mid returns with nothin'-but-net style.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 105 </h4>
                                       <span>(3.6)<i class="fa fa-star"></i></span>
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
                                    <img src="../Pictures/Women/wd2.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Dunk Low</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop5" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop5" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Dunk Low</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          All that shimmers isn't gold. Decked out in sumptuously smooth, satin-esque fabric, the Dunk Low is dressier than your average pair of sneakers but sporty enough to dress down.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 125 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Dunk-Low" data-price="125" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wd3.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Dunk Low Premium MF</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop6" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop6" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Dunk Low Premium MF</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Created for the hardwood but taken to the streets, the '80s b-ball icon returns with classic details and throwback hoops flare.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 135 </h4>
                                       <span>(4.3)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Dunk-Low-Premium-MF" data-price="135" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wjac1.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Essential</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop7" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop7" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Essential</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          In this lightweight, loose-fitting bomber, you can cover up without hiding your style. Smooth ripstop fabric is structured but sheer, so you can let your favorite prints and colors shine through.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 135 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Essential" data-price="135" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wjac2.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Repel City Ready</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop8" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop8" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Repel City Ready</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Rain or shine, get after your workout in this short-sleeve, water-repellent jacket. A full-length zipper lets you adjust the airflow, while a mesh underlay helps keep you cool. The loose fit and bungee cords at the hem make this piece perfect for layering.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 120 </h4>
                                       <span>(4.3)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Repel-City-Ready" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wjac3.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Jordan Sportswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop9" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop9" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Jordan Sportswear</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Layer up and get out there in this oversized, lightweight woven jacket. Inspired by heritage Nike Sportswear, its design refreshes a staple with panel details that help reshape your warm-weather wardrobe. A 2-way zipper lets you change up your look with ease.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 145 </h4>
                                       <span>(4.1)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Jordan-Sportswear" data-price="145" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wmatching1.jpeg" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Naoi Osaka</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop10" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop10" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Naoi Osaka</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Express yourself in Naomi's collection as you mix, match and move through your day like a champ in this cropped jersey. Shy, muted colors bloom with pops of Osaka character, including her iconic lucky cat patch stitched into the chest.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 65 </h4>
                                       <span>(3.8)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Naoi-Osaka" data-price="65" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wmatching2.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Collection</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop11" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop11" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Collection </h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Layer up and get out there in this oversized, lightweight woven jacket. Inspired by heritage Nike Sportswear, its design refreshes a staple with panel details that help reshape your warm-weather wardrobe.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 75 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Collection" data-price="75" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wmatching3.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Phonix Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop12" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop12" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Phonix Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Every day is about to be your lucky day. Reworking the AJ1's original magic, this edition makes a stylish statement with a platform stance and low-cut collar. Raw-edge leather and a clover-inspired colorway make 'em the perfect complement to any 'fit.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 70 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Phonix-Fleece" data-price="70" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wp1.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Phonix Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop13" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop13" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Phonix Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Rise up and transform your fleece wardrobe with strong cozy vibes. These Phoenix Fleece sweats have the easy, familiar feel of your favorites with the extra support and style to set your look apart.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 75 </h4>
                                       <span>(4.2)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Phonix-Fleece" data-price="75" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wp2.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Phonix Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop14" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop14" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Phonix Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Rise up and transform your fleece wardrobe with strong cozy vibes. These Phoenix Fleece sweats have the easy, familiar feel of your favorites with the extra support and style to set your look apart.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 90 </h4>
                                       <span>(5.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Phonix-Fleece-1" data-price="90" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wp3.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Phonix Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop15" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop15" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Phonix Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Rise up and transform your fleece wardrobe with strong cozy vibes. These Phoenix Fleece sweats have the easy, familiar feel of your favorites with the extra support and style to set your look apart.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 100 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Phonix-Fleece-2" data-price="100" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wr1.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Invincible 3</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop16" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop16" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Invincible 3</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          With maximum cushioning to support every mile, the Invincible 3 gives you Nike Running's highest level of comfort underfoot to help you stay on your feet today, tomorrow and beyond
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 210</h4>
                                       <span>(3.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Invincible-3" data-price="210" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wr2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Pegasus Trail 4</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop17" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop17" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Pegasus Trail 4</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Nike Pegasus Trail 4 GORE-TEX is made for those moments when you don't want to turn back, no matter what. Feel confident even in the most unforeseen weather conditions with waterproof GORE-TEX keeping you dry
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
                                       <button type="button" data-name="Nike-Pegasus-Trail-4" data-price="200" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/wr3.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Zoom Fly 5</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop18" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop18" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Zoom Fly 5</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                             18
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 200 </h4>
                                       <span>(2.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Zoom-Fly-5" data-price="200" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/ws1.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Essential</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop19" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop19" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Essential</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          With a loose fit and slightly dropped shoulders, this collegiate take on a classic oversized tee is sure to become one of your staples.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 35 </h4>
                                       <span>(3.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Essential" data-price="35" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                    <img src="../Pictures/Women/ws2.webp" alt="Images">

                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop20" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop20" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear </h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Roomy and relaxed, this oversized tee is perfect when you want to rock a bold look but still be comfy. A simple Swoosh design and heavyweight cotton fabric give you a clean, confident look you can wear every day of the year."
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
                                       <button type="button" data-name="Nike-Sportswear" data-price="35" class="default-btn border-radius-5"> Add to cart</button>
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