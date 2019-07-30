<?php
namespace core\lib;
class Model extends \PDO
{
    public function __construct()
    {
        $dns = 'mysql:host=localhost;dbname=user';
        $userName = 'root';
        $passwd = '111';
        try{
            parent::__construct($dns, $userName, $passwd);
        }
        //catch(PDOException $e)
        catch(Exception $e)
        {
            var_dump(8888,$e);exit;
        }
        parent::__construct($dns, $userName, $passwd);
    }
}
