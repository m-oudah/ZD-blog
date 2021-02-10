@extends('layouts.Admin')
@section('content')



<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-clipboard bg-c-blue"></i>
				<div class="d-inline">
					<h5>Blogs</h5>
					<span>Add New Blog</span>
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
                        <a href="{{route('index.Admin.Blog')}}">
                            Blogs
                        </a>
					</li>
					<li class="breadcrumb-item">
						<a href="#!">Add</a>
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
							<p>
                                Upload Validation Error<br><br>
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</p>
						</div>
						@endif

                        @if(isset($err))
                            <div class="alert alert-danger close">
                                <strong>Opps</strong>
                                {{ $err }}
                            </div>
                        @endif


						<div class="card">
							<div class="card-header">
								<h5>Add New Blog</h5>

							</div>
							<div class="card-block">
								<form id="number_form" method="post" enctype="multipart/form-data" action="{{ route('add.Admin.Blog') }}">
									@csrf
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">EN Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control {{ ($errors->has('enTitle')) ? 'is-invalid' : '' }} " name="enTitle" id="less"
                                                   placeholder="en Title" value="{{ old('enTitle') }}" required>
											@if($errors->has('enTitle'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('enTitle')  }}</strong>
                                            </div>
                                            @endif
										</div>
									</div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">AR Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control {{ ($errors->has('arTitle')) ? 'is-invalid' : '' }}" name="arTitle" id="less"
                                                   placeholder="ar Title" value="{{ old('arTitle') }}" required>
                                            @if($errors->has('arTitle'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('arTitle')}}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">BA Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control {{ ($errors->has('baTitle')) ? 'is-invalid' : '' }}" name="baTitle" id="less"
                                                   placeholder="BA Title" value="{{ old('baTitle') }}" required>
                                            @if($errors->has('baTitle'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('baTitle')  }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">EN Body</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control {{ ($errors->has('enInfo')) ? 'is-invalid' : '' }}" name="enInfo" id="" cols="30" rows="10" required>{{ old('enInfo') }}</textarea>
                                            @if($errors->has('enInfo'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('enInfo')  }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">AR Body</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control {{ ($errors->has('arInfo')) ? 'is-invalid' : '' }}" name="arInfo" id="" cols="30" rows="10" required>{{ old('arInfo') }}</textarea>
                                            @if($errors->has('arInfo'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('arInfo')  }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">BA Body</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control {{ ($errors->has('baInfo')) ? 'is-invalid' : '' }}" name="baInfo" id="" cols="30" rows="10" required>{{ old('baInfo') }}</textarea>
                                            @if($errors->has('baInfo'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('baInfo')  }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                           Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="img"
                                                   id="less"  required>
                                            <span>image resolution 800*600 px (jpg) max size 300 kb </span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label">Blog Category</label>
										<div class="col-sm-10">

											<select name="categId" class="myselect" style="width: 100%;">

												@foreach($blogCategs as $categ)
												<option value="{{$categ->id}}">{{$categ->enName}}</option>
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
