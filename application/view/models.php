<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>models</title>
    <link rel='stylesheet' type='text/css' href='<?= base_url ?>application/styles/bootstrap.min.css'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url ?>application/styles/style.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?= base_url ?>js/restyle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://www.x3dom.org/x3dom/release/x3dom.js'></script>
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
                <!--          font used from  https://fontswan.com/coca-cola-font/#:~:text=About%20Coca%20Cola%20Font,the%20trademark%20of%20Coca%2DCola.            >-->
                    <h1>
                        CocaCola
                    </h1>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url ?>index.php/aboutPage">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        <a id="cokeButton" class="nav-link active" href="#">CocaColaZero</a>
    </li>
    <li class="nav-item">
        <a id="ziroButton" class="nav-link" style="background-color: #EB5353; color: white;" href="#">Coke</a>
    </li>
    <li class="nav-item">
        <a id="simpleCokeButton" class="nav-link" style="background-color: #F9D923; color: white;" href="#">CocaCola</a>
    </li>
    <li class="nav-item">
        <a id="spriteButton" class="nav-link" style="background-color: #36AE7C; color: white;" href="#">Sprite</a>
    </li>
    <li class="nav-item">
        <a id="pepperButton" class="nav-link" style="background-color: #187498; color: white;" href="#">DrPopper</a>
    </li>
</ul>

<div id="coke" class="row">
    <div id="coke" class="col-xl-8 col-md-12">
        <x3d id="cokeModel" width="100%" height="500px">
            <scene>
                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?= base_url ?>assets/x3d/coke.x3d"></inline>
                <!--                <img class="card-img-top" src="-->
                <? //= base_url ?><!--assets/images/landing_assets/coca1.jpg" alt="logo"/>-->
            </scene>
        </x3d>
    </div>
    <div class="col-xl-4 col-md-12" style="border: 2px solid #EB5353">
        <h3>Camera views</h3>
        <row>
            <col class="col-xl-6">
            <button onclick="cameraFront();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                front
            </button>
            </col>
            <col class="col-xl-6">
            <button onclick="cameraLeft();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                left
            </button>
            </col>
        </row>
        <row>
            <col class="col-xl-6">
            <button onclick="cameraBottom();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                bottom
            </button>
            </col>
            <col class="col-xl-6">
            <button onclick="cameraTop(); " style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                top
            </button>
            </col>
        </row>
        <row>
            <col class="col-xl-6">
            <button onclick="cameraBack();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                back
            </button>
            </col>
            <col class="col-xl-6">
            <button onclick="cameraRight();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                right
            </button>
            </col>
        </row>
        <br>
        <br>
        <br>
        <h3>
            WireFrame
        </h3>
        <row>
            <col>
            <button onclick="cokeWireframe();" style="background-color: #EB5353; color: white; width: 200px"
                    class="m-1">
                wireframe
            </button>
            <col/>
        </row>
        <br>
        <br>
                <div id="coke_model_title">

                </div>
                <div id="coke_model_description"></div>
    </div>
</div>

<div id="ziro" class="row">
    <div id="ziro" class="col-xl-8 col-md-12">
        <x3d id="lightCokeFrame" width="100%" height="500px">
            <scene>
                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?= base_url ?>assets/x3d/light_coke.x3d"></inline>
            </scene>
        </x3d>
    </div>
    <div class="col-xl-4 col-md-12" style="border: 2px solid #EB5353">
        <h3>Camera views</h3>
        <row>
            <col class="col-xl-6">
            <button onclick="simpleCokeCameraFront();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                front
            </button>
            </col>
            <col class="col-xl-6">
            <button onclick="simpleCokeCameraLeft();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                left
            </button>
            </col>
        </row>
        <row>
            <col class="col-xl-6">
            <button onclick="simpleCokeCameraBottom();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                bottom
            </button>
            </col>
            <col class="col-xl-6">
            <button onclick="simpleCokeCameraTop(); " style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                top
            </button>
            </col>
        </row>
        <row>
            <col class="col-xl-6">
            <button onclick="simpleCokeCameraBack();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                back
            </button>
            </col>
            <col class="col-xl-6">
            <button onclick="simpleCokeCameraRight();" style="background-color: #EB5353; color: white; width: 200px" class="m-1">
                <i class="fa-solid fa-camera"></i>
                right
            </button>
            </col>
        </row>
        <br>
        <br>
        <br>
        <h3>
            WireFrame
        </h3>
        <row>
            <col>
            <button onclick="lightCokeFrame();" style="background-color: #EB5353; color: white; width: 200px"
                    class="m-1">
                wireframe
            </button>
            <col/>
        </row>
        <br>
        <br>
        <div id="simple_coke_model_title">

        </div>
        <div id="simple_coke_model_description"></div>
        <br>
        <br>
    </div>
</div>

<div id="simpleCoke" class="row">
    <div class="col-xl-8 col-md-12">
        <x3d id="simpleCokeFrame" width="100%" height="500px">
            <scene>
                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?= base_url ?>assets/x3d/simple_coke.x3d"></inline>
            </scene>
        </x3d>
    </div>
    <div class="col-xl-4 col-md-12" style="border: 2px solid #EB5353">
        <h3>wireframe</h3>
        <row>
            <col class="col-xl-6">
            <button onclick="simpleCokeFrame();" style="background-color: #EB5353; color: white; width: 200px">
                wireframe
            </button>
            </col>
        </row>
        <br>
        <br>
        <h3>
            CocaCola 3d model
        </h3>
        <br>
        <h5>
            This X3D model of the simple cocaCola can has been created in Cinema 4D, exported to VRML97 and converted
            using the Blender to X3D for display online.
        </h5>
        <br>
        <br>
    </div>
</div>
<div id="sprite" class="row">
    <div class="col-xl-8 col-md-12">
        <x3d id="spriteFrame" width="100%" height="500px">\
            <scene>
                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?= base_url ?>assets/x3d/sprite.x3d"></inline>
            </scene>
        </x3d>
    </div>
    <div class="col-xl-4 col-md-12" style="border: 2px solid #EB5353">
        <br>
        <br>
        <br>
        <h3>
            WireFrame
        </h3>
        <row>
            <col>
            <button onclick="spriteFrame();" style="background-color: #EB5353; color: white; width: 200px"
                    class="m-1">
                wireframe
            </button>
            <col/>
        </row>
        <br>
        <br>
        <h3>
            sprite 3d model
        </h3>
        <br>
        <h5>
            This X3D model of the Sprite Bottle has been created in Cinema 4D, exported to VRML97 and converted using the
            Blender to X3D for display online.
        </h5>
        <br>
        <br>
        <!--        <div id="coke_model_title">-->
        <!--            -->
        <!--        </div>-->
        <!--        <div id="coke_model_description"></div>-->
    </div>
</div>

<div id="pepper" class="row">
    <div class="col-xl-8 col-md-12">
        <x3d id="simpleCokeFrame" width="100%" height="500px">
            <scene>
                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?= base_url ?>assets/x3d/pepper.x3d"></inline>
            </scene>
        </x3d>
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
