<?php 
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();

$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/nav.css');

$doc->addStyleSheet('//fonts.googleapis.com/css?family=Noto+Sans');
$doc->addStyleSheet('//fonts.googleapis.com/earlyaccess/notosanstc.css');

?>
<!--DOCTYPE html-->
<html>

<head>
    <jdoc:include type="head" />
</head>

<body>
    <main>
<!--*****************************************************
    main
*****************************************************-->
        <div class="container" id="main">

            <jdoc:include type="component" />

<!--*****************************************************
    footer
*****************************************************-->
            <footer>
                <div class="container" id="footer">
                    <div class="col-md-4">
                        <div class="logo">
                            <img class="img-responsive" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/img/logo_footer.svg" alt="logo" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact">
                            <a href="http://www.facebook.com/daanriver/" target="_blank">
                                <img class="img-responsive" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/img/facebook.svg" alt="facebook">
                            </a>
                            <a href="mailto:keven750810@yahoo.com.tw">
                                <img class="img-responsive" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/img/contact.svg" alt="contact">
                            </a>
                            <h6>© 2016 GAGA FARMING.</h6>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
<!--*****************************************************
    nav
*****************************************************-->
    <div class="nav">
        <jdoc:include type="modules" name="mainmenu" />
    </div>

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/isMobile.js"></script> -->
    <script type="text/javascript">
        if (isMobile.phone || isMobile.tablet) {
//            window.location.replace('mobile.html');
        }
        // smoothScroll.init();
    </script>
</body>

</html>
