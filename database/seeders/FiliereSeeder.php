<?php

namespace Database\Seeders;

use App\Models\filiere;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        filiere::create([
            'nom' => 'MIPC',
            'description' => 'Les étudiants poursuivront des modules
             de tronc commun dans les quatre disciplines : chimie, physique, 
             mathématiques et informatique qui leur permettront d’acquérir des connaissances 
             générales à propos des phénomènes physico-chimiques d’une part et des atouts de 
             calculs mathématiques d’autre part.',
           
        ]);

        filiere::create([
            'nom' => 'BCG',
            'description' => '(BCG) Biologie, Chimie, Géologie
            L objectif de ce tronc commun est de donner aux étudiants de la Faculté des Sciences et Techniques une formation de base très généraliste qui vise à : * Accroître le niveau des connaissances dans différents champs disciplinaires, Mathématiques, Physique, Chimie, Géologie et Informatique. * Acquérir les connaissances et les savoirs faire de base permettant de poursuivre des études en cycles Licence Sciences et Techniques ou ingénieur. Cet enseignement de base est un outil indispensable pour toute formation universitaire principalement dans les domaines scientifiques tels que la chimie, la géologique, la Biologie ou encore lenvironnement',
           
        ]);

        // filiere::create([
        //     'nom' => 'ANALYTIQUE DES DONNEES',
        //     'description' => 'La Licence Science et Techniques en analytique des données permet aux étudiants de doter de compétences en matière d outils informatiques, des techniques et des méthodes statistiques pour permettre d’organiser, de synthétiser et de traduire efficacement les données métier d’une organisation. L étudiant doit être en mesure d apporter un appui analytique à la conduite d exploration et à lanalyse complexe de données.',
           
        // ]);

        // filiere::create([
        //     'nom' => 'GENIE CIVIL',
        //     'description' => 'GENIE CIVIL
        //     - Former les étudiants aux sciences mécaniques en général et au génie civil en particulier ;
        //     - Doter les étudiants des outils théoriques, numériques et pratiques pour les applications de la Mécanique aux technologies du Génie
        //       Civil et aux techniques de la mécanique des structures ;
        //     - Dispenser une formation fondamentale en mécanique des structures et en Génie Civil leur permettant la poursuite des études..',
           
        // ]);

        // filiere::create([
        //     'nom' => 'MASTER GENIE CIVIL',
        //     'description' => '
        //     L’objectif est la formation des cadres en Génie Civil de haut niveau scientifique et technique. La formation a donc vocation, en étroite collaboration avec les milieux professionnels, à participer au développement régional et national.',
           
        // ]);
        
        // filiere::create([
        //     'nom' => 'Master Génie Energétique',
        //     'description' => '
        //     Former des lauréats pour accompagner la stratégie énergétique nationale et mettre sur le marché du travail des jeunes « énergéticiens » capables de contribuer à la réalisation des différents projets dans le domaine d’énergétique.',
           
        // ]);

        // filiere::create([
        //     'nom' => 'DI: Logiciels et Systèmes Intelligents',
        //     'description' => '
        //     Former des ingénieurs capables de :
        // Comprendre les enjeux des techniques de l’information
        // Proposer et construire des solutions informatiques et décisionnelles compétitives et réalistes
        // Intervenir sur des problématiques informatiques complexes
        // Piloter des projets informatiques et les changements qu ils entraînent',
           
        // ]);

        // filiere::create([
        //     'nom' => 'DI : Génie Industriel',
        //     'description' => '
        //     Acquérir de solides compétences dans les domaines des sciences et des technologies ;
        //     Disposer d un potentiel de créativité et d innovation ;
        //     Disposer d aptitudes à conduire, à maîtriser, à organiser et à faire évoluer des procédés et des processus industriels ;
        //     Être capable de conduire, de diriger et de réaliser des projets industriels ;
        //     Maîtriser l évolution des technologies ;
        //     Être capable de s’insérer et d’évoluer professionnellement dans les services techniques et scientifiques des entreprises',
           
        // ]);
        
    }
}
