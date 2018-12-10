function change_suerte() { 
    var num = "000" + Math.floor((Math.random() * 9999) + 1);
    document.getElementById("numero_suerte_span").innerHTML = num.substring(num.length -4, num.length);
}
change_suerte();