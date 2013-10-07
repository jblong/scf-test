<h1>Add Post</h1>
<?php
echo $this->Form->create('Project');
echo $this->Form->input('projectname');
echo $this->Form->input('duedate');
echo $this->Form->input('ground');
echo $this->Form->input('roof');
echo $this->Form->input('parking');
echo $this->Form->end('Save');
?>
