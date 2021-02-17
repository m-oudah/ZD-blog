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
                    <h3 style="font-size:30px;">@lang ('trans.trending')</h3>
                </div><!-- Section Header /- -->
                <div class="trending-carousel">

                @foreach ($trendingposts as $blog) 
                    <div class="type-post">
                        <div class="entry-cover"><a href="#"><img src="{{url('images/'.$blog->img)}}" alt="{{$blog->enTitle}}" style="width:290px; height:200px"  /></a></div>
                        <div class="entry-content">
                            <div class="entry-header">
                            @if ($language=='en')
                                <span><a href="categ/{{$blog->Category->id}}" title="{{$blog->Category->enName}}">{{$blog->Category->enName}}</a></span>
                                <h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}">{{$blog->enTitle}}</a></h3>
                                @elseif ($language=='ar')
                                <span><a href="categ/{{$blog->Category->id}}" title="{{$blog->Category->arName}}">{{$blog->Category->arName}}</a></span>
                                <h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}">{{$blog->arTitle}}</a></h3>
                                @elseif ($language=='ba')
                                <span><a href="categ/{{$blog->Category->id}}" title="{{$blog->Category->baName}}">{{$blog->Category->baName}}</a></span>
                                <h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}">{{$blog->baTitle}}</a></h3>
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
                                            <span class="post-category"><a href="{{ route('categ', ['id' => $blog->Category->id, app()->getLocale()] ) }}" title="{{$blog->Category->enName}}">{{$blog->Category->enName}}</a></span>			
                                            <h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="{{$blog->enTitle}}">{{$blog->enTitle}}</a></h3>
                                            @elseif ($language=='ar')
                                            <span class="post-category"><a href="{{ route('categ', ['id' => $blog->Category->id, app()->getLocale()] ) }}" title="{{$blog->Category->arName}}">{{$blog->Category->arName}}</a></span>
                                            <h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="{{$blog->arTitle}}">{{$blog->arTitle}}</a></h3>
                                            @elseif($language=='ba')
                                            <span class="post-category"><a href="{{ route('categ', ['id' => $blog->Category->id, app()->getLocale()] ) }}" title="{{$blog->Category->baName}}">{{$blog->Category->baName}}</a></span>
                                            <h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="{{$blog->baTitle}}">{{$blog->baTitle}}</a></h3>
                                            @endif

                                        </div>		
                                            @if ($language=='en')				
                                            <p> {{ Str::words($blog->enInfo,10) }}  </p>
                                            @elseif ($language=='ar')
                                            <p> {{ Str::words($blog->arInfo,10) }}  </p>
                                            @elseif($language=='ba')
                                            <p> {{ Str::words($blog->baInfo,10) }}  </p>
                                            @endif
                                        <a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="@lang ('trans.readmore')">@lang ('trans.readmore')</a>
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
                    
                    @include('layouts.front.partials.sidebar')

                    </div><!-- Widget Area /- -->

                </div>
            </div><!-- Container /- -->
        </div><!-- Page Content /- -->
        
    </main>
    
</div>
@endsection

