<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-screen</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            margin-top: -20px;
        }
        #departement {
            padding: 10px;
           
        }

        #salle-container {
           
            padding: 9px 
        }

        #salle-container p {
            margin-bottom: 10px;
            color: white; 
        }
      
    </style>
</head>

<body>
        <header id="header">
            <img src="/images/invite/fst.jpeg" />
            <nav id="navbar">
                <ul>
                    <li><a href="/admin/dashbord"><i   id="dash" class="fa-solid fa-gauge"></i>&nbsp; Dashboard</a></li>
    
                    <li><a href="/admin/emplois"><i class="fas fa-graduation-cap"></i>&nbsp; Gèrer les emplois</a></li>
                    <li><a href="/admin/affectersalle"><i  id="cal" class='bx bxs-calendar' ></i>Affectation des salles</a></li>
                    <li><a href="/admin/modifierrole"><i class="fa-solid fa-file"></i>&nbsp;  Affectation des roles</a></li>
                    <li><a href="/admin/nouveauclasse"><i class="fa-solid fa-file"></i>&nbsp;  inscrire une nouvelle classe </a></li>
                    <li><a href="/admin/changercontenue"><i class="fa-solid fa-file"></i>&nbsp;  Changer le contenue d une filiere </a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
        </header>
    <main id="main">
        <section id="home">
            <h1 class="heading">Les services pédagogiques</h1>
            <div class="demande">
                <div class="container">
                    <form action="{{ route('submit') }}" method="POST">
                        @csrf
                        <label for="salle">Nom de la salle :</label>
                        <input type="text" id="salle" name="salle" required>
                        <label for="dep">Nom de la département :</label>
                        <select id="dep" name="dep" required>
                            <option value="informatiques">Informatique</option>
                            <option value="math">Math</option>
                            <!-- Add more options as needed -->
                        </select>
                        <button type="submit" style="margin:20px 0px 30px 0px">Affecter</button>
                    </form>
                </div>
                <h2 style="color:rgb(189, 255, 255)">les departements avec ses salles :</h2>
                <select name="departement" id="departement">
                    <option value="informatiques">Informatique</option>
                    <option value="math">Math</option>
                </select>
                <div id="salle-container"></div>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var departementDropdown = document.getElementById('departement');
            var salleContainer = document.getElementById('salle-container');
    
            departementDropdown.addEventListener('change', function () {
                var selectedDepartement = departementDropdown.value;
    
                salleContainer.innerHTML = '';
    
                var salles = [];
    
                @foreach($locals as $local)
                    if ("{{ $local->departement }}" === selectedDepartement) {
                        salles.push("{{ $local->nom }}");
                    }
                @endforeach
    
                salleContainer.innerHTML = '<p>Salles: ' + salles.join(', ') + '</p>';
            });
        });
    </script>
</body>
</html>
