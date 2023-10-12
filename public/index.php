<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../src/vendor/autoload.php';

$app = new \Slim\App;


// Endpoint to POST a name
$app->post('/postName', function (Request $request, Response $response, array $args) {
    $data = json_decode($request->getBody());
    $fname = $data->fname;
    $lname = $data->lname;

    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    try {
        // Create a PDO database connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert data into the database
        $sql = "INSERT INTO names (fname, lname) VALUES ('" . $fname . "','" . $lname . "')";

        // Use exec() because no results are returned
        $conn->exec($sql);

        $response->getBody()->write(json_encode(array("status" => "success", "data" => null)));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode(array("status" => "error", "message" => $e->getMessage())));
    }

    // Close the database connection
    $conn = null;

    return $response;
});


// Endpoint to print name
$app->post('/printName', function (Request $request, Response $response, array $args) {
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    // Create a MySQLi connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM names";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();

        while ($row = $result->fetch_assoc()) {
            array_push($data, array("fname" => $row["fname"], "lname" => $row["lname"]));
        }

        $data_body = array("status" => "success", "data" => $data);
        $response->getBody()->write(json_encode($data_body));
    } else {
        $response->getBody()->write(json_encode(array("status" => "success", "data" => null)));
    }

    // Close the MySQLi connection
    $conn->close();

    return $response;
});


// Endpoint to update a name
$app->post('/updateName', function ($request, $response, $args) {
    // Parse JSON data from the request body
    $data = json_decode($request->getBody());
    $id = $data->id;
    $fname = $data->fname;
    $lname = $data->lname;

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    try {
        // Create a PDO connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the SQL update query
        $sql = "UPDATE names SET lname='$lname', fname='$fname' WHERE id='$id'";
        $conn->exec($sql);

        // Send a success response
        $response->getBody()->write(json_encode(array("status" => "success", "data" => null)));
    } catch (PDOException $e) {
        // Send an error response if there's an exception
        $response->getBody()->write(json_encode(array("status" => "error", "message" => $e->getMessage())));
    }

    // Close the database connection
    $conn = null;
    return $response;
});


// Endpoint to delete a name
$app->post('/deleteName', function ($request, $response, $args) {
    // Parse JSON data from the request body
    $data = json_decode($request->getBody());
    $id = $data->id;

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    // Create a MySQLi connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL delete query
    $sql = "DELETE FROM names WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        // Send a success response
        $response->getBody()->write(json_encode(array("status" => "success", "data" => null)));
    }

    // Close the MySQLi connection
    $conn->close();
    return $response;
});

$app->run();
?>