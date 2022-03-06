<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/manage.css" type="text/css" />
  <title>管理システム</title>
</head>
<body>
  <div class="title">
    <h2>管理システム</h2>
  </div>

  <div class="search">
    <form action="/manage" method="POST">
      @csrf
      <label>お名前</label>
        <input type="text" name="fullname" style="width:200px;" class="find">
      <label>性別</label>
        <input type="radio" name="gender" value="1 && 2"checked>全て
        <input type="radio" name="gender" value="1">男性
        <input type="radio" name="gender" value="2">女性<br>
      <label>登録日</label>
        <input type="date" name="created_at" style="width:200px;" class="find">~<input type="date" name="created_at_until" style="width:200px;" class="find"><br>
      <label>メールアドレス</label>
        <input type="text" name="email" style="width:200px;" class="find"><br>

      <div class="sub-btn">
      <button type="submit" class="s-btn">検索</botton>
      </div>
      <div class="reset-btn">
      <a href="/manage" class="reset">リセット</a>
      </div>
</form>
</div>
<div class="page">
<p>{{ $contacts->appends(request()->input())->links('vendor.pagination.semantic-ui') }}</p>
</div>
<div class="result">
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th></th>
    </tr>

      @foreach($contacts as $contact)
      <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->fullname}}</td>
        <td>@if($contact->gender==1)男性 @else女性 @endif</td>
        <td>{{$contact->email}}</td>
        <td>{{\Illuminate\Support\Str::limit($contact->opinion, 25, '...')}}</td>
        <form action="/delete" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{$contact->id}}">
        <td><button type="submit" class="delete">削除</button></td>
        </form>
      </tr>
      @endforeach
</table>
</div>
</body>
</html>