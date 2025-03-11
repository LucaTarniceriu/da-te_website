<head>
  <title>furnizori</title>
  <meta name="robots" content="noindex">
  <style>

    .divFurnizori{
    background-color: #feec04; 
    color: #202020;
    display: block;
    font-size: 1vw;
    margin: auto;
    margin-left: -15%;
    margin-top: 20%;
    padding-bottom: 2%;
    padding-top: 2%;
    text-align: center;
    width: 130%;
    }

    .furnizori{
    padding-bottom: 1%;
    padding-top: 1%;
    position:relative;
    width: 7%;
    }



  </style>
</head>


<div class="divFurnizori">
  Principali furnizori si parteneri:<br>

  <?php
    $handle = opendir('photos/furnizori');
    $cont = 0;
    if($handle){
      while(($entry = readdir($handle)) !== false){
        if($entry != '.' && $entry != '..' && $entry != '.htaccess'){
          echo "<img src='photos/furnizori/$entry' class='furnizori'></img>";
          $cont += 1;
          if($cont == 4)
          {
            $cont = 0;
            // echo "<br>";
          }
        }
      }
      closedir($handle);
    }

  ?>
</div>