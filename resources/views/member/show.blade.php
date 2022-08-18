<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>編集</title>
</head>
<body>
    <div>
        <div>
            <h1 class="title02">会員登録　会員ID:{{$member->id}}</h1>
        </div>

        <div>
            <div class="top1">
                <form action="update" method="post">
                    @method('PUT')
                    {{ csrf_field() }}

                    <div class="registerbox">
                        <input type="hidden" name="id" size="40" value="{{ $member->id }}"/>
                    </div>
                    
                    <div class="registerbox">
                        <input type="text" name="name" size="40" value="{{ $member->name }}"/>
                    </div>
                    
                    <div>
                        <input type="text" name="phone" size="40" value="{{ $member->phone }}"/>
                    </div>
                    
                    <div>
                        <input type="text" name="email" size="40" value="{{ $member->email }}"/>
                    </div>
                    
                    <div class="registerbutton"> 
                        <input type="submit" value="更新"/>
                    </div>
                </form>
            <form action="delete" method="post">
                    @method('DELETE')
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $member->id }}"/>
                    <input type="submit" value="削除"/> 
            </form>

            </div>
        </div>


    </div>
    
</body>
</html>