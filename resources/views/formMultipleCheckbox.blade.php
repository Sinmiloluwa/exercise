@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label><strong>Name :</strong></label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label><strong>Category :</strong></label><br>
                                <label><input type="checkbox" name="category[]" value="Laravel"> Laravel</label>
                                <label><input type="checkbox" name="category[]" value="JQuery"> JQuery</label>
                                <label><input type="checkbox" name="category[]" value="Bootstrap"> Bootstrap</label>
                                <label><input type="checkbox" name="category[]" value="Codeigniter"> Codeigniter</label>
                                <label><input type="checkbox" name="category[]" value="JQuery UI"> JQuery UI</label>
                            </div>
                            <div class="form-group">
                                <label><strong>Images :</strong></label><br>
                                <input type="file" name="image[]" value="img1">Main Image
                                <label><input type="file" name="image[]" value="img2"> </label>
                                <label><input type="file" name="image[]" value="img3"> </label>
                                <label><input type="file" name="image[]" value="img4"></label>
                                <label><input type="file" name="image[]" value="img5"></label>
                            </div>
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="form-control" rows="4" cols="40" name="description"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
</div>
@endsection
