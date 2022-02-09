<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="centering.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="registration.js"></script>
</head>
<body>
    <div class="container">
        <form  class="registration" id="registrationForm">
            <div>
                <p>username:</p>
                <input type="text" name="login">
            </div></>
            <div>
                <p>password:</p>
                <input type="password" name="password">
            </div>
            <div>
                <p>confirm password:</p>
                <input type="password" name="password">
            </div>
            <div>
                <p>email:</p>
                <input type="text" name="email">
            </div>
            <div>
                <p>name:</p>
                <input type="text" name="name">
            </div>
            <div>
                <input type="submit" value="register">
            </div>
                <button id="btn">btn</button>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#form_signup').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'signup.php',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $('#form_signup_text').html(data.msg);
                    },
                    error: function (data) {
                        console.log(data);
                        $('#form_signup_text').html(data.msg);
                    }
                });
            });
        });
    </script>
</body>
</html>