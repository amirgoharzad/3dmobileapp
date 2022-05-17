<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Json Sample</title>
</head>
<body>
    <div id="placeholder"></div>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        $.getJSON("../application/model/createJson.php" , function(data){
            console.log(data);

            let htmlCode = "<ul>";

            for (let i in data.users){
                htmlCode += "<li>" + data.users[i].fisrtName
                + " " + data.users[i].lastName + " |"
                + data.users[i].joined.month + " |"
                + data.users[i].joined.year + "</li>"
            }

            htmlCode += "</ul>";

            console.log(htmlCode);
            $("#placeholder").html(htmlCode);
        });
    </script>
</body>
</html>