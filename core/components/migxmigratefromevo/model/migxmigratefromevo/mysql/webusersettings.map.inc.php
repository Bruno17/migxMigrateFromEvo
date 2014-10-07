<?php
$xpdo_meta_map['WebUserSettings']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'web_user_settings',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'webuser' => NULL,
    'setting_name' => '',
    'setting_value' => NULL,
  ),
  'fieldMeta' => 
  array (
    'webuser' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'setting_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'setting_value' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'setting_name' => 
    array (
      'alias' => 'setting_name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'setting_name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'webuserid' => 
    array (
      'alias' => 'webuserid',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'webuser' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
