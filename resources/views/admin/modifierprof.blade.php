

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

<style>
    #home{
        color: aliceblue

    }
</style>
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
    <h1>Modules</h1>

    <table>
        <tbody>
            @foreach($prof as $professor)
                <tr>
                    <td>{{ $professor->module }}</td>
                    <td>{{ $professor->nom }} {{ $professor->prenom }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>
                        <a href="{{ route('admin.edit_professor', ['id' => $professor->id]) }}">
                            <i class="fas fa-edit"></i> 
                        </a>
                    </td>
                </tr>
            @endforeach
    </table>
    <h1>Filiere</h1>

    <table>
        <tbody>
            @foreach($CF as $filiere)
                <tr>
                    <td>{{ $filiere->filiere}}</td>
                    <td>{{ $filiere->nom }} {{ $filiere->prenom }}</td>
                    <td>{{ $filiere->email }}</td>
                    <td>
                        <a href="{{ route('admin.edit_cheffiliere', ['id' => $filiere->id]) }}">
                            <i class="fas fa-edit"></i> 
                        </a>
                    </td>
                </tr>
            @endforeach
    </table>
    <h1>Departement</h1>

    <table>
        <tbody>
            @foreach($CD as $departement)
                <tr>
                    <td>{{ $departement->departement}}</td>
                    <td>{{ $departement->nom }} {{ $departement->prenom }}</td>
                    <td>{{ $departement->email }}</td>
                    <td>
                        <a href="{{ route('admin.edit_departement', ['id' => $departement->id]) }}">
                            <i class="fas fa-edit"></i> 
                        </a>
                    </td>
                </tr>
            @endforeach
    </table>
        </section>
    </main>
</body>
</html>

















