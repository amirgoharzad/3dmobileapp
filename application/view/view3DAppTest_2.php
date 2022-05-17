<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3d application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='application/styles/bootstrap.css'/>
    <link href="application/styles/style.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/restyle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="application/js/createGallery.js"></script>
    <script type="text/javascript" src="application/js/dataSource.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    <script src="application/js/dataSource.js"></script>
    <script src="js/3dFuncations.js"></script>
    <script src="https://kit.fontawesome.com/64f3a5730a.js" crossorigin="anonymous"></script>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</head>
<body id="bodyColor">
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
                    <a class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php/modelsPage">Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php/aboutPage">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="tenor-gif-embed" data-postid="19618920" data-share-method="host" data-aspect-ratio="1.53846"
     data-width="100%"><a href="https://tenor.com/view/kerst-en-nieuwjaar-gif-19618920">Kerst En Nieuwjaar
        GIF</a>from <a href="https://tenor.com/search/kerst+en+nieuwjaar-gifs">Kerst En Nieuwjaar GIFs</a>
</div>
<div class="container" id="body">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 25rem; min-height: 651px">
                <a
                        data-fancybox
                        data-caption="Coca Cola 3d model"
                        href="./assets/images/view_images/coke-view.png"
                >
                    <img class="card-img-top" src="assets/images/landing_assets/coca1.jpg" alt="logo"/>
                </a>
                <div class="card-body">
                    <div id="coke_card_title"></div>
                    <div id="coke_card_description"></div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 25rem; min-height: 651px">
                <a
                        data-fancybox
                        data-caption="light Coca Cola 3d model"
                        href="./assets/images/view_images/light-view.png"
                >
                    <img class="card-img-top" src="assets/images/landing_assets/coca2.jpg" alt="logo"/>
                </a>
                <div class="card-body">
                    <div id="coke_bottle_title"></div>
                    <div id="coke_bottle_description"></div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 25rem; min-height: 651px">
                <a
                        data-fancybox
                        data-caption="simple Coca Cola 3d model"
                        href="./assets/images/view_images/simple-coke-view.png"
                >
                    <img class="card-img-top" src="assets/images/landing_assets/coca3.jpg" alt="logo"/>
                </a>
                <div class="card-body">
                    <div id="coke_board_title"></div>
                    <div id="coke_board_description"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div style="width: 100%; display: flex; justify-content: center;">
    <div style="border: 5px dashed yellow; padding: 10px">
        <h1 style="color: black">
            Gallery
        </h1>
    </div>
</div>
<br>
<br>
<br>

<div class="container">
    <div style="width: 100%; display: flex; flex-direction: row; justify-content: center">
        <div class="thumbnail">
            <a
                    data-fancybox
                    data-caption="Coca-Cola Classic"
                    href="assets/images/gallery_images/cokeGallery.png"
            >
                <img src="assets/images/gallery_images/cokeGallery.png" alt="gallery" style="width:60%">
                <a/>
        </div>
        <div class="thumbnail">
            <a
                    data-fancybox
                    data-caption="Diet Coke"
                    href="assets/images/gallery_images/dietGallery.png"
            >
                <img src="assets/images/gallery_images/dietGallery.png" alt="gallery" style="width:60%">
                <a/>
        </div>
    </div>
</div>

<div class="container">
    <div style="width: 100%; display: flex; flex-direction: row; justify-content: center">
        <div class="thumbnail">
            <a
                    data-fancybox
                    data-caption="Coca-Cola Classic Vanilla"
                    href="assets/images/gallery_images/vanilaGallery.png"
            >
                <img src="assets/images/gallery_images/vanilaGallery.png" alt="gallery" style="width:60%">
            </a>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail" style="margin-left: 10px">
                <a
                        data-fancybox
                        data-caption="Sprite"
                        href="assets/images/gallery_images/spriteGallery.png"
                >
                    <img src="assets/images/gallery_images/spriteGallery.png" alt="gallery" style="width:60%">
                </a>
            </div>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="thumbnail" style="margin-left: 10px">
                <a
                        data-fancybox
                        data-caption="Sprite No Sugar"
                        href="assets/images/gallery_images/noSugerGallery.png"
                >
                    <img src="assets/images/gallery_images/noSugerGallery.png" alt="gallery" style="width:60%">
                </a>
            </div>
        </div>
    </div>
</div>
<footer class="mt-auto" id="footerColor">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        244149   - Mobile 3D Applications 2022
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
