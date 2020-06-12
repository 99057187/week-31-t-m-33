<?php

function getAllRuiters() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM ruiters";
	$statement = $db->prepare($sql);
	$statement->execute();

	$db = null;

	return $statement->fetchAll();
}

function getAllHorses() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horses";
	$statement = $db->prepare($sql);
	$statement->execute();

	$db = null;

	return $statement->fetchAll();
}

function getAllPlans() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM plannen";
	$statement = $db->prepare($sql);
	$statement->execute();

	$db = null;

	return $statement->fetchAll();
}

function deleteRuiter($id){
    $conn = openDatabaseConnection();
	$statement = $conn->prepare("DELETE FROM ruiters WHERE id = :id ");
	$statement->bindParam(":id",$id);
	$statement->execute();
}

function createRuiter($name, $adres, $telNummer){
    $conn=openDatabaseConnection();
    $statement=$conn->prepare("INSERT INTO ruiters (name, adres, telNummer) VALUES (:name, :adres, :telNummer)");
    $statement->bindParam(":name" , $name);
	$statement->bindParam(":adres" , $adres);
	$statement->bindParam(":telNummer" , $telNummer);
    $statement->execute();
}

function getRuiter($id){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT * FROM ruiters WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}

function updateRuiter($data, $id){
    $conn=openDatabaseConnection();
    $statement = $conn->prepare("UPDATE ruiters SET name = :name, adres = :adres, telNummer = :telNummer WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->bindParam(":name" , $data["name"]);
	$statement->bindParam(":adres" , $data["adres"]);
	$statement->bindParam(":telNummer" , $data["telNummer"]);
    $statement->execute();
}

function deleteHorse($id){
    $conn = openDatabaseConnection();
	$statement = $conn->prepare("DELETE FROM horses WHERE id = :id ");
	$statement->bindParam(":id",$id);
	$statement->execute();
}

function createHorse($name, $Ras, $lengte, $image, $schofthoogte, $soort, $age, $description){
    $conn=openDatabaseConnection();
    $statement=$conn->prepare("INSERT INTO horses (name, Ras, lengte, image, schofthoogte, soort, age, description) VALUES (:name, :Ras, :lengte, :image, :schofthoogte, :soort, :age, :description)");
    $statement->bindParam(":name" , $name);
	$statement->bindParam(":Ras" , $Ras);
	$statement->bindParam(":lengte" , $lengte);
	$statement->bindParam(":image" , $image);
	$statement->bindParam(":schofthoogte" , $schofthoogte);
	$statement->bindParam(":soort" , $soort);
	$statement->bindParam(":age" , $age);
	$statement->bindParam(":description" , $description);
    $statement->execute();
}

function getHorse($id){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT * FROM horses WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}

function updateHorse($data, $id){
    $conn=openDatabaseConnection();
    $statement = $conn->prepare("UPDATE horses SET name = :name, Ras = :Ras, lengte = :lengte, schofthoogte = :schofthoogte, image = :image, description = :description, soort = :soort, age = :age WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->bindParam(":name" , $data["name"]);
	$statement->bindParam(":Ras" , $data["Ras"]);
	$statement->bindParam(":lengte" , $data["lengte"]);
	$statement->bindParam(":schofthoogte" , $data["schofthoogte"]);
	$statement->bindParam(":image" , $data["image"]);
	$statement->bindParam(":description" , $data["description"]);
	$statement->bindParam(":soort" , $data["soort"]);
	$statement->bindParam(":age" , $data["age"]);
    $statement->execute();
}

function createDate($Ruiter, $Horse, $begindate, $enddate){
    $conn=openDatabaseConnection();
    $statement=$conn->prepare("INSERT INTO plannen (Ruiter, Horse, begindate, enddate) VALUES (:Ruiter, :Horse, :begindate, :enddate)");
	$statement->bindParam(":Ruiter" , $Ruiter);
	$statement->bindParam(":Horse" , $Horse);
	$statement->bindParam(":begindate" , $begindate);
	$statement->bindParam(":enddate" , $enddate);
	$statement->execute();
	
}

function deletePlan($id){
    $conn = openDatabaseConnection();
	$statement = $conn->prepare("DELETE FROM plannen WHERE id = :id ");
	$statement->bindParam(":id",$id);
	$statement->execute();
}

function getPlan($id){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT * FROM plannen WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}

function updatePlan($data, $id){
    $conn=openDatabaseConnection();
    $statement = $conn->prepare("UPDATE plannen SET Ruiter = :Ruiter, Horse = :Horse, begindate = :begindate, enddate = :enddate WHERE id = :id");
	$statement->bindParam(":id", $id);
	$statement->bindParam(":Ruiter" , $data["Ruiter"]);
	$statement->bindParam(":Horse" , $data["Horse"]);
	$statement->bindParam(":begindate" , $data["begindate"]);
	$statement->bindParam(":enddate" , $data["enddate"]);
    $statement->execute();
}

function getDetailsRuiter($name){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT * FROM ruiters WHERE name = :name");
	$statement->bindParam(":name", $name);
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}

function getDetailsHorse($name){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT * FROM horses WHERE name = :name");
	$statement->bindParam(":name", $name);
	$statement->execute();
	$conn = null;
	return $statement->fetchAll();
}