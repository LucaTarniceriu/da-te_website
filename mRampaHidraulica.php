<html>
    <head>
        <title>Rampa Hidraulica - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>

        <h3> Rampa Hidraulica</h3>



        <content>

            Ciclu de functionare:
            <ul>
                <li> La plecare rampa este pozitionata orizontal permitand traficul traversal pe chei</li>
                <li> Cand camionul soseste, operatorul actioneaza butonul de pornire de la pupitru si platforma se ridica si suprafata verticala se depliaza</li>
                <li> Rampa se coboara pana la contactul cu planseul camionului.</li>
                <li> Cand camionul pleaca, rampa isi reia pozitia orizontala</li>
            </ul>


            <?php
                $handle = opendir('photos/mRampaHidraulica');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mRampaHidraulica/$entry' class='imgClass' alt='RampaHidraulica$entry'></img>";
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