<?php

$menu = [
    '1' => 'insert data',
    '2' => 'retrive data',
    '3' => 'edit data',
    '4' => 'delete data',
    'q' => 'exit',
];

$functions = [
    '1' => 'insert',
    '2' => 'retrive',
    '3' => 'edit',
    '4' => 'delete',
    'q' => 'exiti',
];

$exit = false;

function show_menu(): void
{
    global $menu;

    foreach ($menu as $key => $title) {
        echo "[$key] $title \n";
    }
    echo "choose your key: ";
}

do{
    show_menu();
    $k = trim(fgets(STDIN));

    if(!isset($functions[$k])){
        echo "key not found!\n";
    }
    else{
        $functions[$k]();
    }

}while(!$exit);


function insert(){
    echo "\nINSERT\n";
}

function retrive(){}

function edit(){}

function delete(){}

function exiti(){
    global $exit;
    $exit = true;
    echo "\n Good Bye! \n";
}
