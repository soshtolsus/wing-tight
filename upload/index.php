<html>
	<body>
		<?php
			echo var_export($_SERVER['DOCUMENT_ROOT']);
			echo var_export($_POST);
			if (isset($_FILES) && count($_FILES) > 0)
			{
				if ($_FILES['uploaded']['error'] == 0)
				{
					$move_success = move_uploaded_file(
						$_FILES['uploaded']['tmp_name'],
						sprintf(
							'%s/media/%s/%s',
							$_SERVER['DOCUMENT_ROOT'],
							$_POST['media_type'],
							$_FILES['uploaded']['name']));
					
					if ($move_success)
						echo htmlspecialchars(
							sprintf(
								'Uploaded %s successfully.',
								var_export($_FILES['uploaded']['name'])));
					else
						echo htmlspecialchars(
							sprintf(
								"An error occurred moving the uploaded file (%s) to its final destination (%s).",
								var_export($_FILES['uploaded']['name']),
								var_export($_FILES['uploaded']['tmp_name'])));
				}
				else
				{
					echo htmlspecialchars(
						sprintf(
							'An error occurred uploading %s: code %s.',
							var_export($_FILES['uploaded']['name']),
							var_export($_FILES['uploaded']['tmp_name'])));
				}
				echo '<br />';
			}
		?>
		<form enctype="multipart/form-data" action="./" method="POST">
			Please choose a file: <input name="uploaded" type="file" /><br />
			Target:<br />
			<input type="radio" name="media_type" value="news" checked="true" />News<br />
			<input type="radio" name="media_type" value="gallery" />Gallery<br />
			<input type="radio" name="media_type" value="issues" />Issues<br />
			<input type="submit" value="Upload" />
		</form>
	</body>
</html>
