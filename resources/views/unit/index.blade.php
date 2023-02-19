@extends('layouts.master')

@section('content')

 <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb float-left">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Unit</li>
                        </ul>
                        <p class="float-right" style="color:red;">Total Items: {{$units->count()}} </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    @include('layouts.notification')
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Item List</strong></h2>
                        </div>
                <div class="span6 pull-right" style="margin-bottom: 10px;text-align:right;padding-right:10px;">
                <a class="btn btn-primary" href="javascriptvoid(0);" data-toggle="modal" title="add" data-target="#unitAdd"><i class="icon-plus p-1"></i>Add Unit</a>
        </div>
                      <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>
                                        <tr>
                                            <th>Actual Name</th>
                                            <th>Short Name</th>
                                            <th>Allow Decimal</th>
                                            <th>Base Unit Id</th>
                                            <th>Base Unit Multiplier</th>
                                            <th>Base Unit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($units as $item)
                                    <tr>
                                     <td>{{$item->actual_name}}</td>
                                     <td>{{$item->short_name}}</td>
                                     <td>{{$item->allow_decimal}}</td>
                                     <td>{{$item->base_unit_id}}</td>
                                     <td>{{$item->base_unit_multiplier}}</td>
                                     <td>{{$item->base_unit}}</td>
                                     <td>
                                        <a href="#" class="float-left btn btn-sm btn-outline-warning"  data-toggle="modal" title="edit" data-target="#editUnit"><i class="fas fa-edit"></i></a>
                                        <form method="post" action="{{route('unit.destroy',$item->id)}}">
                                            @csrf
                                            @method('delete')
                                        <a href="" class="dltBtn btn btn-sm btn-outline-danger" style="margin-left:7px;" data-toggle="tooltip" title="delete" data-id="{{$item->id}}"  data-placement="bottom"><i class="fas fa-trash-alt"></i></a>
                                    </form>
                                    </td>
                                    <div class="model">
                                         @include('unit.model')
                                    </div>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!---Add Unit Model-->

<div class="modal fade" id="unitAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Unit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('unit.store')}}" method="post">
          @csrf

             <div class="form-group">
               <label for="">Actual Name <span class="text-danger">*</span></label>
               <input type="text" name="actual_name" id="actual_name" placeholder="eg.ATLAS ABX1 "class="form-control" value="{{old('actual_name')}}" required>
            </div>
            @error('actual_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="form-group">
               <label for="">Short Name<span class="text-danger">*</span></label>
               <input type="text" name="short_name" id="short_name" placeholder="eg.ATLAS"class="form-control" value="{{old('short_name')}}" required>
            </div>
            @error('short_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

             <div class="form-group">
               <label for="">Allow Decimal<span class="text-danger">*</span></label>
               <input type="number" name="allow_decimal" id="allow_decimal" placeholder="eg.10"class="form-control" value="{{old('allow_decimal')}}" required>
            </div>
            @error('allow_decimal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="submit" id="btnSubmit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
    </div>
  </div>
</div>

<!------End Add Unit Model--------->
@endsection


@section('scripts')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    //Sweet Alerts

$('.dltBtn').click(function(e){
    var form=$(this).closest('form');
    var dataID=$(this).data('id');
    e.preventDefault();

    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    form.submit();
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});

});
</script>

@endsection
