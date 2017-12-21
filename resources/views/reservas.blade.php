<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gimnasio III</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/Home.css">

    </head>
    <body>
        <header>
            <figure id="usm">
                <img src="/images/usm.png">
            </figure>
            <h1>Gimnasio III USM</h1>
            <figure id="gym">
                <img src="/images/gym.png">
            </figure>
        </header>
        <nav>
            <figure id="home">
                <img src="/images/Home.png">
            </figure>
            <ul>
                <li><button type="button">Entrar</button></li>
                <li><input type="text" value="Contraseña"></li>
                <li><input type="text" value="Pasaporte USM"></li>
                <li>| Acceso</li>
            </ul>
        </nav>

        <section id="title">
            <h1>
                Gimnasio de Máquinas, Pesas y Aeróbica
            </h1>
        </section>

        <section id="description">
            <div id="left">
                <figure>
                    <img src="/images/i.png">
                </figure>
                <h2>Descripción general</h2>
                <p>
                    El Gimnasio III ofrece actividades extra programáticas a la comunidad, con el fin de que los usuarios
                    puedan aprovechar el tiempo libre durante su permanencia en la Universidad.
                </p>
            </div>
            <div id="center">
                <figure>
                    <img src="/images/clock.png">
                </figure>
                <h2>Horario de atención</h2>
                <h3>Lunes a Viernes</h3>
                <p>09:00 a 21:00 horas</p>
                <h3>Sábado</h3>
                <p>09:00 a 17:25 horas.</p>
            </div>
            <div id="right">
                <figure>
                    <img src="/images/gps.png">
                </figure>
                <h2>Ubicación</h2>
                <p>Edificio U,</p>
                <p>subterráneo de Biblioteca.</p>
                <p>Casa Central USM.</p>
                <p>Fono: 32-2654134</p>
            </div>
        </section>

        <footer>
            <h1>© USM</h1>
        </footer>
    </body>
</html>
