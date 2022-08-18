<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
    <div class="sidebar" style="width: 15%; float: left; background-color:#aaa;">
        側邊欄
    </div>

    <div class="container">
        <!--替換模板-->
        @yield('content')
    </div>
</body>

</html>