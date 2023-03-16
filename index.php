<div class="head-container" >
	<div class="header-general">
		<?php
		require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');
		require($_SERVER['DOCUMENT_ROOT'].'/partials/navbar.php');
		require($_SERVER['DOCUMENT_ROOT'].'/partials/navmenu.php');
		?>
	</div>
</div>
<!-- Add your site or application content here -->

<?php
$page = 'home';
if (isset($_GET['p'])) {
	switch ($_GET['p']) {
		case 'catalog':
			$page = 'catalog';
			break;
		case 'about':
			$page = 'about';
			break;
		case 'contact':
			$page = 'contact';
			break;
		default:
			$page = 'home';
			break;
	}
}
// connect the page depending on the request
require($_SERVER['DOCUMENT_ROOT']."/partials/pages/". $page . ".php");
?>
     

<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>