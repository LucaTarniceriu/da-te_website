<html>
    <head>
        <title>Poarta Sectionala Normala - Da-Te</title>
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
                <h2> Poarta Sectionala Normala</h2>
                
                Usile industriale sectionale oferite de firma noastra sunt perfecte pentru constructia dumneavoastra, 
                fie ea hala industriala, depozit, service sau spalatorie auto. Ele pot fi instalate in aproape orice situatie 
                si pot fi confectionate la orice dimensiuni, obtinand astfel flexibilitate maxima in ceea ce priveste 
                satisfacerea exigentelor dumneavoastra.
                <br><br>
    
                Caracteristici:
                <ul>
                    <li> Usile sunt alcatuite din panouri cu o grosime de 40 mm din otel zincat cu izolatie poliuretanica;</li>
                    <li> Existenta chederelor pe toate cele 4 laturi ale usii, cat si la imbinarile dintre panouri asigura etanseitate excelenta;</li>
                    <li> Feroneria de tip FlexiForce, importata din Olanda, este din otel tratat si zincat, conferind astfel produsului robustete si rezistenta;</li>
                    <li> Arcurile tensionate preiau greutatea usii, facand ca si cea mai grea usa sa fie manevrata cu usurinta. Arcurile sunt din otel tratat si rezista pana la 80.000 de cicluri;</li>
                    <li> Rolele de nylon cu rulment pe care ruleaza usa asigura atat durabilitate, cat si o utilizare fina si silentioasa.</li>   
                </ul> 
                
                Manevrare:
                <ul>
                    <li> Cu lant</li>
                    <li>Motor electric</li>
                </ul>
    
                Accesorii pentru usile de garaj industriale: <br>
                (pot fi adaugate si dupa instalarea usii, independente una de alta)
    
                <ul>
                    <li> Telecomanda (in cazul actionarii electrice)</li>
                    <li> Fotocelule (in cazul actionarii electrice pentru protectie la inchidere)</li>
                    <li> Incuiere din exterior/interior</li>
                    <li> Panouri vitrate</li>
                    <li> Usa pietonala incorporata</li>
                </ul>
                
                Obs: Culoarea standard este Alb RAL9002, dar puteti opta pentru orice culoare din gama RAL.

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <video class="imgClass" autoplay muted loop>
                    <source src="photos/mPoartaSectionalaNorm/video1.mp4" type="video/mp4">
                </video><br>
                <?php
                    $handle = opendir('photos/mPoartaSectionalaNorm');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess' && $entry != 'video1.mp4'){
                            echo "<img src='photos/mPoartaSectionalaNorm/$entry' class='imgClass' alt='PoartaSectionalaNorm$entry'></img>";
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