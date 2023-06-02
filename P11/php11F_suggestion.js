function showHint(str) {
    if (str.length == 0) {
    //Code 4a
        document.getElementById("txtHint").innerHTML("");
        return;
    }
    xhttp = new XMLHttpRequest();
    //Code 4b
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var suggestions = JSON.parse(this.responseText); // Mengubah respons JSON menjadi objek JavaScript
            var suggestionString = suggestions.map(function(item) {
                return item.name;
              }).join(", ");
            document.getElementById("txtHint").innerText = suggestionString;
        }
    };
    xhttp.open("GET", "php11F_gethint2.php?keyword="+str, true);
    xhttp.send();
}