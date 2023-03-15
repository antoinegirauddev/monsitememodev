<?php 
    include "./php/includes/templates/header.tpl.php";
?>
                    <h2>Le langage CSS</h2>
                </div>    
<?php 
    include "./php/includes/templates/nav.tpl.php"
?>               
</header> 
<section>
    <article>
        <p class="introduction_langage">Envie d'apprendre le langage CSS, pas de soucis :D :<br /></p>
        <p>Avant tout il faut savoir que le CSS signifie "Cascading Style Sheets : feuilles de style en cascade", ce qui signifie que si on donne plusieurs règles CSS pour une balise HTML, c'est la dernière règle qui s'applique.</p>

        <h1 id="ancre_sur_le_format">Le format</h1>
        <p>Appelé par un sélecteur/attribut (class, id, span, div) ou une balise (p, em, h1, ..), on a ensuite une accolade ouvrante, une propriété et une valeur et un ; par ligne, et une accolade fermante, exemple : <br />
        <p class="presentation">
        p
        {
            propriete1: valeur1;
            propriete2: valeur2;
        }
        </p>
        <ul>
            <li><p><strong>class</strong> est un attribut que l'on rajoute dans le HTML fonctionne sur toutes les balises de type inline, on la place dans un paragraphe entourant du texte, tout comme "strong" ou "em", on la place dans le HTML en début de balise, par exemple : <span class="mise_en_valeur1">h1 class="nomdelaclasse"</span>, puis en CSS on l'appelle avec un <span class="mise_en_valeur1">"."</span>, donc ici : <span class="mise_en_valeur1">.introduction</span></p></li>
            <li><p><strong>id</strong> est un attribut de balise HTML comme "class" sauf qu'on ne peut la mettre qu'une fois, vu que c'est un id, donc ça donne de même : <span class="mise_en_valeur1">h1 id="nomdelid"</span>, par contre on l'appelle avec un <span class="mise_en_valeur1">#</span>, ce qui en CSS donne <span class="mise_en_valeur1">#nomdelid</span>, en général, on met des id que sur des éléments qui sont uniques dans la page, comme par exemple le logo </p></li>
        </ul>
        <p class="italique">L'inconvénient c'est qu'on ne peut pas sélectionner un mot ou un texte en particulier dans un paragraphe ou un titre par exemple, pour cela on a deux autres balises :</p>
        <ul>
            <li><p><strong>span</strong> est une balise HTML de type <em>inline</em>, on la place <em>à l'intérieur d'un paragraphe, autour du texte souhaité</em>, tout comme "strong" ou "em", en HTML on entour donc le texte souhaité par cette balise en lui donnant une classe, ce qui donne : <span class="mise_en_valeur1">span class="nomdelaclasse"</span>, puis en CS on l'appelle avec un <span class="mise_en_valeur1">"."</span> vu que c'est une classe, donc : <span class="mise_en_valeur1">.nomdelaclasse</span></p></li>
            <li><p><strong>div</strong> est une balise HTML de type <em>block</em>, on la place <em>en dehors d'un paragraphe/texte</em>, tout comme "p" ou "h1", leur point commun est qu'elles créent un nouveau bloc dans la page et provoquent un retour à la ligne.</p></li>
        </ul>

        <h1 id="ancre_sur_selection_element">D'autres façons de sélectionner un élément</h1>
        <p>En CSS on pourra sélectionner tous les éléments grâce de la page via <strong>*</strong> :</p>
        <p class="citation_code_balise">
        *
        {
            color: red;
        }
        </p>
        <p>Pour sélectionner des éléments qui suivent d'autres éléments, on utilise le <strong>+</strong>, exemple pour sélectionner tous les paragraphes qui suivent les titres h1 on utilisera <strong>h1 + p</strong></p>
        <p>Pour cibler les h1 et les h2 et les h3 en une fois, on peut faire <strong>h1,h2,h3</strong>.</p>
        <p>Enfin, pour sélectionner des éléments dans d'autres éléments, par exemple toutes les balises em qui se trouvent dans une balise h1, on utilisera l'espace : <strong>h1 em</strong></p>

        <h1 id="ancre_sur_les_tailles">Les tailles </h1>
        <ul>
            <li>Taille fixée en <em>absolue</em> à 16px avec <strong>font-size: 16px;</strong> -  elle peut être fixée en pixels, en centimètres ou millimètres, exemple avec <span class="t24px">24px</span> ou <span class="t1cm">1cm</span> ou <span class="t9mm">9mm</span>.</li>
            <li>Taille en <em>relative</em> avec <strong>font-size: small;</strong> - Toutes les valeurs possibles sont : xx-small,x-small,medium,moyen,large,x-large et xx-large, exemple avec <span class="x_large">x-large</span>.</li>
            <li>Taille en <em>relative</em> avec <strong>font-size: 0.8em;</strong> - le nombre décimale s'écrit avec un ".", exemple avec <span class="t0_8em">0.8em</span>.</li>
            <li>Taille en <em>relative</em> avec <strong>font-size: 110ex;</strong> - cette valeur est un pourcentage, exemple avec <span class="t2ex">2ex</span></li>
        </ul>
        <h1 id="ancre_sur_les_polices">Les polices </h1>
        
        <p>Pour indiquer une police on utilise <strong>font-family</strong>, exemple avec :
        <p class="citation_code_balise">
        p
        {
            font-family: Impact, "Arial Black", Arial, Verdana, sans-serif;
        }
        </p>
        <p class="police">Avec l'exemple ci-dessus, on va définir pour les paragraphes la police en "Impact", et si elle n'est pas présente, le navigateur va choisir la police "Arial Black", sinon "Arial", etc.. "Arial Black" est entre guillemet car elle contient un espace.</p><br />

        <p>On a aussi la possibilité de faire appel à une police installée dans le dossier du site avec <strong>@font-face</strong> depuis CSS3.<br />
        Il faudra cependant que le navigateur des visiteurs télécharge automatiquement le fichier de la police qui peut dépasser 1mo, donc attention à choisir une police libre de droit et assez légère.<br />
        Le site <a href="http://www.fontsquirrel.com/">fontsquirrel.com</a> permet de télécharger des packs prêts à l'emploi.<br /><br />
        Il existe plusieurs formats de fichiers de polices, et ceux-ci ne fonctionnent pas sur tous les navigateurs, voici un résumé :</p>
        <ul>
            <li><span class="mise_en_valeur1">.ttf</span> : TrueType Font - Fonctionne sur IE9 et tous les autres navigateurs</li>
            <li><span class="mise_en_valeur1">.eot</span> : Embedded OpenType - Fonctionne sur Internet Explorer uniquement, toutes versions,e format est propriétaire, produit par Microsoft</li>
            <li><span class="mise_en_valeur1">.otf</span> : OpenType Font - Ne fonctionne pas sur Internet Explorer</li>
            <li><span class="mise_en_valeur1">.svg</span> : SVG Font - Le seul format reconnu sur les iPhone et iPad pour le moment</li>
            <li><span class="mise_en_valeur1">.woff</span> : Web Open Font Format - Nouveau format conçu pour le Web, qui fonctionne sur IE9 et tous les autres navigateurs</li>
        </ul>
        <p>En CSS, pour définir une nouvelle police, il faut la déclarer comme ceci :</p>
        <p class="citation_code_balise">
        @font-face
        {
            font-family: 'ma_police';
            src: url('ma_police.eot');
        }
        </p>
        <p>Le fichier de police (ici "ma_police.eot") doit ici être situé dans le même dossier que le fichier CSS (ou dans un sous-dossier, si on utilise un chemin relatif).<br />
        L'idéal est de proposer plusieurs formats pour la police vu que le navigateur ne lira pas forcément ce dernier dernier s'il ne lui est pas compatible (par exemple pour eot qui ne sera lu que pour IE).<br />
        Le navigateur téléchargera donc le format de police qu'il sait lire; Voici comment indiquer plusieurs formats, et aussi comment appliquer la police sur le titre par exemple :</p>
        <p class="citation_code_balise">
        @font-face
        {
            font-family: 'ma_police';
            src: url('ma_police.eot') format('eot'),
            url('ma_police.woff') format('woff'),
            url('ma_police.ttf') format('truetype'),
            url('ma_police.svg') format('svg');
        }<br />
        h1 /* Utilisation de la police qu'on vient de définir sur les titres *
        {
            font-family: 'ma_police', Arial, serif;
        }
        </p>
        <p>D'ailleurs il y a moyen de bien s'amuser, tu verras que lorsque tu cliques sur les citations de code sur cette page j'ai appliqué une font perso, ainsi qu'un nouveau style :D :</p>
        <p class="citation_code_balise">
        .citation_code_balise:active
        {
            border: 7px skyblue inset;
            border-radius: 20px / 30px;
            box-shadow: -18px -30px 75px lightgreen;
            font-family: 'ma_police_perso_en_gras';
            background-color: mistyrose;
            font-size: 1.5em;
            color: orangered;
        }<br />
        <h1 id="ancre_sur_italique_et_gras">Italique et gras</h1>
        <ul>
            <li><strong>font-style: italic;</strong> <span class="italique">permet de mettre le texte en italique.</span></li>
            <li><strong>font-style: oblique;</strong> <span class="oblique">c'est pour l'oblique, et on peut utiliser "normal" pour remettre en normal.</span></li>
            <li><span class="gras">Pour la mise en gras</span> on utilise <strong>font-weight: bold;</strong>, l'autre valeur est "normal".</li>
        </ul>
        <h1 id="ancre_sur_les_decorations">Décoration</h1>
        <p><strong>text-decoration</strong> est utilisée ici, dont voici les exemples de valeurs :</p>
        <ul>
            <li><strong>text-decoration: blink;</strong>   -    <span class="blink"> Clignotant selon le navigateur utilisé</span></li>
            <li><strong>text-decoration: underline;</strong>   -    <span class="underline"> Souligné</span></li>
            <li><strong>text-decoration: line-through;</strong>   -    <span class="barre"> Barré</span></li>
            <li><strong>text-decoration: overline;</strong>   -    <span class="overline"> Avec une ligne au-dessus</span></li>
            <li><strong>text-decoration: none;</strong>   -    <span class="none"> Avec, euh, un mode normal :D</span></li>
        </ul>
       
        <h1 id="ancre_sur_l_alignement">L'alignement</h1>
        <p>On utilise la propriété "text-align" pour l'alignement, voici les différents valeurs :</p>
        <ul>
            <li><strong>text-align: left;</strong> - Texte à <span class="mise_en_valeur1">gauche</span> (réglage d'ailleurs par défaut)</li>
            <p class="gauche">exemple :)</p>
            <li><strong>text-align: center;</strong> - Texte au <span class="mise_en_valeur1">centre</span></li>
            <p class="centre">exemple :)</p>
            <li><strong>text-align: right;</strong> - Texte à <span class="mise_en_valeur1">droite</span></li>
            <p class="droite">exemple :)</p>
            <li><strong>text-align: justify;</strong> - Et texte <span class="mise_en_valeur1">justifié</span>, ce dernier permet de faire en sorte qu'il prenne toute la largeur possible, sans laisser d'espace blanc à la fin des les lignes</li>
            <p class="justify">exemple :)</p>
        </ul>
        <p><span class="mise_en_valeur1">À noter qu'on ne peut modifier l'alignement du texte d'une balise <em>inline</em> (comme span, a, em, strong, ..). l'alignement ne fonctionne que sur des balises de type <em>block</em> (p, div, h1, h2, ..)</span> et c'est un peu logique, quand on y pense : on ne peut pas modifier l'alignement de quelques mots au milieu d'un paragraphe ! C'est donc en général le paragraphe entier qu'il vous faudra aligner.</p>

        <h1 id="ancre_sur_les_flottants">Les flottants</h1>
        <p>Pour faire flotter une image on utilise la propriété float, avec <strong>float: left</strong> ou <strong>float: right</strong>, en fait flotter revient à mettre une image à un endroit et mettre du texte à droite ou à gauche</p>
        <p>Si d'un seul coup on veut que le texte ne soit plus à droite (ou à gauche) de l'image, il faut arrêter le flottant (ou mettre plein de br mais ce serait pas propre)
        Pour arrêter un flottant, on utilise donc la propriété <strong>clear: both</strong></p>

        <h1 id="ancre_sur_les_couleurs">Les couleurs</h1>
        <p>On peut appeler les couleurs de plusieurs façon différente (pour du texte, la couleur du fond, etc..), dont voici les propriétés :</p>
            <ul>
                <li><strong>color: bleu</strong> - Avec la couleur directement</li>
                <li><strong>color: #FF5A28</strong> - Avec la notation hexadécimale</li>
            </ul>
                <p class="mise_en_valeur2">Ces lettres ou chiffres fonctionnent deux par deux. Les deux premiers indiquent une quantité de rouge, les deux suivants une quantité de vert et les deux derniers une quantité de bleu.<br />
                Notez qu'il existe une notation raccourcie : on peut écrire une couleur avec seulement trois caractères. Par exemple : #FA3 équivaut à écrire #FFAA33.</p>
            <ul>
                <li><strong>color: rgb(240,96,204)</strong> - Avec la méthode RGB, quantité de rouge, de vert et de bleu</li>
            </ul>

        <h1 id="ancre_sur_les_couleurs_fond">La couleur du fond</h1>
        <p>Ici on utilise la propriété <strong>background-color</strong>, par exemple :</p>
        <p class="citation_code_balise">
        p
        {
             background-color: black; /* Le fond de la page sera noir */
             color: white; /* Le texte de la page sera blanc */
        }
        </p>

        <h1 id="ancre_sur_image_fond">Image de fond</h1>
        <p>Pour appliquer une image de fond c'est la propriété <strong>background-image</strong>, exemple :</p>
        <p class="citation_code_balise">
        p
        {
            background-image: url("arc_en_ciel"); /* Le fond du paragraphe aura l'image nommée arc_en_ciel.png */
        }
        </p>
        <p class="mise_en_valeur2">L'adresse indiquant où se trouve l'image de fond peut être écrite en <span class="mise_en_valeur1">absolu (http://…)</span> ou en <span class="mise_en_valeur1">relatif (fond.png)</span>.</p><br />
        <p> Différentes propriétés permettent de changer le comportement de l'image de fond :
        <strong>background-attachment</strong> : Fixer le fond, composé de :</p>
        <ul>
            <li><strong>background-attachment: fixed;</strong> - L'image de fond <span class="mise_en_valeur1">reste fixe</span></li>
            <li><strong>background-attachment: scroll</strong> - L'image de fond <span class="mise_en_valeur1">défile avec le texte</span></li>
        </ul><br />
        <p><strong>background-repeat</strong> : Répéter le fond, composé de :</p>
        <p class="mise_en_valeur2">(En effet par défaut, l'image de fond est répétée en mosaïque, il est possible de la changer).</p>
        <ul>
            <li><strong>background-repeat: no-repeat;</strong> - Le fond ne sera pas répété. L'image sera donc unique sur la page</li>
            <li><strong>background-repeat: repeat-x;</strong> - Le fond sera répété uniquement sur la première ligne, horizontalement</li>
            <li><strong>background-repeat: repeat-y;</strong> - Le fond sera répété uniquement sur la première colonne, verticalement</li>
            <li><strong>background-repeat: repeat;</strong> - Le fond ne sera répété en mosaïque (par défaut)</li>
        </ul><br />
        <p><strong>background-position</strong> : Définir la position du fond, composé de cinq valeurs :</p>
        <ul>
            <li><strong>background-position: top;</strong> - En haut</li>
            <li><strong>background-position: bottom;</strong> - En bas</li>
            <li><strong>background-position: left;</strong> - À gauche</li>
            <li><strong>background-position: center;</strong> - Au centre</li>
            <li><strong>background-position: right;</strong> - À droite</li>
        </ul>
        <p class="mise_en_valeur2">Il est possible de combiner ces mots. Par exemple, pour aligner une image en haut à droite avec <strong>background-position: top right;</strong></p>
        <p class="citation_code_balise">
        body
        {
            background-image: url("soleil.png");
            background-attachment: fixed; /* Le fond restera fixe */
            background-repeat: no-repeat; /* Le fond ne sera pas répété */
            background-position: top right; /* Le fond sera placé en haut à droite */>
        }
        </p>
        <h1 id="ancre_sur_superpropriete">Les super-propriétés</h1>
        <p>La <span class="mise_en_valeur1"> super-propriété</span> <strong>backgroung</strong> permet, comme d'autres <span class="mise_en_valeur1">"super-propriétés"</span> de combiner plusieurs propriétés, ainsi on peut combiner <strong>background-image</strong>, <strong>background-repeat</strong>, <strong>background-attachment</strong> et <strong>background-position</strong>, exemple :</p>
       <p class="citation_code_balise">
        body
        {
            background: url("arc_en_ciel.png") fixed no-repeat top right;        
        }
        </p>
        <p class="mise_en_valeur2">L'ordre des valeurs n'a pas d'importance, on peut combiner les valeurs dans n'importe quel ordre; On est pas obligé de mettre toutes les valeurs, ainsi si on ne veut pas mettre fixed alors on ne la met pas.</p><br />
        <p>On peut donc mettre plusieurs images comme ceci :</p>
        <p class="citation_code_balise">
        body
        {
            background: url("soleil.png") fixed no-repeat top right, url("neige.png") fixed;
        }
        </p>
        
        <h1 id="ancre_sur_la_transparence">La transparence</h1>
        <p>Pour jouer avec les niveaux de transparence des éléments, on a deux propriétés :</p>
        <ul>
            <li><strong>opacity</strong> qui permet de gérer la transparence de tout le contenu d'un élément (comme un paragraphe), donc images et autres contenu dedans, exemple :</li>
            <p class="citation_code_balise">
            p
            {
                opacity: 1; /* Le paragraphe sera totalement opaque (par défaut) */
                opacity: 0; /* Le paragraphe sera totalement transparent */
                opacity: 0.8; /* Le paragraphe sera un peu transparent */
            }
            </p>
            <li><strong>rgba</strong>, la notation RGBa permet de gérer la transparence pour la couleur de fond dans l'exemple suivant :</li>
            <p class="citation_code_balise">
            p
            {
                background-color: rgba(255, 0, 0, 0.5); /* Fond rouge à moitié transparent */
            }
            </p>
            <p class="mise_en_valeur2">Il s'agit en fait de la notation RGB que nous (comme vue précédemment), mais avec un quatrième paramètre : le niveau de transparence (appelé « canal alpha »). <br />
            Attention, ce n'est pas compatible avec les anciens navigateurs, c'est pourquoi il est recommandé de déclarer quand même un fond gérer la transparence pour ces derniers, donc dans le code on aura deux lignes pour gérer toutes les éventualités :
             </p>
             <p class="citation_code_balise">
             p
             {
                 background-color: rgb(255,0,0); /* Pour les navigateurs anciens */
                background-color: rgba(255,0,0,0.5); /* Pour les navigateurs plus récents */

             }
            </p>
        </ul>

        <h1 id="ancre_sur_les_bordures">Les bordures</h1>
        <p> De nombreuses propriétés permettent de modifier l'apparence des bordures : <strong>border-width</strong>, <strong>border-color</strong>, <strong>border-style</strong>, .. <br />
        Mais du coup on peut aussi utiliser la <span class="mise_en_valeur1"> super-propriété</span> <strong>border</strong> pour laquelle on indique : </p>
        <ul>
            <li>La <span class="mise_en_valeur1">largeur de la bordure</span>, valeur à mettre en pixel</li>
            <li>Sa <span class="mise_en_valeur1">couleur</span>, que l'on peut renseigner avec un nom de couleur, avec une valeur hexadécimale ou une valeur RGB</li>
            <li>Le <span class="mise_en_valeur1">type de bordure</span> grâce aux propriétés suivantes :
                <ul>
                    <li><strong>border: none;</strong> - pas de bordure (par défaut)</li>
                    <li><strong>border: solid;</strong> - un trait simple</li>
                    <li><strong>border: dotted;</strong> - en pointillés</li>
                    <li><strong>border: dashed;</strong> - avec des tirets</li>
                    <li><strong>border: double;</strong> - avec une bordure double</li>
                    <li><strong>border: groove;</strong> - en relief</li>
                    <li><strong>border: ridge;</strong> - avec un autre effet de relief</li>
                    <li><strong>border: inset;</strong> - avec un effet 3D global enfoncé</li>
                    <li><strong>border: outset;</strong> - avec un effet 3D global surélevé</li>
                </ul>
            </li>
            <img src="images_pour_mise_en_forme/les_bordures.png"/>
        </ul>
        <p>Par ailleurs on peut aussi mettre un effet que sur un ou plusieurs côtés de la bordure</p>
        <ul>
                <li><strong>border: top;</strong> - pas de bordure (par défaut)</li>
                <li><strong>border: bottom;</strong> - un trait simple</li>
                <li><strong>border: left;</strong> - en pointillés</li>
                <li><strong>border: right;</strong> - avec des tirets</li>
        </ul>
        <p>Ainsi avec la propriété <strong>border-top-width</strong> on gère l'épaisseur de la bordure du haut; Et avec la <span class="mise_en_valeur1"> super-propriété</span> <strong>border</strong> en précisant le côté, on gère l'épaisseur et les autres options, du côté précisé, exemple :</p>
        <p class="citation_code_balise">
        p
        {
            border-left: 2px solid black; /* Le paragraphe aura une bordure gauche noire de trait simple et de 2px d'épaisseur */
            border-right: 1px dotted white; /* Le paragraphe aura une bordure droite blanche en pointillé et de 1px d'épaisseur */
        }
        </p><br />
        <p>Enfin (depuis CSS3), on peut gérer l'<span class="mise_en_valeur1">arrondie des bordures</span>, comme on peut le voir dans les citations de code de cette page; Il s'agit pour cela de la propriété <strong>border-radius</strong> en indiquant l'importance de l'arrondi en pixel, par exemple :</p>
        <p class="citation_code_balise">
        p
        {
            border-radius: 10px;
        }
        </p>
        <p>Il est également possible de préciser l'arrondi de l'angle (respectivement dans l'ordre : <span class="mise_en_valeur1">en haut à gauche, en haut à droite, en bas à droite, en bas à gauche</span>), comme ceci :</p>
        <p class="citation_code_balise">
        p
        {
            border-radius: 10px 5px 10px 5px;
        }
        <p>Enfin, il est possible d'<span class="mise_en_valeur1">affiner l'arrondi</span> des angles en créant des courbes elliptiques, pour cela il suffit d'indiquer deux valeurs séparées par un slash, comme suit :</p>
        <p class="citation_code_balise">
        p
        {
            border-radius: 20px / 10px;
        }

        <h1 id="ancre_sur_les_ombres">Les ombres</h1>
        <p>On peut appliquer les ombres sur deux éléments, les boîtes ou le texte.<br />
        Ainsi <strong>box-shadow</strong> et <strong>text-shadow</strong> seront utilisées pour cela.
        On y gère quatre éléments :</p>
        <ul>
            <ol>Le décalage horizontal de l'ombre</ol>
            <ol>Le décalage vertical de l'ombre</ol>
            <ol>L'adoucissement du dégradé</ol>
            <ol>La couleur de l'ombre</ol>
        </ul>
        <p>Donc pour une ombre orange de 14 pixels(comme l'ombre suivante, on va avoir :</p>
        <p class="citation_code_balise">
        p
        {
                box-shadow: 14px 14px 14px lightcoral;
        }
        <p>Et donc, pour une ombre bleue nuit décalée de 8px à l'horizontal, de 15px à la verticale, et légèrement adoucie, mais pour le texte on aura :</p>
           <p class="citation_code_balise">
        p
        {
                text-shadow: 8px 15px 3px midnightblue;
        }
        </p>
        <p class="ombre">Ça donne ça :D</p>


        <h1 id="ancre_sur_pseudo_formats">Apparence des éléments de façon dynamique avec les pseudo-formats</h1>
        <p>Des éléments peuvent changer une fois la page chargée, pour cela on utilise des <span class="mise_en_valeur1">pseudo-formats</span>, on les appelle en CSS en les rajoutants après le nom d'une balise ou d'une classe comme ceci par exemple </p>
       <p class="citation_code_balise">
        p:hover
        {
        }
        </p>
        <p> On peut agir de façon dynamique :</p>
       <ul>
           <li>Au survol</li>
           <p>Quand la souris est sur l'élément (paragraphe, titre, etc..), grâce au pseudo-format <strong>hover</strong> qui signifie survoler</p>
            <p class="citation_code_balise">
            h1:hover
            {
                color: green; /* Pour avoir les titres en vert quand on les survole */
            }<br />
            a /* Liens par défaut (non survolés) */
            {
                text-decoration: none;
                color: red;
                font-style: italic;
            }<br />
            a:hover /* Apparence au survol des liens */
            {
                text-decoration: underline;
                color: green;
            }
            </p>
           <li>Lors du clic</li>
            <p>Généralement utilisé que sur les liens, le style appliqué apparaît lorsque le bouton de la souris est enfoncé; On utilisera ici le pseudo-format <strong>active</strong></p>
            <p class="citation_code_balise">
            a:active
            {
                background-color: yellow;
                font-size: 10ex;
                color: red;
            }
            </p>
            <p>Ce qui donne, avec le lien suivant (que j'ai mis bien, bien, en valeur pour qu'on voit la différence :D : <br />a
            <span class="pseudo_format"><a href="images_pour_mise_en_forme/art_floral.jpg">Cliques ici et tu verras :D Tu peux même resté appuyer sur le bouton de la souris pour mieux voir ;)</a></span></p>
           <li>Lors du focus (élément sélectionné)</li>
           <p>Avec le pseudo-format <strong>focus</strong> on va pouvoir appliquer un style lorsque ce dernier est sélectionné (par exemple quand on clique sur un lien, il y a une petite bordure en pointillés autour, c'est cela qui est concerné), pratique surtout dans les formulaires quand on clique sur un endroit pour y saisir du texte.</p>
            <p class="mise_en_valeur2">Sous Chrome et Safari notamment, l'effet ne sera visible qu'en appuyant sur la touche "Tab".</p>
           <li>Lorsqu'un lien a été consulté</li>
           <p>Il est possible d'appliquer un style (pas grand chose à part la couleur) à un lien vers une page qui a déjà été vue (violet par défaut); On utilisera pour cela le pseudo-format <strong>visited</strong>, exemple :</p>
            <p class="citation_code_balise">
            a:visited
            {
                color: green;
            }
            </p>
        </ul>
        
        <h1 id="ancre_sur_animations">Les animations et les transitions</h1>

        <p>En CSS il est possible de faire des animations (appelées aussi "transitions"), comme faire pivoter des images en passant la souris dessus, et les faire changer de couleur, dans un sens puis dans un autre, avec différentes combinaisons ou des enchaînements de conditions.</p>
        <p>Il serait difficile de toutes les expliquer ou les montrer tellement il y en a, aussi voici quelques liens pratiques (disponibles aussi sur le lien en bas de page "Favoris") :</p>
            <ul>
                <li><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions">https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions</a></li>
                <li><a href="https://www.alsacreations.com/tuto/lire/873-transitions-css3-animations.html">https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Transitions/Using_CSS_transitions</a></li>
                <li><a href="https://cssreference.io/transitions/">https://cssreference.io/transitions/</a></li>
            </ul>
        <p>Les transitions, quant à elles, vont permettre, par exemple, de modifier l'axe (vertical/honizontal) d'une image, on pourrait imaginer l'afficher à l'envers ou encore en décalé.<br />
        Voici un lien sur la propriété qui permet de faire cela, <strong>transform</strong>, pour mieux comprendre :</p> 
            <ul>
                <li><a href="https://cssreference.io/property/transform/">https://cssreference.io/property/transform/</a></li>
            </ul>

        <h1 id="ancre_sur_responsive_design">Responsive design : Les Media Queries</h1>
        <p>Cette partie est indispensable, elle permet de gérer l’affichage en fonction des différentes résolutions d’écrans.<br />
        En effet, d’un écran large à un smartphone, en passant par un écran de PC portable, une tablette, etc.. , il y a de nombreuses résolutions différentes.<br />
        Les media queries (nouveautés de CSS3) sont des règles à appliquer pour changer le design du site en fonction des caractéristiques de l’écran, grâce à cela on crée un design qui s’adapte automatiquement à l’écran de chaque visiteur.<br />
        Il ne s'agit pas de nouvelles propriétés, mais de règles que l'on peut appliquer dans certaines conditions.<br /> Concrètement, on peut dire par exemple "Si la résolution de l'écran du visiteur est inférieure à tant, alors appliquer les propriétés CSS suivantes".<br /> 
        Cela permet de changer l'apparence du site dans certaines conditions : Augmenter la taille du texte, changer la couleur de fond, positionner différemment le menu, etc.., dans certaines résolutions (par exemple).<br />
        Les media queries ne concernent pas que les résolutions d'écran, on peut changer l'apparence du site en fonction d'autres critères comme le type d'écran (smartphone, télévision, projecteur…), le nombre de couleurs, l'orientation de l'écran (portrait ou paysage), etc.. Les possibilités sont nombreuses.</p>

        <h2>Appliquer une media query</h2>
        <p>Les media query sont donc des règles qui indiquent quand on doit appliquer des propriétés CSS, il y a deux facçons de les utiliser :</p>
        <ul>
            <li><span class="mise_en_valeur1">En chargeant une feuille de style CSS différente en fonction de la règle</span> (exemple : Si la résolution est inférieure à 1280px de large, charger le fchier "petite_resolution.css").</li>
            <li><span class="mise_en_valeur1">En écrivant la règle directement dans le fichier .css habituel</span> (exemple : Si la résolution est inférieure à 1280px de large, charger les propriétés CSS ci-dessous)</li>
        </ul>

        <h2>Chargement d'une feuille de style différente</h2>
        <p>Pour rappel, au debut du fichier HTML on a une ligne &lt;link rel="stylesheet" href="style.css" /&gt;<br />
        On dit peut lui ajouter un attribut media, dans lequel on va écrire la règle qui doit s'appliquer pour que le fichier soit chargé, dans ce cas on dit qu'on fait une "requête de media" (media query en anglais), voici un exemple :
        </p>
        <p class="citation_code_balise">
        &lt;link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" /&gt;
        </p>
        <p>Au final, le code HTML pourrait proposer plusieurs fichiers CSS, un par défaut (qui est chargé dans tous les cas) et un ou deux autres qui seront chargés en supplément, uniquement si la règle correspondante s'applique :</p>
        <p class="citation_code_balise">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;meta charset="utf-8" /&gt;
                &lt;link rel="stylesheet" href="style.css" /&gt;      &lt;!-- Pour tout le monde --&gt;
                &lt;link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" /&gt;      &lt;!-- Pour ceux qui ont une résolution inférieure à 1280px --&gt;
                &lt;title&gt;Mon site internet&lt;/title&gt;
            &lt;/head&gt;
        </p>

        <h2>Chargement des règles directement dans la feuille de style</h2>
        <p>Une autre technique, peut-être plus pratique, consiste à écrire ces règles dans le même fichier CSS que d'habitude.<br />
        Dans ce cas, on écrit la règle dans le fichier .css  comme ceci :</p>
        <p class="citation_code_balise">
        @media screen and (max-width: 1280px)
        {
            /* Rédiger les propriétés CSS ici */
        }
        </p>

        <h2>Les règles disponibles</h2>
        <p>Il existe de nombreuses règles permettant de construire des media queries, voici les principales :</p>
        <ul>
            <li><span class="mise_en_valeur1">color</span> : Gestion de la couleur (en bits/pixel)</li>
            <li><span class="mise_en_valeur1">height</span> : Hauteur de la zone d'affichage (fenêtre)</li>
            <li><span class="mise_en_valeur1">width</span> : Largeur de la zone d'affichage (fenêtre)</li>
            <li><span class="mise_en_valeur1">device-height</span> : Hauteur du périphérique</li>
            <li><span class="mise_en_valeur1">device-width</span> : Largeur du périphérique</li>
            <li><span class="mise_en_valeur1">orientation</span> : Orientation du périphérique (portrait ou paysage)</li>
            <li><span class="mise_en_valeur1">media</span> : Type d'écran de sortie, dont voici quelques-une des valeurs possibles :
                <ul>
                    <li><span class="mise_en_valeur1">screen</span> : Écran "classique"</li>
                    <li><span class="mise_en_valeur1">handheld</span> : Périphérique mobile</li>
                    <li><span class="mise_en_valeur1">print</span> : Impression</li>
                    <li><span class="mise_en_valeur1">tv</span> : Télévision</li>
                    <li><span class="mise_en_valeur1">projetction</span> : Projecteur</li>
                    <li><span class="mise_en_valeur1">all</span> : Tous les types d'écrans</li>                    
                </ul>
            </li>
        </ul>
        <p>On peut rajouter le préfixe <span class="mise_en_valeur1">min-</span> ou <span class="mise_en_valeur1">max-</span> devant la plupart de ces règles.<br />
        Ainsi, <span class="mise_en_valeur1">min-width</span>  signifie "largeur minimale", <span class="mise_en_valeur1">max-height</span> "hauteur maximale", etc.<br />
        La différence entre width et device-width se perçoit surtout sur les navigateurs mobiles des smartphones.</p>
        <p>Les règles peuvent être combinées à l'aide des mots suivants :</p>
        <ul>
            <li><span class="mise_en_valeur1">only</span> : Uniquement</li>                    
            <li><span class="mise_en_valeur1">and</span> : Et</li>                    
            <li><span class="mise_en_valeur1">not</span> : Non</li>                    
        </ul>
        <p>Voici quelques exemples de media queries pour bien comprendre le principe :</p>
        <p class="citation_code_balise">
        /* Sur les écrans, quand la largeur de la fenêtre fait au maximum 1280px */
        @media screen and (max-width: 1280px)

        /* Sur tous types d'écran, quand la largeur de la fenêtre est comprise entre 1024px et 1280px */
        @media all and (min-width: 1024px) and (max-width: 1280px)

        /* Sur les téléviseurs */
        @media tv

        /* Sur tous types d'écrans orientés verticalement */
        @media all and (orientation: portrait)
        </p>

        <h2>Test des media queries</h2>
        <p>Les media queries sont surtout utilisées pour adapter le design du site aux différentes largeurs d'écran.<br />
        Voici un test simple : Changer la couleur et la taille du texte si la fenêtre fait plus ou moins de 1024 pixels de large; Pour le test, je vais utiliser la seconde méthode qui consiste à écrire la règle directement dans le même fichier .css que d'habitude :</p>
        <p class="citation_code_balise">
        /* Paragraphes en bleu par défaut */
        p
        {
            color: blue;
        }
        /* Nouvelles règles si la fenêtre fait au plus 1024px de large */
        @media screen and (max-width: 1024px)
        {
            p
            {
                color: red; 
                background-color: black;
                font-size: 1.2em;
            }
        }
        </p>
        <p>Dans la feuille CSS, j'ai d'abord demandé à ce que le texte des paragraphes soit écrit en bleu, puis j'ai ajouté une media query qui s'applique à tous les écrans dont la largeur ne dépasse pas 1024 px.<br />
        À l'intérieur, j'ai appliqué des règles CSS sur les paragraphes pour les écrire plus gros et en rouge, cela donne une apparence différente selon la taille de la fenêtre (ce que l'on peut voir en la redimensionnant) :<br />
        <span class="survol_image"><img src="images_pour_mise_en_forme/responsive_grande_fenetre.png" alt="Responsive grande fenêtre" title="Responsive grande fenêtre" /></p>

        <p>Maintenant, allons plus loin en changeant l'apparence du site vu en TP dans le cours sur le langage HTML :<br />
        Ce site est bien adapté à la plupart des résolutions d'écran mais, quand l'écran est plus petit que 1024 px, il devient nécessaire de "scroller" vers la droite pour voir toute la page, ce qui n'est pas très pratique en le consultant sur un petit écran.<br />
        Et si on utilisait ces media queries pour changer l'apparence du site sur les résolutions inférieures à 1024 px de largeur ?<br />
        Pour ce faire, voici les modifications à effectuer :</p>
        <ul>
            <li>Le menu de navigation en haut à droite sera disposé en hauteur plutôt qu'en largeur, et les liens seront écrits en plus petit</li>
            <li>La bannière avec le pont de San Francisco sera supprimée car elle prend beaucoup de place et n'apporte pas beaucoup d'informations</li>
            <li>Le bloc &lt;aside&gt; "À propos de l'auteur" sera placé sous l'article (et non pas à côté), et son contenu sera réorganisé (la photo de Zozor sera positionnée en flottant).</li>
        </ul>
        <p>On pourrait bien entendu faire beaucoup d'autres modifications (changer la couleur, la disposition du pied de page, etc..) mais cela sera déjà bien suffisant pour s'entraîner avec les media queries.</p>
        <p>Nous allons travailler directement à l'intérieur du fichier style.css bien qu'on pourrait choisir la solution de faire pointer le fichier HTML vers un fichier CSS spécifique pour cette résolution</p>
        <ul>
            <li><span class="gras">La page</span>
            <p>Pour le moment, la largeur de la page est fixée à 900 px et le contenu est centré :</p>
            <p class="citation_code_balise">
            #bloc_page
            {
                width: 900px;
                margin: auto;
            }
            </p>
            À la suite de ces lignes, on va donc ajouter la règle media query suivante :
            <p class="citation_code_balise">
            @media all and (max-width: 1024px)
            {
                #bloc_page
                {
                    width: auto;
                }
            }
            </p>
            <p>La règle signifie : « Pour tous les types d'écrans, si la largeur de la fenêtre ne dépasse pas 1024px, alors exécuter les règles CSS suivantes ».<br />
            Ici les règles CSS en question sont simples, il n'y en a en fait qu'une seule : on donne une largeur automatique à la page (plutôt qu'une largeur fixe de 900 px).<br />
            La page prendra alors tout l'espace disponible dans la fenêtre, cela évite l'apparition de barres de défilement horizontales sur les petites résolutions.<br />
            <span class="mise_en_valeur1">auto</span> est la valeur par défaut de la propriété <span class="mise_en_valeur1">width</span>.<br />
            Par défaut, les blocs ont une largeur automatique (ils prennent toute la place disponible), cette valeur "écrase" celle qui a été forcée à 900px quelques lignes plus haut : On revient donc au comportement par défaut du bloc.</p>
            </li>
            <li><span class="gras">Le menu de navigation</span>
            <p>On souhaite que le menu de navigation prenne moins de place sur les petites résolutions, aussi plutôt que de lui donner une dimension fixe, on va lui redonner sa dimension automatique flexible d'origine.<br />
            Chaque élément du menu s'écrira en dessous du précédent : Pour cela, on demande à ce que les éléments de la Flexbox soient organisés en colonne.<br />
            Enfin, le texte sera écrit plus petit et on retire la bordure en bas des liens lors du survol, car elle est moins adaptée à cette disposition.</p>
            <p class="citation_code_balise">
            @media all and (max-width: 1024px)
            {
                nav
                {
                    width: auto;
                    text-align: left;
                }
                nav ul
                {
                    flex-direction: column;
                }
                nav li
                {
                    padding-left: 4px;
                }
                nav a
                {
                    font-size: 1.1em;
                }
                nav a:hover
                {
                    border-bottom: 0;
                }
            }
            </p>
            </li>
            <li><span class="gras">La bannière</span>
            <p>Pour retirer la bannière, rien de plus simple : On va utiliser la propriété <span class="mise_en_valeur1">display</span>, à laquelle on va affecter la valeur <span class="mise_en_valeur1">none</span>.<br />
            Si la fenêtre est trop petite, on préfère masquer complètement la bannière :</p>
            <p class="citation_code_balise">
            @media all and (max-width: 1024px)
            {
                #banniere_image
                {
                    display: none;
                }
            }
            </p>
            </li>
            <li><span class="gras">Le bloc “À propos de l’auteur”</span>
            <p>>Plutôt que de placer ce bloc à droite de l'article, on va le faire passer en dessous grâce à des Flexbox en colonne, ce type de disposition "de haut en bas" est plus adapté aux petits écrans.<br />
            À l'intérieur du bloc, on réajuste un peu la position des éléments : la photo, notamment, sera placée en flottant à droite.</p>
            <p class="citation_code_balise">
            @media all and (max-width: 1024px)
            {
                section
                {
                    flex-direction: column;
                }
                article, aside
                {
                    width: auto;
                    margin-bottom: 15px;
                }    
                #fleche_bulle
                {
                    display: none;
                }
                #photo_zozor img
                {
                    width: 110px;
                    float: right;
                    margin-left: 15px;
                }
                aside p:last-child
                {
                    text-align: center;
                }
            }
            </p>
            <p>Que signifie aside p:last-child ?<br />
            C'est un sélecteur avancé. <span class="mise_en_valeur1">aside p</span> signifie "tous les paragraphes à l'intérieur de la balise &lt;aside&gt;".<br />
            Avec <span class="mise_en_valeur1">:last-child</span>, on cible uniquement le dernier paragraphe dans le bloc aside (celui qui contient les liens vers Facebook et Twitter), pour pouvoir centrer les images.<br />
            On aurait aussi pu affecter une class ou un id à ce paragraphe pour le cibler directement, mais ainsi on a pas eu à modifier le code HTML.
            </p>
            </li>
        </ul>


        <p>La page est désormais complètement réorganisée lorsque la fenêtre fait 1024px ou moins de largeur. Regardons à présent le résultat :<br />
        <span class="survol_image"><img src="images_pour_mise_en_forme/responsive_tp.png" alt="Responsive TP" title="Responsive design d'un site internet" /></p>

        <h2>Media queries et navigateurs mobiles</h2>
        <p>Les écrans des smartphones étant beaucoup moins larges que les écrans de PC (seulement quelques centaines de pixels de large), pour s'adapter, les navigateurs mobiles affichent le site en "dézoomant", ce qui permet d'avoir un aperçu de l'ensemble de la page.<br />
        La zone d'affichage simulée est appelée le <span class="mise_en_valeur1">viewport</span>, cela correspond à la largeur de la fenêtre du navigateur sur le mobile.<br />
        En CSS, avec les media queries, si on cible l'écran avec <span class="mise_en_valeur1">max-width</span> sur un mobile, celui-ci va comparer la largeur que l'on indique avec celle de son viewport, le problème, c'est que le viewport change selon le navigateur mobile utilisé :</p>
        <table>
            <tr>
            <td>Navigateur</td>
            <td>Largeur du viewport par défaut</td>
            </tr>
            <tr>
            <td>Opera Mobile</td>
            <td>850 pixels</td>
            <tr>
            <td>iPhone Safari</td>
            <td>980 pixels</td>
            </tr>
            <tr>
            <td>Android</td>
            <td>800 pixels</td>
            </tr>
            <tr>
            <td>Windows Phone</td>
            <td>1024 pixels</td>
            </tr>
        </table>
        <p>
        Un iPhone se comporte comme si la fenêtre faisait 980px de large, tandis qu'un Android se comporte comme si la fenêtre faisait 800px !<br />
        Pour cibler les smartphones, plutôt que d'utiliser max-width, il peut être intéressant de recourir à max-device-width : c'est la largeur du périphérique.<br />
        Les périphériques mobiles ne dépassant pas 480px de large, on pourra viser uniquement les navigateurs mobiles avec cette media query :
        <p class="citation_code_balise">
        @media all and (max-device-width: 480px)
        {
            /* Mettre les règles CSS pour les mobiles ici */
        }
        </p>
        <p>>Pourquoi ne pas cibler les mobiles avec la règle media <span class="mise_en_valeur1">handheld</span> ?<br />
        En effet, on peut (en théorie) cibler les écrans mobiles avec le media handheld, malheureusement aucun navigateur mobile à part Opera Mobile ne reconnaît handheld, ils se comportent tous comme s'ils étaient des écrans normaux (<span class="mise_en_valeur1">screen</span>), on ne peut donc pas vraiment utiliser handheld pour viser les mobiles.<br />
        On peut modifier la largeur viewport du navigateur mobile avec une balise meta à insérer dans l'en-tête (<strong>head</strong>) du document :</p>
        <p class="citation_code_balise">
        &lt;meta name="viewport" content="width=320" /&gt;
        </p>
        <p>On peut également utiliser cette balise pour modifier la façon dont le contenu de la page s'organise sur les mobiles, pour obtenir un rendu facile à lire, sans zoom, on peut demander à ce que le viewport soit le même que la largeur de l'écran :</p>
        <p class="citation_code_balise">
        &lt;meta name="viewport" content="width=device-width" /&gt;
        </p>

                                    <!-- Les outils Web -->    
        <h1>Outils web</h1>
        <p><a href="http://colorschemedesigner.com/csd-3.5/" title="Site de couleurs pratique :)" target="_blank">colorschemedesigner</a> est un site qui permet de trouver des couleurs de façon harmonieuse pour la création graphique (web entre autre).<br />
        Il y a plusieurs boutons intéressants, notamment "<span class="mise_en_valeur1">Color List</span>" qui permet d'obtenir la liste des couleurs harmonieuses allant avec celle sélectionnée, ou encore  "<span class="mise_en_valeur1">Light page example</span>" et "<span class="mise_en_valeur1">Dark page example</span>" permettant de tester l'affichage des couleurs sur un site.</p>
       <p class="survol_image"><a href="images_pour_mise_en_forme/colorschemedesigner_capture_1.png"><img src="images_pour_mise_en_forme/colorschemedesigner_capture_1_mini.png" alt="Capture 1" title="Cliquer pour aggrandir" /></a>
        <a href="images_pour_mise_en_forme/colorschemedesigner_capture_2.png"><img src="images_pour_mise_en_forme/colorschemedesigner_capture_2_mini.png" alt="Capture 2" title="Cliquer pour aggrandir" /></a>
        <a href="images_pour_mise_en_forme/colorschemedesigner_capture_3.png"><img src="images_pour_mise_en_forme/colorschemedesigner_capture_3_mini.png" alt="Capture 3" title="Cliquer pour aggrandir" /></a></p>
    </article>
    <nav id="sous_menu">
        <p><a href="#ancre_sur_le_format">Le format</a></p>
        <p><a href="#ancre_sur_selection_element">D'autres façons de sélectionner un élément</a></p>
        <p><a href="#ancre_sur_les_tailles">Les tailles</a></p>
        <p><a href="#ancre_sur_les_polices">Les polices</a></p>
        <p><a href="#ancre_sur_italique_et_gras">Italique et gras</a></p>
        <p><a href="#ancre_sur_les_decorations">Les décorations</a></p>
        <p><a href="#ancre_sur_l_alignement">L'alignement</a></p>
        <p><a href="#ancre_sur_les_flottants">Les flottants</a></p>
        <p><a href="#ancre_sur_les_couleurs">Les couleurs</a></p>
        <p><a href="#ancre_sur_les_couleurs_fond">Les couleurs du fond</a></p>
        <p><a href="#ancre_sur_image_fond">Les images de fond</a></p>
        <p><a href="#ancre_sur_superpropriete">Les super-propriétés</a></p>
        <p><a href="#ancre_sur_la_transparence">La transparence</a></p>
        <p><a href="#ancre_sur_les_bordures">Les bordures</a></p>
        <p><a href="#ancre_sur_les_ombres">Les ombres</a></p>
        <p><a href="#ancre_sur_pseudo_formats">Apparence des éléments de façon dynamique avec les pseudo-formats</a></p>
        <p><a href="#ancre_sur_animations">Les animations</a></p>
        <p><a href="#ancre_sur_responsive_design">Responsive design</a></p>
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