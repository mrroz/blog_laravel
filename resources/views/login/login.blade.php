<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link rel="stylesheet" href="../Style2.css">
    <script src="#"></script>
</head>

<body>
    <div class="container">
        <img src="../user.png" alt="USER-LOGO">

        <form action="{{route('post.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <h1>ورود به پنل</h1>
            <input type="text"  name="username" placeholder="نام کاربری" required>
            <input type="password"  name="password" placeholder="رمز" required>
            <input type="submit" value="ورود">

            <hr>


        </form>


    </div>
</body>


</html>
