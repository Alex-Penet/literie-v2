<?php
if (!empty($_POST)) {
    $name = trim(strip_tags($_POST["name"]));

    $errors = [];

    if (empty($name)) {
        $errors["name"] = "Le nom de ce matelat est obligatoire";
    }

    if(isset($_FILES["picture"]) && $_FILES["picture"]["error"] === UPLOAD_ERR_OK){

        $fileTmpPath = $_FILES["picture"]["tmp_name"];
        $fileName = $_FILES["picture"]["name"];
        $fileType = $_FILES["picture"]["type"];

        $fileNameArray = explode(".", $fileName);
        $fileExtension = end($fileNameArray);

        $newFileName = md5($fileName.time()).".". $fileExtension;

        $fileDestPath =DIR_MATELATS."{$newFileName}";

        $allowedTypes = array("image/jpeg", "image/png", "image/webp");

        if(in_array($fileType,$allowedTypes)){
            move_uploaded_file($fileTmpPath, $fileDestPath);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="matelas">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form">
                <label for="inputname"></label>
                <input type="text" id="inputname" name="name" value="<?= isset($name) ? $name : "" ?>">
            </div>

            <?php
            if (isset($errors["name"])) {
            ?>
                <div class="errors">
                    <?= $errors["name"] ?>
                </div>
            <?php
            }
            ?>

            <div class="form">
                <label for="inputpicture">Photo du matelat :</label>
                <input type="file" id="inputpicture" name="picture">
            </div>

        </form>
    </div>

</body>

</html>