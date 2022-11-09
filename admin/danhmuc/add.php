<div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Thêm Danh Mục
                                    </div>
                                  
                                    <div class="card-body">
                                    <form action="index.php?act=adddm" method="post" class="">
                                    <div class="row"><div class="col-xl-6 col-md-6">
                                <div class="card bg-black text-white mb-4">
                                    <div class="card-body">Mã Loại</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                            <input type="text" name="id_danhmuc" id="inputloai" disabled><br> 
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-black text-white mb-4">
                                    <div class="card-body">Tên Danh Mục</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <input type="text" name="ten_danhmuc" id="inputloai" class=""><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Thêm mới" class="button" name="themmoi">
                                            <input type="reset" value="Nhập lại" class="button">
                                            <br>
                                            <button class=""><a href="index.php?act=listdm" >Danh Sách Danh Mục</a></button>
                                       
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                                            ?>    
                    </form>      </div>
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

