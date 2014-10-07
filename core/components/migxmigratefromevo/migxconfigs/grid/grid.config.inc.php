<?php

$gridactionbuttons['migrateresources']['text'] = "'Migrate Resources'";
$gridactionbuttons['migrateresources']['handler'] = 'this.migrateResources';
$gridactionbuttons['migrateresources']['scope'] = 'this';
$gridactionbuttons['migrateresources']['standalone'] = '1';

$gridactionbuttons['migratetvcontents']['text'] = "'Migrate TV Contents'";
$gridactionbuttons['migratetvcontents']['handler'] = 'this.migrateTvContents';
$gridactionbuttons['migratetvcontents']['scope'] = 'this';
$gridactionbuttons['migratetvcontents']['standalone'] = '1';

$gridactionbuttons['migratetvs']['text'] = "'Migrate Template Variables'";
$gridactionbuttons['migratetvs']['handler'] = 'this.migrateTvs';
$gridactionbuttons['migratetvs']['scope'] = 'this';
$gridactionbuttons['migratetvs']['standalone'] = '1';

$gridactionbuttons['migratecategories']['text'] = "'Migrate Categories'";
$gridactionbuttons['migratecategories']['handler'] = 'this.migrateCategories';
$gridactionbuttons['migratecategories']['scope'] = 'this';
$gridactionbuttons['migratecategories']['standalone'] = '1';

$gridactionbuttons['migratetemplates']['text'] = "'Migrate Templates'";
$gridactionbuttons['migratetemplates']['handler'] = 'this.migrateTemplates';
$gridactionbuttons['migratetemplates']['scope'] = 'this';
$gridactionbuttons['migratetemplates']['standalone'] = '1';

$gridactionbuttons['migratechunks']['text'] = "'Migrate Chunks'";
$gridactionbuttons['migratechunks']['handler'] = 'this.migrateChunks';
$gridactionbuttons['migratechunks']['scope'] = 'this';
$gridactionbuttons['migratechunks']['standalone'] = '1';

$gridactionbuttons['migratedocumentgroups']['text'] = "'Migrate Document Groups'";
$gridactionbuttons['migratedocumentgroups']['handler'] = 'this.migrateDocumentgroups';
$gridactionbuttons['migratedocumentgroups']['scope'] = 'this';
$gridactionbuttons['migratedocumentgroups']['standalone'] = '1';

$gridfunctions['this.migrateDocumentgroups'] = "
migrateDocumentgroups: function(btn,e) {
    var _this=this;
    Ext.Msg.confirm(_('warning') || '','This does remove all existing Document Groups and import all Document Groups from Evo! Continue?',function(e) {
        if (e == 'yes') {    
            MODx.Ajax.request({
                url: _this.config.url
                ,params: {
                    action: 'mgr/migxdb/process'
                    ,processaction: 'migratedocumentgroups'                     
                    ,configs: _this.config.configs
                    ,resource_id: _this.config.resource_id
                    ,co_id: '[[+config.connected_object_id]]'                
                    ,reqConfigs: '[[+config.req_configs]]'
                }
                ,listeners: {
                    'success': {fn:function(r) {
                        _this.refresh();
                    },scope:_this}
                }
            });
        }
    }),this;           
    return true;
}
";

$gridfunctions['this.migrateChunks'] = "
migrateChunks: function(btn,e) {
    var _this=this;
    Ext.Msg.confirm(_('warning') || '','This does remove all existing Chunks and import all Chunks from Evo! Continue?',function(e) {
        if (e == 'yes') {    
            MODx.Ajax.request({
                url: _this.config.url
                ,params: {
                    action: 'mgr/migxdb/process'
                    ,processaction: 'migratechunks'                     
                    ,configs: _this.config.configs
                    ,resource_id: _this.config.resource_id
                    ,co_id: '[[+config.connected_object_id]]'                
                    ,reqConfigs: '[[+config.req_configs]]'
                }
                ,listeners: {
                    'success': {fn:function(r) {
                        _this.refresh();
                    },scope:_this}
                }
            });
        }
    }),this;           
    return true;
}
";

$gridfunctions['this.migrateCategories'] = "
migrateCategories: function(btn,e) {
    var _this=this;
    Ext.Msg.confirm(_('warning') || '','This does remove all existing Categories and import all Categories from Evo! Continue?',function(e) {
        if (e == 'yes') {    
            MODx.Ajax.request({
                url: _this.config.url
                ,params: {
                    action: 'mgr/migxdb/process'
                    ,processaction: 'migratecategories'                     
                    ,configs: _this.config.configs
                    ,resource_id: _this.config.resource_id
                    ,co_id: '[[+config.connected_object_id]]'                
                    ,reqConfigs: '[[+config.req_configs]]'
                }
                ,listeners: {
                    'success': {fn:function(r) {
                        _this.refresh();
                    },scope:_this}
                }
            });
        }
    }),this;           
    return true;
}
";

$gridfunctions['this.migrateTvContents'] = "
migrateTvContents: function(btn,e) {
    var _this=this;
    Ext.Msg.confirm(_('warning') || '','This does remove all existing TV-Contents and import all TV-Contents from Evo! Continue?',function(e) {
        if (e == 'yes') {    
            MODx.Ajax.request({
                url: _this.config.url
                ,params: {
                    action: 'mgr/migxdb/process'
                    ,processaction: 'migratetvcontents'                     
                    ,configs: _this.config.configs
                    ,resource_id: _this.config.resource_id
                    ,co_id: '[[+config.connected_object_id]]'                
                    ,reqConfigs: '[[+config.req_configs]]'
                }
                ,listeners: {
                    'success': {fn:function(r) {
                        _this.refresh();
                    },scope:_this}
                }
            });
        }
    }),this;           
    return true;
}
";

$gridfunctions['this.migrateResources'] = "
migrateResources: function(btn,e) {
    var _this=this;
    Ext.Msg.confirm(_('warning') || '','This does remove all existing Resources and import all Resources from Evo! Continue?',function(e) {
        if (e == 'yes') {    
            MODx.Ajax.request({
                url: _this.config.url
                ,params: {
                    action: 'mgr/migxdb/process'
                    ,processaction: 'migrateresources'                     
                    ,configs: _this.config.configs
                    ,resource_id: _this.config.resource_id
                    ,co_id: '[[+config.connected_object_id]]'                
                    ,reqConfigs: '[[+config.req_configs]]'
                }
                ,listeners: {
                    'success': {fn:function(r) {
                        _this.refresh();
                    },scope:_this}
                }
            });
        }
    }),this;           
    return true;
}
";

$gridfunctions['this.migrateTvs'] = "
migrateTvs: function(btn,e) {
    var _this=this;
    Ext.Msg.confirm(_('warning') || '','This does remove all existing TVs and import all TVs from Evo! Continue?',function(e) {
        if (e == 'yes') {    
            MODx.Ajax.request({
                url: _this.config.url
                ,params: {
                    action: 'mgr/migxdb/process'
                    ,processaction: 'migratetvs'                     
                    ,configs: _this.config.configs
                    ,resource_id: _this.config.resource_id
                    ,co_id: '[[+config.connected_object_id]]'                
                    ,reqConfigs: '[[+config.req_configs]]'
                }
                ,listeners: {
                    'success': {fn:function(r) {
                        _this.refresh();
                    },scope:_this}
                }
            });
        }
    }),this;           
    return true;
}
";