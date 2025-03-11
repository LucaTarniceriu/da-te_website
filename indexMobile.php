<html>
  <head>
    <title>Da-Te</title>
    <meta name="viewport" content="user-scalable=no"> </meta>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="css/indexM.css">
    <link rel="stylesheet" href="css/common.css">
    <script type = "text/javascript" src="mobileFunctions.js"></script>
  </head>

    <!--mobile<br><br> -->
    
  <body>
    <?php include('mTopMenu.php');?>



    <div id="topBar"> 
      <a href="tel:0722399097" id="tel"> Tel: 0722399097</a>  
      <a href = "mailto: datesrl@gmail.com" id="mail"> E-mail: datesrl@gmail.com</a>
    </div>

    <slideShow class="mainClass">

      <div class="slideshow-container">

        <div class="mySlides fade"><br>
          <img src="slideshow/1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade"><br>
          <img src="slideshow/2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade"><br>
          <img src="slideshow/3.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)"></a>
        <a class="next" onclick="plusSlides(1)"></a>

      </div>
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
      </div>

      <script>
        let slideIndex = 0;
        let timeoutId = null;
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");
        
        showSlides();

        function currentSlide(index) {
          slideIndex = index;
          showSlides();
        }

        function plusSlides(step) {
          
          if(step < 0) {
            slideIndex -= 2;   
            if(slideIndex < 0) {
              slideIndex = slides.length - 1;
            }
          }
          showSlides();
        }

        function showSlides() {
          for(let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            dots[i].classList.remove('active');
          }
          slideIndex++;
          if(slideIndex > slides.length) {
            slideIndex = 1
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].classList.add('active');
          if(timeoutId) {
            clearTimeout(timeoutId);
          }
          timeoutId = setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
      </script>

    </slideShow>

    <content class="content">
      Firma DA-TE SRL cu o experienta de peste 20 ani in domeniu va ofera produse de cea mai buna calitate la un pret competitiv, servicii de un inalt profesionalism (instalare si montaj)  <br><br>

      <ul style="border: 1px solid black">
        <li style="list-style-type: none; text-align: center; margin-left: -7vw;">Comercializam si montam:</li> <br>
        <li>usi de garaj culisante</li>
        <li>usi de garaj vitrate</li>
        <li>kit usa pietonala</li>
        <li>usi sectionale industriale</li>
        <li>usi automate</li>
        <li>usi rapide</li>
        <li>usi antifoc</li>
        <li>automatizari usi de garaj sectionale</li>
        <li>usi industriale sectionale</li>
        <li>automatizari porti batante</li>
        <li>automatizari porti culisante</li>
        <li>bariere auto is piloni retractabili</li>
        <li>rampe de egalizare</li>
        <li>burduf izotermic</li>
      </ul>

    </content>

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

        echo "<br>©";
        echo date("Y");
        echo " toate drepturile rezervate";
      ?>
    </div>
      
  </body>

</html>