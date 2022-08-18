<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a href="{{ route('member.top') }}">{{ __('一覧へ戻る') }}</a>
        <h1>会員登録</h1>
        <form method="POST" action="{{route('member.store')}}">
        @csrf

        <div>
            <input type="text" name="name" size="40" maxlength="28" id="form-name" value="名前" required>
        </div>
        <div>
            <input type="tel" name="phone" size="40" maxlength="28" id="form-phone" value="電話番号" required>
        </div>
        <div>
            <input type="email" name="email" size="40" maxlength="28" id="form-email" value="メールアドレス" required>
        </div>
        <button type="submit">登録</button>

        </form>



</body>
</html>

