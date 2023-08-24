<?php

require_once('C:\danya\programs\OSPanel\domains\moodle\config.php');
require_login();

// Проверка прав доступа администратора
if (!is_siteadmin()) {
    print_error('errornoadmin');
}

$PAGE->set_context(context_system::instance());
$PAGE->set_url('/report/customreport/index.php');
$PAGE->set_title(get_string('pluginname', 'report_customreport'));
$PAGE->set_heading(get_string('pluginname', 'report_customreport'));

echo $OUTPUT->header();

// Выполнение SQL-запроса для получения данных
global $DB;
$sql = "SELECT u.id, u.firstname, u.lastname, GROUP_CONCAT(c.fullname SEPARATOR ', ') AS courses
        FROM {user} u
        JOIN {user_enrolments} ue ON ue.userid = u.id
        JOIN {enrol} e ON e.id = ue.enrolid
        JOIN {course} c ON c.id = e.courseid
        GROUP BY u.id
        ORDER BY RAND()
        LIMIT 10";
$records = $DB->get_records_sql($sql);

// Отображение данных в таблице HTML
$table = new html_table();
$table->head = array('User', 'Courses');
foreach ($records as $record) {
    $user = fullname($record);
    $courses = $record->courses;
    $table->data[] = array($user, $courses);
}
echo html_writer::table($table);

echo $OUTPUT->footer();