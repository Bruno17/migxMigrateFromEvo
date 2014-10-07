<?php
$xpdo_meta_map['SitePluginEvents']= array (
  'package' => 'migxmigratefromevo',
  'version' => '1.1',
  'table' => 'site_plugin_events',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'pluginid' => NULL,
    'evtid' => 0,
    'priority' => 0,
  ),
  'fieldMeta' => 
  array (
    'pluginid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
    ),
    'evtid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'priority' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
);
