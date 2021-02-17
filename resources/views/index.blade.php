@extends('layouts.front.mainlayout')

@section('content')
@include('layouts.front.partials.slider')

<?php $language = app()->getLocale(); ?>
<div class="main-container">
	
    <main class="site-main">

      
        
        <!-- Trending Section -->
        <div class="container-fluid no-left-padding no-right-padding trending-section">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>@lang ('trans.trending')</h3>
                </div><!-- Section Header /- -->
                <div class="trending-carousel">

                @foreach ($trendingposts as $blog) 
                    <div class="type-post">
                        <div class="entry-cover"><a href="#"><img src="{{url('images/'.$blog->img)}}" alt="{{$blog->enTitle}}" style="width:290px; height:200px"  /></a></div>
                        <div class="entry-content">
                            <div class="entry-header">
                            @if ($language=='en')
                                <span><a href="categ/{{$blog->Category->id}}" title="{{$blog->Category->enName}}">{{$blog->Category->enName}}</a></span>
                                <h3 class="entry-title"><a href="{{ route('blog', app()->getLocale()) }}">{{$blog->enTitle}}</a></h3>
                                @elseif ($language=='ar')
                                <span><a href="categ/{{$blog->Category->id}}" title="{{$blog->Category->arName}}">{{$blog->Category->arName}}</a></span>
                                <h3 class="entry-title"><a href="/blog/{{$blog->id}}">{{$blog->arTitle}}</a></h3>
                                @elseif ($language=='ba')
                                <span><a href="categ/{{$blog->Category->id}}" title="{{$blog->Category->baName}}">{{$blog->Category->baName}}</a></span>
                                <h3 class="entry-title"><a href="/blog/{{$blog->id}}">{{$blog->baTitle}}</a></h3>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                   
                  
                   
                </div>
            </div><!-- Container /- -->
        </div><!-- Trending Section /- -->
        <!-- Page Content -->
        <div class="container-fluid no-left-padding no-right-padding page-content">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Content Area -->
                    <div class="col-lg-8 col-md-6 content-area">
                        <!-- Row -->
                        <div class="row">
                        @foreach ($latestposts as $blog)
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <div class="type-post">
                                 
                                    <div class="entry-cover">
                                        <div class="post-meta">
                                            <span class="byline">by <a href="#" title="Indesign">Admin</a></span>
                                            <span class="post-date"><a href="#">{{$blog->created_at}}</a></span>
                                        </div>
                                        <a href="#"><img src="{{url('images/'.$blog->img)}}" alt="Post" style="width:370px; height:247px" /></a>
                                    </div>
                               
                                    <div class="entry-content">
                                        <div class="entry-header">	

                                            @if ($language=='en')	
                                            <span class="post-category"><a href="/categ/{{$blog->Category->id}}" title="{{$blog->Category->enName}}">{{$blog->Category->enName}}</a></span>			
                                            <h3 class="entry-title"><a href="/blog/{{$blog->id}}" title="{{$blog->enTitle}}">{{$blog->enTitle}}</a></h3>
                                            @elseif ($language=='ar')
                                            <span class="post-category"><a href="/categ/{{$blog->Category->id}}" title="{{$blog->Category->arName}}">{{$blog->Category->arName}}</a></span>
                                            <h3 class="entry-title"><a href="/blog/{{$blog->id}}" title="{{$blog->arTitle}}">{{$blog->arTitle}}</a></h3>
                                            @elseif($language=='ba')
                                            <span class="post-category"><a href="/categ/{{$blog->Category->id}}" title="{{$blog->Category->baName}}">{{$blog->Category->baName}}</a></span>
                                            <h3 class="entry-title"><a href="/blog/{{$blog->id}}" title="{{$blog->baTitle}}">{{$blog->baTitle}}</a></h3>
                                            @endif

                                        </div>		
                                            @if ($language=='en')				
                                            <p> {{ Str::words($blog->enInfo,10) }}  </p>
                                            @elseif ($language=='ar')
                                            <p> {{ Str::words($blog->arInfo,10) }}  </p>
                                            @elseif($language=='ba')
                                            <p> {{ Str::words($blog->baInfo,10) }}  </p>
                                            @endif
                                        <a href="/blog/{{$blog->id}}" title="Read More">@lang ('trans.readmore')</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach

  
                        </div><!-- Row /- -->
                        <!-- Pagination -->
                        <!-- <nav class="navigation pagination">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">Previous</a>
                                <span class="page-numbers current">
                                    <span class="meta-nav screen-reader-text">Page </span>1
                                </span>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>2</a>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>3</a>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>...</a>
                                <a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>6</a>
                                <a class="next page-numbers" href="#">Next</a>
                            </div>
                        </nav> -->
                        <!-- Pagination /- -->
                    </div><!-- Content Area /- -->
                    <!-- Widget Area -->
                    <div class="col-lg-4 col-md-6 widget-area">
                        <!-- Widget : Latest Post -->
                        <aside class="widget widget_latestposts">
                            <h3 class="widget-title">@lang('trans.popularposts')</h3>
                            @foreach ($popularposts as $blog)
                            <div class="latest-content">
                                <a href="#" title="Recent Posts"><i><img src="{{url('images/'.$blog->img)}}" style="width:100px; height:80px" class="wp-post-image" alt="blog-1" /></i></a>
                                
                                     @if ($language=='en')				
                                       <h5><a title="{{ $blog->enTitle }}" href="/blog/{{ $blog->id}}">{{ $blog->enTitle }}</a></h5>
                                        @elseif ($language=='ar')
                                        <h5><a title="{{ $blog->arTitle }}" href="/blog/{{ $blog->id}}">{{ $blog->arTitle }}</a></h5>
                                        @elseif($language=='ba')
                                        <h5><a title="{{ $blog->baTitle }}" href="/blog/{{ $blog->id}}">{{ $blog->baTitle }}</a></h5>
                                     @endif

                                <span><a href="#">{{ $blog->created_at }}</a></span>
                            </div>
                            @endforeach
                            
                        </aside><!-- Widget : Latest Post /- -->
                        <!-- Widget : Categories -->
                        <aside class="widget widget_categories text-center">
                            <h3 class="widget-title">@lang('trans.categories')</h3>
                            <ul>
                            @foreach ($blogCategs as $cat) 
                            @if ($language=='en')				
                              <li><a href="/categ/{{ $cat->id }}" title="{{ $cat->enName }}">{{ $cat->enName }}</a></li>
                                 @elseif ($language=='ar')
                                 <li><a href="/categ/{{ $cat->id }}" title="{{ $cat->arName }}">{{ $cat->arName }}</a></li>
                                 @elseif($language=='ba')
                                 <li><a href="/categ/{{ $cat->id }}" title="{{ $cat->baName }}">{{ $cat->baName }}</a></li>
                                @endif


                            @endforeach
                            </ul>
                        </aside><!-- Widget : Categories /- -->
                        <!-- Widget : Tranding Post -->
                        <!-- <aside class="widget widget_tranding_post">
                            <h3 class="widget-title">TRENDING Posts</h3>
                            <div id="trending-widget" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active ">
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
                        </aside>Widget : Tranding Post /- -->
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
                            <h3 class="widget-title">@lang ('trans.newsletter')</h3>
                            <div class="newsletter-box">
                                <i class="ion-ios-email-outline"></i>
                                <h4>@lang ('trans.signup')</h4>
                                <p>Sign up to receive latest posts and news </p>
                                <form>
                                    <input type="text" class="form-control" placeholder="@lang('trans.youremail')" />
                                    <input type="submit" value="@lang('trans.subscribe')" />
                                </form>
                            </div>
                        </aside><!-- Widget : Newsletter /- -->
                        <!-- Widget : Tags -->
                     <!--   <aside class="widget widget_tags_cloud">
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
                        </aside>-->   <!-- Widget : Tags /- -->
                    </div><!-- Widget Area /- -->
                </div>
            </div><!-- Container /- -->
        </div><!-- Page Content /- -->
        
    </main>
    
</div>
@endsection

