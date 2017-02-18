@extends('layouts.item')
@section('function-name','Menus')
@section('items-content')
<div class="row" id="item-button">
	<div class="button-layout">
		<div>
			<button type="button" class="btn btn-primary button-height"><a href="{{url('menu/create')}}"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New </a></button>
			<button type="button" class="btn btn-success button-height"><a> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a></button>
			<button type="button" class="btn btn-info button-height"><a> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</a></button>
		</div>
	</div>
</div>

<div class="col-sm-4 col-md-4 col-lg-2">
  			
</div>
<div class="col-sm-8 col-md-8 col-lg-10 right-side">
		@yield('daboard')
</div>
@endsection

