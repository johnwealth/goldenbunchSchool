<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="p" class="pull-right">
           <div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
			</div>
        </p>
        <p class="pull-left"><i class="fa fa-phone"></i> + 123 456 78910,&nbsp;(+234) 8126601920,&nbsp;8028485498</i></p> 
        <p class="pull-right"><i class="fa fa-envelope-o"></i>info@academics.com</p>
      </div>
    </div>
  </div>
</div>
</div>


	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png"  width="70%" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li {{{(Request::is('/') ? 'class=active' : '')}}}><a href="{{ ('/') }}">Home</a></li> 
						 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ ('/about') }}">Our Institute</a></li>
                            <li><a href="{{ ('/director') }}">Director Address</a></li>
                            <li><a href="{{ ('/extra') }}">Extra Curricular</a></li>
                        </ul>
                    </li> 
						<li {{{(Request::is('academics') ? 'class=active' : '')}}}><a href="{{ ('/academics') }}">Academics</a></li>
                        <li {{{(Request::is('admission') ? 'class=active' : '')}}}><a href="{{ ('/admission') }}">Admission</a></li>
                        <li {{{(Request::is('contact') ? 'class=active' : '')}}}><a href="{{ ('/contact') }}">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Portal<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                        
                            <li><a href="{{ ('/login') }}">Student</a></li>
                            <li><a href="{{ ('/login') }}">Parent</a></li>
                        </ul>
                    </li> 
                    </ul>
                </div>
            </div>
        </div>
        <div></div>
	</header>
	<!-- end header -->
	