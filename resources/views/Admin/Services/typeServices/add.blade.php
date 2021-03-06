@extends('layouts.Admin')
@section('content')



<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-clipboard bg-c-blue"></i>
				<div class="d-inline">
					<h5>Type services</h5>
					<span>Add Type services</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="page-header-breadcrumb">
				<ul class=" breadcrumb breadcrumb-title">
					<li class="breadcrumb-item">
						<a href="{{route('home')}}"><i class="feather icon-home"></i></a>
					</li>
					<li class="breadcrumb-item"><a href="{{route('index.Admin.services')}}">Type services</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#!">Add Type services</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
            @if(isset($msg))
                <div class="alert alert-success icons-alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icofont icofont-close-line-circled"></i>
                    </button>
                    <p>{{$msg}} </p>
                </div>
            @endif
			<div class="page-body">
				<div class="row">
					<div class="col-sm-12">

						<div class="card">
							<div class="card-header">
								<h5>Add Type Sublimation</h5>

							</div>
							<div class="card-block">
								<form id="number_form" method="post" enctype="multipart/form-data">

									@csrf

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">En Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control {{ $errors->has('enName') ? 'is-invalid' : '' }} " name="enName"
                                                   id="less" placeholder="En Name" value="{{ old('enName') }}" required >
                                            @if($errors->has('enName'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('enName') }}</strong>
                                                </div>
                                            @endif
										</div>
									</div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">AR Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control {{ $errors->has('arName') ? 'is-invalid' : '' }} "
                                                   name="arName" id="less" placeholder="AR Name"  value="{{ old('arName') }}" required>
                                            @if($errors->has('arName'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('arName') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>


									<div class="row">
										<label class="col-sm-2"></label>
										<div class="col-sm-10">
											<button type="submit" class="btn btn-primary m-b-0">Add</button>
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
