<html>
    <head>
        <title>Usi Antifoc - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>


    
        <h3> Antifoc</h3>



        <content>

            Usile antifoc sunt fabricate in doua clase de rezistente la foc: EI 60 si EI 120 . 
            Sunt proiectate pentru a fi utilizate in spatii private (precum centrale termice, camere de intretinere), 
            industriale sau in cladiri de utilitate publica.
            <br><br>

            Acestea sunt disponibile sub forma de usa simpla sau dubla, cu usi rabatate, si cu prag sau fara. 
            In mod standard, toate usile sunt echipate cu incuietori cu parghe cu insertii si 3 chei, 
            manere si auto-inchidere.


            <?php
                $handle = opendir('photos/mAntifoc');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mAntifoc/$entry' class='imgClass' alt='Antifoc$entry'></img>";
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