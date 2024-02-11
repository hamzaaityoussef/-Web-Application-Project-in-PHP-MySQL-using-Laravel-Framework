@extends('section/headerandfooter')


@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset("css/formation.css") }}" />

@endsection
@section('content')
<br><br><br><br><br><br><br><br><br>

<div class="main-container">
    <a href="#" class="button button-orange" id="mipcBtn">Master Génie Civil</a>
    <a href="#" class="button button-green" id="bcgBtn">Génie énergétique</a>
</div>

<div id="mipcPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('mipcPopup')">X</span>
        <h3 style="color: red;"><i><ins>MASTER GENIE CIVIL</ins></i></h3>
      <h4>L’objectif est la formation des cadres en Génie Civil de haut niveau scientifique et technique. La formation a
        donc vocation, en étroite collaboration avec les milieux professionnels, à participer au développement régional
        et national.</h4>
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
                    <td>S1</td>
                    <td>Méthodes numériques</td>
                    <td>Calculs et
                        Analyses des
                        Structures</td>
                    <td>Béton armé</td>
                    <td>Géophysique
                        Appliquée &
                        Géo-risques</td>
                    <td>Construction
                        métallique</td>
                    <td>Matériaux de
                        construction</td>
                </tr>
            </table>
        </div>
        <br>
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
                    <td>S2</td>
                    <td>Béton
                        précontraint</td>
                    <td>Dynamique des
                        structures</td>
                    <td>Thermique de
                        bâtiment</td>
                    <td>Géotechnique</td>
                    <td>Calcul
                        Parasismique</td>
                    <td>Management
                        de projet &
                        Sécurité</td>
                </tr>
            </table>
        </div>
        <br>
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
                    <td>S3</td>
                    <td>BET Bâtiment
                        Travaux Publics</td>
                    <td>BET
                        Assainissement</td>
                    <td>Instabilité des
                        pentes et
                        techniques de</td>
                    <td>BET Routes</td>
                    <td>BET Confort
                        Bâtiment</td>
                    <td>Management
                        de projet &
                        Sécurité</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table>
                <tr>
                    <th>Semestre</th>
                    <th>Module</th>
                </tr>
                <tr>
                    <td>S4</td>
                    <td>PFE</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="bcgPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('bcgPopup')">X</span>
        <h3 style="color:red;"><i><ins>Master Génie Energétique </ins></i></h3>
      <h4>Former des lauréats pour accompagner la stratégie énergétique nationale et mettre sur le marché du
        travail des jeunes « énergéticiens » capables de contribuer à la réalisation des différents projets dans le
        domaine d’énergétique. </h4>
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
                <td>S1</td>
                <td>Thermodynami
                    que Industrielle</td>
                <td>Transferts
                    Thermiques</td>
                <td>Mathématiques
                    de l’Ingénieur </td>
                <td>Mécanique des
                    Fluides </td>
                <td>Méthodes
                    Numériques</td>
                <td>Matériaux pour
                    l’Energie
                    </td>
            </tr>
        </table>
    </div>
    <br>
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
                <td>S2</td>
                <td>Métrologie
                    Thermique &
                    Echangeurs
                    Thermiques </td>
                <td>Production &
                    Stockage de
                    l’Energie </td>
                <td>Automatique &
                    Régulation</td>
                <td>Ingénierie des
                    Procédés</td>
                <td>Energie
                    Eolienne
                    </td>
                <td>Langues et
                    Techniques de
                    Communicatio
                    n (TEC) </td>
            </tr>
        </table>
    </div>
    <br>
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
                <td>S3</td>
                <td>Energétique du
                    bâtiment </td>
                <td>Energie Solaire</td>
                <td>Efficacité
                    Energétique </td>
                <td>Bioénergie</td>
                <td>Gestion de la
                    maintenance et
                    Sureté de
                    fonctionnement</td>
                <td>Gestion de
                    Projets &
                    Gestion
                    d’Entreprises </td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table>
            <tr>
                <th>Semestre</th>
                <th>Module</th>
            </tr>
            <tr>
                <td>S4</td>
                <td>PFE</td>
            </tr>
        </table>
    </div>
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