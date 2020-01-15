<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Face Recognition Login</title>
  <script type="text/javascript" defer src="asset/js/face-api.min.js"></script>
  <script type="text/javascript" defer src="script.js"></script>
  <script type="text/javascript" src="asset/js/jquery.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    canvas {
      position: absolute;
    }
  </style>
</head>
<body>
  <video id="video" width="70%" height="50%" autoplay muted></video>
</body>
<footer>
<?php
    include("koneksi.php");
    $sql = "SELECT * FROM user";
    $result = mysqli_query($koneksi,$sql);
    $srcs = array();
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
        $srcs[] = $row['fname'];
      }
    }
  ?>
  <script type="text/javascript">
    var labelsData = <?php echo '["' . implode('", "', $srcs) . '"]' ?>;
  </script>
</footer>
</html>