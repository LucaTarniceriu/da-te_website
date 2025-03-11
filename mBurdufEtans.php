<html>
    <head>
        <title>Burduf Etansare - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>

    
        <h3> Burduf de Etansare</h3>



        <content>

            Conceptie:
            <ul>
                <li> Sas cu structura de otel galvanizat si cornier de aluminiu </li>
                <li> Prelata laterala si superioara din PVC </li>
                <li> Cadrele fata-spate articulate intre ele</li>
            </ul> 
            <br><br>

            Dimensiuni standard:
            <ul>
                <li> Latime: 3400 mm </li>
                <li> Inaltime: 3400 mm </li>
                <li> Adancime: 600 mm (900 mm, comanda speciala)</li>
                <li> Prelata frontala: 1000 mm (1200 mm, sau 1500 mm, comanda speciala)</li>
            </ul>

            <?php
                $handle = opendir('photos/mBurdufEtansare');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mBurdufEtansare/$entry' class='imgClass' alt='BurdufDeEtansare$entry'></img>";
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