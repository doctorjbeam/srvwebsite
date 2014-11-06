<?php
	/**
	 * Steamrail Victoria homepage
	 * @since Version 1.0 
	 * @author Lionel Camilleri
	 */
	
	$pagetitle = "Steamrail Victoria"; 
	
	/**
	 * Load the header
	 */
	
	require_once("header.php");
	
	/**
	 * Define the content
	 */
	
	$content = isset($_REQUEST['page']) && !empty($_REQUEST['page']) ? $_REQUEST['page'] : "index";
	
	if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . "content" . DIRECTORY_SEPARATOR . "inc." . $content . ".php")) {
		$content = __DIR__ . DIRECTORY_SEPARATOR . "content" . DIRECTORY_SEPARATOR . "inc." . $content . ".php";
	} else {
		$content = __DIR__ . DIRECTORY_SEPARATOR . "content" . DIRECTORY_SEPARATOR . "inc.index.php";
	}
?>
<div class="content group">
	<?php require_once($content); ?>
</div>
<?php require_once("footer.php"); ?>