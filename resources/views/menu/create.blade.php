@extends('layouts.item')
@section('title', 'Add Menu')
@section('function-name','Add New Menu')
@section('button')
	<p></p>
@endsection
@section('items-content')
<form class="form-horizontal" method="post" action="/menu" name="create-menu">
	 {{ csrf_field() }}
	<div class="row" id="item-button">
		<div  class="button-layout">
			<button type="submit" name = "save"class="btn btn-success button-height"> <span class="glyphicon glyphicon-pencil " aria-hidden="true"></span> save </button>
			<button type="submit" class="btn btn-primary button-height"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> save & close</button>
			<button type="submit" class="btn btn-primary button-height"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> save & new</button>
			<button type="submit" name="cancel" class="btn btn-primary button-height"> <span class="glyphicon glyphicon-remove-circle text-danger" aria-hidden="true"></span> Cancel</button>
		</div>
	</div>
	<div class = "row">
		<div class="col-sm-4  col-md-4 ">
			<div class="form-group">
			    <label for="menu" class="col-sm-4 control-label">Menu</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="menu" name = "menu-name" placeholder="Enter Menu Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="menu" class="col-sm-4 control-label">Menu Parent</label>
			    <div class="col-sm-8">
			      	<select class="form-control" name="menu-parent">
					  <option selected disabled>Parent Menu</option>
					  @foreach ($parents as $parent)
						   <option value="{{ $parent->MnuID }}">{{$parent->MnuName}}</option>
					@endforeach
					</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="desc" class="col-sm-4 control-label">Description</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="description" name="menu-desc" placeholder="Description">
			    </div>
			  </div>
		</div>
	</div>
</form>
@endsection

