<?php $language = app()->getLocale(); ?>

		<!-- Header Section -->
	<header class="container-fluid no-left-padding no-right-padding header_s header-fix header_s3" >
		<!-- Menu Block -->
		<div class="container-fluid no-left-padding no-right-padding menu-block" style="background-color:#14296b;border-bottom:solid 2px;">
			<!-- Container -->
			<div class="container">				
				<nav class="navbar ownavigation navbar-expand-lg">
					<a class="navbar-brand" href="/{{$language}}">
					<img src="<?php echo url('/'); ?>/assets/images/logo_blue_bg.png" style="border-style:none; width:100px;" />
					</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbar4">
						<ul class="navbar-nav justify-content-end">
							<li class="dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" title="Home" href="#">@lang('trans.blogs')</a>
								<ul class="dropdown-menu">
								@foreach ($blogCategs as $cat) 
                                                                                                                               
                                    @if($language=='en')
									<li><a class="dropdown-item" href="{{ route('categ', ['id' => $cat->id, app()->getLocale()] ) }}" title="{{ $cat->enName }}">{{ $cat->enName }}</a></li>
									@elseif ($language=='ar')
									<li><a class="dropdown-item" href="{{ route('categ', ['id' => $cat->id, app()->getLocale()] ) }}" title="{{ $cat->arName }}">{{ $cat->arName }}</a></li>
									@elseif ($language=='ba')
									<li><a class="dropdown-item" href="{{ route('categ', ['id' => $cat->id, app()->getLocale()] ) }}" title="{{ $cat->baName }}">{{ $cat->baName }}</a></li>
									@endif
                                 @endforeach
									
								</ul>
							</li>
							
							<li><a class="nav-link" title="About Us" href="{{ route('aboutus', app()->getLocale()) }}">@lang('trans.aboutus')</a></li>
							<li><a class="nav-link" title="Contact" href="{{ route('contact', app()->getLocale()) }}">@lang('trans.contact')</a></li>
						</ul>
					</div>
					<ul class="user-info">
						<li><a href="#search-box" data-toggle="collapse" class="search collapsed" title="Search"><i class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i></a></li>
						<!-- <li class="dropdown">
							<a class="dropdown-toggle" href="#"><i class="pe-7s-user"></i></a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#" title="Sign In">Sign In</a></li>
								<li><a class="dropdown-item" href="#" title="Subscribe">Subscribe </a></li>
								<li><a class="dropdown-item" href="#" title="Log In">Log In</a></li>
							</ul>
						</li> -->

						<li class="dropdown">
							<a class="dropdown-toggle" href="#"><i class="fa fa-language" aria-hidden="true"></i></a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="/en" title="English">En</a></li>
								<li><a class="dropdown-item" href="/ar" title="العربية">Ar </a></li>
								<li><a class="dropdown-item" href="/ba" title="Bahasa Malayo">Ba</a></li>
							</ul>
						</li>

					</ul>
				</nav>
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
		<!-- Search Box -->
		<div class="search-box collapse" id="search-box">
			<div class="container">
				<form action="{{ route('findpost', app()->getLocale() ) }}">
					<div class="input-group">
						<input type="text" class="form-control" name="title" placeholder="Search..." required>
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit"><i class="pe-7s-search"></i></button>
						</span>
					</div>
				</form>
			</div>
		</div><!-- Search Box /- -->
	</header><!-- Header Section /- -->
