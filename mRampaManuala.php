<html>
    <head>
        <title>Rampa Manuala - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>


    
        <h3> Rampa Manuala</h3>


        <content>

            Pasarela Metalica <br><br>

            Are o capacitate de a rezolva importante diferente de nivel, cu o mobilitate simpla si o suprafata 
            antiderapanta, rezistenta la intemperii, cu o sustinere mecanica antirasturnare. 
            Pasarelele metalice sunt concepute pentru a fi instalate prin fixare la capatul modulului de incarcare 
            sau pentru a fi deplasate pe o sina cu ajutorul a doua roti.

            <ul>
                <li> Nu necesita niciun tip de fosa pentru a fi instalate</li>
                <li>  Nu necesita niciun tip de fosa pentru a fi instalate</li>
                <li> Mobilitate usoara</li>
                <li> Suprafata antiderapanta</li>
                <il> Rezistenta la intemperii</il>
            </ul>


            <?php
                $handle = opendir('photos/mRampaManuala');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mRampaManuala/$entry' class='imgClass' alt='RampaManuala$entry'></img>";
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

            Minirampa <br><br>

            Practica, simplu de instalat, sigura si permite economisirea unui spatiu considerabil se dovedeste a fi 
            o optiune rapida si cu o instalare simpla in cadrul oricarui modul de incarcare, datorita dimensiunilor 
            sale si faptului ca nu necesita fosa. In ciuda dimensiunilor sale reduse, este capabila sa suporte 
            trecerea a 6t dinamice în timpul proceselor de încarcare si descarcare. <br><br>

            Minirampa prezinta urmatoarele avantaje:
            <ul>
                <li> Nu necesita niciun tip de fosa pentru a fi instalata</li>
                <li> Manevrare simpla</li>
                <li> Suprafata antiderapanta</li>
                <li> Rezistenta la intemperii</li>
            </ul>


            <br><br>


        </content>

        
    </body>

</html>