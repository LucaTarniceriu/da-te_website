<html>
    <head>
        <title>Usa Automata - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>

        <h3> Usa Automata</h3>


        <content>

            CARACTERISTICI AUTOMATIZARE:
            <ul>
                <li> viteza de deschidere reglabila: pana la 0,8 m/sec/usa</li>
                <li> viteza de inchidere reglabila: pana la 0,8 m/sec/usa</li>
                <li> alimentare: 230V AC / 50 Hz, putere consumata: max. 300 VA</li>
                <li> transformator cu comutator integrat oprit/pornit</li>
                <li> setarea timpului in care usa sta deschisa: reglabil, intre 0 si 60 secunde; posibilitatea setarii de reglare automata a acestui timp, in functie de trafic (procesorul monitorizeaza numarul de deschideri)</li>
                <li> contact liber de potential pentru conectarea la sistemul de alarmare al cladirii</li>
                <li> detectoare radar de miscare cu urmatoarele caracteristici: temperatura -20º C / +60º C, umiditate 0-90%, zona de scanare reglabila (max. 4000x2500 mm, min. 500x500 mm), afisaj cu led</li>
            </ul>


            <?php
                $handle = opendir('photos/mUsaAutomata');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mUsaAutomata/$entry' class='imgClass' alt='UsaAutomata$entry'></img>";
                        $cont += 1;
                        if($cont == 1)
                        {
                            echo "<br>";
                            $cont = 0;
                        }
                        }
                    }
                    closedir($handle);
                }
            ?>

            <br><br>


        </content>

        
    </body>

</html>