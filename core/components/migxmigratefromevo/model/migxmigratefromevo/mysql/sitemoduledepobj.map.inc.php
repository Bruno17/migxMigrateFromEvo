<?php
$xpdo_meta_map['SiteModuleDepobj']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'site_module_depobj',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'module' => 0,
    'resource' => 0,
    'type' => 0,
  ),
  'fieldMeta' => 
  array (
    'module' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'resource' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'type' => 
    array (
      'dbtype' => 'int',
      'precision' => '2',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
