<?php

class Model
{
    public $dbhandle;

    public function __construct()
    {
        $dsn = "sqlite:./db/sqlite.db";
        try {
            $this->dbhandle = new PDO($dsn, "user", "password", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            echo "couldn't connect to database";
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE MODEL_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT,
            x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT , modelDescription TEXT , brand TEXT)");
            return "model_3D table is successfully created inside sqlite.db file";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = null;
    }

    public function dbGetSingleData($id)
    {
        $stmt = $this->dbhandle->query("SELECT * FROM Model_3D where `Id` = $id");
        return $stmt->fetch();
    }


    public function dbUpdateModel($id, $req)
    {
        $sqlSegments = [];
        $sqlSegments[] = "UPDATE Model_3D SET ";
        foreach ($req as $key => $val) {
            $sqlSegments[] = "$key = '$val' ,";
        }
        $sql = implode(" ", $sqlSegments);
        $sql = rtrim($sql, ",");
        $sql .= "WHERE Id = '$id'";
        $this->dbhandle->exec($sql);
        return true;
    }

    public function dbGetBrand()
    {
        $sql = "SELECT Id , Name FROM Brands";
        $res = $this->dbhandle->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $columns = $this->dbhandle->query($sql)->fetchAll();
        return $columns;
    }


    public function dbAddNewModel($req)
    {
        $request = array_map(function ($item){
            return "'$item'";
        } , $req);
        $keys = array_keys($req);
        $first_half = "(". implode(",", $keys) . ")";
        $values = "(". implode(",", $request) . ")";
        $sql = "INSERT INTO MODEL_3D $first_half VALUES $values";
        $this->dbhandle->exec($sql);
        $req["Id"] = $this->dbhandle->lastInsertId();
        return $req;
    }


    public function dbInsertData()
    {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id , x3dModelTitle ,x3dCreationMethod , modelTitle , modelSubtitle ,modelDescription)
                            VALUES (1 , 'X3D Coke model' , 'string_2' , 'string_3' , 'string_4' , 'string_5');" .
                "INSERT INTO Model_3D (Id , x3dModelTitle ,x3dCreationMethod , modelTitle , modelSubtitle ,modelDescription)
                            VALUES (2 , 'X3D Sprite Model' , 'string_2' , 'string_3' , 'string_4' , 'string_5');" .
                "INSERT INTO Model_3D (Id , x3dModelTitle ,x3dCreationMethod , modelTitle , modelSubtitle ,modelDescription)
                            VALUES (3 , 'X3D Pepper Model' , 'string_2' , 'string_3' , 'string_4' , 'string_5');"
            );

            return 'X3D model data inserted successfully inside sqlite.db';

        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = null;
    }


    public function dbGetData()
    {
        try {
            $sql = "SELECT * FROM Model_3D";

            $stmt = $this->dbhandle->query($sql);

            $result = null;

            $i = 0;

            while ($data = $stmt->fetch()) {
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]["x3dCreationMethod"] = $data["x3dCreationMethod"];
                $result[$i]["modelTitle"] = $data["modelTitle"];
                $result[$i]["modelSubtitle"] = $data["modelSubtitle"];
                $result[$i]["modelDescription"] = $data["modelDescription"];
                $result[$i]["Id"] = $data["Id"];
                $i++;
            }
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }

        $this->dbhandle = null;
        return $result;
    }

    public function dbDeleteTable()
    {
        try {
            $this->dbhandle->exec("Drop Table Model_3D");
            return "the Model_3D table was deleted successfully";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = null;
    }


    public function dbDeleteModel($id)
    {
        $sql = "DELETE FROM MODEL_3D WHERE `Id` = $id";
        $this->dbhandle->exec($sql);
        $this->dbhandle = null;
        return true;
    }

    public function model3D_info()
    {
        return [
            "model1" => "Coke can 3D image 1",
            "model2" => "Coke can 3D image 2",
            "model3" => "Sprite bottle 3D image 1",
            "model4" => "Sprite bottle 3D image 2",
            "model5" => "Dr Pepper cup 3D image 1",
            "model6" => "Dr Pepper cup 3D image 2"
        ];
    }
}