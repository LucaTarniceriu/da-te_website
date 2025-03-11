<html>
    <head>
        <title>Rulouri si Grilaje Metalice - Da-Te</title>
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
                <h2> Rulouri si Grilaje Metalice</h2>
                
                <div style="font-weight: bold;"> Perdele metalice cu lamele microperforate sau pline </div>
                <ul>
                    <li> Dimensiuni maxime: latime 12m, inaltime 8m</li>
                    <li> Manipulare prin tragere directa sau motorizate</li>
                    <li> Glisiere: 3 adancimi (in functie de dimensiunile perdelei), 40-60-80 mm</li>
                    <li> Lamela finala prevazuta cu broasca de inchidere</li>
                    <li> Perdelele sunt echipate cu dispozitive impotriva caderii</li>
                </ul>

    
                <br><br><br>
    
                <div style="font-weight: bold;"> Grilaje Metalice Mobile </div>
                <ul>
                    <li> Dimensiuni maxime: latime 12m, inaltime 8m</li>
                    <li> Manipulare prin tragere directa sau motorizate</li>
                    <li> Glisiere: 3 adancimi (in functie de dimensiunile perdelei), 40-60-80 mm</li>
                    <li> Lamela finala prevazuta cu broasca de inchidere</li>
                    <li> Perdelele sunt echipate cu dispozitive impotriva caderii</li>
                    <li> Grilajele sunt realizate din tuburi ondulate, din otel galvanizat si agrafe de inalta rezistenta </li>
                </ul>
    
                <br>
    
                Tipuri de actionare:
    
                <ul>
                    <li> Manuala </li>
                    <li> Electrica </li>
                </ul>
    
                Sisteme de comanda:
    
                <ul>
                    <li> comanda cu butoane sus-jos </li>
                    <li> comanda cu cheie </li>
                </ul>
    

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mRulouGrilajMet');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mRulouGrilajMet/$entry' class='imgClass' alt='RulouGrilajMetalic$entry'></img>";
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