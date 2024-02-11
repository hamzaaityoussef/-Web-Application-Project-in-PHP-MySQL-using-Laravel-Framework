<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-screen</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset("css/emploi.css")}}" /> -->
    <link rel="stylesheet" href="css/annonce.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        background-image: url("/images/invite/fst.jpeg");
    }
</style>
<body>
    <header id="header">
        <a href="/etudiant">
            <img src="/images/invite/fst.jpeg" />
        </a>
        <nav id="navbar">
            @if(str_ends_with(Auth::user()->email, '@etudiant.com'))
            <ul>
                <li><a href="/etudiant/studentscreen"><i id="dash" class="fa-solid fa-gauge"></i>&nbsp; Dashboard</a></li>
                <li><a href="/emplois"><i id="cal" class='bx bxs-calendar'></i>Emploi du temps</a></li>
                <li><a href="/demande"><i class="fa-solid fa-file"></i>&nbsp; Demande/suivi</a></li>
                <li><a href="/annonces"><i id="annan" class='bx bxs-megaphone'></i>Annonces</a></li>
            
                @if(str_ends_with(Auth::user()->email, '@dlg.com'))
                    <li><a href="/signaler"><i class="fa-solid fa-file"></i>&nbsp; Signaler</a></li>
                @endif
            
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
            @endif
            
            @if(str_ends_with(Auth::user()->email, '@dlg.com'))
                <!-- Add another set of <ul> elements specific to delegue -->
                    <li><a href="/etudiant/delegue"><i id="dash" class="fa-solid fa-gauge"></i>&nbsp; Dashboard</a></li>
                    <li><a href="/demande"><i class="fa-solid fa-file"></i>&nbsp; Demande/suivi</a></li>
                    <li><a href="/annonces"><i id="annan" class='bx bxs-megaphone'></i>Annonces</a></li>
                <ul>
                    <!-- Add your delegue-specific list items here -->
                </ul>
            @endif
        </nav>
    </header>

    <main id="main">
        <section id="home">
            <h1 class="heading">Annonces</h1>
            <div class="ann1" >
                <h1 class="heading">NOM : {{Auth::user()->nom." ".Auth::user()->prenom}}</h1>
                @isset($annonces)
                @foreach($annonces as $annonce)
                    <div style="background-color: rgb(39, 140, 140);margin-left:5%; width: 50%; padding-left: 5px;  border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <p style="font-size: 14px;font-weight: bold;">from: {{ $annonce->creator}}</p>
                        <p style="font-size: 16px; font-weight: bold;">Type d'annonce: {{ $annonce->type }} </p>
                        <p style="font-size: 16px; font-weight: bold; ">classe: {{ $annonce->classe }} </p>
                        <p style="font-size: 14px;font-weight: bold; ">Description: {{ $annonce->description }}</p>
 
                        
                    </div>
                @endforeach
                @else
                <h1>aucune annonces</h1>
            @endisset
            
            
            </div>
        </section>
    </main>
</body>
</html>
