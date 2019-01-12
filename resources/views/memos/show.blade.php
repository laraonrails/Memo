@extends("layouts.my")
@section("content")
<div class="container">
    <div class="card">
        <div class="card-body">
            {{ $memo->body }}

        </div>
    </div>
    <a class="btn btn-primary" href="/">戻る</a>
</div>
@endsection