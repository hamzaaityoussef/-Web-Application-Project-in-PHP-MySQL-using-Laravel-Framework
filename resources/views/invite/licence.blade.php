@extends('section/headerandfooter')


@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset("css/formation.css") }}" />

@endsection
@section('content')
<br><br><br><br><br><br><br><br><br>

<div class="main-container">
    <a href="#" class="button button-orange" id="mipcBtn">Analytique des données</a>
    <a href="#" class="button button-green" id="bcgBtn">Génie civil</a>
</div>

<div id="mipcPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('mipcPopup')">X</span>
        <h3 style="color: rgb(1, 60, 168);"><i><ins>ANALYTIQUE DES DONNEES</ins></i></h3>
      <h3>La Licence Science et Techniques en analytique des données permet aux étudiants de doter de compétences en matière d'outils informatiques, des techniques et des méthodes statistiques pour permettre d’organiser, de synthétiser et de traduire efficacement les données métier d’une organisation. L'étudiant doit être en mesure d'apporter un appui analytique à la conduite d'exploration et à l'analyse complexe de données.</h3>
      <h3 style="color: red;"><i><ins>PROGRAMME</ins></i></h3>
      <div>
        <table>
            <tr>
                <th>Semestre</th>
                <th>Module 1</th>
                <th>Module 2</th>
                <th>Module 3</th>
                <th>Module 4</th>
                <th>Module 5</th>
                <th>Module 6</th>
            </tr>
            <tr>
                <td>S5</td>
                <td>Mathématiques pour la science des données</td>
                <td>Structures des données avancées et théorie des graphes</td>
                <td>Fondamentaux des bases de données</td>
                <td> Algorithmique avancée et programmation</td>
                <td> Développement WEB</td>
                <td>Soft skills</td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <th>Semestre</th>
                <th>Module 1</th>
                <th>Module 2</th>
                <th>Module 3</th>
                <th>Module 4</th>
            </tr>
            <tr>
                <td>S6</td>
                <td>Analyse et fouille de données</td>
                <td> Systèmes et réseaux</td>
                <td>Ingénierie des données</td>
                <td>PFE</td>
            </tr>
        </table>
    </div>
    <h3 style="color: red;"><i><ins>COMPETENCES VISEES ET DEBOUCHES</ins></i></h3>
        <h3><pre>
            - Masters en sciences de données: fouille de données, business analytiques, blockchain,
            - Masters orientés e-Technologies: e-Business, e-Administration et e-Logistique
            - Formations d’Ingénieurs dans une école d’ingénieurs à l’issue de la deuxième ou de la troisième année de licence
            - Data scientist
        </pre></h3>
    </div>
</div>

<div id="bcgPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('bcgPopup')">X</span>
        <h1 style="color:rgb(183, 137, 0);"><i><ins>GENIE CIVIL</ins></i></h1>
      <pre><h3>- Former les étudiants aux sciences mécaniques en général et au génie civil en particulier ;
- Doter les étudiants des outils théoriques, numériques et pratiques pour les applications de la Mécanique aux technologies du Génie
  Civil et aux techniques de la mécanique des structures ;
- Dispenser une formation fondamentale en mécanique des structures et en Génie Civil leur permettant la poursuite des études.</h3></pre>
        <h3 style="color: red;"><i><ins>PROGRAMME</ins></i></h3>
      <div>
        <table>
            <tr>
                <th>Semestre</th>
                <th>Module 1</th>
                <th>Module 2</th>
                <th>Module 3</th>
                <th>Module 4</th>
                <th>Module 5</th>
                <th>Module 6</th>
            </tr>
            <tr>
                <td>S5</td>
                <td>Mécanique des milieux continus et Outils Techniques en Génie Civil</td>
                <td>Résistance des matériaux</td>
                <td>Béton armé</td>
                <td>Mécanique des sols et notions de base de la géotechnique</td>
                <td>Matériaux de construction</td>
                <td>Méthodes numériques et calcul scientifique</td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <th>Semestre</th>
                <th>Module 1</th>
                <th>Module 2</th>
                <th>Module 3</th>
                <th>Module 4</th>

            </tr>
            <tr>
                <td>S6</td>
                <td>Analyse et calcul des structures</td>
                <td>Électricité du bâtiment</td>
                <td>Hydraulique et Assainissement</td>
                <td>PFE</td>
            </tr>
        </table>
    </div>
    <h3 style="color: red;"><i><ins>COMPETENCES VISEES ET DEBOUCHES</ins></i></h3>
    <h3>La licence Génie Civil conduit vers un Master ou une formation d’ingénieur. Elle permet également une insertion professionnelle, grâce aux différentes compétences acquises durant ce parcours. Cette insertion peut être dans des secteurs d’activités, comme des bureaux d’études ‘en Génie Civil, en environnement, en aménagement… etc), des entreprises du secteur du bâtiment et des travaux publics, des cabinets de maîtrise d’œuvre, des services de maîtrise d’œuvre, des services d’ouvrages ou de bureaux de contrôle technique.</h3>
    </div>
</div>

<script>
    function openPopup(popupId) {
        document.getElementById(popupId).style.display = 'flex';
    }

    function closePopup(popupId) {
        document.getElementById(popupId).style.display = 'none';
    }

    document.getElementById('mipcBtn').addEventListener('click', function () {
        openPopup('mipcPopup');
    });

    document.getElementById('bcgBtn').addEventListener('click', function () {
        openPopup('bcgPopup');
    });
</script>
<br><br>
@endsection
