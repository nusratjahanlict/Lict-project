<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">







<div class="table-responsive">
	<h2><?php echo __('Admins'); ?></h2>
	<table class="table table-bordred table-striped">
	<thead>
	<tr>

			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>

			<th><?php echo $this->Paginator->sort('cell'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($admins as $admin): ?>
	<tr>

		<td><?php echo h($admin['Admin']['name']); ?>&nbsp;</td>
		<td><?php echo h($admin['Admin']['email']); ?>&nbsp;</td>

		<td><?php echo h($admin['Admin']['cell']); ?>&nbsp;</td>
		<td><?php
        $a = $admin['Admin']['created'];
        $b = explode(" ",$a);
        echo h($b[0]);

    ?>&nbsp;</td>
		<td><?php 
        $a = $admin['Admin']['modified'];
        $b = explode(" ",$a);
        echo h($b[0]);
    ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $admin['Admin']['id'])); ?>
      <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'view',$admin['Admin']['id']), true);?>" data-original-title="view this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-info-sign"></i></a>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $admin['Admin']['id'])); ?>
      <a href="<?php echo $this->Html->url(array('controller' => 'admins', 'action' => 'edit',$admin['Admin']['id']), true);?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $admin['Admin']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $admin['Admin']['id']))); ?>
      <?php
        echo $this->Form->postLink(
        '<button class="btn btn-sm btn-danger" data-original-title="Remove this user" data-toggle="tooltip">
        <i class="glyphicon glyphicon-remove"></i>
        </button>',
        array(
        'action'   => 'delete', $admin['Admin']['id']
        ),
        array(
        'class'    => 'tip',
        'escape'   => false,
        'confirm'  => 'Are you sure ?'
        ));
      ?>
    </td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>






					</div>
					<!-- /.box -->


					<!-- /.box -->
			</div>
			<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
