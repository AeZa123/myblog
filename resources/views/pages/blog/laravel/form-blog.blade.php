@extends('layouts.main_template-bs3')
@section('title')
    From Blog
@endsection

@section('content')
    
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1 class="text-danger">test blog</h1>
                <form action="{{ url('create-blog') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                    <label for="">Description</label>
                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>

                </form>
            </div>
        </div>
    </div>

    <script>
        $('#summernote').summernote({
          placeholder: 'text',
          tabsize: 2,
          height: 300
        });
    </script>

@endsection