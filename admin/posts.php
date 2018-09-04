<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Administración
                        <small>Autor</small>
                    </h1>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Autor</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                            <th>Imagen</th>
                            <th>Tags</th>
                            <th>Comentarios</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php

                        $query = "SELECT * FROM posts";
                        $select_posts = mysqli_query($connection, $query);


                        while ($row = mysqli_fetch_assoc($select_posts)) {
                            $post_id     = $row['post_id'];
                            $post_author = $row['post_author'];
                            $post_title  = $row['post_title'];
                            $post_category_id = $row['post_category_id'];
                            $post_status = $row['post_status'];
                            $post_image  = $row['post_image'];
                            $post_tags     = $row['post_tags'];
                            $post_comment_count = $row['post_comment_count'];
                            $post_date  = $row['post_date'];

                            echo "<tr>";

                            echo "<td>$post_id</td>";
                            echo "<td>$post_author</td>";
                            echo "<td>$post_title</td>";
                            echo "<td>$post_category_id</td>";
                            echo "<td>$post_status</td>";
                            echo "<td><img width='100' src='../images/$post_image' alt='imagen'></td>";
                            echo "<td>$post_tags</td>";
                            echo "<td>$post_comment_count</td>";
                            echo "<td>$post_date</td>";

                            echo "</tr>";


//                            echo "<tr>";
//                            echo "<td>{$cat_id}</td>";
//                            echo "<td>{$cat_title}</td>";
//                            echo "<td><a href='categories.php?delete={$cat_id}'>Borrar</td></a></td>";
//                            echo "<td><a href='categories.php?edit={$cat_id}'>Editar</td></a></td>";
//                            echo "</tr>";

                        }



                        ?>


                        </tbody>

                      </table>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php" ?>