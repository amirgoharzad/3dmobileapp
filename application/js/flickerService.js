$(document).ready(function ( ){
    loadImages();
});

function loadImages()
{
    let txt = document.getElementById("txt").value;
    console.log(txt);

    let urlFlicker = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=";

    $.getJSON(urlFlicker , {tags: txt, tagmode: "all" ,format: "json" }, function(data){
        console.log(data);

        $("#title").html(data.title);
        $("#link").html(data.link);
        $("#description").html(data.description);
        $("#modified").html(data.modified);
        $("#generator").html(data.generator);

        let htmlCode = "";
        $.each(data.itms, function(i , item){
            htmlCode += '<div class="imgBox">' + '<div><h3> Title: '+item.title + '</h3></div>';
            htmlCode += '<img src="' + item.media.m + '"/>';
            htmlCode += '<div><h4> Published: ' + item.published + '</h4></div></div>';

            if (i == 3) return false;
        });

        $("#images").html(htmlCode);
    });

}