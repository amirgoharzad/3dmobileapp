<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test View - Flicker Web Service</title>
</head>
<body>
<h1>Flicker Web Service</h1>
<h2>Search on Flicker Fe2qed</h2>
<div class="textInput">
    <input type="text" value="Sprite" id="txt">
</div>
<div class="btn">
    <button onauxclick="loadImages()">Search</button>
</div>
<div class="box">
    <h1 id="title"></h1>
    <h2 id="link"></h2>
    <p id="description"></p>
    <p id="modified"></p>
    <p id="generator"></p>
    <div id="images"></div>
</div>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="../application/js/flickerService.js"></script>
</body>
</html>
