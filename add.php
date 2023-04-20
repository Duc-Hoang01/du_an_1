<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI USER</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addtk" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">           
                    <div class="kh-all">
                        <div>
                            <div class="row mb10 kh-one">
                            <strong>Tên tài khoản</strong>   <br>
                                <input type="text" name="tenuser" id="tenuser">
                                <p style="color: red;" id="tenuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <strong>Mật khẩu</strong> <br>
                                <input type="text" name="mkuser" id="mkuser">
                                <p style="color: red;" id="mkuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <strong>Email</strong> <br>
                                <input type="email" name="emailuser" id="emailuser">
                                <p style="color: red;" id="emailuser-err"></p>
                            </div>
                        </div>
                        <div>
                            <div class="row mb10 kh-one">
                            <strong>Địa chỉ</strong> <br>
                                <input type="text" name="aduser" id="aduser">
                                <p style="color: red;" id="aduser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <strong>Số điện thoại</strong>  <br>
                                <input type="number" name="phoneuser" id="phoneuser">
                                <p style="color: red;" id="phoneuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <strong>Loại Tài khoản(1:Admin 0:Khách)</strong>  <br>
                                <input type="number" name="role" id="role">
                                <p style="color: red;" id="role-err"></p>
                                <p style="color: red;" id="role-err2"></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row mb10 mt10" >
                        <input type="submit" class="mr5" name="themmoi" onclick="validateForm()" value="THÊM MỚI">
                        <input type="reset" class="mr5" value="NHẬP LẠI">
                        <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>    
                    </div>
                    <?php
                        if(isset($thongbao) &&($thongbao != "")){
                            echo $thongbao;
                        } 
                    ?>
                </form>
            </div>
    </div>
</div>

