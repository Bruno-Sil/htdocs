<?php

$json = '[{"Nome":"Java","Fabricante":"Sun MicroSystens"},{"Nome":"PHP","Fabricante":"Rasmus Lerdof"},{"Nome":"C++","Fabricante":"JBarne"},{"Nome":"Lua","Fabricante":"UFRJ"}]';

$data = json_decode($json, true);

var_dump($data);




?>