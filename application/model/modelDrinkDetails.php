<?php
include "../../debug/ChromePhp.php";

ChromePhp::log("modelDrinkDetails.php: Hello world!");
ChromePhp::log($_SERVER);

ChromePhp::warn("modelDrinkDetails.php: get brand details");
$brandName = $_GET["brand"];

ChromePhp::warn("modelDrinkDetails.php: Make a connection to sqlite.db");

try {
    $dbhandle = new PDO("sqlite:../../db/sqlite.db" , "user" , "password" ,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);

    ChromePhp::warn("modelDrinkDetails.php: Connected to sqlite.db");

    ChromePhp::warn("modelDrinkDetails.php: Prepare PDO sql statement");
    $sql = "SELECT m.x3dModelTitle , m.x3dCreationMethod , m.modelTitle , m.modelSubtitle , m.modelDescription , b.Name as brand FROM Model_3D as m inner join Brands as b on m.brand = b.Id where b.Name = '$brandName'";

    ChromePhp::warn("modelDrinkDetails.php: PDO query() SQL statement");
    $stmt = $dbhandle->query($sql);

    ChromePhp::warn($stmt);

    $result = null;

    $i = 0;
    while ($data = $stmt->fetch()){
        ChromePhp::warn("modelDrinkDetails.php: PDO fetch() data from sqlite.db");
        ChromePhp::warn($data);

        $result[$i]["brand"] = $data["brand"];
        $result[$i]["x3dModelTitle"] = $data["x3dModelTitle"];
        $result[$i]["x3dCreationMethod"] = $data["x3dCreationMethod"];
        $result[$i]["modelTitle"] = $data["modelTitle"];
        $result[$i]["modelSubtitle"] = $data["modelSubtitle"];
        $result[$i]["modelDescription"] = $data["modelDescription"];

        $i++;
        ChromePhp::warn("modelDrinkDetails.php: Here is the sqlite.db data");
        ChromePhp::warn($data);
    }
}catch (PDOException $e){
    ChromePhp::warn("modelDrinkDetails.php: Code error on server?");
    print new Exception($e->getMessage());
}

$dbhandle = null;
ChromePhp::warn("modelDrinkDetails.php: echo result to front end in json packet");
ChromePhp::warn($result);
echo json_encode($result);
