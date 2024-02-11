@extends('section/headerandfooter')


@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset("css/formation.css") }}" />

@endsection
@section('content')
<br><br><br><br><br><br><br><br><br>
<div class="main-container">
    <a href="#" class="button button-orange" id="mipcBtn">M.I.P.C</a>
    <a href="#" class="button button-green" id="bcgBtn">B.C.G</a>
</div>

<div id="mipcPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('mipcPopup')">X</span>
        <!-- Content specific to M.I.P.C -->
        <h3 style="color:rgb(155, 4, 4)"><i><ins>(MIPC) math,informatique,physique,chemie</ins></i></h3>
        <h4>Les étudiants poursuivront des modules de tronc commun dans les quatre disciplines : chimie, physique, mathématiques et informatique qui leur permettront d’acquérir des connaissances générales à propos des phénomènes physico-chimiques d’une part et des atouts de calculs mathématiques d’autre part.</h4>
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
                    <td>Circuits électriques et électronique</td>
                    <td>Electricité</td>
                    <td>Analyse 1 </td>
                    <td>Algèbre 1 </td>
                    <td>Algorithmique et Programmation 1 </td>
                    <td>Langues et Communications 1</td>
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
                    <td>Thermodynamique</td>
                    <td>Mécanique du
                        point et Optique
                        géométrique </td>
                    <td>Analyse 2 </td>
                    <td>Structure de la matière </td>
                    <td>Algèbre 2</td>
                    <td>Langues et Communications 2</td>
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
                    <td>Electromagnétisme</td>
                    <td>Réactivité chimique</td>
                    <td>Analyse 3 </td>
                    <td>Algèbre 1 </td>
                    <td>Statistique descriptive/probabilités </td>
                    <td>Langues et Communications 3</td>
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
                    <td>S4</td>
                    <td>Mécanique
                        quantique et
                        Relativité
                        </td>
                    <td>Mécanique des
                        Solides</td>
                    <td>Analyse 4</td>
                    <td>Structure de données en C </td>
                    <td>Chimie Minérale 1 </td>
                    <td>Chimie Organique 1</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="bcgPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('bcgPopup')">X</span>
        <!-- Content specific to B.C.G -->
        <h3 style="color: rgb(1, 164, 96);"><i><ins>(BCG) Biologie, Chimie, Géologie</ins></i></h3>
        <h5>L'objectif de ce tronc commun est de donner aux étudiants de la Faculté des Sciences et Techniques une formation de base très généraliste qui vise à :
            * Accroître le niveau des connaissances dans différents champs disciplinaires, Mathématiques, Physique, Chimie, Géologie et Informatique.
            * Acquérir les connaissances et les savoirs faire de base permettant de poursuivre des études en cycles Licence Sciences et Techniques ou ingénieur.
            Cet enseignement de base est un outil indispensable pour toute formation universitaire principalement dans les domaines scientifiques tels que la
            chimie, la géologique, la Biologie ou encore l'environnement</h5>
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
                    <td>Biologie cellulaire </td>
                    <td>Optique et Radioactivité </td>
                    <td>Cosmologie & Géodynamique interne</td>
                    <td>Structure de la matière </td>
                    <td>Algèbre </td>
                    <td>Langues et Communications 1 </td>
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
                    <td>Biologie animale</td>
                    <td>Thermodynamique / Mécanique des fluides  </td>
                    <td>Géodynamique externe</td>
                    <td>Réactivité chimique</td>
                    <td>Analyse</td>
                    <td>Langues et Communications 2</td>
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
                    <td>Biologie végétale </td>
                    <td>Electricité</td>
                    <td>Stratigraphie & Paléo- environnement </td>
                    <td>Chimie Minérale 1 </td>
                    <td>Probabilités/ Statistiques </td>
                    <td>Chimie Organique 1</td>
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
                    <td>S4</td>
                    <td>Microbiologie</td>
                    <td>Biochimie structurale</td>
                    <td>Biochimie métabolique</td>
                    <td>Chimie Organique 2 / Chimie Minérale 2 </td>
                    <td>Bases de Données</td>
                    <td>Langues et Communications 3 </td>
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

