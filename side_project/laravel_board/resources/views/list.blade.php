@extends('layout.layout')

@section('title', 'List')

@section('main')
<main>
    @forelse($data as $item)
        <div class="card" id="{{$item->b_id}}">
            <div class="card-body">
                <h5 class="card-title">{{$item->b_title}}</h5>
                <p class="card-text">{{$item->b_content}}</p>
                <a href="{{route('board.show', ['board' => $item->b_id])}}" class="btn btn-primary">상세</a>
            </div>
        </div>
    @empty
        <div>게시글 없음</div>
    @endforelse
</main>
@endsection