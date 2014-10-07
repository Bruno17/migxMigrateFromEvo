<?php
$xpdo_meta_map['FdCount']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'fd_count',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'filename' => NULL,
    'count' => 0,
  ),
  'fieldMeta' => 
  array (
    'filename' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'count' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
  ),
);
