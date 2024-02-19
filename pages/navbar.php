<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">
    <title>Navbar</title>
</head>
<style>
  hr{
    color: black !important;
    margin-top: 0px !important;
  }
  nav{
     background-color: #F8F9FA;
  }
  .nav-item{
     font-size: 20px;
  }
  .logo-img{
       height: 80px;
       width: 150px;
  }

  .s_btn{
    background-color: black;
    color: white;
    padding-top: 2rem;
    padding-left:1.5rem;
    padding-right:1.5rem;
    padding-bottom: 2rem;
    border: none;
    margin-left:2rem;
    margin-right:2rem;
  }
  .s_btn:hover{
   background-color: white;
   border:1px solid black;
   color: black;
   transition: 0.5s;
  }
  .l_btn{
    background-color: black;
    color: white;
    padding-top: 2rem;
    padding-left:1.5rem;
    padding-right:1.5rem;
    padding-bottom: 2rem;
    border: none;
    margin-left:2rem;
    margin-right:2rem;
  }
  .l_btn:hover{
   background-color: white;
   border:1px solid black;
   color: black;
   transition: 0.5s;
  }
 @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap');
 .popup1 .content {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-150%) scale(0);
 width: 400px;
 height: 450px;
 z-index: 2;
 text-align: center;
 padding: 20px;
 border-radius: 20px;
 background: #262626;
 box-shadow:  38px 38px 56px #1e1e1e, 
             -25px -25px 38px #1e1e1e;
 z-index: 1;
}
.popup2 .content {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-150%) scale(0);
 width: 400px;
 height: 450px;
 z-index: 2;
 text-align: center;
 padding: 20px;
 border-radius: 20px;
 background: #262626;
 box-shadow:  38px 38px 56px #1e1e1e, 
             -25px -25px 38px #1e1e1e;
 z-index: 1;
}

.popup1 .close-btn {
 position: absolute;
 right: 20px;
 top: 20px;
 width: 30px;
 height: 30px;
 color: white;
 font-size: 30px;
 border-radius: 50%;
 padding: 2px 5px 7px 5px;
 background: #292929;
 box-shadow:  5px 5px 15px #1e1e1e, 
             -5px -5px 15px #1e1e1e;
 }

.popup1.active .content {
transition: all 300ms ease-in-out;
transform: translate(-50%,-50%) scale(1);
}

.popup2 .close-btn {
 position: absolute;
 right: 20px;
 top: 20px;
 width: 30px;
 height: 30px;
 color: white;
 font-size: 30px;
 border-radius: 50%;
 padding: 2px 5px 7px 5px;
 background: #292929;
 box-shadow:  5px 5px 15px #1e1e1e, 
             -5px -5px 15px #1e1e1e;
 }

.popup2.active .content {
transition: all 300ms ease-in-out;
transform: translate(-50%,-50%) scale(1);
}

h1 {
 text-align: center;
 font-size: 32px;
 font-weight: 600;
 padding-top: 20px;
 padding-bottom: 10px;
}

a {
 font-weight: 600;
 color: white;
}

.input-field .validate {
padding: 20px;
font-size: 16px;
border-radius: 10px;
border: none;
margin-bottom: 15px;
color: #bfc0c0;
background: #262626;
box-shadow: inset 5px 5px 5px #232323, 
            inset -5px -5px 5px #292929;
outline: none;
}

.first-button {
color: white;
font-size: 18px;
font-weight: 500;
padding: 30px 50px;
border-radius: 40px;
border: none;
position: absolute;
top: 50%;
left: 20%;
transform: translate(-50%, -50%);
background: #262626;
box-shadow:  18px 18px 25px #1e1e1e, 
             -15px -15px 25px #1e1e1e;
transition: box-shadow .35s ease !important;
outline: none;
}

.first-button:active {  
background: linear-gradient(145deg, #222222, #292929);
box-shadow:  5px 5px 10px #262626, 
             -5px -5px 10px #262626;
border: none;
}

.second-button {
color: white;
font-size: 18px;
font-weight: 500;
margin-top: 20px;
padding: 20px 30px;
border-radius: 40px;
border: none;
background: #262626;
box-shadow:  8px 8px 15px #202020, 
             -8px -8px 15px #2c2c2c;
transition: box-shadow .35s ease !important;
outline: none;
}

.second-button:active{
background: linear-gradient(145deg,#222222, #292929);
box-shadow: 5px 5px 10px #262626, -5px -5px 10px #262626;
border: none;
outline: none;
}



.first-button2 {
color: white;
font-size: 18px;
font-weight: 500;
padding: 30px 50px;
border-radius: 40px;
border: none;
position: absolute;
top: 50%;
left: 20%;
transform: translate(-50%, -50%);
background: #262626;
box-shadow:  18px 18px 25px #1e1e1e, 
             -15px -15px 25px #1e1e1e;
transition: box-shadow .35s ease !important;
outline: none;
}

.first-button2:active {  
background: linear-gradient(145deg, #222222, #292929);
box-shadow:  5px 5px 10px #262626, 
             -5px -5px 10px #262626;
border: none;
}

.second-button2 {
color: white;
font-size: 18px;
font-weight: 500;
margin-top: 20px;
padding: 20px 30px;
border-radius: 40px;
border: none;
background: #262626;
box-shadow:  8px 8px 15px #202020, 
             -8px -8px 15px #2c2c2c;
transition: box-shadow .35s ease !important;
outline: none;
}

.second-button2:active{
background: linear-gradient(145deg,#222222, #292929);
box-shadow: 5px 5px 10px #262626, -5px -5px 10px #262626;
border: none;
outline: none;
}
p{
color: #bfc0c0;
padding: 20px;
}

</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="./home.php"><img src="../Pictures/nike-logo.png" alt="logo "class="logo-img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./mymen.php">Mens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./mywomen.php">Women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./mykids.php">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./myaccessories.php">Accessories</a>
        </li>
      </ul>
      <div style = " padding-left: 250px;"class="collapse navbar-collapse" id="navbarSupportedContent">
            <button class=" pt-2 pl-4 pr-4 pb-2 border-none mx-2 rounded s_btn" type="button" id="sign-up" >Sign up</button>
            <button class=" pt-2 pl-4 pr-4 pb-2 border-none mx-2 rounded l_btn" type="button" id="btn" >Log in</button>
            <button style = "float:right;" type="button" class="btn btn-dark my-2 my-sm-0 mr-auto" data-toggle="modal"
               data-target="#staticBackdrop">
                <i class="fas fa-shopping-cart total-count"></i>
            </button>
      </div>
    </div>
  </div>
</nav>



<!-- login popup  -->
<div id="popup">
        <form action="./logininsert.php" class="form" method="POST" onsubmit="return openPage(this);">
            <h1>Login</h1>
            <input type="email" name="email" class="box"  placeholder="Email" required 
                class="adminemail">
            <input type="password" name="password" class="box"  placeholder="Password" required 
                class="adminpass">
            <input type="submit" value="submit" class="submit" id="sign" onclick="func(this.form)">
        </form>

        <button id="btn-1">Close</button>
</div>



<!-- sign up popup -->

<div id="popup-b">
        <form action="./signupinsert.php"  class="form-1" method="POST" >
            <h1>Sign Up</h1>
            <input type="name" name="name" class="box" name="email" placeholder="Name" required 
                class="adminemail">
            <input type="email" name="email" class="box" name="email" placeholder="Email" required 
                class="adminemail">
            <input type="password" name="password" class="box" name="password" placeholder="Password" required 
                class="adminpass">
            <input type="submit" value="submit" class="submit" id="sign" onclick="func(this.form)">
        </form>

        <button id="btn-2">Close</button>
</div>



<script>
    function openPage(form) {
        var email = form.email.value;
        var password = form.password.value;

        if (email === 'admin@gmail.com' && password === 'admin123') {
            window.location.href = 'admin.php'; // Redirect to admin page
        } else {
            window.location.href = 'home.php'; // Redirect to user page
        } 
        return false; // Prevent form submission
    }
</script>








   <!-- login js  -->
<script>
document.getElementById("btn").addEventListener("click", function () {
  document.getElementById("popup").style.display = "block";
  document.body.style.overflow = 'hidden';
});
</script>


<script>
  document.getElementById("btn-1").addEventListener("click", function () {
  document.getElementById("popup").style.display = "none"
  document.body.style.overflow = 'scroll';
});
</script>

<!-- sign up js  -->
<script>
document.getElementById("sign-up").addEventListener("click", function () {
  document.getElementById("popup-b").style.display = "block";
  document.body.style.overflow = 'hidden';
});
</script>

<script>
  document.getElementById("btn-2").addEventListener("click", function () {
  document.getElementById("popup-b").style.display = "none"
  document.body.style.overflow = 'scroll';
});
</script>


</body>
</html>
