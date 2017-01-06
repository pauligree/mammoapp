<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Decision Tool">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Decision Tool</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/android-desktop.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="q.b. Per sapere quanto basta">
  <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">

  <link rel="shortcut icon" href="images/favicon.png">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
  -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
  <link rel="stylesheet" href="css/mdl-jquery-modal-dialog.css">
  <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/jquery.ui.touch-punch.min.js"></script>

  
  <link rel="stylesheet" href="css/mdl-jquery-modal-dialog.css">
  <script src="js/mdl-jquery-modal-dialog.js"></script>
  

  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer- mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"><img src="images/q.b._Logo_web_orz.png" class="logo-orz-header" alt="q.b. per sapere quanto basta"/></span>
        <div class="mdl-layout-spacer"></div>
        <a href="#" class="open-modal-help mdl-color-text--white"><i class="material-icons mdl-24">help_outline</i></a>
        <a id="open-tree-sitemap" href="#" class="open-tree-sitemap mdl-color-text--white"><i class="material-icons mdl-24">blur_on</i></a>

      </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--grey-800 mdl-color-text--white" aria-hidden="false">
      <header class="demo-drawer-header">
        <img src="images/q.b._Logo_web_vert.png" class="logo-vrt-drawer" alt="q.b. per sapere quanto basta" />
      </header>

      <!--                       -->
      <!--  MENU LATERALE        -->
      <!--                       -->


      <nav class="demo-navigation mdl-navigation mdl-color--grey-900">
        <a class="mdl-navigation__link" href="./"><i class="mdl-color-text--white material-icons" role="presentation">home</i>Inizio</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--white material-icons" role="presentation">people</i>Chi siamo</a>

        <a id="open-modal-glossario" class="mdl-navigation__link" href="#"><i class="mdl-color-text--white material-icons" role="presentation">pageview</i>Glossario</a>
        <a id="mostra-come-funziona" class="mdl-navigation__link"  href="#"><i class="mdl-color-text--white material-icons" role="presentation">help_outline</i>Come funziona</a>

        <a id="open-tree-sitemap" href="#" class="mdl-navigation__link open-tree-sitemap mdl-color-text--white"><i class="material-icons mdl-24">blur_on</i>Mappa del sito</a>
        <div class="mdl-layout-spacer"></div>
      </nav>
    </div>


    <!--                       -->
    <!--        PAGINA         -->
    <!--                       -->


    <main id="main-content" class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">



        <!--    CONTENUTO     -->


        <div class="mdl-color--white- mdl-shadow--2dp- mdl-cell mdl-cell--12-col mdl-grid">

          <div id="pulsantiera">
            <div id="draggable1" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Meno morti di tumore al seno </div>
              <i id="tooltip-meno-morti" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-meno-morti">Le donne che partecipano regolarmente ad un Programma di screening organizzato riducono la loro probabilità di morire di tumore al seno. 
                Questo risultato è ottenuto perché la mammografia permette di trovare tumori all’inizio del loro sviluppo, tumori per i quali i trattamenti risultano efficaci, aumentando quindi la probabilità di guarigione.
              </span>
            </div>

            <div id="draggable2" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Sovradiagnosi e sovratrattamento</div>
              <i id="tooltip-sovra" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-sovra">Ci sono alcuni tumori, trovati dalla mammografia e confermati dagli accertamenti successivi, che pur essendo di tipo maligno non avrebbero mai dato problemi di salute. In questi casi si parla di sovradiagnosi.
                Sulla base delle conoscenze attuali, questi tumori non sono distinguibili da quelli che si sviluppano e provocano danni, perciò oggi vengono trattati tutti. Il trattamento effettuato – inutilmente - sui tumori che non si sarebbero mai sviluppati è chiamato sovratrattamento.
                La sovradiagnosi non è individuabile nel singolo caso, infatti nessuna donna al momento della diagnosi saprà mai se il suo tumore è un tumore innocuo, e la sua diagnosi quindi è un caso di sovradiagnosi, o se ha un tumore che si svilupperà. 
                La sovradiagnosi è misurabile solo a livello di popolazione.
              </span>
            </div>

            <div id="draggable3" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div  class="absolute-center">Falsi positivi</div>
              <i id="tooltip-falsi" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-falsi">Il risultato della mammografia è positivo quando si sospetta la presenza di un tumore. Ci sono casi in cui il sospetto di tumore non è confermato dagli esami di approfondimento: questi sono chiamati “falsi positivi”.
              </span>
            </div>

            <div id="draggable4" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Falsi negativi</div>
              <i id="tooltip-falsi-negativi" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-falsi-negativi">Può succedere, nei cosiddetti “falsi negativi”, che il tumore sfugga all’osservazione (per esempio nei casi di difficile lettura della lastra, come quando c’è una mammella densa). Può succedere anche che il tumore si sviluppi nell’intervallo che passa tra una mammografia di screening e la successiva. Questi ultimi casi sono chiamati “tumori di intervallo”.
              </span>
            </div>

            <div id="draggable5" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Controllo di qualità del Programma</div>
              <i id="tooltip-qualita" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-qualita">La qualità degli esami eseguiti nei Centri coinvolti nel Programma organizzato di screening mammografico è continuamente controllata dalle Società scientifiche di riferimento, come l’Osservatorio nazionale screening e il GISMa (Gruppo Italiano sullo Screening Mammografico). 
                Un indicatore di qualità, per esempio, è il numero di mammografie lette da un radiologo all’anno, che non deve essere inferiore alle 5.000; un altro è l’aggiornamento e la formazione degli operatori, un altro ancora è la percentuale di donne richiamate per ulteriori accertamenti che risultano avere davvero un tumore maligno.
              </span>
            </div>

            <div id="draggable6" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Il rischio delle radiazioni</div>
              <i id="tooltip-radiazioni" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-radiazioni">I raggi X usati nella mammografia sono radiazioni ad alta energia che potrebbero danneggiare il DNA e favorire quindi la formazione di tumori. 
                Il rischio è minimo, dato che le dosi di radiazioni impiegate nella mammografia sono molto basse, paragonabili a quelle di una normale radiografia del torace e 100 volte meno di una TAC.
              </span>
            </div>

            <div id="draggable7" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Dolore e disagio per esame</div>
              <i id="tooltip-dolore" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-dolore">Per eseguire la mammografia, il seno viene compresso tra due piastre, cosa che può causare fastidio o dolore. Si tratta di un disagio breve, dato che l’esame dura pochi secondi, e più il seno viene schiacciato, meno radiazioni riceve la donna, e più l’immagine risulta chiara.
              </span>
            </div>

            <div id="draggable8" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Prevenzione con dieta e stili di vita</div>
              <i id="tooltip-prevenzione" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-prevenzione">Ci sono comportamenti della vita quotidiana che possono influenzare il rischio di sviluppare un tumore al seno. Per esempio, l’assunzione prolungata (per anni) della terapia ormonale sostitutiva a base di estrogeni aumenta il rischio di sviluppare un tumore al seno.
                Viceversa si può diminuire il proprio rischio se si mantiene un peso corporeo nella norma, si segue un’alimentazione con una prevalenza di cibi vegetali (cereali non raffinati, legumi, verdure non amidacee e frutta), si fa attività fisica regolarmente e non si beve più di un bicchiere di alcol al giorno.

              </span>
            </div>

            <div id="draggable" class="draggable button-tool-airc" >
              <i class="material-icons mdl-24 mdl-color-text--white cursor-move">drag_handle</i>
              <div class="absolute-center">Disaccordo tra esperti sulla valutazione dei risultati</div>
              <i id="tooltip-disaccordo" class="mdl-18 material-icons">pageview</i></strong>
              <span class="mdl-tooltip mdl-tooltip--large" data-mdl-for="tooltip-disaccordo">La medicina non è una scienza esatta e le conoscenze sono ricavate da diversi tipi di studi e da stime statistiche: sono quindi approssimazioni della realtà. 
                Riguardo ai Programmi organizzati di screening mammografico c’è un disaccordo tra gli esperti sui benefici e sui danni. In particolare su quante donne in meno muoiono di tumore - con valori di riduzione che vanno dal 15% al 38% - e su quante donne subiscono una sovradiagnosi e un trattamento inutile - con valori che vanno dal 5% al 30% delle donne che ricevono una diagnosi di tumore. Il disaccordo su quanti benefici e danni causa lo screening mammografico porta gli esperti ad avere un giudizio diverso sul valore e l’utilità del programma di screening.
              </span>
            </div>           
          </div>
          <div id="contenimento-droppable"></div>
          <div id="playground" class="mdl-color--white- mdl-shadow--2dp- mdl-cell--12-col mdl-grid decision-playground">
            <!--             <header>+ importante</header> -->
            <div class="mdl-cell mdl-grid mdl-cell--12-col mdl-color-text--white  decision-green">

              <div class="mdl-cell mdl-cell--1-col">
                <header>#1</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#2</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#3</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#4</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#5</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#6</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#7</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#8</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>

              <div class="mdl-cell mdl-cell--1-col">
                <header>#9</header>
              </div>
              <div class="mdl-cell mdl-cell--3-col playground-neutro droppable  decision-plug">
              </div>
              <div class="mdl-cell mdl-cell--8-col sfondo-slider decision-plug">
                <div class="jqslider"></div>
              </div>
            </div>
            <!--             <header>- importante</header> -->


            <div class="mdl-color--white- mdl-shadow--2dp- mdl-cell mdl-cell--12-col mdl-grid">

              <h3>Farai la mammografia di screening?</h3>
              <div> 
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" >
                  <span class="mdl-radio__label">Sicuramente sì</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                  <span class="mdl-radio__label">Probabilmente sì</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                  <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
                  <span class="mdl-radio__label">Non so</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                  <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="4">
                  <span class="mdl-radio__label">Probabilmente no</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
                  <input type="radio" id="option-5" class="mdl-radio__button" name="options" value="5">
                  <span class="mdl-radio__label">Sicuramente no</span>
                </label>
              </div>

            </div>
            <div class="vai-a-spacer">&nbsp;</div>
          </div>
        </div>
      </div>

    </main>
  </div>
  <a href="" id="ho-deciso" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color-text--white">Salva</a>


  <!--    MODALS      -->
  <!--    mettere tutti i modal dentro il div hide-modal per rimuoverli dalla visualizzazione  -->

  <div class="hide-modal">


    <?php include'includes/common_modals.php';?>
    

    <div id="modal-help" class="mdl-dialog mdl-cell--11-col mdl-cell--11-col-tablet mdl-cell--11-col-desktop">
      <h3>Istruzioni</h3>
      <div class="mdl-dialog__content">
        <p>Oltre alle corrette informazioni contano i tuoi valori.<br />In questa schermata trovi i principali fattori che possono influire sulla tua scelta. <br />Ecco come procedere:</p>
        <ol>
          <li>Tra i 9 fattori proposti, pensa a quelli che sono importanti per te: scegli il primo e trascinalo nella prima riga dello spazio sottostante, quindi sposta il cursore della riga a seconda di come &ldquo;pesa&rdquo; sulla tua decisione (se &egrave; molto a favore della mammografia di screening, poco a favore, neutro, poco contro o molto contro).</li>
          <li>Ripeti l&rsquo;operazione per tutti i fattori che contano per te.</li>
          <li>Il quadro d&rsquo;insieme dei fattori scelti e del loro posizionamento a favore o contro la mammografia di screening dovrebbe servirti per rafforzare la tua scelta.</li>
          <li>Completati questi passaggi facci sapere se intendi o meno andare a fare la mammografia di screening, rispondendo alla domanda finale.</li>
          <li>Clicca su salva</li>
        </ol>
      </div>
    </div>
  </div>


  <!--    SCRIPTS DI CHIUSURA      -->


  <script type="text/javascript" src="js/html2canvas.js?001"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  <script>
    $( document ).ready(function() {

        // TUTTI I MODAL

          //copio l'html del modal nelle variabili da mostrare
          var glossario = $('#modal-glossario').html();  
          var help_game = $('#modal-help').html();  

          $('#open-modal-glossario').click(function () {
            showDialog({
              text: glossario,
              positive: {
                title: 'Chiudi'
              }
            });
          });

          $('.open-modal-help').click(function () {
            showDialog({
              text: help_game,
              positive: {
                title: 'Chiudi'
              }
            });
          });

          showDialog({
            text: help_game,
            positive: {
              title: 'Chiudi'
            }
          });

          $( ".draggable" ).draggable({ snap: ".droppable",  snapMode: "inner" });
          $( ".draggable_x" ).draggable({axis: "x", containment: $( '.contenimento'), grid: [ 10,10 ]});
          $( ".droppable" ).droppable({
            accept: ".draggable",
            classes: {
              "decision-attivo": "ui-state-default"
            },
            drop: function( event, ui ) {
              $( this )
              .addClass( "ui-state-highlight-" );
            }
          });
          $( "#ho-deciso" ).click(function( event ) {
            event.preventDefault();
        //html2canvas(document.body, {
        //  onrendered: function(canvas) {
        //    document.body.appendChild(canvas);
        //    console.log('fatto');
        //  }
        //});    
      });

          $( ".jqslider" ).slider({
            value:200,
            min: 0,
            max: 400,
            step: 100,
            slide: function( event, ui ) {
              $( "#amount" ).val( "$" + ui.value );
            }
          });



        });

      </script>
    </body>
    </html>
