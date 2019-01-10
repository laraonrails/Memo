<!DOCTYPE html>
<html>
<head>
    <title>メモ帳</title>
</head>
<body>
<form action="{{ url("memos") }}" method="post">
    @csrf
    <textarea name="body" id="" cols="60" rows="10" required></textarea>
    <input type="hidden" name="token" value="{{ uniqid() }}">
    <input type="submit" value="保存">
</form>
</body>
<hr>
@foreach ($memos as $memo)
    <a href="memos/{{$memo->token}}">{{$memo->id}}</a>
@endforeach
</html>