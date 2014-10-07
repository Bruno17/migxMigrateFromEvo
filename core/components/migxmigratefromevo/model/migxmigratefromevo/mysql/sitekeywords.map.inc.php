<?php
$xpdo_meta_map['SiteKeywords']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'site_keywords',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'keyword' => '',
  ),
  'fieldMeta' => 
  array (
    'keyword' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '40',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'unique',
    ),
  ),
  'indexes' => 
  array (
    'keyword' => 
    array (
      'alias' => 'keyword',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'keyword' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
