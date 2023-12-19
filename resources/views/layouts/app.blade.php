<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'ApiReniec DataGen')</title>
    <link rel="icon" href="https://i.ibb.co/FxKdtYx/LOGO-DATAGEN.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ez0GXXL5e8Agp0eT+GDEq5G+AnF8B48KEQrWJMM8TX4Epp0aCM+tK2e5UJtRR3cl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iZS+9LlMzorT7hooYFQIBPLeQMyF6LU5BkIbbVcUjODKQm3FgvmIbbVfU" crossorigin="anonymous">

    <style>
        body {
            background-color: #002060;
            display: flex; /* Establece el modelo de caja flexible para el cuerpo */
            align-items: center; /* Centra verticalmente */
            justify-content: center; /* Centra horizontalmente */
            height: 100vh; /* Ajusta la altura del cuerpo al 100% del viewport */
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            background-color: #002060;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            margin-top: auto;
        }
        .card {
            margin-bottom: 20px;
        }
        header {
            background-color: #ffffff;
            color: #002060;
            padding: 10px 0;
            text-align: center; /* Centra el contenido del encabezado */
        }

        /* Estilo del logo */
        header img {
            height: 150px; /* Ajusta la altura según sea necesario */
            margin-bottom: 10px; /* Espacio entre el logo y el título */
        }

        /* Estilo del título */
        header h1 {
            margin: 0; /* Elimina el margen predeterminado del h1 */
        }
        footer {
            background-color: #002060;
            color: #ffffff;
            padding: .5rem 0 2px;
            text-align: center;
            width: 100%;
            font-size: 12px; /* Ajusta según tus preferencias */
            letter-spacing: 0px; /* Ajusta según tus preferencias */
            line-height: 1; /* Ajusta según tus preferencias */
        }


    </style>

</head>
<body>


    <div class="container mt-4">
        <header>
            <img src="https://i.ibb.co/FxKdtYx/LOGO-DATAGEN.png" alt="LOGO-DATAGEN">
            <h1>Empresa DATAGEN</h1>
            <br>
        </header>
        @yield('content')

        <footer>
            <p>&copy; Consulta datos por DNI o RUC gratis. Empresa DATAGEN, en colaboración con la Universidad Nacional del Altiplano Puno.
                <p>Síguenos en nuestras redes sociales:
                <a href="https://web.facebook.com/Percy.CY10/"> FACEBOOK
                    <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="https://twitter.com/tu-empresa" target="_blank"> Twitter
                    <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="https://linkedin.com/company/tu-empresa" target="_blank"> LINKEDIN
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
            </p>
        </footer>

    </div>










    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
