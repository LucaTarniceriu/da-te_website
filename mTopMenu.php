<head>
    <meta name="robots" content="noindex">
</head>


<topMenu>

    <sidenav>
        <div id="mySidenav" class="sidenav">
            <a class="sidenavLinks" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <button class="dropdown-btn" href="industrialMobile.html">Industrial    <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-container">
                <a class="sidenavLinks" href="mAntifoc.php">Antifoc</a>
                <a class="sidenavLinks" href="mRampaManuala.php">Rampa Manuala</a>
                <a class="sidenavLinks" href="mRampaHidraulica.php">Rampa Hidraulica</a>
                <a class="sidenavLinks" href="mBurdufEtans.php">Burduf de Etansare</a>
                <a class="sidenavLinks" href="mPoartaSectionalaNorm.php">Poarta Sectionala Normala</a>
                <a class="sidenavLinks" href="mPoartaSectionalaVert.php">Poarta Sectionala Verticala</a>
                <a class="sidenavLinks" href="mPoartaSectionalaCube.php">Poarta Sectionala Cube</a>
                <a class="sidenavLinks" href="mPoartaSectionalaSprint.php">Poarta Sectionala Sprint</a>
                <a class="sidenavLinks" href="mPoartaRapida.php">Poarta Rapida</a>
                <a class="sidenavLinks" href="mRulouGrilajMet.php">Rulouri si Grilaje Metalice</a>
                <a class="sidenavLinks" href="mUsaAutomata.php">Usa Automata</a>
                <a class="sidenavLinks" href="mTurnicheti.php">Turnicheti</a>

            </div>
            <button class="dropdown-btn" href="industrialMobile.php">Rezidential    <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-container">
                <a class="sidenavLinks" href="mPoartaCulisanta.php">Automatizare Poarta Culisanta</a>
                <a class="sidenavLinks" href="mPoartaBatanta.php">Automatizare Poarta Batanta</a>
                <a class="sidenavLinks" href="mPoartaGaraj.php">Poarta de Garaj</a>
                <a class="sidenavLinks" href="mAccesPietonal.php">Acces Pietonal Video Interfon</a>
                <a class="sidenavLinks" href="mBarieraAutomata.php">Bariera Automata Acces Auto</a>
                <a class="sidenavLinks" href="mPortiSiGarduriAluminiu.php">Porti si Garduri de Aluminiu</a>

            </div>
            <a class="sidenavLinks" href="mService.php">Service</a>
            <a class="sidenavLinks" href="mContact.php">Contact</a>
        </div>
        
        <!-- Use any element to open the sidenav -->
        

        <script>

            function changeImageOpacity(op){
                var imgAtributes = document.getElementsByClassName("imgClass");
                for(i=0; i<imgAtributes.length; i++){
                    imgAtributes[i].style.opacity = op;
                }
            }


            /* Set the width of the side navigation to 60vw */
            function openNav() {
                document.getElementById("mySidenav").style.width = "60vw";
                document.getElementById("mySidenav").style.borderColor = "rgb(32, 32, 32, 1)";
                document.body.style.backgroundColor.opacity = "0.4";
                document.getElementById("break").style.backgroundColor = "rgba(0,0,0,0.4)";
                changeImageOpacity(0.4);

                // document.getElementById("modeIcon").style.display = "none";
                document.getElementById("modeIcon").onclick = empty;
                document.getElementById("modeIcon").src = "photos/empty.png";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                // document.getElementById("modeIcon").style.display = "inline";
                document.getElementById("modeIcon").onclick = switchMode;
                if(sessionStorage.getItem("darkModeBool") == 0)
                {
                    document.getElementById("modeIcon").src = "photos/lightMode.png";
                }
                else
                {
                    document.getElementById("modeIcon").src = "photos/darkMode.png";
                }
                


                var linkAtributes = document.getElementsByClassName("dropdown-container");
                for(i=0; i<linkAtributes.length; i++){
                    linkAtributes[i].style.display = "none";
                }


                if(sessionStorage.getItem("darkModeBool") == 1)
                {
                    document.getElementById("mySidenav").style.borderColor = "rgb(255, 252, 242, 1)";
                }
                else
                {
                    document.getElementById("mySidenav").style.borderColor = "rgb(39, 36, 36, 1)";
                }
                document.body.style.backgroundColor.opacity = "1";
                document.getElementById("break").style.backgroundColor = "rgb(224, 224, 224)";
                changeImageOpacity(1);
            }


            //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
            });
            }
        </script> 
        
    </sidenav>
    <div class="buttons">
        <div><img id="menu" src="photos/hamburgerBlack.png"onclick="openNav()"></div>
        <div><img id="logo" src="photos/logo.jpg" onclick="location.href='index.php'"></div>
        <div><img id="modeIcon" src="photos/darkMode.png" onclick="switchMode()"></div>
        
    </div>  
    <hr id="break">
</topMenu>

<script>
    if(sessionStorage.getItem("darkModeBool") == 0)
    {
        switchMode();
    }
</script>