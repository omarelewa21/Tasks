function Clone(elem){
    var general = $(".General2")[0];
    var cloned = general.cloneNode(true);
    cloned.querySelector('.inputs').value = "";
    var container = $(".big-container")[0];
    container.appendChild(cloned);
    elem.style.visibility = "hidden";
    var positive = $(".General2 .positive");
    positive[positive.length - 1].style.visibility = "visible";
}


function remove(elem){
    var general = elem.parentNode;
    if($(".General2").length > 1){
        general.remove();
    }

    var positive = $(".General2 .positive");
    positive[positive.length - 1].style.visibility = "visible";
}