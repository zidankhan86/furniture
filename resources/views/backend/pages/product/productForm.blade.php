@extends('backend.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Product Form -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            <h4 class="text-success text-center">Furniture</h4>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif

                <div class="row mt-4">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" id="exampleInputName1" name="name" placeholder="Enter name..">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputCategory" class="form-label">Select Category</label>
                        <select name="category_id"  class="form-control">
                            <option value="">---Select Category----</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputImage" class="form-label">Image </strong></label>
                    <input type="file" class="form-control dropify" name="image" placeholder="Product Image..">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                   

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Stock</label>
                        <input type="number" class="form-control" value="{{ old('stock') }}" id="exampleInputInhouseStock" name="stock" placeholder="Enter Stock.">
                        @error('stock')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="exampleInputPrice" value="{{ old('price') }}" name="price" placeholder="Enter Price..">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="exampleInputStatus" class="form-label">Status</label>
                        <select name="status" id="exampleInputStatus" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

              


                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea rows="5" value="{{ old('product_information') }}" name="product_information" id="editor2" class="form-control" placeholder="Write something here.."></textarea>
                    @error('product_information')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              
                <div class="mt-3">
                    <button type="submit" class="btn btn-dark">+ Add</button>
                </div>

            </form>
        </div>
    </div>
    </div>   
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });
</script>

<style>
    .ck-editor__editable[role="textbox"] {
        min-height: 200px;
        width: 100%;
    }

    .ck-content .image {
        max-width: 80%;
        margin: 20px auto;
    }
</style>



@endsection
