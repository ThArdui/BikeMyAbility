<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Seeder;

class AddbikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $bikesToAdd =
            [
                [
                    'Bike_name' => 'Easy Rider',
                    'Description' => 'Le Easy Rider est un tricycle conçu spécifiquement pour les adultes, offrant une solution de mobilité stable et confortable. Avec son design ergonomique et sa construction robuste, il est idéal pour les personnes ayant des besoins de mobilité spécifiques, notamment les personnes âgées ou celles ayant des difficultés de coordination. Son siège réglable et ses poignées ergonomiquiques garantissent un confort optimal, tandis que ses trois roues offrent une stabilité supérieure.',
                    'Pros' => '- Conçu spécifiquement pour les adultes\n- Stabilité accrue grâce à trois roues\n- Siège réglable et poignées ergonomiques pour un confort optimal\n- Convient aux personnes âgées et à celles ayant des difficultés de coordination',
                    'Cons' => '- Encombrant pour le transport\n- Pas adapté à une utilisation sportive intensive\n- Nécessite un espace de rangement supplémentaire',
                    'Weight' => 30,
                    'Electrical_assistance' => true, // Le Easy Rider est disponible avec assistance électrique
                    'Foldable' => false, // Le Easy Rider n'est pas pliable
                    'Speeds_number' => 7, // Nombre de vitesses (à titre d'exemple)
                    'Brakes_type' => 'Freins à disques', // Type de freinage
                    'Frame_height' => 'Cadre bas', // Hauteur du cadre
                    'Disability_type' => 'physique, auditif', // Type de handicap associé au vélo
                    'Bike_use' => 'solo', // Utilisation prévue du vélo
                    'Pedal_way' => 'pedal_legs', // Façon de pédaler
                    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…', // Dextérité des membres supérieurs
                    'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                    'Picture' => 'pictures/velo_easy_rider_van_raam.jpg' // Lien vers l'image du vélo, si disponible
                ],

                [
                    'Bike_name' => 'Fun2Go',
                    'Description' => 'Le Fun2Go est un vélo tandem à trois roues conçu pour offrir une expérience cycliste unique aux cyclistes de tous âges et de toutes capacités. Avec son design innovant, il permet à deux personnes de profiter ensemble de l\'activité cycliste, avec une personne pédalant à l\'avant et une personne assistant ou simplement profitant du voyage à l\'arrière. Il offre une conduite stable et confortable, idéale pour les sorties de loisirs en famille ou entre amis.',
                    'Pros' => '- Conception tandem unique pour une expérience cycliste partagée\n- Stabilité accrue avec trois roues\n- Confortable pour les passagers arrière\n- Idéal pour les sorties de loisirs en famille ou entre amis',
                    'Cons' => '- Encombrant pour le transport\n- Requiert un espace de stationnement plus grand\n- Peut nécessiter un certain temps pour s\'habituer à la conduite en tandem',
                    'Weight' => 50,
                    'Electrical_assistance' => true, // Le Fun2Go est disponible avec assistance électrique
                    'Foldable' => false, // Le Fun2Go n'est pas pliable
                    'Speeds_number' => 8, // Nombre de vitesses
                    'Brakes_type' => 'Freins à disques', // Type de freinage
                    'Frame_height' => 'Cadre bas', // Hauteur du cadre
                    'Disability_type' => 'physique, mental, visuel, auditif, cognitif', // Types de handicap associés au vélo
                    'Bike_use' => 'duo', // Utilisation prévue du vélo
                    'Pedal_way' => 'pedal_legs', // Façon de pédaler
                    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués. ', // Dextérité des membres supérieurs
                    'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                    'Picture' => 'pictures/fun2gobike.jpg' // Lien vers l'image du vélo
                ],
                 [


                     'Bike_name' => 'Veloplus',
                     'Description' => 'Le Veloplus est un vélo adapté spécialement pour les personnes en fauteuil roulant. Il offre une solution de mobilité flexible et confortable, permettant aux utilisateurs de transporter leur fauteuil roulant tout en profitant d\'une expérience de cyclisme agréable. Avec sa conception robuste et ses fonctionnalités ergonomiques, le Veloplus assure une conduite en toute sécurité et une accessibilité accrue.',
                     'Pros' => '- Solution de mobilité flexible pour les personnes en fauteuil roulant\n- Conception robuste et ergonomique\n- Facilité d\'utilisation et sécurité accrue\n- Permet de transporter le fauteuil roulant pendant le trajet en vélo',
                     'Cons' => '- Peut nécessiter un apprentissage pour une utilisation optimale\n- Peut être encombrant dans certains espaces restreints',
                     'Weight' => 64, // Poids du vélo (en kg)
                     'Electrical_assistance' => true, // Le Veloplus est disponible avec assistance électrique
                     'Foldable' => true, // Le Veloplus n'est pas pliable
                     'Speeds_number' => 24, // Nombre de vitesses
                     'Brakes_type' => 'Freins à disques', // Type de freinage
                     'Frame_height' => 'Cadre haut', // Hauteur du cadre
                     'Disability_type' => 'Physique, mental, auditif, visuel, cognitif ', // Type de handicap associé au vélo
                     'Bike_use' => 'Duo', // Utilisation prévue du vélo
                     'Pedal_way' => 'Auccun des deux', // Façon de pédaler
                     'Dexterity_arms' =>    "J'ai du mal à utiliser mes mains", // Dextérité des membres supérieurs
                     'Balance' => 'J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables, J’ai besoin/ je préfère rester dans mon fauteuil roulant', // Équilibre du cycliste
                     'Picture' => 'pictures/veloplusbike.jpg' // Lien vers l'image du vélo
                 ],
                [
                    'Bike_name' => 'O\'Pair',
                    'Description' => 'Le O\'Pair est un vélo à trois roues conçu pour le transport de passagers, offrant une solution de mobilité flexible et confortable. Son design innovant permet à un accompagnateur de conduire le vélo tandis que le passager peut s\'asseoir confortablement à l\'avant. Doté d\'un siège réglable et de poignées ergonomiques, le O\'Pair offre une expérience de conduite agréable et sécurisée.',
                    'Pros' => '- Conçu pour le transport de passagers\n- Siège réglable pour un confort optimal\n- Poignées ergonomiques pour une conduite sûre\n- Convient aux personnes à mobilité réduite',
    'Cons' => '- Encombrant pour le transport\n- Nécessite un espace de rangement supplémentaire',
    'Weight' => 40,
    'Electrical_assistance' => true,
    'Foldable' => false,
    'Speeds_number' => 7,
    'Brakes_type' => 'Freins à disques',
    'Frame_height' => 'Cadre haut',
    'Disability_type' => 'physique, mental, visuel, auditif, cognitif',
    'Bike_use' => 'duo',
    'Pedal_way' => 'Auccun des deux',
    'Dexterity_arms' => 'J\'ai du mal à utiliser mes mains',
    'Balance' => 'J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables',
    'Picture' => 'pictures/opairbike.jpg'

                    ],

                [
                    'Bike_name' => 'Twinny Plus',
                    'Description' => 'Le Twinny Plus est un tandem confortable conçu pour deux personnes, offrant une expérience de cyclisme agréable et sécurisée. Avec son cadre solide et ses composants de haute qualité, ce tandem est idéal pour les balades en famille ou entre amis. Doté de sièges réglables et de poignées ergonomiques, le Twinny Plus offre un confort optimal pour les deux cyclistes.',
                    'Pros' => '- Conçu pour deux personnes\n- Sièges réglables pour un confort optimal\n- Poignées ergonomiques pour une conduite sûre\n- Convient aux balades en famille ou entre amis',
                    'Cons' => '- Encombrant pour le transport\n- Nécessite un espace de rangement supplémentaire\n- Limité à deux personnes',
                    'Weight' => 35,
                    'Electrical_assistance' => true,
                    'Foldable' => true,
                    'Speeds_number' => 8,
                    'Brakes_type' => 'Freins à disques',
                    'Frame_height' => 'Cadre bas',
                    'Disability_type' => 'Physique, auditif, visuel, cognitif, mental',
                    'Bike_use' => 'duo',
                    'Pedal_way' => 'pedal_legs',
                    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués',
                    'Balance' => 'Je peux tenir sur une selle',
                    'Picture' => 'pictures/twinnyplustandem.jpg'
                ]




            ];


        foreach ($bikesToAdd as $bikeData) {
            Bike::create($bikeData);
        }
    }
}
/*
 template champs

   [
     'Bike_name' => '',
     'Description' => '',
     'Pros' => '',
     'Cons' => '',
     'Weight' => '',
    'Electrical_assistance' => '',
     'Foldable' => '',
     'Speeds_number' => '',
     'Brakes_type' => '',
     'Frame_height' => '',
     'Disability_type' => '',
     'Bike_use' => '',
     'Pedal_way' => '',
     'Dexterity_arms' => '',
     'Balance' => '',
     'Picture' => ''
 ],
VELOS DEJA AJOUTES DANS LA DB LOCAL CHEZ THOMAS

       [
                        'Bike_name' => 'Easy Rider',
                        'Description' => 'Le Easy Rider est un tricycle conçu spécifiquement pour les adultes, offrant une solution de mobilité stable et confortable. Avec son design ergonomique et sa construction robuste, il est idéal pour les personnes ayant des besoins de mobilité spécifiques, notamment les personnes âgées ou celles ayant des difficultés de coordination. Son siège réglable et ses poignées ergonomiques garantissent un confort optimal, tandis que ses trois roues offrent une stabilité supérieure.',
                        'Pros' => '- Conçu spécifiquement pour les adultes\n- Stabilité accrue grâce à trois roues\n- Siège réglable et poignées ergonomiques pour un confort optimal\n- Convient aux personnes âgées et à celles ayant des difficultés de coordination',
                        'Cons' => '- Encombrant pour le transport\n- Pas adapté à une utilisation sportive intensive\n- Nécessite un espace de rangement supplémentaire',
                        'Weight' => 30,
                        'Electrical_assistance' => true, // Le Easy Rider est disponible avec assistance électrique
                        'Foldable' => false, // Le Easy Rider n'est pas pliable
                        'Speeds_number' => 7, // Nombre de vitesses (à titre d'exemple)
                        'Brakes_type' => 'Freins à disques', // Type de freinage
                        'Frame_height' => 'Cadre bas', // Hauteur du cadre
                        'Disability_type' => 'physique, auditif', // Type de handicap associé au vélo
                        'Bike_use' => 'solo', // Utilisation prévue du vélo
                        'Pedal_way' => 'pedal_legs', // Façon de pédaler
                        'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…', // Dextérité des membres supérieurs
                        'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                        'Picture' => 'pictures/velo_easy_rider_van_raam.jpg' // Lien vers l'image du vélo, si disponible
                    ]
[
                    'Bike_name' => 'Fun2Go',
                    'Description' => 'Le Fun2Go est un vélo tandem à trois roues conçu pour offrir une expérience cycliste unique aux cyclistes de tous âges et de toutes capacités. Avec son design innovant, il permet à deux personnes de profiter ensemble de l\'activité cycliste, avec une personne pédalant à l\'avant et une personne assistant ou simplement profitant du voyage à l\'arrière. Il offre une conduite stable et confortable, idéale pour les sorties de loisirs en famille ou entre amis.',
                    'Pros' => '- Conception tandem unique pour une expérience cycliste partagée\n- Stabilité accrue avec trois roues\n- Confortable pour les passagers arrière\n- Idéal pour les sorties de loisirs en famille ou entre amis',
                    'Cons' => '- Encombrant pour le transport\n- Requiert un espace de stationnement plus grand\n- Peut nécessiter un certain temps pour s\'habituer à la conduite en tandem',
                    'Weight' => 50,
                    'Electrical_assistance' => true, // Le Fun2Go est disponible avec assistance électrique
                    'Foldable' => false, // Le Fun2Go n'est pas pliable
                    'Speeds_number' => 8, // Nombre de vitesses
                    'Brakes_type' => 'Freins à disques', // Type de freinage
                    'Frame_height' => 'Cadre bas', // Hauteur du cadre
                    'Disability_type' => 'physique, mental, visuel, auditif, cognitif', // Types de handicap associés au vélo
                    'Bike_use' => 'duo', // Utilisation prévue du vélo
                    'Pedal_way' => 'pedal_legs', // Façon de pédaler
                    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués. ', // Dextérité des membres supérieurs
                    'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                    'Picture' => 'pictures/fun2gobike.jpg' // Lien vers l'image du vélo
                ],
                 [


                     'Bike_name' => 'Veloplus',
                     'Description' => 'Le Veloplus est un vélo adapté spécialement pour les personnes en fauteuil roulant. Il offre une solution de mobilité flexible et confortable, permettant aux utilisateurs de transporter leur fauteuil roulant tout en profitant d\'une expérience de cyclisme agréable. Avec sa conception robuste et ses fonctionnalités ergonomiques, le Veloplus assure une conduite en toute sécurité et une accessibilité accrue.',
                     'Pros' => '- Solution de mobilité flexible pour les personnes en fauteuil roulant\n- Conception robuste et ergonomique\n- Facilité d\'utilisation et sécurité accrue\n- Permet de transporter le fauteuil roulant pendant le trajet en vélo',
                     'Cons' => '- Peut nécessiter un apprentissage pour une utilisation optimale\n- Peut être encombrant dans certains espaces restreints',
                     'Weight' => 64, // Poids du vélo (en kg)
                     'Electrical_assistance' => true, // Le Veloplus est disponible avec assistance électrique
                     'Foldable' => true, // Le Veloplus n'est pas pliable
                     'Speeds_number' => 24, // Nombre de vitesses
                     'Brakes_type' => 'Freins à disques', // Type de freinage
                     'Frame_height' => 'Cadre haut', // Hauteur du cadre
                     'Disability_type' => 'Physique, mental, auditif, visuel, cognitif ', // Type de handicap associé au vélo
                     'Bike_use' => 'Duo', // Utilisation prévue du vélo
                     'Pedal_way' => 'Auccun des deux', // Façon de pédaler
                     'Dexterity_arms' =>    "J'ai du mal à utiliser mes mains", // Dextérité des membres supérieurs
                     'Balance' => 'J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables, J’ai besoin/ je préfère rester dans mon fauteuil roulant', // Équilibre du cycliste
                     'Picture' => 'pictures/veloplusbike.jpg' // Lien vers l'image du vélo
                 ],
                [
                    'Bike_name' => 'O\'Pair',
                    'Description' => 'Le O\'Pair est un vélo à trois roues conçu pour le transport de passagers, offrant une solution de mobilité flexible et confortable. Son design innovant permet à un accompagnateur de conduire le vélo tandis que le passager peut s\'asseoir confortablement à l\'avant. Doté d\'un siège réglable et de poignées ergonomiques, le O\'Pair offre une expérience de conduite agréable et sécurisée.',
                    'Pros' => '- Conçu pour le transport de passagers\n- Siège réglable pour un confort optimal\n- Poignées ergonomiques pour une conduite sûre\n- Convient aux personnes à mobilité réduite',
    'Cons' => '- Encombrant pour le transport\n- Nécessite un espace de rangement supplémentaire',
    'Weight' => 40,
    'Electrical_assistance' => true,
    'Foldable' => false,
    'Speeds_number' => 7,
    'Brakes_type' => 'Freins à disques',
    'Frame_height' => 'Cadre haut',
    'Disability_type' => 'physique, mental, visuel, auditif, cognitif',
    'Bike_use' => 'duo',
    'Pedal_way' => 'Auccun des deux',
    'Dexterity_arms' => 'J\'ai du mal à utiliser mes mains',
    'Balance' => 'J’ai besoin d’être dans un siège où des éléments de positionnement tels  que des ceintures sont intégrables',
    'Picture' => 'pictures/opairbike.jpg'

                    ],

                [
                    'Bike_name' => 'Twinny Plus',
                    'Description' => 'Le Twinny Plus est un tandem confortable conçu pour deux personnes, offrant une expérience de cyclisme agréable et sécurisée. Avec son cadre solide et ses composants de haute qualité, ce tandem est idéal pour les balades en famille ou entre amis. Doté de sièges réglables et de poignées ergonomiques, le Twinny Plus offre un confort optimal pour les deux cyclistes.',
                    'Pros' => '- Conçu pour deux personnes\n- Sièges réglables pour un confort optimal\n- Poignées ergonomiques pour une conduite sûre\n- Convient aux balades en famille ou entre amis',
                    'Cons' => '- Encombrant pour le transport\n- Nécessite un espace de rangement supplémentaire\n- Limité à deux personnes',
                    'Weight' => 35,
                    'Electrical_assistance' => true,
                    'Foldable' => true,
                    'Speeds_number' => 8,
                    'Brakes_type' => 'Freins à disques',
                    'Frame_height' => 'Cadre bas',
                    'Disability_type' => 'Physique, auditif, visuel, cognitif, mental',
                    'Bike_use' => 'duo',
                    'Pedal_way' => 'pedal_legs',
                    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués',
                    'Balance' => 'Je peux tenir sur une selle',
                    'Picture' => 'pictures/twinnyplustandem.jpg'
                ]



 */
