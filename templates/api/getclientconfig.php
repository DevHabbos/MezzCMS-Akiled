﻿<?php 
$config = array();
$config['ip'] = "127.0.0.1";
$config['port'] = "30000";
$config['AkiledUrl'] = "http://localhost";
$config['Akiledswfs'] = 'http://swfs.localhost';
$config['Vars'] = $config["Akiledswfs"].'/gamedata/vars.txt';
$config['Texts'] = $config["Akiledswfs"].'/gamedata/texts.txt';
$config['Producdata'] = $config["Akiledswfs"].'/gamedata/productdata.txt';
$config['Furnidata'] = $config["Akiledswfs"].'/gamedata/furniture.txt';
$config['MessageFun'] = "La Aventura Está Por Comenzar/hionix Ya tiene listas tus salas/Guzman les dice: ¡lanza la vaca!./hionix necesita de tu apoyo!/Eres mi carnada favorita./No quiero que pienses que es una ilusión./Has venido para quedarte/Adoro tu camisa./Regresame eso, si no quieres un chanclazo !/Si no estas aquí.. No eres nadie/Esta es la Pixel Guerra./Cambia esa cara que lo mejor ha llegado.";
$config['Message'] = "Cargando...";
$config['R_64'] = $config["Akiledswfs"].'/gordon/R_64/';
$config['swf'] = "hionixh6.swf";
$config['cache'] = time();

echo json_encode($config);
?>