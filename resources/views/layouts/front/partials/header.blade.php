

		<!-- Header Section -->
	<header class="container-fluid no-left-padding no-right-padding header_s header-fix header_s3">
		<!-- Menu Block -->
		<div class="container-fluid no-left-padding no-right-padding menu-block">
			<!-- Container -->
			<div class="container">				
				<nav class="navbar ownavigation navbar-expand-lg">
					<a class="navbar-brand" href="/index">{{ config('app.name', 'ZD') }}</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbar4">
						<ul class="navbar-nav justify-content-end">
							<li class="dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" title="Home" href="#">Blogs</a>
								<ul class="dropdown-menu">
								@foreach ($blogCategs as $cat) 
                                                                                                                               
                                              
									<li><a class="dropdown-item" href="/categ/{{ $cat->id }}" title="{{ $cat->enName }}">{{ $cat->enName }}</a></li>
									
                                 @endforeach
									<!-- <li><a class="dropdown-item" href="index-13.html" title="Home Technology">Home Technology</a></li>
									<li><a class="dropdown-item" href="index-14.html" title="Home Beauty">Home Beauty</a></li>
									<li><a class="dropdown-item" href="index-15.html" title="Home Fashion">Home Fashion</a></li>
									<li><a class="dropdown-item" href="index-16.html" title="Home Travel">Home Travel</a></li>
									<li><a class="dropdown-item" href="index-17.html" title="Home Industrial">Home Industrial</a></li>
									<li><a class="dropdown-item" href="index-18.html" title="Home Business">Home Business</a></li>
									<li><a class="dropdown-item" href="index-19.html" title="Home Fitness">Home Fitness</a></li>
									<li><a class="dropdown-item" href="index-20.html" title="Home Architecture">Home Architecture</a></li> -->
								</ul>
							</li>
							
							<li><a class="nav-link" title="About Us" href="/aboutus">About us</a></li>
							<li><a class="nav-link" title="Contact" href="contact-us.html">Contact</a></li>
						</ul>
					</div>
					<ul class="user-info">
						<li><a href="#search-box" data-toggle="collapse" class="search collapsed" title="Search"><i class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#"><i class="pe-7s-user"></i></a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#" title="Sign In">Sign In</a></li>
								<li><a class="dropdown-item" href="#" title="Subscribe">Subscribe </a></li>
								<li><a class="dropdown-item" href="#" title="Log In">Log In</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
		<!-- Search Box -->
		<div class="search-box collapse" id="search-box">
			<div class="container">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." required>
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit"><i class="pe-7s-search"></i></button>
						</span>
					</div>
				</form>
			</div>
		</div><!-- Search Box /- -->
	</header><!-- Header Section /- -->
