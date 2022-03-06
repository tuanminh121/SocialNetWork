<?php
$UserIDFriend = $_GET['UserIDFriend'];
foreach ($friendInfo as $frdInfo) {
?>
  <main>
    <!-- Section: white bg -->
    <section class="bg-white mb-4 shadow-2">
      <div class="container">
        <!-- Section: images -->
        <section class="mb-10">
          <!-- Background image -->
          <div class="p-5 text-center bg-image shadow-1-strong rounded-bottom" style="
                background-image: url('assets/images/sky.jpg');
                height: 250px;
              " onclick="clickImg('assets/images/sky.jpg')"></div>

          <div class="d-flex justify-content-center">
            <img src=<?php echo "'" . $frdInfo['UserAva'] . "'" ?> alt="" class="
                  rounded-circle
                  shadow-3-strong
                  position-absolute
                  border border-white
                " id="avatarImg" style="width: 180px;height:180px; margin-top: -60px" onclick="clickImg('<?php echo $frdInfo['UserAva'] ?>')" />
          </div>
          <!-- Background image -->
        </section>
        <!-- Section: images -->

        <!-- Section: user data -->
        <section class="text-center border-bottom">
          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <h2><strong><?php echo $frdInfo['UserFirstName']. " " . $frdInfo['UserLastName'] ?></strong></h2>
              <p class="text-muted">
                <?php echo $frdInfo['Description'] ?>
              </p>
            </div>
          </div>
        </section>
        <!-- Section: user data -->

        <!-- Section buttons -->
        <section class="py-2 d-flex justify-content-between">
          <!-- left -->
          <div>
            <button type="button" class="btn btn-link bg-light" datadata-ripple-color="dark"  onclick="document.location.href='index.php?controller=profile&action=getFriendInfo&UserID=<?php echo $frdInfo['UserID'] ?>'">
              Bài viết
            </button>
            <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewGioiThieu&UserID=<?php echo $frdInfo['UserID'] ?>'">
              Giới thiệu
            </button>
            <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewFriend&UserID=<?php echo $frdInfo['UserID'] ?>'">
              Bạn bè
            </button>
            <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewImage&UserID=<?php echo $frdInfo['UserID'] ?>'">
              Ảnh
            </button>
            <button type="button" class="btn btn-link text-reset" datadata-ripple-color="dark" onclick="document.location.href='index.php?controller=profile&action=viewVideo&UserID=<?php echo $frdInfo['UserID'] ?>'">
              Video
            </button>
            <div class="dropdown d-inline-block">
              <button class="btn btn-link dropdown-toggle text-reset" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                Xem thêm
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCEgdi0XIXXZ-qJOFPf4JSKw" target="_blank">Thể thao</a></li>
                <li><a class="dropdown-item" href="https://www.youtube.com/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ" target="_blank">Âm nhạc</a></li>
                <li><a class="dropdown-item" href="https://www.youtube.com/feed/trending?bp=6gQJRkVleHBsb3Jl" target="_blank">Giải trí</a></li>
              </ul>
            </div>
          </div>
          <!-- left -->

          <!-- right -->
          <div style="display: flex">
            <?php
            if ($isMySendFriend && !$isOtherSendFriend) {
              foreach ($isMySendFriend as $mysendF) {
                if ($mysendF['Active'] == 1) {
                  echo "
                  <form class='mr-2' method='post' action='index.php?controller=profile&action=processFriend'>
                    <button name='removeFriend' type='submit' value='" . $frdInfo['UserID'] . "' class='btn btn-danger mr-2 hover_link' data-mdb-ripple-color='dark'>
                      <i class='fas fa-user-times'></i> Xóa bạn bè
                    </button>
                  </form>";
                } else {
                  echo "
                  <form class='mr-2' method='post' action='index.php?controller=profile&action=processFriend'>
                    <button name='cancelFriend' type='submit' value='" . $frdInfo['UserID'] . "' class='btn btn-warning mr-2 hover_link' data-mdb-ripple-color='dark'>
                      <i class='fas fa-user-slash'></i> Hủy kết bạn
                    </button>
                  </form>";
                }
              }
            } else if (!$isMySendFriend && $isOtherSendFriend) {
              foreach ($isOtherSendFriend as $othersendF) {
                if ($othersendF['Active'] == 0) {
                  echo "
                <form class='mr-2' method='post' action='index.php?controller=profile&action=processFriend'>
                  <button name='acceptFriend' type='submit' value='" . $frdInfo['UserID'] . "' class='btn btn-success mr-2 hover_link' data-mdb-ripple-color='dark'>
                    <i class='fas fa-user-check'></i> Đồng ý kết bạn
                  </button>
                  <button name='cancelFriend' type='submit' value='" . $frdInfo['UserID'] . "' class='btn btn-danger mr-2 hover_link' data-mdb-ripple-color='dark'>
                    <i class='fas fa-user-times'></i> Hủy kết bạn
                  </button>
                </form>";
                } else {
                  echo "
                  <form class='mr-2' method='post' action='index.php?controller=profile&action=processFriend'>
                    <button name='removeFriend' type='submit' value='" . $frdInfo['UserID'] . "' class='btn btn-danger mr-2 hover_link' data-mdb-ripple-color='dark'>
                      <i class='fas fa-user-times'></i> Xóa bạn bè
                    </button>
                  </form>";
                }
              }
            } else {
              echo "
                <form class='mr-2' method='post' action='index.php?controller=profile&action=processFriend'>
                  <button name='addFriend' type='submit' value='" . $frdInfo['UserID'] . "' class='btn btn-info mr-2 hover_link' data-mdb-ripple-color='dark'>
                    <i class='fas fa-user-plus'></i> Kết bạn
                  </button>
                </form>";
            }
            ?>
           
          </div>
          <!-- right -->
        </section>
        <!-- Section buttons -->
      </div>
    </section>
    <!-- Section: white bg -->

    <!-- Section grey bg -->
    <section>
      <div class="container">
        <div class="row">
          <!-- left -->
          <div class="col-md-5 mb-4 mb-md-0">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title mt"><strong>Giới thiệu</strong></h5>
                <ul class="list-unstyled text-muted mt-3">
                  <li>
                    <i class="fas fa-house-damage me-2 mt-3"></i>Sống tại
                    <a href="https://vi.wikipedia.org/wiki/H%C3%A0_N%E1%BB%99i"><strong><?php echo $frdInfo['UserAddress'] ?></strong></a>
                  </li>
                  <li>
                    <i class="fas fa-map-marker-alt me-2 mt-3"></i>Đến từ
                    <a href="https://vi.wikipedia.org/wiki/H%C3%A0_N%E1%BB%99i"><strong><?php echo $frdInfo['UserAddress'] ?></strong></a>
                  </li>
                  <li>
                    <i class="fab fa-github me-2 mt-3"></i><a href="https://github.com/VuNgN/facebook">https://github.com/VuNgN/facebook</a>
                  </li>
                </ul>
                <div class="lightbox mt-4">
                  <div class="row gx-2">
                    <div class="col-lg-4 mb-3">
                      <img src="assets/images_dev/aot_01.jpg" alt="" class="w-100 shadow-1-strong rounded" />
                    </div>
                    <div class="col-lg-4 mb-3">
                      <img src="assets/images_dev/aot_02.jpg" alt="" class="w-100 shadow-1-strong rounded" />
                    </div>
                    <div class="col-lg-4 mb-3">
                      <img src="assets/images_dev/aot_03.jpg" alt="" class="w-100 shadow-1-strong rounded" />
                    </div>

                    <div class="col-lg-4 mb-3">
                      <img src="assets/images_dev/aot_02.jpg" alt="" class="w-100 shadow-1-strong rounded" />
                    </div>
                    <div class="col-lg-4 mb-3">
                      <img src="assets/images_dev/aot_03.jpg" alt="" class="w-100 shadow-1-strong rounded" />
                    </div>
                    <div class="col-lg-4 mb-3">
                      <img src="assets/images_dev/aot_01.jpg" alt="" class="w-100 shadow-1-strong rounded" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ảnh feature -->
            <div class="card mb-3">
              <div class="card-body">
                <a href="" class="text-reset d-inline-block">
                  <h5 class="card-title mt"><strong>Ảnh</strong></h5>
                </a>
                <a href="index.php?controller=profile&action=viewImage&UserID=<?php echo $frdInfo['UserID'] ?>" class="btn btn-link d-inline-block py-1 px-3" style="float: right">Xem tất cả ảnh</a>
                <?php
            $count = 0;
            if ($profileImg)
              foreach ($profileImg as $row_img) {
                // global $row_img;
                if ($count % 3 == 0) {
                  echo '<div class="row gx-2">'; // open
                }
            ?>
              <div class="col-lg-4 mb-3">
                <a href="<?php echo $row_img['images'] ?>" target="_blank">
                  <img src="<?php echo $row_img['images'] ?>" alt="" onclick="clickImg('<?php echo $row_img['images'] ?>')" class="w-100 shadow-1-strong rounded" style="height: 100px;" />
                </a>
              </div>
            <?php
                if ($count % 3 == 2 || $count == count($profileImg) - 1) {
                  echo '</div>'; // close
                }
                $count++;
              }
            ?>
              </div>
            </div>
            <!-- ảnh feature -->
            <!-- friends -->
            <div class="card mb-3">
              <div class="card-body">
                <?php
                  $count = 0;
                  $countFriend = 0;
                  if ($profileFriend)
                    foreach ($profileFriend as $rowFriends) {
                      $countFriend += $rowFriends["countFriend"]; 
                    }
                    ?>
                    <div class='card_left d-inline-block'>
                      <a href='' class='text-reset'>
                        <h5 class='card-title mt'><strong>Bạn bè</strong></h5>
                      </a>
                      <p class='friend_numbers'><?php echo $countFriend ?> người bạn</p>
                    </div>
                    <div class='card_right d-inline-block' style='float: right'>
                      <a href='index.php?controller=profile&action=viewFriend&UserID=<?php echo $frdInfo['UserID'] ?>' class='btn btn-link py-1 px-3'>Xem tất cả bạn bè</a>
                    </div>
                    <?php
                    if ($profileFriend)
                    foreach ($profileFriend as $rowFriends) {
                      if ($count % 3 == 0) {
                        echo '<div class="row">';
                      }
                      echo '<div class="col-md-4 text-center">';
                      echo '<img src="' . $rowFriends['UserAva'] . '" alt="" class="shadow-1-strong rounded" style="width: 75px; height: 75px;"/>';
                      echo '<p><small>' . $rowFriends['UserFirstName'] . " " . $rowFriends['UserLastName'] . '</small></p>';
                      echo '</div>';
                      if ($count % 3 == 2 ||  $count == count($profileFriend) - 1) {
                        echo '</div>';
                      }
                      $count++;
                    }
                  ?>
              </div>
            </div>
            <!-- friends -->
            <!-- footer -->
          
            <!-- footer -->
          </div>
          <!-- rightt -->
       
      </div>
    </section>
    <!-- Section grey bg -->
  </main>
<?php } ?>
<script type="text/javascript" src="assets/js/mdb/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>

</html>