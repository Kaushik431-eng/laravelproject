<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg   border-bottom" style="background-color: antiquewhite;">
        <div class="container-fluid">



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <!-- Left Menu -->
                 <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.shop_all') }}">Shop All</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.aboute') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav me-auto">
                    <li class="navba-link"><a class="navbar-brand fw-bold" href="{{ route('frontend.index') }}">A. Vanguard</a></li>
                </ul>

                <!-- Right Menu -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-address-book"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-shop"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid py-3" style="background-color:antiquewhite;">
        <p class="p"><a href="{{ route('frontend.index') }}" style="text-decoration: none; color:black;">Home</a>>Fiction</p>
    </div>

    <div class="container-fluid" style="background-color: antiquewhite;">
        <div class="row">
    <div class="col-md-3">
        <h1 class="h1">Browse By </h1>
       <a href="{{ route('frontend.shop_all') }}" style="text-decoration: none; color:black;"><p class="p">All Products</p> </a>
        <a href="{{ route('fronend.Art_Design')}}" style="text-decoration: none; color:black;"><p class="p">Art & Design</p></a>
         <a href="{{ route('fronend.fiction') }}" style="text-decoration: none; color:black;"><p class="p">fiction</p></a>
         <a href="{{ route('fronend.no_fiction') }}" style="text-decoration: none; color:black;"><p class="p">Non-Function</p> <br></a>
        
        <h1 class="h1">Filter By</h1> <hr>
    </div>

    <div class="col-md-9">
        <h1 class="h1">Fiction</h1>
        <p class="p">Welcome to our All Products page - whether you're searching for bestselling novels, timeless <br> 
        classics, educational textbooks, or inspiring non-fiction, you'll find it all here.</p>

       
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card-border-0">
                    <div class="position-relative">
                       <img src="https://tse1.mm.bing.net/th/id/OIP.6D2dZCmFb6a6vfG4FarmGAAAAA?pid=Api&P=0&h=180" style="height: 300px;" class="card-img-top" alt="">
                        <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
                        <button class="btn btn-dark rounded-pill px-4">
                            Add to Cart
                        </button>
                    </div> -->
                     </div>
                     <div class="card-body">
                        <h5 class="card-title"> Alps</h5>
                        <p class="">$35.00</p>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-border-0">
                    <div class="position-relative">
                       <img src="https://m.media-amazon.com/images/I/91a4Jv0YN1L._AC_UF894,1000_QL80_.jpg" style="height: 300px;"  class="card-img-top" alt="">
                        <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
                        <button class="btn btn-dark rounded-pill px-4">
                            Add to Cart
                        </button>
                    </div> -->
                     </div>
                     <div class="card-body">
                        <h5 class="card-title"> Healing Herbs</h5>
                        <p class=""><del>$30.00</del> $22.40</p>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-border-0">
                    <div class="position-relative">
                       <img src="https://cdn2.penguin.com.au/covers/400/9781529110487.jpg"  style="height: 300px;" class="card-img-top" alt="">
                        <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
                        <button class="btn btn-dark rounded-pill px-4">
                            Add to Cart
                        </button>
                    </div> -->
                     </div>
                     <div class="card-body">
                        <h5 class="card-title"> Spoken Word </h5>
                        <p class=""><del>$30.00</del> $27.00</p>
                     </div>
                </div>
            </div>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card-border-0">
                    <div class="position-relative">
                       <img src="https://foyr.com/learn/wp-content/uploads/2021/03/New-York-School-of-Interior-Design-Home-The-Foundations-of-Enduring-Spaces-by-Ellen-S.-Fisher-1250x1536.jpg" style="height: 300px;"  class="card-img-top" alt="">
                        <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
                        <button class="btn btn-dark rounded-pill px-4">
                            Add to Cart
                        </button>
                    </div> -->
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Interior Design</h5>
                        <p class=""> $15.00</p>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-border-0">
                    <div class="position-relative">
                        <img src="https://19thcentury.us/wp-content/uploads/the-disappearing-scriptures-unraveling-the-missing-books-of-the-bible-removed-in-the-19th-century.jpg" style="height: 300px;" class="card-img-top" alt="">
                        <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
                        <button class="btn btn-dark rounded-pill px-4">
                            Add to Cart
                        </button>
                    </div> -->
                     </div>
                     <div class="card-body">
                        <h5 class="card-title"> The Missing C.</h5>
                        <p class=""> $18.00</p>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-border-0">
                    <div class="position-relative">
                       <img src="https://static.wixstatic.com/media/ea71bb_a4061457e95b47b295a9533f89839dc4~mv2_d_2479_2483_s_4_2.jpg/v1/fit/w_500,h_500,q_90/file.jpg" style="height: 300px;" class="card-img-top" alt="">
                        <!-- <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
                        <button class="btn btn-dark rounded-pill px-4">
                            Add to Cart
                        </button>
                    </div> -->
                     </div>
                     <div class="card-body">
                        <h5 class="card-title"> Traveling With Youre  Vegetarian Child</h5>
                        <p class=""> $22.00</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

     <!-- last section -->

    
    <div class="container-fluid" style="background-color: antiquewhite;">
        <div class="text">
            <h1 class="h1 text-center">
                A. Vanguard</h1>
        </div>
        <div class="container-fluid d-flex justify-content-evenly">
            <div class="display-block">
                <form action="">
                    <label for="name" style="font-size: 40px;">contect with us</label> <br>
                    Email:
                    <input type="email" class="form-control shadow" style="box-shadow: inset;" placeholder="Enter your email"> <br><br>

                    <input class="form-check-input" type="checkbox" id="agreeCheck">
                    <label class="form-check-label" for="agreeCheck">
                        Yes Subscribe Me To Youre Newsletter <br><br>

                        <button class="btn btn-primary" type="button">Subscribe</button>

                </form>
            </div>

            <div class="display-block text-start">
                <h1 class="h1" style="font-size: 20px;">
                    123-456-7890 <br>

                    info@mysite.com <br>

                    500 Terry Francine St. San Francisco, CA 94158</h1> <br><br>

                <p class="p">Privacy Policy <br>Accessibility Statement <br>Shipping Policy <br>Return Policy
                    Terms & Conditions <br>Refund Policy

                </p> <br> <br>

                <p class="p">
                    © 2035 by A. Vanguard. Powered and secured by Wix </p>



            </div>
        </div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>