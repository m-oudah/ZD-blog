<?php $language = app()->getLocale(); ?>

                    <!-- Widget : Latest Post -->
                        <aside class="widget widget_latestposts">
                                    <h3 class="widget-title">@lang('trans.popularposts')</h3>
								@foreach ($popularposts as $latest) 
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="{{url('images/'.$latest->img)}}" style="width:100px; height:80px;" class="wp-post-image" alt="blog-1" /></i></a>
									
									@if($language=='en')
									<h5><a title="{{$latest->enTitle}}" href="{{ route('blog', ['id' => $latest->id, app()->getLocale()] ) }}">{{$latest->enTitle}}</a></h5>
									@elseif ($language=='ar')
									<h5><a title="{{$latest->arTitle}}" href="{{ route('blog', ['id' => $latest->id, app()->getLocale()] ) }}">{{$latest->arTitle}}</a></h5>
									@elseif ($language=='ba')
									<h5><a title="{{$latest->baTitle}}" href="{{ route('blog', ['id' => $latest->id, app()->getLocale()] ) }}">{{$latest->baTitle}}</a></h5>
									@endif


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
								<h3 class="widget-title">@lang('trans.categories')</h3>
								<ul>
									@foreach ($blogCategs as $cat) 
									
									@if ($language=='en') 				
										<li><a href="{{ route('categ', ['id' => $cat->id, app()->getLocale()] ) }}" title="{{ $cat->enName }}">{{ $cat->enName }}</a></li>
                                            @elseif ($language=='ar')
											<li><a href="{{ route('categ', ['id' => $cat->id, app()->getLocale()] ) }}" title="{{ $cat->arName }}">{{ $cat->arName }}</a></li>
                                            @elseif($language=='ba')
											<li><a href="{{ route('categ', ['id' => $cat->id, app()->getLocale()] ) }}" title="{{ $cat->baName }}">{{ $cat->enName }}</a></li>
                                           @endif

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
								<h3 class="widget-title">@lang('trans.followus')</h3>
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
								<h3 class="widget-title">@lang('trans.newsletter')</h3>
								<div class="newsletter-box">
									<i class="ion-ios-email-outline"></i>
									<h4>@lang('trans.signup')</h4>
									<p>@lang('trans.signtoreceive')</p>
									<form>
										<input type="text" class="form-control" placeholder="@lang('trans.youremail')" />
										<input type="submit" value="@lang('trans.subscribe')" />
									</form>
								</div>
							</aside><!-- Widget : Newsletter /- -->
							
							
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
							<!-- <aside class="widget widget_advertise">
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
							</aside> -->
							<!-- Widget : Advertise /- -->