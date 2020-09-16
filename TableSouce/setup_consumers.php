<?php
/*
The consumer settings in the setup_consumers table form a hierarchy from higher levels to lower. For detailed information about the effect of enabling different consumers, see Section 26.4.7, “Pre-Filtering by Consumer”.

Modifications to the setup_consumers table affect monitoring immediately.

setup_consumer表中的使用者设置形成了一个从高到低的层次结构。有关启用不同使用者的效果的详细信息，请参阅26.4.7节“由使用者预先过滤”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-consumer-filtering.html

对setup_consumer表的修改会立即影响监视。
*/

return [
	//Consumers for which event information can be stored
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-setup-consumers-table.html
	'tableName' => 'setup_consumers',
	'tableDesc' => '可以为其存储事件信息的消费者',
	'fields' => [
		'NAME' => [
			//The consumer name.
			'name' => '消费者',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ENABLED' => [
			//Whether the consumer is enabled. The value is YES or NO. This column can be modified. If you disable a consumer, the server does not spend time adding event information to it.
			'name' => '消费者是否已启用',
			'desc' => '消费者是否已启用。值是YES或NO。可以修改此列。如果禁用一个消费者，服务器就不会花时间向其添加事件信息。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];