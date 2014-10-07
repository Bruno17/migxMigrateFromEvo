<?php
$xpdo_meta_map['SiteMetatags']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'site_metatags',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'tag' => '',
    'tagvalue' => '',
    'http_equiv' => 0,
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
    'tag' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'tagvalue' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'http_equiv' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
