let $bienvenida = document.getElementById("bienvenida");

let ajax = new XMLHttpRequest();

ajax.open("GET", "http://api.cornagopablo.com", true);
ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

ajax.send();

ajax.onreadystatechange = () => {
    if (ajax.readyState == 4 && ajax.readyState != null) {
        $bienvenida.textContent = ajax.responseText;
    }
};
