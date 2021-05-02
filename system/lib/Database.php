<?php
class Database extends PDO
{
    public function __construct($connect, $user, $pass)
    {
        parent::__construct($connect, $user, $pass);
        // khai báo biến host
        // $hostName = 'localhost';
        // khai báo biến username
        // $userName = 'root';
        // khai báo biến password
        // $passWord = '';
        // khai báo biến databaseName
        // $databaseName = 'pdo_testphpmvc';
        // khởi tạo kết nối
        // try {
        //     $connect = new PDO('mysql:host=' . $hostName . ';dbname=' . $databaseName, $userName, $passWord);
        //     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     thành công
        //     echo 'thành công';
        // } catch (PDOException $e) {
        //     thất bại
        //     die($e->getMessage());
        // }
    }
    public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
    {
        $statement = $this->prepare($sql);
        // $sql = $sql = "SELECT * FROM $table";
        foreach ($data as $key => $value) {
            $statement->bindParam($key, $value);
        }
        $statement->execute();
        return $statement->fetchAll();
    }
    public function insert($table_name, $data)
    {
        $key = implode(',', array_keys($data));
        // echo $key . '<br>';
        $value = ':' . implode(', :', array_keys($data));
        // echo $value . '<br>';
        $sql = "INSERT INTO $table_name($key) VALUES($value)";
        $statement = $this->prepare($sql);
        foreach ($data as $key => $value) {
            // echo $value . '<br>';
            $statement->bindValue($key, $value);
        }
        // $statement->bindParam(':title_category_test', $title_category_test);
        // $statement->bindParam(':desc_category_test', $desc_category_test);
        // echo 'insert thành công';
        return $statement->execute();
    }
    public function update($table_name, $data, $cond)
    {
        $updatekey = '';
        foreach ($data as $key => $value) {
            $updatekey .= "$key=:$key,";
        }
        $updatekey = rtrim($updatekey, ',');
        $sql = "UPDATE $table_name SET $updatekey WHERE $cond";
        $statement = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue($key, $value);
        }
        return $statement->execute();
    }
    public function delete($table_name, $cond, $limit = 1)
    {
        $sql = "DELETE FROM $table_name WHERE $cond LIMIT $limit";
        return $this->exec($sql);
    }
    public function affectedRows($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        return $statement->rowCount();
    }
    public function selectUser($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}