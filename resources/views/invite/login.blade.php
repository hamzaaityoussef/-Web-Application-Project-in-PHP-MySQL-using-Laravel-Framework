<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* j'import ici des fonts pour travailler avec */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            ;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f9f9f9;
        }

        .wrapper {
            position: relative;
            width: 800px;
            height: 500px;
            background: linear-gradient(90deg, #54880e, #f2f2f2);
            border-radius: 50px;
            box-shadow: 0 0 60px rgba(0, 0, 0, .3);
            padding: 60px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .wrapper .text-right {
            position: absolute;
            top: 60px;
            right: 180px;
            color: #f2f2f2;
            text-shadow: 0 0 20px rgba(0, 0, 0, .3);
            font-size: 50px;
            /* user-select: none; */
            font-family: 'Parisienne', cursive;

        }

        .wrapper .text-right::before {
            content: 'back';
            position: absolute;
            top: 60px;
            right: -50px;
        }

        .form-wrapper {
            z-index: 2;
        }

        /* .wrapper.active .form-wrapper.login {
            transition-delay: 0s;
            transform: translateX(-400px);
        } */

        .wrapper .form-wrapper .register {
            position: absolute;
            margin-top: 15px;
            transform: translateX(-400px);
            transition: .7s ease-in-out;
        }

        .wrapper.active .form-wrapper  {
            transition-delay: .7s;
            transform: translateX(0);
        }

        h2 {
            font-size: 2em;
            text-align: center;
            color: #f2f2f2;
        }

        .input-box {
            position: relative;
            width: 320px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: 2px solid #f2f2f2;
            outline: none;
            border-radius: 40px;
            font-size: 1em;
            color: #f2f2f2;
            padding: 0 20px 0 40px;

        }

        .input-box input::placeholder {
            color: rgba(255, 255, 255, .3);
        }

        .input-box .icon {
            position: absolute;
            left: 15px;
            color: #f2f2f2;
            font-size: 1.2em;
            line-height: 55px;
        }

        

        button {
            width: 100%;
            height: 45px;
            background: #f2f2f2;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            color: #54880e;
            font-weight: 500;
            margin-bottom: 25px;
        }

        button:hover {
            background-color: #2e4d08;
        }

        .wrapper{
            background-image: url("/images/invite/fst.jpeg");
            background-size:cover;
            background-repeat: no-repeat;
        }
        div>a{
            background-color: #2e4d08;
            color: white;
            
            font-weight:600;
            padding: 0px 3px 2px 3px;
            margin-left: 30px;
            
            border-radius: 5px;
        }
        div>a:hover {
            color: #54880e;
            background-color:rgb(254, 254, 254);
        }
       
    </style>
</head>

<body>
    <div class="wrapper">
            
        <h2 class="text-right">Welcome</h2>
        <div class="form-wrapper login">
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email"  placeholder="Email" name="email" required>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit">Login</button>
                <div>
                    <a href="/"  >continue en tant que <span >invite</span></a>
                </div>
                
            </form>
        </div>
   
    </div>
