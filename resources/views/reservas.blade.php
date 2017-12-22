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
        <link rel="stylesheet" href="/css/reservas.css">

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
                <li>
                    <a href="{{ url('Reservas') }}">
                        <span>Mis Reservas</span> <!--<span class="separacion"></span>-->
                    </a>
                </li>
                <li>
                    <a href="{{ url('Historial') }}">
                        <span>Mi Historial</span> <!--<span class="separacion"></span>-->
                    </a>
                </li>
                <li>
                    <a href="{{ url('Perfil') }}">
                        <span>Mi Perfil</span> <!--<span class="separacion"></span>-->
                    </a>
                </li>
                <li><button type="button">Juan Pérez</button></li>
                <li><button type="button">Salir</button></li>
            </ul>
        </nav>

        <section id="title">

            <figure>
                <img src="/images/maquina.png">
            </figure>

            <h1>
                Agregar reserva en Sala de Máquinas
            </h1>
        </section>

        <section id="description">

            <table class="tg">
                <tr>
                    <th class="tg-w6mb" colspan="2">Bloques</th>
                    <th class="tg-w6mb">Lunes</th>
                    <th class="tg-w6mb">Martes</th>
                    <th class="tg-w6mb">Miércoles</th>
                    <th class="tg-w6mb">Jueves</th>
                    <th class="tg-w6mb">Viernes</th>
                    <th class="tg-w6mb">Sábado</th>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">9:00-10:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">10:00-11:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">11:00-12:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">12:00-13:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">13:00-14:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">14:00-14:30</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">14:30-15:30</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">15:30-16:30</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">16:30-17:00</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                    <td class="tg-5fb6">X</td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">17:00-18:00</td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-031e"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">18:00-19:00</td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-4q7z"></td>
                    <td class="tg-031e"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">19:00-20:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-031e"></td>
                </tr>
                <tr>
                    <td class="tg-cxkv" colspan="2">20:00-21:00</td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-lnzo"></td>
                    <td class="tg-031e"></td>
                </tr>
            </table>

            <div>
                <figure>
                    <img src="/images/alumnos.png">
                </figure>

                <p>Alumnos</p>
                <br>
                <figure>
                    <img src="/images/funcionario.png">
                </figure>

                <p>Funcionarios</p>
                <br>
                <figure>
                    <img src="/images/nodisponible.png">
                </figure>

                <p>No disponible para reservar</p>

            </div>

        </section>

        <footer>
            <h1>© USM</h1>
        </footer>
    </body>
</html>
