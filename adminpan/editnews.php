<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<?php
include_once "includes/head.php";

admin::CheckRank(12);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>



    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">

            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Noticias</h4>
                            <p class="card-description"> Crea una nueva noticia </p>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                            <?php 
                                admin::EditNews("id"); 
                                admin::UpdateNews();
				            ?>	
                            <input type="hidden" name="id" value="<?php echo admin::EditNews("id"); ?>">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Titulo</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" id="icon_prefix" value="<?php echo admin::EditNews("title"); ?>" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slogan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo admin::EditNews("shortstory"); ?>" name="shortstory">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Imagen prompcional</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo admin::EditNews("image"); ?>" name="image">
                                    <br>


                                    <div class="form-group">
                                        <center>
                                            <img src="<?php echo admin::EditNews("image"); ?>" name="topstory" width="500" border=0>
                                        </center>
                                    </div>
                                </div>
                                <center>

                                <br><br>
                           
                                    <script src="<?= $config['hotelUrl']; ?>/adminpan/js/ckeditor/ckeditor.js"></script>
                                    <div class="form-group">
                                        <label class="exampleInputEmail1">Contenido</label>
                                        <div class="col-md-8 grid-margin stretch-card">
                                           
                                                <textarea id="editor1" name="longstory" rows="15" cols="80" ><?php echo admin::EditNews("longstory"); ?></textarea>

                                        </div>
                                        <script>
                                            CKEDITOR.replace('editor1');
                                        </script>
                                    </div>
                                </center>


                                <center>


                                    <input type='hidden' id="link" value="https://discord.com/api/webhooks/797898778371162152/vxplxDTShvb-wMc6nruldZ-Aw6i_dPV_89JYj6UI6sfYKJS-VO3jS2qi7B73cXAzvJIT">
                                    <input type="hidden" id="username" value="Seguridad P&H: Nueva Noticia">
                                    <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
                                    <input type="hidden" id="content" value="
    
    <a:emoji_2:771042373571575858> <?php echo User::userData('username'); ?>: ha publicado una nueva noticia desde el HK! <a:emoji_2:771042373571575858>

<@&775405547876253757>
-----------------------------------------------------------------------------------------------------

">



                                    <button class="btn btn-primary mr-2" id="btn" type="submit" name="update" name="action">Publicar noticia

                                    </button>
                                </center>
                        </div>
                    </div>
                </div>
                </form>

                <?php
                if (User::userData('rank') > '6') {
                ?>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Todas las noticias:</h3>
                                <p class="card-description"> Basic form layout </p>
                                <?php admin::DeleteNews(); ?>
                                <div class="table-responsive ">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php
                                            $getArticles = $dbh->prepare("SELECT * FROM cms_news ORDER BY id DESC");
                                            $getArticles->execute();
                                            while ($news = $getArticles->fetch()) {
                                                echo '<tr>
											<td>' . $news["id"] . '</td>
											<td>' . $news["title"] . '</td>
											<td>' . $news["shortstory"] . '</td>
											<td>' . $news["author"] . '</td>
											<td>' . date('d-m-Y', $news['date']) . '</td>
											<td><center><a type="button" class="btn btn-primary"  href="' . $config['hotelUrl'] . '/adminpan/news/edit/' . $news["id"] . '"><i  style="padding-top: 5px; color:green;" class="fa fa-edit"></i>Editar</a></td>
											<td><a type="button" class="btn btn-danger" href=' . $config['hotelUrl'] . '/adminpan/news/delete/' . $news["id"] . '><i style="padding-top: 4px; color:red;" class="fa fa-trash"></i></center>Eliminar</a></td>
											</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>


                <?php } ?>













            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->


        <script src="https://thatziv.github.io/webhook/jquery.js"></script>
        <script src="https://thatziv.github.io/webhook/main.js"></script> <!-- End custom js for this page -->
</body>


</html>