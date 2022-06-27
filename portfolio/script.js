var typed = new Typed(".typing",{
    strings: ["Web Designer", "Web Developer", "Software Developer"],
    typeSpeed: 80,
    backSpeed: 80,
});


const menu = document.querySelector('.nav_menu');
const menuBtn = document.querySelector('#open-menu-btn');
const closeBtn = document.querySelector('#close-menu-btn');

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})


const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}
closeBtn.addEventListener('click', closeNav);


window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 100);
})




//filter
// alle projecten opgehaald met de klasse project
let allprojects = document.getElementsByClassName("project");
// alle elementen met de klasse filter opgehaald
let filters = document.getElementsByClassName("filter");

window.scrollTo(0, 0)
setInterval(function () {
    document.getElementsByTagName("body")[0].style.overflow = "auto";
}, 1500);

for (let i = 0; i < filters.length; i++) {
    filters[i].checked = true;
}

//sport
let vrFilter = document.getElementById("checkbox-vr");
vrFilter.onchange = function () {
    //hij gaat checken of het aan of uit staat
    if (vrFilter.checked === true) {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "vr") {
                allprojects[i].style.display = "block";
            }
        }
    }
    else {
        //hier loop je door alle projecten met een for loop
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "vr") {
                allprojects[i].style.display = "none";
            }
        }
    }
}

// RPG
let apiFilter = document.getElementById("checkbox-api");
apiFilter.onchange = function () {
    if (apiFilter.checked === true) {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "api") {
                allprojects[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "api") {
                allprojects[i].style.display = "none";
            }
        }
    }
}


// style
let styleFilter = document.getElementById("checkbox-style");
styleFilter.onchange = function () {
    if (styleFilter.checked === true) {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "style") {
                allprojects[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "style") {
                allprojects[i].style.display = "none";
            }
        }
    }
}

let sitesFilter = document.getElementById("checkbox-sites");
sitesFilter.onchange = function () {
    if (sitesFilter.checked === true) {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "sites") {
                allprojects[i].style.display = "block";
            }
        }
    }
    else {
        for (let i = 0; i < allprojects.length; i++) {
            if (allprojects[i].dataset.category === "sites") {
                allprojects[i].style.display = "none";
            }
        }
    }
}


