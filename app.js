chapitres = document.querySelectorAll(".contenuChap")
    for (var k = 0; k < chapitres.length; k++) {
        if(!chapitres[k].classList.contains("active")){
            chapitres[k].style.display ="none";
        }
    }

    liste = document.querySelectorAll(".displayContent")
    for (var k = 0; k < liste.length; k++) {
        var lien = liste[k];
        lien.addEventListener("click",function(){
            var div = this.nextElementSibling;
            var disp = div.style.display;
            if(disp=="none"){
                div.style.display = "block";
                this.innerHTML = "Masquer les TP";
            }else{
                div.style.display = "none";
                this.innerHTML = "Afficher les TP";
            }
        });
    }