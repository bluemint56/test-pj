<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/index.css" type="text/css" />
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <title>お問い合わせ</title>
</head>
<body>
<div class="title">
  <h2>お問い合わせ</h2>
</div>

<div class="form">
<form action="/confirm" method="POST">
  @csrf
<table>
  <tr>
    <label><th>お名前<span>※</span></th></label>
    <td>
      <ul>
        <li>
          <input type="text" name="fullname" value="{{ old('fullname') }}">
            <p class="exa">例）山田</p>
          @if ($errors->has('fullname'))
            <p class="vali">{{$errors->first('fullname')}}</p>
          @endif
        </li>
        <li>
          <input type="text" name="fullname" value="{{ old('fullname') }}">
          <p class="exa">例）太郎</p>
          @if ($errors->has('fullname'))
            <p class="vali" >{{$errors->first('fullname')}}</p>
          @endif
        </li>
      </ul>
    </td>
  </tr>
  <tr>
    <label><th>性別<span>※</span></th></label>
    <td>
      <input type="radio" name="gender" value="1" class="radio" value="{{ old('gender') }}" checked> 男性
      <input type="radio" name="gender" value="2" class="radio" value="{{ old('gender') }}"> 女性
      @if ($errors->has('gender'))
            <p class="vali">{{$errors->first('gender')}}</p>
          @endif
    </td>
  </tr>
  <tr>
    <label><th>メールアドレス<span>※</span></th></label>
    <td>
      <input type="email" name="email" style="width:350px;" value="{{ old('email') }}">
      <p class="exa">例）test@example.com</p>
      @if ($errors->has('email'))
            <p class="vali">{{$errors->first('email')}}</p>
          @endif
    </td>
  </tr>
  <tr>
    <label><th>郵便番号<span>※</span></th></label>
    <td>
      <div class="post">
        <p class="p-code">〒</p><input type="text" name="postcode" style="width:330px;"value="{{ old('postcode') }}" onKeyUp="AjaxZip3.zip2addr('postcode', '', 'address', 'address');">
      </div>
          <p class="exa">例）123-4567</p>
          @if ($errors->has('postcode'))
            <p class="vali">{{$errors->first('postcode')}}</p>
          @endif
    </td>
  </tr>
  <tr>
    <label><th>住所<span>※</span></th></label>
    <td>
      <input type="text" name="address" style="width:350px;" value="{{ old('address') }}">
      <p class="exa" >例）東京都渋谷区千駄ヶ谷1-2-3</p>
      @if ($errors->has('address'))
            <p class="vali" >{{$errors->first('address')}}</p>
          @endif
    </td>
  </tr>
  <tr>
    <label><th>建物名</th></label>
    <td><input type="text" name="building_name"style="width:350px;" value="{{ old('building_name') }}" >
        <p class="exa">例）千駄ヶ谷マンション101</p>
        @if ($errors->has('building_name'))
            <p class="vali">{{$errors->first('building_name')}}</p>
          @endif
    </td>
  </tr>
  <tr>
    <label><th>ご意見<span>※</span></th></label>
    <td>
      <textarea name="opinion" row="5" cols="40" >{{ old('opinion') }}</textarea>
      @if ($errors->has('opinion'))
            <p class="vali">{{$errors->first('opinion')}}</p>
          @endif
    </td>
    </tr>
</table>
<div class="sub-btn">
<button type="submit" class="s-btn">確認</button>
</div>
</form>
</div>
</body>
</html>