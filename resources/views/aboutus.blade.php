@extends('layouts.front.mainlayout')

@section('content')

<?php $language = app()->getLocale(); ?>

<div class="main-container">
	
		<main class="site-main">

			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content blog-single">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Content Area -->
					
						<div class="col-xl-8 col-lg-8 col-md-6 col-12 content-area">
						 
							<article class="type-post">
								<div class="entry-cover">


								</div>
								
								<div class="entry-content">
									<div class="entry-header">	
										
										<h3 class="entry-title">@lang('trans.aboutus')</h3>
										<div class="post-meta">
											<span class="byline">by <a href="#" title="Indesign">Admin</a></span>
											<span class="post-date">{{  $aboutus->created_at }}</span>
										</div>
									</div>				
									
										@if ($language=='en')				
											<p>{!! $aboutus->enInfo !!}</p>
                                            @elseif ($language=='ar')
											<p>{!! $aboutus->arInfo !!}</p>
                                            @elseif($language=='ba')
											<p>{!! $aboutus->baInfo !!}</p>
                                           @endif

									
								
									
									<div class="entry-footer">
										
										<ul class="social">
											<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
										</ul>
									</div>
								</div>
							</article>
							
							
							<!-- Related Post -->
							<!-- <div class="related-post">
								<h3>You May Also Like</h3>
								<div class="related-post-block">
									<div class="related-post-box">
										<a href="#"><img src="http://placehold.it/170x113" alt="Post" /></a>
										<span><a href="#" title="Travel">Travel</a></span>
										<h3><a href="#" title="Traffic Jams Solved">Traffic Jams Solved</a></h3>
									</div>
									<div class="related-post-box">
										<a href="#"><img src="http://placehold.it/170x113" alt="Post" /></a>
										<span><a href="#" title="Science">Science</a></span>
										<h3><a href="#" title="How Astronauts Live">How Astronauts Live</a></h3>
									</div>
									<div class="related-post-box">
										<a href="#"><img src="http://placehold.it/170x113" alt="Post" /></a>
										<span><a href="#" title="Nature">Nature</a></span>
										<h3><a href="#" title="White Sand">White Sand</a></h3>
									</div>
									<div class="related-post-box">
										<a href="#"><img src="http://placehold.it/170x113" alt="Post" /></a>
										<span><a href="#" title="Lifestyle">Lifestyle</a></span>
										<h3><a href="#" title="Sunset at Beach">Sunset at Beach</a></h3>
									</div>
								</div>
							</div> -->
							<!-- Related Post /- -->
						
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<div class="col-lg-4 col-md-6 col-12 widget-area">
							

						@include('layouts.front.partials.sidebar')



						</div><!-- Widget Area /- -->
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>

@endsection