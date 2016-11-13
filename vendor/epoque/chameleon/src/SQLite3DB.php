<?php
namespace Epoque\Chameleon;


/**
 * Description of SQLite3DB
 *
 * @author Jason Favrod jason@lakonacomputers.com
 */

class SQLite3DB
{
    protected $db;
    protected $conn;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function select($query) {
        $conn = new \SQLite3($this->db);
        $queryResult = $conn->query($query);
        $result = [];

        if ($queryResult) {
            while ($row = $queryResult->fetchArray(SQLITE3_ASSOC)) {
                $tmp = [];
                foreach ($row as $attrib => $value) {
                    $tmp[$attrib] = $value;
                }
                array_push($result, $tmp);
            }
        }

        $conn->close();
        return $result;
    }


    public function insert($query) {
        $conn        = new \SQLite3($this->db);
        $queryResult = $conn->query($query)->numColumns();

        $conn->close();

        return $queryResult;
    }
}
