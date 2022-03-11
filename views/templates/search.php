<main id="search-main">
    <div class=" search-result">
        <p style="margin-bottom: 50px;font-size:40px">Kết quả tìm kiếm</p>
    </div>
    <div class="row search-results" style="margin-top: 100px;">
<?php
            if($users)
            foreach($users as $row_search){
                if($row_search['UserID'] == $UserID){
?>
        <a class="col-md-12 search-result-item" href="index.php?controller=profile&action=index">
            <div class="icon">
                <img class="user-img" src="<?php echo $row_search['UserAva']?>" alt="">
            </div>
            <div class="text">
                <b style="font-size: 20px;"><?php echo $row_search['UserName'] ?></b>
                
            </div>
        </a>
        <hr style="margin: 0px">
<?php
                }
                else{
?>
        <a class="col-md-12 search-result-item" href="index.php?controller=profile&action=getFriendInfo&UserIDFriend=<?php echo $row_search['UserID'];?>">
            <div class="icon">
                <img class="user-img" src="<?php echo $row_search['UserAva']?>" alt="">
            </div>
            <div class="text">
                <b><?php echo $row_search['UserName'] ?></b>
            </div>
        </a>
        <hr style="margin: 0px">
<?php
                }
            }
?>
    </div>
</main>