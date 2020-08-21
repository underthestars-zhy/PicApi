<!DOCTYPE html>
<html>
 <head>
  <?php
  $set = file("set.txt");
  echo "<title>$set[1]</title> ";
  echo "<link rel=\"Shortcut Icon\" href=\"$set[2]\">";
  echo "<link rel=\"Icon\" href=\"$set[2]\" type=\"image/x-icon\">";
  ?>
  <meta charset="utf-8" /> 
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
  <link rel="preload" href="/mustard-ui.min.css" as="style">
  <link rel="stylesheet" href="/mustard-ui.min.css" /> 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.2/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/jieyou/lazyload/lazyload.min.js"></script>
  <script>
$(document).ready(function() {
    $('.scroll-down, .get-started').on('click', function(e) {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: $('section:first-of-type').offset().top
        }, 300)
    })
});
$(function() {
    $("img.lazyload").lazyload()});
</script> 
<style>
<?php
echo "header{background:$set[5]}"
?>
.get-started{background:#43ccc8;border:3px solid #50d0cc}
*{word-break:break-all}
.panel img{width:100%}
.right{float:right}
</style>
  </head>
  <body>
  <header> 
  <?php
   echo "<h1 class=\"display-1 mb-0\">$set[4]</h1>"
   ?>
   <br>
   <h5 class="mb-0">图片一览</h5>
   <div class="btn-wrapper mt-5">
                  <a href="https://github.com/underthestars-zhy/PicApi/archive/master.zip" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                    <span class="btn-inner--text">Download PHP</span>
                  </a>
                  <a href="https://github.com/underthestars-zhy/PicApi" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                    <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                    <span class="btn-inner--text"><span class="text-warning">Star us</span> on Github</span>
                  </a>
                </div>
   <a class="scroll-down"href="#"></a>
  </header> 
   <section>
<div class="row">
  <?php 
$list = file("url.txt");
$length = count($list);
for ($x = 0; $x < $length; $x++) {
    echo "<div class=\"col col-xs-12 col-sm-6 col-md-4 col-lg-3\">";
    echo "<div class=\"panel\"><div class=\"panel-head\">";
    echo "<h3 class=\"heading-title text-warning mb-0\">图片ID:" . $x . "</h3></div>";
    echo "<img class=\"lazyload\" data-original=\"" . $list[$x] . "\" alt=" . "\"{$list[$x]}\">";
    echo "<div class=\"panel-footer\">";
    echo "<a href=\"" . $list[$x] . "\"><button class=\"btn btn-outline-primary btn-round\">查看图片</button></a></div></div></div>";
}
/*
   $newline = "\n".$_GET["add"];
    file_put_contents("url.txt", $newline, FILE_APPEND | LOCK_EX);
*/
?>
</div>
</section>
</body>
</html>
