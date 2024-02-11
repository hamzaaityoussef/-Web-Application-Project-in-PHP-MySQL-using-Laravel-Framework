<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-screen</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <link rel="stylesheet" href="css/delegue.css">
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
        <a href="/etudiant/delegue">
            <img src="/images/invite/fst.jpeg" />
        </a>
        <nav id="navbar">
            <ul>

                @if(str_ends_with(Auth::user()->email, '@dlg.com'))
                <!-- Add another set of <ul> elements specific to delegue -->
                    <li><a href="/delegue/studentscreen"><i id="dash" class="fa-solid fa-gauge"></i>&nbsp; Dashboard</a></li>
                    <li><a href="/demande/delegue"><i class="fa-solid fa-file"></i>&nbsp; Demande/suivi</a></li>
                    <li><a href="/annonces/delegue"><i id="annan" class='bx bxs-megaphone'></i>Annonces</a></li>
                    <a href="/signaler"><i class="fa-solid fa-file"></i>&nbsp; Signaler</a>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            @endif

            </ul>
        </nav>
    </header>
    <main id="main">
        <section id="home">
            <h1 class="heading">signaler les Pannes materielle :</h1>

            <form action="{{ route('reclamations.store') }}" method="POST">
                @csrf
                <div class="demande">
                    <strong>Datashow</strong>
                    <br>
                    <div class="att1">
                        <input type="checkbox" name="datashow" value="1">
                    </div>
                    <br>
            
                    <div>
                        <strong>Prise internet</strong>
                        <br>
                        <div class="att11">
                            <input type="checkbox" name="prise_internet" value="1">
                        </div>
                        <br>
            
                        <div>
                            <strong>Chaise</strong>
                            <br>
                            <div class="att11">
                                <input type="checkbox" name="chaise" value="1">
                            </div>
                            <br>
                            <strong>Tableau </strong>
                            <br>
                            <div class="att11">
                                <input type="checkbox" name="tableau" value="1">
                            </div>
                            <br>
                            <br>
                            <div class="att11">
                                <strong for="">Description :</strong>
                                <br>
                                <textarea name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                            <br>
                            <br>
                            <input class="btn" type="submit" value="Signaler">
                        </div>
                    </div>
                </div>
            </form>
            
        </section>
    </main>
</body>
</html>
