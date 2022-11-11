

<div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                       Thêm Danh Mục
                                    </div>
                                    <div class="card-body">
                                    <form action="index.php?act=adddm" method="post" class="">
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" placeholder="Mã Loại" name="id_danhmuc" id="inputloai" disabled/>
                                                <label for="inputEmail">Mã Loại</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" type="text" placeholder="Tên Loại" type="text" name="ten_danhmuc" id="inputloai" />
                                                <label for="inputPassword">Tên Loại</label>
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                            
                                            <input type="submit" value="Thêm mới" class="button btn btn-primary" name="themmoi">
                                            <input type="reset" value="Nhập lại " class="button button btn btn-primary">
                                            <br>
                                            <button class="button btn "><a href="index.php?act=listdm" >Danh Sách Danh Mục</a></button>
                                       
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                            ?>    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Những Danh Mục Được Thêm
                                    </div>
                                    <div class="card-body">
                                        Lưu ý Chỉ Được Thêm Danh Mục Là Thực Phảm
                                    </div>
                                </div>
                            </div>
</div>