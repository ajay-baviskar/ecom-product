<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.site_title') }}</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Inline Styles for Demo -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Navbar styling */
        .navbar {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo a {
            color: #ffffff;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .navbar .language-switcher a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 5px;
            font-size: 1rem;
        }

        .navbar .language-switcher a:hover {
            text-decoration: underline;
        }

        /* Container styling */
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* General button styling */
        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Footer styling */
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            background-color: #343a40;
            color: #ffffff;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="{{ url('/') }}">{{ __('messages.site_title') }}</a>
        </div>
        <div class="language-switcher">
            <a href="{{ route('change.language', ['locale' => 'en']) }}">English</a> |
            <a href="{{ route('change.language', ['locale' => 'mr']) }}">मराठी</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; {{ date('Y') }} {{ __('messages.site_title') }}. All rights reserved.</p>
    </div>
</body>
</html>
