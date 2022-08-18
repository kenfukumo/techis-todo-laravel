<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>会員登録</title>
</head>
<body>

    <div>
            <h1 class="title02">会員登録</h1>
            <form method="post" action="store">
            {{ csrf_field() }}

            <div class="registerbox">
                <input type="text" name="name" size="40" id="form-name" placeholder="名前"  required>
            </div>
            <div class="registerbox">
                <input type="tel" name="phone"  size="40" id="form-phone" placeholder="電話番号"  required>
            </div>
            <div class="registerbox">
                <input type="email" name="email"  size="40" id="form-email" placeholder="メールアドレス"  required>
            </div>
            <div class="registerbutton">
                <button type="submit">登録</button>
            </div>

            </form>
     </div>

     <div class="top1"><a href="{{ route('member.top') }}">{{ __('一覧へ戻る') }}</a></div>


</body>
</html>
