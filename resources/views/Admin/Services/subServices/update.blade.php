@extends('layouts.Admin')
@section('content')



<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-clipboard bg-c-blue"></i>
				<div class="d-inline">
					<h5>Sub Services</h5>
					<span>Update Sub Service</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class=" breadcrumb breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="{{route('home')}}"><i class="feather icon-home"></i></a>
					</li>
					<li class="breadcrumb-item">
                        <a href="{{route('index.Admin.subServices')}}">Sub Services</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#!">Update</a>
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
						@if(count($errors) > 0)
						<div class="alert alert-danger icons-alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<i class="icofont icofont-close-line-circled"></i>
							</button>
							<p>Upload Validation Error<br><br>
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</p>
						</div>
						@endif


						<div class="card">
							<div class="card-header">
								<h5>Update Product Sublimation</h5>

							</div>
							<div class="card-block">
								<form id="number_form" method="post" enctype="multipart/form-data">

									@csrf

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">En Name</label>
										<div class="col-sm-10">
											<input type="text" value="{{ old('enName',$subServices->enName) }}"
                                                   class="form-control" name="enName" id="less"
                                                   placeholder="En Name" required>
											<span class="messages"></span>
										</div>
									</div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">AR Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{ old('arName',$subServices->arName) }}"
                                                   class="form-control" name="arName" id="less"
                                                   placeholder="AR Name" required>
                                            <span class="messages"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <img src="{{url('images/'.$subServices->img)}}" alt="" width="250">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                          change  Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="img"
                                                   id="less" >
                                            <span>image resolution 319*200 px (png , gif , jpg) max size 100 kb</span>
                                        </div>
                                    </div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Type Services</label>
										<div class="col-sm-10">

											<select name="classId" class="myselect" style="width: 100%;">

												@foreach($services as $service)
												<option value="{{$service->id}}"
                                                {{ ($service->id ==$subServices->classId) ?  "selected" : '' }}
                                                >
                                                    {{$service->enName}}</option>
												@endforeach
											</select>
											<script type="text/javascript">
												$(".myselect").select2();
											</script>

											<span class="messages"></span>
										</div>
									</div>









									<div class="row">
										<label class="col-sm-2"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-primary m-b-0">Update</button>
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
