let checkbox_boeken = document.getElementById("boeken");
let checkbox_bordspellen = document.getElementById("bordspellen");
let checkbox_instrumenten = document.getElementById("instrumenten");
let checkbox_kleding = document.getElementById("kleding");
let checkbox_sport = document.getElementById("sport");
let checkbox_videospellen = document.getElementById("videospellen");
let list_of_product = document.getElementsByTagName("li");
const toggleButton = document.getElementsByClassName("toggle__button")[0]
const navbarLinks = document.getElementsByClassName("navbar__links")[0]
const navbar = document.getElementsByClassName("navbar")[0]

//navbar toggle

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
    navbar.classList.add('sizeup')
})




//boeken
checkbox_boeken.addEventListener('change', function(){
    if(checkbox_boeken.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Boeken') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Boeken') {
                list_of_product[i].style.display = 'none';
            }
        }
    }

});
//borspellen
checkbox_bordspellen.addEventListener('change', function(){
    if(checkbox_bordspellen.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Bordspellen') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Bordspellen') {
                list_of_product[i].style.display = 'none';
            }
        }
    }

});
//instrumenten
checkbox_instrumenten.addEventListener('change', function(){
    if(checkbox_instrumenten.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Instrumenten') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Instrumenten') {
                list_of_product[i].style.display = 'none';
            }
        }
    }

});
//kleding
checkbox_kleding.addEventListener('change', function(){
    if(checkbox_kleding.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Kleding') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Kleding') {
                list_of_product[i].style.display = 'none';
            }
        }
    }

});
//sport
checkbox_sport.addEventListener('change', function(){
    if(checkbox_sport.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Sport') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Sport') {
                list_of_product[i].style.display = 'none';
            }
        }
    }

});
//videospellen
checkbox_videospellen.addEventListener('change', function(){
    if(checkbox_videospellen.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Videospellen') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Videospellen') {
                list_of_product[i].style.display = 'none';
            }
        }
    }

});