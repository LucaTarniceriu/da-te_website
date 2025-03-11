<html>
    <head>
        <title>Rampa Manuala - Da-Te</title>
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
                <h2> Rampa Manuala</h2>
                
                Pasarela Metalica <br><br>

                Are o capacitate de a rezolva importante diferente de nivel, cu o mobilitate simpla si o suprafata 
                antiderapanta, rezistenta la intemperii, cu o sustinere mecanica antirasturnare. 
                Pasarelele metalice sunt concepute pentru a fi instalate prin fixare la capatul modulului de incarcare 
                sau pentru a fi deplasate pe o sina cu ajutorul a doua roti.
    
                <ul>
                    <li> Nu necesita niciun tip de fosa pentru a fi instalate</li>
                    <li>  Nu necesita niciun tip de fosa pentru a fi instalate</li>
                    <li> Mobilitate usoara</li>
                    <li> Suprafata antiderapanta</li>
                    <il> Rezistenta la intemperii</il>
                </ul>
    

                <?php include('furnizori.php');?>
                
  
            </div>
            
            <div class="right">
                <br><br><br>
                <?php
                    $handle = opendir('photos/mRampaManuala');
                    $cont = 0;
                    if($handle){
                        while(($entry = readdir($handle)) !== false){
                            if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
                            echo "<img src='photos/mRampaManuala/$entry' class='imgClass' alt='RampaManuala$entry'></img>";
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