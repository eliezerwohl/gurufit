<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
				<h1>404</h1>
				<p>The page you are looking for has moved, or no longer exists.</p>
				<form method="post" action="test.php">
					<input name="this is the name" value ="lady">
					<button type="submit"> submit </button>
				</form>
		</div>
	</div>
	<table>
	<?php


	    foreach ($_POST as $key => $value) {
	        echo "<tr>";
	        echo "<td>";
	        echo $key;
	        echo "</td>";
	        echo "<td>";
	        echo $value;
	        echo "</td>";
	        echo "</tr>";
	    }


	?>
	</table>


</div>
<?php get_footer(); ?>
