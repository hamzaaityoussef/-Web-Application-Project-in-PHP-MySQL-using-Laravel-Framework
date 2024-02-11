{{-- ici je fais appel au file headerandfooter qui contient header and footer de notre page --}}
@extends('section/headerandfooter')

        @section('stylesheet')
        <link rel="stylesheet" href="/css/welcome.css">
        <style>
            
             .page {
            background-image: url("/images/invite/fst.jpeg");
            background-size:cover;
            background-repeat: no-repeat; 
            /* background-color: #5b96df; */
            height: 1230px;
            width: 100%;
        }
        p {
            margin-left:10px; 
        }
        </style>
        @endsection

        @section('content')

        <div class="presentation">
            <div class="fst">
                <h1>PRESENTATION</h1>
                <p>La Faculté des Sciences et Techniques de Tanger (FSTT),
                    relevant de l'Université Abdelmalek Essaâdi a été créée
                    en 1995. Elle fait partie des établissements de l'enseignement supérieur à accès régulé et a pour missions la formation initiale dans les domaines scientifiques et techniques, la formation continue ainsi que la recherche et le développement dans les domaines des sciences et techniques... <a href="/presentation"> lire plus</a></p>
            </div>
            <div class="nbretudiant">
               
                 <h1 class="heading">Les Filieres</h1>
  @foreach($filieres as $filiere)
     <div class="filiere-container" style="background-color: rgb(39, 140, 140); width: 50%; padding: 15px; margin: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
         <h2>Filiere : {{ $filiere->nom }}</h2>
        <p style="color: aliceblue">description : {{ $filiere->description }}</p>
       
     </div>
 @endforeach
            </div>
        </div>

        <div class="formation">
            <h1>FORMATION INITIALE</h1>
            <div class="formationdetail">
                <div class="niveau deust" >
                    <h3 ><a href="/deust" style="color: rgb(255, 255, 255)">DEUST</a></h3>
                </div>
                <div class="niveau LST">
                    <h3><a href="/licence" style="color: rgb(255, 255, 255)">LST</a></h3>
                </div>
                <div class="niveau MST">
                    <h3><a href="/master" style="color: rgb(255, 255, 255)">MST</a></h3>
                </div>
                <div class="niveau INGENIEUR">
                    <h3><a href="/cycle" style="color: rgb(255, 255, 255)">INGENIEUR D'ETAT</a></h3>
                </div>
            </div>
        </div>

        <div class="formationcontinue">
            <h1>FORMATION CONTINUE</h1>
            <div class="formationdetail">
                <div class="niveau deust" >
                    <h3>LICENCE CNAM</h3>
                </div>
                <div class="niveau LST">
                    <h3>D.C.A</h3>
                </div>
                <div class="niveau MST">
                    <h3>D.C.E.S.S</h3>
                </div>
                <div class="niveau INGENIEUR">
                    <h3> FORMATION A</h3>
                </div>
            </div>    
        </div>

       @endsection