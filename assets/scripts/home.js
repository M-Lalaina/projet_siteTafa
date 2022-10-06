var logo1 = document.getElementById("logo_tafa_1");
var logo2 = document.getElementById("logo_tafa_2");
var darkMode = document.getElementById("icon_darkmode");
var heading = document.getElementById("heading");
var footerContainer = document.getElementById("footer_container");

logo1.setAttribute("src", "assets/imgs/logo_tafa.1.png");
logo2.setAttribute("src", "assets/imgs/logo_tafa.2.png");

// ......DARK MODE......
/**
 * changement des couleurs selon le thème au click de l'icone "moon"
 */

darkMode.addEventListener("click", () => {
    //theme change
    document.body.classList.toggle("bodyDarkMode");

    if (document.body.classList.contains("bodyDarkMode")) {
        //icon_ change
        darkMode.classList.replace("fa-moon", "fa-sun");

        //text-color change
        darkMode.classList.add("text-white");

        //logoChange
        logo1.setAttribute("src", "assets/imgs/logo_tafa.2.png");
        logo2.setAttribute("src", "assets/imgs/logo_tafa.1.png");

        //bgChange
        footerContainer.classList.replace("text-white", "text-black");
    } else {
        //icon_change
        darkMode.classList.replace("fa-sun", "fa-moon");

        //text-color change
        darkMode.classList.remove("text-white");

        //logoChange
        logo1.setAttribute("src", "assets/imgs/logo_tafa.1.png");
        logo2.setAttribute("src", "assets/imgs/logo_tafa.2.png");

        //bgChange
        footerContainer.classList.replace("text-black", "text-white");
    }
});

/**
 * animations des textes
 */

const titleAnim = document.querySelector("h1");

new Typewriter(titleAnim, {
    // loop: true,
    // deleteSpeed:20
})
    //.changeDelay(20) //changer la vitesse de l'écriture
    .typeString("Talent Factory ou [TAFA]") //écire du texte
    .pauseFor(300) //pause en millisec
    // .typeString("Formation professionnelle sur les métiers du numérique")
    // .deleteChars(30) //suppr des chaines de Kres
    .start();
