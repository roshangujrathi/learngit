	<?php
		$arr = [
			[
				'id' => 1,
				'title' => 'the best way to learn php',
				'post' =>[
				 [ 'body' => 'practise a lot'],
				 [ 'body' => 'work on a project'],
				],
				'newpost' =>[
				 [ 'val' => 'practise a lot'],
				 [ 'val' => 'work on a project'],
				]
			],
			[
				'id' => 2,
				'title' => 'the best to use looping',
				'post' =>[
				 [ 'body' => 'practises a lot'],
				 [ 'body' => 'working on a project'],
				],
				'postdata' =>[
				 [ 'val' => 'practises a lot'],
				 [ 'val' => 'working on a project'],
				]
			],
		];
		
		
		foreach($arr as $keys=>$values)
		{
			echo '<h1>'.$values['title'].'</h1>';
			foreach($values['post'] as $data)
			{
				echo $data['body'].'<br/>';
			}
			
			
			
			if(isset($values['newpost']))
			{
				echo '<h1>New Post</h1>';
				foreach($values['newpost'] as $newdata)
				{
					echo $newdata['val'].'<br/>';
				}
			}
			
			
			if(isset($values['postdata']))
			{
				echo '<h1>PostData</h1>';
				foreach($values['postdata'] as $newdata)
				{
					echo $newdata['val'].'<br/>';
				}
			}
			
			
				
		}
	?>