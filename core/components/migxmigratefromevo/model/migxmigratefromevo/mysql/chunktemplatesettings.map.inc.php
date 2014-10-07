<?php
$xpdo_meta_map['ChunkTemplateSettings']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'chunk_template_settings',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'template_id' => 0,
    'settings_for' => NULL,
    'settings' => NULL,
  ),
  'fieldMeta' => 
  array (
    'template_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'settings_for' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
    ),
    'settings' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'user' => 
    array (
      'alias' => 'user',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'template_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
