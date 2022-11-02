<?php

namespace App\Services;

class CvService
{
    public function __construct()
    {

    }
    public function getContext()
    {

        return [
            'cv' => 'https://cv.com/css/cv-print.css',
            'fontAwesome' => 'https://cv.com/font/css/font-awesome.min.css',
            'font' => 'https://cv.com/css/font.css',
            'header' => [
                'name' => 'Jocelyn',
                'lastName' => 'RAZAFIMAHARO',
                'photo' => 'https://cv.com/img/me.jpeg',
                'rule' => 'Développeur web fullstack',
                'techno' => 'Symfony 6 & Nestjs & Vuejs 3',
                'infos' => [
                    ['icon' => 'fa fa-address-book-o', 'info' => 'Antananarivo Madagascar'],
                    ['icon' => 'fa fa-mobile', 'info' => '+261 32 97 740 62'],
                    ['icon' => 'fa fa-envelope-o', 'info' => 'jorazdev@gmail.com'],
                    ['icon' => 'fa fa-github', 'info' => 'https://github.com/jorazdev'],
                    ['icon' => 'fa fa-globe', 'info' => 'https://kaomandy.com']
                ],
            ],
            'formations' => [
                [
                    'label' => 'CONNAISSANCES',
                    'events' => [
                        ['group' => 'Langages:', 'title' => 'Php, TypeScript, Javascript'],
                        ['group' => 'Frameworks:', 'title' => 'Symfony 6, Nestjs(Nodejs), Vuejs 3, Ionic 6, Angular X, ElementUI, Bootstrap 5'],
                        ['group' => 'Base de données:', 'title' => 'Mysql, Sqlite, Redis, Mongodb'],
                        ['group' => 'Système d\'exploitation:', 'title' => 'Linux Debian 11, Ubuntu 22.04'],
                        ['group' => 'Autres:', 'title' => 'Git, Docker, Vps'],
                    ]
                ],
                [
                    'label' => 'FORMATIONS',
                    'events' => [
                        ['group' => '2007-2009 :', 'title' => 'Licence Mathématiques à l’Université de Fianarantsoa (Madagascar)'],
                        ['group' => '2004-2005 :', 'title' => 'Baccalauréat Scientifique - Mention Bien (Saint François Xavier)']
                    ]
                ],
                [
                    'label' => 'DIVERS',
                    'events' => [
                        ['group' => 'Langue :', 'title' => 'Français(courant) Anglais(moyen)'],
                        ['group' => 'Sport :', 'title' => 'Basket, Foot']
                    ]
                ],
            ],
            'experiences' => [
                [
                    'image' => 'https://cv.com/img/devalto.png',
                    'job' => 'Développeur fullstack Symfony 6 - Vuejs 3',
                    'company' => 'Devalto',
                    'type' => 'Freelance',
                    'date' => 'Juin 2022 - Sept 2022',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Refonte d\'une application Symfony standard de gestion des applications web en Symfony 6 Vuejs 3',
                    'descriptions' => [
                        'Mise en place de Vuejs 3 sur Symfony 6',
                        'Développement des  fonctionnalités front end et backend'
                    ],
                    'technologies' => '#Symfony 6, #Vuejs 3, #Php 8, #Postgresql, #Git, #Docker'
                ],[
                    'image' => 'https://cv.com/img/vestaradio.jpeg',
                    'job' => 'Développeur fullstack Symfony 5 - Vuejs 2',
                    'company' => 'Vestaradio',
                    'type' => 'Freelance',
                    'date' => 'Sept 2020 - Oct 2022',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Développement d\'une application web sur la gestion de web radio en ligne en France
                                    https://studio.vestaradio.com/',
                    'descriptions' => [
                        'Analyse et architecture du projet',
                        'Développement de compte utilisateur',
                        'Développement de compte administrateur',
                        'Installation des environements de production Symfony 5 et Vuejs 2 sur Debian serveur',
                        'Mise en production par ssh du projet Symfony 5 & Vuejs 2 sur Debian serveur',
                        'Mise en place de système de paiement Monetico',
                        'Gestion des radios et fichiers mp3 des utilisateurs',
                        'Développement de système d\'upload multi fichiers mp3 utilisateur',
                        'Développement de système de traitement en tache de fond des fichiers mp3 et affichage en temps réel en utilisant mercure',
                        'Planification sur calendar des playlists radio'
                    ],
                    'technologies' => '#Symfony 5, #Vuejs 2, #API REST JWT, #Mercure, #Mysql, #Git, #Debian9, #SSH'
                ],
                [
                    'image' => 'https://cv.com/img/company.png',
                    'job' => 'Développeur fullstack Symfony 4 - Vuejs 2',
                    'company' => 'WEBMADAGASCAR(TheCodingMaching)',
                    'type' => 'Temps plein',
                    'date' => 'Mars 2019 - Mars 2020',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Gestion des sportifs en France qui a pour but de ',
                    'descriptions' => [
                        'Levier d’insertion sociale et professionnelle',
                        'Accompagner et permettre aux sportifs et cadres de mieux s’insérer dans le monde professionnel
                         (programme personnel, individuel ou collectif)',
                        'Favoriser l’embauche des sportifs/licenciés au sein des entreprises partenaires/membres',
                        'Développement des API REST pour la fonctionnalité de l\'application en utilisant API PLATFORM de Symfony 4',
                        'Intégration des pages web html en composant Vuejs',
                        'Développement des components et intégration des API sur Vuejs',
                        'Développement des géstions d\'utilisateur et l\'envoie de mail'
                    ],
                    'technologies' => '#Symfony 4, #Vuejs, #API REST JWT, #Mercure, #Mysql, #Git, #Ubuntu 18.04'
                ],
                [
                    'image' => 'https://cv.com/img/myagency.jpeg',
                    'job' => 'Développeur Symfony 3',
                    'company' => 'MyAgency',
                    'type' => 'Temps plein',
                    'date' => 'Nov. 2018 - Févr. 2019',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Application web pour la recherche des immobiliers en France',
                    'descriptions' => [
                        'Développement de gestion d\'avis de client concernant l\'immobilier',
                        'Développement de système de notification en utilisant le bundle GeniusesOfSymfony/WebSocketBundle',
                        'Mise en place de webservice sqs aws de amazone pour la gestion des queues',
                        'Mise place de Redis pour la gestion temporaire en mémoire des données',
                        'Développement des fonctionnalités et maintenance de l\'application immobilier'
                    ],
                    'technologies' => '#Symfony 3, #Aws Sqs, #Redis, #Mysql, #Ubuntu 18.04, #Git, #Websocket'
                ],
                [
                    'image' => 'https://cv.com/img/madasoftware.jpeg',
                    'job' => 'Développeur Symfony 3',
                    'company' => 'MadaSoftware ',
                    'type' => 'Temps plein',
                    'date' => 'Mai 2018 - Oct. 2018',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Application web pour les experts comptables en France',
                    'descriptions' => [
                        'Analyse et architecture du projet (MCD,UML)',
                        'Administrateur de serveur VPS linux ubuntu 16.04: Apache, Mysql, Php7.2',
                        'Développement des fonctionnalités: Authentification des différentes types d\'utilisateurs, gestion de
                        Cabinet, Collaborateur, Bureau de cabinet, profil utilisateur avec leur droit, envoie de mail, invitation
                        entre cabinet, génération de fichier pdf, importation et exportation de fichier excel, ...',
                        'Installation des bundles: LexikJWTAuthenticationBundle, FOSUserBundle, NelmioCorsBundle,KnpSnappyBundle',
                        'Développement et déploiement des api symfony vers le serveur VPS linux en utilisant gitLab',
                        'Compilation et déploiement du projet angular 6 vers le serveur VPS linux en utilisant gitLab'
                    ],
                    'technologies' => '#Symfony3, #Angular6 ,#API Rest ,#Mysql, #Ubuntu 16.04, #GitLab'
                ],
                [
                    'image' => 'https://cv.com/img/bocasay.jpeg',
                    'job' => 'Développeur Symfony3',
                    'company' => 'BOCASAY',
                    'type' => 'Temps plein',
                    'date' => 'Août 2016 - Oct. 2017',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Application web Audit et Comptabilité (athdata.net) pour vérifier la conformité, la qualité des données du fichier FEC',
                    'descriptions' => [
                        'Développer et maintenir l\'application web athdata.net',
                        'Développer les classes objets en php du grand livre, journal et balance afin d\'obtenir les résultats correspondant à partir d\'un fichier source comptable (ecriture comptable)',
                        'Mettre en place RabbitMq pour le traitement en tache de fond de l\'application',
                        'Traduire plus de 100 tests de contrôle comptable en language de programation php objet',
                        'Mettre en place un système d\'envoie de mail une fois que l\'analyse de donnée sera effectuée'
                    ],
                    'technologies' => '#Symfony3, #Html5, #Bootstrap, #Twig, #Css3, #Jquery, #Ajax, #Javascript, #Mysql, #Git, #RabbitMq'
                ],
                [
                    'image' => 'https://cv.com/img/company.png',
                    'job' => 'Développeur Windev, Webdev, Windev Mobile',
                    'company' => 'JMCONTACT',
                    'type' => 'Temps plein',
                    'date' => 'Janv. 2015 - Mai 2016',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Gestion d’enseigne de l’entreprise UNICA, Gestion commerciale de l’entreprise LVINFO, Gestion commerciale de l’entreprise LOGYSOFT',
                    'descriptions' => [
                        'Application Windows et mobile de gestion d\'enseigne',
                        'Maintenance évolutive et corrective, tests de l’application de gestion d’enseigne UNICA de base de données MySQL',
                        'Développer une application mobile iPhone',
                        'Application Windows et mobile de gestion commerciale',
                        'Maintenance évolutive et corrective, tests de l’application de gestion commerciale de l’entreprise LVINFO avec une base de données MySQL et HyperfileSQL Client/Serveur',
                        'Développer une application mobile android de gestion commerciale',
                        'Application Windows de gestion commerciale',
                        'Développer une application de gestion commerciale: Devis, Commande, Facture, Bon de préparation,
                         gestion d\'article, gestion de stock',
                    ],
                    'technologies' => '#Windev19, #Windev mobile19, #Mysql, #Ftp'
                ],
                [
                    'image' => 'https://cv.com/img/company.png',
                    'job' => 'Développeur Windev, Windev Mobile',
                    'company' => 'SUNSOFT',
                    'type' => 'Temps plein',
                    'date' => 'Juin 2014 - Oct. 2014',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Gestion de pharmacie (Pharmaplus): Application windows de gestion commerciale de pharmacie',
                    'descriptions' => [
                        'Développer et maintenir le logiciel de gestion de pharmacie (PharmaPLUS) de base de données HyperfileSQL Client/Serveur',
                        'Développer une application commerciale de vente Android (Galerie) de base de données embarquées SQLITE',
                        'Développer une application mobile CE d’inventaire de stock (Lecteur code barre) de la banque BNI Analakely'
                    ],
                    'technologies' => '#Windev18, #Windev mobile18, #HyperFileSql client server, #Ftp, #Sqlite'
                ],
                [
                    'image' => 'https://cv.com/img/company.png',
                    'job' => 'Développeur Windev',
                    'company' => 'NOUNOUS',
                    'type' => 'Temps plein',
                    'date' => 'Juin 2012 - Juin 2014',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Gestion de stock de dépôts et magasins: Application windows de gestion de stock de dépôts et magasins',
                    'descriptions' => [
                        'Développer et maintenir le logiciel de gestion de stock des dépôts et magasins'
                    ],
                    'technologies' => '#Windev14, #HyperFileSql client server'
                ],
                [
                    'image' => 'https://cv.com/img/company.png',
                    'job' => 'Développeur Windev',
                    'company' => 'SUNRISE',
                    'type' => 'Temps plein',
                    'date' => 'Avr. 2011 - Mai 2012',
                    'place' => 'Antananarivo Madagascar',
                    'title' => 'Gestion de pharmacie (Pharmaplus): Application windows de gestion commerciale de pharmacie',
                    'descriptions' => [
                        'Changer la language de programation VB6 du logiciel de point de vente de pharmacie(Pharmaplus) en language de programation Wlangage',
                        'Changer la base de données ACCESS 2003 en HyperFileSQLClient/Serveur',
                    ],
                    'technologies' => '#Windev14, #HyperFileSql client server'
                ],
            ],
        ];
    }
}