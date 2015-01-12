<!-- Copyright 2014 Carl Johnson IV -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset= UTF-8" charset="UTF-8" />
		<?php
			include("{$_SERVER['DOCUMENT_ROOT']}/parts/head.html.part");
			echo '';
			
			$page_spec = array_merge(array('p'=>'home'), $_GET)['p'];
			
			if (strpos($page_spec, '/') === false)
			{
				echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/styles/pages/{$page_spec}.css\" />\n";
			}
		?>
	</head>
	<body>
		<div class="header">
			<?php include("{$_SERVER['DOCUMENT_ROOT']}/parts/header.html.part"); ?>
		</div>
		<div class="center">
			<div class="page">
				<?php
					$page_spec = array_merge(array('p'=>'home'), $_GET)['p'];
					
					if (strpos($page_spec, '/') === false)
					{
						include("{$_SERVER['DOCUMENT_ROOT']}/pages/$page_spec.html.part");
					}
					else
					{
						echo 'no one here but us chickens';
					}
				?>
			</div>
			<!--div class="sidebar">
				<?php include("{$_SERVER['DOCUMENT_ROOT']}/parts/sidebar.html.part"); ?>
			</div-->
		</div>
		<div class="footer hflex">
			<?php include("{$_SERVER['DOCUMENT_ROOT']}/parts/footer.html.part"); ?>
		</div>
	</body>
</html>
