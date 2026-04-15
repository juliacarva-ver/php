<?php 
// trabalhando com datas no php
// datas 
// echo date("d/m/Y");
// $data = date("d/m/Y");
// echo '<br>';
// echo ("Data de Hoje =".$data);

// d = dia 
// m = mes 
// Y = ano 
// H = hora (24h)
// i = minutos (30m)
// s = segundos (45s)

// echo '<br>';
// date_default_timezone_set("America/Sao_Paulo");
// echo date("d/m/Y H:i:s");

//forma moderna de trablhar com date 
// $data = new DateTime();
// // echo("data atual =".$data);
// echo $data->format("d/m/Y");



// /*
// $data -> é um objeto (criado com new DateTime())
// -> acessa algo dentro do objeto(método)
// format() -> é um método da classe DateTime
// */
// $data1 = new DateTime("2026-04-01");

// $data2 = new DateTime("2026-04-15");

// $diferenca = $data1->diff($data2);

// echo $diferenca->days."dias";


// $dataNascimento = new DateTime("2008-06-29");
// $hoje = new DateTime();
// $idade =$hoje->diff($dataNascimento);
// echo "Idade: ". $idade->y . "anos";


//string
// strlen() -> tamanho da string
/*conta os caracteres*/

// $nome = "  Julia";
// echo strlen($nome);
// echo '<br>';
// echo strtoupper($nome);
// echo '<br>';
// echo strtolower($nome);
// echo '<br>';
// echo ucfirst ($nome);
// echo '<br>';
// echo ucwords($nome);
// echo '<br>';
// echo trim($nome);

/*
✔ strlen() → tamanho
✔ strtoupper() → maiúsculo
✔ strtolower() → minúsculo
✔ trim() → remove espaços
✔ str_replace() → substitui
✔ substr() → corta texto
✔ explode() → string → array
✔ implode() → array → string
*/

// strpos() -> procurar texto
// echo strpos("programando com PHP", "PHP");

// $texto = "PHP, é, uma, linguagem, de, programação, muito, usada, para, criar, sites, e, sistemas, na, internet, O, nome, PHP, significa, Hypertext, Preprocessor, Ela, funciona, no, servidor, ou, seja, é, executada, antes, da, página, aparecer, para, o, usuário, Com, PHP, é, possível, criar, páginas, dinâmicas, fazer, login, de, usuários, enviar, formulários, acessar, bancos, de, dados, e, desenvolver, lojas, virtuais, blogs, e, redes, sociais";
// echo '<br>';
// $array = explode(",",$texto);
// echo '<br>';
// print_r($array);

// //implode() -> juntar array em srting
// $array = ["PHP", "HTML","CSS"];
// echo implode("-", $array);