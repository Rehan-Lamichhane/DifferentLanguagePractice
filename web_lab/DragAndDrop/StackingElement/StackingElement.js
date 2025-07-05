var topp = "airplane1";

function toTop(obj) {
    console.log(obj);
    var domTop = document.getElementById(topp).style;
    var domNew = document.getElementById(obj).style;

    domTop.zIndex = '0';
    domNew.zIndex = '10';

    topp = obj; 
}
