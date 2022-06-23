<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="header">header</div>
  <div class="main">

    <?php 
      require_once("./mvc/views/pages/".$data['page'].".php");
    ?>
  </div>
  <div class="footer">footer</div>
  <!-- 
  <?php 
    // var_dump($data);
    // echo $data['id'];
  ?>
  <h1>danh sach sinh vien</h1> -->
</body>

</html>