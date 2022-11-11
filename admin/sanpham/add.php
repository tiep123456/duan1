<!-- nguyenthihuyentrang -->

<!-- nguyenthihuyentrang -->

<div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Thêm Sản Phảm</h3></div>
                                    <div class="card-body">
                                        <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                       
                                                       Chọn Loại Sản Phảm : <br>
                                                        <select name="id_danhmuc" id="">
                                                                <?php
                                                                foreach ($listdm as $danhmuc_sp) {
                                                                    extract($danhmuc_sp);
                                                                    echo '<option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                                                                }
                                                                ?>

                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="ten_sanpham" />
                                                        <label for="inputLastName">Tên Sản Phảm</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            Hình sản phẩm    
                                            <input class="form-control" type="file" placeholder=""name="img" />
                                               
                                               
                                             
                                            </div>

                                            <div class="form-floating mb-3">
                                            Hình chi tiết    
                                            <input class="form-control" type="file" placeholder=""name="list_img" />
                                               
                                               
                                             
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" placeholder="Giá Sản Phảm" name="gia"/>
                                                        <label for="inputPassword">Giá Sản Phảm</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="Giá Sell" name="gia_sell" />
                                                        <label for="inputPasswordConfirm">Giá Sell</label>
                                                    </div>
                                                </div>

                                                <div class="form-floating mb-3">
                                                            Chi tiết sản phẩm: <br>
                                                                <textarea name="chi_tiet" cols="90" rows="8"></textarea>
                                                   
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                            
                                                <div class="d-grid"> <input type="submit" name="themmoi" value="Thêm" class="btn btn-primary btn-block"></div>
                                               
                                            </div>
                                            <?php
                                                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                                ?>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php?act=listsanpham">Danh Sach</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>