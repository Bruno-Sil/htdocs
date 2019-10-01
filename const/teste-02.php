<?php

$json = '[{"Nome":"Ma\u00e7\u00e3","Idade":"22"}]';

$data = json_decode($json, true);

var_dump($data);









?>