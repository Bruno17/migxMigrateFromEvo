<?php
$xpdo_meta_map['JotSubscriptions']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'jot_subscriptions',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'uparent' => NULL,
    'tagid' => NULL,
    'userid' => NULL,
  ),
  'fieldMeta' => 
  array (
    'uparent' => 
    array (
      'dbtype' => 'mediumint',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'tagid' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'userid' => 
    array (
      'dbtype' => 'mediumint',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'uparent' => 
    array (
      'alias' => 'uparent',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'uparent' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'tagid' => 
    array (
      'alias' => 'tagid',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'tagid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'userid' => 
    array (
      'alias' => 'userid',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'userid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
