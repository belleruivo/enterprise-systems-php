<?php
    header ("Content-type: text/css");

    $tam = 'font-size50px'; 
?>

@font-face {
    font-family: Glacial;
    src: url('./src/fonts/GlacialIndifference-Regular.otf');
}

body {
	background-color: rgb(7, 7, 7);
	font-family: Glacial;
	color: white;
}

.echo {
    font-size: 18px;
    text-align: center;
    margin-top: 1.7%;
}

#form {
    margin-top: 3%;
    position: relative;
    left: 37%;
    top: 29%;
    width: 320px;
    height: 270px;
}

#form #formulario {
    position: absolute;
    display: block;
}

fieldset {
    width: 329px;
    height: 250px;
    text-align: center;
    background-color: #212121;
    font-size: 17px;
}

legend {
    font-size: 20px;
    font-style: bold;
    font-family: "Segoe UI";
}

#formulario label {
    position: absolute;
    left: 19px;
    margin-right: 5px;
}

#formulario input {
    position: absolute;
    left: 95px;
    top: 23px;
    width: 225px;
}

#voltar {
    Font-size: 20px;
    position: absolute;
    top: 88%;
    left: 90%;
}

a#voltar {
    color: #fff;
    background-color: #000b54;
    padding: 10px 22px;
    border: 1px solid #fff;
    border-radius: 20px;
    text-decoration: none;
    transition: transform 0.2s ease-in-out;
}

#voltar:hover {
    background-color: #36d698;
    color: #212121;
    border: 2px solid #000;
    border-radius: 20px;
    text-shadow: none;
    transform: scale(0.9);
    transition: transform 0.2s ease-in-out;
}

input#Enviar {
    background: #000b54;
    border: 1px solid #eee;
    border-radius: 20px;
    text-shadow: none;
    color: #fff;
    font-family: Glacial;
    display: inline-block;
    margin: auto;
    padding: 10px 20px;
    font-size: 14px;
    transition: transform 0.2s ease-in-out;
}

input#Enviar:hover {
    background-color: #36d698;
    color: #212121;
    border: 2px solid #fff;
    border-radius: 20px;
    text-shadow: none;
    transform: scale(0.9);
    transition: transform 0.2s ease-in-out;
}