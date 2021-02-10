@extends('layouts.Admin')
@section('content')



<div class="page-header card">
	<div class="row align-items-end">
		<div class="col-lg-8">
			<div class="page-header-title">
				<i class="feather icon-clipboard bg-c-blue"></i>
				<div class="d-inline">
					<h5>Blogs</h5>
					<span>Read Blog</span>
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
                        <a href="{{route('blogs.index')}}">
                            Blogs
                        </a>
					</li>
					<li class="breadcrumb-item">
						<a href="#!">Read</a>
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
								<h5>Read Blog</h5>

							</div>
							<div class="card-block">
                                <div class="col-md-12">
                                    <p><strong style="font-weight: bold">En Title:</strong> <br> {{ $blog->enTitle }}</p>
                                    <hr>
                                    <p><strong style="font-weight: bold">AR Title:</strong> <br> {{ $blog->arTitle }}</p>
                                    <hr>
                                    <p><strong style="font-weight: bold">BA Title:</strong> <br> {{ $blog->baTitle }}</p>
                                    <hr>
                                    <p><strong style="font-weight: bold">EN Body:</strong>  <br> {{ $blog->enInfo }}</p>
                                    <hr>
                                    <p><strong style="font-weight: bold">AR Body:</strong> <br> {{ $blog->arInfo }}</p>
                                    <hr>
                                    <p><strong style="font-weight: bold">BA Body:</strong> <br> {{ $blog->baInfo }}</p>
                                    <hr>
                                    <img src="{{ url('images/'.$blog->img) }}" alt="">
                                    <hr>
                                    <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary">Back</a>
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
