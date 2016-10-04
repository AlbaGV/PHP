<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th><?php
            echo "Ingles"
            ?></th>
                <th><?php
            echo "Español"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Penguin"
            ?></th>
                <th><?php
            echo "Pingüino"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Umbrella"
            ?></th>
                <th><?php
            echo "Paragüas"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Rock"
            ?></th>
                <th><?php
            echo "Piedra"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Queue"
            ?></th>
                <th><?php
            echo "Cola"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Sleeves"
            ?></th>
                <th><?php
            echo "Mangas"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Door"
            ?></th>
                <th><?php
            echo "Puerta"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Hair"
            ?></th>
                <th><?php
            echo "Pelo"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Necklance"
            ?></th>
                <th><?php
            echo "Collar"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Cake"
            ?></th>
                <th><?php
            echo "Pastel"
            ?></th>
            </tr>
            <tr>
                <th><?php
            echo "Jail"
            ?></th>
                <th><?php
            echo "Carcel"
            ?></th>
            </tr>
            
        </table>  
    </body>
</html>