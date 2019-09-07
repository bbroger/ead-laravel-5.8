<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/website.css')}}"/>
    <title>Login</title>
</head>
<body>
    <div class="login-background">
        <div class="login-wrapper">
            <form action="" method="post">
                <h1>Faça o seu login</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, soluta.</p>
                    <input type="email" name="email" placeholder="E-mail" class="mt-20 input" required>
                    <input type="password" name="password" placeholder="Senha" class="input" required>
                <button type="submit" class="input button-primary">Login</button>    
            </form>
        </div>
    </div>
<script src="{{mix('js/website.js')}}"></script>
</body>
</html>