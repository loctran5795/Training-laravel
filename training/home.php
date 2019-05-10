<?php require_once('db.php') ?>
<?php require_once('head.php') ?>
<?php require_once('header.php') ?>
<?php 

if(isset($_GET['logout'])) {
    unset($_SESSION["id"]);
    header("location: /welcome.php");
}

if(!isset($_SESSION['id'])) {
    header("location: /welcome.php");
} else {
    $notice = $_SESSION['id'];
    // unset($_SESSION["id"]);
}


$sql = "SELECT * FROM posts ORDER BY id DESC";
$resuft = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($resuft,MYSQLI_ASSOC);

// return $posts;

?>


<section class="content">
    <!-- <div>
        <?= $notice?>
        <?= Helper::currentUsers()['email']; ?>
    </div> -->
    
</section>
<hr>
<div class="container">
    <div class="row">
        <div class="col-6 col-md-4 pr-0">
            <div class="card text-white">
                <img src="./images/pexels-photo-132472.jpeg" style="height:390px;" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col-4 d-none d-md-block pl-0">
            <div class="card text-white">
                <img src="./images/pexels-photo-1382734.jpeg" style="height:390px;" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4" style="height: auto;">
            <ul class="list-group" style="height: auto;">
                <li class="list-group-item bg-light"><p class="a">Hot News</p></li>
                <li class="list-group-item">
                    <p class="a">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </li>
                <li class="list-group-item">
                    <p class="a">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </li>
                <li class="list-group-item">
                    <p class="a">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </li>
                <li class="list-group-item">
                    <p class="a">Cupiditate fuga illum quaerat!
                    </p>
                </li>
                <li class="list-group-item">
                    <p class="a">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <hr>
</div>
<div class="container">
    <div class="row justify-content-between pr-4 pl-4">
        <button class="btn btn-success">Feature</button>
        <a href="#" class="text-muted">MORE ></a> 
    </div>
    <div class="row p-2">
        <div class="col-6 col-md-4 d-flex flex-grow-1 flex-column justify-content-between">
            <div class="card mb-3 flex-grow-1">
                <img src="./images/pexels-photo-556666.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
            <div class="card d-none d-md-flex flex-grow-1">
                <img src="./images/pexels-photo-870711.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
        </div>
        <div class="col-6 col-md-4 d-flex flex-grow-1 flex-column justify-content-between">
            <div class="card mb-3 flex-grow-1">
                <img src="./images/8.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
            <div class="card d-none d-md-flex flex-grow-1">
                <img src="./images/7.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
        </div>
        <div class="col-4 d-none d-md-flex">
            <div class="card">
                <img src="./images/pexels-photo-1382734.jpeg" style="height: 360px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="container">
    <div class="row justify-content-between pr-4 pl-4">
        <button class="btn btn-danger">Hot</button>
        <a href="#" class="text-muted">MORE ></a> 
    </div>
    <div class="row p-2">
        <div class="col-4 d-none d-md-flex">
            <div class="card">
                <img src="./images/pexels-photo-449627.jpeg" style="height: 360px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card mb-3">
                <img src="/images/pexels-photo-478544.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
            <div class="card d-none d-md-flex">
                <img src="./images/pexels-photo-1659438.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card mb-3">
                <img src="./images/pexels-photo-132472.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
            <div class="card d-none d-md-flex">
                <img src="./images/pexels-photo-1382734.jpeg" style="height: 200px;" alt="1223">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="a card-text">Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam doliniti, rerum sunt obcaecait provident quam espernatur suscipit qui pariatur nisi nihill soluta.
                    </p>
                </div>
                <div class="card-footer bg-light">Last updated 3 min ago.</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="post_parent">
        <?php foreach ($posts as $key => $post) : ?>
            <div class="newPost">
                <div class="card">
                    <img src="/images-post/<?=  $post["image_post"]; ?>" alt="1223">
                    <div class="card-body">
                        <a href="/content-post.php?id=<?= $post['id'] ?>"><?=  $post["description"]; ?></a>
                        <p class="card-text"><?=  $post["title"]; ?>
                        </p>
                    </div>
                    <div class="card-footer bg-light">post by <?=  Helper::getUser($post['account_id'])['name'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once('footer.php') ?>