<?php
// Initialize the session
session_start();
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true))
    $_SESSION['user_id']=0;

?>
<!doctype html>
<html lang="ro">
<head>
    <title>Proiect</title>
    <link rel="stylesheet" type="text/css" href="Proiect.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">

</head>
<body>
    <div class="dropdown">
        <button class="dropbtn">Meniu</button>
        <div class="dropdown-content">
            <a href="tprev.php">Top jocuri</a>
            <a href="forum.php">Forum</a>
            <a href="login.php">Profil</a>
        </div>
    </div>
    <div class="main">
        <h1 id="Title">Descriere</h1>
        <p id="art">As dori sa fac o revista legata de jocuri pe calculator sau alte dispozitivesi asta ar implica: </p>
        <ul id="list">
            <li>pot crea ,alaturi de comunitate, articole legate de acestea cum ar fi review-ri sau top-uri pe o categorie,</li>
            <li>sa fac un forum unde utilizatorii isi pot pune idei, teorii sau momentele lor preferate din experientele lor cu jocurile,</li>
            <li>as putea pune la review-uri link-uri de unde utilizatorii pot achizitiona un potential bun,</li>
            <li>in sectiunea ,,Top cele mai bune jocuri ale tuturor timpurilor" voi lasa utilizatorii care lunt cel putin avansati sa puna si ei un review si sa il editeze la un joc la alegere dar voi pune si review-uri de critici si apoi voi face o medie si fiecare joc va fi clasa dupa ascest scor.</li>
        </ul>
        <h2 id="sub2">Fiecare utilizator ar avea un subtitlu care ar depinde de vechimea si activitatea lor online pe site fiind mai intai recrut, adept, avansat, expert si intr-un final maestru</h2>
        <h3>Recrut->Adept</h3>
        <ul>
            <li>Un recrut poate trece la adept daca are cel putin 10 zile vechime in site si are 5 comentarii per total la postari. Un adept poate crea propriile postari.</li>
        </ul>
        <h3>Adept->Avansat</h3>
        <ul>
            <li>Ca cineva sa ajunga avansat trebuie sa aiba 50 de aprecieri per total la postari si cel putin 5 per postatre. Un avansat poate crea propriile review-uri.</li>
        </ul>
        <h3>Avansat->Expert</h3>
        <ul>
            <li>Pentru a ajunge expert trebuie ca utilizatorul sa aiba 5 review-uri si sa fie aprecaiate de alte 10 conturi. Un expert poate raporta pe cineva pentru ca 10 maestrii sa judece daca poate fi dat afara de pe site. La 3 abateri contul va fi strers.</li>
        </ul>
        <h3>Expert->Maestru</h3>
        <ul>
            <li>Maestrii sunt cei care au 10 review-uri apreciate de 1000 de perosane si nu au nici o penalizare.Maestrii pot judeca daca cineva poate fi dat afara de pe site.</li>
        </ul>
        <h2>Baza de date</h2>
        <h4>Va contine utilizatorii, review-urile, postarile, comentarii la postari cu username-ul utilizatorului.</h4>
    </div>
    <footer id="foot">
        <p>Visan Traian-Dimitrie grupa 231</p>
    </footer>
</body>
</html>