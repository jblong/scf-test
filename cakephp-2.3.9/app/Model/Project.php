<?php
class Project extends AppModel {
    public $validate = array(
        'projectname' => array(
            'rule' => 'notEmpty'
        ),
        'duedate' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>
