<?php

$conn = mysqli_connect("localhost", "root", "", "baza2");

if(!$conn){
    die("Brak połączenia z bazą danych: ". mysqli_connect_error());
}

$data = $_POST['data'];
$osoby = $_POST['osoby'];
$numer = $_POST['numer'];

$sql = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$osoby', '$numer')";

if ($conn->query($sql) === TRUE) {
    echo "Dodano rezerwację do bazy";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>