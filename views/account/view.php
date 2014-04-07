<h1><?php echo $model->name?></h1>
<table class="table table-striped">
	<thead>
		<th>Id Transaksi</th>
		<th>Keterangan</th>
		<th>Debit</th>
		<th>Kredit</th>
	</thead>
	<tbody>
	<?foreach($model->TransactionDetails as $td):?>
		<tr>
			<td><?php echo $td->transaction_id;?></td>
			<td><?php echo $td->Transaction->Detail;?></td>
			<?php if($td->type=="Debit"):?>
				<td>
					<?php echo $td->ammount;?>
				</td>
				<td>
				</td>
			<?php else:?>
				<td>					
				</td>
				<td>
					<?php echo $td->ammount;?>
				</td>
			<?php endif;?>	
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
