<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Категори нэмэх</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Нэр</label>
                                <input type="text" name="name" placeholder="энд категори нэмэх" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label for="">SLug</label>
                                <input type="text" name="slug" placeholder="Slug нэмэх" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label for="">тайлбар</label>
                                <textarea rows="3" name="description" placeholder="тайлбар нэмэх" class="form-control mb-2"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Зураг байршуулах</label>
                                <input type="file" name="image" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta title</label>
                                <input type="text" name="meta_title" placeholder="meta title нэмэх" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label for="">meat description</label>
                                <input type="text" name="meta_description" placeholder="meta description нэмэх" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <label for="">meta keyboards</label>
                                <textarea rows="3" name="meta keyboards" placeholder="meta keyboardss нэмэх" class="form-control mb-2"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Нийтэд харуулахгүй</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6">
                                <label for="">Нийтэд харуулах</label>
                                <input type="checkbox" name="popular">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_category_btn">Хадгалах</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php')
?>