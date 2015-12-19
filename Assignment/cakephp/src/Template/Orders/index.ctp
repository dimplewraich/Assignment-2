<h1>Orders</h1>
<table>
    <tr>
        <th>Id</th>
        <th>forename</th>
        <th>surname</th>
		
		<th>address</th>
        <th>city</th>
        <th>telephonenumber</th>
		
		<th>email</th>
        <th>numberofpizzas</th>
          <th>Action</th>
    </tr>

 
    <?php foreach ($orders as $order): ?>
    <tr>
        <td><?= $order->id ?></td>
         <td><?= $order->forename ?></td>
		  <td><?= $order->surname ?></td>
		   <td><?= $order->address ?></td>
		   
		   
		     <td><?= $order->city ?></td>
         <td><?= $order->telephonenumber ?></td>
		  <td><?= $order->email ?></td>
		   <td><?= $order->numberofpizzas ?></td>
		   
		      <td>  
			 <?php  if($order->complete!=1) 
			 {
			echo $this->Form->postLink(
                "Mark Complete",
                ['action' => 'update', $order->id],
                ['confirm' => 'Are you sure?']); }
				echo "Completed   "; 
            ?>    
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $order->id],
                ['confirm' => 'Are you sure?   '])
            ?>
            <?= $this->Html->link('Edit   ', ['action' => 'edit', $order->id]) ?>
        </td>
			  
    </tr>
    <?php endforeach; ?>
</table>