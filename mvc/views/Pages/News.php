<h1>News</h1>

<?php

  while($row = mysqli_fetch_array($data['data'])){
    echo $row['name'];
    echo "<br/>";
  }
?>