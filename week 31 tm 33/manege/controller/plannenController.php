<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("plannen/index", array("Plannen" => getAllPlans(), "Ruiters" => getAllRuiters(), "Horses" => getAllHorses()));
}

function create(){
	render("plannen/create", array("Plannen" => getAllPlans(), "Ruiters" => getAllRuiters(), "Horses" => getAllHorses()));
}

function store(){
	$Ruiter=$_POST["Ruiter"];
	$Horse=$_POST["Horse"];
	$begindate=$_POST["begindate"];
	$enddate=$_POST["enddate"];
	createDate($Ruiter, $Horse, $begindate,$enddate);
    index();
}

function delete($id){
    render("plannen/delete", ["id" => $id]);
}

function destroy($id){
    deletePlan($id);
    index();
}

function update($id){
    $plan=getplan($id);
    render("plannen/update", array('plan' => $plan, "Ruiters" => getAllRuiters(), "Horses" => getAllHorses(), "id" => $id ));
}

function edit($id){
    updatePlan($_POST,$id);
    index();
}

function detail($id){
	$ryan="ryan";
	$Fiero="Fiero";
	render("plannen/detail", array("Plannen" => getAllPlans(), "Ruiter" => getDetailsRuiter($ryan), "Horse" => getDetailsHorse($Fiero),$id));
}

