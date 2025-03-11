<html>
    <head>
        <title>Poarta Rapida - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        <?php include('mTopMenu.php'); ?>


    
        <h3> Poarta Rapida</h3>



        <content>

            Usile industriale rapide sunt solutia de care aveti nevoie in cazul in care izolatia termica joaca un rol 
            mai putin important, insa este necesara pastrarea/conservarea climatului in depozitul dumneavoastra. 
            Acest lucru se obtine prin instalarea unor astfel de usi pe intrarile pe care exista un flux 
            mare de personal si utilaje. Usile rapide exista doar in varianta cu motor electric, 
            acesta fiind de fapt esenta functionalitatii lor. 
            Ele pot fi insa manevrate si manual in cazuri extreme (ex.: lipsa curentului electric). 
            Usa propriuzisa este din prelata ranforsata cu bare din aluminiu pe orizontala pentru a putea fi rulata 
            cu usurinta pe tamburul superior.


            <?php
                $handle = opendir('photos/mPoartaRapida');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                        echo "<img src='photos/mPoartaRapida/$entry' class='imgClass' alt='PoartaRapida$entry'></img>";
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