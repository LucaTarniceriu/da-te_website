<html>
    <head>
        <title>Poarta Culisanta - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>



        <h3> Automatizare Poarta Culisanta</h3>



        <content>

            Contine:
            <ul>
                <li> Un motoreductor cu unitate de comanda </li>
                <li> Fotocelule </li>
                <li> Comanda cu cheie si telecomanda </li>
                <li> Deblocare cu cheie pentru actionare manuala </li>
                <li> Lampa de semnalizare si antena </li>
                <li> Cremaliera </li>
            </ul>


            <?php
                $handle = opendir('photos/mPoartaCulisanta');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mPoartaCulisanta/$entry' class='imgClass' alt='PoartaCulisanta$entry'></img>";
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