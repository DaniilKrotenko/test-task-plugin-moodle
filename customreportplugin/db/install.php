<?php

function xmldb_report_customreport_install() {
    global $DB;
    
    $table = new xmldb_table('report_customreport');
    $field1 = new xmldb_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
    $field2 = new xmldb_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
    $field3 = new xmldb_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
    
    // Add other fields if necessary
    
    $table->addField($field1);
    $table->addField($field2);
    $table->addField($field3);
    
    $key1 = new xmldb_key('primary');
    $key1->setFields(array('id'));
    $key1->setType(XMLDB_KEY_PRIMARY);
    
    $table->addKey($key1);
    
    $table->addIndex(new xmldb_index('userid_courseid_idx', XMLDB_INDEX_UNIQUE, array('userid', 'courseid')));
    
    // Creating a table
    if (!$DB->table_exists($table)) {
        $DB->create_table($table);
    }
    
    return true;
}
