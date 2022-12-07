<?php

/**
 *
 * Configuration file, generated by the iTop configuration wizard
 *
 * The file is used in MetaModel::LoadConfig() which does all the necessary initialization job
 *
 */

$APP_URL = getenv('APP_URL') !== false ? getenv('APP_URL') : 'http://localhost:3000/itop/';
$DB_HOST = getenv('DB_HOST') !== false ? getenv('DB_HOST') : '192.168.43.246';
$DB_NAME = getenv('DB_NAME') !== false ? getenv('DB_NAME') : 'itop';
$DB_PWD = getenv('DB_PWD') !== false ? getenv('DB_PWD') : '6459468';
$DB_USER = getenv('DB_USER') !== false ? getenv('DB_USER') : 'gbarba';


$MySettings = array(

	// access_message: Message displayed to the users when there is any access restriction
	//	default: 'iTop is temporarily frozen, please wait... (the admin team)'
	'access_message' => 'iTop is temporarily frozen, please wait... (the admin team)',

	// access_mode: Access mode: ACCESS_READONLY = 0, ACCESS_ADMIN_WRITE = 2, ACCESS_FULL = 3
	//	default: 3
	'access_mode' => 3,

	// activity_panel.entry_form_opened_by_default: Whether or not the new entry form will be automatically opened when viewing an object.
	//	default: false
	'activity_panel.entry_form_opened_by_default' => false,

	// activity_panel.show_author_name_below_entries: Whether or not to show the author friendlyname next to the date on the last entry.
	//	default: false
	'activity_panel.show_author_name_below_entries' => false,

	'allowed_login_types' => 'form|external|basic',

	// apc_cache.enabled: If set, the APC cache is allowed (the PHP extension must also be active)
	//	default: true
	'apc_cache.enabled' => true,

	// apc_cache.query_ttl: Time to live set in APC for the prepared queries (seconds - 0 means no timeout)
	//	default: 3600
	'apc_cache.query_ttl' => 3600,

	// app_root_url: Root URL used for navigating within the application, or from an email to the application (you can put $SERVER_NAME$ as a placeholder for the server's name)
	//	default: ''
	'app_root_url' => $APP_URL,

	// behind_reverse_proxy: If true, then proxies custom header (X-Forwarded-*) are taken into account. Use only if the webserver is not publicly accessible (reachable only by the reverse proxy)
	//	default: false
	'behind_reverse_proxy' => false,

	// cron_max_execution_time: Duration (seconds) of the page cron.php, must be shorter than php setting max_execution_time and shorter than the web server response timeout
	//	default: 600
	'cron_max_execution_time' => 600,

	// csv_file_default_charset: Character set used by default for downloading and uploading data as a CSV file. Warning: it is case sensitive (uppercase is preferable).
	//	default: 'ISO-8859-1'
	'csv_file_default_charset' => 'ISO-8859-1',

	'csv_import_charsets' => array (
	),

	// csv_import_history_display: Display the history tab in the import wizard
	//	default: false
	'csv_import_history_display' => false,

	// date_and_time_format: Format for date and time display (per language)
	//	default: array (
	//		  'default' => 
	//		  array (
	//		    'date' => 'Y-m-d',
	//		    'time' => 'H:i:s',
	//		    'date_time' => '$date $time',
	//		  ),
	//		)
	'date_and_time_format' => array('default' => array('date' => 'Y-m-d', 'time' => 'H:i:s', 'date_time' => '$date $time')),

	'db_host' => $DB_HOST,

	'db_name' => $DB_NAME,

	'db_pwd' => $DB_PWD,

	'db_subname' => '',

	'db_user' => $DB_USER,

	// deadline_format: The format used for displaying "deadline" attributes: any string with the following placeholders: $date$, $difference$
	//	default: '$difference$'
	'deadline_format' => '$difference$',

	'default_language' => 'ES CR',

	// email_asynchronous: If set, the emails are sent off line, which requires cron.php to be activated. Exception: some features like the email test utility will force the serialized mode
	//	default: false
	'email_asynchronous' => false,

	// email_default_sender_address: Default address provided in the email from header field.
	//	default: ''
	'email_default_sender_address' => 'devops.app@qvision.com.co',

	// email_default_sender_label: Default label provided in the email from header field.
	//	default: ''
	'email_default_sender_label' => 'devops.app@qvision.com.co',

	// email_transport: Mean to send emails: PHPMail (uses the function mail()) or SMTP (implements the client protocol)
	//	default: 'PHPMail'
	'email_transport' => 'SMTP',

	// email_transport_smtp.host: host name or IP address (optional)
	//	default: 'localhost'
	'email_transport_smtp.host' => 'mail.qvision.com.co',

	// email_transport_smtp.password: Authentication password (optional)
	//	default: ''
	'email_transport_smtp.password' => 'D9f3vr0?',

	// email_transport_smtp.port: port number (optional)
	//	default: 25
	'email_transport_smtp.port' => 25,

	// email_transport_smtp.username: Authentication user (optional)
	//	default: ''
	'email_transport_smtp.username' => 'qvimd@qvision.com.co',

	// email_validation_pattern: Regular expression to validate/detect the format of an eMail address
	//	default: '[a-zA-Z0-9._&\'-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z0-9-]{2,}'
	'email_validation_pattern' => '[a-zA-Z0-9._&\'-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z0-9-]{2,}',

	'encryption_key' => '38654b7ee934fd5a34d41a02c6523b7547ef76db2fdbed58c12ce71c94db56f1',

	'encryption_library' => 'Sodium',

	'ext_auth_variable' => '$_SERVER[\'REMOTE_USER\']',

	'fast_reload_interval' => '60',

	// graphviz_path: Path to the Graphviz "dot" executable for graphing objects lifecycle
	//	default: '/usr/bin/dot'
	'graphviz_path' => '/usr/bin/dot',

	// high_cardinality_classes: List of classes with high cardinality (Force manual submit of search)
	//	default: array (
	//		)
	'high_cardinality_classes' => array(),

	// inline_image_max_display_width: The maximum width (in pixels) when displaying images inside an HTML formatted attribute. Images will be displayed using this this maximum width.
	//	default: '250'
	'inline_image_max_display_width' => '250',

	// inline_image_max_storage_width: The maximum width (in pixels) when uploading images to be used inside an HTML formatted attribute. Images larger than the given size will be downsampled before storing them in the database.
	//	default: '1600'
	'inline_image_max_storage_width' => '1600',

	// link_set_attribute_qualifier: Link set from string: attribute qualifier (encloses both the attcode and the value)
	//	default: '\''
	'link_set_attribute_qualifier' => '\'',

	// link_set_attribute_separator: Link set from string: attribute separator
	//	default: ';'
	'link_set_attribute_separator' => ';',

	// link_set_item_separator: Link set from string: line separator
	//	default: '|'
	'link_set_item_separator' => '|',

	// link_set_value_separator: Link set from string: value separator (between the attcode and the value itself
	//	default: ':'
	'link_set_value_separator' => ':',

	'log_global' => true,

	'log_issue' => true,

	'log_notification' => true,

	'log_web_service' => true,

	'max_display_limit' => '30',

	// max_linkset_output: Maximum number of items shown when getting a list of related items in an email, using the form $this->some_list$. 0 means no limit.
	//	default: 100
	'max_linkset_output' => 100,

	// mentions.allowed_classes: Classes which can be mentioned through the autocomplete in the caselogs. Key of the array must be a single character that will trigger the autocomplete, value must be a DM class (eg. "@" => "Person", "?" => "FAQ")
	//	default: array (
	//		  '@' => 'Person',
	//		)
	'mentions.allowed_classes' => array('@' => 'Person'),

	'min_display_limit' => '20',

	// online_help: Hyperlink to the online-help web page
	//	default: 'http://www.combodo.com/itop-help'
	'online_help' => 'http://www.combodo.com/itop-help',

	// optimize_requests_for_join_count: Optimize request joins to minimize the count (default is true, try to set it to false in case of performance issues)
	//	default: true
	'optimize_requests_for_join_count' => true,

	'password_hash_algo' => '2y',

	// php_path: Path to the php executable in CLI mode
	//	default: 'php'
	'php_path' => 'php',

	// search_manual_submit: Force manual submit of search all requests
	//	default: false
	'search_manual_submit' => false,

	'secure_connection_required' => false,

	// session_name: The name of the cookie used to store the PHP session id
	//	default: 'iTop'
	'session_name' => 'iTop',

	// shortcut_actions: Actions that are available as direct buttons next to the "Actions" menu
	//	default: 'UI:Menu:Modify,UI:Menu:New'
	'shortcut_actions' => 'UI:Menu:Modify,UI:Menu:New',

	// source_dir: Source directory for the datamodel files. (which gets compiled to env-production).
	//	default: ''
	'source_dir' => 'datamodels/2.x/',

	'standard_reload_interval' => '300',

	// synchro_trace: Synchronization details: none, display, save (includes 'display')
	//	default: 'none'
	'synchro_trace' => 'none',

	// tag_set_item_separator: Tag set from string: tag label separator
	//	default: '|'
	'tag_set_item_separator' => '|',

	// timezone: Timezone (reference: http://php.net/manual/en/timezones.php). If empty, it will be left unchanged and MUST be explicitly configured in PHP
	//	default: 'Europe/Paris'
	'timezone' => 'America/Bogota',

	// tracking_level_linked_set_default: Default tracking level if not explicitly set at the attribute level, for AttributeLinkedSet (defaults to NONE in case of a fresh install, LIST otherwise - this to preserve backward compatibility while upgrading from a version older than 2.0.3 - see TRAC #936)
	//	default: 1
	'tracking_level_linked_set_default' => 0,

	// url_validation_pattern: Regular expression to validate/detect the format of an URL (URL attributes and Wiki formatting for Text attributes)
	//	default: '(https?|ftp)\\://([a-zA-Z0-9+!*(),;?&=\\$_.-]+(\\:[a-zA-Z0-9+!*(),;?&=\\$_.-]+)?@)?([a-zA-Z0-9-.]{3,})(\\:[0-9]{2,5})?(/([a-zA-Z0-9:%+\\$_-]\\.?)+)*/?(\\?[a-zA-Z+&\\$_.-][a-zA-Z0-9;:[\\]@&%=+/\\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\\$_.-]*)?'
	'url_validation_pattern' => '(https?|ftp)\\://([a-zA-Z0-9+!*(),;?&=\\$_.-]+(\\:[a-zA-Z0-9+!*(),;?&=\\$_.-]+)?@)?([a-zA-Z0-9-.]{3,})(\\:[0-9]{2,5})?(/([a-zA-Z0-9:%+\\$_-]\\.?)+)*/?(\\?[a-zA-Z+&\\$_.-][a-zA-Z0-9;:[\\]@&%=+/\\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\\$_.-]*)?',
);

/**
 *
 * Modules specific settings
 *
 */
$MyModuleSettings = array(
	'authent-cas' => array (
		'cas_debug' => false,
		'cas_host' => '',
		'cas_port' => '',
		'cas_context' => '',
		'cas_version' => '',
	),
	'authent-ldap' => array (
		'host' => 'openldap',
		'port' => 1389,
		'default_user' => 'cn=user_app,ou=People,dc=qvision,dc=com',
		'default_pwd' => '0a.rAqkIU8TU',
		'base_dn' => 'dc=qvision,dc=com',
		'user_query' => '(&(uid=%1$s))',
		'options' => array (
		  17 => 3,
		  8 => 0,
		),
		'start_tls' => false,
		'debug' => true,
		'servers' => array (
		),
	),
	'itop-attachments' => array (
		'allowed_classes' => array (
		  0 => 'Ticket',
		),
		'position' => 'relations',
		'preview_max_width' => 290,
		'icon_preview_max_size' => 500000,
	),
	'itop-backup' => array (
		'mysql_bindir' => '',
		'week_days' => 'monday, tuesday, wednesday, thursday, friday',
		'time' => '23:30',
		'retention_count' => 5,
		'enabled' => true,
		'itop_backup_incident' => '',
	),
	'combodo-sla-computation' => array (
		'coverage_oql' => 'SELECT CoverageWindow AS cw JOIN lnkCustomerContractToService AS l1 ON l1.coveragewindow_id = cw.id JOIN CustomerContract AS cc ON l1.customercontract_id = cc.id WHERE cc.org_id= :this->org_id AND l1.service_id = :this->service_id',
		'holidays_oql' => 'SELECT Holiday',
	),
);

/**
 *
 * Data model modules to be loaded. Names are specified as relative paths
 *
 */
$MyModules = array(
	'addons' => array('user rights' => 'addons/userrights/userrightsprofile.class.inc.php'),
);
?>