<?php
$xpdo_meta_map['MembergroupAccess']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'membergroup_access',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'membergroup' => 0,
    'documentgroup' => 0,
  ),
  'fieldMeta' => 
  array (
    'membergroup' => 
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
