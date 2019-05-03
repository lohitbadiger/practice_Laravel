<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Welcome TO Login</h1>   
<form method="POST"
 action="{{URL::to('/submit')}}">

    <input type="text" name="name">
    <input type="password" name="password">
    <input type="hidden" name="token" vlaue="{{csrf_token()}}">
    <button type="submit">Submit</button>
    </form>
</body>
</html>