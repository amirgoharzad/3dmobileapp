<!--used library: Jquery-->
<!--reference: https://jquery.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Drinks Image View</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
    <h1 style="margin: 5px; padding: 10px;">Choose a drink brand to see more details</h1>
    <b style="margin: 5px; padding: 10px;">Select a drink brand name: </b>
    <form style="margin: 5px; padding: 10px" action="">
        <select name="" id="select">
            <?php
            for ($i=0; $i < count($data); $i++)
                echo '<option value="'.$data[$i] .'">' . $data[$i] . '</option>';


            ?>
        </select>
    </form>

    <div id="placeholder" style="margin: 5px; padding: 10px;">Insert data here</div>

    <script>
        $(document).ready(function(){
            $("#select").change(function(){
                let model = $(this).val();
                console.log("Drink Model:" , model , "has been selected");
                let str = "";
                $("select option:selected").each(function(){
                    str += "<div><b> Drinks Brand: </b> " + "</div>" + "</br>"
                    console.log("HTML Title is: " ,  $(this).text());
                    let selection = $(this).text();
                    console.log("selected Brand model: " , selection);
                    let brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
                    console.log('URL to php Model is :' , brandUrl);
                    let debugUrl = "../application/model/phpDebug.php";
                    $.getJSON(brandUrl)
                    .done(function(json){
                        console.log("Web service response for  drink brand data: " , json)

                        let str = '<div style="width: 90%; float: left; margin: 5px; border: 1px solid; ">'
                        for (let i=0; i < json.length; i++){
                            str += "<div style='float: left; color: blue; margin: 5px; border: 1px solid red; padding: 10px;'>"+ json[i].brand + "</div>"
                            str += "<div style='float: left; color: blue; margin: 5px; border: 1px solid red; padding: 10px;'>"+ json[i].x3dModelTitle + "</div>"
                            str += "<div style='float: left; color: blue; margin: 5px; border: 1px solid red; padding: 10px;'>"+ json[i].x3dCreationMethod + "</div>"
                            str += "<div style='float: left; color: blue; margin: 5px; border: 1px solid red; padding: 10px;'>"+ json[i].modelTitle + "</div>"
                            str += "<div style='float: left; color: blue; margin: 5px; border: 1px solid red; padding: 10px;'>"+ json[i].modelSubtitle + "</div>"
                            str += "<div style='float: left; color: blue; margin: 5px; border: 1px solid red; padding: 10px;'>"+ json[i].modelDescription + "</div>"

                            str += "<div style='width: 30%; float: left; margin: 5px; border: 1px solid green; border-radius: 10px;'>" +
                                "<img style='width: 300px;' src='../assets/images/gallery_images/" + json[i].brand + ".jpg'></img>"
                        }
                        str += "</div>";
                        document.getElementById("placeholder").innerHTML = str;
                    })
                    .fail(function(){
                        console.log("viewDrinks js handler: Server returned an Error, trap this in your php server code");
                    })
                })
            })
        })
    </script>
</body>
</html>