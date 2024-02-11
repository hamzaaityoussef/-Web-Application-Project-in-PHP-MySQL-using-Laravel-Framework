
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Professeur</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <link rel="stylesheet" type="text/css" href="{{asset("css/studentscreen.css")}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-df5zE3aXogc5F5Cry8XnLo8i/2JjkfBYiWLP+8Rso3Z5fOcCJCyKrD5PIdbMI1Dk" crossorigin="anonymous">
    @yield('css')
    <style>
        body{
            background-image: url("/images/invite/fst.jpeg");
        }
        @yield('annonceinline');
    </style>
</head>

<body>
   {{-- {{dd($id)}} --}}
  
   
    <header id="header">
        <a href="/">
            <img src="/images/invite/fst.jpeg" />
        </a>
       
        <nav id="navbar">
            <ul>

               

                @isset($id, $nom, $prenom)
                <li><a href="{{ route('prof.prof_welcome', ['id' => $id, 'nom' => $nom, 'prenom' => $prenom]) }}">
                    <i id="dash" class="fa-solid fa-gauge"></i>&nbsp; Dashboard
                </a></li>
           
            

                    <li><a href="{{ route('prof.prof_annonces', ['id' => $id, 'nom' => $nom, 'prenom' => $prenom]) }}"><i id="annan" class='bx bxs-megaphone'></i>&nbsp; Annonces</a></li>
                    <li><a href="{{ route('prof.prof_demandes', ['id' => $id, 'nom' => $nom, 'prenom' => $prenom]) }}"><i class="fa-solid fa-file"></i>&nbsp; Demandes</a></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                        </a>
                    </li>
                    
                    <!-- Add a hidden form to handle the logout action -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endisset
                

                        {{-- <li><a href="{{ route('prof.prof_annonces') }}"> <i id="annan" class='bx bxs-megaphone'></i>Annonces</a></li>
                        <li><a href="{{ route('prof.prof_demandes') }}"><i class="fa-solid fa-file"></i>&nbsp; Demandes</a></li> --}}
                   
            </ul>
        </nav>
    </header>
    <main id="main">
        @if(isset($id))
          
            <p>Welcome, Prof {{ $nom . " " .$prenom }}</p>
            
        @else
            <p>Error: Professor data not available.</p>
        @endif
        {{ $slot }}
    </main>
    
    
</body>
</html>
