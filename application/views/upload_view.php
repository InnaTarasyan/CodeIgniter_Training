<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
  <form method="post" url='<?= base_url()?>index.php/first/upload_photo' enctype="multipart/form-data">
      <input type="file" name="userfile"/>
      <input type="submit" value="Submit" name="download">
  </form>
</body>
</html>