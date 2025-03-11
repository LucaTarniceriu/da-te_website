<html>
    <head>
        <title>Turnicheti - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>

        <h3> Turnicheti</h3>


        <content>
                Turnichetii robusti Kentaur sunt potriviti in special pentru securizarea 
                perimetrului cladirilor si al proprietatii. 
                Versiunile versatile permit 
                combinarea mai multor unitati individuale. 
                Sistemul de blocare 
                dezvoltat de Dormakaba previne blocarea utilizatorilor intre porti.<br><br>

                <h3>Versatilitate</h3>
                Seria de produse Kentaur ofera un design modular. 
                Unitati cu doua, trei si patru aripi cu
                barele drepte sau in forma de U pot fi combinate
                unul cu altul. Acelasi lucru este valabil si pentru unitati
                cu usi biciclete, usi integrate sau 
                functia de iesire de urgenta*. Acoperisurile se potrivesc cu oricare dintre unitatile simple, multiple sau duble

                <h3>Consum minim de energie</h3>
                Unitatea silentioasa cu consum redus de energie utilizeaza
                foarte putina energie si se adapteaza la viteza
                a persoanei care intra.<br><br>

                <h3>Trecere in siguranta</h3>
                Sistemul de blocare implementat in turnichetele Kentaur
                impiedica utilizatori sa ramana prinsi sau blocati intre porti.
                Dupa eliberarea turnichetului, acesta
                poate fi oprit in orice moment si rotit
                inapoi atat timp cat inca 
                nu a incheiat jumatate din rotatie.
                Odata ce turnichetul a terminat jumatate
                din miscarea sa de rotatie, unitatea poate fi parasita doar
                in directia de eliberare.<br><br>

                *Este necesara aprobarea individuala
                (autoritate de constructii responsabila)


            <?php
                $handle = opendir('photos/mTurnicheti');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mTurnicheti/$entry' class='imgClass' alt='Turnicheti$entry'></img>";
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