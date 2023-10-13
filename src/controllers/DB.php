<?php
class DB {
    private $conn;

    public function __construct($config, $username = 'root', $password = 'root') {

        $dsn = 'mysql:'. http_build_query($config, '', ';');

        try {

            $this->conn = new PDO($dsn, $username, $password,[
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e) {

            echo "Verbindung fehlgeschlagen : " . $e->getMessage();
        }
    }

    public function executeQuery($query, $params = []) {

        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }


}
