@extends('section/headerandfooter')


@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset("css/formation.css") }}" />

@endsection
@section('content')
<br><br><br><br><br><br><br><br><br>



<div class="main-container">
    <a href="#" class="button button-orange" id="mipcBtn">DI: Logiciels et Systèmes Intelligents</a>
    <a href="#" class="button button-green" id="bcgBtn">DI: Génie IndustrielGénie énergétique</a>
</div>

<div id="mipcPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('mipcPopup')">X</span>
        <h3 style="color: red;"><i><ins>DI: Logiciels et Systèmes Intelligents</ins></i></h3>
      <pre><h4>Former des ingénieurs capables de :

        Comprendre les enjeux des techniques de l’information
        Proposer et construire des solutions informatiques et décisionnelles compétitives et réalistes
        Intervenir sur des problématiques informatiques complexes
        Piloter des projets informatiques et les changements qu'ils entraînent.</h4></pre>
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
                    <td>Architecture des ordinateurs</td>
                    <td>Architecture réseaux</td>
                    <td>Systèmes d’informations</td>
                    <td> Programmation Orientée Objets en C++</td>
                    <td>Mathématiques pour l’ingénieur</td>
                    <td>Anglais et techniques de rédaction</td>
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
                    <td>Programmation Orientée Objets en Java</td>
                    <td>Développement web </td>
                    <td>Thermique de
                        bâtiment</td>
                    <td>Théorie des graphes</td>
                    <td>Conception Orienté Objet (UML)</td>
                    <td>Management & comptabilité</td>
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
                    <td>Systèmes embarqués </td>
                    <td>Gestion de projet Informatique</td>
                    <td>Administration des bases de données</td>
                    <td>Méthodologies de l'Intelligence Artificielle</td>
                    <td>Architectures web distribuées (J2EE)</td>
                    <td>Anglais Avancée</td>
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
                    <td>Systèmes d’informations décisionnels</td>
                    <td>Technologies</td>
                    <td>Machine Learning</td>
                    <td>Administration systèmes et réseaux</td>
                    <td>Procesus audit </td>
                    <td>Droit & gestion d'entreprise</td>
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
                    <td>S5</td>
                    <td>Business Intelligence</td>
                    <td>Vision Artificielle</td>
                    <td>Sécurité Intelligente des Systèmes d’informations</td>
                    <td>Cloud Intelligence</td>
                    <td>Intelligence économique</td>
                    <td> Anglais professionnel </td>
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
                    <td>S6</td>
                    <td>PFE</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="bcgPopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup('bcgPopup')">X</span>
        <h3 style="color: red;"><i><ins>DI : Génie Industriel</ins></i></h3>
        <pre><h4>Acquérir de solides compétences dans les domaines des sciences et des technologies ;
            Disposer d'un potentiel de créativité et d'innovation ;
            Disposer d'aptitudes à conduire, à maîtriser, à organiser et à faire évoluer des procédés et des processus industriels ;
            Être capable de conduire, de diriger et de réaliser des projets industriels ;
            Maîtriser l'évolution des technologies ;
            Être capable de s’insérer et d’évoluer professionnellement dans les services techniques et scientifiques des entreprises</h4></pre>
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
                      <td>Mathématiques pour l’Ingénieur</td>
                      <td> Programmation C++/JAVA</td>
                      <td> Automatique linière continue</td>
                      <td>Électronique</td>
                      <td> Énergétique et mécanique des fluides</td>
                      <td>Techniques d’expression</td>
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
                      <td>Systèmes d’informations</td>
                      <td>Électricité industrielle</td>
                      <td>Automatisme</td>
                      <td>Conception & Procédés de Fabrication</td>
                      <td> Métrologie et Instrumentation</td>
                      <td> Culture et Gestion de l’Entreprise</td>
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
                      <td>Méthodes Numériques</td>
                      <td>Électrotechnique</td>
                      <td>Automatique linéaire continue </td>
                      <td>Anglais Scientifique</td>
                      <td>Machines Industrielles</td>
                      <td>RDM et Matériaux</td>
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
                      <td> Fiabilité Mécanique</td>
                      <td>Construction Mécanique</td>
                      <td>Fabrication Mécanique</td>
                      <td>Gestion de la Maintenance</td>
                      <td>Ingénierie Matériaux</td>
                      <td>Communication professionnelle</td>
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
                      <td>S5</td>
                      <td>Gestion de Production</td>
                      <td>GRH et Comptabilité Analytique</td>
                      <td>QSE et Laen Manufacturing</td>
                      <td>Outils de la Qualité et six sigma</td>
                      <td>Logistique </td>
                      <td> Innovation Et développement durable</td>
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
                      <td>S6</td>
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
