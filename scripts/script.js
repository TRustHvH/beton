function hoveropenother(){
    document.getElementById("start-footer-first").classList.add("active")
    document.getElementById("start-footer-second").classList.add("active")
    document.getElementById("start-footer-third").classList.add("active")
    document.getElementById("start-footer-fourth").classList.add("active")
}
function hovercloseother(){
    document.getElementById("start-footer-first").classList.remove("active")
    document.getElementById("start-footer-second").classList.remove("active")
    document.getElementById("start-footer-third").classList.remove("active")
    document.getElementById("start-footer-fourth").classList.remove("active")
}
jQuery(document).ready(function($){

    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('is_sent');
    console.log(myParam)
    if(myParam !== null)
    {
        alert("Успешно отправлено!")
        self.location='http://xn--80afgmkq0ap4b.xn--p1ai/#contact'
    }
    $('.button-up').fadeOut();
    $(window).scroll(function () {
        var width = window.innerWidth;
        if ($(this).scrollTop() > 750 & width > 1023) {
            $('.button-up').fadeIn();
        }
        else {
            $('.button-up').fadeOut();
        }
    });
    
});
function time(){
    let element = document.getElementById("1");
    element.style.opacity = "1";
}
setTimeout(time, 500)