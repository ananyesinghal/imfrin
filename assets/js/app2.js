let mouseCursor = document.querySelector(".cursor");
/**let navLinks = document.querySelectorAll(".nav-links li");*/

window.addEventListener("mousemove", cursor);

function cursor(e){
    mouseCursor.style.top = e.pageY + 'px';
    mouseCursor.style.left = e.pageX + 'px';
}