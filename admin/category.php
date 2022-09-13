<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Бүх категори</h4>
                </div>
                <div class="card_body" id="category_table">
                    <table class="table table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Нэр</th>
                                <th>Зураг</th>
                                <th>Status</th>
                                <th>action</th>
                                <th>Устгах</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("categories");
                            if (mysqli_num_rows($category) > 0) {
                                foreach ($category as $item) {
                            ?>
                                    <tr>
                                        <td> <?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td>
                                            <img src="../uploads/<?= $item['image'] ?>" width="50px" height="50px" alt="<?= $item['name'] ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($item['status'] == '0') {
                                            ?>

                                                <span class="badge bg-gradient-success">Амжилттай</span>

                                            <?php
                                            } else {
                                            ?>
                                                <span class="badge bg-gradient-danger">Амжилтгүй

                                                </span>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><a href="update_category.php?id=<?= $item['id']; ?>" class="btn btn-primary">Засах</a>

                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete_category_btn">Устгах</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "no recors found";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php')
?>