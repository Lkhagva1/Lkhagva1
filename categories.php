<?php
include('includes/header.php');
include('function/userfunctions.php') ?>
<div class="py-3 bg-success">
    <div class="container">
        <h6 class="text-white">
            <a class="text-white" href="index.php"> Нүүр хуудас /</a>
            <a class="text-white" href="categories.php">Бүх Ангилал / </a>
        </h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Бүх Ангилал</h1>
                <hr>
                <div class="row">
                    <?php
                    $categories = getAllactive("categories");
                    if (mysqli_num_rows($categories) > 0) {
                        foreach ($categories as $item) {
                    ?>
                            <div class="col-md-3 mb-2">
                                <a href="product.php?category=<?= $item['slug'] ?>">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="uploads/<?= $item['image'] ?>" alt="Category image" class="w-100">
                                            <h4 class="text-center"><?= $item['name'] ?></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>

                    <?php
                        }
                    } else {
                        echo "мэдээлэл байхгүй";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>