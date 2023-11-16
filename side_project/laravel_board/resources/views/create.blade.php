@extends('layout.layout')

@section('title', 'Create')

@section('main')

<main>    
    <form action="{{route('board.store')}}" method="POST" enctype="multipart/form-data">
        @csrf  {{--form(post) 안에 꼭 쓰기--}}
        <div class="modal-header">
            <input type="text" name="b_title" class="form-control" placeholder="제목을 입력하세요.">
        </div>
        <div class="modal-body">
            <textarea name="b_content" class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요."></textarea>
        </div>
        <div class="modal-footer">
            <a href="{{route('board.index')}}" class="btn btn-secondary" data-bs-dismiss="modal">닫기</a>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">작성</button>
        </div>
    </form>
</main>

@endsection