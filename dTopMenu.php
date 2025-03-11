<head>
  <link rel="stylesheet" href="css/desk/common.css">
  <meta name="robots" content="noindex">
</head>

<topMenu>
    <div class="topnav">
        <img class="logo" src="photos/logo1.jpg" onclick="location.href='index.php'" width="10%"></img>
        <links class="links">
            <div class="dropdown">
                <button class="dropbtn">Industrial</button>
                <div class="dropdown-content">
                  <a class="droplink" href="dAntifoc.php">Antifoc</a>
                  <a class="droplink" href="dRampaManuala.php">Rampa Manuala</a>
                  <a class="droplink" href="dRampaHidraulica.php">Rampa Hidraulica</a>
                  <a class="droplink" href="dBurdufEtans.php">Burduf de Etansare</a>
                  <a class="droplink" href="dPoartaSectionalaNorm.php">Poarta Sectionala Normala</a>
                  <a class="droplink" href="dPoartaSectionalaVert.php">Poarta Sectionala Verticala</a>
                  <a class="droplink" href="dPoartaSectionalaCube.php">Poarta Sectionala Cube</a>
                  <a class="droplink" href="dPoartaSectionalaSprint.php">Poarta Sectionala Sprint</a>
                  <a class="droplink" href="dPoartaRapida.php">Poarta Rapida</a>
                  <a class="droplink" href="dRulouGrilajMetalic.php">Rulouri si Grialje Metalice</a>
                  <a class="droplink" href="dUsaAutomata.php">Usa Automata</a>
                  <a class="droplink" href="dTurnicheti.php">Turnicheti</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Rezidential</button>
                <div class="dropdown-content">
                  <a class="droplink" href="dPoartaCulisanta.php">Automatizare Poarta Culisanta</a>
                  <a class="droplink" href="dPoartaBatanta.php">Automatizare Poarta Batanta</a>
                  <a class="droplink" href="dPoartaGaraj.php">Poarta de Garaj</a>
                  <a class="droplink" href="dAccesPietonal.php">Acces Pietonal Video Interfon</a>
                  <a class="droplink" href="dBarieraAutomata.php">Bariera Automata Acces Auto</a>
                  <a class="droplink" href="dPortiSiGarduriAluminiu.php">Porti si Garduri de Aluminiu</a>
                </div>
              </div>
            <button class="buttonC" onclick="window.location.href='dService.php';">Service</button>
            <button class="buttonC" onclick="window.location.href='dContact.php';">Contact</button>
        </links>
        <img class="modeIconC" id ="modeIconI" src="photos/darkMode.png" onclick="switchMode()"></img>
    
      </div>
</topMenu>

<script>
    if(sessionStorage.getItem("darkModeBool") == 0)
    {
        switchMode();
    }
</script>