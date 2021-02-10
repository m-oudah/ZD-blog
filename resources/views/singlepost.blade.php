@extends('layouts.front.mainlayout')

@section('content')

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
									<img src="{{url('images/'.$blogs->img)}}" style="width:770px; height:513px;" alt="Post" />
								</div>
								
								<div class="entry-content">
									<div class="entry-header">	
										<span class="post-category"><a href="/categ/{{$blogs->Category->id}}"
										 title="$blogs->Category->enName}}">{{$blogs->Category->enName}}</a></span>
										<h3 class="entry-title">{{  $blogs->enTitle }}</h3>
										<div class="post-meta">
											<span class="byline">by <a href="#" title="Indesign">Admin</a></span>
											<span class="post-date">{{  $blogs->created_at }}</span>
										</div>
									</div>								
									<p>{{  $blogs->enInfo }}</p>
								
									
									<div class="entry-footer">
										<div class="tags">
											<a href="#" title="Fashion"># Fashion</a>
											<a href="#" title="Travel"># Travel</a>
											<a href="#" title="Nature"># Nature</a>
										</div>
										<ul class="social">
											<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
										</ul>
									</div>
								</div>
							</article>
							
							<!-- About Author -->
							<div class="about-author-box">
								<div class="author">
									<i><img src="http://placehold.it/170x170" alt="Author" /></i>
									<h4>David Wilde</h4>
									<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences.</p>
									<ul>
										<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div><!-- About Author /- -->
							<!-- Related Post -->
							<div class="related-post">
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
							</div><!-- Related Post /- -->
							<!-- Comment Area -->
							<div class="comments-area">
								<h2 class="comments-title">3 Comments</h2>
								<ol class="comment-list">
									<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="http://placehold.it/70x70" class="avatar avatar-72 photo"/>
													<b class="fn">Alice Chaptman</b>
												</div>
												<div class="comment-metadata">
													<a href="#">10 hours ago</a>											
												</div>
											</footer>
											<div class="comment-content">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
											</div>
										</div>
										<ol class="children">
											<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
												<div class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="img" src="http://placehold.it/70x70" class="avatar avatar-72 photo"/>
															<b class="fn">Droid Vader</b>
														</div>
														<div class="comment-metadata">
															<a href="#">8 hours ago</a>											
														</div>
													</footer>
													<div class="comment-content">
														<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves.</p>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
													</div>
												</div>
											</li>
										</ol>
									</li>
									<li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="http://placehold.it/70x70" class="avatar avatar-72 photo"/>
													<b class="fn">Giana Blankard</b>
												</div>
												<div class="comment-metadata">
													<a href="#">16 hours ago</a>											
												</div>
											</footer>
											<div class="comment-content">
												<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
											</div>
										</div>
									</li>
								</ol><!-- comment-list /- -->
								<!-- Comment Form -->
								<div class="comment-respond">
									<h2 class="comment-reply-title">Leave a Reply</h2>
									<form method="post" class="comment-form">
										<p class="comment-form-author">
											<input id="author" name="author" placeholder="Name" size="30" maxlength="245" required="required" type="text"/>
										</p>
										<p class="comment-form-email">
											<input id="email" name="email" placeholder="Email" required="required" type="email"/>
										</p>
										<p class="comment-form-url">
											<input id="url" name="url" placeholder="Website" required="required" type="url"/>
										</p>
										<p class="comment-form-comment">
											<textarea id="comment" name="comment" placeholder="Enter your comment here..." rows="8" required="required"></textarea>
										</p>
										<p class="form-submit">
											<input name="submit" class="submit" value="Post Comment" type="submit"/>
										</p>
									</form>
								</div><!-- Comment Form /- -->
							</div><!-- Comment Area /- -->
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<div class="col-lg-4 col-md-6 col-12 widget-area">
							<!-- Widget : Latest Post -->
							<aside class="widget widget_latestposts">
								<h3 class="widget-title">Popular Posts</h3>
								@foreach ($latestposts as $latest) 
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="{{url('images/'.$latest->img)}}" style="width:100px; height:80px;" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="{{$latest->enTitle}}" href="/blog/{{$latest->id}}">{{$latest->enTitle}}</a></h5>
									<span><a href="#">{{$latest->created_at}}</a></span>
								</div>
								@endforeach
								
							</aside><!-- Widget : Latest Post /- -->
							<!-- Widget : Aboutme -->
							<!-- <aside class="widget widget_aboutme">
								<h3 class="widget-title">About Me</h3>
								<div class="about-info">
									<img src="http://placehold.it/345x230" alt="widget"/>
									<p>On the other hand, we denounce with righteous indignation 
									and dislike men who are  beguiledand demoralized charms.</p>
									<a href="#" title="READ MORE">READ MORE</a>
								</div>
							</aside> -->
							<!-- Widget : Aboutme /- -->
							<!-- Widget : Categories -->
							<aside class="widget widget_categories text-center">
								<h3 class="widget-title">Categories</h3>
								<ul>
									@foreach ($blogCategs as $cat) 
                              			 <li><a href="/categ/{{ $cat->id }}" title="{{ $cat->enName }}">{{ $cat->enName }}</a></li>
                           			 @endforeach
								</ul>
							</aside><!-- Widget : Categories /- -->
							<!-- Widget : Instagram -->
							<!-- <aside class="widget widget_instagram">
								<h3 class="widget-title">Instagram</h3>
								<ul>
									<li><a href="#"><img src="http://placehold.it/111x111" alt="Instagram" /></a></li>
									<li><a href="#"><img src="http://placehold.it/111x111" alt="Instagram" /></a></li>
									<li><a href="#"><img src="http://placehold.it/111x111" alt="Instagram" /></a></li>
									<li><a href="#"><img src="http://placehold.it/111x111" alt="Instagram" /></a></li>
									<li><a href="#"><img src="http://placehold.it/111x111" alt="Instagram" /></a></li>
									<li><a href="#"><img src="http://placehold.it/111x111" alt="Instagram" /></a></li>
								</ul>
							</aside> -->
							<!-- Widget : Instagram /- -->
							<!-- Widget : Follow Us -->
							<aside class="widget widget_social">
								<h3 class="widget-title">FOLLOW US</h3>
								<ul>
									<li><a href="#" title=""><i class="ion-social-facebook-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-twitter-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-instagram-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-googleplus-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-pinterest-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-vimeo-outline"></i></a></li>
								</ul>
							</aside><!-- Widget : Follow Us /- -->
							<!-- Widget : Newsletter -->
							<aside class="widget widget_newsletter">
								<h3 class="widget-title">Newsletter</h3>
								<div class="newsletter-box">
									<i class="ion-ios-email-outline"></i>
									<h4>Sign Up for Newsletter</h4>
									<p>Sign up to receive latest posts and news </p>
									<form>
										<input type="text" class="form-control" placeholder="Your email address" />
										<input type="submit" value="Subscribe Now" />
									</form>
								</div>
							</aside><!-- Widget : Newsletter /- -->
							<!-- Widget : Tags -->
							<aside class="widget widget_tags_cloud">
								<h3 class="widget-title">Tags</h3>
								<div class="tagcloud">
									<a href="#" title="Fashion">Fashion</a>
									<a href="#" title="Travel">Travel</a>
									<a href="#" title="Nature">Nature</a>
									<a href="#" title="Technology">Technology</a>
									<a href="#" title="Sport">Sport</a>
									<a href="#" title="Weather">Weather</a>
									<a href="#" title="Trends">Trends</a>
									<a href="#" title="Lifestyle">Lifestyle</a>
									<a href="#" title="Gear">Gear</a>
								</div>
							</aside><!-- Widget : Tags /- -->
							
							<!-- Widget : Tranding Post -->
							<!-- <aside class="widget widget_tranding_post">
								<h3 class="widget-title">TRENDING Posts</h3>
								<div id="trending-widget" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<div class="trnd-post-box">
												<div class="post-cover"><a href="#"><img src="http://placehold.it/345x230" alt="Tranding Post" /></a></div>
												<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
												<h3 class="post-title"><a href="#">New Fashion Collection Show This Weekend in Boston </a></h3>
											</div>
										</div>
										<div class="carousel-item">
											<div class="trnd-post-box">
												<div class="post-cover"><a href="#"><img src="http://placehold.it/345x230" alt="Tranding Post" /></a></div>
												<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
												<h3 class="post-title"><a href="#">New Fashion Collection Show This Weekend in Boston </a></h3>
											</div>
										</div>
										<div class="carousel-item">
											<div class="trnd-post-box">
												<div class="post-cover"><a href="#"><img src="http://placehold.it/345x230" alt="Tranding Post" /></a></div>
												<span class="post-category"><a href="#" title="Lifestyle">Lifestyle</a></span>
												<h3 class="post-title"><a href="#">New Fashion Collection Show This Weekend in Boston </a></h3>
											</div>
										</div>
									</div>
									<ol class="carousel-indicators">
										<li data-target="#trending-widget" data-slide-to="0" class="active"></li>
										<li data-target="#trending-widget" data-slide-to="1"></li>
										<li data-target="#trending-widget" data-slide-to="2"></li>
									</ol>
								</div>
							</aside> -->
							<!-- Widget : Tranding Post /- -->
							<!-- Widget : Advertise -->
							<aside class="widget widget_advertise">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
									</ol>
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<img class="d-block img-fluid" src="http://placehold.it/345x308" alt="slide">
											<div class="carousel-caption">
												<h3>Advertiser</h3>
												<p>New Furniture</p>
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block img-fluid" src="http://placehold.it/345x308" alt="slide">
											<div class="carousel-caption">
												<h3>Advertiser</h3>
												<p>New Furniture</p>
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block img-fluid" src="http://placehold.it/345x308" alt="slide">
											<div class="carousel-caption">
												<h3>Advertiser</h3>
												<p>New Furniture</p>
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block img-fluid" src="http://placehold.it/345x308" alt="slide">
											<div class="carousel-caption">
												<h3>Advertiser</h3>
												<p>New Furniture</p>
											</div>
										</div>
									</div>
								</div>	
							</aside><!-- Widget : Advertise /- -->
						</div><!-- Widget Area /- -->
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>

@endsection