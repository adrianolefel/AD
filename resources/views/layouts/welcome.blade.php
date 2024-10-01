<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Asset Management System</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        .title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            background-color: #4299e1;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #3182ce;
        }
        .form-container {
            display: none;
            margin-top: 20px;
        }
        .welcome-image {
            width: 100%; /* Adjust image width as needed */
            height: auto; /* Maintain aspect ratio */
            margin: 20px 0; /* Add some margin around the image */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Welcome to IT Asset Management System</h1>
        <img src="{{ asset('admin_assets/img/9.jpg') }}" alt="Image description" class="welcome-image">
        <p>This system helps manage IT assets, network equipment, and user needs efficiently.</p>
        
        @if (Route::has('login'))
            <div class="text-center mt-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                @else
                    <a class="small" href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    
    <script>
        document.getElementById('showFormBtn').addEventListener('click', function() {
            document.getElementById('formContainer').style.display = 'block';
        });
    </script>
</body>
</html>