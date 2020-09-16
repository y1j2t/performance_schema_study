<?php
/*
The rwlock_instances table lists all the rwlock (read write lock) instances seen by the Performance Schema while the server executes.
An rwlock is a synchronization mechanism used in the code to enforce that threads at a given time can have access to some common resource following certain rules.
The resource is said to be “protected” by the rwlock. The access is either shared (many threads can have a read lock at the same time), exclusive (only one thread can have a write lock at a given time),
or shared-exclusive (a thread can have a write lock while permitting inconsistent reads by other threads).
Shared-exclusive access is otherwise known as an sxlock and optimizes concurrency and improves scalability for read-write workloads.

Depending on how many threads are requesting a lock, and the nature of the locks requested, access can be either granted in shared mode, exclusive mode, shared-exclusive mode or not granted at all,
waiting for other threads to finish first.

rwlock_instances表列出了在服务器执行时性能模式所看到的所有rwlock(读/写锁)实例。rwlock是代码中使用的一种同步机制，用于强制线程在给定时间能够访问某些遵循特定规则的公共资源。
该资源据说被rwlock“保护”。访问要么是共享的(许多线程可以同时拥有一个读锁)，要么是独占的(在给定的时间内只有一个线程可以拥有一个写锁)，要么是共享独占的(一个线程可以拥有一个写锁，
同时允许其他线程不一致的读)。共享独占访问也称为sxlock，它优化了并发性，提高了读写工作负载的可伸缩性。

根据请求锁的线程数量以及所请求的锁的性质，可以在共享模式、独占模式、共享独占模式下授予访问权限，也可以完全不授予访问权限，等待其他线程首先完成。
*/

return [
	//Lock synchronization object instances
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-rwlock-instances-table.html
	'tableName' => 'rwlock_instances',
	'tableDesc' => '锁定同步对象实例',
	'fields' => [
		'NAME' => [
			//The instrument name associated with the lock.
			'name' => '生产者',
			'desc' => '与锁相关的生产者名称',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'OBJECT_INSTANCE_BEGIN' => [
			//The address in memory of the instrumented lock.
			'name' => '生产者锁的内存地址',
			'desc' => '生产者锁的内存地址。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'WRITE_LOCKED_BY_THREAD_ID' => [
			//When a thread currently has an rwlock locked in exclusive (write) mode, WRITE_LOCKED_BY_THREAD_ID is the THREAD_ID of the locking thread, otherwise it is NULL.
			'name' => '锁定线程的THREAD_ID或NULL',
			'desc' => '当一个线程当前在exclusive (write)模式下锁定了rwlock时，WRITE_LOCKED_BY_THREAD_ID是锁定线程的THREAD_ID，否则为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'READ_LOCKED_BY_COUNT' => [
			//When a thread currently has an rwlock locked in shared (read) mode, READ_LOCKED_BY_COUNT is incremented by 1. This is a counter only, so it cannot be used directly to find which thread holds a read lock,
			//but it can be used to see whether there is a read contention on an rwlock, and see how many readers are currently active.
			'name' => '合计多少线程在共享读模式下锁定了rwlock',
			'desc' => '当线程当前在共享(读)模式下锁定了rwlock时，READ_LOCKED_BY_COUNT将增加1。这只是一个计数器，因此不能直接使用它来查找哪个线程持有读锁，但可以使用它来查看rwlock上是否存在读争用，以及当前有多少读取器处于活动状态。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];
