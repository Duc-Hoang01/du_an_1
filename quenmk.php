<div class="container">
<div class="row mb">
<div class="boxtrai mr">  
    <div class="row mb">
           
            <div class="boxtitle row">
                <h1 class="spct text-size ">QUÊN TÀI KHOẢN</h1>
            </div>
            <div class="boxcontent row formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb">
                        Email
                        <input type="email" name="email" id="email" required>
                    </div>
                    
                    <div class="">
                        <input style="height: 30px;width: 100px;border-radius: 10px 10px; border: 1px solid;" type="submit" value="Xác nhận" name="guiemail">
                        <input style="height: 30px;width: 100px;border-radius: 10px 10px; border: 1px solid;" type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                        if(isset($thongbao) && ($thongbao != "")){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
        
        
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"?>;
    </div>
</div>
</div>