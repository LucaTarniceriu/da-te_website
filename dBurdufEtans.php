<html>
    <head>
        <title>Burduf Etansare - Da-Te</title>
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
                <h2> Burduf de Etansare</h2>
                
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

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mBurdufEtansare');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mBurdufEtansare/$entry' class='imgClass' alt='BurdufDeEtansare$entry'></img>";
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