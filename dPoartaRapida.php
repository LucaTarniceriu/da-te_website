<html>
    <head>
        <title>Poarta Rapida - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/desk/common.css">
        <link rel="stylesheet" href="css/desk/products.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
        <script type = "text/javascript" src="desktopFuncitons.js"></script>
    </head>

   
    <body>
        
        

        <?php include('dTopMenu.php');?>

        
        
        <content>
            
            <div class = "left">
                <h2> Poarta Rapida</h2>
                
                Usile industriale rapide sunt solutia de care aveti nevoie in cazul in care izolatia termica joaca un rol 
                mai putin important, insa este necesara pastrarea/conservarea climatului in depozitul dumneavoastra. 
                Acest lucru se obtine prin instalarea unor astfel de usi pe intrarile pe care exista un flux 
                mare de personal si utilaje. Usile rapide exista doar in varianta cu motor electric, 
                acesta fiind de fapt esenta functionalitatii lor. 
                Ele pot fi insa manevrate si manual in cazuri extreme (ex.: lipsa curentului electric). 
                Usa propriuzisa este din prelata ranforsata cu bare din aluminiu pe orizontala pentru a putea fi rulata 
                cu usurinta pe tamburul superior.

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mPoartaRapida');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mPoartaRapida/$entry' class='imgClass' alt='PoartaRapida$entry'></img>";
                            $cont += 1;
                            if($cont == 3)
                            {
                                echo "<br>";
                                $cont = 0;
                            }
                            }
                        }
                        closedir($handle);
                    }
                ?>
            </div>
            
        </content>
    </body>
    
</html>