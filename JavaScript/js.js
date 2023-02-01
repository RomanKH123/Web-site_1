function key(){
    var x = parseInt(document.getElementById("nnn").value);
    var y = x + 1;
    document.getElementById("nnn").value = y;
}
function min(){
    var x = parseInt(document.getElementById("nnn").value);
    if (x==0){
        document.getElementById("nnn").value = 0;
    }
    else{
        var y = x - 1;
        document.getElementById("nnn").value
    }
}
function ab(){
    document.getElementById("itog").value = "Банер";
    document.getElementById("str").value = "5000";
}
function bb(){
    document.getElementById("itog").value = "Визитка";
    document.getElementById("str").value = "1000";
}
function cb(){
    document.getElementById("itog").value = "Флаер";
    document.getElementById("str").value = "2000";
}
function cash(){
    var x = parseInt(document.getElementById("nnn").value);
    var y =  parseInt(document.getElementById("str").textContent);
    var z = x * y;
    document.getElementById("cash").value = z;
}
function delet(){
    document.getElementById("name").value = "";
    document.getElementById("famel").value = "";
    document.getElementById("other").value = "";
    document.getElementById("tel").value = "";
    document.getElementById("data").value = "";
    document.getElementById("cash").value = 0;
}
