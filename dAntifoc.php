<html>
    <head>
        <title>Antifoc - Da-Te</title>
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
                <h2> Antifoc</h2>
                
                    Usile antifoc sunt fabricate in doua clase de rezistente la foc: EI 60 si EI 120 . 
                Sunt proiectate pentru a fi utilizate in spatii private (precum centrale termice, camere de intretinere), 
                industriale sau in cladiri de utilitate publica.
                <br><br>

                Acestea sunt disponibile sub forma de usa simpla sau dubla, cu usi rabatate, si cu prag sau fara. 
                In mod standard, toate usile sunt echipate cu incuietori cu parghe cu insertii si 3 chei, 
                manere si auto-inchidere.

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mAntifoc');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mAntifoc/$entry' class='imgClass' alt='Antifoc$entry'></img>";
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