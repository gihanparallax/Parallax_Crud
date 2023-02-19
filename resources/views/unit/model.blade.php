
<!---Edit Unit Model-->


<div class="modal fade" id="editUnit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Unit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('unit.update',$item->id)}}" method="post">
          @csrf
          @method('patch')
             <div class="form-group">
               <label for="">Actual Name <span class="text-danger">*</span></label>
               <input type="text" name="actual_name" id="actual_name" placeholder="eg.ATLAS ABX1 "class="form-control" value="{{$item->actual_name}}" required>
            </div>
            @error('actual_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="form-group">
               <label for="">Short Name<span class="text-danger">*</span></label>
               <input type="text" name="short_name" id="short_name" placeholder="eg.ATLAS"class="form-control" value="{{$item->short_name}}" required>
            </div>
            @error('Short_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

             <div class="form-group">
               <label for="">Allow Decimal<span class="text-danger">*</span></label>
               <input type="number" name="allow_decimal" id="allow_decimal" placeholder="eg.10"class="form-control" value="{{$item->allow_decimal}}" required>
            </div>
            @error('allow_decimal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="submit" class="addBtn btn btn-primary">Update changes</button>
      </div>
      </form>
    </div>


    </div>
  </div>
</div>

<!------End Edit Unit Model----------->
