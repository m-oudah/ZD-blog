@extends('layouts.front.mainlayout')

@section('content')

<?php $language = app()->getLocale(); ?>
<div class="main-container">


	<div  style= "padding:80px; color:#fff; background-color:#444;">
						<div class="row justify-content-md-center">
										
							<h2 class="entry-title" style="margin:10px; font-weight:bold; "> @lang('trans.contact')  </h2>
                            
							
						</div>
								
						<div class="row justify-content-md-center"><a href="/{{$language}}">@lang('trans.home')</a> &nbsp > &nbsp  @lang('trans.contact')  </div>
                          

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
						
						<div class="row justify-content-md-center" >
						
						<div class="col-6" style="background-color:#f9f9f9; min-height:350px; padding:20px">
							

						
						@if ($language=='en')				
											<p>{!! $aboutus->enContact !!}</p>
                                            @elseif ($language=='ar')
											<p>{!! $aboutus->arContact !!}</p>
                                            @elseif($language=='ba')
											<p>{!! $aboutus->baContact !!}</p>
                                           @endif


						</div>
	
						<div class="col-6">
						<form method="POST" action="index.php" >
							<div class="row">
								
								    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="@lang('trans.name')" required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" name="email" placeholder="@lang('trans.youremail')" required="" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>	
								
									<div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="@lang('trans.subject')" required="" data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>

									<div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="12" placeholder="@lang('trans.message')" name="message" class="form-control" required="" data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

									<div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" class="contact-btn">@lang('trans.submit')</button>
                                        <div class="clearfix"></div>
                                    </div>
							
							</div> 
						</form>
							

						</div>
	
						</div><!-- Row /- -->
					</div>
	


							
						</div><!-- Content Area -->
					</div><!-- Row /- -->
				</div>


				<!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>

@endsection