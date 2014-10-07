<?php
$xpdo_meta_map['SystemEventnames']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'system_eventnames',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'service' => 0,
    'groupname' => '',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'service' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'groupname' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
);
