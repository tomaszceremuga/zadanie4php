<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $tlo = $_POST["tlo"];
  $tekst = $_POST["tekst"];
  echo "<style>
  p{
    height: 50%;
    width: 50%;
    margin: 50px 50px 0 50px;
    border: 2px dashed red;
    background: {$tlo};
    color: {$tekst};
  }
  </style>";
  echo "<p>Tomasz Ceremuga</p>";

?>
</body>
</html>