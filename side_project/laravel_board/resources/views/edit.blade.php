@extends('layout.layout')

@section('title', 'Edit')

@section('main')

<main>    
    <form action="{{route('board.update', ['board' => $data->b_id])}}" method="POST" enctype="multipart/form-data">
        @csrf  {{--form(post) 안에 꼭 쓰기--}}
        @method('put')
        <div class="modal-header">
            <input type="text" name="b_title" class="form-control" value="{{$data->b_title}}">
        </div>
        <div class="modal-body">
            <textarea name="b_content" class="form-control" cols="30" rows="10">{{$data->b_content}}</textarea>
        </div>
        <div class="modal-footer">
            <a href="{{route('board.show', ['board' => $data->b_id])}}" class="btn btn-secondary" data-bs-dismiss="modal">취소</a>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">수정</button>
        </div>
    </form>
</main>

@endsection