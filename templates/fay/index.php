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
    loading animate
*****************************************************-->
        <div id="loading">
            <img src="templates/fay/img/loading.svg" alt="now_loading">
        </div>
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
    var _jf = _jf || [];_jf.push(['p','49592']);_jf.push(['_setFont','sourcehansans-tc-light','css','.sourcehansans-tc-light']);_jf.push(['_setFont','sourcehansans-tc-light','alias','sourcehansans-tc']);_jf.push(['_setFont','sourcehansans-tc-light','weight',200]);_jf.push(['_setFont','cwtexqyuan','css','.cwtexqyuan']);_jf.push(['_setFont','cwtexqyuan','alias','cwtexqyuan']);_jf.push(['_setFont','cwtexqyuan','weight',500]);(function(f,q,c,h,e,i,r,d){var k=f._jf;if(k.constructor===Object){return}var l,t=q.getElementsByTagName("html")[0],a=function(u){for(var v in k){if(k[v][0]==u){if(false===k[v][1].call(k)){break}}}},j=/\S+/g,o=/[\t\r\n\f]/g,b=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,g="".trim,s=g&&!g.call("\uFEFF\xA0")?function(u){return u==null?"":g.call(u)}:function(u){return u==null?"":(u+"").replace(b,"")},m=function(y){var w,z,v,u,x=typeof y==="string"&&y;if(x){w=(y||"").match(j)||[];z=t[c]?(" "+t[c]+" ").replace(o," "):" ";if(z){u=0;while((v=w[u++])){if(z.indexOf(" "+v+" ")<0){z+=v+" "}}t[c]=s(z)}}},p=function(y){var w,z,v,u,x=arguments.length===0||typeof y==="string"&&y;if(x){w=(y||"").match(j)||[];z=t[c]?(" "+t[c]+" ").replace(o," "):"";if(z){u=0;while((v=w[u++])){while(z.indexOf(" "+v+" ")>=0){z=z.replace(" "+v+" "," ")}}t[c]=y?s(z):""}}},n;k.push(["_eventActived",function(){p(h);m(e)}]);k.push(["_eventInactived",function(){p(h);m(i)}]);k.addScript=n=function(u,A,w,C,E,B){E=E||function(){};B=B||function(){};var x=q.createElement("script"),z=q.getElementsByTagName("script")[0],v,y=false,D=function(){x.src="";x.onerror=x.onload=x.onreadystatechange=null;x.parentNode.removeChild(x);x=null;a("_eventInactived");B()};if(C){v=setTimeout(function(){D()},C)}x.type=A||"text/javascript";x.async=w;x.onload=x.onreadystatechange=function(G,F){if(!y&&(!x.readyState||/loaded|complete/.test(x.readyState))){y=true;if(C){clearTimeout(v)}x.src="";x.onerror=x.onload=x.onreadystatechange=null;x.parentNode.removeChild(x);x=null;if(!F){setTimeout(function(){E()},200)}}};x.onerror=function(H,G,F){if(C){clearTimeout(v)}D();return true};x.src=u;z.parentNode.insertBefore(x,z)};a("_eventPreload");m(h);n(r,"text/javascript",false,3000)})(this,this.document,"className","jf-loading","jf-active","jf-inactive","//ds.justfont.com/js/stable/v/5.0.3/id/211230277722");
    </script>
    <script type="text/javascript">
        // if (isMobile.phone || isMobile.tablet) {
//            window.location.replace('mobile.html');
        // }
        smoothScroll.init();
    </script>
</body>

</html>
