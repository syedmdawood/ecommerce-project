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
<?php include 'navbar.php' ?>
<center><h1 class="mt-5 my-5 mb-0"><b>Our Kids Collection</b></h1></center>

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
                                       <img src="../Pictures/kids/kj2.webp" alt="Images">
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
                                          The Air Jordan 13 Retro brings back the memorable game shoe that Michael Jordan wore during the '97-98 season, all the way to his 6th championship title.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 150 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Air-Jordan-6-Retro" data-price="150" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kj1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Air Jordan 1 High OG </a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop2" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop2" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Air Jordan 1 High OG</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Be cool. Stay cool. The AJ6 Cool Grey lets your style take flight with a colorway rooted to the Jordan Brand DNA .
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 140 </h4>
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Air-Jordan-1-High-OG" data-price="140" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kj3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Air jordan 5 Retro SE Craft </a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop3" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop3" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Air jordan 5 Retro SE Craft</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Be cool. Stay cool. The AJ6 Cool Grey lets your style take flight with a colorway rooted to the Jordan Brand DNA.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 130 </h4>
                                       <span>(5.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Air-jordan-5-Retro-SE-Craft" data-price="130" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kam1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max 270 GO</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop4" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop4" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max 270 GO</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 110 </h4>
                                       <span>(3.6)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Air-Max-270-GO" data-price="110" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kam2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max 90 LTR SE</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop5" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop5" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max 90 LTR SE</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
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
                                       <button type="button" data-name="Nike-Air-Max-90-LTR-SE" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kam3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Air Max 270</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop6" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop6" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Air Max 270</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
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
                                       <button type="button" data-name="Nike-Air-Max-270" data-price="130" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kd1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Dunk High</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop7" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop7" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Dunk High</h1>
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
                                       <span>(4.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Dunk-High" data-price="105" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kh1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Club Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop8" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop8" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Club Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Be cool. Stay cool. The AJ6 Cool Grey lets your style take flight with a colorway rooted to the Jordan Brand DNA .
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 50 </h4>
                                       <span>(4.3)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Club-Fleece" data-price="50" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kh2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Pullover Hoodie</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop9" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop9" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Pullover Hoodie</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          The Air Jordan 13 Retro brings back the memorable game shoe that Michael Jordan wore during the '97-98 season, all the way to his 6th championship title.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 60 </h4>
                                       <span>(4.1)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Pullover-Hoodie" data-price="60" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kh3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop10" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop10" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Be cool. Stay cool. The AJ6 Cool Grey lets your style take flight with a colorway rooted to the Jordan Brand DNA.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 70 </h4>
                                       <span>(3.8)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear" data-price="70" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kja1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Windrunner</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop11" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop11" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Windrunner</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 160 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Windrunner" data-price="160" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kja2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Amplify Jacket</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop12" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop12" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Amplify Jacket</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 120</h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Amplify-Jacket" data-price="120" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kja3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop13" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop13" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Let your attitude have the edge with flame-like caging that adds heat to the streets, while airy mesh keeps you cool.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 150 </h4>
                                       <span>(4.2)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear" data-price="150" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kp1.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Club Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop14" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop14" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Club Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          In the ‘70s, Nike was the new shoe on the block. So new in fact, we were still breaking into the basketball scene and testing prototypes on the feet of our local team. 
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 55 </h4>
                                       <span>(5.0)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Club-Fleece" data-price="55" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kp2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop15" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop15" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Recognizing the Dunk's roots as the top-ranking college team sneaker, the Be True To Your School pack looks to the original ad campaign for inspiration. 
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 90 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear" data-price="90" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kp3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Sportswear Club Fleece</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop16" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop16" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Sportswear Club Fleece</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          50 years after the birth of the genre, hip hop is still influencing streetwear. Nike shoes have always been an integral part of this culture.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 80</h4>
                                       <span>(3.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Sportswear-Club-Fleece" data-price="80" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kd2.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Dunk Low</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop17" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop17" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Dunk Low</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          50 years after the birth of the genre, hip hop is still influencing streetwear. Nike shoes have always been an integral part of this culture.
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="content-in">
                                       <h4>$ 150 </h4>
                                       <span>(4.9)<i class="fa fa-star"></i></span>
                                    </div>
                                    <hr class="mt-3" style="color: black !important;">
                                    <div class="featured-content-list">
                                       <button type="button" data-name="Nike-Dunk-Low" data-price="150" class="default-btn border-radius-5"> Add to cart</button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-6">
                              <div class="featured-item">
                                 <div class="featured-item-img">
                                    <a href="#">
                                       <img src="../Pictures/kids/kd3.webp" alt="Images">
                                    </a>
                                 </div>
                                 <div class="content">
                                    <h3><a href="#">Nike Blazer Mid '77 Dance</a></h3>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop18" aria-controls="offcanvasTop">Product info</button>
                                    <div class="container">
                                       <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop18" aria-labelledby="offcanvasTopLabel">
                                          <div class="offcanvas-header">
                                             <h1 class="offcanvas-title mx-5" id="offcanvasTopLabel">Nike Blazer Mid '77 Dance</h1>
                                             <button type="button" class="btn-close mx-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body mx-5 container">
                                          Recognizing the Dunk's roots as the top-ranking college team sneaker, the Be True To Your School pack looks to the original ad campaign for inspiration.
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
                                       <button type="button" data-name="Nike-Blazer-Mid-'77-Dance" data-price="200" class="default-btn border-radius-5"> Add to cart</button>
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
      var output = " ";
      for (var i in cartArray) {
         output += "<tr>" +
            "<td>" + cartArray[i].name + "</td>" +
            "<td>(" + cartArray[i].price + ")</td>" +
            "<td><div class='input-group'>" +
            "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + " ' value='" + cartArray[i].count + "'>" +
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
shoppingCart.removeItemFromCartAll(name)
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