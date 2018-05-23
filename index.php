<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- meta -->
    <title>Informatica</title>
    <meta charset="utf-8">
    <meta name="description" content="Informatica informatie">
    <meta name="keywords" content="Studiepunten, inforatica, informatie, opdracht">
    <meta name="author" content="Thomas de Lange, Zeynep Kurt">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSS & JS -->
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script rel="jquerryScript" type = "text/javascript" src="JQuerry.js"></script>
    <script rel ="tabScript" type = "text/javascript" src = "Tabs.js"></script>

    <!-- Externe fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">


    </head>
    <body id = "myPage" data-spy = "scroll" data-target = ".navbar" data-offset = "60">
        <!-- navbar -->
        <nav class = "navbar navbar-fixed-top navbar-expand-lg">
        <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <img class="navbar-brand" src = "./afbeeldingen/Avanslogowit.png" alt = "Logo avans informatica" >
                </div>

                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-haspopup= " true" aria-expanded= " false">Beroepen <span class = "caret"></span></a>
                          <ul class="dropdown-menu" id ="drowdown-menu">

                            <li><a href="#Softwareontwikkelaar">Software ontwikkelaar</a></li>
                            <li><a href="#IT-architect">IT-architect</a></li>
                            <li><a href="#Applicatieontwikkelaar">Applicatieontwikkelaar</a></li>
                          </ul>
                        </li>
                        <li><a href="#voordelen">Voordelen</a></li>
                        <li><a href="#gebouwen">Gebouwen</a></li>
                        <li><a href="#curriculum">curriculum</a></li>
                        <li><a href = "#informatie">Informatie</a></li>
                        <li><a href = "#contactFooter"><span class="glyphicon glyphicon-user"></span>Contact</a></li>
                        <!-- <li><a href="HTML/Pagina1.html">Pagina1</a></li> -->

                    </ul>

                </div> <!--/.nav-collapse -->
            </div>
        </nav>

        <!-- Welkomstboodschap -->
        <div class = "jumbotron text-center">                           <!-- Welkom boodschap -->
            <h1>Welkom</h1>
            <p>Welkom op de website, hier kun je informatie vinden over de studie informatica</p>

        </div>

        <!-- Begin beroepen -->
        <h1 class = "text-center" id = "beroepen">Drie mogelijke beroepen die je later kan gaan doen:</h1>
        <span class = "col-md-3"></span>
        <p class = "text-center col-md-6" id = "beroepen">Als afgestudeerde zit je in een luxe positie, want de arbeidsmarkt zit te springen om professioneel opgeleide ICT'ers. Daar heb je dus voordelen mee. Voordat je afstudeert kies je waar wil je wilt werken of wordt het je zelfs gevraagd voordat je bent afgestudeerd. Kies daarom de juiste sector die het meeste past bij jou. </p>
        <span class = "col-md-3"></span>


        <!-- Softwareontwikkelaar -->
        <div class = "container-fluid" id = "Softwareontwikkelaar">
            <div class = "row">
                <div class = "col-sm-8">
                    <br>
                    <br>
                    <h2>Software ontwikkelaar</h2>
                    <h4>Als softwareontwikkelaar houd je je bezig met het ontwerpen, programmeren en testen van applicaties en apps. Het is belangrijk om met de klant en je collega's samen te werken, om zo een compleet programma te creëren dat voldoet aan de eisen van de opdrachtgever.</h4>
                </div>
                <div class = "col-sm-4">
                    <br>
                    <br>
                    <span class="glyphicon glyphicon-dashboard logo"></span>
                </div>
            </div>
        </div>

        <!-- IT-architect -->
        <div class = "container-fluid cont-grey" id = "IT-architect">
            <div class = "row">
                <div class = "col-sm-4">
                    <br>
                    <span class="glyphicon glyphicon-pencil logo"></span>
                </div>
                <div class = "col-sm-8">
                    <br>
                    <h2>IT-architect</h2>
                    <h4>Je initieert en bewaakt de cohesie van IT-systemen en ontwikkelingen en legt voortdurend de relatie tot de business/organisatiedoelen. Je communiceert als IT Architect in feite op alle niveaus; het betreft dus een verantwoordelijke functie. Je stelt informatieplannen op, werkt aan strategische scenario’s voor de ontwikkeling van IT en je begeleidt projectarchitecten en domeinarchitecten.</h4>
                </div>
            </div>
        </div>

        <!-- Applicatie ontwikkelaar-->
        <div class = "container-fluid" id = "Applicatieontwikkelaar">
            <div class = "row">
                <div class = "col-sm-8">
                    <br>
                    <h2>Applicatie ontwikkelaar</h2>
                    <h4>Je creëert applicaties, zoals tekstverwerkers of games. Naast het ontwerpen van geheel nieuwe applicaties past de Applicatieontwikkelaar ook bestaande applicaties aan. Dit werk gebeurt meestal in teamverband, waarbij meerdere Applicatieontwikkelaars samen werken aan één project. </h4>
                </div>
                <div class = "col-sm-4">
                    <br>
                    <span class="glyphicon glyphicon-wrench logo"></span>
                </div>
            </div>
        </div>

        <!-- Voordelen van informatica met icoontjes -->
        <div class = "container-fluid text-center cont-grey " id = "voordelen">
            <br>
            <h2>Voordelen van informatica studeren</h2>
            <br>
            <div class = "row">
                <div class = "row sid slideanim">
                    <div class = "col-sm-4 ">
                        <span class="glyphicon glyphicon-phone icon"></span>
                        <h4>Werk</h4>
                        <p>Je leert apps te maken voor je eigen telefoon!</p>
                    </div>
                    <div class = "col-sm-4 ">
                        <span class="glyphicon glyphicon-piggy-bank icon"></span>
                        <h4>Geld</h4>
                        <p>Je begint later met een goed salaris!</p>
                    </div>
                    <div class = "col-sm-4 ">
                        <span class="glyphicon glyphicon-lock icon"></span>
                        <h4>Verzekerd van werk</h4>
                        <p>Er is altijd werk!</p>
                    </div>
                </div>
                <div class = "row slideanim">
                <div class = "col-sm-4">
                    <span class="glyphicon glyphicon-sunglasses icon"></span>
                    <h4>Cool</h4>
                    <p>Computernerd zijn is het nieuwe cool!</p>
                </div>
                <div class = "col-sm-4">
                    <span class="glyphicon glyphicon-certificate icon"></span>
                    <h4>CV</h4>
                    <p>HBO informatica is een prachtig begin van je CV!</p>
                </div>
                <div class = "col-sm-4">
                    <span class="glyphicon glyphicon-inbox icon"></span>
                    <h4>Direct werk</h4>
                    <p>95% van de afgestudeerden die informatica hebben gedaan hebben binnen 2 maanden werk!</p>
                </div>
                </div>
            </div>


</div>

        <!-- onze gebouwen -->
        <div class = "container-fluid text center" id = "gebouwen">
            <br>
            <h2 class = "text-center">Onze gebouwen</h2>

            <div class = "row text-center">
                <div class = "col-sm-4">
                    <div class = "thumbnail slideanim">
                        <img src = "./afbeeldingen/Gebouw-LA.jpg">
                        <p><strong>LA</strong></p>
                        <p>Met het meeste glas</p>
                    </div>
                </div>
                <div class = "col-sm-4">
                    <div class = "thumbnail slideanim">
                        <img src = "./afbeeldingen/Gebouw-LC.jpeg">
                        <p><strong>LC</strong></p>
                        <p>Het oudste gebouw</p>
                    </div>
                </div>
                <div class = "col-sm-4">
                    <div class = "thumbnail slideanim">
                        <img src = "./afbeeldingen/Gebouw-LD.jpg">
                        <p><strong>LD</strong></p>
                        <p>Ook een heel mooi gebouw</p>
                    </div>
                </div>
            </div>
</div>

        <!-- Carousel dat gebruikt wordt voor beroemde quotes -->
        <h2 class = "text-center " >Beroemde quotes</h2>
        <div class = "carousel slide text-center cont-grey" data-ride = "carousel" id = "Quote-slides">
            <!-- indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Quote-slides" data-slide-to="0" class="active"></li>
                <li data-target="#Quote-slides" data-slide-to="1"></li>
                <li data-target="#Quote-slides" data-slide-to="2"></li>
            </ol>
            <!-- Qoutes -->
            <div class = "carousel-inner" role = "listbox">
                <div class = "item active">
                    <h4>The only way to do great work is to love what you do.</h4>
                    <h4>-Steve Jobs, founder of Apple</h4>
                </div>
                <div class = "item">
                    <h4>Failure is an option here. If things are not failing, you are not innovating enough.</h4>
                    <h4>-Elon Musk, Ingenieur en ondernemer</h4>
                </div>
                <div class = "item">
                    <h4>Logic wil take you from A to B, imagination will take you everywhere.</h4>
                    <h4>-Albert Einstein</h4>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#Quote-slides" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#Quote-slides" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
</div>

        <!-- Curriculum via tabs-->
        <div class = "container-fluid text-center" id = "curriculum">
        <br>
        <br>
        <ul class="nav nav-pills nav-justified applycolor">
            <li class="active"><a data-toggle="pill" href="#Jaar1">Jaar 1</a></li>
            <li class = ""><a data-toggle="pill" href="#Jaar2">Jaar 2</a></li>
            <li class = ""><a data-toggle="pill" href="#Jaar3">Jaar 3</a></li>
            <li class = ""><a data-toggle="pill" href="#Jaar4">Jaar 4</a></li>
        </ul>

            <div class="tab-content">
                <div id="Jaar1" class="tab-pane fade in active">
                    <h3>Jaar 1</h3>
                    <a href="#curriculum" class="pop">
                        <img src = "./afbeeldingen/jaar1.png" class = "img-responsive">
                    </a>
                </div>
                <div id="Jaar2" class="tab-pane fade">
                    <h3>Jaar 2</h3>
                    <a href="#curriculum" class="pop">
                        <img src = "./afbeeldingen/jaar2.png" class = "img-responsive">
                    </a>
                </div>
                <div id="Jaar3" class="tab-pane fade">
                    <h3>Jaar 3</h3>
                    <a href="#curriculum" class="pop">
                        <img src = "./afbeeldingen/jaar3.png" class = "img-responsive">
                    </a>
                </div>
                <div id="Jaar4" class="tab-pane fade">
                    <h3>Jaar 4</h3>
                    <a href="#curriculum" class="pop">
                        <img src = "./afbeeldingen/jaar2.png" class = "img-responsive">
                    </a>
                </div>
            </div>
        </div>

        <!-- Informatie gedeelte-->
        <div class = "container-fluid text-center cont-grey" id = "informatie">
            <div class ="col-md-3"></div>
            <div class = "col-md-6 row text-center lefttext">
                <h1>Wat je moet weten over de studie informatica:</h1>

                <h2>Informatica</h2>
                <h3>Wat houdt informatica in?</h3>
                <p>Wij leven in een tijdperk met digitale apparaten, waar we steeds afhankelijker van worden en die niet meer weg te denken zijn uit ons dagelijks leven. Informatica is niet alleen maar programmeren; je integreert logica om systemen en oplossingen te ontwikkelen die in allerlei velden toepasbaar zijn, van media tot het bedrijfsleven en de gezondheidszorg. </p>
                <p>De maatschappij heeft behoefte aan goed opgeleide informatici die creatieve oplossingen kunnen bedenken en waardevolle informatie uit een berg van data kunnen halen. Als informaticus maak je het verschil doordat je jouw analytische vaardigheden combineert met praktische en technische vaardigheden zoals programmeren. De vraag naar informatici blijft daarom alsmaar toenemen. </p>
                <p>Na je opleiding Informatica kun je verschillende richtingen op binnen het vakgebied informatica. Vanuit functies als programmeur of applicatiebeheer kun je verder groeien binnen de ICT.  </p>

                <h3>Wat leer je tijdens de opleiding? </h3>
                <p>Het uitgangspunt is dat je je studie succesvol afrond. Het is Daarom is het van belang om te beginnen bij de basis. Je start met de opleiding praktisch en concreet. Je leert zowel op het technische als op het persoonlijke vlak van softwareontwikkeling. Later ga je met abstractere en complexere onderwerpen aan de gang. </p>
                <p>In latere fase verbreed en verdiep je je kennis en vaardigheden. Je leert nieuwe technologieën en programmeertalen eigen te maken. Je ontwikkelt verder je onderzoekende houding met het oog op de praktijkstage en afstudeerstage. De context wordt steeds realistischer en breder met aandacht voor multidisciplinair werken.</p>

                <h2>Studiepunten</h2>
                <h3>Wat is een studiepunt?</h3>
                <p>In al het hoger onderwijs wordt het behalen van vakken beloond met studiepunten. Er wordt daarvoor gebruik gemaakt van het Europese systeem: European Credits of afgekort "EC". Door het Europese systeem zijn opleidingen nu snel te vergelijken in duur en zwaarte en is het gemakkelijker geworden om binnen Europa met een bachelordiploma van één instelling bij een masteropleiding van een andere instelling in te stromen.Iedere EC staat gelijk aan een tijdsbesteding van 28 uur. In een normaal studiejaar, waarin je full-time aan je studie werkt, kan je 60 EC halen. </p>

                <h3>Hoe weet ik hoeveel punten ik kan halen? </h3>
                <p>Hoe weet ik hoeveel punten ik kan halen? Je hebt totaal vier periodes (ook wel vier blokken genoemd), waarbij je per blok 15 studiepunten kunt behalen. In het examenprogramma van de (voltijd) opleiding Informatica kun je zien hoeveel studiepunten te behalen zijn per vak.  </p>

                <h3>Hoeveel studiepunten moet ik halen?</h3>
                <p>Het bindend studieadvies is positief als je alle 60 studiepunten van de propedeuse van AFM hebt behaald aan het einde van het eerste jaar. Dit houdt in dat je voor alle tentamens en beroepsproducten een voldoende hebt behaald.</p>
                <p>Het bindend studieadvies is voorwaardelijk positief als je in de propedeuse ten minste 52 studiepunten hebt gehaald. Je mag dan door naar het tweede jaar, onder die voorwaarde dat je binnen dat jaar alsnog alle studiepunten van de propedeuse behaalt. Als dat je niet lukt, moet je alsnog de opleiding verlaten. Het bindend studieadvies is negatief als je minder dan 52 studiepunten hebt behaald. Je moet de opleiding dan definitief verlaten.</p>
            </div>
        </div>

         <!-- Layout voor popup foto -->
        <div class="modal fade col-md-12" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <br>
            <br>
            <br>
            <br>
            <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <img src="" class="imagepreview" style="width: 100%; height: 100%">
              </div>
            </div>
          </div>
        </div>

        <!-- Footer dmv PHP -->
        <span id ="contactFooter"></span>
        <?php
        include ('footer.html');
        ?>

    </body>
</html>
