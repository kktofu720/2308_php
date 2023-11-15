@extends('layout.layout')

@section('title', 'Detail')

@section('main')
<main>
    @forelse($data as $item)
        <h5 class="card-title">{{$item->b_title}}</h5>
        <p class="card-text">{{$item->b_content}}</p>
    @empty
    @endforelse
</main>
@endsection