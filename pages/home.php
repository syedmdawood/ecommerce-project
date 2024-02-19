

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Nike. Just Do It. Nike.com</title>
</head>

<body>
<?php include 'navbar.php'; ?>


    <!-- Sign Up form Coding start  -->

    <div id="popup">
        <form action="" class="form">
            <h1>Login</h1>
            <input type="email" name="email" id="box" placeholder="Enter Email" required value="admin"
                class="adminemail">
            <input type="password" name="password" id="box" placeholder="Enter Password" required value="admin"
                class="adminpass">
            <input type="submit" value="Login" class="submit" id="sign" onclick="func(this.form)">
            <p>Don't have an accout? <a href="./signupform.php">Sign Up</a></p>
        </form>

        <button id="btn-1">Close</button>
    </div>

    <!-- Sign Up form Coding end  -->


    <!-- Section F Coding Start  -->

    <div>

        <div class="section-f">
            <div class="sub-sec-f">
                <h1>WELCOME TO OUR WEBSITE</h1>
                <p>We are providing best shoes and clothing stuff here.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <!-- Section F Coding End  -->

    <!-- Section D coding Start  -->

    <div class="section-d">
        <h1>Featured</h1>
        <img src="../Pictures/Men/sec-d-img-1.webp" alt="">
    </div>
    <br>
    <br>

    <!-- Section D coding End  -->

    <!-- Section B coding Start -->



    <h1 id="sec-b">Tending</h1>
    <div class="section-b">
        <div class="div-a">
            <button class="btn_type_1"><a href="./mymen.php">Shop</a></button>
        </div>
        <div class="div-b">
            <button class="btn_type_1"><a href="./mywomen.php">Shop</a></button>
        </div>
        <div class="div-c">
            <button class="btn_type_1"><a href="mykids.php">Shop</a></button>
        </div>
    </div>


    <!-- Section B Coding End -->

    <!-- Section A Coding Start  -->

    <div class="section-a">
        <h1>ESSENTIAL FOR</h1>
        <h1>TRIPS</h1>
        <p>Nike ACG styles are made for overnight trips in all kind of temps.</p>
        <div class="section-a-btn">
            <button class="btn_type_2"><a href="./mymen.php">Shop Men</a></button>
            <button class="btn_type_2"><a href="./mywomen.php">Shop Women</a></button>
            <button class="btn_type_2"><a href="./mykids.php">Shop Kids</a></button>
        </div>
    </div>
    <br><br>

    <!-- Section A coding End  -->

    <!-- Section C Coding Start  -->

    <div class="section-c">
        <h1>Always Iconic</h1>
        <div class="img">
            <!-- <marquee behavior="" direction=""> -->
            <a href="./mymen.php"><img src="../Pictures/Men/mamx1.webp" alt=""></a>
            <a href="./mymen.php"><img src="../Pictures/Men/ms-2.webp" alt=""></a>
            <a href="./mymen.php"><img src="../Pictures/Men/mamx2.webp" alt=""></a>
            <a href="./mymen.php"><img src="../Pictures/Men/mamx3.webp" alt=""></a>
            <a href="./mymen.php"><img src="../Pictures/Men/mb1.webp" alt=""></a>
            <a href="./mymen.php"><img src="../Pictures/Men/mb2.webp" alt=""></a>
            <!-- </marquee> -->
        </div>
    </div>

    <br><br>


    <!-- Section C Coding End  -->
<?php include 'footer.php';?>

</body>

</html>