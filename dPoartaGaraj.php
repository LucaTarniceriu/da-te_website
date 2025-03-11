<html>
    <head>
        <title>Poarta de Garaj - Da-Te</title>
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
                <h2> Poarta de Garaj</h2>
                
                Panelurile au urmatoarele caracteristici:
                <ul>
                    <li> Sunt construite cu protectie impotriva prinderii degetelor si raspund normelor de securitate ale C.E.</li>
                    <li> Sunt construite astfel incat imbinarea lor se realizeaza perfect</li>
                    <li> Sunt prevazute cu garnituri de etansare ce asigura o izolatie perfecta impiedicand patrunderea apei sau prafului.</li>
                    <li> Lateralele sunt inchise cu capace de otel galvanizat ce cresc rezistenta panelurilor.</li>
                    <li> Coeficientul de izolatie termica u = 0.51W/m²K</li>
                    <li> Prezinta o placa metalica de intrare in zona de fixare a balamalelor</li>
                    <li> Tratamentul aplicat panelurilor le ofera o rezistenta crescuta impotriva coroziunii</li>
                    <li> Sunt disponibile in doua inaltimi: 500 mm si 610 mm</li>
                    <li> Sunt construite din otel galvanizat cu izolatie din poliuretan cu grosime de 40 mm</li>
                    <li> Sunt prevazute cu folie de protectie pe fata interioara cat si pe cea exterioara pentru a prevenii eventualele zgarieturi la manipulare. Foliile de protectie se indeparteaza la montaj.</li>
                </ul>

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mPoartaGaraj');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mPoartaGaraj/$entry' class='imgClass' alt='PoartaDeGaraj$entry'></img>";
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