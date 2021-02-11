<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>You’re registered to 44th IPAMS and 6th SELF Registration: {{$user['name']}}</h2>
<p>Join now to start collaborating and please update your profile!</p>
<p>Email: {{$user['email']}}</p>
<p>Username: {{$user['username']}}</p>
<div class="box">
<a class="button"  href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
</div>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #E5FAF8;
        background-size:cover;
        height: 100vh;
    }

    h2 {
        text-align: center;
        font-family: Tahoma, Arial, sans-serif;
        margin: 80px 0;
    }
    p {
        text-align: center;
        font-family: Tahoma, Arial, sans-serif;
        margin: 20px 0;
    }
    .box {
        width: 40%;
        margin: 0 auto;
        background: rgba(255,255,255,0.2);
        padding: 35px;
        border: 2px solid #fff;
        border-radius: 20px/50px;
        background-clip: padding-box;
        text-align: center;
    }

    .button {
        font-size: 1em;
        padding: 10px;
        color: #fff;
        border: 2px solid #3e87e3;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;
        background: #3e87e3

    }
    .button:hover {
        background: #3e87e3
    }

    .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    @media screen and (max-width: 700px){
        .box{
            width: 70%;
        }

    }
</style>