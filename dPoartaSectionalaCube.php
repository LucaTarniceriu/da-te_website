<html>
    <head>
        <title>Poarta Sectionala Cube - Da-Te</title>
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
                <h2> Poarta Sectionala Cube</h2>
                
                CUBE este solutia perfecta atunci cand se dispune de un spatiu limitat.
                Sectiunile CUBE se concentreaza compact in spatele golului de usa, prin urmare, un spatiu
                pentru instalare in adancime limitat nu reprezinta o problema.
                <br><br>
    
                Caracteristici:
                <ul>
                    <li> Instalare compacta</li>
                    <li> Foarte potrivite pentru instalarea in combinatie cu un obstacol</li>
                    <li> Ascensoarele de vehicule pot fi instalate imediat in spatele usii</li>
                    <li> Profile de aluminiu de calitate superioara</li>
                    <li> Putere si stabilitate</li>
                    <li> Silentiozitate</li>   
                </ul> 
                
                Versiuni:<br><br>

                CUBE este furnizat ca standard din sectiuni vitrate A40 din aluminiu anodizat.
                Culoarea acestora poate fi adaptata conform cerintelor dumneavoastra, in orice 
                culoare la alegere. <br><br>
                Putei opta intre diferite tipuri de umpleri, complet pline sau 
                chiar vitratri transparente. Sectiunile A40 pot fi combinate cu sectiuni din panouri 
                sandwich din otel de tip S40.<br><br>
                CUBE are intotdeauna un numar PAR de sectiuni, iar 
                fiecare pereche (2 sectiuni) are intotdeauna aceeasi inaltime (maxim 650 mm). <br><br>
                Pentru fiecare pereche de sectiuni, una din ele va avea tot timpul balamalele la 
                exterior. Sistemul de arcuri este INTOTDEAUNA pre-montat, astfel ca se asigura 
                o instalare facila si rapida.

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                
                <?php
                    $handle = opendir('photos/mPoartaSectionalaCube');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess' && $entry != 'video1.mp4'){
                            echo "<img src='photos/mPoartaSectionalaCube/$entry' class='imgClass' alt='PoartaSectionalaCube$entry'></img>";
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
                <video class="imgClass" autoplay muted loop>
                    <source src="photos/mPoartaSectionalaCube/video1.mp4" type="video/mp4">
                </video><br>
            </div>
            
        </content>
    </body>
    
</html>