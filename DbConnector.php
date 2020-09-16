<?php
/**
 * Created by yjt.
 * Date: 2020/9/3
 * Time: 8:45 下午
 */

namespace App\Library\MysqlPerformanceSchema;


class DbConnector
{
    private $mConn = null;
    private $mWhereArr = [];
    private $mDbConfig = [
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => '123456',
        'database' => 'performance_schema',
        'port' => '3306',
        'charset' => 'utf8',
    ];

    public function __construct()
    {
        $this->connect(
            $this->mDbConfig['host'],
            $this->mDbConfig['user'],
            $this->mDbConfig['password'],
            $this->mDbConfig['database'],
            $this->mDbConfig['port']
        );
        $this->setCharset($this->mDbConfig['charset']);
    }

    public function connect($host, $user, $password, $database = 'performance_schema', $port = 3306)
    {
        $conn = mysqli_connect($host, $user, $password, $database, $port);
        if (!$conn) {
            throw new \Exception($database . ' db connection fail');
        }
        $this->mConn = $conn;
        return $conn;
    }

    public function setCharset($charset = 'utf8')
    {
        mysqli_set_charset($this->mConn, $charset);
    }

    public function query($sql, $resultmode = MYSQLI_STORE_RESULT)
    {
        return mysqli_query($this->mConn, $sql, $resultmode);
    }

    /**
     * 以关联数组方式返回
     * @param $result
     * @return array
     */
    public function fetchAssoc($result)
    {
        $ret = [];
        while ($row = $result->fetch_assoc()) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     * 以关联数组和数字索引方式返回
     * @param $result
     * @return array
     */
    public function fetchArray($result)
    {
        $ret = [];
        while ($row = $result->fetch_array()) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     * 以对象方式返回
     * @param $result
     * @return array
     */
    public function fetchObject($result)
    {
        $ret = [];
        while ($row = $result->fetch_object()) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     *以枚举数组方式返回
     * @param $result
     * @return array
     */
    public function fetchRow($result)
    {
        $ret = [];
        while ($row = $result->fetch_row()) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     * 以对象方式返回结果集中字段的元数据
     * @param $result
     * @return array
     */
    public function fetchFieldDirect($result)
    {
        $ret = [];
        while ($row = $result->fetch_field_direct()) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     * 以对象方式返回列信息
     * @param $result
     * @return array
     */
    public function fetchField($result)
    {
        $ret = [];
        while ($row = $result->fetch_field()) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     * 以对象数组返回代表结果集中的列信息
     * @param $result
     * @return array
     */
    public function fetchFields($result)
    {
        $ret = [];
        while ($row = $result->fetch_fields()) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryAndFetchAssoc($sql)
    {
        $res = $this->query($sql);
        if (!$res) {
            return [];
        }
        return $this->fetchAssoc($res);
    }

    public function where($field, $value, $cond = '=', $orAnd = 'AND')
    {
        $orAnd = strtoupper($orAnd);
        $this->mWhereArr[] = [$field, $value, $cond, $orAnd];
        return $this;
    }

    public function getTableDataAndPagination($tableName, array $fields, $rows, $offset, $checkTableExists = true)
    {
        if ($checkTableExists && !$this->checkTableExists($tableName)) {
            return [[], 0];
        }
        $sql = 'SELECT ';
        $sql .= $this->buildFields($fields);
        $sql .= ' FROM ' . $tableName;
        $where = $this->buildWhere();
        if ($where) {
            $sql .= ' WHERE ' . $this->buildWhere();
        }
        $sql .= " LIMIT {$offset},{$rows}";
        return [$this->queryAndFetchAssoc($sql), $this->getRowCount($tableName, $where)];
    }

    public function getRowCount($tableName, $where = '')
    {
        $sql = "SELECT count(*) as my_count FROM `{$tableName}` ";
        if ($where) {
            $sql .= $where;
        }
        $count = $this->queryAndFetchAssoc($sql);
        if ($count) {
            return $count[0]['my_count'] ?: 0;
        }
        return 0;
    }

    public function buildFields(array $fields)
    {
        $str = '';
        if ($fields) {
            foreach ($fields as $val) {
                $str .= "`$val`,";
            }
        }
        if (empty($str)) return '*';
        return rtrim($str, ',');
    }

    public function buildWhere()
    {
        $ret = '';
        $first = true;
        if ($this->mWhereArr) {
            foreach ($this->mWhereArr as $val) {
                if ($first) {
                    $ret .= " {$val[0]} {$val[2]} {$val[1]} ";
                }
                $ret .= " {$val[3]} {$val[0]} {$val[2]} {$val[1]} ";
                $first = false;
            }
            $ret = ltrim($ret, 'AND');
            $ret = ltrim($ret, 'OR');
        }
        return $ret;
    }

    /**
     * 检查表是否存在
     * @param $tableName
     * @return bool
     */
    public function checkTableExists($tableName)
    {
        if ($this->queryAndFetchAssoc("SELECT table_name FROM information_schema.TABLES WHERE table_name='{$tableName}'")) {
            return true;
        }
        return false;
    }



//    public function sqlGetFieldComment($tableName, $field)
//    {
//        return "SELECT COLUMN_NAME,DATA_TYPE,COLUMN_COMMENT FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '{$tableName}' AND column_name='{$field}' AND table_schemd='{$this->mDbConfig['database']}'";
//    }
}
