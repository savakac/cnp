<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">

    <title>Main page | test</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Header -->
	<header class="container" id="header-container">
		<!-- Top menu -->
		<div class="row" id="logo-row">

      <div class="col-sm-4 xs-text-center" id="logo">
        <a href="#" title="Festival cestou necestou">
          <img class="hidden-xs" src="images/logo_cn.jpg" alt="Cestou necestou">
          <img class="visible-xs-inline" src="images/logo_cn.jpg" alt="Cestou necestou">
        </a>
      </div>

      <div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">
        <div class="row text-uppercase hidden-xs" id="info-panel">
          <div class="col-xs-5">
            <a href="#" title="Newsletter">Newsletter</a>
          </div>
          <div class="col-xs-3 text-center">
            <a href="#" title="Press">Press</a>
          </div>
          <div class="col-xs-4 text-right">
            <a href="#" title="Partneri">Partneri</a>
          </div>
        </div>

        <!-- Mobile navigation menu -->
        <div class="row visible-xs-block" id="xs-nav">
          <div class="col-xs-6 text-right">
            <button type="button" class="btn glyphicon glyphicon-align-justify" data-toggle="collapse" data-target="#xs-menu" id="btn-xs-menu"></button>
          </div>
          <div class="col-xs-6 text-left">
            <button type="button" class="btn glyphicon glyphicon-search" data-toggle="collapse" data-target="#search-form" id="btn-xs-search"></button>
          </div>
       </div>

        <!-- Mobile navigation -->
       <nav class="visible-xs-block text-center">
          <ul class="nav collapse text-uppercase" id="xs-menu">
            <li>Kalendar akcii</li>
            <li>Novinky</li>
            <li>Festival Cestou Necestou</li>
            <li>Prednasky</li>
            <li>Prednasajuci</li>
            <li>Newsletter</li>
            <li>Press</li>
            <li>Partneri</li>
          </ul>
        </nav>

        <!-- Search box -->
        <form role="form" class="collapse" id="search-form">
          <div class="form-group has-feedback">
            <label class="control-label sr-only" for="search-input">Zadaj hladany text...</label>
            <input type="text" class="form-control" id="search-input" placeholder="zadaj hladany text...">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
        </form>
      </div>

      <!-- Social networks -->
      <div class="col-md-2 text-right xs-text-center" id="social-networks">
        <a href="#" title="Facebook"><img src="images/facebook-icon.png" altl="Facebook"></a>
        <a href="#" title="Google Plus"><img src="images/gplus.png" altl="Google Plus"></a>
        <a href="#" title="Twitter"><img src="images/twitter.png" altl="Twitter"></a>
      </div>

		</div>
  </header>

  <header class="container-slideshow">
    <div class="slideshow-shadow"></div>
		<!-- Slideshow -->
		<div class="row hidden-xs" id="slideshow">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  			
  				<!-- Indicators -->
  				<ol class="carousel-indicators">
    				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
   					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  				</ol>

  				<!-- Wrapper for slides -->
  				<div class="carousel-inner">
    				<div class="item active">
     	 				<img src="images/image1.jpg" alt="Cestou necestou">
      					<div class="carousel-caption">
        					<h3>Lorem ipsum dolor sit amet</h3>
        					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
        					<div>
        						<button type="button" class="btn btn-lg">More</button>
        					</div>
      					</div>
    				</div>
    				<div class="item">
      					<img src="images/image2.jpg" alt="Cestou necestou">
      					<div class="carousel-caption">
        					<h3>Lorem ipsum dolor sit amet</h3>
        					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
        					<div>
        						<button type="button" class="btn btn-lg">More</button>
        					</div>
      					</div>
    				</div>
    				<div class="item">
      					<img src="images/image3.jpg" alt="Cestou necestou">
      					<div class="carousel-caption">
        					<h3>Lorem ipsum dolor sit amet</h3>
        					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
        					<div>
        						<button type="button" class="btn btn-lg">More</button>
        					</div>
      					</div>
    				</div>
            <div class="item">
                <img src="images/image4.jpg" alt="Cestou necestou">
                <div class="carousel-caption">
                  <h3>Lorem ipsum dolor sit amet</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
                  <div>
                    <button type="button" class="btn btn-lg">More</button>
                  </div>
                </div>
            </div>
            <div class="item">
                <img src="images/image5.jpg" alt="Cestou necestou">
                <div class="carousel-caption">
                  <h3>Lorem ipsum dolor sit amet</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
                  <div>
                    <button type="button" class="btn btn-lg">More</button>
                  </div>
                </div>
            </div>
  				</div>

  				<!-- Controls -->
  				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left"></span>
  				</a>
  				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
  				</a>
			</div>
		</div>
    </header>

    <header class="container" id="header-container">
		<!-- Menu -->
		<div class="row hidden-xs" id="menu">
			<ul class="nav text-uppercase text-center">
				<li class="col-sm-3 col-md-2 col-md-offset-1 calendar">
					<a href="#" title="Kalendar akcii">Kalendar akcii</a>
				</li>
				<li class="col-sm-2 col-md-2 news">
					<a href="#" title="Novinky">Novinky</a>
				</li>
				<li class="col-sm-3 col-md-2 festival">
					<a href="#" title="Festival cestou necestou">Festival cestou necestou</a>
				</li>
				<li class="col-sm-2 col-md-2 present">
					<a href="#" title="Prednasky">Prednasky</a>
				</li>
				<li class="col-sm-2 col-md-2 right presenting">
					<a href="#" title="Prednasajuci">Prednasajuci</a>
				</li>
			</ul>
		</div>
	</header>

	<!-- Content -->
	<div class="container content">
		<div class="row">
      <!-- Najblizsie akcie -->
      <div class="col-sm-6 col-md-5 col-md-offset-1" id="akcie">
        <h1 class="text-uppercase xs-text-center">Najblizsie akcie</h1>
        <div class="akcia clearfix">
          <img src="images/akcie.png" alt="">
          <h2 class="green">6.11.2014, 19:00</h2>
          <h3 class="text-uppercase green">Bratislava</h3>
          <h2 class="text-uppercase red">Festival cestou necestou</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
        </div>

        <div class="akcia clearfix">
          <img src="images/akcie.png" alt="">
          <h2 class="green">6.11.2014, 19:00</h2>
          <h3 class="text-uppercase green">Bratislava</h3>
          <h2 class="text-uppercase red">Festival cestou necestou</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
        </div>
      </div>
      <!-- Novinky -->
      <div class="col-sm-6 col-md-5" id="novinky">
        <h1 class="text-uppercase xs-text-center">Najblizsie akcie</h1>
        <div class="index-new clearfix">
          <button type="button" class="btn btn-primary">1.</button>
          <a href="#" title="Cestovatelsky festival">
            <h3 class="text-uppercase green">Prave sa rozbiehame</h3>
            <p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum.</p>
          </a>
        </div>
        <div class="index-new clearfix">
          <button type="button" class="btn btn-primary">2.</button>
          <a href="#" title="Cestovatelsky festival">
            <h3 class="text-uppercase green">Prave sa rozbiehame</h3>
            <p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum.</p>
          </a>
        </div>
        <div class="index-new clearfix">
          <button type="button" class="btn btn-primary">3.</button>
          <a href="#" title="Cestovatelsky festival">
            <h3 class="text-uppercase green">Prave sa rozbiehame</h3>
            <p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum.</p>
          </a>
        </div>
        <div class="index-new clearfix">
          <button type="button" class="btn btn-primary">4.</button>
          <a href="#" title="Cestovatelsky festival">
            <h3 class="text-uppercase green">Prave sa rozbiehame</h3>
            <p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum.</p>
          </a>
        </div>
      </div>
    </div>

    <!-- Banner -->
    <div class="row hidden-xs">
      <div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
        <div id="banner"><a href="#" title="Banner">Banner</a></div>
      </div>
    </div>

    <div class="row bg-content">
      <!-- Galeria -->
      <div class="col-sm-6 col-md-5 col-md-offset-1 clearfix" id="galeria">
        <h1 class="text-uppercase xs-text-center">Galeria</h1>
        <div class="center-image bg-white">
          <a href="#" title="">
            <img src="images/akcie.png" alt="">
            <div class="overlay"></div>
          </a>
          <a href="#" title="">
            <img src="images/akcie.png" alt="">
            <div class="overlay"></div>
          </a>
          <a href="#" title="">
            <img src="images/akcie.png" alt="">
            <div class="overlay"></div>
          </a>
          <a href="#" title="">
            <img src="images/akcie.png" alt="">
            <div class="overlay"></div>
          </a>
          <a href="#" title="">
            <img src="images/akcie.png" alt="">
            <div class="overlay"></div>
          </a>
          <a href="#" title="">
            <img src="images/akcie.png" alt="">
            <div class="overlay"></div>
          </a>
          <div class="galeria-viac">
            <button type="button" class="btn btn-primary clearfix">Viac</button>
          </div>
        </div>
      </div>
      <!-- Bud sucastou -->
      <div class="col-sm-6 col-md-5 text-uppercase" id="bud-sucastou">
        <h1 class="hidden-xs text-uppercase xs-text-center">Bud sucastou</h1>
        <button type="button" class="btn btn-lg btn-block visible-xs-block collapse" data-toggle="collapse" data-target="#xs-bud-sucastou">Bud sucastou
          <span class="glyphicon glyphicon-chevron-down"></span>
        </button>
        <div class="center-image bg-white collapse" id="xs-bud-sucastou" style="height: 0px;">
          <a class="dobrovolnik" href="#" title="Dobrovolnik">Dobrovolnik</a>
          <a class="ucastnik" href="#" title="Ucastnik">Ucastnik</a>
          <a class="partner" href="#" title="Partner">Partner</a>
          <a class="prezentujuci" href="#" title="Prezentujuci">Prezentujuci</a>
          <a class="mam-napad" href="#" title="Mam napad">Mam napad</a>
          <a class="anketa" href="#" title="Anketa">Anketa</a>
        </div>
      </div>
    </div>
    <!-- Partneri -->
    <div class="row">
      <div class="col-sm-12" id="partneri">
        <h1 class="hidden-xs text-uppercase">Partneri</h1>
        <button type="button" class="btn btn-lg btn-block visible-xs-block" data-toggle="collapse" data-target="#xs-partneri">Partneri
          <span class="glyphicon glyphicon-chevron-down"></span>
        </button>
        <div class="collapse" id="xs-partneri">
          <a href="#" title="Partneri"><img src="images/akcie.png" alt="partneri"></a>
          <a href="#" title="Partneri"><img src="images/akcie.png" alt="partneri"></a>
          <a href="#" title="Partneri"><img src="images/akcie.png" alt="partneri"></a>
          <a href="#" title="Partneri"><img src="images/akcie.png" alt="partneri"></a>
          <a href="#" title="Partneri"><img src="images/akcie.png" alt="partneri"></a>
        </div>
      </div>
    </div>
	</div>

	<!-- Footer -->
	<footer>
    <div class="container">
      <div class="row">
       <div class="col-sm-3 col-md-2 xs-text-center">
        <a href="#" title="Festival Cestou Necestou">
          <img src="images/logo-footer.png" alt="Festival Cestou Necestou" class="img-responsive">
        </a>
         <p class="text-justify xs-text-center padding-top-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
        </div>
        <div class="col-sm-2 col-md-offset-1 xs-text-center">
          <nav>
           <ul class="nav text-uppercase footer-nav">
             <li><a href="#" title="Kalendar akcii">Kalendar</a></li>
             <li><a href="#" title="Novinky">Novinky</a></li>
             <li><a href="#" title="Festivaly">Festivaly</a></li>
           </ul>
         </nav>
        </div>
        <div class="col-sm-3 xs-text-center">
          <nav>
           <ul class="nav text-uppercase footer-nav">
             <li><a href="#" title="Kalendar akcii">Kalendar akcii</a></li>
             <li><a href="#" title="Novinky">Novinky</a></li>
             <li><a href="#" title="Festivaly">Festivaly</a></li>
             <li><a href="#" title="Prezentacie">Prezentacie</a></li>
             <li><a href="#" title="Prezentujuci">Prezentujuci</a></li>
             <li><a href="#" title="O nas">O nas</a></li>
             <li><a href="#" title="Archiv">Archiv</a></li>
           </ul>
         </nav>
        </div>
        <div class="col-sm-4 xs-text-center">
          <a class="text-uppercase" href="#" title="Newsletter">Newsletter</a>
          <p class="text-justify xs-text-center padding-top-15 padding-bottom-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum ac pharetra nunc congue.</p>
          <form class="form-inline" role="form" id="newsletter-form">
            <div class="form-group">
              <label class="control-label sr-only" for="newsletter-input">vlozte Vasu emailovu adresu</label>
              <input class="form-control" id="newsletter-input" placeholder="vlozte Vasu emailovu adresu" type="text"></input>
            </div>
            <button class="btn btn-yellow" type="submit">Odoslat</button>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 text-right xs-text-center">
          <hr>
          <p class="copyright">COPYRIGHT &copy <?php echo date('Y'); ?> BY OZ CESTOU NECESTOU</p>
        </div>      
      </div>
    </div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main script -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>