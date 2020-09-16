<?php
/*

*/

return [
	//	Instrumented thread names and attributes
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-setup-threads-table.html
	'tableName' => 'setup_threads',
	'tableDesc' => '检测的线程名称和属性',
	'fields' => [
		'NAME' => [
			//The instrument name. Thread instruments begin with thread (for example, thread/sql/parser_service or thread/performance_schema/setup).
			'name' => '生产者',
			'desc' => '生产者名称。线程工具从线程开始(例如，Thread /sql/parser_service或Thread /performance_schema/setup)。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ENABLED' => [
			//Whether the instrument is enabled. The value is YES or NO. This column can be modified, although setting ENABLED has no effect for threads that are already running.
			//For background threads, setting the ENABLED value controls whether INSTRUMENTED is set to YES or NO for threads that are subsequently created for this instrument and listed in the threads table. 
			//For foreground threads, this column has no effect; the setup_actors table takes precedence.
			'name' => '生产者是否开启',
			'desc' => '生产者是否开启。值是YES或NO。可以修改此列，不过启用设置对已经运行的线程没有影响。对于后台线程，设置ENABLED值可以控制将随后为此生产者创建的线程设置为YES还是NO，并将这些线程列在threads表中。对于前台线程，此列不起作用;setup_actors表优先。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'HISTORY' => [
			//Whether to log historical events for the instrument. The value is YES or NO. This column can be modified, although setting HISTORY has no effect for threads that are already running.
			//For background threads, setting the HISTORY value controls whether HISTORY is set to YES or NO for threads that are subsequently created for this instrument and listed in the threads table. 
			//For foreground threads, this column has no effect; the setup_actors table takes precedence.
			'name' => '是否记录生产者的历史事件',
			'desc' => '是否记录仪器的历史事件。值是YES或NO。可以修改此列，不过设置历史记录对已经运行的线程没有影响。对于后台线程，设置HISTORY值可以控制后续为该生产者创建并在threads表中列出的线程的HISTORY设置为YES还是NO。对于前台线程，此列不起作用;setup_actors表优先。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROPERTIES' => [
			//The instrument properties. This column uses the SET data type, so multiple flags from the following list can be set per instrument:
			//singleton: The instrument has a single instance. For example, there is only one thread for the thread/sql/main instrument.
			//user: The instrument is directly related to user workload (as opposed to system workload). For example, threads such as thread/sql/one_connection executing a user session have the user property to differentiate them from system threads.
			'name' => '生产者性能',
			'desc' => '生产者性能。这一列使用了SET数据类型，因此可以为每个生产者设置以下列表中的多个标志:单例:该乐器只有一个实例。例如，线程/sql/主生产者只有一个线程。用户:生产者与用户工作负载(与系统工作负载相反)直接相关。例如，执行用户会话的线程(如thread/sql/one_connection)具有user属性，以区别于系统线程。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VOLATILITY' => [
			//The instrument volatility. This column has the same meaning as in the setup_instruments table. See Section 26.12.2.3, “The setup_instruments Table”.
			'name' => '生产者波动',
			'desc' => '生产者波动。此列与setup_instruments表中的含义相同。见第26.12.2.3节“setup_instruments表”。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DOCUMENTATION' => [
			//A string describing the instrument purpose. The value is NULL if no description is available.
			'name' => '描述生产者用途的字符串',
			'desc' => '描述生产者用途的字符串。如果没有可用的描述，则该值为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];