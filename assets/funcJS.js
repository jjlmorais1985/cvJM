/*function getform() {
    var nom = document.getElementById("nom").value;
    var enterprise =  document.getElementById(enterprise).value;
    var tel = document.getElementById(tel).value;
    var e_mail = document.getElementById(e_mail).value;
    var msg = document.getElementById(msg).value;

    document.getElementsByTagName("title").innerHTML = "Nom: " + nom + "\nEntreprise: " + entreprise + "\nTéléphone: " + tel + "\nE-mail: " + e_mail + "\nMessage: " + msg;
}*/

/*
function rdPage(){  
    setTimeout(function(){
        window.location.href = 'index.php';
    }, 1000);
}
*/

function countDown() {
    const count = [5, 4, 3, 2, 1];
    for (let i = 0; i <= 4; i++) {
        counter(i, count);
        if (i === 4) {
            setTimeout(function(){
                window.location.href = 'index.php';
            }, 5000);
        }
    }
    
}
function counter(i, count) {
    setTimeout(function() {
        document.getElementById("timer").innerHTML = count[i];
    }, 1000 * i);
}

/*
function hideLogin() {
    
}
*/





