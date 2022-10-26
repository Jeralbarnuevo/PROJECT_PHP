<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="icon" href="Assets/logo1.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St Cecilia Homeowner Association</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/df465306c8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <main>
        <nav>
            <div class="logo">
                <a href="#home"><img src="Assets/logo.jpg" alt="" width="55px"></a>
                <h3>St. Cecilia Homeowners Association</h3>
            </div>
            <ul class="menu"> 
                <li><a href="#features">FEATURES</a></li>  
                <li><a href="#about-us">ABOUT US</a></li>
                <div class="button">
                    <a href="Account-Menu/Account-Menu.php"><button class="btn btn-outline-success">Login</button></a>
                    <a href="Register/Register.php"><button class="btn btn-outline-success">Register</button></a>
                </div>
            </ul>
            <div class="bars"><i id="bar" class="fas fa-bars"></i></div>
           
        </nav>
        <section id="home" class="banner">
            <div class="main-banner">
            <div class="title">  
                <h1>COMPLAINT AND VIOLATION TRACKING SYSTEM FOR<br>ST. CECILIA HOA</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem magnam similique eaque nemo temporibus recusandae quibusdam dolore illo vel? Dicta delectus illum minus dolore, saepe unde omnis dignissimos vitae perspiciatis!</p>
                <button class="btn btn-success">Read More</button>
            </div>
            <div class="image">
                <img src="Assets/lappy1.jpg" alt="">
            </div>
        </div>
    </section>
        <section id="features" class="features">
            <h1>FEATURES</h1>
            <div class="features-box">
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                    <h4>Email <br>OTP Verification</h4>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-clipboard-check"></i></div>
                    <h4>Violation Tracking</h4>
                </div>
                <div class="box">
                    <div class="icon"><i class="far fa-edit"></i></div>
                    <h4>Create Complaint</h4>
                </div>
                
            </div>
        </section>
        <section id="about-us" class="about-us mt-5">
            <h1>ABOUT US</h1>
            <div class="about-us-content">
            <div class="description">
                <h2>ABOUT US</h2>
                <p>St Cecilia Homeowners Association is a self-governing organization in “common-interest” communities where homeowners collectively pay fees to maintain the units or neighborhood.
                    HOAs are typically run by resident homeowners, unpaid volunteers who are elected to a board of directors that oversees the HOA’s management.
                    Properties within an HOA are governed by a collective set of rules and bylaws that are enforced by the association.
                </p>
            </div>
          
            <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="Assets/img(1).jpg" class="img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="Assets/img(2).jpg" class="img" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="Assets/img(4).jpg" class="img" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div> 
            </div>
        </section> 
        <footer>
            <div class="box-a">
                <div class="logo-cecilia">
                    <img src="Assets/logo1.png" alt="" >
                    <p style="margin:0;">St. Cecilia Homeowners Associations</p>
                </div>
                <div class="logo-marilao">
                    <img src="Assets/MB-LOGO.png" alt="" >
                    <p style="margin:0;">Bayan ng Marilao</p>
                </div>
                
                <div class="link">
                    <a href="https://www.facebook.com/SCPHOA"><i class="fab fa-facebook-square"></i>https://www.facebook.com/SCPHOA</a>
                    <a href="https://www.facebook.com/MarileNews/"><i class="fab fa-facebook-square"></i>https://www.facebook.com/MarileNews/</a>
                </div>
            </div>
        </footer>
       
    </main>
    <script>
        const bar = document.querySelector(".bars");
        const menu = document.querySelector(".menu");


        bar.addEventListener("click", ()=>{
        bar.classList.toggle("active");
        menu.classList.toggle("active");
        var click = document.getElementById("bar");
            if(click.classList.contains('fa-bars')){
                click.classList.remove('fa-bars');
                click.classList.add('fa-times');
            }else{
                click.classList.remove('fa-times');
                click.classList.add('fa-bars');
}
})

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>