<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify User</title>
</head>
<body>
    <h4>Hi, {{ $user->name }}</h4>

    <p>Please <a href="{{ route('admin.user.verify_email',$user->verifyUser->token) }}">click here</a> for verify your email.</p>


    <p>Thanks</p>


</body>
</html>

