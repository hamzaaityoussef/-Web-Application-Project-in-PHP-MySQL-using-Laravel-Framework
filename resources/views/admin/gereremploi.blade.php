<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>student-screen</title>
    <link rel="shortcut icon" href="/images/logofstt.png">
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <h1 class="heading">Les services pédagogique</h1>
            <div class="demande" >
                <div class="container">
                    <form action="{{ route('admin.storeemplois') }}" method="POST">
                        @csrf
                        <a href="{{ route('admin.voiremplois') }}">voir la disponibilite des salles</a>
                        <label for="localite">Nom de la localité :</label>
                        <input type="text" id="localite" name="localite" required>
            
                        <label for="jour">Jour :</label>
                        <select id="jour" name="jour" required>
                            <option value="lundi">Lundi</option>
                            <option value="mardi">Mardi</option>
                            <option value="mercredi">Mercredi</option>
                            <option value="jeudi">Jeudi</option>
                            <option value="vendredi">Vendredi</option>
                            <option value="samedi">Samedi</option>
                        </select>
            
                        <label for="heure_debut">Heure de début :</label>
                        <input type="time" id="heure_debut" name="heure_debut" required>
            
                        <label for="heure_fin">Heure de fin :</label>
                        <input type="time" id="heure_fin" name="heure_fin" required>

                        <label for="module">Module :</label>
                        <input type="text" id="module" name="module" required>           
                        <label for="activite">Activité :</label>
                        <textarea id="activite" name="activite" required></textarea>
            
                        <button type="submit">creat</button>
                    </form>
                </div>
            
            
            </div>
  
        </section>
    </main>
</body>
</html>
