@extends('layouts.other')
@section('other')
<div class="container">
 <div class="table-wrapper">
<div class="table-wrapper">
<div class="modal-content">
  <div class="row">
  <div class="col-sm-6">
                        <h2>Edit <b>City</b> List</h2>
                    </div>

 <form action="/city/update/insert" method="POST">
                   <input type="hidden" name="id" value="{{ $cities->id }}">
                    
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label><h5>City Name</h5></label>
                            <input type="text" class="form-control" name="city_name" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Zip Code</h5></label>
                            <input type="text" class="form-control" name="zip_code" value="" required>
                        </div>                  
                    </div>
                    <div class="modal-footer">
                        <a href="/admin/list"><input type="button" class="btn btn-default" onclick="/admin" data-dismiss="modal" value="Cancel"></a>
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection