<?php

/**
 * {"musica": "hey jude", "artista":"the beatles", "album":"remastered"}
 * 
 * 
 * GET -> CONSULTAR
 * POST -> CRIAR
 * DELETE -> DELETAR
 * PUT -> MODIFICAR
 */

$musica1 = array("musica" => "hey jude", "artista" => "the beatles", "album" => "remastered");
$musica2 = array("musica" => "summer", "artista" => "calvin harris", "album" => "motion");
$musica3 = array("musica" => "recuerdos da 28", "artista" => "joca martins", "album" => "as melhores cançoes gauchas");
$musica4 = array("musica" => "crazy", "artista" => "gnarls barkley", "album" => "elsewhere");
$musica5 = array("musica" => "driveway", "artista" => "lil peep", "album" => "cry baby");
$musica6 = array("musica" => "falling", "artista" => "trevor daniel", "album" => "?");

$musicas = array(
    "musica1" => $musica1,
    "musica2" => $musica2,
    "musica3" => $musica3,
    "musica4" => $musica4,
    "musica5" => $musica5,
    "musica6" => $musica6

);

$animais_fofinhos1 = array("animal" => "cachorro", "nome" => "laika", "idade"=> "7 meses");
$animais_fofinhos2 = array("animal" => "gato", "nome" => "mimi", "idade"=> "1 ano");
$animais_fofinhos3 = array("animal" => "passaro", "nome" => "keko", "idade"=> "9 meses");
$animais_fofinhos4 = array("animal" => "dino", "nome" => "dino", "idade"=> "12 anos");

$animais = array(
    "animais_fofinhos1" => $animais_fofinhos1,
    "animais_fofinhos2" => $animais_fofinhos2,
    "animais_fofinhos3" => $animais_fofinhos3,
    "animais_fofinhos4" => $animais_fofinhos4
);

$resposta = array(
    "musicas" => $musicas,
    "animais" => $animais
);

echo json_encode($resposta);