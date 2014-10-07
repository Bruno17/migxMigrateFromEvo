<?php
$xpdo_meta_map['WebGroups']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'web_groups',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'webgroup' => 0,
    'webuser' => 0,
  ),
  'fieldMeta' => 
  array (
    'webgroup' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'webuser' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
