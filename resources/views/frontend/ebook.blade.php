<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>

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



    <div class="container-fluid">
        <div class="row g-2">

            <div class="col-md-3">
                <img src="https://img.freepik.com/free-photo/realistic-closed-book-white-background_23-2151359532.jpg" class="image-fluid w-100" alt="kaushikchavda" style="height: 600px;">
            </div>

            <div class="col-md-3">
                <img src="https://static.india.com/wp-content/uploads/2023/02/BOOKS.jpg" class="image-fluid w-100" alt="kaushikchavda" style="height: 600px;">
            </div>

            <div class="col-md-3">
                <img src="https://i.pinimg.com/originals/9d/8b/b0/9d8bb0df052f1cedc767c5c2d3d45ad6.png" class="image-fluid w-100" alt="kaushikchavda" style="height: 600px;">
            </div>

            <div class="col-md-3">
                <img src="https://tse2.mm.bing.net/th/id/OIF.jto9C932fk0SjZIYNTpnww?pid=Api&P=0&h=180" class="image-fluid w-100" alt="kaushikchavda" style="height: 600px;">
            </div>

        </div>
    </div>

    <div class="container-fluid d-flex justify-content-between pb-md-5 pt-3" style="background-color: antiquewhite;">

        <div class="col-md-4">
            <p class="h1">Explore Unique <br>Narratives</p>
        </div>
        <div class="col-md-4">
            <p class="p">Welcome to A. Vanguard's Book Shop. <br>
                Let us guide you through a world of captivating <br>
                stories and literary wonders</p>
        </div>
        <div class="col-md-4">
            <button class="btn" style="color: white; background-color: black;"> shop now</button>
        </div>

    </div>


    <div class="container-fluid " style="background-color:pink; ">
        <marquee behavior="" direction="">Limited Time Offer -> Limited Time Offer -> Limited Time Offer</marquee>

    </div>

    <div class="container-fluid pb-5" style="background-color: antiquewhite;">

        <div class="container-fluid">
            <h1 class="h1 text-center"> ALL PRODUCTS</h1>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width: 18remp;">
                            <a href="" ><img src="https://cdn2.penguin.com.au/covers/400/9781529110487.jpg" style="height: 500px;" class="card-img-top" alt=""></a>
                            

                            <div class="card-body">
                                <h3 class="card-text text-center"> Spoken Word</h3>
                                <h3 class="card-text text-center">$27.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width: 18remp;">
                            <img src="https://tse4.mm.bing.net/th/id/OIP.ysFD0-pAp_PV4qnuakJFoQHaIX?pid=Api&P=0&h=180" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> Kahlo </h3>
                                <h3 class="card-text text-center">$50.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width: 18remp;">
                            <img src="https://tse1.mm.bing.net/th/id/OIP.6D2dZCmFb6a6vfG4FarmGAAAAA?pid=Api&P=0&h=180" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> Laps</h3>
                                <h3 class="card-text text-center">$40.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width:18remp;">
                            <img src="https://tse4.mm.bing.net/th/id/OIP.E2TqeaFepgmcVV6DQ2B01gHaKb?pid=Api&P=0&h=180" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> 99 Cheir</h3>
                                <h3 class="card-text text-center">$80.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>




    <div class="container-fluid">
        <div class="row vh-100">

            <!-- Left Side -->
            <div class="col-md-6 d-flex justify-content-center align-items-center  bg-opacity-25">

                <div class="card border-0 shadow p-5 text-center" style="max-width:500px;">



                    <h1 class="display-5 fw-bold">
                        Special Discounts <br> Await For You
                    </h1>

                    <p class="text-muted mt-3">
                        Explore our exclusive promotions and discounts.
                        Find your next favorite book at amazing prices.
                    </p>

                    <div class="mt-4">
                        <a href="#" class="btn btn-dark btn-lg rounded-pill px-4">
                            Discover Deals
                        </a>
                    </div>

                </div>

            </div>


            <div class="col-md-6 p-0">
                <img src="https://static.vecteezy.com/system/resources/previews/010/111/102/large_2x/person-man-holding-pen-write-plan-or-idea-on-book-with-computer-laptop-on-desk-free-photo.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="coffee">
            </div>

        </div>
    </div>








    <div class="container-fluid pb-5" style="background-color: antiquewhite;">

        <div class="container-fluid py-5">
            <h1 class="h1 text-center ">
                Featured Titles</h1>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width: 18remp;">
                            <img src="https://cdn2.penguin.com.au/covers/400/9781529110487.jpg" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> Spoken Word</h3>
                                <h3 class="card-text text-center">$27.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width: 18remp;">
                            <img src="https://tse4.mm.bing.net/th/id/OIP.ysFD0-pAp_PV4qnuakJFoQHaIX?pid=Api&P=0&h=180" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> Kahlo </h3>
                                <h3 class="card-text text-center">$50.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width: 18remp;">
                            <img src="https://tse1.mm.bing.net/th/id/OIP.6D2dZCmFb6a6vfG4FarmGAAAAA?pid=Api&P=0&h=180" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> Alps</h3>
                                <h3 class="card-text text-center">$40.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="container-fluid">
                        <div class="card" style="width:18remp;">
                            <img src="https://tse4.mm.bing.net/th/id/OIP.E2TqeaFepgmcVV6DQ2B01gHaKb?pid=Api&P=0&h=180" style="height: 500px;" class="card-img-top" alt="">

                            <div class="card-body">
                                <h3 class="card-text text-center"> 99 Cheir</h3>
                                <h3 class="card-text text-center">$80.00</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-dark rounded-pill px-4">
                    Load More
                </button>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row vh-100">


            <div class="col-md-6 p-0">
                <img src="https://i.pinimg.com/originals/72/7b/d6/727bd68688a10c2ef8e07c5b072c6004.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="coffee">
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-center  bg-opacity-25">

                <div class="card border-0 shadow p-5 text-center" style="max-width:500px;">



                    <h1 class="display-5 fw-bold">
                        Storytellers
                    </h1>

                    <p class="text-muted mt-3">
                        At A. Vanguard's Ecom Book Shop, we are dedicated <br>
                        to bringing the magic of literature to your fingertips. <br> Our curated selection of books ensures that every <br>
                        reader discovers a world of imagination.
                    </p>

                    <div class="mt-4">
                        <a href="#" class="btn btn-dark btn-lg rounded-pill px-4">
                            Learn More
                        </a>
                    </div>

                </div>

            </div>


        </div>
    </div>

    <div class="container-fluid" style="background-color: antiquewhite;">
        <h1 class="h1 text-center py-5">Glimpses</h1>
    </div>

    <div class="carousel slide " style="background-color: antiquewhite;" id="multiImageCarousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid g-2">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2024/05/cover-book-of-fourth-wing.jpg" style="height: 600px;" class="d-block w-100" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="https://images.squarespace-cdn.com/content/v1/552d7a52e4b0ede95614e9c8/1661801123197-8XUQM7ZVIAJI7QXXN82K/best%2Bnew%2Byork%2Bcity%2Bsecond%2Bhand%2Bbookstore%2Bpasserby%2Bmagazine%2B8.jpg" style="height: 600px;" class="d-block w-100" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="https://thegreenhubonline.com/wp-content/uploads/2024/05/Best-Second-Hand-Books-Online-Australia.jpg" style="height: 600px;" class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item no active">
                <div class="container-fluid">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <img src="https://thumbs.dreamstime.com/b/hand-holding-pen-mid-motion-as-writes-notebook-desk-surrounded-books-papers-scholarly-focused-setting-neutral-386647780.jpg?w=992" style="height: 600px;" class="d-block w-100" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="https://cdn.thenudge.com/wp-content/uploads/2022/10/haylon-yes-e1665064290485-768x512.jpg" style="height: 600px;" class="d-block w-100" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="https://en.sdg.ncku.edu.tw/userfiles/images/20240522064958453.jpg" style="height: 600px;" class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>


    <div class="container-fluid" style="background-color: antiquewhite;">
        <h1 class="h1 text-center">Reviews</h1>
    </div>
    <div class="container-fluid ">
        <div class="carousel slide" id="textcarousel" data-bs-ride="carousel" style="background-color: antiquewhite;">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid text-center p-5">
                        <h1>
                            "The perfect place to find my next favorite <br>
                            book. The recommendations are always spot on!"
                        </h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container-fluid text-center p-5">
                        <h1>
                            "Another amazing experience with books! <br>
                            Loved every recommendation!"
                        </h1>
                    </div>
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#textcarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#textcarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>


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