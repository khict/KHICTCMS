@extends('layouts.item')
@section('titel','Menu Page')
@section('function-name','Menus')
@section('items-content')
	<div class="row" id="item-button">
		<div class="button-layout">
			<div>
				<button type="button" class="btn btn-primary button-height"><a href="{{url('menu/create')}}"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New </a></button>
			</div>
		</div>
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-2">
	  			
	</div>
	<div class="col-sm-8 col-md-8 col-lg-10 right-side">
			<div class="row">
				<form class="form-inline">
				  <div class="form-group">
				    <label for="email">Search Menu</label>
				    <input type="text" class="form-control" name = "search-menu" placeholder="Search">
				  </div>
				  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</form>
			</div>
			<div class="row">
				<table class="table">
				    <thead>
				      <tr>
				      	
				      	<th>ID</th>
				        <th>Menu Name</th>
				        <th>Menu Parent</th>
				        <th>Description</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($menus as $menu)
					      <tr>					      	
					      	<td>{{$menu->MnuID}}</td>
					        <td>{{$menu->MnuName}}</td>
					        <td>{{$menu->MnuParrent}}</td>
					        <td>{{$menu->MnuDesc}}</td>
					        <td>
					        	<div>
									<button type="button" class="btn btn-success button-height"><a href="{{url('menu/'.$menu->MnuID.'/eidt')}}"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a></button>
									<button type="button" class="btn btn-info button-height"><a href="{{url('menu/'.$menu->MnuID)}}"> <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span> Delete</a></button>
								</div>
					        </td>
					      </tr>
				      @endforeach
				    </tbody>
				  </table>
			</div>
	</div>
@endsection

