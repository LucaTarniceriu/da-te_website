<html>
    <head>
        <title>Service - Da-Te</title>
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
                <h2> Service si Garantie</h2>
                
                DA-TE SRL pune la dispozitia clientului un livret de control pe care vor fi consemnate operatiunile 
                si semnatura tehnicianului abilitat de DA-TE SRL. <br><br>
    
                DA-TE SRL se angajeaza sa efectueze 2 vizite anuale conform normelor europene in vigoare. <br><br>
                
                Garantie de interventie imediata in caz de pana sau de incident ce are o incidenta asupra productiei, 
                in 24 ore in celelalte cazuri, SAMBATA inclus. <br><br>
                
                Tehnicianul abilitat de DA-TE SRL, controleaza punctele de securitate si de functionare 
                urmand procedura specifica redactata de catre constructor: <br><br>
    
                <ul style="border: 1px solid black">
                    <li style="list-style-type: none; text-align: center; margin-left: -7vw;">Comercializam si montam:</li> <br>
                    <li>Control al functionarii securitatilor active si pasive</li>
                    <li>Control al circuitelor de alimentare electrica, curatare a motoarelor si contactorilor</li>
                    <li>Control al circuitelor de alimentare electrica, curatare a motoarelor si contactorilor</li>
                    <li>Reparatii ale diverselor cai de cabluri si conectori</li>
                    <li>Mici reparatii, suruburi, lipiri care nu necesita aportul de material, ingrediente diverse</li>
                </ul>

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
                            echo "<img src='photos/mAntifoc/$entry' class='imgClass' alt='Service'></img>";
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