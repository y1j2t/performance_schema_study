<?php
/*
The setup_objects table controls whether the Performance Schema monitors particular objects. This table has a maximum size of 100 rows by default. 
To change the table size, modify the performance_schema_setup_objects_size system variable at server startup.

setup_objects表控制性能模式是否监视特定对象。默认情况下，该表的最大大小为100行。要更改表大小，请在服务器启动时修改performance_schema_setup_objects_size系统变量。
*/

return [
	//Which objects should be monitored
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-setup-objects-table.html
	'tableName' => 'setup_objects',
	'tableDesc' => '应该监视哪些对象',
	'fields' => [
		'OBJECT_TYPE' => [
			//The type of object to instrument. The value is one of 'EVENT' (Event Scheduler event), 'FUNCTION' (stored function), 'PROCEDURE' (stored procedure), 'TABLE' (base table), or 'TRIGGER' (trigger).
			//TABLE filtering affects table I/O events (wait/io/table/sql/handler instrument) and table lock events (wait/lock/table/sql/handler instrument).
			'name' => '要测量的对象的类型',
			'desc' => '要测量的对象的类型。该值是“ EVENT”（事件调度程序事件），“ FUNCTION”（存储函数），“ PROCEDURE”（存储过程），“ TABLE”（基本表）或“ TRIGGER”（触发）之一。 表过滤会影响表I / O事件（wait / io / table / sql / handler工具）和表锁定事件（wait / lock / table / sql / handler工具）。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_SCHEMA' => [
			//The schema that contains the object. This should be a literal name, or '%' to mean “any schema.”
			'name' => '包含对象的架构',
			'desc' => '包含对象的架构。这应该是一个字面名称，或者“%”表示“任何模式”。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_NAME' => [
			//The name of the instrumented object. This should be a literal name, or '%' to mean “any object.”
			'name' => '被检测对象的名称',
			'desc' => '被检测对象的名称。这应该是一个字面名称，或者“%”表示“任何对象”。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ENABLED' => [
			//Whether events for the object are instrumented. The value is YES or NO. This column can be modified.
			'name' => '对象的事件是否被检测',
			'desc' => '对象的事件是否被检测。值是YES或NO。可以修改此列。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMED' => [
			//Whether events for the object are timed. This column can be modified.
			'name' => '对象的事件是否计时',
			'desc' => '对象的事件是否计时。可以修改此列。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];