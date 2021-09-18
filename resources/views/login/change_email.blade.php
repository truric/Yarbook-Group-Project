<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>Yearbook</title>

    <link href="{{ asset('css/login_style.css') }}" rel="stylesheet">
</head>
<body>


<div class="wrapper fadeInDown">
    <div id="formContent">
{{--        <h1>Yearbook</h1>--}}
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{asset('fixed/images/AtecLogoComp.png')}}" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form>
            <h3>Recuperar password</h3>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="email de recuperação">
            <input type="submit" class="fadeIn fourth" value="Enviar código">
        </form>



    </div>
</div>
<!-- <div class="col-sm"> <img src="images/yearbook2.jpg" class="image"> </div> -->

</body>
</html>
