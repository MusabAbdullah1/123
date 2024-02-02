

//active heder sticky

const header = document.querySelector("header")
window.addEventListener("scroll",()=>{header.classList.toggle("sticky",window.scrollY > 50)})




//active scrolll

const liLink = document.querySelectorAll("header ul li a");
const section = document.querySelectorAll("section");

function activeMenu(){
    let secLength =section.length;
    while(--secLength && window.scrollY + 500 < section[secLength].offsetTop){}
    liLink.forEach(sec => sec.classList.remove("active"));
    liLink[secLength].classList.add("active");
}

activeMenu();
window.addEventListener("scroll",activeMenu);


//log in page


var x =document.getElementById("login");
        var y =document.getElementById("register");
        var z =document.getElementById("btn");
    
        function register(){
            x.style.left="-400px"
            y.style.left="50px"
            z.style.left="110px"
        }
        function login(){
            x.style.left="50px"
            y.style.left="450px"
            z.style.left="0px"
        }

  