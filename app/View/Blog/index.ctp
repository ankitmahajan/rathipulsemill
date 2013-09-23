<div id="content">
	<table class="list_page" style="margin: auto;">
	  <tr>
		  <th>Blogs</th>
		  <th>Comment</th>
		  <th colspan="1">Category</th>
		  
	  </tr>
	  <?php if(count($blogs)>0):?>
		<?php foreach($blogs as $blog):?>
		<tr>
			<td><?php echo $this->Html->link($blog['BlogPost']['title'], SITE_URL.'/blog/'.$blog["BlogPost"]["id"], array('class' => 'button')); ?></td>
			<td><?php echo $blog[0]['count']; ?></td>
			<td><?php echo $blog['BlogCategory']['name']; ?></td>
			
		</tr>	  
		<?php endforeach;?>
	  
	  <?php else:?>
		<tr>
			<td colspan="4"><div style="text-align: center; color: rgb(129, 16, 15); font-size: 18px;">No post found.</div></td>	
		</tr>	  
	  <?php endif;?>
	</table>
</div>	
