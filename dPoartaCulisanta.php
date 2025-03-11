<html>
    <head>
        <title>Poarta Culisanta - Da-Te</title>
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
                <h2> Automatizare Poarta Culisanta</h2>
                
                Contine:
                <ul>
                    <li> Un motoreductor cu unitate de comanda </li>
                    <li> Fotocelule </li>
                    <li> Comanda cu cheie si telecomanda </li>
                    <li> Deblocare cu cheie pentru actionare manuala </li>
                    <li> Lampa de semnalizare si antena </li>
                    <li> Cremaliera </li>
                </ul>

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mPoartaCulisanta');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mPoartaCulisanta/$entry' class='imgClass' alt='PoartaCulisanta$entry'></img>";
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