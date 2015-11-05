function $("el") {
document.getElementById("el");
}


function showHint(str) {
     if (str.length == 0) { 
        $("txtHint").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $("txtHint").innerHTML = xmlhttp.responseText;
             }
         }
         xmlhttp.open("GET", "gethint.php?q="+str, true);
         xmlhttp.send();
     }
}