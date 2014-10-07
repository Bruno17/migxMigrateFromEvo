<?php

$config = $modx->migx->customconfigs;

$prefix = isset($config['prefix']) && !empty($config['prefix']) ? $config['prefix'] : null;
if (isset($config['use_custom_prefix']) && !empty($config['use_custom_prefix'])) {
    $prefix = isset($config['prefix']) ? $config['prefix'] : '';
}

if (!empty($config['packageName'])) {
    $packageNames = explode(',', $config['packageName']);

    if (count($packageNames) == '1') {
        //for now connecting also to foreign databases, only with one package by default possible
        $xpdo = $modx->migx->getXpdoInstanceAndAddPackage($config);
    } else {
        //all packages must have the same prefix for now!
        foreach ($packageNames as $packageName) {
            $packagepath = $modx->getOption('core_path') . 'components/' . $packageName . '/';
            $modelpath = $packagepath . 'model/';
            if (is_dir($modelpath)) {
                $modx->addPackage($packageName, $modelpath, $prefix);
            }

        }
        $xpdo = &$modx;
    }
}

$source_classname = $config['classname'];
$target_classname = 'modTemplateVar';

//$start = $modx->getOption('start', $scriptProperties, 0);
//$limit = $modx->getOption('limit', $scriptProperties, 20);

$manager = $modx->getManager();
$manager->removeObjectContainer($target_classname);
$manager->createObjectContainer($target_classname);

$c = $xpdo->newQuery($source_classname);
$c->sortby('id');
$convert = true;

if ($collection = $xpdo->getIterator($source_classname, $c)) {
    foreach ($collection as $source_object) {
        $item = $source_object->toArray();
        if ($object = $modx->newObject($target_classname)) {
            $id = $modx->getOption('id', $item, 0);
            if ($convert) {
                $modx->loadClass('modParser095', '', false, true);
                $translator = new modParser095($modx);
                $translator->translate($item['default_text']);
                $translator->translate($item['elements']);
            }
            $object->fromArray($item);
            $object->save();
            $object_id = $object->get('id');
            $sql = "UPDATE {$object->_table} SET id={$id} WHERE id={$object_id}";
            $modx->exec($sql);
        }
    }
}

$source_classname = 'SiteTmplvarTemplates';
$target_classname = 'modTemplateVarTemplate';

$manager->removeObjectContainer($target_classname);
$manager->createObjectContainer($target_classname);

$c = $xpdo->newQuery($source_classname);

if ($collection = $xpdo->getIterator($source_classname, $c)) {
    foreach ($collection as $source_object) {
        //$item = $source_object->toArray();
        if ($object = $modx->newObject($target_classname)) {
            $object->set('tmplvarid',$source_object->get('tmplvarid'));
            $object->set('templateid',$source_object->get('templateid'));
            $object->set('rank',$source_object->get('rank'));
            $object->save();
        }
    }
}


return $modx->error->success();
