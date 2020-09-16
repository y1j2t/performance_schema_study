<?php
/*
Connection interface TLS properties are set at server startup, and can be updated at runtime using the ALTER INSTANCE RELOAD TLS statement. See Server-Side Runtime Configuration and Monitoring for Encrypted Connections.
连接接口TLS属性是在服务器启动时设置的，可以在运行时使用ALTER实例RELOAD TLS语句进行更新。有关加密连接，请参阅服务器端运行时配置和监视。
https://dev.mysql.com/doc/refman/8.0/en/using-encrypted-connections.html#using-encrypted-connections-server-side-runtime-configuration
*/

return [
	//TLS status for each connection interface
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-tls-channel-status-table.html
	'tableName' => 'tls_channel_status',
	'tableDesc' => '每个连接接口的TLS状态',
	'fields' => [
		'CHANNEL' => [
			//The name of the connection interface to which the TLS property row applies. mysql_main and mysql_admin are the channel names for the main and administrative connection interfaces, 
			//respectively. For information about the different interfaces, see Section 5.1.12.1, “Connection Interfaces”.
			'name' => '连接接口名称',
			'desc' => 'TLS属性行应用于的连接接口的名称。mysql_main和mysql_admin分别是主连接和管理连接接口的通道名称。有关不同接口的信息，请参阅5.1.12.1节“连接接口”。',
			'descInvUrl' => 'https://dev.mysql.com/doc/refman/8.0/en/connection-interfaces.html',
			'link' => '',
			'linkDesc' => ''
		],
		'PROPERTY' => [
			//The TLS property name. The row for the Enabled property indicates overall interface status, where the interface and its status are named in the CHANNEL and VALUE columns, respectively. 
			//Other property names indicate particular TLS properties. These often correspond to the names of TLS-related status variables.
			'name' => 'TLS属性名',
			'desc' => 'TLS属性名。Enabled属性的行指示总体接口状态，其中接口及其状态分别在CHANNEL和VALUE列中命名。其他属性名称表示特定的TLS属性。这些通常对应于与ls相关的状态变量的名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'VALUE' => [
			//The TLS property value.
			'name' => 'TLS属性值',
			'desc' => '',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];