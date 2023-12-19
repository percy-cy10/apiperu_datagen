<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Api RENIEC')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
        }

        header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        header img {
            height: 60px;
            margin-left: 10px;
        }

        header h1 {
            margin-left: 20%;
        }

        footer {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>
<body>
    <header>
        <img src="https://www.apirestperu.com/wp-content/uploads/2022/07/logo_png.png" alt="api">
        <h1>Consultas en Línea API RENIEC - Empresa DATAGEN</h1>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        <p>&copy; Consulta datos por DNI o RUC gratis, nuestra empresa proporciona este modulo para realizar consultas</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
