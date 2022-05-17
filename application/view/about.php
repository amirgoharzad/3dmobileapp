<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>about</title>
    <link rel='stylesheet' type='text/css' href='<?= base_url ?>application/styles/bootstrap.min.css'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link href="<?= base_url ?>application/styles/style.css" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?= base_url ?>js/restyle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <script type="text/javascript" src="<?= base_url ?>application/js/createGallery.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    <script src="<?= base_url ?>application/js/dataSource.js"></script>
    <script src="<?= base_url ?>js/3dFuncations.js"></script>
    <script src="https://kit.fontawesome.com/64f3a5730a.js" crossorigin="anonymous"></script>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</head>
<body id="bodyColor" class="d-flex flex-column min-vh-100">


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <div class="cocaLogo">
                    <h1>
                        CocaCola
                    </h1>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url ?>index.php/modelsPage">Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="aboutContainer">
    <h3>
        Student Name: Amir Hossein Goharzad
        <br>
        Candidate Number: 244149
        <br>
        Email: ag673@sussex.ac.uk
        <br>
        Convenor: Prof Martin White
        <br>
        Email: M.White@sussex.ac.uk
        <br>
        Tutor: Dr Imran Khan
        <br>
        Email: Imran.Khan@sussex.ac.uk
    </h3>
    <h1 style="color: #b6effb">Statement of Originality</h1>
    <h3>
        These web pages are submitted as part requirement for the degree of MSc
        <br>
        Advanced Computer Science at the
        University of Sussex. They are the product of my own
        <br>
        labour except where indicated in the web page content.
        These web pages or contents may be freely
        <br>
        copied and distributed, provided the source is acknowledged.
    </h3>
    <br>
    <h1 style="color: #b6effb">References</h1>
    <h3>
        Fonts I used in this project :
        <br>
        https://fonts.google.com/specimen/Koulen#standard-styles
        <br>
        Pictures & Contents I used in this project:
        https://unsplash.com/
        https://www.coca-colacompany.com/au/brands
        <br>
        Bootstarp :
        https://getbootstrap.com/
        <br>
        X3Ddom :
        https://www.x3dom.org/
        <br>
        Coca-cola GIF I used in the Home page:
        https://tenor.com/view/kerst-en-nieuwjaar-gif-19618920
        <br>
        FancyBox :     https://fancyapps.com/docs/ui/fancybox/
        Font awesome :    https://fontawesome.com/
        https://canvas.sussex.ac.uk/courses/16964/pages/laboratory-7-mvc-framework-jquery-ajax-php-sqlite-dot-dot-dot?module_item_id=1053747
        https://canvas.sussex.ac.uk/courses/16964/pages/laboratory-8-mvc-framework-continued-dot-dot-dot?module_item_id=1053750
        Lab 5 & 9 Samples I got inspired:
        https://users.sussex.ac
    </h3>

    <h1 style="color: #b6effb">About My Project</h1>
    <h3>
        ALL THE X3D MODELS HAVE BEEN CREATED IN CINEMA 4D, EXPORTED TO VRML97 AND CONVERTED USING THE BLENDER TO X3D FOR
        DISPLAY ONLINE. ALSO, THIS PROJECT USED BOOTSTRAP. Moreover, this project implemented PHP beyond the labs
        implemented CRUD (Create, Read (ReadList & Single), Update, and Delete) in Model 3D Table, and made a relational
        database. Also, the open-source codes used in this project are declared in my code.
    </h3>
</div>
<footer class="mt-auto" id="footerColor">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        244149 - Mobile 3D Applications 2022
        <a href="javascript:changeLook()">Restyle</a> | <a
                href="javascript:changeBack()">Reset</a>
        <a href="https://twitter.com/COCACOLAAU" style="margin-left: 10px">
            <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/cocacolaau" style="margin-left: 10px">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://github.com/amirgoharzad/mobile3dapp" style="margin-left: 10px" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
    </div>
</footer>
</body>
</html>
