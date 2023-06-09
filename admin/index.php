<?php
require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/header.php');

require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/topbar.php');

require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/sidebar.php');

if(!isAuth()) {
	echo('<script> window.location.href = "/index.php"; </script>');
}

?>

<main id="main" class="main">

<?php
$page = '/admin/partials/pages/view-profile';
if (isset($_GET['p'])) {
	switch ($_GET['p']) {
		case 'edit-profile':
			$page = '/admin/partials/pages/edit-profile';
			break;
		case 'ads':
			$page = '/admin/partials/pages/ads';
			break;
		case 'ads-add':
			$page = '/admin/partials/pages/ads-add';
			break;
		case 'ads-edit':
			$page = '/admin/partials/pages/ads-edit';
			break;
		case 'favorites':
			$page = '/admin/partials/pages/favorites';
			break;
		case 'orders':
			$page = '/admin/partials/pages/orders';
			break;
    default:
			$page = '/admin/partials/pages/view-profile';
			break;
	}
}
// connect the page depending on the request
require($_SERVER['DOCUMENT_ROOT']. $page . ".php");
?>

</main>
<!-- End #main -->

<?php
require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/footer.php');
?>
