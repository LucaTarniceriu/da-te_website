<html>
    <head>
        <title>Poarta Batanta - Da-Te</title>
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
                <h2> Automatizare Poarta Batanta</h2>
                
                Contine:
                <ul>
                    <li> Doua motoreductoare cu unitate de comanda </li>
                    <li> Fotocelule </li>
                    <li> Comanda cu cheie si telecomanda </li>
                    <li> Deblocare cu cheie pentru actionare manuala </li>
                    <li> Lampa de semnalizare si antena </li>
                </ul>

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>

                <video class = "imgClass" autoplay muted loop>
                    <source src="photos/mPoartaBatanta/video1.mp4" type="video/mp4">
                </video><br>

                <?php
                    $handle = opendir('photos/mPoartaBatanta');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess' && $entry != 'video1.mp4'){
                            echo "<img src='photos/mPoartaBatanta/$entry' class='imgClass' alt='PoartaBatanta$entry'></img>";
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