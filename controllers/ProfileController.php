<?php
require_once 'models/Profile.php';
class ProfileController {
    public function getFriendInfo() {
        $UserID = $_SESSION['isLoginOk'];
        $Profile = new Profile($UserID);
        $IDFriend = $_GET['UserIDFriend'];
        $friendInfo = $Profile->getFriendInfo($IDFriend);
        $isMySendFriend = $Profile->isMySendFriend($IDFriend);
        $isOtherSendFriend = $Profile->isOtherSendFriend($IDFriend);
        $profileImg = $Profile->getFriendImage($IDFriend );
        $profileFriend = $Profile->getFriendsFriend($IDFriend);
        $profilePost = $Profile->getFriendPost($IDFriend);
        $getProfileImage = $Profile->getAvatar($UserID);
        include_once "views/profile/friend.php";
    }

    public function processFriend() {
        $UserID = $_SESSION['isLoginOk'];
        $Profile = new Profile($UserID);
        $IDFriend = 0;
        if (isset($_POST['removeFriend']) or isset($_POST['addFriend']) or isset($_POST['cancelFriend']) or isset($_POST['acceptFriend'])){
            if (isset($_POST['addFriend'])) {
                $IDFriend = $_POST['addFriend'];
                $Profile->addFriend($IDFriend);
            }
            if (isset($_POST['acceptFriend'])) {
                $IDFriend = $_POST['acceptFriend'];
                $Profile->acceptFriend($IDFriend);
            }
            if (isset($_POST['cancelFriend'])) {
                $IDFriend = $_POST['cancelFriend'];
                $Profile->cancelFriend($IDFriend);
            }
            if (isset($_POST['removeFriend'])) {
                $IDFriend = $_POST['removeFriend'];
                $Profile->removeFriend($IDFriend);
            }
        }
        header("location: index.php?controller=profile&action=getFriendInfo&UserIDFriend= ". $IDFriend ." ");
    }
}