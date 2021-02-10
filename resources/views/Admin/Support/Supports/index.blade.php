@extends('layouts.Admin')

@section('content')



<div class="page-header card">

	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-inbox bg-c-blue"></i>
				<div class="d-inline">
					<h5>Support</h5>
					<span>Display All Support Topics</span>
				</div>

			</div>

		</div>

		<div class="col-lg-4">

			<div class="page-header-breadcrumb">

				<ul class=" breadcrumb breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="{{route('home')}}"><i class="feather icon-home"></i></a>
					</li>
					<li class="breadcrumb-item"><a href="#!">Support Topics</a>
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
						@if(Session::has('msg'))
						<div class="alert alert-success icons-alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<i class="icofont icofont-close-line-circled"></i>
							</button>
							<p>{{Session::get('msg')}} </p>
						</div>
						@endif
						<div class="card">
							<div class="card-header">
								<h5>
                                    Support Topics
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="{{route('add.Admin.support')}}">
										<button class="btn waves-effect waves-light btn-grd-primary ">Add</button>
									</a>
								</h5>



							</div>
							<div class="card-block">
								<div class="dt-responsive table-responsive">
									<table id="order-table" class="table table-striped table-bordered nowrap">
										<thead>
											<tr>
												<th>Id</th>
												<th>Topic Title</th>
												<th>Section</th>
                                                <th>Created At</th>
												<th>Action</th>

											</tr>
										</thead>
										<tbody>
											<?php
																	$counter =1;
																	?>
											@foreach($supports as $supp)
											<tr>
												<td>{{$counter++}}</td>

												<td>{{$supp->enTitle}}</td>
												<td>{{$supp->Category->enName}}</td>
                                                <td>{{$supp->created_at}}</td>
												<td>

													<div class="dropdown-primary dropdown open">
														<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action</button>
														<div class="dropdown-menu" aria-labelledby="dropdown-2"
                                                             data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                                          
                                                            <div class="dropdown-divider"></div>
															<!-- <a class="dropdown-item waves-light waves-effect"
                                                               href="supports/{{ $supp->id }}/edit">Update</a> -->
															   <a class="dropdown-item waves-light waves-effect"
                                                               href="{{route('update.Admin.support',['id'=>$supp->id])}}">Update</a>
															  
															  
															<div class="dropdown-divider"></div>
                                                            <form action="supports/{{ $supp->id }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            <button onclick="{return confirm('Are You Sure !?')}" type="submit" class="btn btn-md btn-outline-primary" style="width: 100%">Delete</button>
                                                            </form>
														</div>
													</div>


												</td>
											</tr>

											@endforeach

										</tbody>

										<tfoot>
											<tr>
                                                <th>Id</th>
												<th>Title</th>
												<th>Section</th>
                                                <th>Created At</th>
                                                <th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>

		</div>
	</div>


</div>


@endsection
