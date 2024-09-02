@extends('backend.master')

@section('content')
<div class="container-fluid">
    <div class="row">
      

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                    <div class="basic-form">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto p-5">
                            @csrf
                
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Type</label>
                                    <input type="text" value="{{ old('type') }}" class="form-control" id="exampleInputName2" name="type" placeholder="Fruit">
                                    @error('type')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>                  
                                    </select>
                                    @error('status')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                          
                           
                           
                            <button type="submit" class="btn btn-dark">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      

    </div>
</div>


@endsection