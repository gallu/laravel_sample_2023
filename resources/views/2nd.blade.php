{{-- 2nd.blade.php --}}
<!doctype html>
<h1>new Page</h1>

入力されたのは{{ $id ?? '' }} です。<br>
配列は {{ $array['string'] ?? '' }} でアクセスします。

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/test/post" method="POST">
@csrf
数値<input name="num" value="{{ old('num') }}"><br>
文字<input name="str" value="{{ old('str') }}"><br>
<button>送信</button>
</form>
