<?php
/*
This table shows the configuration parameters that affect transactions applied by the replica. Parameters stored in the table can be changed at runtime with the CHANGE MASTER TO statement, as indicated in the column descriptions.

此表显示影响副本应用的事务的配置参数。如列描述中所示，可以在运行时使用CHANGE MASTER TO语句更改表中存储的参数。
*/

return [
	//Configuration parameters for the replication applier on the replica
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-replication-applier-configuration-table.html
	'tableName' => 'replication_applier_configuration',
	'tableDesc' => '副本上复制应用程序的配置参数',
	'fields' => [
		'CHANNEL_NAME' => [
			//The replication channel which this row is displaying. There is always a default replication channel, and more replication channels can be added. See Section 17.2.2, “Replication Channels” for more information.
			'name' => '复制通道',
			'desc' => '该行所显示的复制通道。始终存在一个默认复制通道，可以添加更多复制通道。更多信息请参见17.2.2节“复制通道”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-channels.html',
			'link' => '',
			'linkDesc' => ''
		],
		'DESIRED_DELAY' => [
			//The number of seconds that the replica must lag the source. (CHANGE MASTER TO option: MASTER_DELAY) See Section 17.4.10, “Delayed Replication” for more information.
			'name' => '副本必须滞后于源的秒数',
			'desc' => '副本必须滞后于源的秒数。 （CHANGE MASTER TO选项：MASTER_DELAY）有关更多信息，请参见第17.7.4.10节“延迟复制”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-delayed.html',
			'link' => '',
			'linkDesc' => ''
		],
		'PRIVILEGE_CHECKS_USER' => [
			//The user account that provides the security context for the channel (CHANGE MASTER TO option: PRIVILEGE_CHECKS_USER). This is escaped so that it can be copied into a SQL statement to execute individual transactions. 
			//See Section 17.3.3, “Replication Privilege Checks” for more information.
			'name' => '提供通道安全性上下文的用户帐户',
			'desc' => '提供通道安全性上下文的用户帐户（CHANGE MASTER TO选项：PRIVILEGE_CHECKS_USER）。对此进行了转义，以便可以将其复制到SQL语句中以执行单个事务。有关更多信息，请参见第17.3.3节“复制特权检查”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-privilege-checks.html',
			'link' => '',
			'linkDesc' => ''
		],
		'REQUIRE_ROW_FORMAT' => [
			//Whether the channel accepts only row-based events (CHANGE MASTER TO option: REQUIRE_ROW_FORMAT). See Section 17.3.3, “Replication Privilege Checks” for more information.
			'name' => '通道是否仅接受基于行的事件',
			'desc' => '通道是否仅接受基于行的事件（CHANGE MASTER TO选项：REQUIRE_ROW_FORMAT）。有关更多信息，请参见第17.3.3节“复制特权检查”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-privilege-checks.html',
			'link' => '',
			'linkDesc' => ''
		],
		'REQUIRE_TABLE_PRIMARY_KEY_CHECK' => [
			//Whether the channel requires primary keys always, never, or according to the source's setting (CHANGE MASTER TO option: REQUIRE_TABLE_PRIMARY_KEY_CHECK). See Section 17.3.3, “Replication Privilege Checks” for more information.
			'name' => '通道是否总是需要主键',
			'desc' => '通道是否总是需要主键，从不需要主键，或者根据源的设置(将MASTER更改为选项:REQUIRE_TABLE_PRIMARY_KEY_CHECK)。更多信息请参见17.3.3节“复制特权检查”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/replication-privilege-checks.html',
			'link' => '',
			'linkDesc' => ''
		],
	]
];