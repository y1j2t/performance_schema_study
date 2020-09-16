<?php
/*
Each instrument added to the source code provides a row for the setup_instruments table, even when the instrumented code is not executed. When an instrument is enabled and executed, 
instrumented instances are created, which are visible in the xxx_instances tables, such as file_instances or rwlock_instances.

Modifications to most setup_instruments rows affect monitoring immediately. For some instruments, modifications are effective only at server startup; changing them at runtime has no effect. 
This affects primarily mutexes, conditions, and rwlocks in the server, although there may be other instruments for which this is true.

添加到源代码中的每个工具都为setup_instruments表提供一行，即使没有执行检测的代码。当一个工具被启用和执行时，会创建被检测的实例，这些实例在xxx_instances表中可见，比如file_instances或rwlock_instances。

修改大多数setup_instruments行会立即影响监视。对于某些仪器，修改仅在服务器启动时有效;在运行时更改它们没有任何效果。这主要影响服务器中的互斥锁、条件和rwlock，尽管可能对其他工具也存在这种情况。
*/

return [
	//Classes of instrumented objects for which events can be collected
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-setup-instruments-table.html
	'tableName' => 'setup_instruments',
	'tableDesc' => '可以为其收集事件的检测对象的类别',
	'fields' => [
		'NAME' => [
			//The instrument name. Instrument names may have multiple parts and form a hierarchy, as discussed in Section 26.6, “Performance Schema Instrument Naming Conventions”. 
			//Events produced from execution of an instrument have an EVENT_NAME value that is taken from the instrument NAME value. 
			//(Events do not really have a “name,” but this provides a way to associate events with instruments.)
			'name' => '生产者',
			'desc' => '生产者名称。仪表名称可以由多个部分组成，并形成一个层次结构，如26.6节“性能模式乐器命名约定”所讨论的那样。执行工具产生的事件具有一个EVENT_NAME值，该值取自工具名称的值。(事件实际上没有一个“名称”，但是这提供了一种将事件与工具关联的方法。)',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/performance-schema-instrument-naming.html',
			'link' => '',
			'linkDesc' => ''
		],
		'ENABLED' => [
			//Whether the instrument is enabled. The value is YES or NO. A disabled instrument produces no events. This column can be modified, although setting ENABLED has no effect for instruments that have already been created.
			'name' => '生产者是否开启',
			'desc' => '生产者是否开启。值是YES或NO。被禁用的工具不会产生事件。可以修改此列，尽管启用设置对已经创建的工具没有影响。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'TIMED' => [
			//Whether the instrument is timed. The value is YES, NO, or NULL. This column can be modified, although setting TIMED has no effect for instruments that have already been created.
			//A TIMED value of NULL indicates that the instrument does not support timing. For example, memory operations are not timed, so their TIMED column is NULL.
			//Setting TIMED to NULL for an instrument that supports timing has no effect, as does setting TIMED to non-NULL for an instrument that does not support timing.
			//If an enabled instrument is not timed, the instrument code is enabled, but the timer is not. Events produced by the instrument have NULL for the TIMER_START, TIMER_END, and TIMER_WAIT timer values. 
			//This in turn causes those values to be ignored when calculating the sum, minimum, maximum, and average time values in summary tables.
			'name' => '生产者是否定时',
			'desc' => '生产者是否定时。值是YES、NO或NULL。这个列可以修改，但是时间设置对已经创建的工具没有影响。计时值为NULL表示仪器不支持计时。例如，内存操作是不定时的，因此它们的定时列是空的。对于支持定时的仪器，将定时设置为空无效，对于不支持定时的仪器，将定时设置为非空无效。如果启用的仪器未计时，则启用仪器代码，但未启用计时器。仪器产生的事件对于TIMER_START、TIMER_END和TIMER_WAIT计时器值都是空的。这将导致在计算汇总表中的总和、最小、最大和平均时间值时忽略这些值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'PROPERTIES' => [
			//The instrument properties. This column uses the SET data type, so multiple flags from the following list can be set per instrument:
			//global_statistics: The instrument produces only global summaries. Summaries for finer levels are unavailable, such as per thread, account, user, or host. For example, most memory instruments produce only global summaries.
			//mutable: The instrument can “mutate” into a more specific one. This property applies only to statement instruments.
			//progress: The instrument is capable of reporting progress data. This property applies only to stage instruments.
			//singleton: The instrument has a single instance. For example, most global mutex locks in the server are singletons, so the corresponding instruments are as well.
			//user: The instrument is directly related to user workload (as opposed to system workload). One such instrument is wait/io/socket/sql/client_connection.
			'name' => '生产者性能',
			'desc' => '生产者性能。这一列使用了SET数据类型，因此可以为每个仪器设置以下列表中的多个标志:global_statistics:该生产者只生成全球摘要。较细级别的摘要不可用，例如每个线程、帐户、用户或主机。例如，大多数内存工具只生成全局摘要。可变的:工具可以“变异”为一个更具体的。此属性仅适用于报表工具。进展情况:该工具能够报告进展数据。这个特性只适用于生产者。单例:该生产者只有一个实例。例如，服务器中的大多数全局互斥锁都是单例锁，因此相应的生产者也是单例锁。用户:生产者与用户工作负载(与系统工作负载相反)直接相关。其中一个生产者就是wait/io/socket/sql/client_connection。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VOLATILITY' => [
			//The instrument volatility.
			//Instruments with a low volatility index (PERMANENT = 1) are created once at server startup, and never destroyed or re-created during normal server operation. They are destroyed only during server shutdown.
			//For example, the wait/synch/mutex/pfs/LOCK_pfs_share_list mutex is defined with a volatility of 1, which means it is created once. Possible overhead from the instrumentation itself (namely, mutex initialization) has no effect for this instrument then. Runtime overhead occurs only when locking or unlocking the mutex.
			//Instruments with a higher volatility index (for example, SESSION = 5) are created and destroyed for every user session. For example, the wait/synch/mutex/sql/THD::LOCK_query_plan mutex is created each time a session connects, and destroyed when the session disconnects.
			//This mutex is more sensitive to Performance Schema overhead, because overhead comes not only from the lock and unlock instrumentation, but also from mutex create and destroy instrumentation, which is executed more often.
			'name' => '生产者波动率',
			'desc' => '具有低挥发性指数(永久= 1)的生产者在服务器启动时创建一次，在正常的服务器操作期间不会销毁或重新创建。它们只在服务器关闭时被销毁。例如，wait/synch/mutex/pfs/LOCK_pfs_share_list互斥被定义为波动性为1，这意味着它只创建一次。此时，检测本身的开销(即互斥锁初始化)对该检测没有影响。运行时开销只在锁定或解锁互斥锁时发生。为每个用户会话创建和销毁具有更高波动性指数的工具(例如，SESSION = 5)。例如，wait/synch/mutex/sql/THD::LOCK_query_plan互斥锁在每次会话连接时创建，在会话断开时销毁。这个互斥锁对性能模式开销更敏感，因为开销不仅来自锁和解锁插装，还来自创建和销毁插装的互斥锁，后者执行得更频繁。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'DOCUMENTATION' => [
			//A string describing the instrument purpose. The value is NULL if no description is available.
			'name' => '描述生产者用途',
			'desc' => '描述生产者用途的字符串。如果没有可用的描述，则该值为NULL。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];