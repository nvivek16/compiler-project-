<html>
  <head>
<meta charset="utf-8">
    <title>Content based Ad Classification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">


<script type="text/javascript" src="jquery-1.5.1.js"></script>
<script type="text/javascript">
var page=[];
$(document).ready(function(){
$('#mail').load("maillist.php");
$.getJSON("ad.php",function(data){

for(var i in data){
	page.push(data[i]);
	}

$('.topic').text(page[0]);

});

$('a').live('click',function(){
	$('.data').load("mail/"+$(this).attr('id'));
});
});
var count=page.length;
var i=1;
var s=self.setInterval("display()",3000);
function display()
{

var p=page[0]+'/'+page[i];
document.getElementById("display").innerHTML="<img src='"+p+"' height='400' width='700'>";
i++;
if(i==page.length)
	i=1;

}
</script>
</head>
<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Content based Ad Classification</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="about.html">About</a></li>
            </ul>
            <p class="navbar-text pull-right">Logged in as <a
            href="#">Rajeswari Ma'am</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Test Data</li>
              <li class="active">
              <div id="mail">
               </div>
              <!--Enter links here-->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
<div class="container">

      <h1>Compiler project</h1><br/>
      <h2 class="topic">Content based Ad Classification</h2><br/>
      
<div id="header">
<div id="display">
	Loading..
</div>
</div>
      
<div id="content">



</div>
</div>
</div>
<div class="row">
  <div class="span8">
    <div class="data"></div>
  </div>
</div>
</div>
      <footer>
        <p>&copy; Compiler Project 2012</p>
      </footer>

    </div>


</div>
</div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

</body>
</html>
