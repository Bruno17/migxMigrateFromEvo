<?php
$xpdo_meta_map['WebgroupAccess']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'webgroup_access',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'webgroup' => 0,
    'documentgroup' => 0,
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
    'documentgroup' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
