<?php 

class database
{
    public function query($sql, $params = [])
    {
        try{

            $pdo = new PDO('mysql:host=localhost;dbname=login_php', 'root', 'sousa');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            $results = $stmt->fetchAll(PDO::FETCH_CLASS);

            return [
                'status' => 'success',
                'data' => $results
            ];

        }catch(\PDOException $th){
            return [
                'status' => 'error',
                'data' => $th->getMessage()
            ];
        }
    }


}