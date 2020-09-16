<?php
/*
Application programs can provide key-value connection attributes to be passed to the server at connect time. For descriptions of common attributes, see Section 26.12.9, “Performance Schema Connection Attribute Tables”.

The session_account_connect_attrs table contains connection attributes only for the current session, and other sessions associated with the session account. To see connection attributes for all sessions, use the session_connect_attrs table.

应用程序可以提供在连接时传递给服务器的键-值连接属性。对于常见属性的描述，请参见26.12.9节“性能模式连接属性表”。
https://dev.mysql.com/doc/refman/8.0/en/performance-schema-connection-attribute-tables.html

session_account_connect_attrs表只包含当前会话的连接属性，以及与会话帐户关联的其他会话的连接属性。要查看所有会话的连接属性，请使用session_connect_attrs表。
*/

return [
	//Connection attributes per for the current session
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-session-account-connect-attrs-table.html
	'tableName' => 'session_account_connect_attrs',
	'tableDesc' => '当前会话的每个连接属性',
	'fields' => [
		'PROCESSLIST_ID' => [
			//The connection identifier for the session.
			'name' => '会话的连接标识符',
			'desc' => '会话的连接标识符',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ATTR_NAME' => [
			//The attribute name.
			'name' => '属性名称',
			'desc' => '属性名称。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ATTR_VALUE' => [
			//The attribute value.
			'name' => '属性的值',
			'desc' => '属性的值。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'ORDINAL_POSITION' => [
			//The order in which the attribute was added to the set of connection attributes.
			'name' => '属性添加到连接属性集的顺序',
			'desc' => '属性添加到连接属性集的顺序。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];