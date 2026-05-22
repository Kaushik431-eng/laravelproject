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
        <h1 class="h1 text-center">
            Building Literary Community</h1> <br>

        <p class="p text-center">Choose A. Vanguard's Ecom Book Shop for a unique reading experience that combines <br> cutting-edge technology with the love of storytelling. Our commitment to customer <br> satisfaction and literary enrichment sets us apart.</p>
        <br>
    </div>


    <!-- slide 1 -->
    <div class="container-fluid">
        <div class="row vh-80">

            <!-- Left Side -->
            <div class="col-md-6 d-flex justify-content-center align-items-center bg-opacity-25">

                <div class=" p-5 text-center">



                    <h1 class="display-5 fw-bold">
                        Expert <br> Curation
                    </h1>

                    <p class="text-muted mt-3">
                        Our expertly curated collection ensures that every book lover <br>
                        finds their perfect match. From bestsellers to hidden gems, we <br>
                        offer a diverse range of titles for all reading preferences
                    </p>



                </div>

            </div>


            <div class="col-md-6 p-0">
                <img src="https://www.shutterstock.com/image-photo/glasses-asian-woman-headphones-holding-600nw-2662149997.jpg" class="img-fluid w-100 h-80 object-fit-cover" alt="coffee">
            </div>

        </div>
    </div>


    <!-- slide 2 -->

    <div class="container-fluid">
        <div class="row vh-80">

            <!-- right Side -->



            <div class="col-md-6 p-0">
                <img src="https://img.freepik.com/premium-photo/professional-book-design-mockup_1046319-11053.jpg" class="img-fluid w-100 h-80 object-fit-cover" alt="coffee">
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-center  bg-opacity-25">

                <div class=" p-5 text-center">



                    <h1 class="display-5 fw-bold">
                       Customer <br> Satisfaction
                    </h1>

                    <p class="text-muted mt-3">
                     At A. Vanguard's Ecom Book Shop, customer satisfaction is at <br> 
                     the heart of everything we do. We strive to create an enriching <br>
                      and fulfilling experience for every reader, ensuring that each <br>
                       visit leaves you inspired and content.

                    </p>

                </div>

            </div>

        </div>
    </div>

    <!-- slide 3 -->

      <div class="container-fluid">
        <div class="row vh-80">

            <!-- Left Side -->
            <div class="col-md-6 d-flex justify-content-center align-items-center  bg-opacity-25">

                <div class=" p-5 text-center">



                    <h1 class="display-5 fw-bold">
                       Personalized <br> Recommendations
                    </h1>

                    <p class="text-muted mt-3">
                        Let our personalized recommendations guide you to your next <br>
                         literary adventure. Based on your reading habits and <br>
                          preferences, we suggest books that resonate with your <br> 
                          interests, ensuring a tailored reading experience.
                    </p>

                </div>

            </div>


            <div class="col-md-6 p-0">
                <img src="https://img.freepik.com/premium-photo/midsection-woman-writing-book_1048944-3474978.jpg" class="img-fluid w-100 h-80 object-fit-cover" alt="coffee">
            </div>

        </div>
    </div>



    <!-- our team section -->


    <div class="container-fluid py-5" style="background-color:antiquewhite">
        <h1 class="h1 text-center">Our Team</h1> <br>
        <p class="p text-center">Our dedicated team at A. Vanguard's Ecom Book Shop is committed to providing the best <br>
         reading experience for our customers. With a passion for literature and a drive for<br> 
        innovation, we work tirelessly to curate the perfect collection for your literary adventures.</p>
    </div>


    <!-- team image section 1 -->


    <div class="container-fluid" style="background-color: antiquewhite;">
        <div class="row text-center justify-content-center">

        <div class="col-md-4 mb-4">
            <img src="https://files.idyllic.app/files/static/4035133"  style="height: 300px; width:300px;" class="img-fluid rounded mb-3" alt="image1">
            <h4 class="h4">Kaushik Chavda</h4>
            <p class="p">Book Creater </p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://img.freepik.com/premium-photo/female-business-mockup-portrait-id-passport-isolated-transparent-background_1029469-238813.jpg"  style="height: 300px; width:300px;" class="img-fluid rounded mb-3" alt="image1">
            <h4 class="h4">Julia Garcia</h4>
            <p class="p">Book Creater </p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://i.pinimg.com/originals/3a/84/43/3a84438c147f5cc10f1453a3b1b05090.jpg?nii"  style="height: 300px; width:300px;" class="img-fluid rounded mb-3" alt="image1">
            <h4 class="h4">Aarav Patel</h4>
            <p class="p">Book Creater </p>
        </div>
        </div>
    </div>

    <!-- team image section 2 -->

     <div class="container-fluid py-5" style="background-color: antiquewhite;">
        <div class="row text-center justify-content-center">

        <div class="col-md-4 mb-4">
            <img src="https://easy-peasy.ai/cdn-cgi/image/quality=70,format=auto,width=500/https://media.easy-peasy.ai/27feb2bb-aeb4-4a83-9fb6-8f3f2a15885e/40cb4f8b-ecd4-4639-9be1-7608a36e3b67.png"  style="height: 300px; width:300px;" class="img-fluid rounded mb-3" alt="image1">
            <h4 class="h4">Zain Siddiqui</h4>
            <p class="p">Book Creater </p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://pixpretty-images.tenorshare.ai/article/inspiration/passport-photo-5.jpg" style="height: 300px; width:300px;" class="img-fluid rounded mb-3" alt="image1">
            <h4 class="h4">Kai Brown</h4>
            <p class="p">Book Creater </p>
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://imgcdn.stablediffusionweb.com/2025/7/30/8a514d3d-39cd-4cd6-bc32-de56b9b6eebf.jpg"  style="height: 300px; width:300px;" class="img-fluid rounded mb-3" alt="image1">
            <h4 class="h4">Zara Ali</h4>
            <p class="p">Book Creater </p>
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