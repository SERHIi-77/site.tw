<?php
$ads = getAllAdsByUser(getUserID());

switch(true) {
    case isset($_POST['del_submit']):
        $filePath = $_SERVER['DOCUMENT_ROOT'] .'/uploads/'.getCurrentAd($_POST['ad_id'])['photo'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $sql = "DELETE FROM pets WHERE id = '".$_POST['ad_id']."'";
        mysqli_query($conn, $sql); 
        echo('<script> window.location.href = "/admin/index.php?p=ads"; </script>');
        break;
    case isset($_POST['edit_submit']):
        $_SESSION['ad_id'] = $_POST['ad_id'];
        echo('<script> window.location.href = "/admin/index.php?p=ads-edit"; </script>');
        break;
    default:
      // Код для выполнения в случае, если не был получен ни один из указанных запросов
      
      break;
  }






?>

<?php while($ad = $ads->fetch_assoc()): 
        $fav_query = 'SELECT COUNT(*) as count FROM fav WHERE pet = '.$ad['id'];
        $favcount = mysqli_fetch_assoc(mysqli_query($conn, $fav_query))['count'];
    
?>
<section class="section">
    <!-- Card with an image on left -->
    <form id="adChengeForm" action="<?php $_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/ads.php' ?>" method="POST">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <p>Оголошення створене <em><?php echo($ad['created']);?></em></p>
                </div>
                <div>
                    <button type="submit" name="del_submit"class="btn btn-danger rounded-pill"><i class="bi bi-trash3"></i> Видалити </button>
                </div>
            </div>
            <div class="card-body">
                <div class="my-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="my-auto d-block ratio">
                                <img src="/uploads/<?php echo($ad['photo']);?>" class="img-fluid rounded" alt="..." style="height: 300px; width: auto">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $ad['title']; ?></h5>
                                
                                <p class="card-text"><?php echo $ad['ad']; ?></p>

                                <p class="card-text"><small><?php echo $ad['note']; ?></small></p>

                                <table class="table table-borderless table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Вид</th>
                                            <th scope="col">Порода</th>
                                            <th scope="col">Стать</th>
                                            <th scope="col">Вік</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo($ad['type']);?></td>
                                            <td><?php echo($ad['breed']);?></td>
                                            <td><?php echo($ad['sex']);?></td>
                                            <td><?php echo($ad['age']);?></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p>Вартість : <strong><?php echo($ad['price']);?></strong> грошових одиниць</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div><p>Оголошення відзначено <strong><?php echo($favcount);?></strong> разів</p>    
                </div>
                <div>
                    <button type="submit" name="edit_submit"class="btn btn-success rounded-pill"><i class="bi bi-pencil-square"></i> Редагування</button>
                </div>
            </div>
        </div>
        <input type="hidden" name="ad_id" value="<?php echo($ad['id']);?>">
    </form>

    <!-- End Card with an image on left -->
    <?php endwhile; ?>

    <div class="modal fade" id="smModalDelAd" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">УВАГА !!!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Ви щойно видалили оголошення
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div><!-- End Small Modal-->
</section>