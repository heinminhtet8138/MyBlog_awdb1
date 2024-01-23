<?php 

    include "layouts/navbar.php";
    // require "layouts/navbar.php";
    require "dbconnect.php";

    $sql = "SELECT posts.*, categories.name as c_name, users.name as u_name FROM posts INNER JOIN categories ON categories.id = posts.category_id INNER JOIN users ON users.id = posts.user_id";
    // echo $sql;
    // $stmt = $conn->query($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $posts = $stmt->fetchAll();
    // var_dump($posts);
?>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Hein Blog!</h1>
                    <p class="lead mb-0">I learn for me, I share</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Blog post-->

                    <?php 
                        foreach($posts as $post){
                    ?>

                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="<?= $post['image'] ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Post on <?= $post['created_at'] ?> by <?= $post['u_name'] ?></div>

                            <a href="#" class="badge bg-secondary text-decoration-none link-light"><?= $post['c_name'] ?></a>
                            <h2 class="card-title h4"><?= $post['title'] ?></h2>
                            <p class="card-text"><?= $post['description'] ?></p>
                            <a class="btn btn-primary" href="detail.php?postID=<?=$post['id']?>">Read more →</a>
                        </div>
                    </div>

                    <?php 
                        }
                    ?>

                </div>

<?php 
    include "layouts/footer.php";
?>