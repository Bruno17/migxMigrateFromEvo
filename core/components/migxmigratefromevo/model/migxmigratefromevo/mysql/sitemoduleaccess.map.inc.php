<?php
$xpdo_meta_map['SiteModuleAccess']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'site_module_access',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'module' => 0,
    'usergroup' => 0,
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
    'usergroup' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
