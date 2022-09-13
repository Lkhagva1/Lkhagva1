<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $category = getByID("categories", $id);
                if (mysqli_num_rows($category) > 0) {
                    $data = mysqli_fetch_array($category);
            ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Категори шинэчлэх
                                <a href="category.php" class="btn btn-primary float-end">буцах</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="category_id" value="<?= $data['id'] ?> ">
                                        <label for="">Нэр</label>
                                        <input type=" text" name="name" value="<?= $data['name'] ?> " placeholder="энд категори нэмэх" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">SLug</label>
                                        <input type="text" name="slug" value="<?= $data['slug'] ?> " placeholder="Slug нэмэх" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">тайлбар</label>
                                        <textarea rows="3" name="description" placeholder="тайлбар нэмэх" class="form-control"><?= $data['description'] ?> </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Зураг байршуулах</label>
                                        <input type="file" name="image" class="form-control">
                                        <label for="">шинэ зураг</label>
                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                        <img src="../uploads/<?= $data['image'] ?>" height="50px" width="50px" alt="бүтээгдэхүүний зураг">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta title</label>
                                        <input type="text" name="meta_title" value="<?= $data['meta_title'] ?> " placeholder="meta title нэмэх" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">meat description</label>
                                        <textarea type="text" name="meta_description" placeholder="meta description нэмэх" class="form-control"><?= $data['meta_description'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">meta keyboards</label>
                                        <textarea rows="3" name="meta_keyboards" placeholder="meta keyboardss нэмэх" class="form-control"><?= $data['meta_keyboards'] ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Нийтэд харуулахгүй</label>
                                        <input type="checkbox" <?= $data['status'] ? "checked" : "" ?> name="status">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Нийтэд харуулах</label>
                                        <input type="checkbox" <?= $data['popular'] ? "checked" : "" ?> name="popular">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_category_btn">шинэчлэх</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            <?php
                } else {
                    echo "өгөгдсөн ID-д зориулсан бүтээгдэхүүн олдсонгүй";
                }
            } else {
                echo "url-д id дутуу байна";
            }
            ?>
        </div>
    </div>
</div>
<?php include('includes/footer.php')
?>