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
                $product = getByID("products", $id);
                if (mysqli_num_rows($product) > 0) {
                    $data = mysqli_fetch_array($product);
            ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Бүтээгдэхүүн шинэчлэх
                                <a href="product.php" class="btn btn-primary float-end">буцах</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">категори сонгох</label>
                                        <select name="category_id" class="form-select">
                                            <option selected>категори сонгох</option>
                                            <?php
                                            $categories = getAll("categories");
                                            if (mysqli_num_rows($categories) > 0) {
                                                foreach ($categories as $item) {
                                            ?>
                                                    <option value="<?= $item['id'] ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : '' ?>><?= $item['name'] ?></option>
                                            <?php
                                                }
                                            } else {
                                                echo "категори байхгүй байна";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?= $data['id'] ?> ">
                                    <div class="col-md-6">
                                        <label for="">Нэр</label>
                                        <input type="text" required name="name" value="<?= $data['name']; ?>" placeholder="энд категори нэмэх" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">SLug</label>
                                        <input type="text" required name="slug" value="<?= $data['slug']; ?>" placeholder="Slug нэмэх" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Тайлбар</label>
                                        <textarea rows="3" required name="small_description" placeholder="тайлбар нэмэх" class="form-control mb-2"><?= $data['small_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Тайлбар</label>
                                        <textarea rows="3" required name="description" placeholder="тайлбар нэмэх" class="form-control mb-2"><?= $data['description']; ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Анхны үнэ</label>
                                        <input type="text" required name="original_price" value="<?= $data['original_price']; ?>" placeholder="үнээ оруулна уу" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Хямдралтай үнэ</label>
                                        <input type="text" required name="selling_price" value="<?= $data['selling_price']; ?>" placeholder="хямдралтай үнээ оруулна уу" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Зураг байршуулах</label>
                                        <input type="file" name="image" class="form-control mb-2">
                                        <label for="">сүүлийн зураг</label>
                                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                        <img src="../uploads/<?= $data['image'] ?>" height="50px" width="50px" alt="<?= $data['name'] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Тоо ширхэг</label>
                                            <input type="number" required required name="qty" value="<?= $data['qty']; ?>" placeholder="Тоо ширхэг оруулна уу" class="form-control mb-2">
                                        </div>
                                        <div class="col-md-3 mt-5">
                                            <label for="">Нийтэд харуулах</label>
                                            <input type="checkbox" name="status" <?= $data['status'] ? "checked" : "" ?>>
                                        </div>
                                        <div class="col-md-3 mt-5">
                                            <label for="">чиг хандлагатай</label>
                                            <input type="checkbox" name="trending" <?= $data['trending'] ? "checked" : "" ?>>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta title</label>
                                        <input type="text" required name="meta_title" value="<?= $data['meta_title']; ?>" placeholder="meta title нэмэх" class="form-control mb-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta description</label>
                                        <textarea type="text" required name="meta_description" placeholder="meta description нэмэх" class="form-control mb-2"><?= $data['meta_description']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta keyboards</label>
                                        <textarea rows="3" required name="meta_keyboards" placeholder="meta keyboardss нэмэх" class="form-control mb-2"><?= $data['meta_keyboards']; ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_product_btn">Хадгалах</button>
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