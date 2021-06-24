@extends('layouts.app')

@section('content')


<div class="card text-center">
	<div class="card-header" style=" padding: 25px; ">
		Car Information 

        <div class="pull-right">
                <a class="btn btn-success" href="{{ route('car.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
	</div>

	<div class="card-body">

		<div class="card-title"></div>

		<table class="table table-bordered table-responsive-lg">
		 <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
         
            <th width="280px">Action</th>
        </tr>

        @foreach($cars as $car)

		<tr>
			
				<td>{{++$i}}</td>
				<td>{{$car->name}}</td>
				<td>{{$car->price}}</td>
				<td>
				<form action="{{ route('car.destroy', $car->id)}}" method="POST">
				
                <a href="{{ route('car.show', $car->id) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>


                

                <a href="{{ route('car.edit', $car->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">

                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>

				</form>
				</td>
			</tr>	
            @endforeach		
		</table>
	</div>
</div>

 {!! $cars->links() !!}

@endsection