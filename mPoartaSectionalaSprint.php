<html>
    <head>
        <title>Poarta Sectionala Sprint - Da-Te</title>
        <meta name="viewport" content="user-scalable=no"> </meta>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/common.css">
        <script type = "text/javascript" src="mobileFunctions.js"></script>
    </head>    


    <!--mobile<br><br> -->
    
    <body>
        
        <?php include('mTopMenu.php'); ?>


    
        <h3> Poarta Sectionala Sprint</h3>



        <content>

            Pro-Line SPRINT este o combinatie unica intre viteza si usurinta in utilizare a unei usi sectionale 
                standard Pro-Line. Aceasta usa extrem de rapida combina toate avantajele unei usi sectionale 
                traditionale cu o usa de mare viteza intr-un singur sistem.<br><br>

                SPRINT este special conceputa ca fiind o usa sectionala rapida. Reducerea timpului cat usa este 
                deschisa, face posibila realizarea unor economii majore de energie. Aceasta usa este perfecta 
                pentru instalarea in peretele exterior si poate fi adaptata dorintelor dumneavoastra specifice.<br><br>

                SPRINT este disponibila in doua veriuni, S40 SPRINT si A40 SPRINT
                
                <br><br><br>
    
                Caracteristici:
                <ul>
                    <li> Sigure si durabile</li>
                    <li> Costuri reduse de intretinere</li>
                    <li> Concepute atat pentru interior cat si pentru exterior</li>
                    <li> Sunt utilizate doar componente si materiale de calitate</li>
                    <li> Viteza de deschidere de 1000 mm pe secunda</li>
                    <li> Inaltimea sectiunii de 370 mm, confera usii SPRINT o rulare pe curba, cu o rezistenta foarte scazuta </li>
                    <li> Datorita inaltimii maxime a sectiunilor de 370 mm, usa SPRINT este extrem de stabila si puternica </li>
                    <li> Role duble tandem, pentru o buna functionare si o durata lunga de viata</li>
                    <li> Intotdeauna echipare cu ax solid de 1 ¼”</li>
                    <li> Role de inalta calitate, combinate cu suporti de role special conceputi</li>
                    <li> Arcuri standard pentru 50.000 de cicluri</li>
                    <li> Unitate de control al frecventei, cu pornire si oprire lina</li>
                    <li> Sistem de control imbunatatit special</li>
                    <li> Foarte multe optiuni disponibile pentru a asigura o functionare optima, incluzand: Radar si comutator cu sfoara</li>
                    <li> Perdea luminoasa pentru o siguranta optima</li>
                    <li> Disponibil cu trei tipuri de rabatere: 
                        <ul style=" margin-left: 0vw;">
                            <li> Sistem normal</li>
                            <li> Sistem cu suprainaltare</li>
                            <li> Sistem vertical</li>
                        </ul>
                    </li>

                </ul> 
                <br><br>

                Utilizare <br><br>
                Usile SPRINT sunt extrem de potrivite pentru instalarea in peretii exteriori, ne mai fiind nevoie in acest caz de 
                combinatia dintre o usa sectionala standard si una rapida.<br><br>
                Deoarece sunt disponibile numeroase tipuri de rabateri, 
                instalarea acesteia este comparabila cu cea a unei usi sectionale standard.<br><br>
                SPRINT este o usa fiabila si usor de utilizat, 
                prin urmare, poate fi utlizata in numeroase locatii

                <br><br><br>    
            <video class = "imgClass" controls muted>
                <source src="photos/mPoartaSectionalaSprint/sprint1.mp4" type="video/mp4">
            </video><br>
            <video class = "imgClass" controls muted>
                <source src="photos/mPoartaSectionalaSprint/sprint2.mp4" type="video/mp4">
            </video>
            <?php
                $handle = opendir('photos/mPoartaSectionalaSprint');
                $cont = 0;
                if($handle){
                    while(($entry = readdir($handle)) !== false){
                        if($entry != '.' && $entry != '..' && $entry != '.htaccess' && $entry != "sprint1.mp4" && $entry != "sprint2.mp4"){
                        echo "<img src='photos/mPoartaSectionalaSprint/$entry' class='imgClass' alt='mPoartaSectionalaSprint$entry'></img>";
                        $cont += 1;
                        if($cont == 1)
                        {
                            echo "<br>";
                            $cont = 0;
                        }
                        }
                    }
                    closedir($handle);
                }
            ?>

            <br><br>


        </content>

        
    </body>

</html>