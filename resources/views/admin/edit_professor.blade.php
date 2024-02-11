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
    <main>
        <section id="home">
        <h1>Modifier Professeur</h1>


        <form method="POST" action="{{ route('admin.update_professor', ['id' => $professor->id]) }}">
            @csrf
            @method('POST')

            <!-- Ajoutez le champ pour "filiere" -->
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="{{ $professor->nom }}" required>

            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" value="{{ $professor->prenom }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $professor->email }}" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <!-- Ajoutez le champ pour "filiere" -->
            <label for="filiere">Filière ou departement:</label>
            <input type="text" name="filiere" value="{{ $professor->module }}" required>

            <button type="submit">Mettre à jour</button>
        </form>
    </section>
    </main>
    
</body>
</html>