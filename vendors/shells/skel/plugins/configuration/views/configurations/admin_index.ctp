<div class="configurations index">
<h1><?php __('Configurations');?></h1>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('value');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($configurations as $configuration):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $configuration['Configuration']['id']; ?>
		</td>
		<td>
			<?php echo $configuration['Configuration']['name']; ?>
		</td>
		<td>
			<?php echo $configuration['Configuration']['value']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $configuration['Configuration']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $configuration['Configuration']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $configuration['Configuration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $configuration['Configuration']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Configuration', true), array('action'=>'add')); ?></li>
	</ul>
</div>