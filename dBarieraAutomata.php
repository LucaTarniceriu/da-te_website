<html>
    <head>
        <title>Bariera Automata - Da-Te</title>
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
                <h2> Bariera Automata Acces Auto</h2>
                
                Gama de bariere automate oferita de Came este conceputa special pentru a asigura siguranta 
                si usurinta de acces pentru autovehicule in zonele pazite. <br><br>
    
                Sistemele integrate si tehnologia de ultima ora permite tuturor barierelor automate Came 
                sa fie conectate la un sistem de parcare automat. <br><br>
    
                Acest lucru nu doar ca reduce costurile cu angajatii necesari monitorizarii parcarii si cailor de acces, 
                dar creste si gradul de siguranta. <br><br>

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>

                <video class = "imgClass" controls muted>
                <source src="photos/mBarieraAutomata/video1.mp4" type="video/mp4">
                </video><br>

                <?php
                    $handle = opendir('photos/mBarieraAutomata');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess' && $entry !=){
                            echo "<img src='photos/mBarieraAutomata/$entry' class='imgClass' alt='BarieraAutomata$entry'></img>";
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