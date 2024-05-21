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
        $bikesToAdd = [
                [
                    'Bike_name' => 'Easy Rider',
                    'Description' => 'Le Easy Rider est un tricycle conçu spécifiquement pour les adultes, offrant une solution de mobilité stable et confortable. Avec son design ergonomique et sa construction robuste, il est idéal pour les personnes ayant des besoins de mobilité spécifiques, notamment les personnes âgées ou celles ayant des difficultés de coordination. Son siège réglable et ses poignées ergonomiquiques garantissent un confort optimal, tandis que ses trois roues offrent une stabilité supérieure.',
                    'Pros' => '- Conçu spécifiquement pour les adultes
- Stabilité accrue grâce à trois roues<br> - Siège réglable et poignées ergonomiques pour un confort optimal<br> - Convient aux personnes âgées et à celles ayant des difficultés de coordination',
                    'Cons' => '- Encombrant pour le transport<br> - Pas adapté à une utilisation sportive intensive<br> - Nécessite un espace de rangement supplémentaire',
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
                    'Bike_name' => 'Maxi-Evol',
                    'Description' => 'Le Maxi-Evol est un tricycle à trois roues conçu pour offrir stabilité et confort. Il est idéal pour les personnes ayant des besoins spécifiques en termes de mobilité, notamment les personnes âgées ou celles ayant des difficultés à maintenir l’équilibre sur un vélo traditionnel.',
                    'Pros' => [
                        'Stabilité accrue grâce aux trois roues',
                        'Confortable avec un siège ergonomique',
                        'Équipé d\'un panier de transport',
                        'Idéal pour les personnes âgées ou ayant des problèmes d\'équilibre'
                    ],
                    'Cons' => [
                        'Encombrant pour le transport',
                        'Requiert un espace de stationnement plus grand',
                        'Peut nécessiter un temps d\'adaptation pour la conduite'
                    ],
                    'Weight' => 27,
                    'Electrical_assistance' => true, // Disponible avec assistance électrique
                    'Foldable' => false, // Le Maxi-Evol n'est pas pliable
                    'Speeds_number' => 7, // Nombre de vitesses
                    'Brakes_type' => 'Freins à tambour', // Type de freinage
                    'Frame_height' => 'Cadre bas', // Hauteur du cadre
                    'Disability_type' => 'physique', // Types de handicap associés au vélo
                    'Bike_use' => 'solo', // Utilisation prévue du vélo
                    'Pedal_way' => 'pedal_legs', // Façon de pédaler
                    'Dexterity_arms' => [
                        'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…',
                        'La dextérité de mes mains est moyenne : je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués.'
                    ], // Dextérité des membres supérieurs
                    'Balance' => [
                        'Je peux tenir sur une selle',
                        'J’ai besoin d’être dans un siège'
                    ], // Équilibre du cycliste
                    'Picture' => 'pictures/maxievolbike.jpg'
                ],
                [
                    'Bike_name' => 'Scorpion fx',
                    'Description' => 'Le Scorpion fx est un tricycle couché pliable de hauteur moyenne, conçu pour les cyclistes souhaitant combiner confort, performance et praticité pour les voyages. Son design pliable permet de le ranger facilement sans outils en 60 secondes, et sa suspension arrière assure une conduite confortable même sur de longues distances.',
                    'Pros' => [
                        'Pliable sans outils en 60 secondes',
                        'Stabilité améliorée',
                        'Hauteur de siège moyenne pour une montée facile',
                        'Capacité de bagages jusqu\'à 60 kg'
                    ],
                    'Cons' => [
                        'Encombrant même plié',
                        'Peut être difficile à transporter en transport public',
                        'Nécessite un espace de stationnement plus grand'
                    ],
                    'Weight' => 20, // poids approximatif
                    'Electrical_assistance' => true, // Disponible avec assistance électrique
                    'Foldable' => true, // Le Scorpion fx est pliable
                    'Speeds_number' => 27, // Nombre de vitesses
                    'Brakes_type' => 'Freins à disque', // Type de freinage
                    'Frame_height' => 'Cadre bas', // Hauteur du cadre
                    'Disability_type' => 'physique', // Types de handicap associés au vélo
                    'Bike_use' => 'solo', // Utilisation prévue du vélo
                    'Pedal_way' => 'pedal_legs', // Façon de pédaler
                    'Dexterity_arms' => [
                        'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…',
                        'La dextérité de mes mains est moyenne : je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués.'
                    ], // Dextérité des membres supérieurs
                    'Balance' => [
                        'Je peux tenir sur une selle',
                        'J’ai besoin d’être dans un siège'
                    ], // Équilibre du cycliste
                    'Picture' => 'pictures/scorpion bike.jpg'
                ],
                [
                    'Bike_name' => 'Hands-On-Cycle',
                    'Description' => "Le Hands-On-Cycle de HP Velotechnik est un tricycle innovant à propulsion manuelle, transformant un vélo traditionnel à pédales en un véhicule propulsé par les mains. Ce concept unique rend le handcycling plus sûr et inclusif pour les personnes handicapées, offrant une intégration parfaite des commandes et des câbles dans un boîtier fermé. La conception assure que le cycliste évite tout contact avec les pièces rotatives et huileuses du mécanisme d'entraînement.",
                    'Pros' => '- Propulsion manuelle sécurisée et inclusive
               - Conception compacte et élégante
               - Petit cercle de braquage
               - Cockpit ergonomique pour un confort optimal',
                    'Cons' => '- Adaptation nécessaire pour les utilisateurs habitués aux pédales
               - Non pliable avec le module de propulsion manuelle installé',
                    'Weight' => 17,5, // Poids approximatif du module Hands-On-Cycle
                    'Electrical_assistance' => true, // Disponible avec assistance électrique
                    'Foldable' => false, // Le tricycle n'est pas pliable avec le module Hands-On-Cycle
                    'Speeds_number' => 10, // Nombre de vitesses
                    'Brakes_type' => 'Freins à disques', // Type de freinage
                    'Frame_height' => 'Cadre bas', // Hauteur du cadre
                    'Disability_type' => 'physique', // Types de handicap associés au vélo
                    'Bike_use' => 'main', // Utilisation prévue du vélo
                    'Pedal_way' => 'main', // Façon de pédaler
                    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne : je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués.',
                    'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                    'Picture' => 'pictures/handonsbike.jpg'
                ],
                [
                    'Bike_name' => 'Handbike réglable HB500',
                    'Description' => 'Le Handbike réglable HB500 de Decathlon est conçu pour les personnes à mobilité réduite ou en situation de handicap. Idéal pour les déplacements en ville et les loisirs, ce vélo permet une plus grande autonomie grâce à sa capacité d'adaptation à différents besoins.',
    'Pros' => '- Adapté aux différentes pathologies de handicap
    - Facilité d\'utilisation avec des réglages standards pré-configurés
              - Assure autonomie et confort aux utilisateurs
              - Livré prêt à l\'usage',
    'Cons' => '- Encombrant pour le transport
              - Nécessite un entretien régulier pour assurer sécurité et performance
              - Le poids peut être un facteur limitant pour certains utilisateurs',
    'Weight' => 120, // Capacité maximale supportée par le vélo
    'Electrical_assistance' => false, // Le Handbike n'est pas équipé d'assistance électrique
    'Foldable' => false, // Le Handbike n'est pas pliable
    'Speeds_number' => 7, // Nombre de vitesses
    'Brakes_type' => 'Freins à disques', // Type de freinage
    'Frame_height' => 'Cadre bas', // Hauteur du cadre
    'Disability_type' => 'physique, mental', // Types de handicap associés au vélo
    'Bike_use' => 'solo', // Utilisation prévue du vélo
    'Pedal_way' => 'pedal_hands', // Façon de pédaler
    'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne: je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués.', // Dextérité des membres supérieurs
    'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
    'Picture' => 'pictures/handbikedecathlon.jpg'
],
=======
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
            ],
            [
                'Bike_name' => 'Maxi-Evol',
                'Description' => 'Le Maxi-Evol est un tricycle à trois roues conçu pour offrir stabilité et confort. Il est idéal pour les personnes ayant des besoins spécifiques en termes de mobilité, notamment les personnes âgées ou celles ayant des difficultés à maintenir l’équilibre sur un vélo traditionnel.',
                'Pros' => '- Stabilité accrue grâce aux trois roues\n- Confortable avec un siège ergonomique\n- Équipé d\'un panier de transport\n- Idéal pour les personnes âgées ou ayant des problèmes d\'équilibre',
                'Cons' => '- Encombrant pour le transport\n- Requiert un espace de stationnement plus grand\n- Peut nécessiter un temps d\'adaptation pour la conduite',
                'Weight' => 27,
                'Electrical_assistance' => true, // Disponible avec assistance électrique
                'Foldable' => false, // Le Maxi-Evol n'est pas pliable
                'Speeds_number' => 7, // Nombre de vitesses
                'Brakes_type' => 'Freins à tambour', // Type de freinage
                'Frame_height' => 'Cadre bas', // Hauteur du cadre
                'Disability_type' => 'physique', // Types de handicap associés au vélo
                'Bike_use' => 'solo', // Utilisation prévue du vélo
                'Pedal_way' => 'pedal_legs', // Façon de pédaler
                'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…', // Dextérité des membres supérieurs
                'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                'Picture' => 'pictures/maxievolbike.jpg'
            ],
            [
                'Bike_name' => 'Scorpion fx',
                'Description' => 'Le Scorpion fx est un tricycle couché pliable de hauteur moyenne, conçu pour les cyclistes souhaitant combiner confort, performance et praticité pour les voyages. Son design pliable permet de le ranger facilement sans outils en 60 secondes, et sa suspension arrière assure une conduite confortable même sur de longues distances.',
                'Pros' => '- Pliable sans outils en 60 secondes\n- Stabilité améliorée\n- Hauteur de siège moyenne pour une montée facile\n- Capacité de bagages jusqu\'à 60 kg',
                'Cons' => '- Encombrant même plié\n- Peut être difficile à transporter en transport public\n- Nécessite un espace de stationnement plus grand',
                'Weight' => 20, // poids approximatif
                'Electrical_assistance' => true, // Disponible avec assistance électrique
                'Foldable' => true, // Le Scorpion fx est pliable
                'Speeds_number' => 27, // Nombre de vitesses
                'Brakes_type' => 'Freins à disque', // Type de freinage
                'Frame_height' => 'Cadre bas', // Hauteur du cadre
                'Disability_type' => 'physique', // Types de handicap associés au vélo
                'Bike_use' => 'solo', // Utilisation prévue du vélo
                'Pedal_way' => 'pedal_legs', // Façon de pédaler
                'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…', // Dextérité des membres supérieurs
                'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                'Picture' => 'pictures/scorpion bike.jpg'
            ],
            [
                'Bike_name' => 'Hands-On-Cycle',
                'Description' => "Le Hands-On-Cycle de HP Velotechnik est un tricycle innovant à propulsion manuelle, transformant un vélo traditionnel à pédales en un véhicule propulsé par les mains. Ce concept unique rend le handcycling plus sûr et inclusif pour les personnes handicapées, offrant une intégration parfaite des commandes et des câbles dans un boîtier fermé. La conception assure que le cycliste évite tout contact avec les pièces rotatives et huileuses du mécanisme d'entraînement.",
                'Pros' => '- Propulsion manuelle sécurisée et inclusive\n- Conception compacte et élégante\n- Petit cercle de braquage\n- Cockpit ergonomique pour un confort optimal',
                'Cons' => '- Adaptation nécessaire pour les utilisateurs habitués aux pédales\n- Non pliable avec le module de propulsion manuelle installé',
                'Weight' => 17.5, // Poids approximatif du module Hands-On-Cycle
                'Electrical_assistance' => true, // Disponible avec assistance électrique
                'Foldable' => false, // Le tricycle n'est pas pliable avec le module Hands-On-Cycle
                'Speeds_number' => 10, // Nombre de vitesses
                'Brakes_type' => 'Freins à disques', // Type de freinage
                'Frame_height' => 'Cadre bas', // Hauteur du cadre
                'Disability_type' => 'physique', // Types de handicap associés au vélo
                'Bike_use' => 'main', // Utilisation prévue du vélo
                'Pedal_way' => 'main', // Façon de pédaler
                'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…, La dextérité de mes mains est moyenne : je sais me tenir à un guidon mais les mouvements précis tels que la conduite ou le freinage sont compliqués.',
                'Balance' => 'Je peux tenir sur une selle, J’ai besoin d’être dans un siège', // Équilibre du cycliste
                'Picture' => 'pictures/handonsbike.jpg'
            ],
            [
                'Bike_name' => 'Handbike réglable HB500',
                'Description' => 'Le Handbike réglable HB500 de Decathlon est conçu pour les personnes à mobilité réduite ou en situation de handicap. Idéal pour les déplacements en ville et les loisirs, ce vélo permet une plus grande autonomie grâce à sa capacité d\'adaptation à différents besoins.',
                'Pros' => '- Adapté aux différentes pathologies de handicap\n- Facilité d\'utilisation avec des réglages standards pré-configurés\n- Assure autonomie et confort aux utilisateurs\n- Livré prêt à l\'usage',
                'Cons' => '- Encombrant pour le transport\n- Nécessite un entretien régulier pour assurer sécurité et performance\n- Le poids peut être un facteur limitant pour certains utilisateurs',
                'Weight' => 120, // Capacité maximale supportée par le vélo
                'Electrical_assistance' => false, // Le Handbike n'est pas équipé d'assistance électrique
                'Foldable' => false, // Le Handbike n'est pas pliable
                'Speeds_number' => 1, // Le vélo est monovitesse
                'Brakes_type' => 'Freins à disque', // Type de freinage
                'Frame_height' => 'Cadre bas', // Hauteur du cadre
                'Disability_type' => 'physique', // Types de handicap associés au vélo
                'Bike_use' => 'main', // Utilisation prévue du vélo
                'Pedal_way' => 'main', // Façon de pédaler
                'Dexterity_arms' => 'La dextérité de mes mains est bonne : je sais conduire, freiner, changer les vitesses…', // Dextérité des membres supérieurs
                'Balance' => 'Je peux tenir sur une selle', // Équilibre du cycliste
                'Picture' => 'pictures/handbikehb500.jpg' // Lien vers l'image du vélo, si disponible
            ],
        ];

        foreach ($bikesToAdd as $bike) {
            Bike::create($bike);
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
                        'Pros' => '- Conçu spécifiquement pour les adultes
- Stabilité accrue grâce à trois roues
- Siège réglable et poignées ergonomiques pour un confort optimal
- Convient aux personnes âgées et à celles ayant des difficultés de coordination',
                        'Cons' => '- Encombrant pour le transport
- Pas adapté à une utilisation sportive intensive
- Nécessite un espace de rangement supplémentaire',
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
                    'Pros' => '- Conception tandem unique pour une expérience cycliste partagée
- Stabilité accrue avec trois roues
- Confortable pour les passagers arrière
- Idéal pour les sorties de loisirs en famille ou entre amis',
                    'Cons' => '- Encombrant pour le transport
- Requiert un espace de stationnement plus grand
- Peut nécessiter un certain temps pour s\'habituer à la conduite en tandem',
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
                     'Pros' => '- Solution de mobilité flexible pour les personnes en fauteuil roulant\n - Conception robuste et ergonomique
- Facilité d\'utilisation et sécurité accrue
- Permet de transporter le fauteuil roulant pendant le trajet en vélo',
                     'Cons' => '- Peut nécessiter un apprentissage pour une utilisation optimale
- Peut être encombrant dans certains espaces restreints',
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
                    'Pros' => '- Conçu pour le transport de passagers
- Siège réglable pour un confort optimal\n - Poignées ergonomiques pour une conduite sûre
- Convient aux personnes à mobilité réduite',
    'Cons' => '- Encombrant pour le transport
- Nécessite un espace de rangement supplémentaire',
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
                    'Pros' => '- Conçu pour deux personnes
- Sièges réglables pour un confort optimal
- Poignées ergonomiques pour une conduite sûre
- Convient aux balades en famille ou entre amis',
                    'Cons' => '- Encombrant pour le transport
- Nécessite un espace de rangement supplémentaire
- Limité à deux personnes',
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
