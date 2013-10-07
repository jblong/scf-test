<h1>Edit Project</h1>
<?php
echo $this->Form->create('Project');
echo $this->Form->input('projectname');
echo $this->Form->input('duedate');
echo $this->Form->input('ground');
echo $this->Form->input('roof');
echo $this->Form->input('parking');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save');
?>
