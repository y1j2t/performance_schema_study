<?php
/*
This table shows the current general transaction execution status on the replica. The table provides information about general aspects of transaction applier status that are not specific to any thread involved. 
Thread-specific status information is available in the replication_applier_status_by_coordinator table (and replication_applier_status_by_worker if the replica is multithreaded).

此表显示副本上当前的一般事务执行状态。该表提供了有关事务应用程序状态的一般方面的信息，这些信息并不特定于任何涉及的线程。特定于线程的状态信息在replication_applier_status_by_coordinator表中可用(如果副本是多线程的，
则可以使用replication_applier_status_by_worker)。
*/

return [
	//Current status of the replication applier on the replica
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-replication-applier-status-table.html
	'tableName' => 'replication_applier_status',
	'tableDesc' => '副本上的复制应用程序的当前状态',
	'fields' => [
		'CHANNEL_NAME' => [
			//The replication channel which this row is displaying. There is always a default replication channel, and more replication channels can be added. See Section 17.2.2, “Replication Channels” for more information.
			'name' => '复制通道',
			'desc' => '该行所显示的复制通道。始终存在一个默认复制通道，可以添加更多复制通道。更多信息请参见17.2.2节“复制通道”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-channels.html',
			'link' => '',
			'linkDesc' => ''
		],
		'SERVICE_STATE' => [
			//Shows ON when the replication channel's applier threads are active or idle, OFF means that the applier threads are not active.
			'name' => '应用程序线程状态',
			'desc' => '当复制通道的应用程序线程处于活动状态或空闲状态时显示为ON, OFF表示应用程序线程不处于活动状态。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'REMAINING_DELAY' => [
			//If the replica is waiting for DESIRED_DELAY seconds to pass since the source applied a transaction, this field contains the number of delay seconds remaining. At other times, this field is NULL. 
			//(The DESIRED_DELAY value is stored in the replication_applier_configuration table.) See Section 17.4.10, “Delayed Replication” for more information.
			'name' => '剩余的延迟秒数',
			'desc' => '如果副本正在等待DESIRED_DELAY秒数，因为源应用了一个事务，这个字段包含剩余的延迟秒数。在其他时候，这个字段是空的。(DESIRED_DELAY值存储在replication_applier_configuration表中。)更多信息请参见17.4.10节“延迟复制”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-delayed.html',
			'link' => '',
			'linkDesc' => ''
		],
		'COUNT_TRANSACTIONS_RETRIES' => [
			//Shows the number of retries that were made because the replication SQL thread failed to apply a transaction. The maximum number of retries for a given transaction is set by the slave_transaction_retries system variable. 
			//The replication_applier_status_by_worker table shows detailed information on transaction retries for a single-threaded or multithreaded replica.
			'name' => '复制SQL线程应用事务失败而进行的重试次数',
			'desc' => '显示由于复制SQL线程应用事务失败而进行的重试次数。给定事务的最大重试次数由slave_transaction_retries系统变量设置。replication_applier_status_by_worker表显示了关于单线程或多线程副本的事务重试的详细信息。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];