let intro = document.querySelector(".intro");
let logo = document.querySelector(".logo-header");
let logoSpan = document.querySelectorAll(".logo");

window.addEventListener('DOMContentLoaded', ()=>{

        setTimeout(()=>{

            logoSpan.forEach((span, idx)=>{
                setTimeout(()=>{
                    span.classList.add('active');
                }, (idx + 1) * 400)
            });

            setTimeout(()=>{
                logoSpan.forEach((span, idx)=>{
                    
                    setTimeout(()=>{
                        span.classList.remove('active');
                        span.classList.add('fade');
                    }, (idx + 1) * 50)
                })
            },2000);

            setTimeout(()=>{
                intro.style.top = "-100vh";
            },2500)

            
            
        })

  
    

})


// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("menu-menu");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}