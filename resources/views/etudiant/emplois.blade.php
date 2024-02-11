<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-screen</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset("css/emploi.css")}}" /> -->
    <link rel="stylesheet" href="css/emplois.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-image: url("/images/invite/fst.jpeg");
        }
    </style>
</head>

<body>
    <header id="header">
        <a href="/etudiant">
            <img src="/images/invite/fst.jpeg" />
        </a>
        <nav id="navbar">
            <ul>

                <li><a href="/etudiant/studentscreen"><i   id="dash" class="fa-solid fa-gauge"></i>&nbsp; Dashboard</a></li>
      
                <li><a href=""><i  id="cal" class='bx bxs-calendar' ></i>Emploi du temps</a></li>
                <li><a href="/demande"><i class="fa-solid fa-file"></i>&nbsp; Demande/suivi</a></li>
                <li><a href="/annonces"> <i id="annan" class='bx bxs-megaphone'></i>Annonces</a></li>
                {{-- @if(str_ends_with(Auth::user()->email, '@dlg.com')) <!-- Condition pour l'email se terminant par "@dlg.com" -->
                <li><a href="/signaler"><i class="fa-solid fa-file"></i>&nbsp; Signaler</a></li>
                @endif --}}
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </header>
    <main id="main">
        <section id="home">
            <h1 class="heading">Emploi du temps</h1>
            {{-- <h3>{{Auth::user()->id}}</h3> --}}
            <div class="emp" >
                <table border="1">
                    <tr>
                        <td></td>
                        <td>9-10:45</td>
                        <td>11-12:45</td>
                        <td>13-14:45</td>
                        <td>15-16:45</td>
                        <td>17-18:45</td>
                    </tr>
                    <tr>
                        <td>Lundi</td>
                        <td width="100px" height="60px">python</td>
                        <td width="100px" height="60px">python</td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px">dev web</td>
                        <td width="100px" height="60px">dev web</td>
                        <td width="100px" height="60px"></td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td width="100px" height="60px">BDD</td>
                        <td width="100px" height="60px">BDD</td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                    </tr>                  
                    <tr>
                        <td>Jeudi</td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px">theorie des graphe</td>
                        <td width="100px" height="60px">theorie des graphe</td>
                        <td width="100px" height="60px"></td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px">ML</td>
                        <td width="100px" height="60px">ML</td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td width="100px" height="60px">soft skills</td>
                        <td width="100px" height="60px">soft skills</td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                        <td width="100px" height="60px"></td>
                    </tr>
                </table>
                
            </div>

        </section>

    </main>
</body>
</html>
