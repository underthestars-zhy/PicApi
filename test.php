<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="Shortcut Icon" href="https://gitee.com/public_number_13516875622/oss/raw/master/uPic/axuh0-7zc71-001.ico" type="image/x-icon">
    <link rel="Icon" href="https://gitee.com/public_number_13516875622/oss/raw/master/uPic/axuh0-7zc71-001.ico" type="image/x-icon">
    <title>
       Pic Api | Show
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="./assets/css/font-awesome.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="shape shape-style-1 shape-primary">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
            </div>
            <div class="page-header">
                <div class="container shape-container d-flex align-items-center py-lg">
                    <div class="col px-0">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 text-center">
                                <img src="https://cdn.jsdelivr.net/gh/s-cloud-bk/Upic@master/uPic/V_tb876918905_%20黑白灰_7.19_画板%201.png" style="width: 200px;" class="img-fluid">
                                <p class="lead text-white">A brand new, random picture Api program using beautiful UI</p>
                                <div class="btn-wrapper mt-5">
                                    <a href="https://api.uts.ski/url.txt" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                        <span class="btn-inner--text">Download All</span>
                                    </a>
                                    <a href="https://github.com/" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                                        <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                                        <span class="btn-inner--text"><span class="text-warning">Star us</span> on Github</span>
                                    </a>
                                </div>
                                <div class="mt-5">
                                    <small class="font-weight-bold mb-0 mr-2 text-white">*proudly coded by UTS</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <br>
        <br>
           <section>
<div class="row">
  <?php 
$list = file("url.txt");
$length = count($list);
for ($x = 0; $x < $length; $x++) {
    echo "<div class=\"col col-xs-12 col-sm-6 col-md-4 col-lg-3\">";
    echo "<div class=\"panel\"><div class=\"panel-head\">";
    echo "<p class=\"panel-title\">图片ID:" . $x . "</p></div>";
    echo "<img class=\"img-fluid\" data-original=\"" . $list[$x] . "\" alt=" . "\"{$list[$x]}\">";
    echo "<div class=\"panel-footer\">";
    echo "<a href=\"" . $list[$x] . "\"><button class=\"button-primary right\">查看图片</button></a></div></div></div>";
}
/*
   $newline = "\n".$_GET["add"];
    file_put_contents("url.txt", $newline, FILE_APPEND | LOCK_EX);
*/
?>
</div>
</section>
    </div>
</body>
</html>