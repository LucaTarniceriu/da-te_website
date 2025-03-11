var mode = 1;

function changeColorOfLinks(color, TheClass){
    var linkAtributes = document.getElementsByClassName(TheClass);
    for(i=0; i<linkAtributes.length; i++){
        linkAtributes[i].style.color = color;
    }
}

function changeColorOfbg(color, TheClass){
    var linkAtributes = document.getElementsByClassName(TheClass);
    for(i=0; i<linkAtributes.length; i++){
        linkAtributes[i].style.backgroundColor = color;
    }
}

function changeSrc(source, TheClass){
    var linkAtributes = document.getElementsByClassName(TheClass);
    for(i=0; i<linkAtributes.length; i++){
        linkAtributes[i].src = source;
    }
}

function setVariable(varName, varValue){
    var r = document.querySelector(':root');
    r.style.setProperty(varName, varValue);
}


function switchMode(){
    if(mode == 1)
    {
        mode = 0;
        document.getElementById("modeIconI").src = "photos/lightMode.png";
        changeSrc("photos/logoTdm.png", "logo")

        document.body.style.backgroundColor = "#272424";
        document.body.style.color = "#fffcf2";

        setVariable("--link", "#fffcf2")

        changeColorOfbg("272424", "dropdown-content")

        setVariable("--hover", "#dddddd23")

        sessionStorage.setItem("darkModeBool", 0);

    }
    else
    {
        mode = 1;
        document.getElementById("modeIconI").src = "photos/darkMode.png";
        changeSrc("photos/logoT.png", "logo")

        document.body.style.backgroundColor = "#fffcf2";
        document.body.style.color = "#202020";

        setVariable("--link", "#202020")


        changeColorOfbg("fffcf2", "dropdown-content")
        setVariable("--hover", "#ddd")

        sessionStorage.setItem("darkModeBool", 1);
    }
        
}