<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("paarden/index", array("Horses" => getAllHorses()));
}

function delete($id){
    render("paarden/delete", ["id" => $id]);
}

function destroy($id){
    deleteHorse($id);
    index();
}

function create(){
	render("paarden/create");
}

function store(){
	$name=$_POST["name"];
	$Ras=$_POST["Ras"];
	$lengte=$_POST["lengte"];
	$image=$_POST["image"];
    $schofthoogte=$_POST["schofthoogte"];
	$soort=$_POST["soort"];
	$age=$_POST["age"];
	$description=$_POST["description"];
    createHorse($name, $Ras, $lengte, $image, $schofthoogte, $soort, $age, $description);
    index();
}

function update($id){
    $Horse=getHorse($id);
    render("paarden/update", array('Horse' => $Horse ));
}

function edit($id){
    updateHorse($_POST,$id);
    index();
}