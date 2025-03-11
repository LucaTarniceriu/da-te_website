<html>
    <head>
        <title>Porti si Garduri Aluminiu - Da-Te</title>
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
                <h2> Porti si Garduri de Aluminiu</h2>
                
                www.al-de.ro <br><br>

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br>
                <?php
                    $handle = opendir('photos/mGarduri');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mGarduri/$entry' class='imgClass' alt='GarduriAluminiu$entry'></img>";
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