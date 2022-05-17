<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view edit model</title>
    <style>
        .box {
            margin: 10px;
            padding: 10px;
        }
        label{
            font-weight: bolder;
            font-size: large;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="apiupdatemodel?id=<?= $model["Id"] ?>"  method="post" class="form-group">
        <div class="box">
            <label for="modelTitle">model title</label>
            <input type="text" id="modelTitle" name="modelTitle" value="<?= $model["modelTitle"] ?>">
        </div>
        <div class="box">
            <label for="x3dModelTitle">x3dModelTitle</label>
            <input type="text" id="x3dModelTitle" name="x3dModelTitle" value="<?= $model["x3dModelTitle"] ?>">
        </div>
        <div class="box">
            <label for="x3dCreationMethod">x3dCreationMethod</label>
            <input type="text" name="x3dCreationMethod" value="<?= $model["x3dCreationMethod"] ?>">
        </div>
        <div class="box">
            <label for="modelSubtitle">modelSubtitle</label>
            <input type="text" name="modelSubtitle" id="modelSubtitle" value="<?=  $model["modelSubtitle"] ?>">
        </div>
        <div class="box">
            <label for="modelDescription">modelDescription</label>
            <input type="text" id="modelDescription" name="modelDescription" value="<?= $model["modelDescription"] ?>">
        </div>
        <div class="box">
            <label for="brand">brand</label>
            <select name="brand" id="brand">
            <?php foreach ($brands as $brand) : ?>
                <option value="<?= $brand["Id"] ?>" <?php if ($model["brand"] == $brand["Id"]) echo "selected" ?>><?= $brand["Name"] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="box">
            <button type="submit">Save changes</button>
        </div>
    </form>
</div>
</body>
</html>
