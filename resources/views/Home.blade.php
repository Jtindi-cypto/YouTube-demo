<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style ="border:3px solid  black;"></div>
<form action="/register" method="POST">
    @csrf
    <h2>Register</h2>
    <input name ="Name" type = "text" placeholder="Name">
    <input name = "Email" type ="text" placeholder="Email">
    <input name = "password" type="password" placeholder="password">
    <button >Register</button>
</form>
</body>
</html>
