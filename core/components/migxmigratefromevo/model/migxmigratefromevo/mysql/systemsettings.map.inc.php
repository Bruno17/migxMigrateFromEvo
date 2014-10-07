<?php
$xpdo_meta_map['SystemSettings']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'system_settings',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'setting_name' => '',
    'setting_value' => NULL,
  ),
  'fieldMeta' => 
  array (
    'setting_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'pk',
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
      'unique' => true,
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
  ),
);
