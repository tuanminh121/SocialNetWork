<?php
require_once 'configs/db.php';
class Profile
{
    private $UserID;

    function __construct($UserID)
    {       
        $this->UserID = $UserID;
    }
    // FRIEND_PROFILE
    public function getFriendInfo($FriendID)
    {
        $connection = $this->connectDb();
        $queryProfile = "SELECT * from user_profile where UserID= " . $FriendID . "";
        $result = mysqli_query($connection, $queryProfile);
        if (mysqli_num_rows($result) > 0) {
            $this->closeDb($connection);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }

    public function isMySendFriend($idfriend)
    {
        $connection = $this->connectDb();
        $sql_my_send  = "select * from friend_ship where (User1ID='" . $this->UserID . "' and User2ID='" . $idfriend . "')";
        $result_my_send = mysqli_query($connection, $sql_my_send);
        if (mysqli_num_rows($result_my_send) > 0) {
            $this->closeDb($connection);
            return mysqli_fetch_all($result_my_send, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function isOtherSendFriend($idfriend)
    {
        $connection = $this->connectDb();
        $sql_other_people_send = "select * from friend_ship where (User1ID='" . $idfriend . "' and User2ID='" . $this->UserID . "')";
        $result_other_people_send = mysqli_query($connection, $sql_other_people_send);
        if (mysqli_num_rows($result_other_people_send) > 0) {
            $this->closeDb($connection);
            return mysqli_fetch_all($result_other_people_send, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function addFriend($UserId)
    {
        $connection = $this->connectDb();
        $sql = "select * from friend_ship where (User1ID='" . $this->UserID . "' and User2ID='" . $UserId . "') or (User2ID='" . $this->UserID . "' and User1ID='" . $UserId . "')";
        $result1 = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result1) <= 0) {
            $sql2 = "insert into friend_ship values ('" . $this->UserID . "', '" . $UserId . "', 0)";
            $result2 = mysqli_query($connection, $sql2);
            $this->closeDb($connection);
        }
    }

    public function removeFriend($UserId)
    {
        $connection = $this->connectDb();
        $sql = "delete from friend_ship where (User1ID='" . $this->UserID . "' and User2ID='" . $UserId . "') or (User2ID='" . $this->UserID . "' and User1ID='" . $UserId . "')";
        $result1 = mysqli_query($connection, $sql);
        $this->closeDb($connection);
    }

    public function cancelFriend($UserId)
    {
        $connection = $this->connectDb();
        $sql = "delete from friend_ship where (User1ID='" . $this->UserID . "' and User2ID='" . $UserId . "') or (User2ID='" . $this->UserID . "' and User1ID='" . $UserId . "')";
        $result1 = mysqli_query($connection, $sql);
        $this->closeDb($connection);
    }

    public function acceptFriend($UserId)
    {
        $connection = $this->connectDb();
        $sql = "select * from friend_ship where (User1ID='" . $this->UserID . "' and User2ID='" . $UserId . "') or (User2ID='" . $this->UserID . "' and User1ID='" . $UserId . "')";
        $result1 = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result1) > 0) {
            $sql2 = "UPDATE friend_ship SET Active=1 WHERE (User1ID='" . $this->UserID . "' and User2ID='" . $UserId . "') or (User2ID='" . $this->UserID . "' and User1ID='" . $UserId . "')";
            $result2 = mysqli_query($connection, $sql2);
            $this->closeDb($connection);
        }
    }

// public function
public function connectDb()
{
    $connection = mysqli_connect(
        DB_HOST,
        DB_USERNAME,
        DB_PASSWORD,
        DB_NAME
    );
    if (!$connection) {
        die("Không thể kết nối. Lỗi: " . mysqli_connect_error());
    }

    return $connection;
}
public function closeDb($connection = null)
{
    mysqli_close($connection);
}
}