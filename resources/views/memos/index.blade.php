@extends("layouts.my")
@section("content")
<div class="container">
    <div class="form-group">
        <form action="/memos" method="post">
            @csrf
            <textarea class="form-control" name="body" id="" cols="60" rows="10" required></textarea>
            <input type="hidden" name="token" value="{{ uniqid() }}">
            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
    <div class="list-group">
        @foreach ($memos as $memo)
            <a href="/memos/{{ $memo->token }}">{{ $memo->id }}</a>
        @endforeach
    </div>
</div>
@endsection