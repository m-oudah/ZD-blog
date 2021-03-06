@extends('layouts.Admin')
@section('content')



						<div class="page-header card">
							<div class="row align-items-end">
								<div class="col-lg-8">
									<div class="page-header-title">
										<i class="feather icon-clipboard bg-c-blue"></i>
										<div class="d-inline">
											<h5>Type services</h5>
											<span>Delete Type services</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="page-header-breadcrumb">
										<ul class=" breadcrumb breadcrumb-title">
											<li class="breadcrumb-item">
												<a href="{{route('home')}}"><i class="feather icon-home"></i></a>
											</li>
											<li class="breadcrumb-item"><a href="{{route('index.Admin.services')}}">Type Sublimation</a>
											</li>
											<li class="breadcrumb-item">
												<a href="#!">Delete Type services</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">

									<div class="page-body">
										<div class="row">
											<div class="col-sm-12">

		                                      <div class="card">
													<div class="card-header">
														<h5>Delete Type services</h5>

													</div>
													<div class="card-block">
														<form id="number_form"  method="post">

														@csrf

															<div class="form-group row">
															Are You Sure thats you want to delete
                                                                this Type service :
                                                                <p style="font-weight: bold;font-size: 18px;">
                                                                    {{$services->enName}}</p>

															</div>
                                                            <div class="form-group row" style="color: red;">

                                                                Note : if you Delete it
                                                                    ! thats mean you will delete all Sub , services
                                                                    thats have connection with this Type !
                                                            </div>
															<div class="row">
																<label class="col-sm-2"></label>
																<div class="col-sm-10">
																	<button type="submit"
                                                                            class="btn btn-danger m-b-0">
                                                                        yes Delete!</button>

																	<a href="{{route('index.Admin.services')}}" class="btn btn-primary m-b-0">
																		no

																	</a>
																</div>

															</div>
														</form>
													</div>
												</div>




											</div>
										</div>
									</div>

								</div>
							</div>
						</div>


@endsection
