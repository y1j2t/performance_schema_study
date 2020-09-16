<?php
/**
 * Created by yjt.
 * Date: 2020/9/1
 * Time: 1:41 下午
 */

namespace App\Library\MysqlPerformanceSchema;


use Exception;
use function foo\func;

class DataProcesser
{
    public function test()
    {
        return $this->getAllFile2Arr(true);
    }

    private $mTableSourcePath = null;

    public function __construct()
    {
        $this->mTableSourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'TableSouce' . DIRECTORY_SEPARATOR;
    }

    /**
     * 获取所有表描述文件文件名
     * @param bool $trimExt 是否去掉.php 后缀
     * @return array
     * @throws Exception
     */
    public function getAllFile2Arr($trimExt = false)
    {
        if (!is_dir($this->mTableSourcePath)) {
            throw new Exception('TableSoucePath is not dir');
        }
        $ret = [];
        $handler = opendir($this->mTableSourcePath);
        while (($filename = readdir($handler)) !== false) {
            if ($filename == '.' || $filename == '..')
                continue;
            if ($trimExt) $filename = rtrim($filename, '.php');
            $ret[] = $filename;
        }
        closedir($handler);
        return $ret;
    }

    /**
     * 获取所有表描述信息
     * @return array
     * @throws Exception 表描述文件路径错误
     */
    public function getAllTableDesc()
    {
        $files = $this->getAllFile2Arr();
        $ret = [];
        foreach ($files as $val) {
            try {
                $ret[$val] = $this->includeTableDesc($val);
            } catch (Exception $exception) {
                $ret[$val] = 'Exception:' . $exception->getMessage();
            }
        }
        return $ret;
    }

    /**
     * 返回表描述信息
     * @param $tablename
     * @return mixed
     * @throws Exception
     */
    public function includeTableDesc($tablename)
    {
        $tablename = $this->mTableSourcePath . $tablename;
        if (!is_file($tablename)) {
            throw new Exception("$tablename is not exists");
        }
        return require_once $tablename;
    }

    /**
     * 获取表描述文件路径
     * @return string|null
     */
    public function getTableSoucePath()
    {
        return $this->mTableSourcePath;
    }

    /**
     * 把这些表分组
     * @param $tablelist
     * @return array
     */
    public function groupByTablePrefix($tablelist)
    {
        $groups = $this->tableGroup();
        foreach ($groups as $key => $val) {
            foreach ($tablelist as $k => $v) {
                if (substr($k, 0, strlen($key)) == $key) {
                    $groups[$key]['tables'][$k] = $v;
                    unset($tablelist[$k]);
                }
            }
        }
        ksort($tablelist);
        $groups['others']['desc'] = '';
        $groups['others']['tables'] = $tablelist;
        return $groups;
    }

    private function tableGroup()
    {
        return [
            'table_' => ['desc' => '表相关', 'tables' => []],
            'status_' => ['desc' => '状态相关', 'tables' => []],
            'user_' => ['desc' => '用户相关', 'tables' => []],
            'variables_' => ['desc' => '变量相关', 'tables' => []],
            'socket_' => ['desc' => '套接字相关', 'tables' => []],
            'setup_' => ['desc' => '动态配置表', 'tables' => []],
            'replication_' => ['desc' => '复制信息相关', 'tables' => []],
            'session_' => ['desc' => '会话相关表', 'tables' => []],
            'memory_' => ['desc' => '监视内存使用的表', 'tables' => []],
            'file_' => ['desc' => '监视文件系统层调用的表', 'tables' => []],
            'events_errors_' => ['desc' => '错误信息统计表', 'tables' => []],
            'events_stages_' => ['desc' => '阶段事件统计表', 'tables' => []],
            'events_statements_' => ['desc' => '语句事件统计表', 'tables' => []],
            'events_transactions_' => ['desc' => '事务事件统计表', 'tables' => []],
            'events_waits_' => ['desc' => '等待事件统计表', 'tables' => []],
            'tp_' => ['desc' => '线程池相关表', 'tables' => []],
            'global_' => ['desc' => '全局状态信息', 'tables' => []]
        ];
    }
}
