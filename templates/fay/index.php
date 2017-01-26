<?php 
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();

$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/nav.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/slidshow.css');

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/style.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/slidshow.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/smooth-scroll.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/mouseWheel.js');


$doc->addStyleSheet('//fonts.googleapis.com/css?family=Noto+Sans');
$doc->addStyleSheet('//fonts.googleapis.com/earlyaccess/notosanstc.css');

?>
<!--DOCTYPE html-->
<html>

<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
    <jdoc:include type="head" />
</head>

<body>
    <main>

    <jdoc:include type="modules" name="slideshow" />

<!--*****************************************************
    main
*****************************************************-->
        <div class="container" id="main">

            <jdoc:include type="modules" name="content" />

            <jdoc:include type="component" />

<!--*****************************************************
    footer
*****************************************************-->
            <jdoc:include type="modules" name="footer" />

        </div>
    </main>
<!--*****************************************************
    nav
*****************************************************-->
    <div class="nav navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle menu_bg" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
            </div>
            <div class="collapse navbar-collapse navHeaderCollapse">
                <jdoc:include type="modules" name="mainmenu" />
            </div>
        </div>
    </div>

<!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script> -->
    <!-- <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/scroll.js"></script> -->
    <!-- <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/slidshow.js"></script> -->
    <!-- <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/style.js"></script> -->
    <script type="text/javascript">
        // if (isMobile.phone || isMobile.tablet) {
//            window.location.replace('mobile.html');
        // }
        smoothScroll.init();
    </script>
</body>

</html>
