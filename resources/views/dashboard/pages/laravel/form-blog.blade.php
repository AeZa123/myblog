{{-- @extends('layouts.main_template-bs3') --}}
@extends('dashboard.layouts.layout_dashboard_bs3')
@section('title')
    From Blog
@endsection

@section('content')
    
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1 class="text-danger">Create Blog</h1><hr>
                <form action="{{ url('store/laravel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" required>

                    <div class="form-group">
                        <label class="col-form-label">category</label>
                        <select class="custom-select " name="category">
                            <option selected="selected">No category</option>
                            <option>HTML</option>
                            <option>CSS</option>
                            <option>Bootstrap</option>
                            <option>Tailwind</option>
                            <option>Javascript</option>
                            <option>Jquery & Ajax</option>
                            <option>Vue.js</option>
                            <option>Php</option>
                            <option>Laravel</option>
                        </select>
                    </div>

                    <label for="" class="mt-2">Description</label>
                    <textarea name="description" id="summernote" cols="30" rows="10" required></textarea>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-success mt-3">Create</button>
                        <a href="{{ url('/') }}" type="" class="btn btn-danger mt-3">Cancel</a>
                    </div>

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

    <script>
        $( "blockquote" ).last().addClass( "bg-dt" );
    </script>

@endsection