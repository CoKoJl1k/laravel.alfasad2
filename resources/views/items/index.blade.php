
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            @if(isset ($message))
                <div class="alert alert-warning" role="alert">
                    <ul class="list-unstyled mb-0">
                            <li>{{ $message }}</li>
                    </ul>
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">uuid</th>
                    <th scope="col">name</th>
                    <th scope="col">amount</th>
                    <th scope="col">price</th>

                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">   {{$item->id}}</th>
                        <td>{{$item->uuid}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->amount}}</td>
                        <td>{{$item->price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


