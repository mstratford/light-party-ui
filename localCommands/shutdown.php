<?php include('includes/configuration.php'); ?>
<html>
<head>
<title>Shutting Down...</title>
<script src="/js/jquery-1.9.1.min.js"></script>
<style>
@font-face {
  font-family: 'Code';
  src: url("https://dl.dropboxusercontent.com/u/144150383/CodeLightDemo.woff") format("woff");
}

body {
  color: #fff;
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  background-color: black;
}

.top {
  font-size: 8em;
  text-align: center;
  font-weight: 300;
  font-family: 'Code';
}

.loading {
  text-align: center;
  font-size: 1.8em;
  margin-top: 5%;
  font-family: 'Roboto';
  font-weight: 100;
}

.loading2 {
  text-align: center;
  font-size: 2em;
  font-family: 'Open Sans';
}
</style>
<script>
var i = 0;
var loads = 0;

$.get("doShutdown.php");

setInterval(function() {
  loads += 1;
  i = ++i % 5;
  $(".loading").text("Please Wait");
  $(".loading2").text("." + Array(i + 1).join("..."))
}, 500);



</script>
</head>

<body>
  <div class='top'>Shutting Down</div>
  <div class="loading">
    Please Wait
  </div>

  <div class="loading2">
  </div>
</body>
</html>