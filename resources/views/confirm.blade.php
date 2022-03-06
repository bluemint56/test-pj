<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/confirm.css" type="text/css" />
  <title>内容確認</title>
</head>
<body>
  <div class="title">
    <h2>内容確認</h2>
  </div>

  <form action="/thanks" method="POST">
    @csrf
    <table>
      <tr>
        <th><label>お名前</label></th>
        <td><p>{{$fullname}}</p></td>
        <input type="hidden" name="fullname" value="{{$fullname}}">
      </tr>
      <tr>
        <th><label>性別</label></th>
        <td><p>{{$gender}}</p></td>
        <input type="hidden" name="gender" value="{{$gender}}">
      </tr>
      <tr>
        <th><label>メールアドレス</label></th>
        <td><p>{{$email}}</p></td>
        <input type="hidden" name="email" value="{{$email}}">
      </tr>
      <tr>
        <th><label>郵便番号</label></th>
        <td><p>{{$postcode}}</p></td>
        <input type="hidden" name="postcode" value="{{$postcode}}">
      </tr>
      <tr>
        <th><label>住所</label></th>
        <td><p>{{$address}}</p></td>
        <input type="hidden" name="address" value="{{$address}}">
      </tr>
      <tr>
        <th><label>建物名</label></th>
        <td><p>{{$building_name}}</p></td>
        <input type="hidden" name="building_name" value="{{$building_name}}">
      </tr>
      <tr>
        <th><label>ご意見</label></th>
        <td><p>{{$opinion}}</p></td>
        <input type="hidden" name="opinion" value="{{$opinion}}">
      </tr>
    </table>
    <div class="btn">
      <button type="submit" class="s-btn">送信</button>
</form>
    <br><a href="/" class="back">修正する</a>
</div>
</body>
</html>