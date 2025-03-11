<html>
    <head>
        <title>Acces Pietonal - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        <?php include('mTopMenu.php'); ?>


        
        <h3> Acces Pietonal Video Interfon</h3>

        <content>

        Monitor LCD color, oferind o calitate audio si video excelenta.
        <ul>
            <li> Sistem BUS cu 2 fire - 100m </li>
            <li> Pana la 8 statii in paralel cu intercomunicare </li>
            <li> Controlul usii este posibil chiar si cu monitorul oprit </li>
            <li> Functia "Excludere sonerie" cu semnalizare luminoasa </li>
            <li> Reglajul volumului si al tonului de apel si definitia ecranului </li>
            Dimensiuni L x I x A: 145 x 170 x 30,9 mm
        </ul>


            <?php
                $handle = opendir('photos/mAccesPietonal');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mAccesPietonal/$entry' class='imgClass' alt='AccesPietonal$entry'></img>";
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