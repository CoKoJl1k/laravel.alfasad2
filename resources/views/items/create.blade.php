@extends('main')

@section('content')
    <div class="container">
        <h1>Add board</h1>
        <form method="POST"  action="{{route('items.store')}}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlTextarea">Name</label>
                <input name="name" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary my-1">Add board</button>
        </form>
        <div>
@endsection
