@extends('section/headerandfooter')


@section('stylesheet')
<link rel="stylesheet" href="/css/presentation.css">
<link rel="stylesheet" href="/css/navbar.css">
{{-- <link rel="stylesheet" href="/css/welcome.css"> --}}
<style>
  body{
    background-color: white;
  }
  nav ul li a {
        color: #000000;
        font-weight: 700;
        text-decoration: none;
        text-transform: uppercase;
        transition: color 0.2s;
      }
</style>

@endsection


@section('content')

<div class="container">
    <h2>La Faculté</h2>
    <img src="images/invite/fsttprésentation.jpg" alt="fstt" height="400px" width="1000px">
    <div class="présentation-text">
      <h3>I- PRESENTATION DE LA FST DE TANGER & DIAGNOSIQUE</h3>
        <P>
          La Faculté des Sciences et Techniques de Tanger (FSTT), relevant de 
          l’Université Abdelmalek Essaâdi a été créée en 1995. Elle fait partie 
          des établissements de l’enseignement supérieur à accès régulé et a pour 
          missions la formation initiale dans les domaines scientifiques et techniques, 
          la formation continue ainsi que la recherche et le développement dans 
          les domaines des sciences et techniques.
        </P>
        <div class="formation-initiale">
          <h4>Formation Initiale</h4>
          <p>La FST de Tanger offre des cursus de formation qui préparent aux diplômes suivants :</p>
            <ul>
              <li>DEUST : Diplôme d'Etudes Universitaire en Sciences et Techniques (Bac +2).</li>
              <li>LST : Diplôme de Licence en Sciences et Techniques (Bac +3)</li>
              <li>MST : Diplôme de Master en Sciences et Techniques (Bac +5)</li>
              <li>DI : Diplôme d'Ingénieur d'État (Bac +5)</li>
              <li>Doctorat en Sciences et Techniques (Bac +8)</li>            
            </ul>
            <p>La FST de Tanger propose une panoplie de formation riches et diversifiées répondant aux divers besoins
            du monde socio-économique (12 filières LST, 13 filières MST, 4 filières Ingénieurs)</p>
        </div>
        <div class="Formation-continue">
          <h4>Formation continue</h4>
          <p>Les programmes de la formation continue sont destinés aux professionnels qui souhaitent 
            acquérir des nouvelles compétences ou approfondir leurs connaissances dans leur domaine d’activité.</p>
          <p>Les formations proposées couvrent des programmes 
            variés dans les domaines des sciences et de la technologie tels que :</p>
          <p>Les sciences de l’ingénierie de l’Informatique- Civil –Mécanique-Electrotechnique – Industrielle et autres.</p>
        </div>
        <div class="Recherche-scientifique">
          <h4>Recherche scientifique</h4>
          <p>
            La recherche scientifique à la FST de Tanger est structurée 
            autour de 7 laboratoires, 11 équipes de recherche, 2 centres 
            (CDI : Centre de Développement et de l’Innovation et le CFA : 
            Centre de Fabrication Additive) et un Observatoire 
            Digital de l’Environnement. Les thématiques de recherches 
            développées par ces structures concernent :
          </p>
          <ul>
            <li>L’agro-alimentaire, la biotechnologie, Biologie et santé</li>
            <li>L’Énergie et l’Efficacité Énergétique</li>
            <li>L’Eau et l’Environnement</li>
            <li>Les Matériaux et les Nanomatériaux</li>
            <li>Les Mathématiques et Informatique</li>
            <li>Autres</li>
          </ul>
        </div>
        <div class="Fablab-Green-Lab">
          <h4>Fablab Green Lab</h4>
          <p> 
            Le Green Lab est un FabLab a été créé pour encourager
              l’innovation, la créativité et l’esprit d’entreprise 
              chez les étudiants et les membres de la communauté locale.
            </p>
            <p>
              Le Green Lab est équipé d’une variété d’outils et de 
              technologies, tels que des imprimantes 3D, des machines 
              de découpe laser, des fraiseuses CNC et des équipements 
              électroniques. Ces outils permettent aux membres du 
              laboratoire de concevoir, prototyper et fabriquer une
              grande variété de projets, allant de petits gadgets 
              électroniques aux prototypes de produits commerciaux.
            </p>
            <p>
              Le laboratoire est également axé sur la durabilité et 
              l’environnement, avec une forte emphase sur les projets 
              qui utilisent des matériaux recyclés ou respectueux de 
              l’environnement. Les Etudiants du Green Lab travaillent 
              sur des projets qui abordent des problèmes environnementaux 
              tels que la pollution de l’eau, la gestion des déchets, la 
              durabilité des ressources naturelles et l’agriculture urbaine.
            </p>
            <p>
              Le Green Lab est ouvert aux étudiants de tous les départements 
              de la Faculté des Sciences et Techniques de Tanger, ainsi qu’aux 
              membres de la communauté locale qui souhaitent utiliser les
              installations. Il offre également des ateliers de formation 
              sur les compétences techniques, la conception de produits et l’entrepreneuriat.
            </p>
        </div> 
        <div class="Les-clubs-des-Etudiants">
          <h4>Les clubs des Etudiants</h4>
          <p>
            Les clubs des étudiants peuvent apporter une valeur 
            ajoutée significative à la vie universitaire. 
            Tout d’abord, les clubs offrent une occasion aux 
            étudiants de s’engager dans des activités qui les
            passionnent et de rencontrer des personnes partageant les mêmes intérêts.
          </p>
          <p>
            De plus, les clubs peuvent aider à renforcer les compétences 
            de leadership et à développer des compétences professionnelles, 
            ce qui peut être bénéfique pour les futurs parcours professionnels des étudiants.
          </p>
        </div>
    </div>
  </div>

@endsection