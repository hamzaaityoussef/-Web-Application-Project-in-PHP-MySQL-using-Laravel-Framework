<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-screen</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <link rel="stylesheet" type="text/css" href="{{asset("css/demandescreen.css")}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-image: url("/images/invite/fst.jpeg");
            height: 150%;
           
        }
        div p {
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding-left: 10px;
    font-family: 'Condensed', sans-serif; 
    line-height: 1.5; /* Adjusting line height for better readability */
}

        div>p:first-child{
            padding-top: 15px;
        }
      
    </style>
</head>

<body>
    <header id="header">
        <a href="/etudiant/delegue">
            <img src="/images/invite/fst.jpeg" />
        </a>
        <nav id="navbar">
            {{-- @if(str_ends_with(Auth::user()->email, '@etudiant.com'))
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
            @endif --}}
            
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
        </nav>
    </header>
    <div class="container">
        <div class="text-center text-2xl font-bold uppercase mb-4">
            Formulaire de Demandes
        </div>
        <h1 class="heading">NOM : {{Auth::user()->nom." ".Auth::user()->prenom}}</h1>
    
        @if(session('success'))
            <div class="text-center text-2xl font-bold uppercase mb-4" style="color: green;">
                {{ session('success') }}
            </div>
        @endif
    
        <form action="{{ url('/demande/storedelegue') }}" method="post" class="form-container">

            @csrf
    
            <div class="form-group mb-1">
                <label for="type" class="form-label">Type :</label>
                <input type="text" name="type" class="form-input" required>
            </div>
    
            <div class="form-group mb-1">
                <label for="to" class="form-label">To :</label>
                <input type="text" name="to" class="form-input" required>
            </div>
    
            <div class="form-group mb-1">
                <label for="message" class="form-label">Message :</label>
                <textarea name="message" class="form-input" rows="5" required></textarea>
            </div>
    
            <button type="submit" class="button-style">Envoyer</button>
        </form>
        </div>

      {{-- ici on va faire l'affichage des reponses des prof --}}
<div class="text-center text-2xl font-bold uppercase mb-4" style="color: rgb(0, 0, 0);background-color:#02387e">
    reponses ds demandes
</div>

@isset($reponse)
    @foreach($reponse as $reponseItem)
        <div style="background-color:#02387e;margin-left:25%; width: 30%;height:180px; padding-left: 5px;  border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <p>objet: {{ $reponseItem->type }} </p>
            <p>nom prof : {{ $reponseItem->prof->nom ." ". $reponseItem->prof->prenom }}</p>
            <p>email prof: {{ $reponseItem->from }} </p>
            <p>Message: {{ $reponseItem->message }}</p>
        </div>
    @endforeach
@else
    <h3 style="display:flex;justify-content:center;color:rgb(0, 0, 0);">No reponses available.</h3>
@endisset

   
</body>
</html>
