<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>

    <nav>

        <ul class="nav-bar">
            <li><a href="#">A</a></li>
            <li><a href="#">B</a></li>
            <li><a href="#">C</a></li>
            <li><a href="#">D</a></li>
        </ul>


    </nav>

    <div class="slot">
        {{ $slot }}
    </div>

    <footer>
        <div class="footer">
            <h2>Pie de Pagina</h2>
        </div>
    </footer>

</body>
</html>