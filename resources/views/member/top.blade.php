<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <title>一覧画面</title>
</head>
<body>


        <h1 class="title01">一覧表示</h1>

        <table class="design01">
        <thead>
                <tr>
                <!-- <th>ID</th> -->
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th>編集</th>
                </tr>
        </thead>   
        @foreach($members as $member)
                <tr>
                <!-- <td>{{$member->id}}</td> -->
                <td>{{$member->name}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->email}}</td>
                <td><a href="show/{{$member->id}}">編集</a></td>
                </tr>
        @endforeach

         
        </table>

        <div class="top1"><a href="{{ route('member.register') }}">{{ __('新規作成') }}</a></div>


        


</body>
</html>

