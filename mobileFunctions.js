var mode = 1;

function changeColorOfLinks(color, TheClass){
    var linkAtributes = document.getElementsByClassName(TheClass);
    for(i=0; i<linkAtributes.length; i++){
        linkAtributes[i].style.color = color;
    }
}

function changeColorOfbg(color){
    var linkAtributes = document.getElementsByClassName("dropdown-container");
    for(i=0; i<linkAtributes.length; i++){
        linkAtributes[i].style.backgroundColor = color;
    }
}



function switchMode(){
    if(mode == 1)
    {
        mode = 0;
        document.getElementById("menu").src = "photos/hamburgerWhite.png";
        document.getElementById("modeIcon").src = "photos/lightMode.png";
        document.getElementById("logo").src = "photos/logoTdm.png";
        document.getElementById("mySidenav").style.backgroundColor = "#272424";
        document.getElementById("mySidenav").style.borderColor = "#272424";

        document.body.style.backgroundColor = "#272424";
        document.body.style.color = "#fffcf2";

        changeColorOfLinks("#fffcf2", "contact");
        changeColorOfLinks("#fffcf2", "dropdown-btn");
        changeColorOfLinks("#fffcf2", "dropdown-container");
        changeColorOfLinks("#fffcf2", "sidenavLinks");
        changeColorOfbg("#272424");

        sessionStorage.setItem("darkModeBool", 0);

    }
    else
    {
        mode = 1;
        document.getElementById("menu").src = "photos/hamburgerBlack.png";
        document.getElementById("modeIcon").src = "photos/darkMode.png";
        document.getElementById("logo").src = "photos/logoT.png";
        document.getElementById("mySidenav").style.backgroundColor = "#eeebe1";
        document.getElementById("mySidenav").style.borderColor = "#fffcf2";

        document.body.style.backgroundColor = "#fffcf2";
        document.body.style.color = "#202020";

        changeColorOfLinks("#202020", "contact");
        changeColorOfLinks("#202020", "dropdown-btn");
        changeColorOfLinks("#202020", "dropdown-container");
        changeColorOfLinks("#202020", "sidenavLinks");
        changeColorOfbg("#eeebe1");

        sessionStorage.setItem("darkModeBool", 1);
    }
        
}

function empty(){
    var empty = 0;
    // this does nothing
}


