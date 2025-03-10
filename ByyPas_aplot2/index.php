<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerability: File Upload</title>
</head>
<body>
    <div class="body_padded">
        <header><img src="../img/x.png" alt=""></header>
        <h1>Vulnerability: File Upload</h1>

        <div class="vulnerable_code_area">
            <form enctype="multipart/form-data" action="upload.php" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="100" />
                Choose an image to upload:<br /><br />
                <input name="uploaded" type="file" /><br /><br />
                <input type="submit" name="Upload" value="Upload" />
            </form>
        </div>
    </div>
</body>
</html>
