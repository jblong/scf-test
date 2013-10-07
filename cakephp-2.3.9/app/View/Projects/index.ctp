<h1>Projects List</h1>
<?php echo $this->Html->link(
    'Add Project',
    array('controller' => 'projects', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>Date Due</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($project['Project']['projectname'],
array('controller' => 'projects', 'action' => 'view', $project['Project']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $project['Project']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $project['Project']['id'])); ?>
        </td>
        <td><?php echo $project['Project']['duedate']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($project); ?>
</table>
