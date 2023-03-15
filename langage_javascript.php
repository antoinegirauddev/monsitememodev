<?php 
    include "./php/includes/templates/header.tpl.php";
?>
                    <h2>Le langage Javascript</h2>
                </div>    
<?php 
    include "./php/includes/templates/nav.tpl.php"
?>               
</header> 
<section>
    <article>
        <p class="introduction_langage">Envie d'apprendre le langage Javascript, pas de soucis :D :<br /></p>    
        <p>Pour aller directement sur la partie du JavasScript pour le Web, cliques ici :)</p>
        <h2>------------&gt;<a href="#ancre_sur_javascript_pour_le_web">Le Javascript pour le Web</a>&lt;-----------</h2>

        <h1 id="ancre_sur_declaration_variable">Déclaration des variables</h1>
        <p>Un programme utilise des <span class="mise_en_valeur4">variables</span> pour enregistrer et manipuler des données.</p>
        <p>Petit rappel :</p>
        <ul>
            <li>Une <span class="mise_en_valeur4">variable</span> est un contenant utilisé pour enregistrer une donnée spécifique dont notre programme a besoin pour travailler; Un nom d'utilisateur, le nombre de billets restants pour un vol, la disponibilité ou non d'un certain produit en stock, toutes ces données sont enregistrées dans des variables.</li><br />
            <li>Une donnée placée dans une variable s'appelle une <span class="mise_en_valeur4">valeur</span>.</li>
        </ul>
        <p>Quelques conseils à ce propos :</p>
        <ul>
            <li><span class="mise_en_valeur4">Utiliser des noms descriptifs et clairs dans le code</span> : Plutôt que <strong>qty</strong> ou <strong>quantity</strong>, il vaut mieux que la variable s'appelle <strong>quantityInStock</strong> si elle définit la quantité d'un stock par exemple.</li>
            <li><span class="mise_en_valeur4">Éviter les noms raccourcis</span> de variable comme <strong>annuelRes</strong> au lieu de <strong>annuelReservation</strong> car on s'y perd vite</li>
            <li><span class="mise_en_valeur4">Suivre une convention de nommage constante</span> : La convention de nommage la plus courante est <span class="mise_en_valeur1">camel case</span>; Dans cette convention, les <span class="mise_en_valeur4">noms sont constitués de plusieurs mots dont l'initiale est en capitale</span>, par exemple <strong>numberOfCats</strong>, <strong>finalAnswer</strong></li>
        </ul>
       
        <h2>Création de variable</h2>
        <p>En JavaScript, la déclaration d'une variable se limite au <span class="mise_en_valeur4">mot-clé <strong>let</strong>, suivi du nom de variable</span>, exemple :</p>
        <p class="citation_console">
        let numberOfCats = 2;
        let numberOfDogs = 4;
        </p>
        <p class="mise_en_valeur4">Cela a donc <span class="mise_en_valeur1">créé</span> et <span class="mise_en_valeur1">initialisé</span> deux variables.</p>

        <h2>Modification de variable</h2>
        <p>Pour modifier la valeur d'une variable, <span class="mise_en_valeur4">on la réaffecte :</span></p>
        <p class="citation_console">
        numberOfCats = 4;
        </p>
        <p>Donc si on crée la variable et qu'on l'initialise, mais qu'ensuite on veut la réaffecter, le code sera :</p>
        <p class="citation_console">
        let numberOfCats = 3;
        numberOfCats = 4;
        </p>
        
        <h1 id="ancre_sur_les_operateurs">Les opérateurs</h1>
        <p>Pour créer une variable <span class="mise_en_valeur4">à partir de deux variables additionnées</span>, on utilise le signe <strong>+</strong>, exemple :</p>
        <p class="citation_console">
        let totalCDs = 67;
        let totalVinyls = 34;
        let totalMusic = totalCDs + totalVinyls;
        </p>
        <p>À l'inverse, pour créer une variables <span class="mise_en_valeur4">à partir de la soustraction de deux variables</span>, on utilise le signe <strong>-</strong>, exemple :</p>
        <p class="citation_console">
        let cookiesInJar = 10;
        let cookiesRemoved = 2;
        let cookiesLeftInJar = cookiesInJar – cookiesRemoved;
        </p>
        <p>
        Pour <span class="mise_en_valeur4">ajouter ou soustraire un nombre d'une variable</span>, on utilise les opérateurs <strong>+=</strong> et <strong>-=</strong>, exemple :</p>
        <p class="citation_console">
        let cookiesInJar = 10;
        /* on mange deux cookies */
        cookiesInJar -= 2;  //il reste 8 cookies
        /* cuisson d'un nouveau lot de cookies */
        cookiesInJar += 12; // il y a maintenant 20 cookies dans la boîte
        </p>
        <p>Enfin, on peut utiliser <strong>++</strong> ou <strong>--</strong> pour <span class="mise_en_valeur4">ajouter ou soustraire 1</span> (<span class="mise_en_valeur1">incrément</span> ou <span class="mise_en_valeur4">décrément</span>), exemple :</p>
        <p class="citation_console">
        let numberOfLikes = 10;
        numberOfLikes++;  // cela fait 11
        numberOfLikes--; // et on revient à 10
        </p>
        <p>Les opérations de <span class="mise_en_valeur4">multiplication et de division</span> utilisent les opérateurs <strong>*</strong> et <strong>/</strong>, exemple :</p>
        <p class="citation_console">
        let costPerProduct = 20;
        let numberOfProducts = 5;
        let totalCost = costPerProduct * numberOfProducts;
        let averageCostPerProduct = totalCost / numberOfProducts;
        </p>
        <p>Comme pour l'addition et la soustraction, il existe aussi les opérateurs <strong>*=</strong> et <strong>/=</strong> pour <span class="mise_en_valeur4">multiplier ou diviser</span> un nombre :
        <p class="citation_console">
        let numberOfCats = 2;
        numberOfCats *= 6;  // numberOfCats vaut maintenant 2*6 = 12;
        numberOfCats /= 3;  // numberOfCats vaut maintenant 12/3 = 4;
        </p>
        <p>On pourrait donc obtenir un premier script comme suit :</p>
        <p class="citation_console">
        let numberOfSeasons = 6;
        let numberOfEpisodes = 12;
        let episodeTime = 45;
        let commercialTime = 5;
        let totalShowTime = (episodeTime + commercialTime) * numberOfSeasons * numberOfEpisodes;
        </p>

        <h2>Mutabilité des variables</h2>
        <p>Une variable est de base <span class="mise_en_valeur1">mutable</span> c'est-à-dire qu'<span class="mise_en_valeur4">elle peut changer au cours du temps</span>.</p>
        <p class="mise_en_valeur4">On la déclare avec le mot-clé <strong>let</strong> suivi d'un nom de variable et on lui affecte une valeur de départ.</p>
        <p>Par la suite, on va pouvoir changer la valeur de cette variable autant de fois que l'on souhaite.</p>
        <p>Par exemple, on crée un compteur à 0, et, à chaque fois qu'on clique sur un bouton on augmente la valeur de 1 pour connaître à tout instant le nombre de clics réalisés, depuis le début de l'exécution du code, exemple :</p>
        <p class="citation_console">
        let compteur = 0;
        compteur++;
        compteur = 10;
        </p>

        <h1 id="ancre_sur_les_constantes">Les constantes</h1>
        <p>Dans de nombreux programmes, certaines données ne seront pas modifiées pendant l'exécution du programme, c'est le cas par exemple du nom d'une entreprise, de la date de naissance d'un utilisateur, ou du nombre d'heures dans une journée.</p>
        <p class="mise_en_valeur4">Pour s'assurer de ne pas réaffecter par inadvertance de nouvelles valeurs à ces données, on va utiliser des <span class="mise_en_valeur1">constantes</span>.</p>
        <p class="mise_en_valeur4">Ce sont simplement des variables qui ne seront pas mutables.</p>
        <p>On donnera une valeur de départ et on ne pourra plus changer la valeur par la suite.</p>
        <p>Ainsi s'il y a une erreur de logique dans notre code changeant la valeur de la variable constante qui ne devait pas changer, javascript retournera une erreur, par exemple :</p>
        <p class="citation_console">
        const nombrePostParPage = 20;
        nombrePostParPage = 30; // Retournera une erreur dans la console car on ne peut plus changer sa valeur
        </p>

        <h1 id="ancre_sur_les_types_de_donnees">Les types de données</h1>
        <p>Le type d'une variable ou d'une constante est le genre des données qu'elle enregistre.</p>
        <p>En JavaScript, il y a trois types <span class="mise_en_valeur4">primitifs</span> principaux :</p>
        <ul class="mise_en_valeur4">
            <li><span class="mise_en_valeur1">number</span> : Nombre</li>
            <li><span class="mise_en_valeur1">string</span> : Chaîne de caractères</li>
            <li><span class="mise_en_valeur1">boolean</span> : Valeur logique</li>
        </ul>
        <p class="mise_en_valeur1">Les number :</p>
        <p>Attention au calcul avec les nombres à virgule, elle peut déclencher des erreurs :</p>
        <p class="citation_console">
        let integerCalculation = 1 + 2;  // donne 3
        let weirdCalculation = 0.1 + 0.2;  // on attend 0.3, réponse réelle 0.30000000000000004
        </p>
        <p class="mise_en_valeur4">Chaque fois que c'est possible, il faut utiliser des entiers.</p>
        <p class="mise_en_valeur1">Les boolean :</p>
        <p>Elles ne peuvent avoir que deux valeurs, <strong>true</strong> ou <strong>false</strong>, on s'en sert par exemple pour savoir si une case est cochée ou non, si un utilisateur est connecté ou non, ou si un ensemble de conditions particulières est réuni, exemple :</p>
        <p class="citation_console">
        let userIsSignedIn = true
        let userIsAdmin = false;
        </p>
        <p class="mise_en_valeur1">Les string :</p>
        <p>Elles permettent d'enregistrer du texte, n'importe quel caractère et peut contenir plus de 134 millions de caractères.</p>
        <p class="mise_en_valeur4">Elles sont encadrées par des guillemets simples ou doubles <strong>‘</strong> ou <strong>“</strong>.</p>
        <p>Exemple :</p>
        <p class="citation_console">
        let firstName = "Clémentine";
        let lastName = 'Degaine';
        </p>
        <p>Les chaînes peuvent aussi être concaténées (ajoutées à la fin l'une de l'autre) par l'opérateur <strong>+</strong>, exemple :</p>
        <p class="citation_console">
        let wholeName = firstName + " " + lastName;  // valeur: "Clémentine Degaine"
        </p>
        <p>Il est possible depuis quelques années d'utiliser une nouvelle écriture qui simplifie la concaténation des variables et des chaînes de caractère : <span class="mise_en_valeur1">la string interpolation</span>.</p>
        <p class="mise_en_valeur4">Pour créer une string interpolation on écrit du texte encadrée par le signe <strong>`</strong> (cote oblique) et si on veut injecter une variable dans ce code on utilise l'expression <strong>${maVariable}</strong>, exemple :</p>
        <p class="citation_console">
        const myName = `Antoine`;
        const salutation = `Bienvenue sur mon site ${myName}!`;
        console.log(salutation);   //retournera “Bienvenue sur mon site Antoine!” 
        </p>

        <h1 id="ancre_sur_les_objets_et_classes">Les objets et les classes</h1>
        <p>Les <span class="mise_en_valeur1">objets</span> JavaScript sont écrits en <span class="mise_en_valeur4">JSON</span> (<span class="mise_en_valeur1">J</span>avaScript <span class="mise_en_valeur1">O</span>bject <span class="mise_en_valeur1">N</span>otation).</p>
        <p class="mise_en_valeur4">Ce sont des séries de paires <span class="mise_en_valeur1">clés-valeurs</span> séparées par des virgules, entre des accolades.</p>
        <p>On pourrait déclarer chaque objet avec ses valeurs (une fiche sur une personne par exemple, avec son nom son prénom etc.. serait un objet), mais si les objets ont toujours les mêmes clés, on a pas fini (imaginons créer un objet par personne sur un forum, on déclarerait donc la paie clés-valeurs à chaque fois, pour chaque personne), heureusement on peut déclarer d'emblée une <span class="mise_en_valeur1">classe</span> <span class="mise_en_valeur4">qui définit le point commun (les clés) des objets</span>, et on peut ensuite y affecter facilement les valeurs.</p>
        <p>Pour chaque classe, on pourra donc faire des associations avec les valeurs ensuite (la fiche de telle ou telle personne), c'est ce qu'on appelle des <span class="mise_en_valeur1">instances</span> <span class="mise_en_valeur4">de la classe</span> (la fiche de Clémentine sera donc une instance de la classe Fiche).</p>

        <h2>Déclaration d'un objet</h2>
        <p>Les objets peuvent être enregistrés dans une variable, exemple :</p>
        <p class="citation_console">
        let myBook = {
        title: 'The Story of Lutins',
        author: 'Antoine et Clémentine',
        numberOfPages: 250,
        isAvailable: true
        };
        </p>
        <p class="mise_en_valeur4">Chaque clé est une chaîne (title, author, numberOfPages...), et les valeurs associées peuvent avoir tout type de données (nombre, chaîne, etc.).</p>
        <p>Construire des objets présente un avantage essentiel, cela permet de regrouper les attributs d'une chose unique à un même emplacement, que ce soit un livre, un profil d'utilisateur ou la configuration d'une application, par exemple.</p>

        <h2>Accéder aux données d'un objet</h2>
        <p class="mise_en_valeur4">Il est possible d'accéder aux données dans un objet avec la <span class="mise_en_valeur1">notation pointée</span> (dot notation).</p>
        <p>Pour cela, <span class="mise_en_valeur4">utiliser le nom de la variable qui contient l'objet, un point (<strong>.</strong>), puis le nom de la clé</span> dont on souhaite récupérer la valeur.</p>
        <p>Exemple :</p>
        <p class="citation_console">
        let myBook = {
        title: “The Story of Lutins”,
        author: “Antoine et Clémentine”,
        numberOfPages: 250,
        isAvailable: true
        };
        let bookTitle = myBook.title;  // "The Story of Lutins"
        let bookPages = myBook.numberOfPages  // 250
        </p>
        <p><span class="mise_en_valeur1">La notation bracket</span> (bracket notation) :<br /><br />
        <p>Pour accéder à un sous élément on peut utiliser les brackets avec la valeur du sous élément, par exemple :</p>
        <p class="citation_console">
        let myBook = {
        title: “The Story of Lutins”,
        author: “Antoine et Clémentine”,
        numberOfPages: 250,
        isAvailable: true
        };
        let bookTitle = myBook["title"];  // "The Story of Lutins"
        let bookPages = myBook["numberOfPages"];  // 250
        </p>
        <p>L'intérêt ici c'est qu'on va pouvoir mettre entre bracket une variable qui contient en string le nom de la propriété que l'on souhaite atteindre, par exemple :</p>
        <p class="citation_console">
        let myBook = {
        title: “The Story of Lutins”,
        author: “Antoine et Clémentine”,
        numberOfPages: 250,
        isAvailable: true
        };
        let propertyToAccess = "title";
        let bookTitle = myBook[propertyToAccess];  // "The Story of Lutins"
        </p>

        <h2>Déclaration d'une classe</h2>
        <p>La construction d'un objet à la main, par la notation à accolades vue précédemment, convient bien à des objets simples et uniques.<br />
        Mais on aura souvent besoin de beaucoup d'objets du même type (comme l'histoire des fiches de personnes comme expliqué précédemment), c'est là que les <span class="mise_en_valeur1">classes</span> sont utiles.</p>
        <p class="mise_en_valeur4">Une classe est un modèle pour un objet dans le code.</p>
        <p>Elle permet de construire plusieurs objets du même type (appelés <span class="mise_en_valeur1">instances de la même classe</span>) plus facilement, rapidement et en toute fiabilité.</p>
        <p>Pour créer une classe en JavaScript, <span class="mise_en_valeur4">utiliser le mot-clé <strong>class</strong>, suivi par un nom</span>.<br />
        <span class="mise_en_valeur4">Encadrer ensuite le code de la classe entre accolades</span>, exemple :</p>
        <p class="citation_console">
        class Book {
        }
        </p>
        <p>Pour cette classe, nous souhaitons que chaque Book ait un titre, un auteur et un nombre de pages.<br />
        Pour cela, on va utiliser ce qu'on appelle un <span class="mise_en_valeur1">constructor</span>.</p>
        <p class="mise_en_valeur4">Le constructor d'une classe est la fonction qui est appelée quand on crée une nouvelle instance de cette classe avec le mot-clé <strong>new</strong>.</p>
        <p class="citation_console">
        class Book {
        constructor(title, author, pages) {
        }
        }
        </p>
        <p>Il y a un ensemble d'instructions à suivre à l'intérieur du constructor pour créer une instance de la classe Book.<br />
        Pour attribuer le titre, l'auteur et le nombre de pages reçus à cette instance, <span class="mise_en_valeur4">utiliser le mot-clé <strong>this</strong> et la notation dot</span>, exemple :</p>
        <p class="citation_console">
        class Book {
        constructor(title, author, pages) {
        this.title = title;
        this.author = author;
        this.pages = pages;
        }
        }
        </p>
        <p>Ici, <span class="mise_en_valeur4">le mot-clé <strong>this</strong> fait référence à la nouvelle instance</span>, donc, <span class="mise_en_valeur4">il utilise la notation dot pour attribuer les valeurs reçues aux clés correspondantes</span>.</p>
        <p>Maintenant que la classe est terminée, on peut créer des instances par le mot-clé <strong>new</strong> :</p>
        <p class="citation_console">
        let myBook = new Book("L'Histoire des Lutins", "Antoine et Clémentine", 250);
        </p>
        <p>Cette ligne crée l'objet suivant :</p>
        <p class="citation_console">
        {
        title: "L'Histoire des Lutins",
        author: "Antoine et Clémentine",
        pages: 250
        }
        </p>
        <p>Avec cette classe Book , on peut créer facilement et rapidement de nouveaux objets Book .</p>

        <h1 id="ancre_sur_les_tableaux">Les tableaux</h1>
        <p>Imaginons que nous soyons responsable de la communication d'un théâtre.<br />
        Une de nos responsabilités est la gestion du premier rang, qui revient à s'assurer que les amis et connaissances des artistes, ainsi que d'autres VIP, aient la meilleure vision du spectacle.<br /><br />
        Si nous n'avions à gérer que deux invitations pour l'artiste principal, nous pourrions imaginer utiliser seulement deux variables avec les noms des invités, le code pourrait se présenter comme ceci :</p>
        <p class="citation_console">
        let firstFrontRowGuest;
        let secondFrontRowGuest;
        </p>
        <p>Ensuite, quand l'artiste nous donne l'information, nous pourrions nous contenter d'affecter un nom à chaque variable, par exemple  :</p>
        <p class="citation_console">
        firstFrontRowGuest = "Clémentine Degaine";
        secondFrontRowGuest = "Blandine Tardieu";
        </p>
        <p>Mais si le premier rang a 30 sièges ?<br />
        Ne serait-il pas plus facile d'utiliser une seule variable contenant toutes ces informations ?</p>
        <p>Il existe un type pour cela en JavaScript : <span class="mise_en_valeur1">Le tableau (array)</span>.</p>

        <h2>Créer un tableau et accéder aux éléments</h2>
        <p class="mise_en_valeur4">Pour créer un tableau vide et l'enregistrer dans une variable, utiliser une paire de crochets :</p>
        <p class="citation_console">
        let guests = [];
        </p>
        <p class="mise_en_valeur4">On peut aussi créer un tableau rempli en plaçant les éléments voulus à l'intérieur de ces crochets :</p>
        <p class="citation_console">
        let guests = ["Clémentine Degaine", "Blandine Tardieu", "Erell Quere"];
        </p>
        <p class="mise_en_valeur4">On peut ensuite accéder aux éléments de ce tableau par leur indice :</p>
        <p class="citation_console">
        let firstGuest = guests[0]; // "Clémentine Degaine"
        let thirdGuest = guests[2]; // "Erell Quere"
        let undefinedGuest = guests[12] // undefined
        </p>
        <p class="mise_en_valeur3">Ne pas oublier de commencer à l'indice 0 !</p>


        <p>Exemple d'un tableau associatif avec un tableau dedans :</p>
        <p class="citation_console">
        const personnage = {
            nom: "Degaine",
            prenom: "Clémentine",
            age: "24",
            adresse: {
                rue: "Le champs des fleurs",
                numero: "1",
                codePostal: "55999"
            }
        };
         </p>
        <p>Pour trouver le nom du personnage en utilisant le tableau personnage, on peut faire :</p>
        <ul>
            <li>personnage.nom</li>
            <li>personnage["nom"]</li>
            <li>ou encore, en utilisant les backticks (`ALTGR + 7`) : `${personnage.nom} ${personnage.prenom}`</li>
        </ul>
        <p>Pour aller dans le tableau du tableau et trouver la rue, c'est le même principe, il y a plusieurs écritures :<br />
        // Afficher dans la console la rue où habite le personnage.</p>
        <ul>
            <li>console.log(personnage.adresse.rue);</li>
            <li>console.log(personnage.adresse["rue"]);</li>
            <li>console.log(personnage["adresse"]["rue"]);</li>
        </ul>
        <p>Prenons maintenant deux tableaux :</p>
        <p class="citation_console">

        const personnage = {
            nom: "Degaine",
            prenom: "Clémentine",
            age: "24",
            adresse: {
                rue: "Le champs des fleurs",
                numero: "1",
                codePostal: "55999"
            }
        };

        const villes = {
            "55999": "Ville magique",
            "02000": "Laon",
            "03000": "Moulins",
            "04000": "Digne-les-Bains",
        };
        </p>
        <p>On va utiliser les deux tableaux "personnage" et "villes" pour afficher dans la console le nom de la ville où habite le personnage.</p>
        <p class="citation_console">
        // Solution 1 :
        const cpPersonnage = personnage.adresse.codePostal; // => 55999 => Number
        const villePersonnage = villes[cpPersonnage];    // => Ville magique
        
        // Solution 2 :
        const villePersonnage = villes[personnage.adresse.codePostal];

        // Affichage dans la console :
        console.log(villePersonnage);
        </p>


        <h2>Utiliser des valeurs plutôt que des références</h2>
        <p class="mise_en_valeur4">En JavaScript, les types primitifs tels que les nombres, les valeurs logiques et les chaînes sont passés par valeur.</p>
        <p>Ceci signifie que, quand on fait quelque chose comme :</p>
        <p class="citation_console">
        let numberOfGuests = 20;
        let totalNumberOfGuests = numberOfGuests; // 20
        </p>
        <p>... c'est la valeur 20 qui est copiée dans la nouvelle variable (<strong>totalNumberOfGuests</strong>), et aucun lien n'est maintenu entre les deux variables.</p>
        <p class="mise_en_valeur1">Ce n'est pas le cas avec les objets et tableaux, qui sont passés par référence.</p>
        <p>Si on y prend pas garde, cela peut conduire à des comportements inattendus, par exemple :</p>
        <p class="citation_console">
    let artistProfile = {
    name: "Clémentine Degaine",
    age: 27,
    available: true
    };
    let allProfiles = [artistProfile]; // nouveau tableau contenant l'objet ci-dessus
    artistProfile.available = false; // modification de l'objet
    console.log(allProfiles) // affiche { nom: "Clémentine Degaine", âge: 27, disponible: false }
        </p>
        <p>Bien que nous ayons créé le tableau et passé l'objet avant la modification de cet objet, on la voit dans le tableau.<br /><br />
        <span class="mise_en_valeur4">C'est parce que lorsqu'on utilise des tableaux et des objets, <span class="mise_en_valeur1">on passe des références aux objets plutôt que la valeur des données qu'ils contiennent</span>.</span></p>
        <p class="mise_en_valeur4">Les variables <strong>artistProfile</strong> et <strong>allProfiles</strong> présentées ci-dessus contiennent des références à l'objet et au tableau en mémoire.</p>

        <h2>Travailler sur les tableaux</h2>
        <p>Les tableaux sont très puissants et ont beaucoup d'attributs et de méthodes utiles, voici quelqu'uns d'entre eux :</p>
        <ul>
            <li><span class="mise_en_valeur1">Le comptage d'éléments</span><br /><br />
            La propriété <strong>length</strong> d'un tableau indique le nombre d'éléments qu'il contient :
            <p class="citation_console">
            let guests = ["Clémentine Degaine", "Blandine Tardieu", "Erell Quere"];
            let howManyGuests = guests.length; // 3
            </p>
            <span class="mise_en_valeur4">Utiliser la <span class="mise_en_valeur4">notation dot</span> pour accéder à la propriété <strong>length</strong> du tableau.</span>
            </li><br />
            <li><span class="mise_en_valeur1">L'ajout et la suppression d'éléments</span><br /><br />
                <ul>
                    <li>Pour <span class="mise_en_valeur4">ajouter un élément à la fin d'un tableau</span>, utiliser la méthode <strong>push</strong></span> :<br />
                    <p class="citation_console">
        guests.push("Antoine Giraud");
        // ajoute "Antoine Giraud" à la fin de notre tableau guests.
                    </p>
                    On peut en effet <span class="mise_en_valeur4">utiliser la notation dot pour accéder à la méthode <strong>push</strong> du tableau, et placer l'élément à ajouter entre parenthèses</span>.</li><br />
                    <li>Pour <span class="mise_en_valeur4">ajouter l'élément au début du tableau plutôt qu'à la fin</span>, utiliser la méthode <strong>unshift</strong> :<br />
                    <p class="citation_console">
        guests.unshift("Antoine Giraud");
        // "Antoine Giraud" est ajouté au début du tableau guests
                    </p>
                    </li><br />
                    <li>Pour <span class="mise_en_valeur4">supprimer le dernier élément d'un tableau</span>, appeler la méthode <strong>pop</strong>, <span class="mise_en_valeur4">sans passer aucun argument</span> :
                    <p class="citation_console">
        guests.pop();
        // supprime le dernier élément du tableau
                    </p>
                    </li>
                </ul>
            </li>
        </ul>
       
        <h1 id="ancre_sur_utilisation_javascript">Utilisation du JavaScript dans JSBIN, les pages Web et les serveurs</h1>
        <p>L'avantage du JavaScript, c'est que ce langage nous permet de programmer dans de nombreux environnements différents.</p>
        <p>Il faut cependant garder en tête que la façon d'exécuter le code est légèrement différente dans chaque environnement.<br />
        Nous allons ici explorer brièvement trois environnements différents : <span class="mise_en_valeur1">JSBin</span>, les <span class="mise_en_valeur1">pages web</span> et les <span class="mise_en_valeur1">serveurs</span>.</p>

        <ul>
            <li><span class="mise_en_valeur1">JSBIN</span><br />
            JSBin est un excellent outil pour tester des extraits de code en JavaScript.<br />
            Dans JSBin, on peut écrire du code ligne par ligne dans le volet JavaScript, et utiliser le bouton <span class="mise_en_valeur4">Run</span> pour l'exécuter.<br />
            JSBin parcourt alors nos lignes de code et les exécute l'une après l'autre; L'ordre est donc important.<br />
            Par exemple, ce morceau de code :
            <p class="citation_console">
            let numberOfGuests = 20;
            console.log(numberOfGuests); // 20
            </p>
            ...n'est pas identique à :
            <p class="citation_console">
            console.log(numberOfGuests); // undefined
            let numberOfGuests = 20;
            </p>
            </li><br />
            <li><span class="mise_en_valeur1">Écrire du code pour des pages Web</span><br />
            Un fichier HTML, un fichier CSS, un fichier JavaScript, et c'est parti !<br /><br />
            Exemple :
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/jsbin.png" title="JSBIN" alt="JSBIN" /></span></p>
            C'est plus ou moins de cette façon que JavaScript fonctionne sur le web.<br /><br />
            On écrit du code JavaScript, on l'enregistre dans un ou plusieurs fichiers, puis on importe ces fichiers par une balise spéciale dans le fichier HTML.<br />
            Le navigateur exécute ensuite automatiquement le code dans ces fichiers, en général dans l'ordre de leur importation.<br /><br />

            Plus précisément : On doit mettre le lien vers le fichier .js (exemple : &lt;script src="chemin/vers/monfichier.js"&gt;&lt;/script&gt;) dans le HTML à la fin du &lt;body&gt;, car sinon le navigateur s'arrête, et attend le chargement du fichier JS avant d'afficher la suite du document HTML, donc si on le met à la fin alors le HTML se charge entièrement et ensuite le JS est lu ce qui est plus performant.<br />
            De plus, si on le met avant le HTML alors le script se charge avant l'élément à manipuler, il faut donc lui donner d'abord l'élément à manipuler (HTML) puis ensuite lui donner les manipulations ordonnées par le JS.<br />

            On peut aussi, comme pour le PHP, mettre du code directement dans le HTML, cette fois-ci on utilisera la balise &lt;script&gt;&lt;/script&gt; mais que l'on mettra à la fin du code HTML (à la fin du &lt;body&gt;), mais comme dit précédemment, mieux vaut le mettre directement dans un fichier .js séparé et l'appelé ensuite dans le HTML (à la fin).<br />
            <br />
            <li><span class="mise_en_valeur1">Écrire du code pour des serveurs</span><br />
            Il fut un temps où JavaScript ne pouvait s'utiliser que dans des pages web (en avant-plan), mais ce n'est plus vrai; Il peut maintenant aussi s'utiliser en arrière-plan, pour gérer l'accès à certaines ressources.<br /><br />
            Prenons par exemple un service de messagerie mail.<br />
            Nous avons une page web qui nous permet d'accéder à nos messages, mais ils ne sont pas enregistrés dans cette page.<br />
            Ils sont enregistrés dans une base de données, et la page que nous utilisons accède à cette base de données à travers un serveur, qui peut être écrit en JavaScript.<br />
            Néanmoins, les serveurs doivent être actifs à tout moment, et seuls certains éléments de code doivent être exécutés à certains moments.<br />
            Par exemple, le code qui nous permet d'accéder à nos messages ne doit être exécuté que lorsque nous décidons d'ouvrir notre client de messagerie !<br />
            Dans ce cas, un environnement (tel que <span class="mise_en_valeur1">Node</span>), couplé à un code JavaScript particulier, fait que cela se produit.<br />
            Le serveur réagit à notre ouverture du client de messagerie, vérifie l'authentification et envoie nos messages.
            </li>
        </ul>
        
        <h1 id="ancre_sur_les_conditions">Les conditions</h1>
        <p>Le déroulement du programme est un terme général qui décrit l'ordre dans lequel s'exécutent les lignes de code.<br />
        Cela signifie que certaines lignes seront lues une seule fois, certaines plusieurs fois, et d'autres complètement ignorées, selon la situation.<br /><br />
        On va donc devoir s'intéresser aux <span class="mise_en_valeur1">instructions conditionnelles</span> (une instruction conditionnelle est une <span class="mise_en_valeur4">instruction qui vérifie si certaines conditions sont réunies</span>).</p>

        <h2>La condition if/else</h2>
        <p>En JavaScript, si on utilise des <span class="mise_en_valeur4">boolean</span> (bouléens, en français) simples pour les instructions <strong>if</strong> / <strong>else</strong>, la syntaxe se présente comme suit :</p>
        <p class="citation_console">
        if (myBoolean) {
        // réaction à la valeur vraie de myBoolean
        } else {
        // réaction à la valeur faux de myBoolean
        }
        </p>
        <p>Donc, pour vérifier si un utilisateur est connecté, on procède comme suit :</p>
        <p class="citation_console">
        let UserLoggedIn = true;
        if (UserLoggedIn) {
           console.log("Utilisateur connecté!");
        } else {
           console.log("Alerte, intrus!");
        }
        </p>
        <p>Dans le cas ci-dessus, on obtiendra l'impression sur la console de "Utilisateur connecté!", car le boolean <strong>userLoggedIn</strong> a la valeur <strong>true</strong>.</p>
        <p>S'il avait la valeur <strong>false</strong>, on obtiendrait à la place "Alerte, intrus!".</p>

        <h1 id="ancre_sur_les_expressions_et_operateurs_logiques">Les expressions et opérateurs logiques</h1>
        <p>Plutôt qu'une simple variable logique dans une condition <strong>if</strong> / <strong>else</strong>, on peut aussi utiliser des <span class="mise_en_valeur4">expressions de comparaison, qui comparent des valeurs entre elles</span>.</p>
        <p>Les expressions de comparaison nous permettent de comparer deux valeurs par les opérateurs suivants :</p>
        <ul>
            <li><strong><</strong> : <span class="mise_en_valeur4">Inférieur à</span></li>
            <li><strong><=</strong> : <span class="mise_en_valeur4">Inférieur ou égal à</span></li>
            <li><strong>==</strong> : <span class="mise_en_valeur4">Égal à</span></li>
            <li><strong>>=</strong> : <span class="mise_en_valeur4">Supérieur ou égal à</span> </li>
            <li><strong>></strong> : <span class="mise_en_valeur4">Supérieur à</span> </li>
            <li><strong>!=</strong> : <span class="mise_en_valeur4">Différent de</span></li>
        </ul>
        <p>Par exemple :</p>
        <p class="citation_console">
        const numberOfSeats = 30;
        const numberOfGuests = 25;
        if (numberOfGuests < numberOfSeats) {
        // autoriser plus d'invités
        } else {
        // ne pas autoriser de nouveaux invités
        }
        </p>
        <p>On peut aussi chaîner les instructions <strong>if</strong> / <strong>else</strong> pour réagir à des conditions potentielles multiples, exemple :</p>
        <p class="citation_console">
        if (numberOfGuests == numberOfSeats) {
        // tous les sièges sont occupés
        } else if (numberOfGuests < numberOfSeats) {
        // autoriser plus d'invités
        } else {
        // ne pas autoriser de nouveaux invités
        }
        </p>
        <p class="mise_en_valeur4">Le chaînage d'instructions permet de prévoir différents résultats en fonction des différentes situations.</p>

        <p>En JavaScript, toutes les égalités ne sont pas nées égales.</p>
        <p>Il y a deux façons de vérifier si deux valeurs sont égales en JavaScript (comme en PHP) :  <strong>==</strong> et <strong>===</strong>, aussi appelées <span class="mise_en_valeur1">égalité simple</span> et <span class="mise_en_valeur1">égalité stricte</span> :</p>
        <ul>
            <li><span class="mise_en_valeur4">L'<span class="mise_en_valeur1">égalité simple</span> vérifie la valeur, mais pas le type</span><br />
                Donc ceci renvoie la valeur <strong>true</strong> :
                <p class="citation_console">
                5 == "5"
                </p>
            </li>
            <li><span class="mise_en_valeur4">L'<span class="mise_en_valeur1">égalité stricte</span> vérifie à la fois la valeur et le type</span><br />
            Donc ceci renvoie <strong>false</strong>, car on compare un <span class="mise_en_valeur4">number</span> à un <span class="mise_en_valeur4">string</span> :
            <p class="citation_console">
            5 === "5"
            </p>
            </li>
        </ul>
        <p>De même, il y a deux <span class="mise_en_valeur1">opérateurs d'inégalité</span>, <strong>!=</strong> et <strong>!==</strong>, avec la même distinction.</p>
        <p>Dans certaines situations, on souhaite vérifier plusieurs conditions pour un même résultat, par exemple dans la même instruction <strong>if</strong>.</p>
        <p>Pour cela, il existe des <span class="mise_en_valeur1">opérateurs logiques</span> :</p>
        <ul>
            <li><strong>&&</strong> : <span class="mise_en_valeur1">ET logique</span>, pour vérifier <span class="mise_en_valeur4">si deux conditions sont toutes les deux vraies</span></li>
            <li><strong>||</strong> : <span class="mise_en_valeur1">OU logique</span>, pour vérifier <span class="mise_en_valeur4">si au moins une condition est vraie<</span></li>
            <li><strong>!</strong> : <span class="mise_en_valeur1">NON logique</span>, pour vérifier <span class="mise_en_valeur4">si une condition n'est pas vraie</span></li>
        </ul>
        <p>Exemple :</p>
        <p class="citation_console">
        let userLoggedIn = true;
        let UserHasPremiumAccount = true;
        let userHasMegaPremiumAccount = false;

        userLoggedIn && userHasPremiumAccount; // true
        userLoggedIn && userHasMegaPremiumAccount; // false

        userLoggedIn || userHasPremiumAccount; // true
        userLoggedIn || userHasMegaPremiumAccount; // true
        !userLoggedIn; // false
        !userHasMegaPremiumAccount; // true
        </p>
        <p>Bien sûr, ces opérateurs peuvent être mélangés et combinés en fonction de nos besoins précis.</p>

        <h2>Le scope des variables</h2>
        <p>En JavaScript, les variables créées par <strong>let</strong> ou <strong>const</strong> ne peuvent être vues ou utilisées qu'à l'intérieur du bloc de code dans lequel elles sont déclarées (lorsqu'elles sont déclarées dans un bloc).</p>
        <p class="mise_en_valeur2">On rencontrera certainement le mot-clé <strong>var</strong> pour la création de variables, les variables déclarées ainsi n'ont pas un scope de bloc mais un scope de fonction, donc elles n'ont pas tout à fait le même comportement (pour plus d'informations : https://www.geeksforgeeks.org/difference-between-var-and-let-in-javascript/)</p>
        <p>Un <span class="mise_en_valeur4">bloc de code</span>, aussi appelé <span class="mise_en_valeur4">bloc</span> tout court, <span class="mise_en_valeur4">est une section de code incluse entre accolades <strong>{}</strong></span>, comme les conditions ou les boucles.<br />
        Ce phénomène est appelé <span class="mise_en_valeur4">portée des variables</span> ou <span class="mise_en_valeur4">block scope</span> (en anglais), voici un exemple :</p>
        <p class="citation_console">
        let userLoggedIn = true;

        if (userLoggedIn) {
           let welcomeMessage = 'Welcome back!';
        } else {
           let welcomeMessage = 'Welcome new user!';
        }
        console.log(welcomeMessage); // renvoie une erreur
        </p>
        <p>Dans ce code, nous avons deux blocs de code issus de l'instruction <strong>if</strong> / <strong>else</strong>.<br /><br />
        Ces deux blocs déclarent une variable par <strong>let welcomeMessage</strong>, néanmoins, <span class="mise_en_valeur4">ces variables ne sont disponibles qu'à l'intérieur des blocs où elles sont déclarées</span>.<br />
        C'est pourquoi, quand on essaie d'afficher le contenu de <strong>welcomeMessage</strong> sur la console, on obtient une erreur, pour le code en dehors des blocs (aussi appelé <span class="mise_en_valeur4">portée extérieure</span> ou <span class="mise_en_valeur4">parente</span>), il n'y a pas de variable <strong> welcomeMessage</strong>.<br /><br />
        Pour cette situation, une méthode pourrait être de déclarer la variable dans la portée extérieure, puis de la modifier à l'intérieur des blocs <strong>if</strong> / <strong>else</strong>  :
        <p class="citation_console">
        let userLoggedIn = true;
        let welcomeMessage = ''; // déclarer la variable ici
        if (userLoggedIn) {
        welcomeMessage = 'Welcome back!'; // modifier la variable extérieure
        } else {
        welcomeMessage = 'Welcome new user!'; // modifier la variable extérieure
        }

        console.log(welcomeMessage); // imprime 'Welcome back!'
        </p>
        <p>Ici, du fait que la variable soit déclarée dans le scope parent, elle est disponible et accessible partout, et peut être modifiée correctement.</p>
        <p>Donc pour résumé, on a des variables :</p>
        <ul>
            <li>Avec une <strong>portée globale</strong>, déclarées en dehors de {} donc en dehors des boucles et des conditions</li>
            <li>Avec une <strong>portée de bloc</strong>, déclarées au sein d'un bloc donc entre {} c'est à dire boucles ou conditions</li>
            <li>Avec une <strong>portée de fonction</strong>, qui, elles, n'est pas déclarée avec <strong>const</strong> ou <strong>let</strong> mais avec <strong>var</strong>, cette dernière est déclarée au sein d'une fonction et ne peut être utilisée que dans la fonction où elle a été déclarée, elle n'est pas forcément à retenir, elle était surtout utilisée quand <strong>const</strong> ou <strong>let</strong> n'existaient pas..</li>
        </ul>
        
        <h2>La condition switch</h2>
        <p>Si on souhaite vérifier la valeur d'une variable par rapport à une liste de valeurs attendues, et réagir en conséquence, on utilisera l'instruction <strong>switch</strong>.</p>
        <p>Par exemple pour un affichage de message personnalisé en fonction du type de compte de chaque objet utilisateur, on aura le code suivant :</p>
        <p class="citation_console">
        let firstUser = {
        name: "Clémentine Degaine",
        age: 33,
        accountLevel: "normal"
        };
        let secondUser = {
        name: "Blandine Tardieu",
        age: 21,
        accountLevel: "premium"
        };
        let thirdUser = {
        name: "Antoine Giraud",
        age: 27,
        accountLevel: "mega-premium"
        };
        switch (firstUser.accountLevel) {
        case 'normal':
              console.log('You have a normal account!');

        break;
        case 'premium':
              console.log('You have a premium account!');
        break;
        case 'mega-premium':
              console.log('You have a mega premium account!');
        break;
        default:
              console.log('Unknown account type!');
        }
        </p>
        <p class="mise_en_valeur4">Après le code à exécuter dans chaque instruction <strong>case</strong>, il faut ajouter l'instruction <strong>break</strong>.<br />
        Si on ne le fait pas, JavaScript continuera l'exécution des cas suivants (en cascade) jusqu'à rencontrer une instruction <strong>break</strong> ou la fin de l'instruction <strong>switch</strong>.<br /><br />
        On peut aussi ajouter un cas <strong>default</strong> qui ne sera exécuté que si la variable que nous vérifions ne correspond à aucune des valeurs répertoriées.</p>
        <p>Le switch peut servir dans différents cas mais surtout rendre plus facile à lire l'enchaînement de condition <strong>if / else</strong>.</p>
        <p>Par exemple voici comment on aurait écrit l'exemple précédent avec des <strong>if / else</strong> :</p>
        <p class="citation_console">
        if (firstUser.accountLevel === 'normal' ) {
              console.log('You have a normal account!');
        } else if (firstUser.accountLevel === 'premium' ) {
              console.log('You have a premium account!');
        } else if (firstUser.accountLevel === 'mega-premium' ) {
              console.log('You have a mega premium account!');
        }  else {
              console.log('Unknown account type!');
        }
        </p>

        <h1 id="ancre_sur_les_boucles">Les boucles</h1>
        <p>En programmation, il y a des ensembles d'instructions à répéter plusieurs fois.</p>
        <p>Parfois, on va connaître à l'avance le nombre de répétitions, d'autres fois non.</p>
        <p>Il est aussi possible que le nombre de fois n'importe pas, et que l'on souhaite répéter le code jusqu'à atteindre une certaine condition.
        Pour tous ces cas, nous utiliserons des boucles.</p>

        <h2>La boucle for</h2>
        <p>Utiliser une boucle <strong>for</strong> pour savoir “combien de fois”.</p>
        <p>Supposons que nous ayons à faire embarquer 10 passagers, et que pour l'instant nous n'accordions pas d'importance à l'ordre de leur embarquement.</p>
        <p>Utilisons une boucle for pour les embarquer un par un jusqu'à atteindre 10 :</p>
        <p class="citation_console">
        const numberOfPassengers = 10;
        for (let i = 0; i < numberOfPassengers; i++) {
           console.log("Passager embarqué !");
        }
        console.log("Tous les passagers sont embarqués !");
        </p>
        <p><span class="mise_en_valeur4">Pour cette boucle <strong>for</strong>, nous créons une <span class="mise_en_valeur1">variable d'indice i</span> qui sert de compteur pour le nombre d'exécutions de la boucle.</span><br />
        C'est pour cette raison qu'elle démarrera à zéro, car on n'a pas encore parcouru la boucle.</p>
        <p><span class="mise_en_valeur4">La deuxième commande dans les parenthèses <strong>for</strong> est la <span class="mise_en_valeur1">condition de poursuite de la boucle</span>.</span><br />
        Dès qu'elle s'évalue comme <strong>false</strong>, on quitte la boucle, dans ce cas, on souhaite l'exécuter autant de fois qu'il y a de passagers, donc quand l'indice i atteint 10 (après 10 boucles), on souhaite l'arrêter, car il n'y a plus de passager.</p>
        <p><span class="mise_en_valeur4">La troisième commande demande à la boucle <strong>for</strong> d'<span class="mise_en_valeur1">incrémenter i (ajouter 1) à chaque exécution</span>; C'est ce qui permet de suivre le nombre d'exécutions de la boucle.</span><br />
        A chaque passage de la boucle, on aura le message "Passager embarqué !"”".</p>
        <p>Enfin, un fois que l'on sort de la boucle, on a le message "Tous les passagers sont embarqués !".</p>
        <p>Voici un schéma récapitulatif :</p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/boucle.png" title="Schéma d'une boucle" alt="Schéma d'une boucle" /></span></p>
        <p>En bref dans la boucle <strong>for</strong> on a : 
        <ol class="mise_en_valeur1">
            <li>Initilisation de la variable</li>
            <li>Condition</li>
            <li>Incrémentation</li>
        </ol>
        <p>Cette solution est pratique mais si on souhaite utiliser un tableau de passager pour les embarquer dans un ordre précis, on devra le parcourir.<br />
        <p>L'ancienne façon de paroucrir le tableau dans une boucle avec <strong>for</strong>, serait d'utiliser la propriété <strong>length</strong>.</p>
        <p>Exemple pour un tableau appelé passengers :</p>
        <p class="citation_console">
        for (let i = 0; i < passengers.length; i++) {
           console.log("Passager embarqué !");
        }
        </p>Bien que ceci fonctionne, il y a deux façons plus faciles de parcourir en boucle des tableaux (ou de faire une itération sur leurs éléments).</p>
        
        <h2>La boucle for... in</h2>
        <p>La boucle <strong>for... in</strong>  est très comparable à l'exemple de boucle <strong>for</strong> normale, mais elle est plus facile à lire, et effectue tout le travail d'itération pour nous :</p>
        <p class="citation_console">
        const passengers = [
        "Clémentine Degaine",
        "Blandine Tardieu'",
        "Antoine Giraud",
        "Cyril Coulon"
        ]
        for (let i in passengers) {
           console.log("Embarquement du passager " + passengers[i]);
        }
        </p>
        <p>Comme dans l'exemple précédent, <strong>i</strong> démarre automatiquement à zéro, et s'incrémente à chaque boucle.</p>
        <p>Nous imprimons donc <strong>passengers[0]</strong>, puis <strong>passengers[1]</strong>, puis <strong>passengers[2]</strong>, etc.., jusqu'à terminer l'itération sur tous les passagers.</p>
        <p>Nous pouvons bien sûr imprimer chaque élément sur la console, car chacun est une chaîne contenant le nom du passager.</p>

        <h2>La boucle for... of</h2>
        <p>Pour les cas où l'indice précis d'un élément n'est pas nécessaire pendant l'itération, on peut utiliser une boucle <strong>for... of</strong> :</p>
        <p>En reprenant l'exemple précédent et en utilisant à la place une boucle <strong>for... of</strong>  , on obtient :</p>
        <p class="citation_console">
        const passengers = [
        "Clémentine Degaine",
        "Blandine Tardieu'",
        "Antoine Giraud",
        "Cyril Coulon"
        ]
        for (let passenger of passengers) {
           console.log("Embarquement du passager " + passenger);
        }
        </p>
        <p>Ceci produit exactement le même résultat, mais de façon plus lisible, car on a pas à nous inquiéter des indices et des tableaux, on reçoit simplement chaque élément dans l'ordre.</p>
        <p>C'est encore plus utile si le tableau est un peu plus complexe et contient par exemple des objets :</p>
        <p class="citation_console">
        const passengers = [
        {
        name: "Clémentine Degaine",
        ticketNumber: 209542
        },
        {
        name: "Blandine Tardieu",
        ticketNumber: 169336
        },
        {
        name: "Antoine Giraud",
        ticketNumber: 779042
        },
        {
        name: "Cyril Coulon",
        ticketNumber: 703911
        }
        ]
        for (let passenger of passengers) {
           console.log('Embarquement du passager ' + passenger.name + ' avec le ticket numéro ' + passenger.ticketNumber);
        }
        </p>

        <p>En résumé :<p>
            <ul>
                <li><strong>for ... of</strong> : permet de cibler la value dans un array</li>
                <li><strong>for ... in</strong> : permet de cibler un index/clé dans un array</li>
            </ul>
        <p>Les deux fonctionnent aussi bien pour les array indexés et associatifs</p>


        
        <h2>La boucle while</h2>
        <p class="mise_en_valeur4">Une boucle <strong>while</strong> vérifie si une condition est vraie.<br />
        Si c'est le cas, la boucle se poursuit ; sinon elle s'arrête.</p>
        <p>En revenant à l'exemple de l'embarquement d'avion : Supposons que nous ayons des variables représentant le nombre de sièges restants et le nombre de passagers restants.</br />
        Nous souhaitons continuer l'embarquement jusqu'à l'épuisement du nombre de sièges ou de passagers :</p>
        <p class="citation_console"> 
        let seatsLeft = 10;
        let passengersStillToBoard = 8;
        let passengersBoarded = 0;
        while (seatsLeft &gt; 0 && passengersStillToBoard &lt; 0) {
        passengersBoarded++; // un passager embarque
        passengersStillToBoard--; // donc il y a un passager de moins à embarquer
        seatsLeft--; // et un siège de moins
        }
        console.log(passengersBoarded); // imprime 8, car il y a 8 passagers pour 10 sièges
        </p>
        Cette boucle <strong>while</strong> poursuit son exécution jusqu'à ce que l'un des nombres <strong>seatsLeft</strong> et <strong>passengersStillToBoard</strong> atteigne zéro, et à ce point elle se termine.</p>

        <h1 id="ancre_sur_les_erreurs">Les erreurs</h1>
        <p>On distingue souvent trois types d'erreurs dans les langages de programmation.</p>
        <ol>
            <li><span class="mise_en_valeur1">Les erreurs de syntaxes</span><br />
            Elles surviennent quand on fait une faute d'écriture dans notre code, que ce soit un oubli ou l'ajout d'un crochet ou d'une accolade, d'une faute d'orthographe sur un mot-clé, else ou switch par exemple.<br /><br />
            Heureusement les éditeurs de texte ou d'environnements de développement intégrés <span class="mise_en_valeur2">(<span class="mise_en_valeur4">IDE</span> : <span class="mise_en_valeur1">I</span>ntegrated <span class="mise_en_valeur1">D</span>evelopment <span class="mise_en_valeur1">E</span>nvironment, est un logiciel fournissant un ensemble d'outils aux développeurs, généralement spécifique à un langage, à une architecture ou à un domaine, comme Visual Studio Code)</span> mettent automatiquement en évidence les erreurs de syntaxe.</span></li><br />
            <li><span class="mise_en_valeur1">Les erreurs logiques</span><br />
            Elles surviennent quand on a fait des erreurs dans la logique de notre programme, comme l'affectation d'une valeur erronée à une variable, un mélange de conditions dans les instructions <strong>if</strong>, ou encore un ordre incorrect d'écriture des lignes ou des blocs de code.<br /><br />
            Avec ce genre d'erreur, notre programme pourra avoir un comportement inattendu dans le meilleur des cas, ou planter dans le pire des cas !<br />
            Les erreurs logiques sont plus difficiles à trouver et à corriger parce que le code n'est pas faux, il ne fait simplement pas ce que l'on souhaite qu'il fasse.</li><br />
            <li><span class="mise_en_valeur1">Les erreurs d'exécution</span><br />
            Elles tendent à survenir quand quelque chose d'inattendu se produit dans notre application.<br />
            Il s'agit souvent de quelque chose associé aux ressources extérieures (connexions réseau, appareils physiques, etc.) ou à une saisie/erreur humaine.<br /><br />
            Il y a des situations où nous savons par avance que ce type d'erreur est susceptible de survenir.
            Dans ces situations, nous pouvons prévoir du code de traitement d'erreur, de cette façon, une erreur ne fera pas planter notre programme, et pourra être corrigée.<br />
            Une façon de traiter les erreurs potentielles consiste à utiliser une instruction <strong>if / else</strong> pour vérifier la validité des données, exemple :
            <p class="citation_console">
            if (dataExists && dataIsValid) {
            // utiliser les données ici
            } else {
            // gérer l'erreur ici
            }
            </p>
            Nous pouvons aussi utiliser des blocs <strong>try / catch</strong> pour essayer (<strong>try</strong>) un code pouvant potentiellement renvoyer une erreur, et détecter (<strong>catch</strong>) les erreurs éventuelles survenues, exemple :
            <p class="citation_console">
            try {
            // code susceptible à l'erreur ici
            } catch (error) {
            // réaction aux erreurs ici
            }
            </p></li>
        </ol>

        <h1 id="ancre_sur_les_fonctions">Les fonctions</h1>
        <p class="mise_en_valeur4">Une fonction est un bloc de code auquel on attribue un nom.<br />
        Quand nous appelons cette fonction, nous exécutons le code qu'elle contient.</p>
        <p>Comme par exemple la fonction <strong>console.log</strong> qui contient du code permettant d'imprimer sur la console (afficher sur la console).</p>
        <p>Nous pouvons créer n'importe quelle fonction nous même, exemple :</p>
        <p class="citation_console">
        // On définit la fonction
        function afficherDeuxValeurs(valeur1, valeur2) {
              console.log('Première valeur:' + valeur1);
              console.log('Deuxième valeur:' + valeur2);
        }

        // On exécute la fonction
        afficherDeuxValeurs(12, 'Bonjour');
        // On obtient dans la console
        // > Première valeur:12 
        // > Deuxième valeur:Bonjour 
        </p>
        <p>Beaucoup de fonctions ont besoin de variables pour effectuer leur travail.</p>
        <p class="mise_en_valeur4">Quand on crée/déclare une fonction, on indique la liste des variables dont elle a besoin pour effectuer son travail : On définit les paramètres de la fonction.</p>
        <p class="mise_en_valeur4">Ensuite, à l'appel de la fonction, on lui attribue des valeurs pour ses paramètres.<br />
        Les valeurs sont les arguments d'appel.</p>
        <p class="mise_en_valeur4">Enfin, notre fonction peut nous donner un résultat : Une valeur de retour.</p>
        <p>Supposons que nous ayons une fonction qui compte le nombre de mots dans une chaîne :</p>
        <ul>
            <li>Le paramètre sera une chaîne dont nous allons compter les mots</li>
            <li>L'argument sera donc toute chaîne attribuée à notre fonction quand on l'appelle</li>
            <li>La valeur de retour sera le nombre de mots</li>
        </ul>

        <p>Contrairement au PHP, les variables listées avant la fonction sont utilisables dans la fonction (SI et seulement SI elles sont déclarées en dehors d'un bloc ou d'une fonction, c'est à dire en dehors des {}); Là où en PHP la fonction est hermétique et ne peut pas utiliser les variables situées en dehors de la fonction.</p>

        <h1 id="ancre_sur_les_instances_et_proprietes">Les instances et les propriétés</h1>
        <p>Petit rappel sur la notion de propriété de classe :</p>
        <p>C'est une variable interne à cette classe que l''on peut définir par défaut et faire évoluer au fur et à mesure de l'exécution de notre code.</p>
        <p>Il n'est pas rare d'utiliser le terme <span class="mise_en_valeur4">attribut</span> au lieu de <span class="mise_en_valeur4">propriété</span>, mais cela représente bien la même chose.</p>
        <p>Prenons l'exemple d'une classe qui représenterait un compte bancaire, et que l'on appellerait <strong>BankAccount</strong>.<br />
        On pourrait trouver comme propriétés <strong>owner</strong> (permettant d'identifier le propriétaire du compte) et <strong>balance</strong> (permettant de connaître le montant disponible sur le compte).<br />
        Ainsi, lorsque que l'on crée une instance de <strong>BankAccount</strong> avec un propriétaire et un montant initial en argument, on pourra exploiter par la suite ces propriétés pour afficher leurs valeurs, les utiliser pour des calculs, les modifier, etc.</p>
        <h2>Les méthodes d'instances</h2>
        <p>Nous avons précédemment vu que les classes étaient utilisées pour créer des objets ayant certaines propriétés.</p>
        <p>Maintenant que nous avons vu les fonctions, nous allons pouvoir ajouter des méthodes d'instance à ces classes pour augmenter leur puissance et leur utilité.</p>
        <p class="mise_en_valeur4">Une méthode d'instance est une fonction faisant partie d'une classe, et qui agit sur une instance de cette classe.</p>
        <p>Reprenons notre exemple de classe <strong>BankAccount</strong> (compte bancaire) :</p>
        <p class="citation_console">
        class BankAccount {
           constructor(owner, balance) {
              this.owner = owner;
              this.balance = balance;
           }
        }
        </p>
        <p>Nous pouvons ensuite créer une instance de cette classe appelée <strong>newAccount</strong> (nouveau compte) :</p>
        <p class="citation_console">
        const newAccount = new BankAccount("Clémentine Degaine", 50000);
        </p>
        <p class="mise_en_valeur4">N'oublions pas qu'un objet (une instance d'une classe est un objet) est un type par référence, donc on  peut toujours apporter des modifications à l'instance de <strong>newAccount</strong>, la partie constante désigne une référence à cette instance.</p>
        <p>Telle quelle, l'instance n'est pas très utile.</p>
        <p>Nous pourrions afficher son solde à la console par <strong>newAccount.balance</strong>, mais si on pensait plutôt à ajouter une mise en forme ? On peut pour cela ajouter une méthode à la classe.</p>
        <p class="citation_console">
        class BankAccount {
           constructor(owner, balance) {
              this.owner = owner;
              this.balance = balance;
           }
           showBalance() {
              console.log("Solde: " + this.balance + " EUR");
           }
        }
        </p>
        <p>La nouvelle méthode ci-dessus, déclarée par son nom suivi par (), <span class="mise_en_valeur4">utilise le mot-clé <strong>this</strong> pour accéder à la propriété balance de l'instance, et l'afficher sur la console avec une mise en forme supplémentaire.</span>
        <p>Ceci signifie que l'on peut utiliser la <span class="mise_en_valeur4">notation dot</span> sur l'instance <strong>newAccount</strong> pour appeler sa méthode <strong>showBalance()</strong> :</p>
        <p class="citation_console">
        const newAccount = new BankAccount("Clémentine Degaine", 50000);
        newAccount.showBalance(); // imprime "Solde: 50000 EUR" à la console
        </p>
        <p>On peut aussi ajouter des méthodes capables de <span class="mise_en_valeur4">modifier les propriétés de l'instance</span>.<br />
        Dans ce cas, ajouter les méthodes <strong>deposit()</strong> (dépôt) et <strong>withdraw()</strong> (retrait) à la classe, en n'oubliant pas que les deux ont besoin d'un paramètre <strong>amount</strong> (montant) (parce que nous devons savoir combien déposer ou retirer) :</p>
        <p class="citation_console">
        class BankAccount {
        constructor(owner, balance) {
        this.owner = owner;
        this.balance = balance;
        }

        showBalance() {
              console.log("Solde: " + this.balance + " EUR");
        }

        deposit(amount) {
              console.log("Dépôt de " + amount + " EUR");
        this.balance += amount;
        this.showBalance();
        }
        withdraw(amount) {
        if (amount > this.balance) {
                 console.log("Retrait refusé !");
        } else {
                 console.log("Retrait de " + amount + " EUR");
        this.balance -= amount;
        this.showBalance();
        }
        }
        }
        </p>
        <p>La méthode <strong>deposit()</strong> affiche le montant du dépôt sur la console, ajoute le montant au solde de l'instance, puis appelle la méthode <strong>showBalance()</strong> de l'instance, imprimant ainsi le nouveau solde sur la console.</p>

        <h2>Les méthodes statiques</h2>
        <p>Il existe un type spécial de méthode pouvant être ajoutée à une classe : <span class="mise_en_valeur4">La méthode statique</span>.</p>
        <p>Elle est différente des méthodes d'instance parce qu'elle n'est pas liée à une instance particulière d'une classe, mais à la classe elle-même.</p>
        <p>Utilisons-la pour créer des méthodes utilitaires (helper en anglais) où nous n'aurons pas besoin d'une instance d'une classe pour les utiliser.</p>
        <p>Nous pourrons nous en servir comme boîte à outils de fonctions que nous utiliserons souvent.<br /><br />
        Par exemple, en JavaScript, l'objet <strong>Math</strong> contient beaucoup de méthodes utiles :</p>
        <p class="citation_console">
        const randomNumber = Math.random(); // crée un nombre aléatoire sur l'intervalle [0, 1]

        const roundMeDown = Math.floor(495.966); // arrondit vers le bas à l'entier le plus proche, renvoie 495
        </p>
        <p>Nous n'avons pas besoin de créer par <strong>new</strong> une instance de l'objet <strong>Math</strong> pour utiliser ces méthodes, il suffit de les appeler sur l'objet <strong>Math global</strong>.</p>
        <p>Nous pouvons créer nos propres méthodes statiques par le mot-clé <strong>static</strong>.</p>
        <p>Observons la classe suivante :</p>
        class BePolite {

        static sayHello() {
              console.log("Hello!");
        }
        static sayHelloTo(name) {
              console.log("Hello " + name + "!");
        }
        static add(firstNumber, secondNumber) {
        return firstNumber + secondNumber;
        }
        }

        BePolite.sayHello(); // imprime "Hello!"
        BePolite.sayHelloTo("Lutine"); // imprime "Hello Lutine!"
        const sum = BePolite.add(2, 3); // sum = 5
        </p>
        <p>Nous n'avons pas besoin d'ajouter un  constructor  à notre classe, car nous n'allons pas l'instancier.</p>
        <p>Nous avons une méthode qui :</p>
        <ul>
            <li>Imprime un message générique</li>
            <li>Accepte un argument et l'utilise pour créer un message</li>
            <li>Renvoie une valeur à partir des arguments que nous lui envoyons</li>
        </ul>
        <p>Toutes ces fonctionnalités pourraient être des fonctions, mais l'avantage d'utiliser des méthodes de classe statiques est par exemple de pouvoir les regrouper par catégorie ou par type.</p>

        <h1 id="ancre_sur_proprete_code">Organisation du code et des fichiers, écologie avant tout</h1>
        <p>Ces notions sont importantes car elles permettent notamment de réduire l'<span class="gras">impact carbone</span>, et par conséquent, l'<span class="gras">impact écologique</span> !<p>
        <p>Aujourd'hui la plupart des développeurs ne font pas attention à cela car, autant avant il y avait un soucis de place/mémoire et les développeurs étaient donc obligés de prendre en considération ces méthodes pour que cela fonctionne en un minimum de place/ressources, autant avec la technologie de maintenant la place/les ressources sont beaucoup plus nombreuses et la question technique se pose moins.</p>
        <p>C'est donc une notion plutôt écologique aujourd'hui, ce qui a toute son importance quand on est sensible à l'écologie, et étant une technique peu utilisée par les développeurs, le faire permet de se différencier aussi parmis le grande monde du développement.</p>

        <h2>Décomposition</h2>
        <p>Par exemple, plutôt que d'avoir un fichier .js qui va gérer une newsletter et un slider (carrousel), on aura fichier newsletter.js et un fichier slider.js.</p>
        <p>Ainsi chaque fichier a son comportement dédié, son importance, cela est plus propre et plus lisible.</p>

        <h2>Factorisation : Module</h2>
        <p>On va organiser notre code dans des <strong>modules</strong>.</p>
        <p>Les modules permettent de ne pas répéter un code qui pourra être exécuté ailleurs; Par exemple une fonction vérifiant que l'adresse mail tapée dans un formulaire est bonne et ne contient pas un nom de domaine interdit, pourra être utilisée dans d'autres formulaires à d'autres endroits, ainsi en mettant cela dans un module on pourra rappeler le code ailleurs sans réécrire toutes ces lignes.</p>
        <p>Cela revient un peu à faire de l'<strong>include en php</strong>.<p>
        <p>Pour créer un module on va utiliser un <strong>objet</strong>.</p>
        <p>Un objet JavaSscript peut contenir des clés, auxquelles sont associées des valeurs; Ces valeurs peuvent être de n’importe quel type (number, string, etc.), y compris des function.<br />
        Ces fonctions peuvent alors être appelées, comme n’importe quelle autre fonction</p>.
        <p>Dans le module on aura donc une constante (ou une variable) qui contient les variables et les fonctions; L'appel des fonctions, lui, sera fait dans un autre fichier.</p>
        <p>En quelque sorte il s'agit d'un tableau associatif, on séparera donc les variables et les fonctions par une virgule.</p>
        <p>Pour newsletter.js on aura donc un code du genre :</p>
        <p class="citation_console">
        MODULE NEWSLETTER 
        const newsletter = {
        // variables, nommées aussi "propriétés" dans un module
        // fonctions, nommées aussi "méthodes" dans un module
        }
        </p>
        <p>De même pour le slider :</p>
        <p class="citation_console">
        MODULE SLIDER 
        const slider = {
        // variables
        // fonctions
        }
        </p>
        <p>On aura un fichier app.js qui servira pour l'appel des fonctions slider.init() et newsletter.init().</p>
        <p>Une fonction qui est présente dans un module s'appelle une <strong>méthode</strong>, un variable présente dans un module s'appelle une <strong>propriété</strong>.</p>
        
        <p>Par convention, on aura tendance à nommer le module "<strong>app</strong>", et à y inclure une méthode <strong>init()</strong> qui sert de "point d’entrée" dans le module.</p>
        <p><strong>init</strong> contient tous les traitements qui "lancent" l’application, par exemple initialiser les valeurs, les écouteurs d’évenements, lancer un timer, etc.</p>
        <p>Voici un exemple :</p>
        <p class="citation_console">
        let app = {
        init: function() {
            console.info('Initialisation');
            app.name = 'Ecoute';
            app.ecouterEvenements();
        },

        ecouterEvenements: function() {
            window.addEventListener('click', app.reagir);
        },

        reagir: function() {
            console.log(app.name + ' --> ' + 'un clic est survenu');
        }
        };

        // On lance l'application :
        app.init(); // dans l'objet "app", on exécute la fonction (méthode) stockée dans la clé "init"
        // Cette dernière va d'ailleurs lancer les autres méthodes à la suite puisque la première méthode
        // appelle la deuxième (ecouterEvenements) qui elle même appelle la troisième (reagir)
        </p>
        <p>On appelle la méthode qui déclenche toutes les autres <strong>app.init();</strong> puisque init() se trouve dans app, c'est la même appellation que dans un tableau associatif :)</p>

        <p>Pour résumer, un programme s’organise naturellement en thématiques (gérer un compte utilisateur, afficher des notifications à l’écran, réaliser un calcul de score dans un jeu, etc..), pour gagner en lisibilité, faciliter l’évolution du code et éviter les conflits de nommage, chaque thématique peut être isolée des autres grâce à un module.</p>

        
        <h2>Propreté du code</h2>
        <p>La propreté du code est importante, que ce soit une fonction trop longue qui pourrait être fractionnée en plusieurs petites fonctions qui seront appelées dans une autre fonction, que ce soit l'indentation ou la factorisation du code lorsque c'est possible, ou les commentaires, il y a différentes techniques permettant de rendre le code plus lisible pour soi et pour les autres.</p>

        <h2>Factorisation</h2>
        <p>Si on se retrouve à écrire plusieurs fois le même code, on devrait probablement le refactoriser dans une fonction, exemple :</p>
        <p class="citation_console">
        if (firstUser.online) {
        if (firstUser.accountType === "normal") {
            console.log("Hello " + firstUser.name + "!");
        } else {
           console.log("Welcome back premium user " + firstUser.name + "!");
        }

        }
        if (secondUser.online) {
        if (secondUser.accountType === "normal") {
            console.log("Hello " + secondUser.name + "!");
        } else {
           console.log("Welcome back premium user " + secondUser.name + "!");
        }
        }

        if (thirdUser.online) {
        if (thirdUser.accountType === "normal") {
            console.log("Hello " + thirdUser.name + "!");
        } else {
           console.log("Welcome back premium user " + thirdUser.name + "!");
        }
        }
        </p>
        <p>Ici nous répétons la même tâche plusieurs fois, pour des utilisateurs différents, une bonne occasion de factoriser le code dans une fonction :</p>
        <p class="citation_console">
        const sendWelcomeMessageToUser = (user) => {
        if (user.online) {
        if (user.accountType === "normal") {
               console.log("Hello " + user.name + "!");
        } else {
              console.log("Welcome back premium user " + user.name + "!");
        }
        }
        }

        sendWelcomeMessageToUser(firstUser);
        sendWelcomeMessageToUser(secondUser);
        sendWelcomeMessageToUser(thirdUser);
        </p>
        <p>Nous avons créé une fonction <strong>sendWelcomeMessageToUser</strong> (un nom qui exprime clairement ce que fait la fonction) et l'avons appelée pour chaque utilisateur.<br />
        Dans ce cas, nous avons réduit la quantité de code de 23 lignes à 13, tout en le rendant plus lisible.<br />
        Grâce à un nom de fonction descriptif, nous pouvons indiquer que nous envoyons un message de bienvenue à trois utilisateurs.</p>

        <p>Avec des fonctions qui ne font qu'une seule chose (et dont le nom décrit ce qu'elles font), nous pouvons rendre notre code bien plus propre et plus facile à comprendre, voyons la fonction suivante :</p>
        <p class="citation_console" >
        const printStringStats = (stringToTest) => {
         const wordArray = stringToTest.split(" ");
         const wordCount = wordArray.length;
         let letterCount = 0;
         for (let word of wordArray) {
        word.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g, "");
        letterCount += word.length;
        }
         const averageWordLength = parseFloat((letterCount / wordCount).toFixed(2));
         const stringStats = {
        wordCount: wordCount,
        letterCount: letterCount,
        averageWordLength: averageWordLength
        };
         console.log(stringStats);
        }
        </p>
        Bien qu'il y ait un nom descriptif, et que nous puissions voir qu'il s'agit d'imprimer le nombre de mots, le nombre de lettres et la longueur moyenne des mots d'une chaîne, il se passe tellement de choses qu'il est difficile de suivre si on ne comprend pas chaque ligne.<br />
        Cette fonction fait trop de choses d'un coup.<br /><br />
        Voyons maintenant cette refactorisation :</p>
        <p class="citation_console">
        const getWordCount = (stringToTest) => {
         const wordArray = stringToTest.split(" ");
        return wordArray.length;
        }
        const getLetterCount = (stringToTest) => {
         const wordArray = stringToTest.split(" ");
         let totalLetters = 0;
         for (let word of wordArray) {
        word.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g, "");
        totalLetters += word.length;
        }
        return totalLetters;
        }

        const getAverageWordLength = (stringToTest) => {
        return parseFloat((getLetterCount(stringToTest) / getWordCount(stringToTest)).toFixed(2));
        }
        const printStringStats = (stringToTest) => {
         console.log({
        wordCount: getWordCount(stringToTest),
        letterCount: getLetterCount(stringToTest),
        averageWordLength: getAverageWordLength(stringToTest)
        })
        }
        </p>
        <p>Bien que cette version soit plus longue, il y a trois fonctions <strong>getWordCount</strong> (qui renvoie le nombre de mots), <strong>getLetterCount</strong> (qui renvoie le nombre de lettres) et <strong>getAverageWordLength</strong> (qui renvoie la longueur moyenne des mots), appelées par la fonction <strong>printStringStats</strong> (qui imprime les statistiques de la chaîne de caractères).</p>
        <p>Nous pouvons ne pas comprendre la complexité de chaque fonction, mais nous pouvons bien comprendre ce qui se passe parce qu'elles ne font qu'une seule chose, mentionnée dans leur nom.<br /><br />
        On pourrait utiliser les fonctions individuelles sans avoir besoin de savoir ce qui se passe sous le capot.</p>

        <h2 id="ancre_sur_commentaires">Les commentaires</h2>
        <p>Il y a deux types de commentaires, sur une seule ligne et sur plusieurs lignes, et chacun a sa place.</p>
        <p>Ajoutons des commentaires à notre exemple précédent :</p>
        <p class="citation_console">
        const getWordCount = (stringToTest) => {
         const wordArray = stringToTest.split(' ');
        return wordArray.length;
        }
        const getLetterCount = (stringToTest) => {
         const wordArray = stringToTest.split(' ');
         let totalLetters = 0;
         for (let word of wordArray) {

        // retire la ponctuation pour ne compter que les lettres
        word.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g, "");
        totalLetters += word.length;
        }
        return totalLetters;
        }
        /*
        ** renvoie la longueur moyenne des mots
        ** arrondie à deux chiffres après la virgule
        */
        const getAverageWordLength = (stringToTest) => {
        return parseFloat((getLetterCount(stringToTest) / getWordCount(stringToTest)).toFixed(2));
        }
        const printStringStats = (stringToTest) => {
         console.log({
        wordCount: getWordCount(stringToTest),
        letterCount: getLetterCount(stringToTest),
        averageWordLength: getAverageWordLength(stringToTest)
        })
        }
        </p>
        <p>Le commentaire sur une seule ligne explique la raison de l'appel, d'apparence complexe, à la fonction <strong>replace</strong>.</p>
        <p>Le commentaire sur plusieurs lignes explique que la longueur moyenne du mot sera renvoyée à 2 décimales près, car ce n'est pas immédiatement apparent.</p>

        <h2>Les conventions de nommage</h2>
        <ul>
            <li>Comme nous l'avons vu jusqu'à présent, les noms de variable et de fonction dans JavaScript sont généralement écrits en <span class="mise_en_valeur4">"camel case" minuscule</span> (<strong>getWordCount</strong>, <strong>numberOfCats</strong>), alors que les noms de classe sont écrits en <span class="mise_en_valeur4">"camel case" majuscule</span> (<strong>PremiumAccount</strong>, <strong>SpecialGuest</strong>).<br /><br />
            On est pas obligé d'utiliser cette convention, néanmoins, elle facilite la lecture de notre code car elle est respectée par la grande majorité des développeurs.</li>
            <li>Des noms clairs et descriptifs pour les variables et les fonctions sont plus faciles à lire que des noms raccourcis, obscurs ou aléatoires.<br /><br />
            Choisir nos noms avec attention, et notre code sera clair et facile à lire (et nous n'aurons plus à écrire autant de commentaires !).</li>
        </ul>

        <h2>L'indentation</h2>
        <p>Tabulations ou espaces ? Deux espaces ou quatre ? Quel que soit notre choix, garder le même style partout.</p>
        <p>Le positionnement des acolades est également important, il faut rester dans la même cohérence dans le code.</p>

        <h1 id="ancre_sur_les_tests">Les tests</h1>
        <p>Il y a trois types essentiels de tests :</p>
        <ul>
            <li><span class="mise_en_valeur1">Les tests unitaires</span><br />
            Il vérifie des unités individuelles (des fonctions uniques ou des classes) en leur fournissant une entrée et en s'assurant qu'elles donnent la sortie attendue.<br />
            En général, chaque unité est testée sur un cas simple, puis sur un ou plusieurs cas limites, exemple :
            <p class="citation_console">
             const getWordCount = (stringToTest) => {
             const wordArray = stringToTest.split(' ');
            return wordArray.length;
            }
            const getLetterCount = (stringToTest) => {
             const wordArray = stringToTest.split(' ');
             let totalLetters = 0;
             for (let word of wordArray) {
            word.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g, "");
            totalLetters += word.length;
            }
            return totalLetters;
            }
            </p><br />
            Ici on pourrait tester :<br /><br />
            <ol>
                <li><strong>getWordCount</strong> : En vérifiant une chaîne dont on connaît le nombre de mots (cas simple), puis peut-être une chaîne vide, et une chaîne qui ne contiendrait que des espaces (cas limite).</li>
                <li><strong>getLetterCount</strong> : On pourrait vérifier une chaîne dont on connaît le nombre de lettres (cas simple), puis essayer une chaîne ne contenant que des signes de ponctuation (cas limite).</li>
            </ol><br />
            On pourrait donc écrire ces tests comme code accessoire :
            <p class="citation_console">
            const testSimpleWordCount = () => {
               const testString = 'I have four words!';
            if (getWordCount(testString) !== 4) {
                  console.error('Simple getWordCount failed!');
            }
            }

            const testEdgeWordCount = () => {
               const testString = '             ';
            if (getWordCount(testString) !== 0) {
                  console.error('Edge getWordCount failed!');
            }
            }

            const testSimpleLetterCount = () => {
               const testString = 'I have twenty one letters!';
            if (getLetterCount(testString) !== 21) {
                  console.error('Simple getLetterCount failed!');
            }
            }

            const testEdgeLetterCount = () => {
               const testString = '")(&;//!!';
            if (getLetterCount(testString) !== 0) {
                  console.error('Edge getLetterCount failed!');
            }
            }
            </p>
            Ce sont des tests simples, et ils peuvent convenir pour des vérifications rapides, mais il est généralement préférable d'utiliser une architecture de test.<br /><br />
            Les architectures et bibliothèques de test permettent d'écrire automatiquement des suites de tests complètes de notre code, à l'aide de fonctions et de syntaxe spécifiques.<br />
            Voici à quoi pourraient ressembler les deux tests ci-dessus dans certaines architectures :
            <p class="citation_console">
            describe('getWordCount()', function() {
               it('should find four words', function() {
            expect(getWordCount('I have four words!').to.equal(4));
            });

               it('should find no words', function() {
            expect(getWordCount('      ').to.equal(0));
            });
            });
            </p>
            Les tests unitaires constituent généralement entre 60 et 80 % de l'ensemble des tests des projets JavaScript; Mais il existe d'autres tests, comme les tests d'intégration.
            </li><br />
            <li><span class="mise_en_valeur1">Les tests d'intégration</span><br />
            Les tests d'intégration vérifient les multiples fonctions ou classes pour s'assurer qu'elles travaillent ensemble comme elles sont censées le faire.<br /><br />
            En effet séparément elles peuvent fonctionner, mais ensemble elles pourraient ne pas fonctionner.</li><br />
            <li><span class="mise_en_valeur1">Les tests fonctionnels</span><br />
            Les tests fonctionnels, aussi appelés de bout en bout (E2E), vérifient des scénarios complets en contexte.<br /><br />
            Par exemple, un utilisateur se connecte à notre application, ouvre ses notifications et les marque toutes comme lues.<br />
            Ces tests vérifient aussi les ressources externes que notre projet peut utiliser, par exemple un système de paiement tiers.</li>
        </ul>
        <p>Il existe différents frameworks dédiés aux tests unitaires et fonctionnels pour les applications JavaScript frontend et/ou backend.</p>
        <p>On retrouve souvent les frameworks Jasmine, mocha.js, Mocha, etc.</p>

        <h1 id="ancre_sur_debogage">Déboguer notre fonction</h1>
        <p>Quand quelque chose ne va pas dans notre projet, il peut être difficile de savoir ce qui s'est passé.</p>
        <p>Voici quelques techniques pour nous aider à remettre les choses d'aplomb.</p>

        <h2>Afficher la console</h2>
        <p>Exemple de version défectueuse :</p>
        <p class="citation_console">
        const getWordCount = (stringToTest) => {
        const wordArray = stringToTest.split('');
        return wordArray.length;
        }
        </p>
        <p>Pour une raison quelconque, cette fonction renvoie des valeurs curieuses; Utilisons un affichage de console pour voir ce qui se passe :</p>
        <p class="citation_console">
        const getWordCount = (stringToTest) => {
         const wordArray = stringToTest.split('');
         console.log("Word array in getWordCount: ");
         console.log(wordArray);
        return wordArray.length;
        }
        </p>
        <p>Maintenant voyons ce qui se passe à l'appel suivant, sur la console :</p>
        <p class="citation_console">
        getWordCount('I am a fish');
        /* la console montre :
        "Word array in getWordCount:"
        ["I", " ", "a", "m", " ", "a", " ", "f", "i", "s", "h"]
        */
        </p>
        <p>Plutôt que de répartir la chaîne en mots, elle la répartit en lettres !</p>
        <p>Une observation plus attentive de la fonction montre une erreur à l'appel de <strong>split</strong> : Ce devrait être <strong>stringToTest.split(' ')</strong>, et non pas   <strong>stringToTest.split('')</strong>.</p>

        <h2>Utiliser des outils pour développeur</h2>
        <p>Pour écrire du JavaScript pour des sites web, on peut utiliser les outils pour développeur intégrés dans les quatre navigateurs essentiels : Chrome, Firefox, Safari et Edge.</p>
        <p>Chaque navigateur contient un système qui nous permet d'ajouter des <span class="mise_en_valeur4">points d'arrêt pas-à-pas (breakpoints)</span> à notre code.<br />
        Quand le navigateur arrive sur un point d'arrêt de notre code, il met l'exécution en pause, ce qui nous permet de parcourir l'exécution ligne après ligne, en vérifiant les valeurs des variables à chaque étape.</p>
        <p>Nous pouvons même ignorer certains morceaux de code si nous souhaitons voir comment notre appli y réagit.</p>
        <p>La plupart des environnements de développement intégrés comportent aussi un débogueur, qui nous permet de tout déboguer dans notre espace de travail.</p>
        <p>Cela peut être pratique, en particulier si notre code ne doit pas s'exécuter sur une page web et ne peut pas être vérifié dans le navigateur.<br />
        Un environnement de développement intégré les plus courants est <span class="mise_en_valeur4">Visual Studio Code</span> (gratuit).</p>

        <h2>La récursivité</h2>
        <p class="mise_en_valeur4">Une fonction récursive est une fonction qui s'appelle elle-même d'une façon ou d'une autre.</p>
        <p>Exemple : Nous souhaitons chercher un élément dans un array trié pour savoir s'il s'y trouve.</p>
        <p>Une approche basique serait la suivante :</p>
        <p class="citation_console">
        const findElement = (array, thingToFind) => {
           for (let element of array) {
        if (element === thingToFind) {
        return true;
        }
        }

        return false;
        }
        </p>
        <p>On avance, élément par élément, dans le tableau.<br /><br />
        Si on trouve un élément qui correspond à ce que l'on recherche, la fonction renvoie <strong>true</strong>.<br />
        Si on arrive à la fin du tableau sans l'avoir trouvé, on passe à la ligne suivante et la fonction renvoie <strong>false</strong>.</br />
        C'est plutôt clair comme approche, mais c'est lent !</p>
        <p>Le temps pris pour chaque recherche se prolonge de manière linéaire avec des listes plus longues !</p>
        <p>Imaginons une autre approche :</p>
        <p class="citation_console">
        const binarySearch = (array, thingToFind, start, end) => {
        }
        </p>
        <p>On sait que le tableau est trié, donc on peut savoir, pour un élément donné, si ce que l'on recherche risque de se trouver plus haut ou plus bas dans la liste.<br />
        Par exemple, si on recherche le nombre 42 et que l'on tombe sur 32, on sait qu'il faudra chercher plus bas.</p>
        <p>Du coup, commençons par analyser l'élément médian de la liste.<br />
        On peut faire la somme de l'index de début et de l'index de fin, et diviser par deux pour trouver cet élément (arrondissons vers le bas pour nous assurer de trouver un nombre entier :</p>
        <p class="citation_console" 
        const binarySearch = (array, thingToFind, start, end) => {
           let mid = Math.floor((start + end) / 2);
        }
        </p>
        <p>Mais pourquoi utiliser les index de début et de fin plutôt que la propriété <strong>length</strong> du tableau ?</p>
        <p>Utiliser les index nous permettra de réutiliser le même code sur des sélections de plus en plus petites du tableau.<§
        <p>Maintenant que l'on a l'élément médian du tableau, vérifions si, par chance, on est tombé juste.</p>
        <p class="citation_console">
        const binarySearch = (array, thingToFind, start, end) => {
           let mid = Math.floor((start + end) / 2);
        if (array[mid] === thingToFind) {
        return true;
        }
        }
        </p>
        <p>La fonction retournera <strong>true</strong> si on a trouvé l'élément.<br />
        Si on a pas eu de chance, ce n'est pas grave, puisque le tableau est trié, on sait dans quelle moitié du tableau chercher !</p>
        <p>Du coup, on a juste à exécuter exactement la même fonction sur la partie en question !</p>
        <p>Il suffit de modifier soit l'index de fin (pour chercher dans la première moitié) soit l'index de début (pour chercher dans la deuxième moitié) :</p>
        <p class="citation_console">
        const binarySearch = (array, thingToFind, start, end) => {
           let mid = Math.floor((start + end) / 2);
        if (array[mid] === thingToFind) {
        return true;
        }

        if (thingToFind < array[mid]) {
        // il faut rechercher dans la première moitié
        return binarySearch(array, thingToFind, start, mid - 1); // on utilise (mid - 1) car on sait que l'on n'a pas besoin de l'élément mid, il a déjà été vérifié !

        } else {

        // il faut rechercher dans la deuxième moitié
        return binarySearch(array, thingToFind, mid + 1, end);
        }
        }
        </p>
        <p>La fonction continuera à s'appeler elle-même jusqu'à trouver ce que l'on recherche.</p>
        <p>Mais il manque quelque chose : Qu'est-ce qui se passe si ce que l'on recherche n'existe pas dans le tableau ?<br />
        Il faut ce que l'on appelle un <span class="mise_en_valeur4">cas de base</span>, ou <span class="mise_en_valeur4">base case</span>, pour dire à la fonction de s'arrêter.</p>

        <p>On saura que l'algorithme est arrivé au bout si on a essayé de l'appeler avec un index de début qui est supérieur à l'index de fin.<br />
        Pourquoi ? Eh bien parce que peu à peu, on divise le tableau, encore et encore, jusqu'à tomber sur une sélection d'un seul élément : on aura donc <strong>start = mid = end</strong>.</p>
        <p>Du coup, quand la fonction se rappellera encore, elle utilisera soit <strong>start = mid + 1</strong>, soit <strong>end = mid - 1</strong>, selon notre recherche.<br /><br />
        On aura donc <strong>start > end</strong>, et la fonction peut retourner <strong>false</strong>, car on sait qu'elle est arrivée au bout sans trouver ce que l'on recherche.</p>
        <p>On met donc ce base case au début de la fonction pour vérifier s'il s'agit du dernier appel :</p>
        <p class="citation_console" 
        const binarySearch = (array, thingToFind, start, end) => {
        if (start > end) {
        return false;
        }

           let mid = Math.floor((start + end) / 2);
        if (array[mid] === thingToFind) {
        return true;
        }
        if (thingToFind < array[mid]) {
        return binarySearch(array, thingToFind, start, mid - 1);
        } else {
        return binarySearch(array, thingToFind, mid + 1, end);
        }
        }
        </p>
        <p>Et voilà ! Une fonction récursive, qui s'appelle elle-même, qui effectue une recherche d'élément dans un tableau trié, et qui renvoie <strong>true</strong> si l'élément s'y trouve, ou   <strong>false</strong> s'il ne s'y trouve pas (grâce au base case) !</p>
        <p>ATTENTION ! Sans base case (ou avec un base case incorrect), nos fonctions récursives peuvent causer des infinite loops et des stack overflows, car elles vont continuer à s'appeler à l'infini, donc faire bien attention !</p>

        <h1 id="ancre_sur_javascript_pour_le_web">Le JavaScript pour le Web</h1>
        Grâce au JavaScript on va pourvoir amener un bon côté dynamique au site !
        
        <h1 id="ancre_sur_le_dom">Le DOM</h1>
        <p>Le <span class="mise_en_valeur4">DOM</span>, (<span class="mise_en_valeur1">D</span>ocument <span class="mise_en_valeur1">O</span>bject <span class="mise_en_valeur1">M</span>odel, c'est-à-dire "modèle d'objet de document", en français), <span class="mise_en_valeur4">est une interface de programmation qui est une représentation du HTML d'une page web et qui permet d'accéder aux éléments de cette page web et de les modifier avec le langage JavaScript</span>.</p>
        <p>Il faut voir le DOM comme un arbre où chaque élément peut avoir zéro ou plusieurs enfants, qui peuvent avoir eux-mêmes zéro ou plusieurs enfants, qui peuvent avoir zéro ou plusieurs...</p>
        <p>Dans le DOM, on commence toujours par un élément racine qui est le point de départ du document : la balise &lt;html&gt;.<br />
        Celle-ci a pour enfants les balises  &lt;head&gt;  et  &lt;body&gt; qui ont donc un parent commun : la balise  &lt;html&gt;.<br />
        On trouvera ensuite le contenu de notre page dans la balise  &lt;body&gt; sous forme de liens, boutons, blocs, etc..</p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/dom.png" title="DOM" alt="DOM" /></span></p>
        <p class="mise_en_valeur2">En d'autres termes le Document Object Model (DOM) est une interface de programmation (API) pour les documents HTML et XML; Il représente le document sous la forme d’un arbre de <strong>nodes</strong>, où chaque node représente une partie du document, comme un élément HTML, du texte, des attributs, etc.</p>
        <p>Concrètement, à quoi va nous servir le DOM ?</br />
        Avec une interface de programmation nous permettant de parcourir le DOM, nous allons pouvoir interagir avec lui; Ces interactions comprennent :</p>
        <ul>
            <li>La modification du contenu d'un élément précis</li>
            <li>La modification du style d'un élément</li>
            <li>La création ou la suppression d'élément</li>
            <li>L’intéraction avec les utilisateurs, afin de repérer des clics sur un élément ou encore de récupérer leur nom dans un formulaire</li>
            <li>Etc ..</li>
        </ul>

        <h1 id="ancre_sur_l'acces_au_dom">Accéder aux éléments du DOM</h1>
        
        <h2>Le document</h2>
        <p>Tout commence avec le document.</p>
        <p>Cet objet, auquel nous avons directement accès dans notre code JavaScript, est le <span class="mise_en_valeur4">point de départ du DOM, il représente notre page (notre document) entière</span>.</p>
        <p>C'est donc lui qui contient les fonctions dont nous aurons besoin pour retrouver les éléments que nous cherchons.</p>
        <p>Ainsi si on veut accéder à n'importe quel élément d'une page HTML, on commencera toujours par accéder à l'objet <strong>document</strong>. </p>

        <p>Voici les principales fonctions de recherche d’éléments du DOM :</p>
        <ul>
            <li><strong>document.getElementById()</strong><br /><br />
            C'est sûrement la méthode la plus utilisée pour retrouver un élément, car c'est aussi la seule qui nous permette de retrouver facilement un élément précis.<br />
            Comme son nom l'indique, <span class="mise_en_valeur4">elle va rechercher un élément grâce à son <strong>id</strong>.</span><br />
            Pour rappel il ne doit y avoir qu'un seul élément avec un <strong>id</strong> donné, cette méthode est donc une candidate parfaite pour retrouver un élément particulier.<br /><br />
            <strong>getElementById(&lt;id&gt;)</strong> <span class="mise_en_valeur4">prend en paramètre l'<strong>id </strong> de l'élément que nous recherchons</span> et nous retournera cet élément s'il a été trouvé.<br />
            Par exemple, si l'on part du code HTML suivant :  
            <p class="citation_code_balise">&lt;p id="my-anchor"&gt;My content&lt;/p&gt;</p>
            .. on pourra trouver cet élément avec le code JavaScript suivant :
            <p class="citation_console">const myAnchor = document.getElementById('my-anchor');</p>
            </li>
            <li><strong>document.getElementsByClassName()</strong><br /><br />
            Cette méthode fonctionne de la même manière que la précédente, mais fera sa <span class="mise_en_valeur4">recherche sur la <strong>class</strong> des éléments et retournera la liste des éléments qui correspondent sous forme d'un tableau</span>.<br /><br />
            <strong>getElementsByClassName(&lt;classe&gt;)</strong> <span class="mise_en_valeur4">prend donc en paramètre la classe des éléments à rechercher</span> et vous retournera une liste d'éléments correspondants.<br /><br />
            Par exemple, si l'on part du code HTML suivant :
            <p class="citation_code_balise">
            &lt;div&gt;
                &lt;div class="content"&gt;Contenu 1&lt;/div&gt;
                &lt;div class="content"&gt;Contenu 2&gt;/div&gt;
                &lt;div class="content"&gt;Contenu 3&lt;/div&gt;
            &lt;/div&gt;
            </p>
            .. on pourra retrouver la liste des éléments ayant la classe content avec le code JavaScript suivant :
            <p class="citation_console">
            const contents = document.getElementsByClassName('content');
            // Pour ressortir le premier élément du tableau, donc le "Contenu 1" (d'indice 0), on fera :
            const firstContent = contents[0];
            </p>
            </li><br />
            <li><strong>document.getElementsByTagName()</strong><br /><br />
            Avec cette méthode, on <span class="mise_en_valeur4">recherchera tous les éléments avec un nom de balise bien précis</span> (par exemple tous les liens (<strong>a</strong>), tous les boutons (<strong>button</strong>), etc ..).<br />
            De la même manière que la méthode précédente, on récupérera la liste des éléments correspondants sous forme de tableau.<br /><br />
            <strong>getElementsByTagName(&lt;name&gt;)</strong> <span class="mise_en_valeur4">prend en paramètre le nom de la balise à rechercher</span> et nous retournera la liste des éléments correspondants.<br /><br />
            Si l'on part du code HTML suivant :
            <p class="citation_code_balise"
            >&lt;div&gt;
                &lt;article&gt;Contenu 1&lt;/article&gt;
                &lt;article&gt;Contenu 2&lt;/article&gt;
                &lt;article&gt;Contenu 3&lt;/article&gt;
            &lt;/div&gt;
            </p>
            .. on pourra retrouver la liste des éléments de type article  avec le code JavaScript suivant :
            <p class="citation_console"> 
            const articles = document.getElementsByTagName(&lt;article&gt;);
            // Pour ressortir le premier élément du tableau, donc le "Contenu 3" (d'indice 2), on fera :
            const thirdArticle = articles[2];
            </p>
            </li><br />
            <li><strong>document.querySelector()</strong><br /><br />
            Cette méthode est plus complexe, mais aussi beaucoup plus puissante car elle nous <span class="mise_en_valeur4">permet de faire une recherche complexe dans le DOM, en mélangeant plusieurs procédés</span>.<br /><br /><br />
            Il s'agit d'un sélecteur qui permet de cibler certains éléments.<br §>
            Par exemple, <strpng>document.querySelector("#myId p.article &gt; a")</strpng> fera une <span class="mise_en_valeur4">recherche dans l'élément ayant pour id #myId</span>, les éléments de type &lt;p&gt; qui ont pour classe article, afin de récupérer le lien (&lt;a&gt; ) qui est un enfant direct (pas des enfants de ses enfants).<br />
            Ainsi, avec le code HTML suivant :
            <p class="citation_code_balise">
                &lt;div id="myId"&gt;
                &lt;p>
                    &lt;span&gt;&lt;a href="#"&gt;Lien 1&lt;/a&gt;&lt;/span&gt;
                    &lt;a href="#"&gt;Lien 2&lt;/a&gt;
                    &lt;span&gt;&lt;a href="#"&gt;Lien 3&lt;/a&gt;&lt;/span&gt;
                &lt;/p&gt;
                &lt;p class="article"&gt;
                    &lt;span&gt;&lt;a href="#">Lien 4&lt;/a>&lt;/span&gt;
                    &lt;span&gt;&lt;a href="#">Lien 5&lt;/a><&lt;/span&gt;
                    &lt;a href="#"&gt;Lien 6&lt;/a&gt;
                &lt;/p&gt;
                &lt;p&gt;
                    &lt;a href="#"&gt;Lien 7&lt;/a&gt;
                    &lt;span&gt;&lt;a href="#"&gt;Lien 8&lt;/a&gt;&lt;/span&gt;
                    &lt;span&gt;&lt;a href="#"&gt;Lien 9&lt;/a&gt;&lt;/span&gt;
                &lt;/p&gt;
            &lt;/div&gt;
            </p>
            la recherche JavaScript suivante :
            <p class="citation_console">
            const elt = document.querySelector("#myId p.article &gt; a");
            </p>
            .. nous retournera uniquement Lien 6
            </li><br />
            <li><strong>querySelector()</strong><br /><br />
            Ne renvoie pas une liste des résultats, mais le <span class="mise_en_valeur4">premier élément qui correspond à la recherche</span>.<br /><br />
            <strong>querySelector(&lt;selector&gt;)</strong> <span class="mise_en_valeur4">prend en paramètre le sélecteur et nous retournera le premier élément trouvé</span>, ou null si aucun élément n'a été trouvé.
            </li>

            <li><strong>document.querySelectorAll()</strong><br /><br />
            Cette méthode permet de retourner un tableau avec les valeurs recherchées, exemple :
            <p class="citation_console">
            const elt = document.querySelectorAll(".message");
            // La constante elt va continir un tableau avec toutes les classes se nommant "message"
            </p>
            </li>

        </ul>

        <h2>Les recherches depuis un élément</h2>
        <p>Il n'y a pas qu'avec <strong>document.</strong> que nous pouvons rechercher des éléments, toutesfois les deux peuvent être liés.</p>
        <p>Si on se "positionne" quelque part dans l'arbre du <strong>document.</strong>, autrement dit, si l'on capture cet endroit - si l'on se place à cet endroit- , on peut partir de ce dernier pour trouver un élément (ou plusieurs, car ce sont souvent des tableaux) en particulier situé en dessous, ou avant, en partant de ce point de capture.</p>
        <p>Nous allons y voir plus clair tout de suite :<p>
        <p class="mise_en_valeur4">Chaque élément est un objet JavaScript avec ses propriétés et ses fonctions, et parmi ces dernières, il en existe pour parcourir les enfants et le parent de chaque élément.</p>
        <ul>
            <li><strong>element.children</strong> : Cette propriété nous <span class="mise_en_valeur4">retourne la liste des enfants de cet élément</span></li>
            <li><strong>element.parentElement</strong> : Cette propriété nous <span class="mise_en_valeur4">retourne l'élément parent de celui-ci</span></li>
            <li><strong>element.nextElementSibling</strong>  /  <strong>element.previousElementSibling</strong>  : Ces propriétés nous <span class="mise_en_valeur4">permettent de naviguer vers l'élément suivant / précédent de même niveau que notre élément</span></li>
        </ul>
        <p>Par exemple, avec le code HTML suivant :</p>
        <p class="citation_code_balise">
        &lt;div id="parent"&gt;
            &lt;div id="previous">Précédent&lt;/div&gt;
            &lt;div id="main"&gt;
                &lt;p>Paragraphe 1&lt;/p&gt;
                &lt;p>Paragraphe 2&lt;/p&gt;
            &lt;/div>
            &lt;div id="next">Suivant&lt;/div&gt;
        &lt;/div&gt;
        </p>
        <p>.. et si l'on considère que nous avons le code JavaScript suivant :</p>
        <p class="citation_console">
        const elt = document.getElementById('main');
        </p>
        <p>.. nous aurons ceci :</p>
        <ul>
        <li class="mise_en_valeur4"><strong>elt.children</strong> nous retournera les éléments de type <strong>p</strong> qui sont les enfants de l'élément  #main</li>
        <li class="mise_en_valeur4"><strong>elt.parentElement</strong> nous retournera la  div  qui a l'<strong>id</strong> parent</li>
        <li class="mise_en_valeur4"><strong>elt.nextElementSibling</strong> nous retournera l'élément qui a l'<strong>id</strong> next</li>
        <li class="mise_en_valeur4"><strong>elt.previousElementSibling</strong> nous retournera l'élément qui a l'<strong>id</strong> previous</li>
        </ul>
        <p>Beaucoup d'autres propriétés existent : <a href="https://developer.mozilla.org/fr/docs/Web/API/Element" title="element" alt="element">Doc MDN sur les éléments</a> comme par exemple :</p>
        <ul>
            <li><strong>element.id</strong> renvoie une chaîne de caractère représentant l'identifiant de l'élément. Il est souvent utilisé pour extraire l'élément en utilisant getElementById<br />
                Dans l'exemple précédent avec la constante elt dont on a attribué le getElementById('main'): <strong>elt.id</strong> donnera <strong>main</strong>.</li><br />
            <li><strong>element.innerHTML</strong> renvoie une chaîne de caractères réprésentant le balisage du contenu de l'élément.<br />
                Ainsi, dans l'exemple précédent : <strong>elt.innerHTML</strong> donnera <strong>le contenu du div main</strong> (de &lt;div id="main"&gt; à &lt;/div>), autrement dit :
                <strong>
                &lt;p>Paragraphe 1&lt;/p&gt;
                &lt;p>Paragraphe 2&lt;/p&gt;
                </strong><br />
                C'est pour cela que, comme nous le verrons plus tard, on pourra modifier le contenu d'un balisage (entre les deux balises) en réattribuant du texte ou des balises, ainsi 
                <strong>elt.innerHTML = "";</strong> supprimera les deux lignes de paragraphes citées précédemment.
            </li>
        </ul>


        <h1 id="ancre_sur_la_modification_du_dom">Modifier, ajouter, supprimer les éléments du DOM</h1>

        <h2>Modifier le contenu d’un élément</h2>
        <p class="mise_en_valeur4"><strong>innerHTML</strong> et <strong>textContent</strong> sont les deux propriétés principales permettant de modifier le contenu d’un élément.</p>
        <p class="mise_en_valeur4"><strong>innerHTML</strong> demande à ce que nous entrions du texte représentant un contenu HTML.</p>
        <p>Par exemple :  "&lt;p&gt;Voici un exemple de contenu pour &lt;strong&gt;innerHTML&lt;/strong&gt;&lt;/p&gt;" .</p>
        <p class="mise_en_valeur4">La propriété <strong>textContent</strong>, quant à elle, demande un simple texte qui ne sera pas interprété comme étant du HTML.</p>
        <p>Si on reprend l'exemple du dessus, le mot <strong>innerHTML</strong> ne sera pas en gras, et les balises HTML seront visibles comme le reste du texte.</p>
        <p class="mise_en_valeur4">Définir une valeur à <strong>innerHTML</strong> ou <strong>textContent</strong> remplace directement le contenu actuel de l'élément par celui que l’on précise.</p>
        <p>Par exemple, avec le code JavaScript suivant :</p>
        <p class="citation_console">
        let elt = document.getElementById('main');
        elt.innerHTML = "&lt;ul&gt;&lt;li&gt;Elément 1&lt;/li&gt;&lt;li&gt;Elément 2&lt;/li&gt;&lt;/ul&gt;";
        </p>
        <p>L'élément qui a l'id 'main' aura un nouveau contenu; Le HTML deviendra donc :</p>
        <p class="citation_code_balise">
        &lt;div id="main"&gt;
            &lt;ul&gt;
                &lt;li&gt;Elément 1&lt;/li&gt;
                &lt;li&gt;Elément 2&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        </p>
        <p class="mise_en_valeur4">Attention, pour éviter une faille XSS à cause d'InnerHTML car ce dernier permet potentiellement à un petit malin d'insérer du code, il vaut mieux utiliser <strong>createElement</strong>, cf plus bas.<br />
        Ainsi on crée un élément avec <strong>createElement</strong>, puis on le rajoute dans le DOM via <strong>appendChild</strong> par exemple.</p>

        <h2>Modifier des classes</h2>
        <p>La propriété <strong>classList</strong> <span class="mise_en_valeur4">permet d’accéder directement à la liste es classes d’un élément, elle fournit aussi une série de fonctions permettant de modifier cette liste de classes</span>, en voici quelques-unes :</p>
        <ul>
            <li class="mise_en_valeur4"><strong>add(&lt;string&gt;, [&lt;string&gt;, ...])</strong>  : Ajoute la ou les classes spécifiées</li>
            <li class="mise_en_valeur4"><strong>remove(&lt;string&gt;, [&lt;string&gt;, ...])</strong> : Supprime la ou les classes spécifiées</li>
            <li class="mise_en_valeur4"><strong>contains(&lt;string&gt;)</strong> : Vérifie si la classe spécifiée est contenue par cet élément</li>
            <li class="mise_en_valeur4"><strong>replace(&lt;old&gt;, &lt;new&gt;)</strong> : Remplace l'ancienne classe par la nouvelle classe</li>
        </ul>
        <p>Exemple :</p>
        <p class="citation_console">
        elt.classList.add("nouvelleClasse"); // Ajoute la classe nouvelleClasse à l'élément
        elt.classList.remove("nouvelleClasse"); // Supprime la classe nouvelleClasse que l'on venait d'ajouter
        elt.classList.contains("nouvelleClasse");  // Retournera false car on vient de la supprimer
        elt.classList.replace("oldClass", "newClass");  // Remplacera oldClass par newClass si oldClass était présente sur l'élément
        elt.classList.toggle("oldClass");  // Supprime oldClass si elle existe, si elle n'existe pas alors elle la rajoute
        </p>

        <h2>Changer les styles d’un élément</h2>
        <p class="mise_en_valeur4">Avec la propriété <strong>style</strong>, on peut récupérer et modifier les différents styles d'un élément.
        <p><strong>style</strong> est un objet qui a une propriété pour chaque style existant.</p>
        <p>Par exemple, pour modifier la couleur d'arrière-plan d'un élément, nous ferons :</p>
        <p class="citation_console">
        element.style.backgroundColor = '#000';
        </p>
        <p>Voici quelques exemples :</p>
        <p class="citation_console">
        elt.style.color = "#fff";  // Change la couleur du texte de l'élément à blanche
        elt.style.backgroundColor = "#000";  // Change la couleur de fond de l'élément en noir
        elt.style.fontWeight = "bold";  // Met le texte de l'élément en gras
        </p>

        <h2>Modifier les attributs</h2>
        <p class="mise_en_valeur4">Pour définir ou remplacer les attributs d'un élément, on peut utiliser la fonction <strong>setAttribute</strong>.</p>
        <p><strong>element.setAttribute(&lt;name&gt;, &lt;value&gt;)</strong> prend en paramètres le nom de l'attribut et sa valeur et ne retourne rien.</p>
        <p>On peut utiliser les fonctions <strong>getAttribute</strong> et <strong>removeAttribute</strong> pour avoir encore plus de contrôle sur les attributs.</p>
        <p>Voici quelques exemples avec <strong>elt</strong> faisant référence à un élément de type <strong>input</strong> :</p>
        <p class="citation_console">
        elt.setAttribute("type", "password");  // Change le type de l'input en un type password
        elt.setAttribute("name", "my-password");  // Change le nom de l'input en my-password
        elt.getAttribute("name");  // Retourne my-password
        </p>

        <h2>Création de nouveaux éléments</h2>
        <p>Comme vu précédemment, si on utilise <strong>innerHTML</strong> cela peut ouvrir la porte à une faille XSS, plutôt que de modifier des balises et leur contenu via cette propriété, mieux vaut utiliser ce qui suit pour créer un nouvel élément dans ce qu'on pourrait appeler une mémoire tampon, puis modifier son contenu via <strong>textContent</strong> puis l'intégrer au DOM par la suite.<br />
        Tant que ce n'est pas dans le DOM, l'élément n'est pas affiché, il sera simplement créé. </p>
        <p class="mise_en_valeur4">La fonction <strong>document.createElement</strong> va nous permettre de créer un nouvel élément du type spécifié, puis nous pourrons l'insérer dans notre DOM.</p>
        <p><strong>document.createElement(&lt;tag&gt;)</strong> prend en paramètre le nom de la balise de notre élément et nous renvoie l'élément nouvellement créé, exemple :</p>
        <p class="citation_console">
        const newElt = document.createElement("div");
        </p>
        <p>Un élément créé avec cette fonction ne fait pas encore partie du document, on ne la verra pas sur notre page tant qu’elle ne sera pas l’enfant d’un élément.</p>
        <p class="mise_en_valeur1">Ajouter des enfants</p>
        <p>Il existe plusieurs façons d'ajouter un élément dans notre page, la plus connue est <strong>appendChild</strong>; Cette fonction permet d'ajouter un élément à la liste des enfants du parent depuis lequel la fonction est appelée.</p>
        <p><strong>parentNode.appendChild(&lt;element&gt;)</strong> prend en paramètre l'élément à ajouter en tant qu'enfant.</p>
        <p>L'élément depuis lequel on appelle cette fonction devient donc le parent de notre élément.</p>
        <p>Voici un exemple :</p>
        <p class="citation_console">
        const newElt = document.createElement("div");
        let elt = document.getElementById("main");

        elt.appendChild(newElt);
        </p>
        <p>Avec le code ci-dessus, nous venons de créer un nouvel élément de type <strong>div</strong>, mais qui n'est pas encore rattaché au DOM.</p>
        <p>Nous avons ensuite récupéré l'élément ayant pour id <strong>main</strong>.</p>
        <p>Enfin, nous avons ajouté notre nouvel élément dans les enfants de l'élément <strong>#main</strong>.</p>

        <p class="mise_en_valeur1">Autres exemples</p>
        <p><strong>document.append()</strong> insère un ensemble d'objets après le dernier enfant du document.<br />
        Partons du principe que dans notre HTML, nous avons une balise &lt;ul&gt; (donc une liste) dont l'id est "right", comprenant de nombreuses lignes, et que l'on veuille lui rajouter une ligne dans la liste..</p>
        <p class="citation_console">
        /* On récupère l'élément &lt;ul&gt; grâce à son id "right" en le mettant
        dans une constante "liste" : */
        const liste = document.getElementById("right");
        // On crée un nouvel élément &lt;li&gt; que l'on stocke dans une constante :
        const newListItem = document.createElement('li');
        // On change son contenu en lui indiquant un texte :
        newListItem.textContent = "Je suis le nouveau contenu !";
        // On le met en dernière position de la liste (dernier fils de l'élément &lt;ul&gt;)
        liste.append(newListItem);
        </p>


        <h2>Supprimer et remplacer des éléments</h2>
        <p>Il existe les fonctions <strong>removeChild</strong> et <strong>replaceChild</strong>, afin de respectivement supprimer et remplacer un élément.</p>
        <p><strong>parentNode.removeChild(&lt;element&gt;)</strong> prend en paramètre l'élément à supprimer du parent et retourne cet élément.</p>
        <p><strong>parentNode.replaceChild(&lt;newElement&gt;, &lt;oldElement&gt;)</strong> prend en paramètres le nouvel élément ainsi que l'élément à remplacer, et retourne ce dernier.</p>
        <p>Exemple :</p>
        <p class="citation_console">
        const newElt = document.createElement("div");
        let elt = document.getElementById("main");
        elt.appendChild(newElt);

        elt.removeChild(newElt);
        // Supprime l'élément newElt de l'élément elt
        
        elt.replaceChild(document.createElement("article"), newElt);
        // Remplace l'élément newElt par un nouvel élément de type article
        </p>

        <h1 id="ancre_sur_window">L'objet window et les méthodes</h1>
        <p>L’objet <strong>window</strong> en JavaScript représente la fenêtre du navigateur dans laquelle le code JavaScript est exécuté.<br />
        Cet objet est l’objet global de l’application et est disponible dans tous les scripts de la page.</p>
        <p>L’objet window fournit une série de méthodes, propriétés et événements qui permettent de contrôler et d’interagir avec la fenêtre du navigateur, ainsi que de manipuler le contenu de la page web.</p>
        
        <h2>Quelques propriétés utiles</h2>
        <ul>
            <li class="mise_en_valeur4">window.closed</li>
            <p>Cette propriété indique si la fenêtre référencée est fermée ou non, exemple :</p>
            <p class="citation_console">
            let isClosed = window.closed;
            </p>
            <p>La valeur renvoyée (ici contenue dans <strong>iSclosed</strong>) est un booléen, les valeurs possibles sont donc "<strong>false</strong>" : La fenêtre est ouverte; "<strong>true</strong>" : La fenêtre a été fermée.</p>

            <li class="mise_en_valeur4">window.console</li>
            <p>La propriété <strong>window.console</strong> retourne une référence à l'objet Console, elle va afficher des information sur la console du navigateur;<br />
            Ces méthodes ont pour seul but le débogage</p>


            <li class="mise_en_valeur4">window.document</li>
            <p>Renvoie une référence au document contenu dans la fenêtre, exemple :</p>
            <p class="citation_console">
            console.log(window.document.title);
            </p>

            <li class="mise_en_valeur4">window.alert</li>
            <p>Indique au navigateur d'afficher une boîte de dialogue avec un message optionnel, et d'attendre que la personne ferme cette boîte de dialogue, exemple :</p>
            <p class="citation_console">
            window.alert("Hello world!");
            </p>
            <p>Pour information "<strong>alert("Hello world!");</strong>" aura exactement le même résultat</p>

            <li class="mise_en_valeur4">window.prompt</li>
            <p>Affiche une boîte de dialogue, éventuellement avec un message, qui invite l'utilisateur à saisir un texte, exemple :</p>
            <p class="citation_console">
            résultat = window.prompt(message, défaut);
            // message (optionnel) est une chaîne de caractères qui sera affichée pour l'utilisateur.
            // Cet argument peut ne pas être utilisé s'il n'y a rien à afficher dans la fenêtre.
            // default (optionnel également) est une chaîne de caractères contenant la valeur
            //par défaut affichée pour la saisie.
            </p>
            <p>Pour information "<strong>alert("Hello world!");</strong>" aura exactement le même résultat</p>


            <li class="mise_en_valeur4">window.navigator</li>
            <p>Renvoie une référence à un objet qui est une instance de Navigator et possède des méthodes et propriétés à propos de l'application qui exécute le script.<br />
            Exemple :<p>
            <p class="citation_console">
            var sUsrAg = navigator.userAgent;
            console.log("Voici l'agent utilisateur du navigateur courant", sUsrAg);
            </p>
            <p>Autres exemples :</p>
            <p class="citation_console">
            var sUsrAg = navigator.geolocation;
            console.log("Voici l'emplacement géographique de l'appareil (une autorisation est normalement demandée à l'utilisateur)", sUsrAg);
            </p>
            <p class="citation_console">
            var sUsrAg = navigator.connection;
            console.log("Voici les informations quant à la connection réseau de l'appareil", sUsrAg);
            // Les infos sont par exemple la bande passante actuelle du périphérique utilisateur ou si la connexion est mesurée.
            //La propriété peut être utilisée pour sélectionner un contenu en haute ou basse définition,
            //dépendant de la connexion de l'utilisateur.
            </p>
            
            <p class="citation_console">
            var cookieEnabled = navigator.cookieEnabled;
            // cookieEnabled est un Boolean: true ou false
            if (!navigator.cookieEnabled) {
            console.log("Ce navigateur ne supporte pas ou bloque les cookies.")
            }
            </p>

        </ul>


        <h2>Quelques méthodes utiles</h2>
        <ul>
            <li class="mise_en_valeur4">alert()</li>
            <p>Cela affiche un pop-up avec message et avec les boutons ok et annuler, exemple :</p>
            <p class="citation_console">
            alert("Hello!");
            </p>

            <li class="mise_en_valeur4">prompt()</li>
            <p>Affiche un pop-up / boîte de dialogue qui permet à l’utilisateur de saisir une valeur.<br />
            Dans l’exemple ci dessous, <strong>name</strong> stocke la valeur saisie, exemple :</p>
            <p class="citation_console">
            let name = prompt("What is your name ? ", "your name here");
            </p>

            <li class="mise_en_valeur4">confirm()</li>
            <p>Affiche une boîte de dialogue qui permet à l’utilisateur de choisir entre annuler et ok.<br />
            Dans l’exemple ci-dessous, <strong>confirmation</strong> stocke le booléen résultant de la réponse utilisateur. :</p>
            <p class="citation_console">
            let confirmation = confirm('Êtes-vous sûr ?');
            </p>

            <li class="mise_en_valeur4">setTimeout()</li>
            <p>Exécute une fonction après un certain temps (en millisecondes)<br />
            Exemple :</p>
            <p class="citation_console">
            &lt;div id="counter"&gt;En attente...&lt;/div&gt;

            function writeOk() {
                const counter = document.getElementById('counter');
                counter.textContent = 'OK';
            }

            let timer = setTimeout(writeOk, 3000);
            // La fonction writeOk() sera exécutée au bout de 3000 millisecondes soit 3 secondes
            </p>
            <p>On peut mettre un message plutôt qu'une fonction, <a href="https://developer.mozilla.org/fr/docs/Web/API/setTimeout">Documentation setTimeout pour plus d'infos</a>.</p>

            <li class="mise_en_valeur4">clearTimeout()</li>
            <p>Annule un timer déclaré par setTimeout, exemple :</p>
            <p class="citation_console">
            let timer = setTimeout(writeOk, 3000);
            clearTimeout(timer);</p>



        </ul>

        <h1 id="ancre_sur_evenements">Écouter les événements</h1>
        <p class="mise_en_valeur4">Un événement est une réaction à une action émise par l'utilisateur, comme le clic sur un bouton ou la saisie d'un texte dans un formulaire.</p>
        <p>Un événement en JavaScript est représenté par un nom (<strong>click</strong>, <strong>mousemove</strong>, etc..) et une fonction que l'on nomme une <span class="mise_en_valeur1">callback</span>.</p>
        <p class="mise_en_valeur4">Un événement est par défaut propagé, c'est-à-dire que si nous n'indiquons pas à l'événement que nous le traitons, il sera transmis à l'élément parent, et ainsi de suite jusqu'à l'élément racine.</p>
        <p>Cette fonction <strong>callback</strong>, c'est nous qui allons la spécifier.</p>
        <p class="mise_en_valeur4">Elle sera appelée à chaque fois que l'action que l'on désire suivre est exécutée.</p>
        <p class="mise_en_valeur4">Cela signifie que si l'on désire suivre le clic sur un élément, notre fonction sera appelée à chaque fois que l'utilisateur cliquera sur cet élément.</p>

        <h1 id="ancre_sur_clic_sur_element">Réagir lors d’un clic sur un élément</h1>
        <p class="mise_en_valeur4">Afin de réagir lors d'un clic sur un élément, il faut écouter cet événement.</p>
        <p>Pour cela, nous avons la fonction <strong>addEventListener()</strong> qui permet d'écouter tous types d'événements (pas que le clic).</p>
        <p>Réagir à un événement, c'est faire une action lorsque celui-ci se déclenche.</p>
        <p>Écouter, c'est vouloir être averti quand l'événement se déclenche.</p>
        <p><strong>addEventListener(&lt;event&gt;, &lt;callback&gt;)</strong> prend en paramètres le nom de l'événement à écouter, et la fonction à appeler dès que l'événement est exécuté.</p>
        <p>Voici la liste des événement à écouter : https://developer.mozilla.org/fr/docs/Web/Events</p>
        <p>Exemple avec l'événement "clic sur la souris" :</p>
        <p class="mise_en_valeur1">L'événement <strong>onclick</strong></p>
        <p>Admettons que nous voulons réagir au clic sur un lien, on va tout d'abord devoir récupérer l'élément qui correspond à votre lien, ensuite, on va appeler la méthode <strong>element.addEventListener('click', onClick);</strong> directement sur cet élément.</p>
        <p><strong>onClick</strong> correspond à la fonction que nous allons définir et qui sera appelée à chaque fois que l'utilisateur cliquera sur notre lien.</p>
        <p>C'est donc nous qui choisissons ce que nous souhaitons faire : Récupérer des informations depuis un serveur, afficher un message, etc.</p>
        <p>Le comportement par défaut de l'élément actionné sera tout de même exécuté, ainsi, s'il y a un clic sur un lien, on peut, dans notre fonction de callback, faire en sorte d'afficher un message, mais le navigateur va ouvrir le lien.</p>
        <p>De la même manière, si le clic se fait sur un bouton de validation de formulaire, celui-ci sera envoyé; <span class="mise_en_valeur1">Il est possible de désactiver ce comportement par défaut</span>.</p>
        <p>Mais avant, voyons un petit exemple :</p>
        <p class="citation_console">
        const elt = document.getElementById('mon-lien');  // On récupère l'élément sur lequel on veut détecter le clic
        elt.addEventListener('click', function() {  // On écoute l'événement click
            elt.innerHTML = "C'est cliqué !";  // On change le contenu de notre élément pour afficher "C'est cliqué !"
        });
        </p>
        <p class="mise_en_valeur1">preventDefault()</p>
        <p>Comme nous avons pu le voir si nous avons essayé de réagir aux clics sur votre lien, notre fonction est bien appelée, mais la page change.</p>
        <p>Mais si on ne souhaite pas avoir ce comportement, afin de pouvoir faire autre chose à la place, comme afficher un message, comment faire ?</p>
        <p>La fonction de callback, celle qui est appelée lorsque l'utilisateur clique sur le lien, prend un paramètre.</p>
        <p>Ce dernier correspond au contenu de l'événement qui vient de se produire, et il nous met à disposition quelques fonctions et propriétés intéressantes.</p>
        <p>Il contient une fonction <strong>preventDefault()</strong> qui fait exactement ce que l'on veut.</p>
        <p class="mise_en_valeur4">En appelant cette fonction dans notre callback, on demande au gestionnaire des événements de ne pas exécuter le comportement par défaut de votre élément (qui est la redirection vers une autre page pour un lien).</p>
        <p>Cela marche aussi pour d'autres types d'éléments que le lien.. Cette même fonction exécutée pendant un événement <strong>onsubmit</strong> sur un formulaire empêchera le formulaire de s'envoyer au serveur, par exemple !</p>
        <p>Si on reprend notre exemple précédent, voici comment empêcher que notre navigateur ne change de page quand on clique sur le lien :</p>
        <p class="citation_console">
        const elt = document.getElementById('mon-lien');  // On récupère l'élément sur lequel on veut détecter le clic
        elt.addEventListener('click', function(event) {  // On écoute l'événement click, notre callback prend un paramètre que nous avons appelé event ici
            event.preventDefault();  // On utilise la fonction preventDefault de notre objet event pour empêcher le comportement par défaut de cet élément lors du clic de la souris
        });
        </p>
        <p class="mise_en_valeur1">stopPropagation()</p>
        <p>De la même manière que <strong>preventDefault()</strong>, <strong>stopPropagation()</strong> est une fonction de l'objet que notre fonction reçoit en paramètre.</p>
        <p class="mise_en_valeur4">Elle nous permet d'empêcher la propagation de l'événement vers son parent.</p>
        <p>En effet, lorsqu'un événement est déclenché, il est d'abord reçu par l'élément cible, mais il est ensuite remonté vers les éléments parents qui sont aussi dans la cible.</p>
        <p>Avec <strong>stopPropagation()</strong>, on peut ainsi empêcher que d'autres éléments reçoivent l'événement.</p>
        <p>Admettons par exemple que nous ayons un élément pour lequel nous voulons afficher un message lorsque l'on clique dessus, mais à l'intérieur de cet élément, nous avons aussi un autre élément qui doit nous afficher un autre message lorsque l'on clique dessus.<br />
        Par défaut, si nous cliquons dans l'élément intérieur, le message va s'afficher, puis notre élément parent va lui aussi recevoir l'événement du clic et encore changer le message.</p>
        <p>Pour éviter cela, nous devons stopper la propagation de l'événement.<br />
        Ainsi, dans l'élément intérieur, nous ferons ceci :</p>
        <p class="citation_console">
        elementInterieur.addEventListener('click', function(event) {
            event.stopPropagation();
            elementAvecMessage.innerHTML = "Message de l'élément intérieur";
        });
        </p>
        <p>De cette manière, lorsque l'on clique sur l'élément intérieur, l'élément parent ne recevra plus le clic, et seul l'élément intérieur affichera son message.<br />
        Par contre, en cliquant directement dans l'élément parent, sans être dans l'élément intérieur, l'élément parent recevra bien l'événement et affichera bien son message.</p>

        <h1 id="ancre_sur_donnees_utilisateurs_avec_elements">Récupérer les données utilisateurs avec les événements</h1>
        <p>Nous savons écouter un événement, mais on ne sait pas encore comment récupérer la position de la souris, ni même le texte saisi dans un formulaire; C'est ce que nous allons voir maintenant avec les données liées aux événements.</p>
        <p>Comme vu précédemment, lorsque l'on reçoit un événement, notre fonction callback reçoit un paramètre contenant des informations sur cet événement.<br />
        Ces informations sont reçues sous la forme d'un objet qui dépendra du type d'événement reçu.</p>
        <p>Chaque événement implémente l'objet <strong>Event</strong>, chaque événement a au minimum les mêmes fonctions et propriétés que l'objet <strong>Event</strong>.</p>
        <p>Cela comprend entre autres :</p>
        <ul>
            <li><strong>preventDefault()</strong> : Empêche l'exécution du comportement par défaut de l'élément quand il reçoit l'événement</li>
            <li><strong>stopPropagation()</strong> : Empêche la propagation de l'événement vers d'autres éléments</li>
            <li>D'autres propriétés en fonction du type d'événement</li>
        </ul>
        <p class="mise_en_valeur4">Pour avoir une liste exhaustive de ce que propose l'interface <strong>Event</strong>, c’est ici : https://developer.mozilla.org/fr/docs/Web/API/Event</p>
         
        <h2 id="ancre_sur_mouvement_souris">Détecter le mouvement de la souris</h2>
        <p class="mise_en_valeur4">Afin de détecter le mouvement de la souris, il nous faut écouter l'événement <strong>mousemove</strong> (cf ici pour la doc : https://developer.mozilla.org/fr/docs/Web/API/Element/mousemove_event).</p>
        <p class="mise_en_valeur4">Cet événement nous fournit un objet de type <strong>MouseEvent</strong>, en bref dès que la souris bouge, notre fonction callback sera appelée avec un paramètre de type <strong>MouseEvent</strong>, qui contient les données sur le mouvement de la souris.</p>
        <p>Voici, entre autres, ce que cet objet nous permet de récupérer :</p>
        <ul>
            <li class="mise_en_valeur4"><strong>clientX</strong> / <strong>clientY</strong>  : Position de la souris dans les coordonnées locales (contenu du DOM)</li>
            <li class="mise_en_valeur4"><strong>offsetX</strong> / <strong>offsetY</strong>  : Position de la souris par rapport à l'élément sur lequel on écoute l'événement</li>
            <li class="mise_en_valeur4"><strong>pageX</strong> / <strong>pageY</strong>  : Position de la souris par rapport au document entier</li>
            <li class="mise_en_valeur4"><strong>screenX</strong> / <strong>screenY</strong>  : Position de la souris par rapport à la fenêtre du navigateur</li>
            <li class="mise_en_valeur4"><strong>movementX</strong> / <strong>movementY</strong> : Position de la souris par rapport à la position de la souris lors du dernier événement <strong>mousemove</strong></li>
        </ul>
        <p>Exemple :</p>
        <p class="citation_console">
        elt.addEventListener('mousemove', function(event) {
            const x = event.offsetX; // Coordonnée X de la souris dans l'élément
            const y = event.offsetY; // Coordonnée Y de la souris dans l'élément
        });
        </p>

        <h2 id="ancre_sur_lecture_champ_texte">Lire le contenu d’un champ texte</h2>
        <p>Autre exemple, la lecture du contenu d’un champ texte lorsque l’utilisateur le modifie.</p>
        <p class="mise_en_valeur4">Après une brève recherche dans la doc (https://developer.mozilla.org/fr/docs/Web/Events), on peut voir qu'il existe un événement <strong>change</strong> (dont voici la doc : https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/change_event).</p>
        <p>Cest un événement qui fonctionne avec les éléments de type <strong>&lt;input&gt;</strong>,<strong>&lt;select&gt;</strong> et <strong>&lt;textarea&gt;</strong>.</p>
        <p class="mise_en_valeur4">Cet événement est déclenché lorsque le champ perd le focus, c'est-à-dire lorsque l'utilisateur passe à autre chose en cliquant ailleurs et qu'il a fini sa saisie pour ce champ.</p>
        <p>Cet événement fonctionne aussi pour les cases à cocher (checkbox) et les cases à choix unique (radio).</p>
        <p>C'est donc un événement qui semble parfait pour notre cas, car il nous permet exactement de détecter que le texte saisi dans le champ a changé.<br />
        Pour récupérer la valeur de notre champ une fois qu'il a été modifié, il suffit d'accéder à la valeur de l'élément cible : <strong>event.target.value</strong>.</p>
        <p>En effet, ici target correspond à l'élément sur lequel s'est produit l'événement, un champ de type  &lt;input&gt; dans notre exemple.<br />
        Or, ce type d'élément contient une propriété <strong>value</strong> qui permet de récupérer ou définir la valeur du champ.</p>
        <p class="mise_en_valeur4">De manière générale, la propriété <strong>value</strong> permet de récupérer le contenu de l’attribut value d’un élément HTML (input par exemple), autrement dit <strong>const valeur = monIput.value</strong> va attribuer le contenu de "monIput" qui est une balise input, à la constante "valeu"</p>
        <p><strong>change</strong> c'est bien, mais si je veux pouvoir avoir la valeur dès que l'utilisateur ajoute ou supprime une lettre, comment je fais ?<br />
        Pour gérer ce cas, il existe aussi l'événement <strong>input</strong>, qui fonctionne comme <strong>change</strong>, sauf qu'il est déclenché dès que le contenu du champ est modifié, même si l'utilisateur n'a pas encore fini de saisir ce qu'il souhaite :</p>
        <p class="citation_console">
        input.addEventListener('input', function(event) {
            output.innerHTML = event.target.value; 
        });
        </p>
        <p>Ainsi, le formulaire suivant en HTML, avec le code CSS qui suit, et le code Javascript, nous permettent de mettre à jour de façon automatique l’affichage du nom qui est en train d’être renseigné, mais aussi le sexe et la position de la souris, ce qui peut être pratique :) :</p>
        <p class="mise_en_valeur1">Code HTML :</p>
        <p class="citation_code_balise">
        &lt;html&gt;
          &lt;head&gt;
            &lt;link rel="stylesheet" type="text/css" href="base.css"&gt;
          &lt;/head&gt;
          &lt;body&gt;  
            &lt;form&gt;
              &lt;div&gt;&lt;input type="text" id="name" placeholder="Nom" /&gt;&lt;/div&gt;
              &lt;div&gt;
                &lt;select id="gender"&gt;
                  &lt;option&gt;Choisissez une valeur&lt;/option&gt;
                  &lt;option value="male"&gt;Homme&lt;/option&gt;
                  &lt;option value="female"&gt;Femme&lt;/option&gt;
                  &lt;option value="other"&gt;Autre&lt;/option&gt;
                &lt;/select&gt;  
              &lt;/div&gt;
            &lt;/form&gt;
            
            &lt;div id="result"&gt;
              Nom : &lt;span id="res-name"&gt;&lt;/span&gt;&lt;br /&gt;
              Genre : &lt;span id="res-gender"&gt;&lt;/span&gt;&lt;br /&gt;
              Souris : (&lt;span id="mouse-x"&gt;&lt;/span&gt;, &lt;span id="mouse-y"&gt;&lt;/span&gt;)
            &lt;/div&gt;
            
            &lt;script type="text/javascript" src="index.js"&gt;&lt;/script&gt;
          &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p class="mise_en_valeur1">Code CSS :</p>
        <p class="citation_code_balise">
        body {
          padding: 50px;
        }

        form, #result {
          margin: auto;
          margin-bottom: 20px;
          width: 300px;
         padding: 20px;
          border: 1px solid black;
        }

        span {
          margin: 10px;
        }
        </p>
        <p class="mise_en_valeur1">Code JavaScript :</p>
        <p class="citation_console">
        document
          .getElementById("name")
          .addEventListener("input", function(e) {
            document
              .getElementById("res-name")
              .innerText = e.target.value;
        });
        document
          .getElementById("gender")
          .addEventListener("change", function(e) {
            document
              .getElementById("res-gender")
              .innerText = e.target.value;
        });

        document
          .getElementById("result")
          .addEventListener("mousemove", function(e) {
            document
              .getElementById("mouse-x")
             .innerText = e.offsetX;
           document
             .getElementById("mouse-y")
             .innerText = e.offsetY;
        );
        </p>

        <p class="mise_en_valeur1">Autres exemples</p>
        <p> Nous avons un bouton "Oui" avec un id "yes" et un bouton "Non" avec un id "no", nous voulons incrémenter un compteur de clic pour chaque bouton.<br />
        Voici le code HTML :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;

        &lt;head&gt;
            &lt;meta charset="utf-8"&gt;
            &lt;title&gt;Clic ! Exo 2&lt;/title&gt;
            &lt;link rel="stylesheet" href="../css/reset.css"&gt;
            &lt;link rel="stylesheet" href="../css/style.css"&gt;
        &lt;/head&gt;

        &lt;body&gt;
            &lt;div id="sondage"&gt;
                &lt;h1&gt;Aimez-vous le JS ?&lt;/h1&gt;
                &lt;button id="yes"&gt;
                    Oui (&lt;span id="counter-yes"&gt;0&lt;/span&gt;)
                &lt;/button&gt;
                &lt;button id="no"&gt;
                    Non (&lt;span id="counter-no"&gt;0&lt;/span&gt;)
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;script src="../js/exo2.js"&gt;&lt;/script&gt;
        &lt;/body&gt;

        &lt;/html&gt;
        </p>
        <p class="citation_console">
        // Je créé un compteur pour le span yes
        let counterYes = 0;
        let counterNo = 0;

        // Je récupère le bouton yes
        const buttonYesHtml = document.getElementById('yes');
        const buttonNoHtml = document.getElementById('no');
        // Je récupère le span counter-yes et counter-no correspondant
        // à chaque bouton Oui et Non
        const counterYesHtml = document.getElementById('counter-yes');
        const counterNoHtml = document.getElementById('counter-no');

        // Je crée la fonction d'incrémententation pour le bouton yes
        function incrementCounterYes() {
            counterYes++;
            counterYesHtml.textContent = counterYes;
        }
        
        // Je crée la fonction d'incrémententation pour le bouton no
        function incrementCounterNo() {
            counterNo++;
            counterNoHtml.textContent = counterNo;
        }

        // Je greffe le clic sur le bouton yes
        buttonYesHtml.addEventListener('click', incrementCounter);
        // Je greffe le clic sur le bouton no
        buttonNoHtml.addEventListener('click', incrementCounter);
        </p>

        <p>Autre solution en créant une fonction qui va cibler directement l'id yes et l'id no grâce à <strong>event.currentTarget</strong> qui permet de donner l'endroit (la balise HTML) sur lequel l'utilisateur a cliqué :</p>
        <p class="citation_console">
        // Je créé un compteur pour le span yes
        let counterYes = 0;
        let counterNo = 0;

        // Je récupère le bouton yes
        const buttonYesHtml = document.getElementById('yes');
        const buttonNoHtml = document.getElementById('no');
        // Je récupère le span counter-yes et counter-no correspondant
        // à chaque bouton Oui et Non
        const counterYesHtml = document.getElementById('counter-yes');
        const counterNoHtml = document.getElementById('counter-no');

        function incrementCounter(event) {
            // currentTarget va me donner l'endroit/la balise HTML sur laquelle j'ai cliqué
            // par exemple, dans ce cas ici, je vais pouvoir m'en servir pour conditionner
            // l'incrémentation du compteur
            buttonHtml = event.currentTarget;
            // je récupère l'id du bouton
            buttonHtmlId = buttonHtml.id

            if(buttonHtmlId === "yes") {
                // j'ai cliqué sur le bouton yes
                counterYes++;
                counterYesHtml.textContent = counterYes;
            } else {
                // j'ai cliqué sur le bouton no
                counterNo++;
                counterNoHtml.textContent = counterNo;
            }
        }

        // Je greffe le clic sur le bouton yes
        buttonYesHtml.addEventListener('click', incrementCounter);
        // Je greffe le clic sur le bouton no
        buttonNoHtml.addEventListener('click', incrementCounter);
        </p>

        <h1 id="ancre_sur_api">Les API et les services web</h1>
        <p>N’importe quel site sur lequel on navigue est un <span class="mise_en_valeur4">service web</span>, et il fournit une <span class="mise_en_valeur4">API</span> pour communiquer avec.</p>
        <p>Un service web est un programme s’exécutant sur un serveur accessible depuis internet, et fournissant un service.<br />
        Par exemple, Google est un service web qui permet de rechercher des sites web.<br />
        Une application météo communique avec un service web qui fournit la météo.<br />
        Un réseau social est un service web qui permet de retrouver ses amis et de communiquer avec.<br /><br />
        <span class="mise_en_valeur4">Le but d’un service web est donc de fournir un service à celui qui le demande, et pour ce faire, il met à disposition une API.</span></p>
        <p class="mise_en_valeur4">Une <span class="mise_en_valeur1">API</span> (<span class="mise_en_valeur1">A</span>pplication <span class="mise_en_valeur1">P</span>rogramming <span class="mise_en_valeur1">I</span>nterface), est une interface de communication.<br />
        Il en existe différents types, mais celle qui nous intéresse est celle qui permet de communiquer avec les services web.<br />
        L’API correspond à l’ensemble des demandes que l’on peut faire à un service web, ces demandes sont appelées des requêtes.</p>
        <p>Par exemple, demander la météo actuelle est une requête, faire une demande d’ami sur un réseau social est une requête, ou encore, envoyer un message via une application de messagerie.<br />
        <span class="mise_en_valeur4">Ces requêtes sont soumises à un protocole de communication (<span class="mise_en_valeur1">SMTP</span>, <span class="mise_en_valeur1">IMAP</span>, <span class="mise_en_valeur1">HTTP</span>, <span class="mise_en_valeur1">FTP</span>, etc..).</span></p>
        <p>Le protocole qui va nous intéresser est celui qui permet de communiquer avec l’API d’un site internet, c’est le protocole HTTP.<br />
        Grâce à ce dernier on va pouvoir récupérer et sauvegarder les données sur un service.</p>
        <p>HTTP (HyperText Transfer Protocol) est donc un protocole qui permet de communiquer avec un site Internet.<br />
        Il va permettre de charger des pages HTML, des styles CSS, des polices de caractères, des images, etc, mais aussi d'envoyer des formulaires et de récupérer et d'envoyer toutes sortes de données depuis ou vers un serveur implémentant ce protocole grâce à son API.</p>
        <p>Plusieurs informations se trouvent dans une requête HTTP :</p>
        <ul>
            <li><span class="mise_en_valeur1">La méthode</span> : Il s’agit de l’<span class="mise_en_valeur4">action que l’on souhaite faire</span> : Récupérer une ressource, la supprimer, etc… Voici les méthodes HTTP les plus courantes :
                <ul>
                    <li><span class="mise_en_valeur1">GET</span> : Permet de <span class="mise_en_valeur4">récupérer des ressources</span>, comme par exemple le temps actuel sur un service de météo</li>
                    <li><span class="mise_en_valeur1">POST</span> : Permet de <span class="mise_en_valeur4">créer ou modifier une ressource</span>, comme la création d'un nouvel utilisateur sur votre application</li>
                    <li><span class="mise_en_valeur1">PUT</span> : Permet de <span class="mise_en_valeur4">modifier une ressource</span>, comme le nom de l'utilisateur que nous venons de créer avec POST</li>
                    <li><span class="mise_en_valeur1">DELETE</span> : Permet de <span class="mise_en_valeur4">supprimer une ressource</span>, comme un commentaire dans un fil de discussion. </li>
                </ul>
            </li>
            <li><span class="mise_en_valeur1">L’URL</span> : C’est l’<span class="mise_en_valeur4">adresse sur le service web que l’on souhaite atteindre</span>.<br />
            Un peu comme un identifiant unique afin que le web service comprenne ce que l’on veut.</li>
            <li><span class="mise_en_valeur1">Les données</span> : Lorsqu’on fait une requête pour enregistrer des données (par exemple un formulaire) il faut pouvoir <span class="mise_en_valeur4">envoyer ces données au service web</span>.</li>
        </ul>
<p>Une fois notre requête envoyée et traitée par le service web, celui-ci va vous répondre avec, entre autres, les informations suivantes :</p>
<ul>
<li>Les données : Les données que l’on a demandées : Une page HTML, etc…</li>
<li>- Le code HTTP : Code numérique qui nous indique comment s’est déroulée la requête; Voici les plus courants :
<ul>
<li><span class="mise_en_valeur1">200</span> : Indique que <span class="mise_en_valeur4">tout s’est bien passé</span></li>
<li><span class="mise_en_valeur1">400</span> : Indique que <span class="mise_en_valeur4">notre requête n’est pas conforme à ce qui est attendu</span></li>
<li><span class="mise_en_valeur1">401</span>: Indique que <span class="mise_en_valeur4">nous devons être authentifié pour faire cette requête</span></li>
<li><span class="mise_en_valeur1">403</span> : Indique que n<span class="mise_en_valeur4">ous sommes bien authentifié mais que nous ne sommes pas autorisé à faire cette requête</span></li>
<li><span class="mise_en_valeur1">404</span> : Indique que l<span class="mise_en_valeur4">a ressource demandée n’existe pas</span></li>
<li><span class="mise_en_valeur1">500</span>: Indique <span class="mise_en_valeur4">une erreur avec le service web</span></li>
</ul>
</li>
</ul>

<p>Voici une liste complète des codes HTTPs : https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP</p>
<p class="mise_en_valeur2">Il s'agit surtout d'une convention, rien n'oblige un service web à créer une ressource lors d'une requête POST par exemple, mais c'est généralement le cas.</p>

    </article>
    <nav id="sous_menu">
        <!-- Partie du JavaScript comme langage de programmation-->
        <p><a href="#ancre_sur_declaration_variable">Déclaration des variables</a></p>
        <p><a href="#ancre_sur_les_operateurs">Les opérateurs</a></p>
        <p><a href="#ancre_sur_les_constantes">Les constantes</a></p>
        <p><a href="#ancre_sur_les_types_de_donnees">Les types de données</a></p>
        <p><a href="#ancre_sur_les_objets_et_classes">Les objets et les classes</a></p>
        <p><a href="#ancre_sur_les_tableaux">Les tableaux</a></p>
        <p><a href="#ancre_sur_utilisation_javascript">Environnements d'application</a></p>
        <p><a href="#ancre_sur_les_conditions">Les conditions</a></p>
        <p><a href="#ancre_sur_les_expressions_et_operateurs_logiques">Les expressions et opérateurs logiques</a></p>
        <p><a href="#ancre_sur_les_boucles">Les boucles</a></p>
        <p><a href="#ancre_sur_les_erreurs">Les erreurs</a></p>
        <p><a href="#ancre_sur_les_fonctions">Les fonctions</a></p>
        <p><a href="#ancre_sur_les_instances_et_proprietes">Les instances et les propriétés</a></p>
        <p><a href="#ancre_sur_proprete_code">Organisation du code et des fichiers : Écologie</a></p>
        <p><a href="#ancre_sur_commentaires">Les commentaires</a></p>
        <p><a href="#ancre_sur_les_tests">Les tests</a></p>
        <p><a href="#ancre_sur_debogage">Déboguer notre fonction</a><br /><br /><br /></p>
        <!-- Partie du JavaScript pour le Web-->
        <p><a href="#ancre_sur_javascript_pour_le_web">Le Javascript pour le Web</a></p>
        <p><a href="#ancre_sur_le_dom">Le DOM</a></p>
        <p><a href="#ancre_sur_l'acces_au_dom">Accéder aux éléments du DOM</a></p>
        <p><a href="#ancre_sur_la_modification_du_dom">Modifier, ajouter, supprimer les éléments du DOM</a></p>
        <p><a href="#ancre_sur_window">L'objet window et les méthodes</a></p>
        <p><a href="#ancre_sur_evenements">Écouter les événements</a></p>
        <p><a href="#ancre_sur_clic_sur_element">Réagir lors d’un clic sur un élément</a></p>
        <p><a href="#ancre_sur_donnees_utilisateurs_avec_elements">Récupérer les données utilisateurs avec les événements</a></p>
        <p><a href="#ancre_sur_mouvement_souris">Détecter le mouvement de la souris</a></p>
        <p><a href="#ancre_sur_lecture_champ_texte">Lire le contenu d’un champ texte</a></p>
        <p><a href="#ancre_sur_api">Les API et les services web</a></p>


        



    </nav>
</section>
<footer>
    <h1>Les liens utiles</h1>
    <div id="les_liens">
        <ul>
            <li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1608357-memento-des-balises-html" title="Pratique pour vérifier les principales balises existantes." target="_blank" alt="Les balises HTML">Lien vers les balises HTML</a></li>
            <li><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3/1608902-memento-des-proprietes-css" title="Pratique pour vérifier les principales balises existantes." target="_blank" alt="Les balises HTML">Lien vers les balises CSS</a></li>
            <li><a href="https://html5up.net/" title="Site qui propose des idées de design et qui donne le code HTML et CSS tout prêt !" target="_blank" alt="Design et code HTML et CSS tout prêt.">Lien vers HTML5up</a></li>
        </ul>
        <ul>
            <li><a href="http://validator.w3.org" title="Site qui permet de vérifier que son code HTML est ok, pour cela il suffit de transmettre le .html et on a le résultat." target="_blank" alt="Validateur de code HTML">Lien vers un validator.w3</a></li>
            <li><a href="http://colorschemedesigner.com/csd-3.5/" title="Site de couleurs pratique :)" target="_blank" alt="Site de couleurs pratique">Lien vers colorschemedesigner</a></li>
            <li><a href src="https://caniuse.com/" title="Pratique pour vérifier la compatibilité d'un code ou d'un format (exemple : MP3) avec les différents navigateurs" target="_blank" alt="Site caniuse">Lien caniuse.com pour compatibilité navigateur</a></li>
        </ul>
        <ul>
            <li><a href="mon_cv/CV.html" title="Mon CV" target="_blank" alt="Mon CV">Lien vers mon CV</a></li>
            <li><a href="mon_cv/CV_v2.html" title="Mon CV" target="_blank" alt="Mon CV">Lien vers mon CV version 2</a></li>
            <li><a href="contact.html" title="Formulaire de contact" target="_blank" alt="Formulaire de contact">Me contacter</a></li>
            <li><a href="https://start.me/p/ELjr8p/html-css-markdown-git-et-github" title="Favoris" target="_blank" alt="Favoris">Favoris</a></li>
        </ul>
    </div>
</footer>
<?php
    include "./php/includes/templates/footer.tpl.php"
?>