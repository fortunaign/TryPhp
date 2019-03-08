<?php

class BobDemo {
    
    CONST DB_HOST = '127.0.0.1';
    CONST DB_NAME = 'tryphp';
    CONST DB_USER = 'root';
    CONST DB_PASS = '';

    // Open the Data Base conection
    public function __construct() {
        // Open conection
        $db = sprintf("mysql:host=%s;dbname=%s;charset=utf8", self::DB_HOST, self::DB_NAME);
        try{
            $this->pdo = new PDO($db, self::DB_USER, self::DB_PASS);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
 
    public function __destruct() {
        $this->pdo=null;
    }

    /**
     * insert blob into the files table
     * @param string $filePath
     * @param string $mime mimetype
     * @return bool
     */
     public function insertBlob($filePath, $mime) {

        $blob = fopen($filePath, 'rb');

        $sql = "INSERT INTO files(mime, bdata) VALUES(:mime, :bdata)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':mime', $mime);
        $stmt->bindParam(':bdata', $blob, PDO::PARAM_LOB);
        
        return $stmt->execute();
     }

     /**
     * update the files table with the new blob from the file specified
     * by the filepath
     * @param int $id
     * @param string $filePath
     * @param string $mime
     * @return bool
     */
    function updateBlob($id, $filePath, $mime) {
        $blob = fopen($filePath, 'rb');

        $sql = "UPDATE files SET mime = :mime, bdata = :bdata WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':mime', $mime);
        $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    /**
     * select data from the the files
     * @param int $id
     * @return array contains mime type and BLOB data
     */
    public function selectBlob($id) {
        $sql = "SELECT mime, bdata FROM files WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(":id"=>$id));
        $stmt->bindColumn(1, $mime);
        $stmt->bindColumn(2, $bdata, PDO::PARAM_LOB);
        $stmt->fetch(PDO::FETCH_BOUND);
        return array("mime" => $mime, "bdata" => $bdata);
    }

    public function selectAll(){
        $sql = "SELECT id, mime, bdata FROM files";
        return $stmt = $this->query($sql);
    }

}