<?php
$xpdo_meta_map['MemberGroups']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'member_groups',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'user_group' => 0,
    'member' => 0,
  ),
  'fieldMeta' => 
  array (
    'user_group' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'member' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
