<?php
/*
 The cond_instances table lists all the conditions seen by the Performance Schema while the server executes.
 A condition is a synchronization mechanism used in the code to signal that a specific event has happened,
 so that a thread waiting for this condition can resume work.
 
 When a thread is waiting for something to happen, the condition name is an indication of what the thread is waiting for,
 but there is no immediate way to tell which other thread, or threads, will cause the condition to happen.
 
 cond_instances表列出了在服务器执行时性能模式所看到的所有条件。
 条件是代码中使用的一种同步机制，用于表示某个特定事件已经发生，
 以便等待此条件的线程能够恢复工作。
 当线程在等待某件事情发生时，条件名表示该线程在等待什么，
 但是没有直接的方法来判断哪个或哪个线程将导致该条件发生。
*/

return [
	//synchronization object instances
	'tableName' => 'cond_instances',
	'tableDesc' => '同步对象实例',
	'fields' => [
		'NAME' => [
			//The instrument name associated with the condition.
			'name' => '连接用户',
			'desc' => '与条件关联的仪器名称***',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//The address in memory of the instrumented condition.
			'name' => '内存地址',
			'desc' => '检测条件在内存中的地址',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		]
	]
];