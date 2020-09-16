<?php
/*


字段意义资料链接
https://mariadb.com/kb/zh-cn/performance-schema-table_lock_waits_summary_by_table-table/
*/

return [
	//Table lock waits per table
	//https://dev.mysql.com/doc/refman/8.0/en/table-waits-summary-tables.html#performance-schema-table-lock-waits-summary-by-table-table
	'tableName' => 'table_lock_waits_summary_by_table',
	'tableDesc' => '根据表汇总的表锁等待事件',
	'fields' => [
		'OBJECT_TYPE' => [
			//Since this table records waits by table, always set to TABLE.
			'name' => '由于此表记录按表等待',
			'desc' => '由于此表记录按表等待，因此始终设置为TABLE。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//Schema name.
			'name' => '概要名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//Table name.
			'name' => '表名',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_STAR' => [
			//Number of summarized events and the sum of the x_READ and x_WRITE columns.
			'name' => '摘要事件的数量',
			'desc' => '摘要事件的数量以及x_READ和x_WRITE列的总和。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WAIT' => [
			//Total wait time of the summarized events that are timed.
			'name' => '汇总事件总等待时间',
			'desc' => '已计时的汇总事件的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WAIT' => [
			//Minimum wait time of the summarized events that are timed.
			'name' => '汇总事件最小等待时间',
			'desc' => '已计时汇总事件的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WAIT' => [
			//Average wait time of the summarized events that are timed.
			'name' => '汇总事件平均等待时间',
			'desc' => '已计时汇总事件的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WAIT' => [
			//Maximum wait time of the summarized events that are timed.
			'name' => '汇总事件最大等待时间',
			'desc' => '已计时的汇总事件的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_READ' => [
			//Number of all read operations, and the sum of the equivalent x_READ_NORMAL, x_READ_WITH_SHARED_LOCKS, x_READ_HIGH_PRIORITY and x_READ_NO_INSERT columns.
			'name' => '读取操作数量',
			'desc' => '所有读取操作的数量，以及等效的x_READ_NORMAL，x_READ_WITH_SHARED_LOCKS，x_READ_HIGH_PRIORITY和x_READ_NO_INSERT列的总和。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ' => [
			//Total wait time of all read operations that are timed.
			'name' => '读取操总等待时间',
			'desc' => '已计时的所有读取操作的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'MIN_TIMER_READ' => [
			//Minimum wait time of all read operations that are timed.
			'name' => '读操作最小等待时间',
			'desc' => '已计时的所有读取操作的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'AVG_TIMER_READ' => [
			//Average wait time of all read operations that are timed.
			'name' => '读操作平均等待时间',
			'desc' => '已计时的所有读取操作的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'MAX_TIMER_READ' => [
			//Maximum wait time of all read operations that are timed.
			'name' => '读操作最大等待时间',
			'desc' => '所有有时间限制的读操作的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ'
		],
		'COUNT_WRITE' => [
			//Number of all write operations, and the sum of the equivalent x_WRITE_ALLOW_WRITE, x_WRITE_CONCURRENT_INSERT, x_WRITE_DELAYED, x_WRITE_LOW_PRIORITY and x_WRITE_NORMAL columns.
			'name' => '写入操作数',
			'desc' => '所有写入操作的数量，以及等效的x_WRITE_ALLOW_WRITE，x_WRITE_CONCURRENT_INSERT，x_WRITE_DELAYED，x_WRITE_LOW_PRIORITY和x_WRITE_NORMAL列的总和。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'SUM_TIMER_WRITE' => [
			//Total wait time of all write operations that are timed.
			'name' => '写操作总等待时间',
			'desc' => '已计时的所有写操作的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'MIN_TIMER_WRITE' => [
			//Minimum wait time of all write operations that are timed.
			'name' => '写操作最小等待时间',
			'desc' => '已计时的所有写操作的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'AVG_TIMER_WRITE' => [
			//Average wait time of all write operations that are timed.
			'name' => '写操作平均等待时间',
			'desc' => '已计时的所有写操作的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'MAX_TIMER_WRITE' => [
			//Maximum wait time of all write operations that are timed.
			'name' => '写操作最大等待时间',
			'desc' => '已计时的所有写操作的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_WRITE'
		],
		'COUNT_READ_NORMAL' => [
			//Number of all internal read normal locks.
			'name' => '内部读普通锁的数目',
			'desc' => '所有内部读普通锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_NORMAL' => [
			//Total wait time of all internal read normal locks that are timed.
			'name' => '内部读普通锁总等待时间',
			'desc' => '已计时的所有内部读取普通锁定的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_NORMAL'
		],
		'MIN_TIMER_READ_NORMAL' => [
			//Minimum wait time of all internal read normal locks that are timed.
			'name' => '内部读普通锁最短等待时间',
			'desc' => '已计时的所有内部读取普通锁定的最短等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_NORMAL'
		],
		'AVG_TIMER_READ_NORMAL' => [
			//Average wait time of all internal read normal locks that are timed.
			'name' => '内部读普通锁平均等待时间',
			'desc' => '所有被计时的内部读普通锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_NORMAL'
		],
		'MAX_TIMER_READ_NORMAL' => [
			//Maximum wait time of all internal read normal locks that are timed.
			'name' => '内部读普通锁的最大等待时间',
			'desc' => '所有有时间限制的内部读普通锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => 'COUNT_READ_NORMAL'
		],
		'COUNT_READ_WITH_SHARED_LOCKS' => [
			//Number of all internal read with shared locks.
			'name' => '内部读取数量',
			'desc' => '使用共享锁的所有内部读取的数量',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_WITH_SHARED_LOCKS' => [
			//Total wait time of all internal read with shared locks that are timed.
			'name' => '内部读取总等待时间',
			'desc' => '共享锁的所有内部读取的总等待时间',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_READ_WITH_SHARED_LOCKS' => [
			//Minimum wait time of all internal read with shared locks that are timed.
			'name' => '内部读取最小等待时间',
			'desc' => '使用定时共享锁的所有内部读取的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_READ_WITH_SHARED_LOCKS' => [
			//Average wait time of all internal read with shared locks that are timed.
			'name' => '内部读取平均等待时间',
			'desc' => '共享锁的所有内部读取的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_READ_WITH_SHARED_LOCKS' => [
			//Maximum wait time of all internal read with shared locks that are timed.
			'name' => '内部读取最大等待时间',
			'desc' => '共享锁的所有内部读取的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_READ_HIGH_PRIORITY' => [
			//Number of all internal read high priority locks.
			'name' => '高优先级锁数目',
			'desc' => '所有内部读高优先级锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_HIGH_PRIORITY' => [
			//Total wait time of all internal read high priority locks that are timed.
			'name' => '高优先级锁总等待时间',
			'desc' => '所有被计时的内部读高优先级锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_READ_HIGH_PRIORITY' => [
			//Minimum wait time of all internal read high priority locks that are timed.
			'name' => '高优先级锁最短等待时间',
			'desc' => '最小等待时间的所有内部读高优先级锁是有时间的。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_READ_HIGH_PRIORITY' => [
			//Average wait time of all internal read high priority locks that are timed.
			'name' => '高优先级锁平均等待时间',
			'desc' => '所有被定时的内部读高优先级锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_READ_HIGH_PRIORITY' => [
			//Maximum wait time of all internal read high priority locks that are timed.
			'name' => '高优先级锁最大等待时间',
			'desc' => '所有被定时的内部读高优先级锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_READ_NO_INSERT' => [
			//Number of all internal read no insert locks.
			'name' => '无插入锁数量',
			'desc' => '所有内部读无插入锁的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_NO_INSERT' => [
			//Total wait time of all internal read no insert locks that are timed.
			'name' => '无插入锁总等待时间',
			'desc' => '计时的所有内部读无插入锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_READ_NO_INSERT' => [
			//Minimum wait time of all internal read no insert locks that are timed.
			'name' => '无插入锁最短等待时间',
			'desc' => '所有内部定时无插入锁的最短等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_READ_NO_INSERT' => [
			//Average wait time of all internal read no insert locks that are timed.
			'name' => '无插入锁平均等待时间',
			'desc' => '所有定时的内部读无插入锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_READ_NO_INSERT' => [
			//Maximum wait time of all internal read no insert locks that are timed.
			'name' => '无插入锁最大等待时间',
			'desc' => '所有定时的内部读无插入锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_READ_EXTERNAL' => [
			//Number of all external read locks.
			'name' => '外部读锁数目',
			'desc' => '所有外部读锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_READ_EXTERNAL' => [
			//Total wait time of all external read locks that are timed.
			'name' => '外部读锁总等待时间',
			'desc' => '计时的所有外部读锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_READ_EXTERNAL' => [
			//Minimum wait time of all external read locks that are timed.
			'name' => '外部读锁最小等待时间',
			'desc' => '所有计时的外部读锁的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_READ_EXTERNAL' => [
			//Average wait time of all external read locks that are timed.
			'name' => '外部读锁平均等待时间',
			'desc' => '所有计时的外部读锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_READ_EXTERNAL' => [
			//Maximum wait time of all external read locks that are timed.
			'name' => '外部读锁最大等待时间',
			'desc' => '所有计时的外部读锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_WRITE_ALLOW_WRITE' => [
			//Number of all internal read normal locks.
			'name' => '普通锁的数目',
			'desc' => '所有内部读普通锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WRITE_ALLOW_WRITE' => [
			//Total wait time of all internal write allow write locks that are timed.
			'name' => '内部写锁的等待时间',
			'desc' => '所有内部写锁的等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WRITE_ALLOW_WRITE' => [
			//Minimum wait time of all internal write allow write locks that are timed.
			'name' => '内部写锁最短等待时间',
			'desc' => '已计时的所有内部写锁的最短等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WRITE_ALLOW_WRITE' => [
			//Average wait time of all internal write allow write locks that are timed.
			'name' => '内部写锁平均等待时间',
			'desc' => '所有内部写锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WRITE_ALLOW_WRITE' => [
			//Maximum wait time of all internal write allow write locks that are timed.
			'name' => '内部写锁定最大等待时间',
			'desc' => '已计时的所有内部写锁定的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_WRITE_CONCURRENT_INSERT' => [
			//Number of all internal concurrent insert write locks.
			'name' => '内部并发插入写锁数目',
			'desc' => '所有内部并发插入写锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WRITE_CONCURRENT_INSERT' => [
			//Total wait time of all internal concurrent insert write locks that are timed.
			'name' => '并发插入写锁总等待时间',
			'desc' => '计时的所有内部并发插入写锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WRITE_CONCURRENT_INSERT' => [
			//Minimum wait time of all internal concurrent insert write locks that are timed.
			'name' => '并发插入写锁最小等待时间',
			'desc' => '所有内部并发插入写入锁的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WRITE_CONCURRENT_INSERT' => [
			//Average wait time of all internal concurrent insert write locks that are timed.
			'name' => '并发插入写锁平均等待时间',
			'desc' => '计时的所有内部并发插入写锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WRITE_CONCURRENT_INSERT' => [
			//Maximum wait time of all internal concurrent insert write locks that are timed.
			'name' => '并发插入写锁最大等待时间',
			'desc' => '计时的所有内部并发插入写锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_WRITE_LOW_PRIORITY' => [
			//Number of all internal write low priority locks.
			'name' => '内部写低优先级锁数目',
			'desc' => '所有内部写低优先级锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WRITE_LOW_PRIORITY' => [
			//Total wait time of all internal write low priority locks that are timed.
			'name' => '低优先级锁总等待时间',
			'desc' => '所有被计时的内部写低优先级锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WRITE_LOW_PRIORITY' => [
			//Minimum wait time of all internal write low priority locks that are timed.
			'name' => '低优先级锁最小等待时间',
			'desc' => '所有被定时的内部写低优先级锁的最小等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WRITE_LOW_PRIORITY' => [
			//Average wait time of all internal write low priority locks that are timed.
			'name' => '低优先级锁平均等待时间',
			'desc' => '所有被定时的内部写低优先级锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WRITE_LOW_PRIORITY' => [
			//Maximum wait time of all internal write low priority locks that are timed.
			'name' => '低优先级锁最大等待时间',
			'desc' => '所有被定时的内部写低优先级锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_WRITE_NORMAL' => [
			//Number of all internal write normal locks.
			'name' => '内部写普通锁的数量',
			'desc' => '所有内部写普通锁的数量。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WRITE_NORMAL' => [
			//Total wait time of all internal write normal locks that are timed.
			'name' => '内部写入普通锁总等待时间',
			'desc' => '所有内部写入正常锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WRITE_NORMAL' => [
			//Minimum wait time of all internal write normal locks that are timed.
			'name' => '普通锁最短等待时间',
			'desc' => '已计时的所有内部写普通锁的最短等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WRITE_NORMAL' => [
			//Average wait time of all internal write normal locks that are timed.
			'name' => '普通锁平均等待时间',
			'desc' => '已定时的所有内部写普通锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WRITE_NORMAL' => [
			//Maximum wait time of all internal write normal locks that are timed.
			'name' => '普通锁最大等待时间',
			'desc' => '已计时的所有内部写普通锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_WRITE_EXTERNAL' => [
			//Number of all external write locks.
			'name' => '外部写锁数目',
			'desc' => '所有外部写锁的数目。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'SUM_TIMER_WRITE_EXTERNAL' => [
			//Total wait time of all external write locks that are timed.
			'name' => '外部写锁总等待时间',
			'desc' => '所有计时的外部写锁的总等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MIN_TIMER_WRITE_EXTERNAL' => [
			//Minimum wait time of all external write locks that are timed.
			'name' => '写锁最短等待时间',
			'desc' => '所有计时外部写锁的最短等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'AVG_TIMER_WRITE_EXTERNAL' => [
			//Average wait time of all external write locks that are timed.
			'name' => '写锁平均等待时间',
			'desc' => '所有计时的外部写锁的平均等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'MAX_TIMER_WRITE_EXTERNAL' => [
			//Maximum wait time of all external write locks that are timed.
			'name' => '写锁最大等待时间',
			'desc' => '所有计时的外部写锁的最大等待时间。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];