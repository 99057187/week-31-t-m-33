<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("home/index", array("Ruiters" => getAllRuiters()));
}

function delete($id){
    render("home/delete", ["id" => $id]);
}

function destroy($id){
    deleteRuiter($id);
    index();
}

function create(){
    render("home/create");
}

function store(){
    $name=$_POST["name"];
    $adres=$_POST["adres"];
    $telNummer=$_POST["telNummer"];
    createRuiter($name, $adres, $telNummer);
    index();
}

function update($id){
    $Ruiter=getRuiter($id);
    render("home/update", array('Ruiters' => $Ruiter ));
}

function edit($id){
    updateRuiter($_POST,$id);
    index();
}