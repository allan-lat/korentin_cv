<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <!-- Bootstrap -->
    <link href="public/css/bootstrap-4.0.0.css" rel="stylesheet">
	<!--<link href="public/css/style.css" rel="stylesheet">-->
	  <style>
	  .navbar-korentin ul{width:100%;background:#8b0000;border-radius:3px;box-shadow:0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15)}
		.navbar-korentin ul li{display:inline;width:100%}
		.navbar-korentin ul li a:hover,ul li a:focus{background:rgba(255,255,255,.2);box-shadow:0 1px 0 rgba(255,255,255,.7) inset,0 -1px 0 hsl(210,100%,42%) inset,0 -2px 0 hsl(210,100%,48%) inset,0 -3px 0 hsl(210,100%,54%) inset,0 -4px 0 hsl(210,100%,60%) inset,0 -5px 0 hsl(210,100%,70%) inset;padding:8px 25px 17px}
		.navbar-korentin ul li a:active{background:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.1));box-shadow:0 0 2px rgba(0,0,0,.3) inset}
		.navbar-korentin ul li a:hover::before,ul li a:focus::before{background:#fff;box-shadow:0 0 2px white,0 -1px 0 rgba(0,0,0,.4)}
		table{border-collapse:separate;border-spacing:200px 0}
		.background{margin:0;padding:0;background:url(../imgs/background.jpg) no-repeat center fixed;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover}
		@media (max-width: 768px) {
		.bg-crimson{background-color:#AB2A25;background:#8b0000;border-radius:3px;box-shadow:0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15)}
		h1{text-align:center;margin-bottom:10%}
		}
		.navbar-korentin .navbar-brand{color:rgba(255,255,255,0.9);text-align:center;font-size:2.4em}
		.navbar-korentin .navbar-brand:hover,.navbar-korentin .navbar-brand:focus{color:rgba(255,255,255,0.9)}
		.navbar-korentin .navbar-nav .nav-link{color:rgba(255,255,255,0.8)}
		.navbar-korentin .navbar-nav .nav-link:hover,.navbar-korentin .navbar-nav .nav-link:focus{color:rgba(255,255,255,0.6)}
		.navbar-korentin .navbar-nav .nav-link.disabled{color:rgba(255,255,255,0.3)}
		.navbar-korentin .navbar-nav .show > .nav-link,.navbar-korentin .navbar-nav .active > .nav-link,.navbar-korentin .navbar-nav .nav-link.show,.navbar-korentin .navbar-nav .nav-link.active{color:rgba(255,255,255,0.9)}
		.navbar-korentin .navbar-toggler{color:rgba(255,255,255,0.5);border-color:rgba(255,255,255,0.1)}
		.navbar-korentin .navbar-text{color:rgba(0,0,0,0.5)}
		.navbar-korentin .navbar-text a{color:rgba(0,0,0,0.9)}
		.navbar-korentin .navbar-text a:hover,.navbar-korentin .navbar-text a:focus{color:rgba(0,0,0,0.9)}
		.navbar-korentin .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}
		.article{padding:2rem 4rem;background-color:rgba(255,255,255,1.00);font-size:1.5em;font-family:"Century Gothic";font-weight:400;border:solid 1px rgba(116,115,115,0.50);-webkit-box-shadow:0 3px 5px 0;box-shadow:0 3px 5px 0;text-align:center}
		footer{color:#fff}
		.header-post{font-weight:700}
		.index-button{margin-top:10%;margin-bottom:20%}
		.index-button a{font-size:2.2em}
		.contact-background{background-color:rgba(139,0,0,0.80);padding:2rem 4rem;font-size:1.5em;font-weight:400;border:solid 1px rgba(139,0,0,0.50);-webkit-box-shadow:0 3px 5px 0;box-shadow:0 3px 5px 0;color:#fff}
	  </style>
  </head>
  <body class="background">
	  <div class="container mt-5">
		  
		  <!--Titre-->
		<div class="row pt-4 mb-3">
			<div class="col-12 col-md-8">
			<h1>Korentin Chaume</h1>
			</div>
			<div class="col-12 col-md-4">
				<img src="public/images/400X200.gif" alt="" class="img-fluid"/>
			</div>
			
		  </div>
		  
		  <!-- content -->
		 <?= $content ?>
		  
		  
	  </div>
	  
	  

   
	  
	  
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    
  </body>
</html>