<!--used library: Bootstrap-->
<!--reference: https://getbootstrap.com-->
<!--used library: jquery-->
<!--reference: https://jquery.com-->
<!--Date : '2022-05-15T11:15:17.480Z'-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>X3D Model Data</title>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h1 {
            color: red;
            margin-left: 5px;
        }

        h2 {
            color: blue;
            margin: 5px;
        }

        p {
            color: green;
            margin-left: 5px;
        }

        .imageBox {
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }

        .boxModel {
            border: 3px solid rgba(0, 1, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            width: auto;
            height: auto;
        }

        .boxText {
            border: 1px solid rgba(1, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            width: 220px;
            height: auto;
        }
    </style>
</head>
<body>
<h1>Model 3D Data returned form the SQLite database</h1>

<br>
<div class="form-group row">
    <div class="col-md-4">
        <button class="btn btn-block btn-success" id="add-new">Add new Item</button>
    </div>
</div>
<div id="container">

    <?php for ($i = 0; $i < count($data); $i++) { ?>
        <div class="boxModel" data-id="<?= $data[$i]["Id"] ?>">
            <div class="boxText">
                <h2 data-name="x3dModelTitle"><?= $data[$i]["x3dModelTitle"] ?></h2>
            </div>
            <div class="boxText">
                <h2 data-name="x3dCreationMethod"><?= $data[$i]["x3dCreationMethod"] ?></h2>
            </div>
            <div class="boxText">
                <h2 data-name="modelTitle"><?= $data[$i]["modelTitle"] ?></h2>
            </div>
            <div class="boxText">
                <h2 data-name="modelSubtitle"><?= $data[$i]["modelSubtitle"] ?></h2>
            </div>
            <div class="boxText">
                <h2 data-name="modelDescription"><?= $data[$i]["modelDescription"] ?></h2>
            </div>
            <div class="boxText">
                <button type="button" data-action="edit" data-id="<?= $data[$i]["Id"] ?>" class="btn btn-primary"
                        id="edit-btn-<?= $data[$i]["Id"] ?>">
                    Edit the Model
                </button>
                <button class="btn btn-danger" data-action="remove" data-id="<?= $data[$i]["Id"] ?>">DELETE</button>

            </div>
        </div>

    <?php } ?>
</div>

<div class="modal" tabindex="-1" role="dialog" id="mymodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Model</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update-form" action="">

                    <div class="form-group">
                        <label for="modelTitle">model title</label>
                        <input type="text" class="form-control" id="modelTitle" name="modelTitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="x3dModelTitle">x3dModelTitle</label>
                        <input type="text" class="form-control" id="x3dModelTitle" name="x3dModelTitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="x3dCreationMethod">x3dCreationMethod</label>
                        <input type="text" class="form-control" id="x3dCreationMethod" name="x3dCreationMethod"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="modelSubtitle">modelSubtitle</label>
                        <input type="text" class="form-control" name="modelSubtitle" id="modelSubtitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="modelDescription">modelDescription</label>
                        <textarea name="modelDescription" class="form-control" id="modelDescription" cols="30"
                                  rows="10"></textarea>
                        <!--                    <input type="text" class="form-control" id="modelDescription" name="modelDescription" value="">-->
                    </div>
                    <div class="form-group">
                        <label for="brand">brand</label>
                        <select name="brand" id="brand" class="form-control">
                            <?php foreach ($brands as $brand) : ?>
                                <option value="<?= $brand["Id"] ?>"><?= $brand["Name"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save-btn" data-id="" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!--add new Item modal-->
<div class="modal" tabindex="-1" role="dialog" id="addmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-form" action="">

                    <div class="form-group">
                        <label for="">model title</label>
                        <input type="text" class="form-control" name="modelTitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="">x3dModelTitle</label>
                        <input type="text" class="form-control" name="x3dModelTitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="x3dCreationMethod">x3dCreationMethod</label>
                        <input type="text" class="form-control" name="x3dCreationMethod" value="">
                    </div>
                    <div class="form-group">
                        <label for="">modelSubtitle</label>
                        <input type="text" class="form-control" name="modelSubtitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="">modelDescription</label>
                        <textarea name="modelDescription" class="form-control" cols="30"
                                  rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="brand">brand</label>
                        <select name="brand" id="brand" class="form-control">
                            <?php foreach ($brands as $brand) : ?>
                                <option value="<?= $brand["Id"] ?>"><?= $brand["Name"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="add-btn" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-latest.js"></script>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    function addListeners() {
        $("button[data-action='edit']").click(function () {
            let id = $(this).attr("data-id");
            $("#save-btn").attr("data-id", id);
            $.ajax({
                type: 'GET',
                url: '<?= base_url?>index.php/apigetsingle?id=' + id,
                // data : formData,
                // processData : false,
                contentType: "application/json",
                success: function (data) {
                    let keys = Object.keys(data);

                    for (const item of keys) {
                        $(`#${item}`).val(data[item])
                    }

                    $("#mymodal").modal();

                }
            })

        })
        $("button[data-action='remove']").click(function () {
            let id = $(this).attr("data-id");
            $.ajax({
                type: 'GET',
                url: '<?= base_url?>index.php/apideletemodel?id=' + id,
                // data : formData,
                // processData : false,
                success: function (data) {
                    $(`.boxModel[data-id="${id}"]`).remove();
                    alert("deleted successfully");
                    console.log(data);
                }
            })
        })
    }

    addListeners();

    $("#save-btn").click(function () {
        let data = new FormData($("#update-form")[0]);
        let id = $(this).attr("data-id");
        $.ajax({
            type: 'POST',
            url: '<?= base_url?>index.php/apiupdatemodel?id=' + id,
            data: data,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                for (const [key, value] of Object.entries(data)) {

                    $(`div[data-id="${id}"] >> h2[data-name="${key}"]`).html(value);
                }
                alert("updated successfully");
                $("#mymodal").modal("hide");
            }
        })
    });

    $("#add-new").click(function () {
        $("#addmodal").modal();
    })

    $("#add-btn").click(function () {
        let data = new FormData($("#add-form")[0]);
        $.ajax({
            type: 'POST',
            url: '<?= base_url?>index.php/apiaddmodel',
            data: data,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                $(".boxModel").last().clone().appendTo("#container");
                $(".boxModel").last().attr("data-id", data.Id);
                for (const [key, value] of Object.entries(data)) {

                    $(`div[data-id="${data.Id}"] >> h2[data-name="${key}"]`).html(value);
                }
                $(`div[data-id="${data.Id}"] >> button[data-action="edit"]`).attr("id", `edit-btn-${data.Id}`).attr("data-id", data.Id);
                $(`div[data-id="${data.Id}"] >> button[data-action="remove"]`).attr("data-id", data.Id);
                addListeners();
                $("#addmodal").modal("hide");
                alert("was added to database successfully");
            }
        })
    })
</script>

</body>
</html>
