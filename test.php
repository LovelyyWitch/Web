<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pawsitive";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Requête SQL pour créer la table 'client'
$sql_client = "CREATE TABLE client (
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    pets_id INT,
    FOREIGN KEY (pets_id) REFERENCES pets(pet_id)
)";

// Exécution de la requête pour créer la table 'client'
if ($conn->query($sql_client) === TRUE) {
    echo "La table 'client' a été créée avec succès.<br>";
} else {
    echo "Erreur lors de la création de la table 'client': " . $conn->error . "<br>";
}

// Requête SQL pour créer la table 'booking'
$sql_booking = "CREATE TABLE booking (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    service_type VARCHAR(50),
    check_in_date DATE,
    check_out_date DATE,
    notes TEXT,
    FOREIGN KEY (client_id) REFERENCES client(client_id)
)";

// Exécution de la requête pour créer la table 'booking'
if ($conn->query($sql_booking) === TRUE) {
    echo "La table 'booking' a été créée avec succès.<br>";
} else {
    echo "Erreur lors de la création de la table 'booking': " . $conn->error . "<br>";
}

// Fermer la connexion à la base de données
$conn->close();
?>
