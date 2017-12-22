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
        <link rel="stylesheet" href="/css/MisReservas.css">

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
            <h1>
                Mis Reservas
            </h1>
        </section>

        <p>+ Agregar Reservas</p>
        <div id="tabla">
            <span>Periodo 11/12/2017-30/12/2017</span>
        </div>
        <section id="description">
            <table class="tg">
              <tr>
                <th class="tg-ko48">     Dia<br></th>
                <th class="tg-liik"></th>
                <th class="tg-ko48">     Hora</th>
                <th class="tg-ko48">   Sala</th>
                <th class="tg-ko48">Asistencia</th>
                <th class="tg-liik"></th>
              </tr>
              <tr>
                <td class="tg-3x04">Martes</td>
                <td class="tg-3x04">12<br></td>
                <td class="tg-3x04">10:00-11:00</td>
                <td class="tg-3x04">Máquinas</td>
                <td class="tg-3x04">Asiste</td>
                <td class="tg-3x04"></td>
              </tr>
              <tr>
                <td class="tg-5jp5">Jueves</td>
                <td class="tg-5jp5">14</td>
                <td class="tg-5jp5">11:00-12:00</td>
                <td class="tg-5jp5">Máquinas</td>
                <td class="tg-5jp5">Asiste</td>
                <td class="tg-5jp5"></td>
              </tr>
              <tr>
                <td class="tg-3x04">Martes<br></td>
                <td class="tg-3x04">19</td>
                <td class="tg-3x04">13:00-14:00</td>
                <td class="tg-3x04">Aeróbica<br></td>
                <td class="tg-3x04">Falta<br></td>
                <td class="tg-3x04"></td>
              </tr>
              <tr>
                <td class="tg-5jp5">Jueves</td>
                <td class="tg-5jp5">21</td>
                <td class="tg-5jp5">11:00-12:00</td>
                <td class="tg-5jp5">Máquinas</td>
                <td class="tg-5jp5"><br></td>
                <td class="tg-5jp5">Eliminar</td>
              </tr>
              <tr>
                <td class="tg-3x04">Jueves<br></td>
                <td class="tg-3x04">28</td>
                <td class="tg-3x04">11:00-12:00</td>
                <td class="tg-3x04">Máquinas</td>
                <td class="tg-3x04"><br></td>
                <td class="tg-3x04">Eliminar</td>
              </tr>
            </table>
            <div id="botones">
                <div id="center">
                    <a href="{{ url('Perfil') }}">
                        <img src='/images/maquina.png' border="0"/>
                    </a>
                    <h2>Máquinas</h2>
                </div>
                <div id="right">
                    <a href="{{ url('Perfil') }}">
                        <img src='/images/aerobica.png' border="0"/>
                    </a>
                    <h2>Aeróbica</h2>
                </div>
            </div>
        </section>

        <footer>
            <h1>© USM</h1>
        </footer>
    </body>
</html>
