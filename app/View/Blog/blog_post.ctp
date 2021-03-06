<div id="content">
  
	<table cellspacing="0" style="width:100%">
	  <tbody>
		<tr>
		  <td style="width:50%;font-size: 18px;">
			<span style="margin-left: 28px;">BLOG POST/COMMENT</span>
		  </td>
		  <td>
		  </td>
		</tr>
	  </tbody>
	</table>
	<hr/>
	
	<div style="width: 550px; margin: auto;">
	<?php if(isset($blogPost['BlogPost'])):?>
	<div>
	  <div><?php echo $blogPost['BlogPost']['title'];  ?></div>
	  <div><span>Category : </span><span><?php echo $blogPost['BlogCategory']['name'];  ?></span></div>
	  <div><?php echo $blogPost['BlogPost']['description'];  ?></div>
	  <div><?php echo $this->Time->format('d/m/Y', $blogPost['BlogPost']['created']);  ?></div>
	</div>
	
	<div>
		
		<div><span style="font-weight:bold;text-decoration:underline">Comments</span></div>
		<?php foreach($blogPost['BlogComment'] AS $blogComment):?>
		<div><span class="comment_bg"> &nbsp; &nbsp;&nbsp;</span> <?php echo $blogComment['comment_text']?></div>
		<?php endforeach;?>
		<div>
			<div id="comment_box" style="">
				
				<?php echo $this->Form->create('BlogComment', array('url' => array('controller' => 'blog', 'action' => 'postComment'))); ?>
				<?php echo $this->Form->input('blog_post_id', array('label' => '','type'  => 'hidden','value'=>isset($blogPost['BlogPost']['id'])?$blogPost['BlogPost']['id']:''));?>
				<table>
				  <tr>
					<td>	
					  <?php echo $this->Form->input('comment_text', array('label' => '',
										'type'  => 'textarea',
										'class' => 'required',
										'div'=>false,
										'required'=>'required'
										)
						  );
					   ?>	
					</td>
				  </tr>
				
				  <tr>
					<td>
					  <div style="margin-top:10px">	
						<div style="float:left">	
							<img id="captcha" src="<?php echo $this->Html->url('/pages/captcha_image');?>" alt="sss" />
						</div>	  
						<div style="float:left;margin-left: 10px;">	
						<?php echo $this->Form->input('captcha', array('label' => '',
										  'type'  => 'text',
										  'class' => 'required',
										  'div'=>false,
										  'required'=>'required',
										  'style'=>'width: 85px; height: 18px;',
										  'title'=>'CAPTCHA(Please enter the image code)'
										  )
							);
							
						 ?>
						 
						 </div>
					  </div>
					</td>
				  </tr>
				  
				 
				  <tr>
					<td>
						<span>CAPTCHA(Please enter the image code)</span>	
					</td>	
				  </tr>	
				  <tr>
					<td>
					  <?php echo $this->Form->submit('Post',array(
															'div'=>false,
															'id'=>'',
															'class'=>''
															)
													);
										?>
					</td>
				  </tr>
				
				</table>
				
				<?php echo $this->Form->end(); ?>
				
			</div>
		</div>
		
		<?php endif;?>
	</div>
	
  <div>	
</div>
<script type="text/javascript">
	$().ready(function() {
		$("#BlogCommentIndexForm").validate();
	});
</script>
 