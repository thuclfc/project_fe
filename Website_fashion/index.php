<?php include ('./header.php')?>
  <section>
      <div class="header-modules">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="fluid_container">
                          <div class="sliders">
                              <?php
                              $sql_slider="SELECT name, src_img, year, link FROM slider";
                              $result_slider = mysqli_query($conn,$sql_slider);
                              $dem=1;
                              while($row_slider = mysqli_fetch_array($result_slider))
                              {
                                  echo "<div class=\"item\">";
                                  echo "<img src='$row_slider[1]'>";
                                  echo "<div class=\"camera_caption fadeIn\" >
                                     <h3>$row_slider[0]</h3>
                                     <h3>$row_slider[2]</h3>
                                     <a href='$row_slider[3]'>MUA NGAY</a>       
                                 </div>";
                                  echo "</div>";
                                  $dem++;
                              }
                              ?>
                          </div>
                          <ul class="pag"></ul>
                          <div class="nav">
                              <a href="javascript:void(0)" class="prev">prev</a>
                              <a href="javascript:void(0)" class="next">next</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12" id="content">
                      <div class="box featured">
                          <?php include("modules/sanpham_moi.php"); ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
 <?php include ('./footer.php')?>