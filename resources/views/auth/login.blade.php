<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>
        Login Inventoris
    </title>

    {{-- Bootstrap --}}
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    {{-- Font Awesome --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Google Font --}}
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

    <style>

        *{

            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;

        }

        body{

            min-height:100vh;

            display:flex;

            justify-content:center;
            align-items:center;

            overflow:hidden;

            background:
            linear-gradient(
                135deg,
                #0f172a,
                #1e3a8a,
                #2563eb
            );

            position:relative;

        }

        /* BACKGROUND */

        .circle{

            position:absolute;

            border-radius:50%;

            filter:blur(80px);

            opacity:0.5;

        }

        .circle1{

            width:350px;
            height:350px;

            background:#3b82f6;

            top:-100px;
            left:-100px;

        }

        .circle2{

            width:300px;
            height:300px;

            background:#8b5cf6;

            bottom:-100px;
            right:-100px;

        }

        /* CARD */

        .login-card{

            width:430px;

            padding:45px;

            border-radius:35px;

            background:
            rgba(255,255,255,0.08);

            backdrop-filter:blur(22px);

            border:
            1px solid rgba(255,255,255,0.15);

            box-shadow:
            0 25px 60px rgba(0,0,0,0.3);

            position:relative;

            z-index:10;

            animation:fadeIn 1s ease;

        }

        @keyframes fadeIn{

            from{

                opacity:0;
                transform:translateY(30px);

            }

            to{

                opacity:1;
                transform:translateY(0);

            }

        }

        /* LOGO */

        .logo-box{

            width:95px;
            height:95px;

            margin:auto;

            border-radius:30px;

            background:
            linear-gradient(
                135deg,
                #3b82f6,
                #8b5cf6
            );

            display:flex;

            justify-content:center;
            align-items:center;

            margin-bottom:25px;

            box-shadow:
            0 15px 35px rgba(59,130,246,0.5);

        }

        .logo-box i{

            font-size:42px;

            color:white;

        }

        /* TITLE */

        .login-title{

            text-align:center;

            font-size:38px;

            font-weight:800;

            color:white;

            margin-bottom:8px;

        }

        .login-subtitle{

            text-align:center;

            color:#dbeafe;

            margin-bottom:35px;

            font-size:15px;

        }

        /* LABEL */

        .form-label{

            color:#e0e7ff;

            font-size:14px;

            margin-bottom:10px;

        }

        /* INPUT */

        .input-group{

            margin-bottom:24px;

        }

        .input-group-text{

            border:none;

            background:
            rgba(255,255,255,0.1);

            color:white;

            border-radius:
            18px 0 0 18px;

            padding:0 18px;

        }

        .form-control{

            height:60px;

            border:none;

            background:
            rgba(255,255,255,0.1);

            color:white;

            border-radius:
            0 18px 18px 0;

            font-size:15px;

        }

        .form-control::placeholder{

            color:#cbd5e1;

        }

        .form-control:focus{

            background:
            rgba(255,255,255,0.15);

            color:white;

            box-shadow:none;

        }

        /* BUTTON */

        .login-btn{

            width:100%;

            height:60px;

            border:none;

            border-radius:20px;

            background:
            linear-gradient(
                135deg,
                #3b82f6,
                #8b5cf6
            );

            color:white;

            font-weight:700;

            font-size:16px;

            transition:0.3s;

            box-shadow:
            0 15px 30px rgba(59,130,246,0.4);

        }

        .login-btn:hover{

            transform:translateY(-4px);

            box-shadow:
            0 20px 40px rgba(59,130,246,0.5);

        }

        /* ALERT */

        .alert{

            border:none;

            border-radius:18px;

            margin-bottom:20px;

        }

        /* FOOTER */

        .login-footer{

            text-align:center;

            margin-top:25px;

            color:#cbd5e1;

            font-size:13px;

        }

    </style>

</head>

<body>

    {{-- BACKGROUND --}}
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>

    {{-- CARD --}}
    <div class="login-card">

        {{-- LOGO --}}
        <div class="logo-box">

            <i class="fa-solid fa-laptop-code"></i>

        </div>

        {{-- TITLE --}}
        <h1 class="login-title">
            Welcome Back
        </h1>

        <p class="login-subtitle">
            Login ke Sistem Inventoris Bengkel Komputer
        </p>

        {{-- ERROR --}}
        @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

        @endif

        {{-- FORM --}}
        <form
        action="{{ route('login') }}"
        method="POST">

            @csrf

            {{-- USERNAME --}}
            <label class="form-label">

                Username

            </label>

            <div class="input-group">

                <span class="input-group-text">

                    <i class="fa-solid fa-user"></i>

                </span>

                <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan username"
                required>

            </div>

            {{-- PASSWORD --}}
            <label class="form-label">

                Password

            </label>

            <div class="input-group">

                <span class="input-group-text">

                    <i class="fa-solid fa-lock"></i>

                </span>

                <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required>

            </div>

            {{-- BUTTON --}}
            <button
            type="submit"
            class="login-btn">

                <i class="fa-solid fa-right-to-bracket"></i>

                Login Sekarang

            </button>

        </form>

        {{-- FOOTER --}}
        <div class="login-footer">

            © 2026 Inventoris Bengkel Komputer

        </div>

    </div>

</body>
</html>