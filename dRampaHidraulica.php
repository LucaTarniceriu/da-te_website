<html>
    <head>
        <title>Rampa Hidraulica - Da-Te</title>
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
                <h2> Rampa Hidraulica</h2>
                
                Ciclu de functionare:
                <ul>
                    <li> La plecare rampa este pozitionata orizontal permitand traficul traversal pe chei</li>
                    <li> Cand camionul soseste, operatorul actioneaza butonul de pornire de la pupitru si platforma se ridica si suprafata verticala se depliaza</li>
                    <li> Rampa se coboara pana la contactul cu planseul camionului.</li>
                    <li> Cand camionul pleaca, rampa isi reia pozitia orizontala</li>
                </ul>
    

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mRampaHidraulica');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mRampaHidraulica/$entry' class='imgClass' alt='RampaHidraulica$entry'></img>";
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