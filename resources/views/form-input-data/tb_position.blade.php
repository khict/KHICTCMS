@extends('layouts.item')
@section('title','Position')
@section('function-name','Position')
@section('items-content')
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
             <div class="form-group">
               <label class="control-label col-sm-2" for="PosName">Pos_Name</label>
               <div class="col-sm-10">
             <input type="email" class="form-control" id="Pos_Name" placeholder="Post Name">
          </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-2" for="Pos_Location">Pos_Location</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="Pos_Location" placeholder="Post Location">
             </div>
              </div>
              <div class="form-group">
         <select class="selectpicker selcetEdit">
  <optgroup label="Picnic">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </optgroup>
  
</select>

  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Create_Date">Create_Date</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="Create_Date" placeholder="Create Date">
            </div>
              </div>
              <div class="form-group">
          <label class="control-label col-sm-2" for="Update_Date">Update_Date</label>
        <div class="col-sm-10">
      <input type="email" class="form-control" id="Update_Date" placeholder="Update Date">
    </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for=""></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="" placeholder="">
            </div>
              </div>  
              <div class="form-group">
          <label class="control-label col-sm-2" for=""></label>
        <div class="col-sm-10">
      <input type="email" class="form-control" id="" placeholder="">
    </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for=""></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="" placeholder="">
            </div>
              </div>              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
