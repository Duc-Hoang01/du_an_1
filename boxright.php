
                   
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php 
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    
                                    $linkdm = "index.php?act=sanpham&iddm=".$id; 
                                    
                                    echo '
                                        <li><a href="'.$linkdm.'">'.$name.'</a></li>
                                    ';
                                }
                            ?>
                            
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form class="formtkiem" action="index.php?act=sanpham" method="post">
                            <input class="mb5" type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm" required>
                            <input type="submit" name="timkiem" value="Search">
                        </form>
                    </div>
                </div>
                
               
                