<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

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


    <div class="container-fluid" style="background-color: antiquewhite;"><br>
        <h1 class="h1 text-center" style="font-size: 70px;">

            Frequently Asked Questions</h1> <br>

        <br>
    </div>

    <!-- slide 1 -->

    <div class="container-fluid d-flex justify-content-center   " style="background-color: antiquewhite; gap: 20px;">
        <div class="row container-fluid py-5   ">
            <div class="col-md-4">
                <h1 class="h1">Returns and <br>
                    Exchanges</h1>
            </div>
            <div class="col-md-4">
                <h1 class="p">index</h1>
            </div>
            <div class="col-md-4">
                <p class="p">
                    Our standard shipping time is within 2-5 <br>
                    business days. Express shipping options are <br>
                    available for urgent orders.</p>
            </div>
            <hr>
        </div>
    </div>

    <!-- slide 2 -->

    <div class="container-fluid d-flex justify-content-center py-3  " style="background-color: antiquewhite; gap: 20px;">
        <div class="row container-fluid py-5  ">
            <div class="col-md-4">
                <h1 class="h1">Payment <br> Methods</h1>
            </div>
            <div class="col-md-4">
                <h1 class="p">index</h1>
            </div>
            <div class="col-md-4">
                <p class="p">
                    Our standard shipping time is within 2-5 <br>
                    business days. Express shipping options are <br>
                    available for urgent orders.</p>
            </div>
            <hr>
        </div>
    </div>

    <!-- slide 3 -->

    <div class="container-fluid d-flex justify-content-center py-5  " style="background-color: antiquewhite; gap: 20px;">
        <div class="row container-fluid py-5  ">
            <div class="col-md-4 ">
                <h1 class="h1">Shipping</h1>
            </div>
            <div class="col-md-4 ">
                <h1 class="p">index</h1>
            </div>
            <div class="col-md-4">
                <p class="p">
                    Our standard shipping time is within 2-5 <br>
                    business days. Express shipping options are <br>
                    available for urgent orders.</p>
            </div>
        </div>
    </div>


    <div class="container text-center py-5">
        <h1 class="h1" style="font-size: 70px;">
            Have More Question? <br>
            Get In Touch
        </h1>

        <p class="p" style="font-size: 20px;">Reach out to us for any inquiries or feedback. We are here <br>
            to assist you in every step of your literary journey. </p>
    </div>
    <div class="container d-flex justify-content-center align-items-center vh-100 ">

        <div class="col-md-6 col-lg-5">

            <form action="" class="">
                <label for="" class="form-label">First Name *</label>
                <input type="text" class="form-control rounded-pill py-3" placeholder="enter youre first name" name="" id="">

                <label for="" class="form-label">Last Name</label>
                <input type="text" class="form-control rounded-pill py-3" placeholder="ender youre last name" name="" id="">

                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control rounded-pill py-3" placeholder="enter youre email" name="" id="">

                <label for="" class="form-label">Phone</label>
                <input type="text" class="form-control rounded-pill py-3" placeholder="enter your number" name="" id="">

                <label for="" class="form-label">Long Answer</label>
                <textarea name="" class="form-control rounded-pill py-3" id=""></textarea>

                <div class="d-grid">
                    <button type="submit" class="btn btn-dark rounded-pill py-3">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>


      <!-- last section -->

    <hr>
    <div class="container-fluid " style="background-color: antiquewhite;">
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