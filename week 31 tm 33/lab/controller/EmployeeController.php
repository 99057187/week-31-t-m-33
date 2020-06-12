<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', ["employees" => $employees]);
}

function create(){
    render("employee/create");
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker

}

function store(){
    $name=$_POST["name"];
    $age=$_POST["age"];
    createEmployee($name, $age);
    index();
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee

}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

    //2. Bouw een url en redirect hierheen

}

function delete($id){
    render("employee/delete", ["id" => $id]);
    
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
}

function destroy($id){
    deleteEmployee($id);
    index();
}
?>