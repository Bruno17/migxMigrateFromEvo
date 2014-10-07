<?php
$xpdo_meta_map['TimetableCategories']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'timetable_categories',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'category' => NULL,
    'category_name' => NULL,
    'category_parent' => NULL,
  ),
  'fieldMeta' => 
  array (
    'category' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
    ),
    'category_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '250',
      'phptype' => 'string',
      'null' => false,
    ),
    'category_parent' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '250',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
);
