<?php
/*
MySQL Server supports a keyring that enables internal server components and plugins to securely store sensitive information for later retrieval. See Section 6.4.4, “The MySQL Keyring”.

As of MySQL 8.0.16, the keyring_keys table exposes metadata for keys in the keyring. Key metadata includes key IDs, key owners, and backend key IDs. 
The keyring_keys table does not expose any sensitive keyring data such as key contents.

MySQL服务器支持一个密匙环，使内部服务器组件和插件安全存储敏感信息，供以后检索。请参阅第6.4.4节“MySQL密钥环”。

在MySQL 8.0.16中，keyring_keys表公开密匙环中密匙的元数据。密钥元数据包括密钥id、密钥所有者和后端密钥id。keyring_keys表不公开任何敏感的密匙环数据，比如密匙内容。
*/

return [
	//Metadata for keyring keys
	//https://dev.mysql.com/doc/refman/8.0/en/performance-schema-keyring-keys-table.html
	'tableName' => 'keyring_keys',
	'tableDesc' => 'keyring密钥的元数据',
	'fields' => [
		'KEY_ID' => [
			//The key identifier.
			'name' => 'KEY标识符',
			'desc' => '标识符的键。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'KEY_OWNER' => [
			//The owner of the key.
			'name' => 'KEY主人',
			'desc' => '钥匙的主人。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
		'BACKEND_KEY_ID' => [
			//The ID used for the key by the keyring backend.
			'name' => '后端用于密钥的ID',
			'desc' => '密钥环后端用于密钥的ID。',
			'descInvUrl' => '',
			'link' => '',
			'linkDesc' => ''
		],
	]
];