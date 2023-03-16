<?php
require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/header.php');

require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/topbar.php');

require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/sidebar.php');
?>

<main id="main" class="main">
    <!-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div> -->
    <!-- End Page Title -->
<?php
$page = '/admin/partials/pages/view-profile';
if (isset($_GET['p'])) {
	switch ($_GET['p']) {
		case 'edit-profile':
			$page = '/admin/partials/pages/edit-profile';
			break;
		case 'view-ads':
			$page = '/admin/partials/pages/view-ads';
			break;
		case 'edit-ad':
			$page = '/admin/partials/pages/edit-ad';
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
