@extends('layouts.app')

@section('content')
    <div class="table-title">
        <button type="button" class="btn btn-primary btn-lg">Скрыть отчёт</button>
    </div>
    <div class="table-grid">
        <div class="table-header">id</div>
        <div class="table-header">uuid</div>
        <div class="table-header">name</div>
        <div class="table-header">amount</div>
        <div class="table-header">price</div>
        <div class="table-header">created_at</div>
        <div class="table-header">updated_at</div>
        @foreach($items as $item)
            <div class="table-cell">{{$item->id}}</div>
            <div class="table-cell">{{$item->uuid}}</div>
            <div class="table-cell">{{$item->name}}</div>
            <div class="table-cell">{{$item->amount}}</div>
            <div class="table-cell">{{$item->price}}</div>
            <div class="table-cell">{{$item->created_at}}</div>
            <div class="table-cell">{{$item->updated_at}}</div>
        @endforeach
    </div>
@endsection


