<?php 

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Azure - glitch hello world</title>
  <link rel="stylesheet" href="https://codepen.io/sean_codes/pen/e6f1ea02b2c69845a796acd688299990.css?v=13">
<script>

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var div = document.createElement('div');
            div.innerHTML = this.responseText;
            document.body.appendChild(div)
        }
    }
    xhttp.open("GET", "https://codepen.io/sean_codes/pen/e6f1ea02b2c69845a796acd688299990.html", true);
    xhttp.send();
</script><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=VT323'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<canvas> </canvas>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
