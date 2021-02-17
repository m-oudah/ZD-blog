@extends('layouts.front.mainlayout')

@section('content')

<?php $language = app()->getLocale(); ?>
<div class="main-container">


	<div  style= "padding:80px; color:#fff; background-color:#444;">
						<div class="row justify-content-md-center">
							@if ($language=='en')				
							<h2 class="entry-title" style="margin:10px; font-weight:bold; "> {{$category->enName}} </h2>
                            @elseif ($language=='ar')
							<h2 class="entry-title" style="margin:10px; font-weight:bold; font-family: 'Almarai', sans-serif;"> {{$category->arName}} </h2>
                            @elseif($language=='ba')
							<h2 class="entry-title" style="margin:10px; font-weight:bold;"> {{$category->baName}} </h2>
                            @endif
							
							
						</div>
						@if ($language=='en')				
						<div class="row justify-content-md-center"><a href="/{{$language}}">@lang('trans.home')</a> &nbsp > &nbsp  {{$category->enName}}   </div>
                            @elseif ($language=='ar')
							<div class="row justify-content-md-center"><a href="/{{$language}}">@lang('trans.home')</a> &nbsp > &nbsp  {{$category->arName}}   </div>
                            @elseif($language=='ba')
							<div class="row justify-content-md-center"><a href="/{{$language}}">@lang('trans.home')</a> &nbsp > &nbsp  {{$category->baName}}   </div>
                            @endif

					</div>
					


		<main class="site-main">
		

			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content blog-single">
				<!-- Container -->


				
				<div class="container">
					<!-- Row -->
					
					
					<div class="row justify-content-md-center" >
						<!-- Content Area -->
						<div class="col-xl-10 col-lg-12 col-md-12 content-area">
							<!-- Row -->
							<div class="row">

							@foreach ($blogs as $blog)
								<div class="col-12 col-lg-12 col-md-6 col-sm-6 blog-paralle">
									<div class="type-post">
										<div class="entry-cover">
											<div class="post-meta">
												
												<span class="post-date"><a href="#">{{$blog->created_at}}</a></span>
											</div>
											<a href="#"><img  src="{{url('images/'.$blog->img)}}" style="width:330px; height:247px;" alt="Post"></a>
										</div>
										<div class="entry-content">
											<div class="entry-header">	
												@if ($language=='en')				
												<h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="{{$blog->enTitle}}">{{$blog->enTitle}}</a></h3>
												@elseif ($language=='ar')
												<h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="{{$blog->arTitle}}">{{$blog->arTitle}}</a></h3>
												@elseif($language=='ba')
												<h3 class="entry-title"><a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="{{$blog->baTitle}}">{{$blog->baTitle}}</a></h3>
												@endif											
											</div>	
											@if ($language=='en')				
												<p>{{ Str::words($blog->enInfo,10) }}</p>
												@elseif ($language=='ar')
												<p>{{ Str::words($blog->arInfo,10) }}</p>
												@elseif($language=='ba')
												<p>{{ Str::words($blog->baInfo,10) }}</p>
												@endif

											<a href="{{ route('blog', ['id' => $blog->id, app()->getLocale()] ) }}" title="@lang('trans.readmore')">@lang('trans.readmore')</a>
										</div>
									</div>
								</div>
							@endforeach

								
							</div><!-- Row /- -->
							
						</div><!-- Content Area -->
					</div><!-- Row /- -->
				</div>


				<!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>

@endsection