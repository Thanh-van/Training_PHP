<ul class="main-menu__catalog">
	<?php foreach ($menu['menu'] as $key => $value) {
		?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $value['name']; ?>
			</a>
			<?php 
			if ($value['childen']==1) {
				?>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<?php 
					foreach ($menu['menu1'] as $key => $v) {
						if ($value['id']== $v['parent_id'] && $v['visible']==1) {
							?>
							<li><a class="dropdown-item" href="?view=catalog&c=<?php echo  $v['id']; ?>" ><?php echo $v['name']; ?></a></li>

							<?php
						}
					}
					?>
				</ul>
				<?php

			}
			?>
		</li>
		<?php
	} ?>
	
</ul>


