<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="{{asset('css/adminLogin.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
  <h1>Admin Login</h1>

  <form method="POST" action="{{ route('Adminlogin') }}">
    @csrf
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Login">
  </form>

</body>
</html>
