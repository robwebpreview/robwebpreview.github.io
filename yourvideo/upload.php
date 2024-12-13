<head>
  <link rel="stylesheet" href="w3.css" type="text/css">
  <style>
    body {
      text-align: center;
      margin: 0;
    }
  </style>
</head>

<body>
  <?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["inputFile"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $result_video = "<video height='480' controls>
<source src='$target_file' type='video/mp4'>
Your browser does not support the video tag.
</video>";

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "<div class='w3-panel w3-blue'><p>Your file already exists.</p></div>";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {
      echo "<div class='w3-panel w3-green'><p>The file " . htmlspecialchars(basename($_FILES["inputFile"]["name"])) . " has been uploaded.</p></div>";
    } else {
      echo "There was an error uploading your file.";
    }
  }
  ?>

</body>