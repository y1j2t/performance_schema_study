<?php
/*
The mutex_instances table lists all the mutexes seen by the Performance Schema while the server executes. A mutex is a synchronization mechanism used in the code to enforce that only one thread at a given time can have access to some common resource. 
The resource is said to be “protected” by the mutex.

When two threads executing in the server (for example, two user sessions executing a query simultaneously) do need to access the same resource (a file, a buffer, 
or some piece of data), these two threads will compete against each other, so that the first query to obtain a lock on the mutex will cause the other query to wait until the first is done and unlocks the mutex.

The work performed while holding a mutex is said to be in a “critical section,” and multiple queries do execute this critical section in a serialized way (one at a time), which is a potential bottleneck.

mutex_instances表列出了在服务器执行时性能模式所看到的所有互斥锁。互斥锁是代码中使用的一种同步机制，用于强制在给定时间只有一个线程可以访问某些公共资源。资源被互斥锁“保护”。

当两个线程执行的服务器(例如,两个用户会话执行一个查询同时)需要访问相同的资源(文件、一个缓冲区或一些数据),这两个线程将相互竞争,因此,第一个查询来获取锁定互斥对象将导致其他查询等到第一完成解锁互斥量。

持有互斥锁时所执行的工作被称为处于“临界区”，多个查询确实以序列化的方式(一次一个)执行这个临界区，这是一个潜在的瓶颈。
*/

return [
	//Mutex synchronization object instances
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-mutex-instances-table.html
	'tableName' => 'mutex_instances',
	'tableDesc' => '互斥锁同步对象实例',
	'fields' => [
		'NAME' => [
			//The instrument name associated with the mutex.
			'name' => '与互斥相关联的生产者名称',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//The address in memory of the instrumented mutex.
			'name' => '已检测互斥锁在内存中的地址',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'LOCKED_BY_THREAD_ID' => [
			//When a thread currently has a mutex locked, LOCKED_BY_THREAD_ID is the THREAD_ID of the locking thread, otherwise it is NULL.
			'name' => '锁定线程的THREAD_ID或NULL',
			'desc' => '当一个线程当前有一个互斥锁被锁定时，LOCKED_BY_THREAD_ID是锁定线程的THREAD_ID，否则为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];