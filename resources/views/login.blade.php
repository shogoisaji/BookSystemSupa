<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <form name="login_form" action="/bookRentalSystem/login" method="post">
    @csrf
    <div class="login_form_top">
      <h1>LOGIN</h1>
    </div>
    <div class="login_form_btm">
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="submit">
    </div>
  </form>
</body>
</html>