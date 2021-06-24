@extends('layouts.app')

@section('content')



<div class="card text-center">
	<div class="card-header">
		Add Car details: <div class="pull-right">
                <a class="btn btn-success" href="{{ route('car.index') }}" title="Create a project"> <i class="fas fa-backward"></i>
                    </a>
            </div>
	</div>
	 @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('car.store') }}" method="POST"> @csrf <!-- {{ csrf_field() }} -->

			 <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>


		 <div class="col-xs-12 col-sm-12 col-md-12">
		                <div class="form-group">
		                    <strong>Price:</strong>
		                    <input type="text" name="price" class="form-control" placeholder="Name">
		                </div>
		            </div>


			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			                <button type="submit" class="btn btn-primary">Submit</button>
			            </div>	


				</div>

</form>


</div>

@endsection