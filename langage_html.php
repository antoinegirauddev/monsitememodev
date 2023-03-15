<?php 
    include "./php/includes/templates/header.tpl.php";
?>
                    <h2>Le langage HTML</h2>
                </div>    
<?php 
    include "./php/includes/templates/nav.tpl.php"
?>               
</header> 
<section>
    <article>
        <p class="introduction_langage">Envie d'apprendre le langage HTML, pas de soucis :D :<br /></p>
        
        <h1 id="ancre_sur_les_balises">Les balises</h1>
        <p>Les balises se repèrent facilement, elles sont entourées de « chevrons », c'est-à-dire des symboles <span class="mise_en_valeur1"><</span> et <span class="mise_en_valeur1">></span>, comme ceci :<br />
        <p>Certaines balises, comme &lt;bold&gt; ne sont pas à utiliser car elle sont deprecated/dépréciée, c'est à dire qu'elles sont vouées à disparaître.</p>
        <p class="citation_code_balise">
        &lt;balise&gt;
        </p>
        <p>
        Elles indiquent la nature du texte qu'elles encadrent, elles veulent dire par exemple : « Ceci est le titre de la page », « Ceci est une image », « Ceci est un paragraphe de texte », etc. <br />
        On distingue deux types de balises : les balises en paires et les balises orphelines.
        <ul>
            <li><p><strong>Les balises en paires</strong> qui s'ouvrent, contiennent du texte, et se ferment plus loin, par exemple :</p>
            <p class="citation_code_balise">&lt;titre&gt;Ceci est un titre&lt;/titre&gt;</p>
            <li><p><strong>Les balises orphelines</strong> qui servent le plus souvent à insérer un élément à un endroit précis (par exemple une image)<br />
            Il n'est pas nécessaire de délimiter le début et la fin de l'image, on veut juste dire à l'ordinateur « Insère une image ici », par exemple :</p>
            <p class="citation_code_balise">&lt;image /&gt;</p>
            <p class="italique">À noter que le / de fin n'est pas obligatoire pour cette dernière, toutefois afin de ne pas les confondre avec les balises en paires, mieux vaut le mettre</p>
            </li>
        </ul>
        <p class="italique">Entre les balises, on a ce qu'on appelle du <strong>contenu</strong>.</p>
        
        <h1 id="ancre_sur_les_atributs">Les attributs</h1>
        <p>Les attributs sont les options des balises, ils viennent les compléter pour donner des informations supplémentaires; L'attribut se place après le nom de la balise ouvrante (de cette façon : <span class="mise_en_valeur1">&lt;balise attribut="valeur"&gt;</span>), exemple :</p>
        <p class="citation_code_balise">&lt;img src="images/photo_chat.jpg" alt="Photo de mon chat" title="Il est beau mon chat hin ? :D " /&gt;</p>
        <p>En définitive, cela nous donne donc la structure suivante : <br />
        <span class="mise_en_valeur1">&lt;balise attribut="valeur"&gt;contenu&lt;balise de fin&gt;</span></p>


        <h1 id="ancre_sur_semantique">La sémantique et le SEO (référencement)</h1>
        <p>Avant toute chose, il est important de connaître la notion de <strong>sémantique</strong>.</p>
        <p>La sémantique fait référence au sens d'une partie de code, par exemple "quel effet aura cette balise h1", en d'autre mot, quel est son rôle.</br>
        Dans le cadre de l'indexation des moteurs de recherche comme Google ou Ecosia, la sémantique est importante car elle va être prise en compte pour le référencement.<br /></p>
        <p><strong>SEO (Search Engine Optimization ou, en français, Optimisation pour les moteurs de recherche)</strong> est le processus permettant de rendre un site web plus visible dans les résultats de recherche, également appelé amélioration des classements de recherche.</p>
        <p>Voici quelques exemples de balises sémantiques importantes, la liste complète est accessible dans un lien plus bas : &lt;article&gt; ,&lt;aside&gt;, &lt;details&gt;, &lt;figcaption&gt;,  &lt;figure&gt;, &lt;footer&gt;, &lt;header&gt;, &lt;main&gt;, &lt;mark&gt;, &lt;nav&gt;, &lt;section&gt;, &lt;summary&gt;, &lt;time&gt;..</p>
        <p>Les méthodes de SEO se répartissent en trois grandes classes :</p>
        <ul>
            <li>technique : Marque le contenu en utilisant la sémantique HTML. Lors de l'exploration du site Web, les robots d'exploration ne doivent trouver que le contenu que vous souhaitez indexer.</li>
            <li>copie-l'écriture (copywriting) : Ecrit du contenu en utilisant le vocabulaire de vos visiteurs; Utilise du texte ainsi que des images pour que les robots puissent comprendre le sujet.</li>
            <li>popularité : Vous obtenez plus de trafic lorsque d'autres sites établis pointent vers votre site.</li>
        </ul>
        <p>À noter que d'autres critères rentrent en jeux : l'adaptation mobile (Responsive), l'autorité du nom de domaine, l'indice de confiance de la page, la pertinence des pages liantes, ..</p>
        <p>Voici quelques lients pour comprendre cela et utiliser les bonnes méthodes pour référencer son site : </p>
        <ul>
            <li><a href="https://developers.google.com/search?hl=fr&card=owner&filter=localized" target="_blank">Explication par Google Webmasters : Propose de l'aide aux webmasters pour être visible sur le web (documentation et outils)</a></li>
            <li><a href="https://www.w3schools.com/tags/ref_byfunc.asp" target="_blank">Les balises à utilier en sémantique</a></li>
            <li><a href="https://fr.wikipedia.org/wiki/Optimisation_pour_les_moteurs_de_recherche" target="_blank">Optimisation pour les moteurs de recherche, par Wikipédia</a></li>
        </ul>
        <p>Par conséquent, il est nécessaire d'utiliser la balise &lt;h1&gt; qu'une et une seule fois dans le site car ce sera le titre principal, les autres titres seront en h2 ou autre sous-titre<br />
        De même, il sera important d'utiliser, pour le menu, une balise &lt;nav&gt; plutôt qu'un div quelconque; Et pour la partie principale on utilisera une balise &lt;main&gt; et des sections ou articles ou aside pour l'intérieur, etc..<br />
        La balise h1 a été utilisée à tord, sans prendre en compte la sémantique, dans ce site local, mais vu qu'il est local et qu'il ne sera pas hébergé sur internet, qu'il n'a pas vocation à être visité par d'autre ou à être indexé, ce n'est pas si important dans ce cadre (même si cela aurait été plus correct :p).</p>

        <h1 id="ancre_sur_bem">Méthodologie BEM et convention de nommage</h1>
        <p>Les méthodologies vont permettre de coder avec une certaine rigueur, et le code CSS va donc être touché également.</p>
        <h2>Méthodologie BEM</h2>
        <p><strong>BEM (Blocs – Éléments – Modificateurs)</strong> envisage la composition d’une page web en deux types de "composants" :</p>
        <ul>
            <li>Le bloc est un composant «parent» contenant un ou plusieurs éléments. Le bloc peut être indépendant, et lorsque pris hors contexte d’une page spécifique, garde du sens; Par exemple : un menu, un pied de page (footer), un menu latéral (sidebar).</li>
            <li>L’élément est un composant appartenant à un bloc. Il faut considérer un élément comme l’enfant d’un bloc; Par exemple : le titre d’un bloc, une page d’un menu.</li>
            <li>Enfin BEM introduit le concept de modificateur : Le modificateur va introduire une notion de comportement. Il se modifie en fonction du contexte de la page ou d’une action de l’utilisateur. Le modificateur peut aussi bien être appliqué à un bloc qu’à un élément; Par exemple : un fond de couleur différente pour une page spécifique, un élément rendu visible (ou caché) après un clic de l’utilisateur.</li>
        </ul>
        <p>En BEM, toutes les classes CSS sans exception commencent nécessairement par le nom du bloc. Par exemple pour le menu : .menu.</p>
        <p>Si on souhaite ajouter dans notre bloc .menu un élément item, on va le nommer .menu__item. On sépare le bloc de l’élément par deux underscores. <br />
        Le code HTML correspondrait à cela :</p>
        <p class="citation_code_balise">
        &lt;div class="menu"&gt;
        &lt;div class="menu__item">Page 1&lt;/div&gt;
        &lt;/div&gt;
        </p>
        <p>Il est donc facile de lire le code et de comprendre que .menu__item est un élément de .menu.</p>
        <p>Pour le modificateur, on sépare le bloc ou l’élément par deux tirets .bloc__element--modificateur :</p>
        <p class="citation_code_balise">
        &lt;div class="menu"&gt;
            &lt;div class="menu__item">Page 1&lt;/div&gt;
            &lt;iv class="menu__item  menu__item--is-open">Page 2&lt;/div&gt;
            &lt;div class="menu__item">Page 3&lt;/div&gt;
        &lt;/div&gt;
        </p>
        <p>Cette norme de rédaction des classes est une recommandation, vous êtes libre d’utiliser un underscore plutôt que deux, ou faire du camel case. Il faut simplement respecter une hiérarchie et rendre le code aussi lisible que possible.</p>
        <p>Voici l’exemple du code CSS (simplifié) pour le bloc de l’illustration ci-dessus :</p>
        <p class="citation_code_balise">
        .project__categories {
            padding: 10px;
            display: inline-block;
        }
        .project__categories-item {
            font-size: 13px;
            display: inline-block;
            background-color: steelblue;
            color: blue;
        }
        /* modificateur pour catégorie active */
        .project__categories-item--is-active {
            background-color: white;
        }
        </p>


        <p>On l'aura compris, BEM proscrit l’utilisation de l’attribut <strong>id</strong>.</p>
        <p>Un lien pour aller plus loin : <a href="https://alticreation.com/bem-pour-le-css/" target="_blank">https://alticreation.com/bem-pour-le-css/</a></p>
        
        <h2>Les conventions de nommage</h2>
        <p>La convention de nommage va rajouter une rigueur en plus de la méthodologie, cela correspond à une règle qu'on se fixe pour la notation/le nommage</p>
        <p>La plus utilisée est camelCase, ainsi si on a un span que l'on voudra appelé "grasetitalique" (sans espace car les noms des spans ne doivent pas contenir d'espace), on le nommera ainsi : "grasEtitalique" <br />
        On pourrait aussi utiliser sur snake_case, ce qui donnerait : gras_et_italique</p>
        <p>Du coup, libre à toi d'utiliser celle que tu veux, du moment que tu respectes ta propre règle et que tu t'y retrouves.</p>
        <img id="convention" src="images_pour_mise_en_forme/convention.webp" alt="cnvention" />

        <h1 id="ancre_sur_structure_base_page_html5">Structure de base d'une page HTML5</h1>
        <p>Voici le code source qui correspond à une page HTML5 :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;<br />
            &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;title&gt;Titre&lt;/title&gt;
            &lt;/head&gt;<br />
            &lt;body&gt;<br /><br /><br />
            &lt;/body&gt;<br />
        &lt;/html&gt;<br />
        </p>
        <p>Elle est composée de :</p>
            <ul>
                <li><p>La balise <strong>&lt;!DOCTYPE html&gt;</strong>, cette ligne s'appelle le <span class="mise_en_valeur1">doctype</span>, elle indique qu'il s'agit d'une page web HTML5</p></li>
                <li><p>Les balises <strong>&lt;html&gt;</strong> et <strong>&lt;/html&gt;</strong> qui englobent tout le contenu de la page</p></li>
                <li><p>L'entête <strong>&lt;head&gt;</strong>  <strong>&lt;/head&gt;</strong> est la section qui donne des informations générales sur la page, comme le titre, l'encodage, etc..</p>
                    <ul>
                        <li><p><strong>&lt;meta charset="utf-8" /&gt;</strong> indique <span class="mise_en_valeur1">l'encodage (appelé aussi "charset")</span> utilisé par le fichier .html, ici "<span class="mise_en_valeur1">utf-8"</span><br />
                        Ce dernier indique la façon dont le fichier est enregistré, c'est lui qui détermine comment les caractères spéciaux vont s'afficher (accents, idéogrammes chinois et japonais, caractères arabes, etc.)<br />
                        Il existe de nombreux encodages, mais l'UTF8 gère bien la plupart des caractères spéciaux<br />
                        Il ne suffit pas de dire que le fichier est en UTF-8, il faut aussi que le fichier soit bien enregistré en UTF-8, ce qui est le cas maintenant par défaut dans la plupart des éditeurs de texte<br />
                        Si les accents s'affichent mal par la suite, c'est qu'il y a un problème avec l'encodage, il faudra alors vérifiez que la balise meta indique bien UTF-8, et que le fichier est enregistré en UTF-8 (sous Sublime Text, aller dans le menu File>Save with Encoding>UTF-8 pour s'assurer que le fichier est enregistré en UTF-8.)</p>
                        </li>
                        <li>
                         <p><strong>&lt;title&gt;</strong> <strong>&lt;/title&gt;</strong>indique le <span class="mise_en_valeur1">titre de la page</span>, ce dernier sera affiché dans l'<span class="mise_en_valeur1">onglet de la page web</span>, mais aussi dans les <span class="mise_en_valeur1">résultats de recherche des moteurs de recherche</span> comme sur Google</p>
                        </li>
                    </ul>
                </li>
                <li><p>Le corps <strong>&lt;body&gt;</strong> <strong>&lt;/body&gt;</strong> qui contiendra la partie principale de la page, autrement dit tout ce qui sera affiché à l'écran</p>
                </li>
            </ul>
        </p>
        <h1 id="ancre_sur_les_commentaires">Les commentaires</h1>
        <p>Un commentaire en HTML est un texte qui sert simplement de mémo, il n'est pas affiché, il n'est pas lu par l'ordinateur, cela ne change rien à l'affichage de la page, mais il est très utile pour s'y retrouver dans le code source (pour celui qui le crée ou le reprend ensuite) notamment quand cela fait longtemps qu'on ne s'est pas replongé dedans, et on l'insère comme suite :</p>
        <p class="citation_code_balise">
        &lt;!-- Ceci est un commentaire --&gt;    
        </p>

        <h1 id="ancre_sur_accessibilite_code_source">Accessibilité du code source</h1>
        <p>Il est important de garer en mémoire que tout le monde peut voir le code HTML d'une page web en faisant un clic droit sur la page et en sélectionnant "Afficher le code source de la page", aussi il ne faut jamais mettre de mot de passe en clair dans le code HTML ni aucune autre finromations sensibles.</p>

        <h1 id="ancre_sur_les_paragraphes">Les paragraphes</h1>
        <p>La plupart du temps, lorsqu'on écrit du texte dans une page web, on le fait à l'intérieur de paragraphes grâce à la balise <strong>&lt;p&gt;</strong> <strong>&lt;/p&gt;</strong>, exemple : </p>
        <p class="citation_code_balise">
        &lt;p&gt;Bienvenue sur ce super site :D&lt;/p&gt;    
        </p>
            
        <h1 id="ancre_sur_les_titres">Les titres</h1>
        <p>De <strong>h1</strong> à <strong>h6</strong>, il y a 6 niveaux de titres différents qui sont gérés selon leur importance :</p>
        <ul>
            <li><strong>&lt;h1&gt;</strong> <strong>&lt;/h1&gt;</strong> = Titre très important</li>
            <li><strong>&lt;h2&gt;</strong> <strong>&lt;/h2&gt;</strong> = Titre important</li>
            <li><strong>&lt;h3&gt;</strong> <strong>&lt;/h3&gt;</strong> = Titre moyennement important</li>
            <li><strong>&lt;h4&gt;</strong> <strong>&lt;/h4&gt;</strong> = Titre moins important</li>
            <li><strong>&lt;h5&gt;</strong> <strong>&lt;/h5&gt;</strong> = Titre pas important</li>
            <li><strong>&lt;h6&gt;</strong> <strong>&lt;/h6&gt;</strong> = Titre vraiment, mais alors là vraiment pas important du tout</li>
        </ul>
        <p>L'importance du titre ne dépend pas de la taille mais bien de la structuration de la page; Pour la taille cela se réglera en CSS.</p>
        <p class="mise_en_valeur2">Attention à ne pas confondre la balise de titre qu'on utilise dans le body, avec title qu'on utilise dans le head pour définir le titre de la page web qui s'affiche dans l'onglet du navigateur.</p>

        <h1 id="ancre_sur_la_mise_en_valeur">La mise en valeur</h1>
        <p>Plusieurs balises permettent de mettre en valeur du texte, encore une fois il s'agit là de marquer du texte encadré par une balise en paire <span class="mise_en_valeur1">pour lui donner du sens</span>, et pas de le mettre dans telle ou telle taille via le HTML car la taille, couleur, etc.. se gère en CSS.<br />
        Donc côté HTML, on a le choix entre les balises suivantes :</p>
        <ul>
            <li><strong>&lt;em&gt;</strong> <strong>&lt;/em&gt;</strong> qui correspond au fait de mettre <span class="mise_en_valeur1">un peu en valeur</span> le texte</li>
            <li><strong>&lt;strong&gt;</strong> <strong>&lt;/strong&gt;</strong> qui correspond au fait de mettre <span class="mise_en_valeur1">bien en valeur</span> le texte; strong voulant dire "fort" (ce qui équivaut ici à "important")</li>
            <li><strong>&lt;mark&gt;</strong> <strong>&lt;/mark&gt;</strong> qui fait également ressortir visuellement une portion du texte</li>
        </ul>
        <p>Par défaut le texte encadré par em est mis en italique, strong en gras, et mark en souligné, mais encore une fois il s'agit là uniquement <span class="mise_en_valeur1">d'indiquer le sens du texte</span> puisque c'est en CSS qu'on dit que strong em ou mark prend telle ou telle mise en forme.<br />
        Autrement dit, en HTML strong met en gras par défaut, mais c'est juste une mise en forme automatique par le navigateur (son interprétation par défaut en fait), on décidera ensuite en CSS si strong met en gras ou non ou encore en violet pastel encadré par un orange ombragé en vert d'une épaisseur de 3 cm ^^.</p>
        <p class="mise_en_valeur1">Ne pas oublier : HTML pour le fond, CSS pour la forme.</p>
        <p class="mise_en_valeur2">Sans compter que les moteurs de recherche relèvent parfois ce qui est marqué comme important dans les pages HTML pour les ressortir, grâce justement aux balises strong, em, mark, etc.. donc donner du sens à une portion de texte, prend tout son sens ;)</p>
        
        <h1 id="ancre_sur_les_listes">Les listes</h1>
        <p>Les listes sont souvent très pratiques pour structurer le texte et ordonner les informations, je les utilise d'ailleurs souvent dans les pages d'explications (CSS, HTML.. et c'est tout pour le moment :p)</p>
        <p>Il existe deux types de listes :</p>
        <ul>
            <li><span class="mise_en_valeur1">Liste Non-ordonnée</span> ou "<span class="mise_en_valeur1">liste à puces"</span>, exemple :
            
             <ul>
                     <li>Papillon</li>
                     <li>Arbre</li>
                     <li>Lutin</li>
            </ul>
            Ici on crée une liste d'élément sans notion d'ordre, on utilise pour cela la balise en paire <strong>&lt;ul&gt;</strong> <strong>&lt;/ul&gt;</strong> avec à l'intérieur de celle-ci la balise en paire <strong>&lt;li&gt;</strong> <strong>&lt;/li&gt;</strong> pour chaque ligne, exemple :
            <p class="citation_code_balise">
            &lt;ul&gt;
                &lt;li&gt;Papillon&lt;/li&gt;
                &lt;li&gt;Arbre&lt;/li&gt;
                &lt;li&gt;Lutin&lt;/li&gt;
            &lt;/ul&gt;
            </p>
            <p>Il est également possible de faire des listes complexes en imbriquant des listes à puces (créer une liste à puces dans une liste à puces, c'est d'ailleurs le cas ici), pour ce faire il suffit d'ouvrir une seconde balise &lt;ul&gt; &lt;/ul&gt; à l'intérieur d'un élément &lt;li&gt; &lt;/li&gt;</p>
            <p>Enfin, on peut enlever les puces de la liste non-ordonnée grâce au code CSS suivant :</p>
            <p class="citation_code_balise">
            ul
            {
            list-style-type: none;
            }
            </p>
            </li>
            <li><span class="mise_en_valeur1">Liste ordonnée</span> ou "<span class="mise_en_valeur1">liste numérotée"</span> ou encore "<span class="mise_en_valeur1">énumération"</span>, exemple :

            <ol>
                    <li>Je me réveille avec le chant des oiseaux</li>
                    <li>Je jardine</li>
                    <li>Je me couche sous les étoiles</li>
            </ol>
            <p>Ici on crée une liste d'élément avec une notion d'ordre, on utilise pour cela la balise en paire <strong>&lt;ol&gt;</strong> <strong>&lt;/ol&gt;</strong> à la place de ul, puis toujours à l'intérieur de celle-ci la balise en paire <strong>&lt;li&gt;</strong> <strong>&lt;/li&gt;</strong> pour chaque ligne, exemple :</p>
            <p class="citation_code_balise">
            &lt;ol&gt;
                &lt;li&gt;Je me réveille avec le chant des oiseaux&lt;/li&gt;
                &lt;li&gt;Je jardine&lt;/li&gt;
                &lt;li&gt;Je me couche sous les étoiles&lt;/li&gt;
            &lt;/ol&gt;
            </p>
            </li>
        </ul>

        <h1 id="ancre_sur_les_liens">Les liens</h1>
        <p class="mise_en_valeur2">Nous verrons ici la différence entre les <span class="mise_en_valeur1">liens absolus</span> (lien en entier d'un site comme "https://nomdusite.fr") et les <span class="mise_en_valeur1">liens relatifs</span> (lien vers un fichier de son propre site comme "contenu/autredossier/page2.html")</p><br />

        <h2>Lien vers un autre site</h2>
        <p>On peut faire un lien d'une page a.html vers une page b.html mais aussi vers un autre site (par exemple https://oclock.io/), dans les deux cas le fonctionnement est le même, on utilise la balise ouvrante <strong>&lt;a&gt;</strong> ainsi que l'attribut <strong>href</strong> pour indiquer vers quelle page le lien amène (ce qui donne <strong>&lt;a href="liendusite"&gt;</strong>, puis on cite le texte qui va apparaître pour le lien, et on utilise la balise fermante <strong>&lt;/a&gt;</strong>, ce qui donne la formule :</p>
        <p><strong>&lt;a href="liendusite"&gt;texte sur le quel on va cliquer pour aller sur le site&lt;/a&gt;</strong> <br /><br />
        Exemple :</p>
        <p class="citation_code_balise">
            &lt;a href="https://oclock.io/"&gt;O'Clock&lt;/a&gt;
        </p>
        <p>Si on a un lien à faire vers un site qui comporte des &, il faudra remplacer & par l'équivalent en html avec <img src="images_pour_mise_en_forme/correspondance.png" alt="correspondance et commercial" /></p>
        <p>Ce type de lien s'appelle un <span class="mise_en_valeur1">lien absolu</span> car on indique l'adresse complète, mais pour faire des liens entre les pages de mon site je vais utiliser un <span class="mise_en_valeur1">lien relatif</span></p><br />
        
        <h2>Lien vers une page de son propre site</h2>
        <p>Ici on va donc utiilser les <span class="mise_en_valeur1">liens relatifs</span> permettant de cibler un lien vers une autre page de son site situé <span class="mise_en_valeur1">dans un même dossier</span> ou <span class="mise_en_valeur1">dans un autre dossier</span>.</p>
        <p>Pour un <span class="mise_en_valeur1">même dossier</span>, par exemple si on veut pointer vers une page Explication_css.html, on utilisera le code suivant :</p>
        <p class="citation_code_balise">
        &lt;a href="Explication_css.html"&gt;Explications du langage CSS&lt;/a&gt;
        </p>        
        <p>Ce qui mis en condition avec une phrase d'explication donnera un truc du genre :</p>
        <p class="citation_code_balise">
        &lt;p&gt;Cliquer sur le lien suivant pour arriver sur la page expliquant le langage CSS :&lt;a href="Explication_css.html"&gt;Explications du langage CSS&lt;/a&gt;&lt;/p&gt;
        </p>
        <p><em>Mise en pratique de l'exemple :p</em> :</p>
        <p>Cliquer sur le lien suivant pour arriver sur la page expliquant le langage CSS :<a href="Explication_css.html">Explications du langage CSS</a></p><br />
        <p>Pour le cas où la page cible est dans un <span class="mise_en_valeur1"> dossier différent</span>, il faudra utiliser la navigation à travers la hiérarchie des dossiers, pour aller dans un sous-dossier ou un dossier du dessus ou traverser plusieurs sous/sur dossiers.</p>
        <p>Admettons que page1.html (là où on est) se trouve dans le dossier principal, mais que page2.html se trouve dans un <span class="mise_en_valeur1">sous-dossier</span> "autre_dossier", alors le lien serait <strong>&lt;a href="autre_dossier/page2.html"&gt;</strong></p>
        <p>Admettons que page1.html (là où on est) se trouve dans le dossier principal, mais que page2.html se trouve dans un <span class="mise_en_valeur1">dossier au-dessus</span> "autre_dossier", alors le lien serait <strong>&lt;a href="..autre_dossier/page2.html"&gt;</strong></p>
        <p>En effet pour remonter dans un dossier qui se trouve plus haut, on utilise "<strong>..</strong>".<br />
        Voici un résumé des liens relatifs :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/explication_arborescence.png" alt="explication arborescence chemin relatif" /></span></p>
        <p class="mise_en_valeur2">(on clique sur l'image pour la voir plus grande, et oui j'ai fait des progrès en CSS ;))</p><br />

        <h2>Lien vers une ancre</h2>
        <p>Une ancre est une sorte de point de repère que l'on peut mettre dans les pages HTML notamment lorsqu'elles sont très longues, ou tout simplement quand on veut pointer à un endroit précis de la page (via un sommaire par exemple).</p>
        <p>Pour créer une ancre cela se fait en deux temps, d'abord on marque l'endroit à cibler, pour cela il suffit de rajouter l'attribut <strong>id</strong> à une balise (n'importe quelle balise comme par exemple un titre) et de lui donner un p'tit nom, exemple :</p>
        <p class="citation_code_balise">
        &lt;h1 id="nom_de_mon_ancre"&gt;Les liens&lt;/h1&gt;
        </p>
        <p>Ensuite il reste à créer un lien comme d'hab' mais cette fois l'attribut <strong>href</strong> contiendra un <strong># suivi du nom de l'ancre</strong>, exemple :</p>
        <p class="citation_code_balise">
        &lt;a href="#nom_de_mon_ancre"&gt;Cliquer ici pour aller à l'ancre&lt;/a&gt;
        </p>
        <p>Mise en pratique :D :</p>
        <a href="#ancre_sur_les_liens">Cliquer ici pour arriver sur l'ancre (attention je suis sympa je préviens, ça va remonter un peu :p)</a><br />
        <p class="mise_en_valeur2"><span class="mise_en_valeur3">L'attribut <strong>id</strong> sert à donner un nom « unique » à une balise, pour s'en servir de repère.</span><br />
        Et on a pas fini d'entendre parler de cet attribut.<br />
        Ici, on s'en sert pour faire un lien vers une ancre mais, en CSS, il sera très utile pour "repérer" une balise précise.<br />
        À noter qu'il faut éviter de créer des id avec des espaces ou des caractères spéciaux; Utiliser simplement, des lettres et des chiffres pour que la valeur soit reconnue par tous les navigateurs.</p><br />

        <h2>Lien vers une ancre dans une autre page (le mégamix)</h2>
        <p>L'idée, c'est de faire un lien qui ouvre une autre page ET qui amène directement à une ancre située plus bas sur cette page.</p>
        <p>En fait pour cela il suffit de mettre le nom de la page suivi d'un dièse suivi du nom de l'ancre, exemple :</p>
        <p class="citation_code_balise">
        &lt;a href="Explication_css.html#ancre_sur_les_bordures"&gt;Cliquer ici pour arriver sur le chapitre des bordures dans la page d'explication du CSS".&lt;/a&gt;
        </p>
        <p> Mise en pratique :</p>
        <a href="Explication_css.html#ancre_sur_les_bordures">Cliquer ici pour arriver sur le chapitre expliquant les bordures dans la page d'explication du CSS.</a><br /><br /><br />
        
        <h2>Lien avec une infobulle</h2>
        <p>Il est également possible de mettre une infobulle au survol d'un lien, cela peut être pratique pour informer le visiteur avant même de cliquer sur le lien</p>
        <p>Pour cela on utilise l'attribut <strong>title</strong>, ainsi si on reprend l'exemple précédent :
        <p class="citation_code_balise">
        &lt;a href="Explication_css.html#ancre_sur_les_bordures" title="Si tu cliques ici tu seras redirigé vers le chapitre des bordures en CSS"&gt;Cliquer ici pour arriver sur le chapitre des bordures dans la page d'explication du CSS.&lt;/a&gt;
        </p>
        <p> Mise en pratique :</p>
        <a href="Explication_css.html#ancre_sur_les_bordures" title="Si tu cliques ici tu seras redirigé vers le chapitre des bordures en CSS">Chapitre sur les bordures en CSS.</a><br /><br /><br />

        <h2>Lien qui ouvre une nouvelle fenêtre</h2>
        <p>Autre option possible avec l'attribut <strong>target="_blank"</strong>, ce dernier va forcer l'ouverture dans une nouvelle fenêtre(ou un nouvel onglet, choix fait par le navigateur), exemple :</p>
        <p class="citation_code_balise">
        &lt;a href="Explication_css.html#ancre_sur_les_bordures" title="Si tu cliques ici tu seras redirigé vers le chapitre des bordures en CSS" target="_blank"&gt;Cliquer ici pour arriver sur le chapitre des bordures dans la page d'explication du CSS.&lt;/a&gt;
        </p>
        <p> Mise en pratique :</p>
        <a href="Explication_css.html#ancre_sur_les_bordures" title="Si tu cliques ici tu seras redirigé vers le chapitre des bordures en CSS" target="_blank">Chapitre sur les bordures en CSS.</a><br /><br /><br />

        <h2>Lien qui envoi un e-mail</h2>
        <p>Le principe reste le même sauf que pour le lien cible entre guillemet après l'attribut <strong>href=</strong> on utilise <strong>mailto: suivi de l'adresse e-mail</strong>, exemple :</p>
        <p class="citation_code_balise">
        &lt;a href="mailto:psykadelicdream@free.fr"&gt;Envoie moi un mail :)&lt;/a&gt;
        </p>
        <p>Et ici j'ai rajouté l'attribut <strong>title</strong> pour avoir une infobulle :</p>
        <p class="citation_code_balise">
        &lt;a href="mailto:psykadelicdream@free.fr" title="Clique ici pour m'envoyer un mail ;)"&gt;Envoie moi un mail :)&lt;/a&gt;
        </p>
        <p> Mise en pratique :</p>
        <a href="mailto:psykadelicdream@free.fr" title="Clique ici pour m'envoyer un mail ;)">Envoie moi un mail :)</a>

        <h2>Lien pour télécharger un fichier</h2>
        <p>Même principe, on utilise la balise <strong>a</strong> avec l'attribut <strong>href=</strong> où l'on mettra le nom du fichier à télécharger entre guillemet, exemple :</p>
        <p class="citation_code_balise">
        &lt;a href="images_pour_mise_en_forme/art_floral.jpg" title="Clique ici pour télécharger la photo d'une de nos parcelles de fleurs ;)"&gt;Télécharger une belle photo de fleurs :)&lt;/a&gt;
        </p>
        <p> Mise en pratique :</p>
        <a href="images_pour_mise_en_forme/art_floral.jpg" title="Clique ici pour télécharger la photo d'une de nos parcelles de fleurs ;)">Télécharger une belle photo de fleurs :)</a>
        <p class="mise_en_valeur2">Si le navigateur voit qu'il peut traiter l'élément il le lira, sinon il proposera une fenêtre de téléchargement, bien qu'on peut, pour une image par exemple, toujours faire un clic droit puis cliquer sur "Enregistrer la cible du lien sous..." pour forcer le téléchargement plutôt que de l'afficher dans le navigateur.</p>

        <h1 id="ancre_sur_les_images">Les images</h1>
        <h2>Le format</h2>
        <p>Nous voilà dans le chapitre des images, il est important de choisir le bon format tant pour la qualité que pour le poids et donc le temps de chargement du site, voici donc pour commencer une présentation des principaux types d'images :</p>
        <ul>
            <li><span class="mise_en_valeur1">Le JPEG</span> : Format conçu pour réduire le poids des photos qui peut comporter plus de <span class="mise_en_valeur4">16 millions de couleurs</span> différentes, l'extension est .jpg ou .jpeg.<br />
            <span class="mise_en_valeur2">À noter que le JPEG détorie un peu la qualité de l'image d'une façon généralement imperceptible, ce qui le rend efficace pour réduire le poids d'une photo, mais risque de "baver" un peu si ce n'est pas une photo, dans ce cas mieux vaut utiliser le format PNG.</span></li><br />
            <li><span class="mise_en_valeur1">Le PNG</span> : Fromat adapté à la plupart des graphiques (en gros tout ce qui n'est pas une photo), il a deux avantages, il peut être rendu transparent et il n'altère pas la qualité de l'image.<br />
            Il existe en deux versions en fonction du nombre de couleurs que doit comporter l'image :
            <ul>
                <li><span class="mise_en_valeur4">PNG 8 bits (256 couleurrs)</span></li>
                <li><span class="mise_en_valeur4">PNG 24 bits (16 millions de couleurs)</span></li>
            </ul>
            <p class="mise_en_valeur2">À noter que le JPEG a une compression plus puissante sur les photos, donc les photos en JPEG se chargeront plus vite que si elles étaient en PNG, mieux vaut donc réserver le format JPEG aux photos.</p>
            </li><br />
            <li><span class="mise_en_valeur1">Le GIF</span> :  Le GIF est limité à <span class="mise_en_valeur4">256 couleurs</span>.<br />
            Bien que le PNG est meilleur que le GIF notamment pour la légèreté et la transparence de meilleure qualité, le GIF a un avantage certain : IL peut être animé :D
            <p><img id="chat_arc_en_ciel" src="images_pour_mise_en_forme/chat_arc_en_ciel.gif" alt="chat arc en ciel" /></p>
            </li>
         </ul>
         <p>Donc en résumé, il existe un format adpaté à chaque image, voici un résumé du format à adopter en fonction de l'image :</p>
         <ul>
            <li>Une photo : Utiliser un JPEG.</li>
            <li>N'importe quel graphique avec peu de couleurs (moins de 256 couleurs) : Utiliser un PNG 8 bits ou éventuellemnt un GIF.</li>
            <li>N'importe quel graphique avec beaucoup de couleurs : Utiliser un PNG 24 bits.</li>
            <li>Une image animée : Utiliser un GIF.</li>
         </ul>
         <p>Par ailleurs, deux erreurs sont à éviter :</p>
         <ul>
            <li>Ne pas utiliser les autres formats comme le BITMAP (.bmp) car ils ne sont souvent pas compressés et ne sont donc pas adaptés au Web car le chargement serait trop long.</li>
            <li>Choisir correctement le nom de l'image, éviter les caractère spéciaux ou les majuscules, préférer donc un nom en minuscules sans accent ni espace, mais on peut utiliser l'underscore "_" notamment pour remplacer les espaces.</li>
         </ul>

        <h2>Insertion</h2>
        <p>Les présentations étant faites, voyons maintenant comment insérer une image.<br />
        Cela se fait grâce à la <span class="mise_en_valeur1">balise orpheline</span> <strong>&lt;img /&gt;</strong>.<br />
        <span class="mise_en_valeur2">Pour rappel une balise orpheline (comme &lt;br /&gt;) veut dire qu'on a pas besoin de mettre la balise ouvrante ET la balise fermante, ici on pas besoin de délimiter une portion de texte mais uniquement d'insérer une image à un endroit précis.</span></p>
        <p>La balise <strong>&lt;img /&gt;</strong> doit être accompagnée de deux attributs obligatoires :</p>
        <ul>
            <li><strong>src</strong> qui permet d'indiquer où se trouve l'image, grâce à un chemin <em>absolu</em>(src="https://site.fr/arc_en_ciel.png") ou <em>relatif</em>(src="images/arc_en_ciel.png").</li>
            <li><strong>alt</strong> quant à lui signigie "<span class="mise_en_valeur4">texte alternatif</span>", c'est un texte court qui décrit l'image, et il est important de le mettre car il apparaît à la place de l'image quand elle ne peut pas être chargée ou aussi dans les navigateurs de personnes non-voyantes par exemple, et cela aide aussi les robots des moteurs de recherche pour les recherches d'images.</li>
        </ul>
        <p class="mise_en_valeur3">Les images doivent se trouver à l'intérieur d'un paragraphe (&lt;p&gt;&lt;/p&gt;), sauf s'il s'agit de figure (voir chapitre sur les figures plus bas).</p>

        <h2>Infobulle</h2>
        <p>L'attribut pour afficher une infobulle (facultatif mais utile) est le même que pour les liens : <strong>title</strong>, exemple :</p>
        <p class="citation_code_balise">
        &lt;p&gt;Voici une photo de notre jardin : &lt;br /&gt;
        &lt;img src="images_pour_mise_en_forme/art_floral.jpg" alt="Photo de fleurs" title="Ceci est la photo d'une de nos parcelles de fleurs ;)" /&gt;
        &lt;/p&gt;
        </p>
        <p> Mise en pratique :</p>
        <p>Voici une photo de notre jardin :<br />
        <img id="photo_fleur" src="images_pour_mise_en_forme/art_floral.jpg" alt="Photo de fleurs" title="Ceci est la photo d'une de nos parcelles de fleurs ;)" />
        </p>
        
        <h2>Miniature cliquable</h2>
        <p>Si l'image est trop grosse on peut afficher une miniature (mais aussi la réduire en CSS), pour ce faire on redimensionne l'image via un logiciel comme gimp ou resizeimage et on place la miniature dans un dossier (le même que l'image originale éventuellement, ou un dossier "miniature" par exemple), puis on affiche la miniature sur la page et on fait un lien vers l'image originale, exemple :</p>
        <p class="citation_code_balise">
        &lt;p&gt;Voici une photo de notre jardin : &lt;br /&gt;
        &lt;h ref="images_pour_mise_en_forme/art_floral.jpg"&ht; &lt;img src="images_pour_mise_en_forme/miniature_art_floral.jpg" alt="Photo de fleurs" title="Ceci est la photo d'une de nos parcelles de fleurs ;)" /&gt;&lt;/a&gt;
        &lt;/p&gt;
        </p>
        <p> Mise en pratique :</p>
        <p>Voici une photo de notre jardin :<br />
        <a href="images_pour_mise_en_forme/art_floral.jpg"><img src="images_pour_mise_en_forme/miniature_art_floral.jpg" alt="Photo de fleurs" title="Ceci est la photo d'une de nos parcelles de fleurs ;)" />
        </a>
        </p>

        <h1 id="ancre_sur_les_figures">Les figures</h1>
        <p>Les figures sont des éléments qui viennent enrichir le texte pour compléter les informations de la page, elles peuvent être de différents types :</p>
        <ul>
            <li>images</li>
            <li>code source</li>
            <li>citations</li>
            <li>etc..</li>
        </ul>
        <p>En gros tout ce qui vient illustrer du texte, est une figure, et pour ça on a la balise <strong>&lt;figure&gt; &lt;/figure&gt;</strong>, voici comment l'utiliser :</p>
        <p class="citation_code_balise">
        &lt;figure&gt;Voici une photo de notre jardin : &lt;br /&gt;
        &lt;img src="images_pour_mise_en_forme/explication_arborescence.png" alt="explication arborescence chemin relatif" /&gt;
        &lt;/figure&gt;
        </p>
        <p>Une figure est le plus souvent accompagné d'une légende, on utilisera ici la balise <strong>&lt;figcaption&gt;</strong> à l'intérieur de la balise <strong>&lt;figure&gt; &lt;/figure&gt;</strong> :</p>
        <p class="citation_code_balise">
        &lt;figure&gt;
        &lt;img src="images_pour_mise_en_forme/explication_arborescence.png" alt="explication arborescence chemin relatif" /&gt;
        &lt;figcaption&gt;Explication de l'arboresence d'un chemin relatif&lt;/figcaption&gt;
        &lt;/figure&gt;
        </p>
        <p> Mise en pratique :</p>
        <figure>
        <img src="images_pour_mise_en_forme/explication_arborescence.png" alt="explication arborescence chemin relatif" />
        <figcaption>Explication de l'arboresence d'un chemin relatif</figcaption>
        </figure>
        <p>Une image doit être déclarée dans un paragraphe, mais pas les figures !<br />
        En bref, si l'image apporte une information au texte, placer l'image dans une figure<br />
        Si l'image n'apporte aucune information au texte (c'est juste une image pour décorer), la placer dans un paragraphe.<br />
        La balise <strong>&lt;figure&gt; &lt;/figure&gt;</strong> a un rôle de sémantique, elle indique à l'ordinateur que l'image a du sens pour le texte, cela permet par exemple à un programme de récupérer toutes les figures du texte et de les référencer dans une table des figures.</p>
        <p>Une figure peut comporter plusieurs images, exemple :</p>
        <p class="citation_code_balise">
        &lt;figure&gt;
        &lt;img src="images/internetexplorer.png" alt="Logo Internet Explorer" /&gt;
        &lt;img src="images/firefox.png" alt="Logo Mozilla Firefox" /&gt;
        &lt;img src="images/chrome.png" alt="Logo Google Chrome" /&gt;
        &lt;figcaption&gt;Logos des différents navigateurs&lt;/figcaption&gt;
        &lt;/figure&gt;
        </p>

        <p>En bref pour conclure sur les images et les figures :</p>
        <ul>
            <li>On insère une image avec la balise <strong>&lt;img /&gt;</strong>, elle doit obligatoirement comporter au moins les deux attributs <strong>src</strong>(nom de l'image) et <strong>alt</strong>(courte description de l'image; Une image s'insère dans un paragraphe (<strong>&lt;p&gt; &lt;/p&gt;</strong>)</li>
            <li>Si une image illustre le texte (et n'est pas seulement décorative), mieux vaut la placer dans une balise <strong>&lt;figure&gt; &lt;/figure&gt;</strong>, où la balise <strong>&lt;figcaption&gt; &lt;/figcaption&gt;</strong> peut être utilisée à l'intérieure de celle-ci, pour décrire la légende de l'image.
            </li>
        </ul>
        
        <h1 id="ancre_sur_les_attributs_class_id">Les attributs class et id</h1>
        <ul>
            <li><strong>class</strong> va permettre de sélectionner un bloc (comme un paragraphe <strong>&lt;p class="Introduction"&gt;</strong>) pour l'appeler ensuite en CSS (<strong>.introduction</strong>) afin de lui appliquer un style en particulier</li>
            <li><strong>id</strong> va permettre exactement la même chose que class, mais il ne pourra être utilisé qu'une seule fois comme repère dans le code HTML, la plupart du temps on utilisera donc plutôt class; Exemple d'utilisation : <strong>&lt;p id="Introduction"&gt;</strong><br />
            Et contrairement à class, id s'appelle avec un # dans le CSS (exemple : <strong>#introduction</strong>)</li>
        </ul>

        <h1 id="ancre_sur_les_positions">Les positions</h1>                    
        <p>Les positions permettent de placer une image ou autre à un endroit précis de la page, ou par rapport à un bloc.</p>
        <p>Voici un lien expliquant très bien cela : <a href="https://fr.learnlayout.com/position.html" alt="Les positions" title="Les positions" target="_blank">https://fr.learnlayout.com/position.html</a></p>
        <p> Attention, concernant la position relative ou absolute :</p>
        <p>/!\ Quand on place un bloc en absolute, il faut absolument que l'élément plus haut (parent ou ancêtre) soit en position relative /!\</p>
        <p>Donc on peut mettre un texte ou autre dans une photo, la photo serait en relative et le texte en absolute, le texte vient donc se positionner par rapport à la position de la photo, et on peut jouer avec du left, right, top et bottom pour positionner le texte.<br />
        En haut à gauche serait : top: 0px; left: 0px;</p>


        <h1 id="ancre_sur_les_balises_structurantes">Les différentes balises structurantes de HTML5</h1>
        <p>Il est maintenant temps de structurer une page grâce au HTML5</p>
        <ul>
            <li><strong>&lt;header&gt; &lt;/header&gt;</strong> : <span class="mise_en_valeur1">En-tête</span>  comprenant souvent une bannière, le slogan du site, un logo, etc.. </li>
            <li><strong>&lt;footer&gt; &lt;/footer&gt;</strong> : <span class="mise_en_valeur1">Pied de page</span>  comprenant souvent les liens de contact, le nom de l'auteur, les mentions légales, etc.. </li>
            <li><strong>&lt;nav&gt; &lt;/nav&gt;</strong> : Les <span class="mise_en_valeur1">liens de navigation</span> sont regroupés ici, on y placera par exemple le menu principal du site, ce dernier étant généralement réalisé sous forme de liste à puce.</li>
            <li><strong>&lt;section&gt; &lt;/section&gt;</strong> : Une <span class="mise_en_valeur1">section de page</span> sert à regrouper des contenus en fonction de leur thématique, elle englobe généralement une portion du contenu au centre de la page. </li>
            <li><strong>&lt;aside&gt; &lt;/aside&gt;</strong> : On y retrouvera les <span class="mise_en_valeur1">informations complémentaires à l'article que l'on visualise</span>, ces informations sont généralement placés sur le côtés pour y décrire l'article.</li>
            <li><strong>&lt;article&gt; &lt;/article&gt;</strong> : <span class="mise_en_valeur1">Article indépendant</span>, elle sert à englober une portion autonome de la page, elle pourrait ainsi être reprise sur un autre site comme c'est le cas des actualités (articles de journaux ou de blogs).</li>
        </ul>
        <p>Voici un résumé :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/resume_structure_site.png" alt="Résumé de la structure d'une page en HTML" /></span></p>
        <p>Ce schéma propose un exemple d'organisation mais on reste libre de faire autrement, on peut même imaginger une seconde balise header placée à l'intérieur d'une section, dans ce cas elle sera considérée comme étant l'en-tête de la section.<br />
        Une section ne doit pas forcément contenir un article et des aside, rien n'interdit de créer des sections contenant seulement des paragraphes, par exemple.<br />
        Exemple d'utilisation :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;title&gt;ClémAntoine - Notre site Web&lt;/title&gt;
            &lt;/head&gt;

            &lt;body&gt;
                &lt;header&gt;
                    &lt;h1&gt;ClémAntoine&lt;/h1&gt;
                    &lt;h2&gt;Carnets de voyage&lt;/h2&gt;
                &lt;/header&gt;
                &lt;nav&gt;
                    &lt;ul&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Accueil&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Blog&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Nos principes&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/nav&gt;
                &lt;section&gt;
                    &lt;aside&gt;
                        &lt;h1&gt;À propos de l'auteur&lt;/h1&gt;
                        &lt;p&gt;C'est nous, ClémAntoine ! Nous sommes des amoureux passionnés par la Nature.&lt;/p&gt;
                    &lt;/aside&gt;
                    &lt;article&gt;                
                        &lt;h1&gt;Nous sommes des voyageurs&lt;/h1&gt;
                        &lt;p&gt;Bla bla bla bla (texte de l'article)&lt;/p&gt;
                    &lt;/article&gt;
                &lt;/section&gt;
                &lt;footer&gt;
                    &lt;p&gt;Copyright ClémAntoine - Tous droits réservés&lt;br /&gt;
                    &lt;a href="#"&gt;Nous contacter !&lt;/a&gt;&lt;/p&gt;
                &lt;/footer&gt;    
            &lt;/body&gt;
        &lt;/html&gt;
                &lt;/p&gt;
            &lt;/body&gt;

        &lt;/html&gt;
        </p>
        <p class="mise_en_valeur2">Pour le moment avec ce code en HTML il est normal que la page ne change pas beaucoup, en fait cela la structure, c'est ensuite, en CSS, qu'on pourra mettre en forme tout cela.<br />
        Bien-sûr on pourrait obtenir plus ou moins le même résultat avec des balises div, c'est ainsi qu'on faisait avant le HTML5, toutefois il est probable que très bientôt les ordinateurs commenceront à tirer parti de ces nouvelles balises, alors mieux vaut les utiliser pour structurer correctement les pages.</p>

        <h1 id="ancre_sur_les_attributs_les_boites">Le modèle des boîtes</h1>
        <p>Apprendre à manipuler ces blocs comme des boîtes en leur donnant des dimensions, les agencer en jouant sur leurs marges, gérer leur contenu pour éviter que le texte ne dépasse des blocs</p>

        <h2>Les balises de type block et inline</h2>
        <p>Pour rappel, en HTML on peut classer la plupart des balises dans l'une ou l'autre des catégories suivantes :</p>
        <ul>
            <li><strong>inline</strong> : Exemple : &lt;a&gt;&lt;/a&gt;, &lt;strong&gt;&lt;/strong&gt;, &lt;img&gt;&lt;/img&gt;</li>
            <p>Cette balise se trouve obligatoirement à l'intérieur d'une balise block.<br />
            Une balise inline ne crée par de retour à la ligne, le texte qui se trouve à l'intérieur s'écrit à la suite du texte précédent, sur la même ligne, d'où la balise "inline" qui veut dire "en ligne".</p>
            <li><strong>block</strong> : Exemple : &lt;p&gt;&lt;/p&gt;, &lt;h1&gt;&lt;/h1&gt;, &lt;footer&gt;&lt;/footer&gt;</li>
            <p>Elle crée automatiquement un retour à la ligne avant et après, il s'agit d'un bloc ("block").</p>
        </ul>

        <h2>Les balises universelles</h2>
        <p>Il s'agit des balises <strong>&lt;span&gt;&lt;/span&gt;</strong> et <strong>&lt;div&gt;&lt;/div&gt;</strong>, l'intérêt de ces balises est que l'on peut appliquer une class ou un id pour le CSS quand aucune autre balise ne convient.<br />
        L'une (span) est <span class="mise_en_valeur1">inline</span>, et l'autre (div) est <span class="mise_en_valeur1">block</span>.<br />
        Attention de ne pas abuser de ces balises car il vaut mieux utiliser les balises spécifiques quand elles exisent, par exemple &lt;span class="important"&gt; n'est pas logique puisqu'on peut utiliser &lt;strong&gt; à la place, idem pour &lt;dic class="titre"&gt; alors que &lt;h1&gt; existe. <br />
        Donc :</p>
        <ul>
            <li><strong>div</strong> est un peu comme un paragraphe, c'est un bloc créé à la volée</li>
            <li><strong>span</strong> se met dans un paragraphe pour y sélectionner une portion de texte, et on peut y appliquer une classe pour gérer l'affichage de cette portion, exemple : &lt;p&gt;Coucou c'est&lt;span class="moi_a_mettre_en_rouge"&gt;moi&lt;/span&gt; et je peux mettre "moi" en rouge&lt;/span&gt;</li>
        </ul>

        <h2>Les dimensions</h2>
        <p>Ici on travaille uniquement sur des balises de type <span class="mise_en_valeur1">block</span> puisque contrairement à un inline, le block à des dimensions précises avec une largeur et une hauteur, pour cela on a les deux propriétés CSS :</p>
        <ul>
            <li><strong>width</strong> : Pour définir la largeur du bloc, à valoriser en pixels (px) ou en pourcentage (%)</li>
            <li><strong>height</strong> : Pour définir la hauteur du bloc, à valoriser en pixels (px) ou en pourcentage (%)</li>
        </ul>
        <p>Il vaut mieux utiliser le pourcentage plutôt qu'exprimer la valeur en pixels car le pourcentage va s'adapter automatiquement à la résolution d'écran du visiteur.
        Par défaut un bloc prend 100% de la largeur disponible de la page, donc si on veut que la largeur du bloc soit de 50%, on va mettre le code CSS suivant :</p>
        <p class="citation_code_balise">
        p
        {
            width: 50%;
        }
        </p>

        <h2>Minimum et maximum</h2>
        <ul>
            <li><strong>min-width</strong> : Largeur minimale</li>
            <li><strong>min-height</strong> : Hauteur minimale</li>
            <li><strong>max-width</strong> : Largeur maximale</li>
            <li><strong>max-height</strong> : Hauteur maximale</li>
        </ul>
        <p>En spécifiant un minimum et un maximum on peut définir des dimensions "limites" pour que le site s'adapte aux différentes résolutions d'écran du visiteur en demandant par exemple à ce que les paragraphes occupent 50% de la largeur et exiger qu'ils fassent au moins 400 pixels de large dans tous les cas :</p>
        <p class="citation_code_balise">
        p
        {
            width: 50%;
            min-width: 400px;
        }
        </p>
        <p>Ainsi comme on peut le voir avec la première image ci-dessous, lorsqu'on réduit la page, par défaut si on ne met pas de minimum alors le texte est coupé et mis sur plusieurs lignes, sinon si on met un minimum alors le titre sera toujours en entier tant qu'il rentre dans du 400px (cf image ci-dessous à droite); On peut donc voir ici qu'il est important de mettre un minimum<br />
        <img id="les_tailles" src="images_pour_mise_en_forme/sans_taille_mini.png" alt="Illustration sans taille" title="Illustration sans taille"><img id="les_tailles" src="images_pour_mise_en_forme/avec_taille_mini.png" alt="Illustration avec taille" title="Illustration avec taille"></p>

        <h2>Les marges</h2>
        <p>Tous les blocs possèdent des marges, il existe deux types de marges :</p>
        <ul>
            <li>Les <span class="mise_en_valeur1">marges intérieures</span> : Espace entre le texte et la bordure du bloc</li>
            <li>Les <span class="mise_en_valeur1">marges extérieures</span> : Espace entre la bordure du bloc et la bordure du bloc suivant</li>
        </ul>
        <p>On peut modifier, en CSS, la taille des marges grâce aux propriétés suivantes :</p>
        <ul>
            <li><strong>padding</strong> : Taille de la <span class="mise_en_valeur1">marge intérieure</span>, à exprimer en <span class="mise_en_valeur1">pixels (px)</span></li>
            <li><strong>margin</strong> : Taille de la <span class="mise_en_valeur1">marge extérieure</span>, à exprimer en <span class="mise_en_valeur1">pixels (px)</span></li></li>
        </ul>
        <p class="mise_en_valeur2">Les balises de type inline ont également des marges que l'on peut modifier.</p>
        <p><span class="mise_en_valeur3">À noter que par défaut les paragraphes ont une marge extérieure (margin) mais pas intérieure (padding), c'est pour cela que deux paragraphes ne sont pas collés et qu'on a l'impression de sauter une ligne, en fait il s'agit de la marge extérieure par défaut qui s'applique.</span> <br />
        Les marges par défaut ne sont pas les mêmes pour toutes les balises de type block.</p>
        <p>
        <p>Pour rajouter une marge intérieure de 12px aux paragraphes (avec une taille de 350px) on appliquera donc le code suivant :</p>
        <p class="citation_code_balise">
        p
        {
            width: 350px;
            padding: 12px; /* Marge intérieure de 12px */
        }
        </p>
        <p>Si on veut que les paragraphes soient plus espacés entre eux, il suffira de rajouter la propriété <strong>margin</strong> pour demander à ce qu'il y ait par exemple 50 px de marge :</p>
        <p class="citation_code_balise">
        p
        {
            width: 350px;
            padding: 12px; /* Marge intérieure de 12px */
            margin: 50px; /* Marge extérieure de 50px */
        }
        </p>
        <p>Toutefois en faisant cela on s'aperçoit qu'il y a aussi un décalage de 50 px à gauche, en effet margin comme padding s'appliquer sur les quatres côtés du bloc, donc si on veut spécifiquement une marge d'un côté, il faudra le préciser, cela fonctionne comme la propriété <strong>border</strong> basé sur les 4 possibilités suivantes qu'il faut retenir car elles s'appliquent tant pour border que pour <strong>margin</strong> et <strong>padding</strong> :</p>
        <ul>
            <li><strong>top</strong> : Haut</li>
            <li><strong>bottom</strong> : Bas</li>
            <li><strong>left</strong> : Gauche</li>
            <li><strong>right</strong> : Droite</li>
        </ul>
        <p>Ce qui, pour margin et padding, donne :</p>
        <ul>
            <li><strong>margin-top</strong> : Marge extérieure en haut</li>
            <li><strong>margin-bottom</strong> : Marge extérieure en bas</li>
            <li><strong>margin-left</strong> : Marge extérieure à gauche</li>
            <li><strong>margin-right</strong> : Marge extérieure à droite</li>
        </ul>
        <ul>
            <li><strong>padding-top</strong> : Marge intérieure en haut</li>
            <li><strong>padding-bottom</strong> : Marge intérieure en bas</li>
            <li><strong>padding-left</strong> : Marge intérieure à gauche</li>
            <li><strong>padding-right</strong> : Marge intérieure à droite</li>
        </ul>
        <p>Il y a d'autres façons de spécifier les marges avec margin et padding, comme :</p>
        <ul>
            <li><strong>margin: 2px 0 3px 1px;</strong> ce qui donne 2px de marge en haut, 0 à droite(px est facultatif pour la valeur 0), 3px en bas et 1px à gauche.</li>
            <li><strong>margin: 2px 1px;</strong> ce qui donne 2px de marge en haut et en bas, 1px à droite et à gauche.</li>
        </ul>        

        <h2>Centrer les blocs</h2>
        <p>Il est possible de centrer des blocs, cela peut être pratique pour faire un design centré quand on ne connaît pas la résolution du visiteur; Pour cela il faut :</p>
        <ul>
            <li>Utiliser <strong>width</strong> pour donner une largeur au bloc</li>
            <li>Indiquer que l'on veut des marges extérieures automatiques : <strong>margin: auto;</strong></li>
        </ul>
        <p>Exemple :</p>
        <p class="citation_code_balise">
        p
        {
            width: 350px; /* Largeur obligatoire */
            margin: auto; /* Bloc centré */
        }
        </p>
        <p class="mise_en_valeur2">Il n'est pas possible de centrer verticalement avec cette technique, uniquement horizontalement.</p>
        
        <h2>Le cas du dépassement des caractères dans les blocs</h2>
        <p>En définissant la taille d'un bloc, il arrive que ce dernier soit trop petit pour contenir le texte à afficher, dans ce cas on peut utiliser la propriété CSS <strong>overflow</strong> permettant de décider quoi faire si cela arrive :</p>
        <ul>
            <li><strong>overflow: visible;</strong> : Attribut "visible" est la valeur par défaut, si le texte dépasse alorsil reste visible mais sort du bloc</li>
            <li><strong>overflow: hidden;</strong> : Si le texte dépasse, il sera coupé et on ne verra donc pas ce qui dépasse</li>
            <li><strong>overflow: scroll;</strong> : Si le texte dépasse, il sera coupé mais des barres de définlement seront présentes permettant de voir l'ensemble du texte</li>
            <li><strong>overflow: auto;</strong> : Mode conseillé, le navigateur décide de mettre ou non des barres de défilement</li>
        </ul>
       <p>Exemple :</p>
       <p class="citation_code_balise">
        p
        {
            width: 250px; /* Largeur */
            height: 110px; /* Hauteur */
            overflow: auto; /* Mise en place d'ascenceurs en cas de dépassement du texte */
        }
        </p>
        <p>Enfin, il existe la possibilité de couper les textes qui dépassent d'un bloc dans la largeur en y appliquant une césure forcée (dans le cas par exemple d'une adresse internet, chose que par défaut l'ordinateur ne sait pas couper car il n'y a ni espace ni tiret) grâce à la propriété <strong>word-wrap</strong> :</p>
        <p class="citation_code_balise">
        p
        {
           word-wrap: break-word;
        }
        <p class="mise_en_valeur2">Il est conseillé d'utiliser cette fonctionnalité dès qu'un bloc est susceptible de contenir du texte saisi par des utilisateurs, afin d'évitr de casser le design du site.</p>

        <h1 id="ancre_sur_flexbox">Mise en page avec Flexbox</h1>
        <p>La plupart des sites internet possèdent en général un en-tête appelé header, on y trouve le plus souvent un logo, une bannière, etc.. Cela se représente donc comme tel : Un conteneur, des éléments.<br />
        Sur une même page on peut donc avoir plusieurs conteneurs, contenant chacun plusieurs éléments.<br />
        Le principe de la mise en page avec Flexbox est simple, on définit un contenur et à l'intérieur on y place des éléments, tel un carton contenant des objets.<br />
        Le conteneur est une balise HTML et les éléments sont d'autres balises HTML à l'intérieur :</p>
        <p class="citation_code_balise">
        &lt;div id="conteneur"&gt;
        &lt;div class="element 1"&gt;Element&lt;/div&gt;
        &lt;div class="element 2"&gt;Element&lt;/div&gt;
        &lt;div class="element 3"&gt;Element&lt;/div&gt;
        &lt;/div&gt;
        </p>
        <p>Ces trois éléments vont s'afficher les uns en dessous des autres par défaut</p>

        <h2>Activation de Flex</h2>
        <p>Avec le code suivant, les blocs(ou "éléments") précédents seront affichés les uns à côté des autres sur une ligne :</p>
        <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
        }
        </p>

        <h2>La direction</h2>
        <p>Grâce à <strong>flex-direction</strong> on peut positionner les blocs verticalement ou même les inverser, on définit ici <span class="mise_en_valeur4">l'axe principal</span> :</p>
        <ul>
            <li><strong>flex-direction: row</strong> : Organise les éléments sur une ligne</li>
            <li><strong>flex-direction: column</strong> : Les organise sur une colonne</li>
            <li><strong>flex-direction: row-reverse</strong> : Organise les éléments sur une ligne mais en ordre inversé</li>
            <li><strong>flex-direction: column-reverse</strong> : Organise les éléments sur une colonne mais en ordre inversé</li>
        </ul>
        <p>Exemple :</p>
       <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
            flex-direction: column-reverse;
        }
        </p>
        <p>Cela permet donc de modifier l'ordre des blocs sans toucher au code HTML, uniquement en appliquant du code CSS.</p>

        <h2>Le retour à la ligne</h2>
        <p>Par défaut les blocs essaient de rester sur la même ligne s'ils n'ont pas la place, ce qui peut provoquer des bugs d'affichage; Mais on peut demander à ce que les blocs aillent à la ligne lorsqu'ils n'ont plus la place grâce à <strong>flex-wrap</strong> :</p>
        <ul>
            <li><strong>flex-wrap: nowrap;</strong> : Pas de retour à la ligne (valeur par défaut)</li>
            <li><strong>flex-wrap: wrap;</strong> : Les éléments vont à la ligne lorsqu'il n'y a plus de place</li>
            <li><strong>flex-wrap: wrap-reverse;</strong> : Les éléments vont à la ligne lorsqu'il n'y a plus de place, mais en sens inverse</li>
        </ul>
        <p class="flex"><img src="images_pour_mise_en_forme/flex_wrap.png" title="flex-wrap" alt="flex-wrap"></p>

        <h2>Alignement</h2>
        <p>Pour changer l'alignement des éléments sur l'<span class="mise_en_valeur4">axe principal</span> (partons du principe qu'il est horizontal, mais cela fonctionne aussi bien si l'axe principal définit est vertical), on va utiliser <strong>justify-content</strong> :</p>
        <ul>
            <li><strong>justify-content: flex-start;</strong> : Alignés au début (par défaut)</li>
            <li><strong>justify-content: flex-end;</strong> : Alignés à la fin</li>
            <li><strong>justify-content: center;</strong> : Alignés au centre</li>
            <li><strong>justify-content: space-between;</strong> : Les éléments sont étirés sur tout l'axe, il y a de l'espace entre chaque</li>
            <li><strong>justify-content: space-around;</strong> : Les éléments sont étirés sur tout l'axe, il y a de l'espace entre chaque et sur les extrémités</li>
        </ul>
        <p>Exemple :</p>
       <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
            justify-content: space-around;
        }
        </p>
        <p class="flex"><img src="images_pour_mise_en_forme/flex_justify_content.png" title="flex justify-content" alt="flex justify-content"></p>

        <p>Pour changer l'alignement des éléments cette fois-ci sur l'<span class="mise_en_valeur4">axe secondaire</span> (partons du principe qu'il est vertical), on va utiliser <strong>align-items</strong> :</p>
        <ul>
            <li><strong>align-items: stretch;</strong> : Alignés sur tout l'axe (par défaut)</li>
            <li><strong>align-items: flex-start;</strong> : Alignés au début</li>
            <li><strong>align-items: flex-end;</strong> : Alignés à la fin</li>
            <li><strong>align-items: center;</strong> : Alignés au centre</li>
            <li><strong>align-items: baseline;</strong> : Alignés sur la ligne de base (semblable à flex-start)</li>
        </ul>
        <p>Exemple :</p>
       <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        </p>
        <p class="flex"><img src="images_pour_mise_en_forme/flex_align_items.png" title="flex align-items" alt="flex align-items"></p>
        <p>Enfin, le centrage vertical et horizontal peut être obtenu plus facilement, pour cela il suffit de dire que le conteneur est une flexbox et d'établir des marges automatiques sur les éléments à l'intérieur :</p>
        <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
        }
        .element
        {
            margin: auto;
        }
        </p>

        <h2>Aligner un seul élément</h2>
        <p>Il est possible de faire une exception pour un seul des éléments sur l'axe secondaire avec <strong>align-self</strong>, exemple :</p>
        <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .element:nth-child(2) /* On prend le deuxième bloc élément */
        {
            background-color: blue;
            align-self: flex-end; /* Seul ce bloc sera aligné à la fin */
        }
        </p>
        <p class="flex"><img src="images_pour_mise_en_forme/flex_align_self.png" title="flex align-self" alt="flex align-self"></p>

        <h2>Répartir plusieurs lignes</h2>
        <p>Si on a plusieurs lignes dans la Flexbox car beaucoup d'éléments, on peut choisir comment elles seront réparties avec <strong>align-content</strong> :</p>
        <ul>
            <li><strong>align-content: flex-start;</strong> : Les éléments seront placés au début</li>
            <li><strong>align-content: flex-end;</strong> : Les éléments seront placés à la fin</li>
            <li><strong>align-content: center;</strong> : Les éléments seront placés au centre</li>
            <li><strong>align-content: space-between;</strong> : Les éléments seront séparés avec de l'espace entre chaque</li>
            <li><strong>align-content: space-around;</strong> : Les éléments seront séparés avec de l'espace entre chaque et de l'espace au début et à la fin</li>
            <li><strong>align-content: stretch;</strong> : Valeur par défaut, les éléments s'étirent pour occuper toute la place</li>
        </ul>
        <p class="flex"><img src="images_pour_mise_en_forme/flex_align_content.png" title="flex align-content" alt="flex align-content"></p>

        <h2>L'order</h2>
        <p>Sans changer le code HTML on peut modifier l'ordre des éléments grâce au CSS via <strong>order</strong>, les éléments seront ainsi triés du plus petit au plus grand nombre, exemple :</p>
        <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
        }
        .element:nth-child(1)
        {
            order: 3;
        }
        .element:nth-child(2)
        {
            order: 1;
        }
        .element:nth-child(3)
        {
            order: 2;
        }
        </p>

        <h2>Changer la taille des éléments</h2>
        <p>Avec la propriété <strong>flex</strong> on peut modifier la taille des éléments, le nombre qu'on met à la propriété flex indique dans quelle mesure il peut grossir par rapport aux autres, exemple :</p>
        <p class="citation_code_balise">
        #conteneur
        {
            display: flex;
        }
        .element:nth-child(1)
        {
            flex: 2;
        }
        .element:nth-child(2)
        {
            flex: 1;
        }
        </p>
        <p class="flex"><img src="images_pour_mise_en_forme/flex.png" title="flex" alt="flex"></p>

        <h2>Résumé de l'utilisation de Flexbox</h2>
        <ul>
            <li><strong>display: flex;</strong> : <span class="mise_en_valeur4">Active Flexbox</span>, le conteneur contient des éléments qui sont agencés à la façon Flexbox (axe principal horizontal par défaut)</li>
            <li><strong>flex-direction</strong> : <span class="mise_en_valeur4">Définit l'axe principal</span> en horizontal ou vertical</li>
            <li><strong>justify-content</strong> : <span class="mise_en_valeur4">Définit l'alignement</span> des éléments <span class="mise_en_valeur4">sur l'axe principal</span></li>
            <li><strong>align-items</strong> : <span class="mise_en_valeur4">Définit l'alignement</span> des éléments <span class="mise_en_valeur4">sur l'axe secondaire</span></li>
            <li><strong>flex-wrap</strong> : Permet d'autoriser les éléments à <span class="mise_en_valeur4">revenir à la ligne</span> s'ils n'ont plus d'espace</li>
            <li><strong>align-content</strong> : Indique comment les <span class="mise_en_valeur4">lignes doivent se répartir</span> entre elles s'il y a plusieurs lignes</li>
            <li><strong>order</strong> : Propriété CSS qui permet de <span class="mise_en_valeur4">réagencer les éléments</span> dans le conteneur, sans toucher au code HTML</li>
            <li><strong>flex</strong> : Super-propriété permettant d'<span class="mise_en_valeur4">autoriser les éléments à occuper plus ou moins d'espace restant</span></li>
        </ul>
        
        <h1 id="ancre_sur_les_techniques_obsoletes">Techniques obsolètes mais à connaître</h1>
        <p>Si l’on tombe sur ce code, mieux vaut le connaître, même si Flexbox reste à présent la solution optimum pour la mise en page.<br />
        <span class="mise_en_valeur2">En effet pour modifier ou faire évoluer un site contenant un code qui n'est pas le sien ou qui est obsolète, il est nécessaire de comprendre comment ce dernier fonctionne.</span></p>
        
        <h2>Le positionnement flottant</h2>
        <p>Utilisée normalement que pour une image, certains s'en servent pour faire flotter du texte autour de texte, elle permet de faire une mise en page.<br />
        Si l'on veut placer son menu à gauche et le contenu de la page à droite, on peut l'utiliser, exemple en rendant le bloc nav (menu par exemple) flottant en le mettant à gauche avec une dimension précise :</p>
        <p class="citation_code_balise">
        nav
        {
            float: left;
            width: 150px;
        }
        </p>
        <p>Le défaut est que le texte (élément &lt;section&gt; par exemple) à côté du flottant, revient en-dessous du menu(donc du flottant) lorsqu’il dépasse la hauteur du bloc(du flottant); L’astuce est donc de mettre une marge suffisante entre le menu “nav”(flottant) et le contenu (bloc &lt;section&gt; dans notre exemple), comme ça tout est aligné, on appliquera donc une marge extérieure gauche au contenu (marge qui doit être supérieure à celle du flottant) :</p>
        <p class="citation_code_balise">
        section
        {
            margin-left: 170px;
        }
        </p>

        <h2>La propriété display</h2>
        <p>Avec cette <strong>display</strong> on peut transformer un bloc en inline et inversement, exemple :</p>
        <p class="citation_code_balise">
        nav
        {
            display: inline;    /* L’élément se comporte ici comme un inline. */
        }
        </p>
        <p>Voici les différentes valeurs de la propriété display :</p>
        <ul>
            <li><strong>display: block;</strong> : Elément considéré comme un block, les éléments se placent donc les uns en dessous des autres et peuvent être redimensionnés (grâce à width et height)</li>
            <li><strong>display: inline;</strong> : Elément considéré comme un inline, se placent donc sur une ligne les uns à côtés des autres</li>
            <li><strong>display: inline-block;</strong> : Elément considéré comme un inline (les éléments se placent sur une même ligne) mais on pourra lui donner des dimensions pour être redimensionné, comme un block</li>
            <li><strong>display: none;</strong> : Masque le contenu, l’élément ne sera pas affiché</li>
        </ul>

        <h2>L'alignement vertical</h2>
        <p>La propriété vertical-align permet de régler l’alignement vertical du bloc :</p>
        <ul>
            <li><strong>vertical-align: baseline;</strong> : Valeur par défaut</li>
            <li><strong>vertical-align: bottom;</strong> : En bas</li>
            <li><strong>vertical-align: middle;</strong> : Au milieu</li>
            <li><strong>vertical-align: top;</strong> : En haut</li>
        </ul>

        <h2>Le positionnement</h2>
        <p>On peut placer un élément où l’on veut grâce à la propriété <strong>position</strong> dont voici les valeurs :</p>
        <ul>
            <li><strong>position: abolute;</strong> : Active le positionnement absolu, on peut placer un élément où l’on veut sur la page, il sera également placé par dessus les autres éléments.<br />
            Il faudra donc en plus, définir la position de l’élément grâce aux propriétés suivantes (dont la valeur peut être déclarée en pixels ou en pourcentage) :
            <ul>
                <li><strong>top</strong></li>
                <li><strong>bottom</strong></li>
                <li><strong>left</strong></li>
                <li><strong>right</strong></li>
            
            Donc pour placer un élément en bas à droite de la page, on fait :
            <p class="citation_code_balise">
            bottom: 0px;
            right: 0px;
            </p>
            </ul>
            Si on a deux éléments positionnés en absolu, qui se chevauche, on peut utiliser la propriété <strong>z-index</strong> qui va donner une valeur/importance au bloc, ainsi le bloc qui aura la valeur la plus élevée sera celle qui sera placée par dessus l’autre, exemple :
            <p class="citation_code_balise">
            z-index: 5;
            </p>
            </li>
            <li>
            <strong>position: fixed;</strong> : Identique au positionnement absolu, sauf que l’élément est toujours <span class="mise_en_valeur4">visible</span> même quand on navigue dans la page, autrement dit si on met un élément en bas à droite (comme vu précédemment), alors il glissera par dessus les autres éléments en jouant avec l’ascenceur sur la page, car il reste toujours visible, il sera en bas à droite de l’écran, quelque soit l’endroit où l’on est dans la page.
            </li>
            <li>
            <strong>position: relative;</strong> : Positionnement relatif qui permet de décaler un élément par rapport à sa position initiale (et non plus par rapport au bord de la page.<br />
            L'origine a donc changé : le point de coordonnées (0, 0) ne se trouve plus en haut à gauche de la fenêtre comme c'était le cas avant, cette fois l'origine se trouve en haut à gauche de la <em>position actuelle de l’élément</em>), cela peut être pratique pour procéder à quelques ajustements, il faudra d’ailleurs utiliser à nouveau les propriétés suivantes pour décaler l’élément :
            <ul>
                <li><strong>top</strong></li>
                <li><strong>bottom</strong></li>
                <li><strong>left</strong></li>
                <li><strong>right</strong></li>
            </ul>
            </li>
        </ul>        
        
        <h1 id="ancre_sur_les_tableaux">Les tableaux</h1>
        
        <h2>Construction d'un tableau en HTML</h2>
        <p>Afin de faire des tableaux, on utilise la balise <strong>&lt;table&gt;&lt;/table&gt;</strong>, qui est de type block.<br />
        Il est donc nécessaire de la place en dehors d'un paragraphe.<br />
        On utilisera ensuite les balises suivantes :</p>
        <ul>
            <li><strong>tr</strong> : Pour une ligne du tableau</li>
            <li><strong>td</strong> : Pour une cellule du tableau</li>
        </ul>
        <p>Le tableau se construit ligne par ligne, et dans chaque ligne (<strong>tr</strong>) on indique le contenu des différentes cellules (<strong>td</strong>), exemple :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/tableau.png" titre="Construction d'un tableau" alt="Construction d'un tableau"/></span></p>
        <p class="citation_code_balise">
        &lt;table&gt;
            &lt;tr&gt;
            &lt;td&gt;Carmen&lt;/td&gt;
            &lt;td&gt;33 ans&lt;/td&gt;
            &lt;td&gt;Espagne&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
            &lt;td&gt;Michelle&lt;/td&gt;
            &lt;td&gt;26 ans&lt;/td&gt;
            &lt;td&gt;États-Unis&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/table&gt;
        </p>
        <p>On obtient donc un tableau standard, sans bordure, mais on pourra appliquer le code CSS suivant pour y appliquer une bordure :</p>
        <p class="citation_code_balise">
        td /* Toutes les cellules des tableaux... */
        {
            border: 1px solid black; /* auront une bordure de 1px */
        }
        </p>
        <p>En faisant cela on a de l'espace entre les cellules, mais on peut également y remédier grâce à la propriété CSS <strong>border-collapse</strong> qui peut contenir deux valeurs :</p>
        <ul>
            <li><span class="mise_en_valeur1">border-collapse :collapse;</span> : Les bordures seront collées entre elles</li>
            <li><span class="mise_en_valeur1">border-collapse :separate;</span> : Les bordures seront dissociées (valeur par défaut)</li>
        </ul>
        <p>Mise en pratique :</p>
        <p class="citation_code_balise">
        table
        {
            border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */
        }
        </p>

        <h2>Ligne d'en-tête</h2>
        <p>Afin de mettre une ligne d'en-tête au tableau, on utilisera la balise <strong>&lt;th&gt;&lt;/th&gt;</strong> au lieu de td, au sein d'un <strong>&lt;tr&gt;&lt;/tr&gt;</strong>, ce tr sera placé au début du tableau (logique :)) exemple :</p>
        <p class="citation_code_balise">
        &lt;table&gt;
            &lt;tr&gt;
            &lt;th&gt;Nom&lt;/th&gt;
            &lt;th&gt;Âge&lt;/th&gt;
            &lt;th&gt;Pays&lt;/th&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
            &lt;td&gt;Carmen&lt;/td&gt;
            &lt;td&gt;33 ans&lt;/td&gt;
            &lt;td&gt;Espagne&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
            &lt;td&gt;Michelle&lt;/td&gt;
            &lt;td&gt;26 ans&lt;/td&gt;
            &lt;td&gt;États-Unis&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/table&gt;
        </p>

        <h2>Titre du tableau</h2>
        <p>Pour rajouter un titre au tableau, on utilisera cette fois la balise <strong>&lt;caption&gt;&lt;/caption&gt;</strong>, elle se place au tout début du tableau juste avant l'en-tête, exemple :</p>
        <p class="citation_code_balise">
        &lt;table&gt;
            &lt;caption&gt;Passagers du vol 69&lt;/caption&gt;

            &lt;tr&gt;
            &lt;th&gt;Nom&lt;/th&gt;
            &lt;th&gt;Âge&lt;/th&gt;
            &lt;th&gt;Pays&lt;/th&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
            &lt;td&gt;Carmen&lt;/td&gt;
            &lt;td&gt;33 ans&lt;/td&gt;
            &lt;td&gt;Espagne&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
            &lt;td&gt;Michelle&lt;/td&gt;
            &lt;td&gt;26 ans&lt;/td&gt;
            &lt;td&gt;États-Unis&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/table&gt;
        </p>
        <p>Résultat :<br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/tableau_final.png" titre="Résultat du tableau final" alt="Résultat du tableau final"/></span></p>
        <p>Enfin, avec la propriété CSS <strong>capsion-side</strong> on va pouvoir changer la position du titre, à savoir :</p>
        <ul>
            <li><span class="mise_en_valeur1">capsion-side :top;</span> : Le titre sera place au-dessus du tableau (valeur par défaut)</li>
            <li><span class="mise_en_valeur1">capsion-side :bottom;</span> : le titre sera placé en dessous du tableau</li>
        </ul> 

        <h2>Un tableau structuré : Pour les gros tableaux</h2>
        <p>Pour les gros tableaux, il est parfois nécessaire de le structurer, ainsi il sera divisé en trois parties : </p>
        <ul>
            <li><strong>&lt;thead&gt;&lt;/thead&gt;</strong> : En-tête du tableau</li>
            <li><strong>&lt;tbody&gt;&lt;/tbody&gt;</strong> : Corps du tableau</li>
            <li><strong>&lt;tfoot&gt;&lt;/tfoot&gt;</strong> : Pied du tableau</li>
        </ul> 
        <p>Le pied du tableau reprendra généralement la même ligne que l'en-tête, en effet car les gros tableaux sont tellement longs qu'il peut être nécessaire de rappeler à quoi se rapporte chacune des colonnes, schématiquement cela donnerait donc : <br />
        <span class="survol_image_autre"><img src="images_pour_mise_en_forme/gros_tableau.png" titre="Structure d'un gros tableau" alt="Structure d'un gros tableau"/></span></p>
        <p>Il est conseillé dans le code HTML de renseigner d'abord la partie du haut, ensuite celle du bas, pour enfin terminer par la partie principale (tbody), ce qui donnerait pour l'exemple de la capture précédente :</p>
        <p class="citation_code_balise">
        &lt;table&gt;
        &lt;caption&gt;Passagers du vol 69&lt;/caption&gt;

        &lt;thead&gt; &lt;!-- En-tête du tableau --&gt;
            &lt;tr&gt;
                &lt;th&gt;Nom&lt;/th&gt;
                &lt;th&gt;Âge&lt;/th&gt;
                &lt;th&gt;Pays&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;

        &lt;tfoot&gt; &lt;!-- Pied de tableau --&gt;
            &lt;tr&gt;
                &lt;th&gt;Nom&lt;/th&gt;
                &lt;th&gt;Âge&lt;/th&gt;
                &lt;th&gt;Pays&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;

        &lt;tbody&gt; &lt;!-- Corps du tableau --&gt;
            &lt;tr&gt;
                &lt;td&gt;Carmen&lt;/td&gt;
                &lt;td&gt;33 ans&lt;/td&gt;
                &lt;td&gt;Espagne&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Michelle&lt;/td&gt;
                &lt;td&gt;26 ans&lt;/td&gt;
                &lt;td&gt;États-Unis&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;François&lt;/td&gt;
                &lt;td&gt;43 ans&lt;/td&gt;
                &lt;td&gt;France&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Martine&lt;/td&gt;
                &lt;td&gt;34 ans&lt;/td&gt;
                &lt;td&gt;France&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Jonathan&lt;/td&gt;
                &lt;td&gt;13 ans&lt;/td&gt;
                &lt;td&gt;Australie&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Xu&lt;/td&gt;
                &lt;td&gt;19 ans&lt;/td&gt;
                &lt;td&gt;Chine&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
        </p>

        <h2>Fusion de lignes et de colonnes</h2>
        <p>Parfois on a besoin de fusionner des cellules entre elles, voici le principe :</p>
        <ul>
            <li>La fusion de colonnes : La fusion s'effectue horizontalement, on utilise l'attribut <strong>colspan</strong></li>
            <li>La fusion de lignes : La fusion s'effectue verticalement, on utilise l'attribut <strong>rowspan</strong></li>
        </ul>
        <p>En propriété de colspan ou rowspan, on indique le nombre de cellules à fusionner entre elles, exemple pour une fusion de deux colonnes :</p>
        <p class="citation_code_balise">
        &lt;table&gt;
            &lt;tr&gt;
                &lt;th&gt;Titre du film&lt;/th&gt;
                &lt;th&gt;Pour enfants ?&lt;/th&gt;
                &lt;th&gt;Pour adolescents ?&lt;/th&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Massacre à la tronçonneuse&lt;/td&gt;
                &lt;td &gt;Non, trop violent&lt;/td&gt;
                &lt;td&gt;Oui&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Les bisounours font du ski&lt;/td&gt;
                &lt;td&gt;Oui, adapté&lt;/td&gt;
                &lt;td&gt;Pas assez violent...&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Lucky Luke, seul contre tous&lt;/td&gt;
                &lt;td colspan="2"&gt;Pour toute la famille !&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/table&gt;
        </p>
        <p>Voilà ce que cela donne :<br />
        <span class="fusion"><img src="images_pour_mise_en_forme/tableau_fusion.png" titre="Fusion d'un tableau" alt="Fusion d'un tableau"/></span></p>
        <p>On peut voir que dans le dernier tr, il n'y a que deux cellules (balises td) au lieu de trois, et c'est bien normal puisque les deux dernières cellules ont été fusionnées entre elles.<br />
        Le <strong>&lt;td colspan="2"&gt;</strong> indique que cette cellule prend la place de deux cellules à la fois.<br />
         Bien-sûr au lieu de <strong>&lt;td colspan="2"&gt;</strong> on aurait pu mettre <strong>&lt;td colspan="3"&gt;</strong> pour fusionner trois cellules au lieu de deux.<br />
        À noter également : On peut modifier l'alignement vertical du texte des cellules du tableau avec la propriété <strong>vertical-align</strong>.
        </p>

        <h1 id="ancre_sur_les_formulaires">Les formulaires</h1>
        <p>La création de formulaire nécessite une partie dans un autre langage (PHP par exemple), aussi on ne verra ici que la partie HTML.</p>

        <h2>Création d'un formulaire</h2>
        <p>Pour créer un formulaire on utilise la balise <strong>&lt;form&gt;&lt;/form&gt;</strong>, il faut par ailleurs obligatoirement mettre des balises de type block comme <strong>&lt;p&gt;&lt;/p&gt;</strong> à l'intérieur du formulaire si on souhaite y faire figurer du texte, exemple :</p>
        <p class="citation_code_balise">
        &lt;p&gt;Texte avant le formulaire&lt;/p&gt;
        &lt;form&gt;
            &lt;p&gt;Texte dans le formulaire&lt;/p&gt;
        &lt;/form&gt;
        &lt;p&gt;Texte après le formulaire&lt;/p&gt;
        </p>
        <p>Ensuite on doit ajouter deux attributs à la balise form <strong>&lt;form&gt;</strong> pour d'une part déterminer comment envoyer le texte saisi par le visiteur, et d'autre part, une fois envoyées, comment les traiter (recevoir le message automatiquement par mail ou avoir un programme qui se charger de l'enregistrer quelque part puis par exemple de l'afficher sur une page visible par tout le monde) :</p>
        <ul>
            <li><span class="mise_en_valeur1">method</span> pour indiquer par quel moyen les données vont être envoyées, deux choix ici :</li>
                <ul>
                    <li><span class="mise_en_valeur1">method="post"</span> : Méthode la plus adaptée, elle permet d'envoyer un grand nombre d'informations, les données saisies dans le formulaire ne transitent pas par la barre d'adresse.</li>
                    <li><span class="mise_en_valeur1">method="get"</span> : Méthode peu adaptée, elle est limitée à 255 caractères, les informations seront envoyées dans l'adresse de la page (http://...), donc dans la barre d'adresse.</li>
                </ul>
            <li><span class="mise_en_valeur1">action</span> correspond à l'adresse de la page ou du programme qui va traiter les informations, cette page se charger d'envoyer un mail avec le message ou bien d'enregistrer le message dans une base de données.</li>
        </ul>
        <p>Exemple, en partant du principe qu'on a un fichier "traitement.php" qui traite l'info une fois reçue) :</p>
        <p class="citation_code_balise">
        &lt;p&gt;Texte avant le formulaire&lt;/p&gt;
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;Texte dans le formulaire&lt;/p&gt;
        &lt;/form&gt;
        &lt;p&gt;Texte après le formulaire&lt;/p&gt;
        </p>

        <h2>Zones de saisies : Zone de texte monoligne et zone de texte multiligne</h2>
        <p>Pour saisir du texte dans un formulaire, on a deux zones de texte différentes :</p>
        <ul>
            <li><span class="mise_en_valeur1">Zone de texte monoligne</span> : On peut y écrire qu'une seule ligne, elle sert à saisir des textes courts comme le pseudo</li>
            <li><span class="mise_en_valeur1">Zone de texte multiligne</span> : Ici on pourra écrire une quantité importante de texte sur plusieurs lignes comme un commentaire ou un avis</li>
        </ul>

        <h3>Zone de texte monoligne</h3>
        <p>Pour insérer une zone de texte monoligne on utilise la balise <strong>&lt;input /&gt;</strong> suivi de son type, exemple : <strong>&lt;input type="text" /&gt;</strong></p>
        <p>Ensuite on rajoute un nom à la zone de texte grâce à l'attribut <span class="mise_en_valeur1">name</span>, ce dernier n'apparaît pas sur la page mais permettra (en PHP par exemple) de reconnaître d'où vient l'information (à quoi correspond t'elle), on saura ainsi quel texte est le pseudo du visiteur, tel texte est le mot de passe, etc.. </p>
        <p>En supposant qu'on demande le pseudo au visiteur, on aura donc la balise <strong>&lt;input type="text" name="pseudo"/&gt;</strong>, cela donnera donc :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;input type="text" name="pseudo" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>

        <h2>Les libellés</h2>
        <p>Afin de mettre un libellé devant le champ à saisir (pour que le visiteur sache ce qui est attendu dans cette case), il faut rajouter la balise <strong>&lt;label&gt;&lt;/label&gt;</strong>, exemple :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;label&gt;Votre pseudo&lt;/label&gt; : &lt;input type="text" name="pseudo" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>
        
        <p>Toutefois, il reste une chose à intégrer, c'est la liaison entre le label et la zone de texte, on doit donc donner un nom à la zone de texte grâce à l'attribut <span class="mise_en_valeur1">id</span>.</p>
        <p>Il faut bien comprendre la différence entre l'attribut id et l'attribut name :</p>
        <ul>
            <li><span class="mise_en_valeur1">id</span> : Est utilisé pour identifier l'élément HTML pour pouvoir y accéder et le manipuler, il est unique pour cet élément, par contre si on a un type checkbox ou des boutons radio par exemple, on aura un id différent par "réponse"</li>
            <li><span class="mise_en_valeur1">name</span> : Réfère à la variable du formulaire que l'élément concerne, pour rester sur l'exemple du pseudo on aura qu'un seul élément qui pourra référer à la variable pseudo</li>
        </ul>
        <p>Pour lier le label au champ, il faut lui donner un attribut <span class="mise_en_valeur1">for</span> qui a la même valeur que l'id du champ, exemple :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;label for="pseudo"&gt;Votre pseudo&lt;/label&gt; : &lt;input type="text" name="pseudo" id="pseudo" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>

        <h2>Quelques attributs supplémentaires</h2>
        <p>On peut rajouter quelques autres attributs à la balise input pour personnaliser son fonctionnement :</p>
        <ul>
            <li><span class="mise_en_valeur1">size</span> : Agrandir le champ</li>    
            <li><span class="mise_en_valeur1">maxlenght</span> : Limite le nombre de caractères</li>    
            <li><span class="mise_en_valeur1">value</span> : Préremplir le champ avec une valeur</li>    
            <li><span class="mise_en_valeur1">placeholder</span> : Préremplir le champ avec une valeur qui disparaîtra lors du clic sur le champ, cela permet de donner une indication sur le contenu du champ à remplir</li>    
        </ul>
        <p>Donc si on veut mettre une zone de texte contenant une indication permettant de comprendre ce qu'il faut saisir, le tout sur un champ faisant 30 caractères de long mais avec restreint à 10 caractères maximum cela donnera :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;label for="pseudo"&gt;Votre pseudo :&lt;/label&gt;
            &lt;input type="text" name="pseudo" id="pseudo" placeholder="Exemple : Lutine72" size="30" maxlenght="10" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>

        <h2>Zone de mot de passe</h2>
        <p>Afin de faire en sorte que la zone de texte se comporte comme une zone de mot de passe, donc avec des étoiles à la place des caractères saisis, il suffit d'ajouter l'attribut <span class="mise_en_valeur1">type="password"</span>, exemple :</p>
       <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;label for="pseudo"&gt;Votre pseudo :&lt;/label&gt;
            &lt;input type="text" name="pseudo" id="pseudo" /&gt;
            &lt;br /&gt;
            &lt;label for="pass"&gt;Votre mot de passe :&lt;/label&gt;
            &lt;input type="password" name="pass" id="pass" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire.png" titre="exemple de formulaire" alt="exemple de formulaire" /></span></p>

        <h3>Zone de texte multiligne</h3>
        <p>Pour créer une zone multiligne, c'est à dire une zone où l'on peut écrire plusieurs lignes ou de grandes quantités de texte, on va cette fois utiliser la balise <strong>&lt;textarea&gt;&lt;/textarea&gt;</strong>, et on lui donnera également un <span class="mise_en_valeur1">name</span> et un <span class="mise_en_valeur1">label</span>, ce qui, pour le moment va donner :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;label for="ameliorer"&gt;Comment pensez-vous que je pourrais améliorer mon site ?&lt;/label&gt;&lt;br /&gt;
            &lt;textarea name="ameliorer" id="ameliorer"&gt;&lt;/textarea&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/textarea.png" titre="exemple de formulaire multiligne" alt="exemple de formulaire multiligne" /></span></p>
        <p>Afin d'aggrandir la zone de commentaire de l'image précédente du formulaire, on peut :</p>
        <ul>
            <li>En CSS : Appliquer les propriétés <span class="mise_en_valeur1">width</span> et <span class="mise_en_valeur1">height</span></li>
            <li>En HTML : Rajouter les attributs à la balise <strong>&lt;textarea&gt;&lt;/textarea&gt;</strong>:
                <ul>
                    <li><span class="mise_en_valeur1">rows</span> : Indique le nombre de lignes de texte qui peuvent être affichées</li>
                    <li><span class="mise_en_valeur1">cols</span> : Indique le nombre de colonnes</li>
                </ul>
            </li>
        <p>Il est par ailleurs possible de préremplir le textarea avec une valeur par défaut, exemple :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
            &lt;label for="ameliorer"&gt;
            Comment pensez-vous que je pourrais améliorer mon site ?
            &lt;/label&gt;
            &lt;br /&gt;
            &lt;textarea name="ameliorer" id="ameliorer" rows="10" cols="50"&gt;
            Améliorer ton site ?!
            Mais enfin ! Il est tellement génialissime qu'il n'est pas nécessaire de l'améliorer !
            &lt;/textarea&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        </p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/textarea_texte_par_defaut.png" titre="exemple de textarea" alt="exemple de textarea" /></span></p>
        </ul>

        <h2>Zones de saisie enrichies - Les différents attributs de la balise input</h2>
        <p>HTML5 apporte de nombreuses et nouvelles fonctionnalités pour les formulaires, et pour les navigateurs (les plus à la traîne) ne connaissant pas forcément toutes ces options, alors la zone sera remplacée par une zone de saisie monoligne (comme si on avait écrit type="text"), ce qui convient très bien par défaut :), donc autant les utiliser ! Les voici :</p>
        <ul>
            <li><strong>&lt;input type="email" /&gt;</strong> : Le navigateur sait que le visiteur doit taper une adresse mail et peut afficher une indication si l'adresse mail n'est pas correcte (sans @ par exemple), de plus un clavier adapté à la saisie d'email (sur téléphone portable) sera affiché selon le navigateur
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_zone_mail.png" titre="zone mail" alt="zone mail" /></span></p>
            </li>
            <li><strong>&lt;input type="url" /&gt;</strong> : Le navigateur comprend que le visiteur doit saisir une adresse et peut là aussi afficher une indication si l'URL n'est pas correcte (sans http par exemple), de plus un clavier adapté à la saisie d'URL (sur téléphone portable) sera affiché selon le navigateur</li>
            <li><strong>&lt;input type="tel" /&gt;</strong> : Champ dédié à la saisie de numéro de téléphone, un clavier adapté à la saisie du numéro (sur téléphone portable on verra les touches de 0 à 9) sera affiché selon le navigateur
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_zone_tel.png" titre="zone tel" alt="zone tel" /></span></p>
            </li>
            <li><strong>&lt;input type="number" /&gt;</strong> : Champ dédié à la saisie d'un nombre entier, généralement affiché avec des flèches pour changer la valeur. <br />
            On peut personnaliser le fonctionnement du champ avec les attributs suivants :
                <ul>
                    <li><span class="mise_en_valeur1">min</span> : Valeur minimale autorisée</li>
                    <li><span class="mise_en_valeur1">max</span> : Valeur maximale autorisée</li>
                    <li><span class="mise_en_valeur1">step</span> : "Pas" de déplacement, donc si on indique un pas de 2, le champ n'acceptera que des valeurs de 2 en 2 (0,2,4,..)</li>
                </ul>
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_zone_number.png" titre="zone number" alt="zone number" /></span></p>
            </li>
            <li><strong>&lt;input type="range" /&gt;</strong> : Permet d'afficher un curseur sur une ligne (appelé aussi "slider") pour sélectionner la valeur; Là aussi on peut utiliser les attributs <span class="mise_en_valeur1">min</span>, <span class="mise_en_valeur1">max </span>et<span class="mise_en_valeur1"> step</span>.</li>
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_zone_curseur.png" titre="zone curseur" alt="zone curseur" /></span></p>
            <li><strong>&lt;input type="color" /&gt;</strong> : Permet de saisir une couleur, généralement on a un bouton qui ouvre sur une sphère de sélection de couleur avec une pipette
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_zone_couleur.png" titre="zone couleur" alt="zone couleur" /></span></p>
            </li>
            <li><strong>&lt;input type="date" /&gt;</strong> : Sélection d'une date, différents types de sélection de date existent :
                <ul>
                        <li><span class="mise_en_valeur1">date</span> : Date entière (ex : 07/03/1981)</li>
                        <li><span class="mise_en_valeur1">time</span> : Heure (ex : 12:15)</li>
                        <li><span class="mise_en_valeur1">week</span> : Semaine</li>
                        <li><span class="mise_en_valeur1">month</span> : Mois</li>
                        <li><span class="mise_en_valeur1">datetime</span> : Date et heure avec gestion du décalage horaire</li>
                        <li><span class="mise_en_valeur1">datetime-local</span> : Date et heure sans gestion du décalage horaire</li>
                </ul>
                <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_zone_date.png" titre="zone date" alt="zone date" /></span></p>
            </li>
            <li><strong>&lt;input type="search" /&gt;</strong> : Peut afficher une petite loupe selon le navigateur et éventuellement mémoriser les dernières recherches effectuées par le visiteur</li>
        </ul>

        <h2>Les éléments d'options</h2>
        <p>Les éléments permettant au visiteur de faire un choix parmis une liste de possibilités, sont multiples :</p>
        <ul>
            <li><span class="mise_en_valeur1">Les cases à cocher</span> grâce à l'attribut <span class="mise_en_valeur1">checkbox</span>, exemple :
            <p class="citation_code_balise">
            &lt;form method="post" action="traitement.php"&gt;
                &lt;p&gt;
                Cochez les aliments que vous aimez manger :&lt;br /&gt;
               &lt;input type="checkbox" name="frites" id="frites" /&gt; &lt;label for="frites"&gt;Frites&lt;/label&gt;&lt;br /&gt;
               &lt;input type="checkbox" name="steak" id="steak" /&gt; &lt;label for="steak"&gt;Steak haché&lt;/label&gt;&lt;br /&gt;
               &lt;input type="checkbox" name="epinards" id="epinards" /&gt; &lt;label for="epinards"&gt;Epinards&lt;/label&gt;&lt;br /&gt;
               &lt;input type="checkbox" name="huitres" id="huitres" /&gt; &lt;label for="huitres"&gt;Huitres&lt;/label&gt;
               &lt;/p&gt;
            &lt;/form&gt;
            </p>
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_cases.png" titre="Cases à cocher" alt="Cases à cocher" /></span></p>
            <p>Il faut bien donner un nom différent à chaque case à cocher pour permettre de les identifier plus tard, par ailleurs on peut faire en sorte qu'une case soit cochée par défaut grâce à l'attribut <span class="mise_en_valeur1">checked</span> (&lt;input type="checkbox" name="choix" checked /&gt;).</p>
            </li>
            <li><span class="mise_en_valeur1">Les zones d'options</span>, elle permettent de faire un choix (et un seul) parmi une liste de possibilités.<br />
            Elles ressemblent aux cases à cocher, mais elles doivent être organisées en groupes.<br />
            Les options d'un même groupe possèdent le même nom (<span class="mise_en_valeur1">name</span>), mais chaque option doit avoir une valeur (<span class="mise_en_valeur1">value</span>) différente.<br />
            La balise à utiliser est toujours un <strong>&lt;input /&gt;</strong>, avec cette fois la valeur <span class="mise_en_valeur1">radio</span> pour l'attribut <span class="mise_en_valeur1">type</span>, exemple :
            <p class="citation_code_balise">
            &lt;form method="post" action="traitement.php"&gt;
            &lt;p&gt;
               Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :&lt;br /&gt;
               &lt;input type="radio" name="age" value="moins15" id="moins15" /&gt; &lt;label for="moins15"&gt;Moins de 15 ans&lt;/label&gt;&lt;br /&gt;
               &lt;input type="radio" name="age" value="medium15-25" id="medium15-25" /&gt; &lt;label for="medium15-25"&gt;15-25 ans&lt;/label&gt;&lt;br /&gt;
               &lt;input type="radio" name="age" value="medium25-40" id="medium25-40" /&gt; &lt;label for="medium25-40"&gt;25-40 ans&lt;/label&gt;&lt;br /&gt;
               &lt;input type="radio" name="age" value="plus40" id="plus40" /&gt; &lt;label for="plus40"&gt;Encore plus vieux que ça ?!&lt;/label&gt;
            &lt;/p&gt;
            &lt;/form&gt;
            </p>
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_radio.png" titre="Radio" alt="Radio" /></span></p>
            <p>L'attribut <span class="mise_en_valeur1">checked</span> est, là aussi, disponible pour sélectionner une valeur par défaut.</p>
            </li>
            <li><span class="mise_en_valeur1">Les listes déroulantes</span>, cette fois on va utiliser la balise <strong>&lt;select&gt;&lt;/select&gt;</strong> qui indique le début et la fin de la liste déroulante, exemple :
            <p class="citation_code_balise">
            &lt;form method="post" action="traitement.php"&gt;
               &lt;p&gt;
                   &lt;label for="pays"&gt;Dans quel pays habitez-vous ?&lt;/label&gt;&lt;br /&gt;
                   &lt;select name="pays" id="pays"&gt;
                       &lt;option value="france"&gt;France&lt;/option&gt;
                       &lt;option value="espagne"&gt;Espagne&lt;/option&gt;
                       &lt;option value="italie"&gt;Italie&lt;/option&gt;
                       &lt;option value="royaume-uni"&gt;Royaume-Uni&lt;/option&gt;
                       &lt;option value="canada"&gt;Canada&lt;/option&gt;
                       &lt;option value="etats-unis"&gt;États-Unis&lt;/option&gt;
                       &lt;option value="chine"&gt;Chine&lt;/option&gt;
                       &lt;option value="japon"&gt;Japon&lt;/option&gt;
                   &lt;/select&gt;
               &lt;/p&gt;
            &lt;/form&gt;
            </p>
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_liste.png" titre="Liste" alt="Liste" /></span></p>
            <p>L'attribut <span class="mise_en_valeur1">selected</span> permet de sélectionner une valeur par défaut, exemple :</p>
            <p class="citation_code_balise">
            &lt;option value="france" selected&gt;France&lt;/option&gt;
            </p>
            <p>
             On peut aussi grouper les options avec la balise <strong>&lt;optgroup&gt;&lt;/optgroup&gt;</strong>, exemple :
            </p>
            <p class="citation_code_balise">
            &lt;form method="post" action="traitement.php"&gt;
               &lt;p&gt;
                   &lt;label for="pays"&gt;Dans quel pays habitez-vous ?&lt;/label&gt;&lt;br /&gt;
                   &lt;select name="pays" id="pays"&gt;
                       &lt;optgroup label="Europe"&gt;
                           &lt;option value="france"&gt;France&lt;/option&gt;
                           &lt;option value="espagne"&gt;Espagne&lt;/option&gt;
                           &lt;option value="italie"&gt;Italie&lt;/option&gt;
                           &lt;option value="royaume-uni"&gt;Royaume-Uni&lt;/option&gt;
                       &lt;/optgroup&gt;
                       &lt;optgroup label="Amérique"&gt;
                           &lt;option value="canada"&gt;Canada&lt;/option&gt;
                           &lt;option value="etats-unis"&gt;Etats-Unis&lt;/option&gt;
                       &lt;/optgroup&gt;
                       &lt;optgroup label="Asie"&gt;
                           &lt;option value="chine"&gt;Chine&lt;/option&gt;
                           &lt;option value="japon"&gt;Japon&lt;/option&gt;
                       &lt;/optgroup&gt;
                   &lt;/select&gt;
               &lt;/p&gt;
            &lt;/form&gt;
            </p>
            <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_groupe.png" titre="Groupe" alt="Groupe" /></span></p>
            </li>                        
        </ul>

        <h2>Finalisation du formulaire</h2>
        <p>On peut regrouper des champs afin de restructurer le code, cela peut être pratique quand le formulaire est un peu gros, pour cela on a deux balises : <strong>&lt;fieldset&gt;&lt;/fieldset&gt;</strong> et <strong>&lt;legend&gt;&lt;/legend&gt;</strong>.<br />
        Chaque fieldset peut contenir une légende, exemple :</p>
        <p class="citation_code_balise">
        &lt;form method="post" action="traitement.php"&gt;
 
           &lt;fieldset&gt;
               &lt;legend&gt;Vos coordonnées&lt;/legend&gt; &lt;!-- Titre du fieldset --&gt; 

               &lt;label for="nom"&gt;Quel est votre nom ?&lt;/label&gt;
               &lt;input type="text" name="nom" id="nom" /&gt;

               &lt;label for="prenom"&gt;Quel est votre prénom ?&lt;/label&gt;
               &lt;input type="text" name="prenom" id="prenom" /&gt;
         
               &lt;label for="email"&gt;Quel est votre e-mail ?&lt;/label&gt;
               &lt;input type="email" name="email" id="email" /&gt;

           &lt;/fieldset&gt;
         
           &lt;fieldset&gt;
               &lt;legend&gt;Votre souhait&lt;/legend&gt; &lt;!-- Titre du fieldset --&gt;
         
               &lt;p&gt;
                   Faites un souhait que vous voudriez voir exaucé :

                   &lt;input type="radio" name="souhait" value="riche" id="riche" /&gt; &lt;label for="riche"&gt;Etre riche&lt;/label&gt;
                   &lt;input type="radio" name="souhait" value="celebre" id="celebre" /&gt; &lt;label for="celebre"&gt;Etre célèbre&lt;/label&gt;
                   &lt;input type="radio" name="souhait" value="intelligent" id="intelligent" /&gt; &lt;label for="intelligent"&gt;Etre &lt;strong&gt;encore&lt;/strong&gt; plus intelligent&lt;/label&gt;
                   &lt;input type="radio" name="souhait" value="autre" id="autre" /&gt; &lt;label for="autre"&gt;Autre...&lt;/label&gt;
               &lt;/p&gt;
         
               &lt;p&gt;
                   &lt;label for="precisions"&gt;Si "Autre", veuillez préciser :&lt;/label&gt;
                   &lt;textarea name="precisions" id="precisions" cols="40" rows="4"&gt;&lt;/textarea&gt;
               &lt;/p&gt;
           &lt;/fieldset&gt;
         &lt;/form&gt; 
        </p>
        <p><span class="survol_image_autre"><img src="images_pour_mise_en_forme/formulaire_final.png" titre="exemple de regroupement" alt="exemple de regroupement" /></span></p>
        <p>On peut sélectionner automatiquement un champ en plaçant le curseur dedans grâce à l'attribut <span class="mise_en_valeur1">autofocus</span>, par exemple, pour que le curseur soit par défaut dans le champ prénom  cela donnera :
        <p class="citation_code_balise">
        &lt;input type="text" name="prenom" id="prenom" autofocus /&gt;
        </p>
        <p>Pour rendre une champ obligatoire, pour grâce à l'attribut required :</p>
        <p class="citation_code_balise">
        &lt;input type="text" name="prenom" id="prenom" required /&gt;
        </p>
        <p>Par ailleurs en CSS on pourra désigner ces champs pour leur appliquer un style, via des pseudo-formats :</p>
        <ul>
            <li><span class="mise_en_valeur1">:required</span> : Application d'un style pour les champs requis</li>
            <li><span class="mise_en_valeur1">:invalid</span> : Application d'un style pour les champs invalides</li>
            <li><span class="mise_en_valeur1">:focus</span> : Application d'un style pour les champs sélectionnés (dont le curseur se trouve à l'intérieur).</li>
        </ul>
        <p>Enfin, le bouton d'envoi, là encore dans la balise <strong>input /</strong> décliné en 4 possibilités :</p>
        <ul>
            <li><span class="mise_en_valeur1">type="submit"</span> : Principal bouton d'envoi du formulaire, celui utilisé le plus souvent, le visiteur sera conduit à la page indiquée dans l'attribut action du formulaire</li>
            <li><span class="mise_en_valeur1">type="reset"</span> : Remise à zéro du formulaire</li>
            <li><span class="mise_en_valeur1">type="image"</span> : Comme le bouton submit mais présenté sous forme d'image, il faut donc rajouter l'attribur <span class="mise_en_valeur1">src</span> pour indiquer l'URL de l'image</li>
            <li><span class="mise_en_valeur1">type="button"</span> : Bouton générique qui n'aura aucun effet par défaut, ce bouton est géré en JavaScript pour exécuter des actions sur la page</li>
        </ul>
        <p>On peut changer le texte affiché à l'intérieur du bouton avec l'attribut <span class="mise_en_valeur1">value</span>, exemple :</p>
        <p class="citation_code_balise">
        &lt;input type="submit" value="Envoyer le formulaire" /&gt; 
        </p>

        <h1 id="ancre_sur_les_formats_multimedia">Les formats audio et vidéo</h1>
        <h2>Présentation de quelques formats audio</h2>
        <p>Pour diffuser de la musique ou n'importe quel son, il existe de nombreux formats dont la plupart sont compressés (comme le sont les images JPEG, PNG et GIF), ce qui permet de réduire leur poids :</p>
        <ul>
            <li><span class="mise_en_valeur1">MP3</span> : Un des plus vieux formats et aussi un des plus compatibles avec tous les appareils</li>
            <li><span class="mise_en_valeur1">AAC</span> : Utilisé majoritairement par Apple sur iTunes, bonne qualité, les iPod Iphone et autres iPad savent les lire</li>
            <li><span class="mise_en_valeur1">OGG</span> : Format Ogg Vorbis très répandu dans le monde du logiciel libre, notamment sous Linux; Il a l'avantage d'être libre donc il n'est protégé par aucun brevet</li>
            <li><span class="mise_en_valeur1">WAV</span> : Format non compressé, à éviter car le fichier est très volumineux, c'est un peu l'équivalent du Bitmap (BMP) pour l'audio</li>
        </ul>
        <p>La compatibilité dépend des navigateurs, mais elle évolue dans le bon sens au fil du temps.<br />
        Il peut être nécessaire de consulter caniuse.com pour connaître la compatibilité actuelle des formats (exemple : <a href src="https://caniuse.com/mp3" title="Site caniuse" target="_blank" alt="Site caniuse">Lien caniuse.com pour le MP3</a>.</p>

        <h2>Présentation de quelques formats vidéo</h2>
        <p>Côté vidéo, on a besoin de trois éléments :</p>
        <ul>
            <li><span class="mise_en_valeur1">Le format conteneur</span> : Il va servir à contenir les deux éléments ci-dessous, on reconnaît généralement le type de contenur par son extension : AVI, MP4, MKV, etc..</li>
            <li><span class="mise_en_valeur1">Un codec audio</span> : C'est le format du son de la vidéo, généralement compressé (MP3, AAC, OGG, etc..)</li>
            <li><span class="mise_en_valeur1">Un codec vidéo</span> : C'est le format qui va compresser les images, voici les principaux :
                <ul>
                    <li><span class="mise_en_valeur1">H.264</span> : L'un des plus puissants et les plus utilisés toutefois il n'est pas 100% gratuit, on peut l'utiliser gratuitement dans certains cas (diffusion de vidéo sur site web personnel par exemple) mais il y a un flou juridique qui rajoute un risque pour une utilisation dans d'autres cas</li>
                    <li><span class="mise_en_valeur1">Ogg Theora</span> : Codec gratuit et libre de droits, moins puissant que le H.264 mais reconnu sous Linux; Sur Windows cela nécessite d'installer des programmes pour pouvoir le lire..</li>
                    <li><span class="mise_en_valeur1">WebM</span> : Codec gratuit et libre de droits, plus récent que le précédent et proposé par Google, c'est le concurrent le plus sérieux de H.264 aujourd'hui</li>
                </ul>
            </li>
        </ul>
        <p>Comme pour les formats de sons, il est nécessaire de vérifier la compatibilité sur le site caniuse.com.</p>

        <h2>Insertion d'un audio</h2>
        <p>On utilise la balise <strong>&lt;audio src=""&gt;&lt;/audio&gt;</strong>, en mettant l'URL du son entre les guillemets, et on la complète comme suit :</p>
        <ul>
            <li><span class="mise_en_valeur1">controls</span> : Ajoute les boutons "Lecture", "Pause" et la barre de défilement</li>
            <li><span class="mise_en_valeur1">width</span> : Modifie la largeur du lecteur audio</li>
            <li><span class="mise_en_valeur1">loop</span> : La musique sera jouée en boucle</li>
            <li><span class="mise_en_valeur1">autoplay</span> : La musique sera jouée dès le chargement de la page (à éviter car ça peut être très chiant en vrai ^^)</li>
            <li><span class="mise_en_valeur1">preload</span> : Indique si la musique peut être préchargée dès le chargement de la page, cet attribut peut prendre les valeurs suivantes :
                <ul>
                    <li><span class="mise_en_valeur1">auto</span> : Valeur par défaut</li>
                    <li><span class="mise_en_valeur1">metadata</span> : Charge uniquement les métadonnées (durée, etc..)</li>
                    <li><span class="mise_en_valeur1">none</span> : Pas de préchargement (pratique si on ne veut pas gaspiller de bande passante sur le site)</li>
                </ul>
            </li>
        </ul>
        <p>Le code suivant devrait donc suffire (on y insère un texte au cas où le lecteur ne s'affiche pas) :</p>
        <p class="citation_code_balise">
        &lt;audio src="mon_son.mp3" controls&gt;Veuillez mettre à jour votre navigateur !&lt;/audio&gt;
        </p>
        <p>Enfin, on peut proposer plusieurs versions du fichier audio au cas où le navigateur ne sait pas gérer le format proposé (ainsi il choisira automatiquement le format qu'il reconnaît):</p>
        <p class="citation_code_balise">
        &lt;audio controls&gt;
            &lt;source src="mon_son.mp3"&gt;
            &lt;source src="mon_son.ogg"&gt;
        &lt;/audio&gt;
        </p>

        <h2>Insertion d'une vidéo</h2>
        <p>On utilise la balise <strong>&lt;video src=""&gt;&lt;/video&gt;</strong>, en mettant l'URL de la vidéo entre les guillemets, et on la complète comme suit :</p>
        <ul>
            <li><span class="mise_en_valeur1">controls</span> : Ajoute les boutons "Lecture", "Pause" et la barre de défilement</li>
            <li><span class="mise_en_valeur1">poster</span> : Ajoute une image à la place de la vidéo tant que celle-ci n'est pas lancée; Par défaut le navigateur prend la première image de la vidéo mais comme il s'agit souvent d'une image noire ou peu représentative de la vidéo, cela peut être pratique d'utiliser cet attribut (en faisant une capture d'écran d'un moment de la vidéo par exemple)</li>
            <li><span class="mise_en_valeur1">width</span> : Modifie la largeur de la vidéo</li>
            <li><span class="mise_en_valeur1">height</span> : Modifie la hauteur de la vidéo</li>
            <li><span class="mise_en_valeur1">loop</span> : La vidéo sera jouée en boucle</li>
            <li><span class="mise_en_valeur1">autoplay</span> : La vidéo sera jouée dès le chargement de la page (là encore, à éviter car ça peut être très chiant ^^)</li>
            <li><span class="mise_en_valeur1">preload</span> : Indique si la vidéo peut être préchargée dès le chargement de la page, cet attribut peut prendre les valeurs suivantes :
                <ul>
                    <li><span class="mise_en_valeur1">auto</span> : Valeur par défaut, c'est le navigateur qui décide s'il doit précharger toute la vidéo ou uniquement les métadonnées, ou aucun des deux</li>
                    <li><span class="mise_en_valeur1">metadata</span> : Charge uniquement les métadonnées (durée, dimensions, etc..)</li>
                    <li><span class="mise_en_valeur1">none</span> : Pas de préchargement (pratique si on ne veut pas gaspiller de bande passante sur le site)</li>
                </ul>
            </li>
        </ul>
        <p>Les proportions de la vidéo sont toujours conservées, si on définit une largeur et une hauteur alors le navigateur fera en sorte de ne pas dépasser les dimensions indiquées, mais il conservera les proportions.</p>
        <p>Le code suivant devrait donc suffire (on y insère un texte au cas où le lecteur ne s'affiche pas) :</p>
        <p class="citation_code_balise">
        &lt;video src="ma_video.mp4" controls poster="ma_video.jpg" width="600"&gt;Veuillez mettre à jour votre navigateur !&lt;/video&gt;
        </p>

        <p>Comme pour l'audio, on peut proposer plusieurs versions du fichier vidéo au cas où le navigateur ne sait pas gérer le format proposé (ainsi il choisira automatiquement le format qu'il reconnaît):</p>
        <p class="citation_code_balise">
        &lt;video controls poster="ma_video.jpg" width="600"&gt;
            &lt;source src="ma_video.mp4"&gt;
            &lt;source src="ma_video.webm"&gt;
            &lt;source src="ma_video.ogv"&gt;
        &lt;/video&gt;
        </p>
        <p>Notons enfin qu'aujourd'hui les iPhone, iPad et iPod ne reconnaissent que le format H.264 (fichier.mp4 ) et uniquement si celui-ci apparaît en premier dans la liste .. il est donc recommandé d'indiquer le format H.264 en premier pour assurer une compatibilité maximale.</p>
        <h1 id="ancre_sur_creation_site">Créer un site internet</h1>
        <h2>Faire une maquette</h2>
        <p>Deux choix ici :</p>
        <ul>
            <li>On est graphiste (ou on a de l'inspiration) et on a l'habitude d'imaginer des designs, avec Gimp par exemple</li>
            <li>On va chercher une inspiration sur des sites Web comme https://html5up.net qui proposent des idées de design et qui peuvent parfois donner le code HTML/CSS tout prêt</li>
        </ul>
        <p>Une maquette correspond à l'image du résultat que l'on veut obtenir.</p>
        <p>Pour procéder à la création d'un site web on a deux étapes :</p>
        <ul>
            <li>Construction du squelette HTML de la page</li>
            <li>Mise en forme avec le CSS</li>
        </ul>

        <h2>Création du squelette de la page - Organiser le contenu en HTML</h2>
        <p>Ici on va avoir besoin des balises structurantes (<strong>&lt;header&gt;</strong>, <strong>&lt;section&gt;</strong>, <strong>&lt;nav&gt;</strong>, etc..) et universelles/génériques (<strong>&lt;div&gt;</strong>). <br />
        On utilisera de préférence une balise qui a du sens (structurante) mais si aucune balise ne semble convenir, on optera pour une balise universelle.</p>

        <p>Exemple d'une découpe (d'autres découpes peuvent convenir) avec la page suivante :</p>
        <p><img id="exemple_site" src="images_pour_mise_en_forme/exemple_de_site.png" title="Exemple de structure de site" alt="Exemple de structure de site"></p>

        <p>Exemple de code HTML pour obtenir cette page :</p>
        <p class="citation_code_balise">
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset=&quot;utf-8&quot; /&gt;
                &lt;link rel=&quot;stylesheet&quot; href=&quot;style.css&quot; /&gt;
                &lt;title&gt;Zozor - Carnets de voyage&lt;/title&gt;
            &lt;/head&gt;
            
            &lt;body&gt;
                &lt;div id=&quot;bloc_page&quot;&gt;
                    &lt;header&gt;
                        &lt;div id=&quot;titre_principal&quot;&gt;
                            &lt;div id=&quot;logo&quot;&gt;
                                &lt;img src=&quot;images/zozor_logo.png&quot; alt=&quot;Logo de Zozor&quot; /&gt;
                                &lt;h1&gt;Zozor&lt;/h1&gt;    
                            &lt;/div&gt;
                            &lt;h2&gt;Carnets de voyage&lt;/h2&gt;
                        &lt;/div&gt;
                        
                        &lt;nav&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accueil&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Blog&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;CV&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/header&gt;
                    
                    &lt;div id=&quot;banniere_image&quot;&gt;
                        &lt;div id=&quot;banniere_description&quot;&gt;
                            Retour sur mes vacances aux États-Unis...
                            &lt;a href=&quot;#&quot; class=&quot;bouton_rouge&quot;&gt;Voir l'article &lt;img src=&quot;images/flecheblanchedroite.png&quot; alt=&quot;&quot; /&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    
                    &lt;section&gt;
                        &lt;article&gt;
                            &lt;h1&gt;&lt;img src=&quot;images/ico_epingle.png&quot; alt=&quot;Catégorie voyage&quot; class=&quot;ico_categorie&quot; /&gt;Je suis un grand voyageur&lt;/h1&gt;
                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel enim mi, in lobortis sem. Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis. Nulla imperdiet mauris sed sapien dignissim id aliquam est aliquam. Maecenas non odio ipsum, a elementum nisi. Mauris non erat eu erat placerat convallis. Mauris in pretium urna. Cras laoreet molestie odio, consequat consequat velit commodo eu. Integer vitae lectus ac nunc posuere pellentesque non at eros. Suspendisse non lectus lorem.&lt;/p&gt;
                            &lt;p&gt;Vivamus sed libero nec mauris pulvinar facilisis ut non sem. Quisque mollis ullamcorper diam vel faucibus. Vestibulum sollicitudin facilisis feugiat. Nulla euismod sodales hendrerit. Donec quis orci arcu. Vivamus fermentum magna a erat ullamcorper dignissim pretium nunc aliquam. Aenean pulvinar condimentum enim a dignissim. Vivamus sit amet lectus at ante adipiscing adipiscing eget vitae felis. In at fringilla est. Cras id velit ut magna rutrum commodo. Etiam ut scelerisque purus. Duis risus elit, venenatis vel rutrum in, imperdiet in quam. Sed vestibulum, libero ut bibendum consectetur, eros ipsum ultrices nisl, in rutrum diam augue non tortor. Fusce nec massa et risus dapibus aliquam vitae nec diam.&lt;/p&gt;
                            &lt;p&gt;Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.&lt;/p&gt;
                        &lt;/article&gt;
                        &lt;aside&gt;
                            &lt;h1&gt;À propos de l'auteur&lt;/h1&gt;
                            &lt;img src=&quot;images/bulle.png&quot; alt=&quot;&quot; id=&quot;fleche_bulle&quot; /&gt;
                            &lt;p id=&quot;photo_zozor&quot;&gt;&lt;img src=&quot;images/zozor_classe.png&quot; alt=&quot;Photo de Zozor&quot; /&gt;&lt;/p&gt;
                            &lt;p&gt;Laisse-moi le temps de me présenter&amp;nbsp;: je m'appelle Zozor, je suis né un 23 novembre 2005.&lt;/p&gt;
                            &lt;p&gt;Bien maigre, n'est-ce pas ? C'est pourquoi, aujourd'hui, j'ai décidé d'écrire ma biographie afin que vous sachiez qui je suis réellement.&lt;/p&gt;
                            &lt;p&gt;&lt;img src=&quot;images/facebook.png&quot; alt=&quot;Facebook&quot; /&gt;&lt;img src=&quot;images/twitter.png&quot; alt=&quot;Twitter&quot; /&gt;&lt;img src=&quot;images/vimeo.png&quot; alt=&quot;Vimeo&quot; /&gt;&lt;img src=&quot;images/flickr.png&quot; alt=&quot;Flickr&quot; /&gt;&lt;img src=&quot;images/rss.png&quot; alt=&quot;RSS&quot; /&gt;&lt;/p&gt;
                        &lt;/aside&gt;
                    &lt;/section&gt;
                    
                    &lt;footer&gt;
                        &lt;div id=&quot;tweet&quot;&gt;
                            &lt;h1&gt;Mon dernier tweet&lt;/h1&gt;
                            &lt;p&gt;Hii haaaaaan !&lt;/p&gt;
                            &lt;p&gt;le 12 mai à 23h12&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div id=&quot;mes_photos&quot;&gt;
                            &lt;h1&gt;Mes photos&lt;/h1&gt;
                            &lt;p&gt;&lt;img src=&quot;images/photo1.jpg&quot; alt=&quot;Photographie&quot; /&gt;&lt;img src=&quot;images/photo2.jpg&quot; alt=&quot;Photographie&quot; /&gt;&lt;img src=&quot;images/photo3.jpg&quot; alt=&quot;Photographie&quot; /&gt;&lt;img src=&quot;images/photo4.jpg&quot; alt=&quot;Photographie&quot; /&gt;&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div id=&quot;mes_amis&quot;&gt;
                            &lt;h1&gt;Mes amis&lt;/h1&gt;
                            &lt;div id=&quot;listes_amis&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Pupi le lapin&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Mr Baobab&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Kaiwaii&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Perceval.eu&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Belette&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Le concombre masqué&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Ptit prince&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Mr Fan&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/footer&gt;
                &lt;/div&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </p>
        <p>Comme on peut le voir, le contenu de la page est placé dans une grande balise div ayant pour id bloc_page, cette balise englobe tout le contenu ce qui permet de fixer facilement les dimensions de la page et de centrer le site à l'écran.<br />
        Au fut et à mesure de la construction de la page, on rajoute souvent une balise div ça et là parce que cela semble nécessaire.</p>

        <h2>Création de la mise en page : Application du style CSS</h2>
        <p>Exemple de code CSS pour obtenir cette page :</p>
        <p class="citation_code_balise">
        /* Définition des polices personnalisées */

        @font-face
        {
            font-family: 'BallparkWeiner';
            src: url('polices/ballpark.eot');
            src: url('polices/ballpark.eot?#iefix') format('embedded-opentype'),
                 url('polices/ballpark.woff') format('woff'),
                 url('polices/ballpark.ttf') format('truetype'),
                 url('polices/ballpark.svg#BallparkWeiner') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        @font-face
        {
            font-family: 'Dayrom';
            src: url('polices/dayrom.eot');
            src: url('polices/dayrom.eot?#iefix') format('embedded-opentype'),
                 url('polices/dayrom.woff') format('woff'),
                 url('polices/dayrom.ttf') format('truetype'),
                 url('polices/dayrom.svg#Dayrom') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        /* Eléments principaux de la page */

        body
        {
            background: url('images/fond_jaune.png');
            font-family: 'Trebuchet MS', Arial, sans-serif;
            color: #181818;
        }

        #bloc_page
        {
            width: 900px;
            margin: auto;
        }

        section h1, footer h1, nav a
        {
            font-family: Dayrom, serif;
            font-weight: normal;
            text-transform: uppercase;
        }

        /* Header */

        header
        {
            background: url('images/separateur.png') repeat-x bottom;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        #titre_principal
        {
            display: flex;
            flex-direction: column;
        }

        #logo
        {
            display: flex;
            flex-direction: row;
            align-items: baseline;
        }

        #logo img
        {
            width: 59px;
            height: 60px;
        }

        header h1
        {
            font-family: 'BallparkWeiner', serif;
            font-size: 2.5em;
            font-weight: normal;
            margin: 0 0 0 10px;
        }

        header h2
        {
            font-family: Dayrom, serif;
            font-size: 1.1em;
            margin-top: 0px;
            font-weight: normal;
        }

        /* Navigation */

        nav ul
        {
            list-style-type: none;
            display: flex;
        }

        nav li
        {
            margin-right: 15px;
        }

        nav a
        {
            font-size: 1.3em;
            color: #181818;
            padding-bottom: 3px;
            text-decoration: none;
        }

        nav a:hover
        {
            color: #760001;
            border-bottom: 3px solid #760001;
        }

        /* Bannière */

        #banniere_image
        {
            margin-top: 15px;
            height: 200px;
            border-radius: 5px;
            background: url('images/sanfrancisco.jpg') no-repeat;
            position: relative;
            box-shadow: 0px 4px 4px #1c1a19;
            margin-bottom: 25px;
        }

        #banniere_description
        {
            position: absolute;
            bottom: 0;
            border-radius: 0px 0px 5px 5px;
            width: 99.5%;
            height: 33px;
            padding-top: 15px;
            padding-left: 4px;
            background-color: rgba(24,24,24,0.8);
            color: white;
            font-size: 0.8em;
            
        }

        .bouton_rouge
        {
            height: 25px;
            position: absolute;
            right: 5px;
            bottom: 5px;
            background: url('images/fond_degraderouge.png') repeat-x;
            border: 1px solid #760001;
            border-radius: 5px;
            font-size: 1.2em;
            text-align: center;
            padding: 3px 8px 0px 8px;
            color: white;
            text-decoration: none;
        }

        .bouton_rouge img
        {
            border: 0;
        }

        /* Corps */

        section
        {
            display: flex;
            margin-bottom: 20px;
        }

        article, aside
        {
            text-align: justify;
        }

        article
        {
            margin-right: 20px;
            flex: 3;
        }

        .ico_categorie
        {
            vertical-align: middle;
            margin-right: 8px;
        }

        article p
        {
            font-size: 0.8em;
        }

        aside
        {
            flex: 1.2;
            position: relative;
            background-color: #706b64;
            box-shadow: 0px 2px 5px #1c1a19;
            border-radius: 5px;
            padding: 10px;
            color: white;
            font-size: 0.9em;
        }

        #fleche_bulle
        {
            position: absolute;
            top: 100px;
            left: -12px;
        }

        #photo_zozor
        {
            text-align: center;
        }

        #photo_zozor img
        {
            border: 1px solid #181818;
        }

        aside img
        {
            margin-right: 5px;
        }

        /* Footer */

        footer
        {
            display: flex;
            background:  url('images/ico_top.png') no-repeat top center, url('images/separateur.png') repeat-x top, url('images/ombre.png') repeat-x top;
            padding-top: 25px;
        }

        footer p, footer ul
        {
            font-size: 0.8em;
        }

        footer h1
        {
            font-size: 1.1em;
        }


        #tweet
        {
            width: 28%;
        }

        #mes_photos
        {
            width: 35%;
        }

        #mes_amis
        {
            width: 31%;
        }

        #mes_photos img
        {
            border: 1px solid #181818;
            margin-right: 2px;
        }

        #listes_amis
        {
            display: flex;
            justify-content: space-between;
            margin-top: 0;
        }

        #mes_amis ul
        {
            list-style-image: url('images/ico_liensexterne.png');
            padding-left: 2px;
        }

        #mes_amis a
        {
            text-decoration: none;
            color: #760001;
        }
        </p>
        <p>Le but dans une maquette est d'obtenir le rendu le plus proche, mais il ne faut pas chercher la perfection car cela peut différer d'un navigateur à l'autre.</p>
        <p>Pour mettre en forme le design, on procède en plusieurs étapes :</p>
        <ul>
            <li>Les polices personnalisées</li>
            <li>La définition des styles principaux de la page (largeur du site, fond, couleur par défaut du texte)</li>
            <li>En-tête et liens de navigation</li>
            <li>Bannière</li>
            <li>Section principale du corps de page, au centre</li>
            <li>Pied de page</li>

        </ul>
        <p>Enfin, comme nous pouvons le voir, il y a une imbrication des blocs, cela est pratique pour placer tel élément à telle place.</p>

        <h2>Vérification du site</h2>
        <p>Une fois le code HTML et CSS fait, il reste deux étapes :</p>
        <ul>
            <li>Vérifier que tout s'affiche correctement sur différents navigateurs</li>
            <li>Vérifier que le code est ok, via le site http://validator.w3.org</li>
        </ul>   
    </article>
    <nav id="sous_menu">
        <p><a href="#ancre_sur_semantique">La sémantique</a></p>
        <p><a href="#ancre_sur_bem">La méthodologie et nommage</a></p>
        <p><a href="#ancre_sur_les_balises">Les balises</a></p>
        <p><a href="#ancre_sur_les_atributs">Les attributs</a></p>
        <p><a href="#ancre_sur_structure_base_page_html5">Structure de base d'une page HTML5</a></p>
        <p><a href="#ancre_sur_les_commentaires">Les commentaires</a></p>
        <p><a href="#ancre_sur_accessibilite_code_source">Accessibilité d'un code source</a></p>
        <p><a href="#ancre_sur_les_paragraphes">Les paragraphes</a></p>
        <p><a href="#ancre_sur_les_titres">Les titres</a></p>
        <p><a href="#ancre_sur_la_mise_en_valeur">La mise en valeur</a></p>
        <p><a href="#ancre_sur_les_listes">Les listes</a></p>
        <p><a href="#ancre_sur_les_liens">Les liens</a></p>
        <p><a href="#ancre_sur_les_images">Les images</a></p>
        <p><a href="#ancre_sur_les_figures">Les figures</a></p>
        <p><a href="#ancre_sur_les_attributs_class_id">Les attributs class et id</a></p>
        <p><a href="#ancre_sur_les_positions">Les positions</a></p>
        <p><a href="#ancre_sur_les_balises_structurantes">Les différentes balises structurantes de HTML5</a></p>
        <p><a href="#ancre_sur_les_attributs_les_boites">Le modèle des boîtes</a></p>
        <p><a href="#ancre_sur_flexbox">Mise en page avec Flexbox</a></p>
        <p><a href="#ancre_sur_les_techniques_obsoletes">Techniques obsolètes mais à connaître</a></p>
        <p><a href="#ancre_sur_les_tableaux">Les tableaux</a></p>
        <p><a href="#ancre_sur_les_formulaires">Les formulaires</a></p>
        <p><a href="#ancre_sur_les_formats_multimedia">Multimédia</a></p>
        <p><a href="#ancre_sur_creation_site">Créer un site internet</a></p>
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