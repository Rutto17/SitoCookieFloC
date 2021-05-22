<!DOCTYPE HTML>
<html>
<?php
header("Access-Control-Allow-Origin: https://http.cat/408");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Origin-Trial: A+jVpS/lk/qRKhBKyoCJiWdyhWxzjqBbEe71IRa22QKrTgxGvqjJao2x7hE7HcC63twKGqWKEFP+hA0pe9v1QQMAAABmeyJvcmlnaW4iOiJodHRwOi8vbG9jYWxob3N0OjgwIiwiZmVhdHVyZSI6IkludGVyZXN0Q29ob3J0QVBJIiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9");
//header("Permissions-Policy: interest-cohort=()");// questo blocca il calcolo della coorte 
?>
	  <head>
    <meta charset="utf-8"> 
    <title>Davide Savietto</title>            
    </head>
    <body>  
    <script>
    asyncCall();

async function asyncCall() {  //async task in background
var cohort = await document.interestCohort();//metodo per richiede l' oggetto che ritorna id corte e versione chrome l'algortimo usato per calcolarlo
let url = new URL("https://http.cat/408");//Link API d'appoggio
url.searchParams.append("cohort", cohort);//Aggiunge un'oggetto/valore specificato come nuovo parametro di ricerca.
console.log(cohort);//scrive in console l' oggetto cohort
var cohortID = cohort["id"].toString();
var cohortVersion = cohort["version"].toString();
const xhr = new XMLHttpRequest();//oggetto XMLHttpRequest che rappresenta l’intermediario tra il codice JavaScript eseguito sul browser e il codice eseguito sul server.
xhr.onload = function(){//esegue codice Javascript appena la carica è caricata
    const serverResponse = document.getElementById("serverResponseID");//Vado a prendermi l'id "serverResponse" nell' HTML
    
    serverResponseID.innerHTML = cohortID + " " + cohortVersion;//cambia il contenuto del paragrafo di id serverResponse
};
xhr.open("POST","index.php");//inizializzo la richiesta di tipo POST che manderò a index.php
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");//setto l'header della richiesta e il tipo di contenuto di tipo applicazione
xhr.send();}//mando il body della richiesta
    </script>
    <p>I've been FloCked?</p>
    <p id = "serverResponseID"></p><!--id a cui andrà la risposta dal server-->
    <form action="cookies.php">
    <input type="submit" value="Vai ai Cookies" />
</form>
  </body>
</html>