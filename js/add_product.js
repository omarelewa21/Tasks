var i =  0; 
function Clone(elem){
    var general = document.getElementsByClassName("General")[0];
    var cloned = general.cloneNode(true);
    cloned.querySelector('.labels').value = "";
    cloned.querySelector('.inputs').value = "";
    var form = document.getElementsByClassName("product-form")[0];
    var container = document.getElementsByClassName("big-container")[0];
    container.appendChild(cloned);
    elem.style.visibility = "hidden";
    var positive = document.getElementsByClassName("positive");
    positive[positive.length - 1].style.visibility = "visible";

}


function remove(elem){
    var general = elem.parentNode;
    if(document.getElementsByClassName("General").length > 1){
        general.remove();
    }

    var positive = document.getElementsByClassName("positive");
    positive[positive.length - 1].style.visibility = "visible";
}