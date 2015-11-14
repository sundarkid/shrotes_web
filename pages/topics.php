<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/14/15
 * Time: 6:23 PM
 */

require "databaseAndFunctions.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from `topic_info` WHERE `category` = '$id' ORDER BY `topic_name` ASC ";
    $result = mysqli_query($DB, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['topic_id'];
            $name = $row['topic_name'];
            $link = "./notes.php/?id=$id";
            echo <<< t
        <br><a href="$link">$name</a></br>
t;
        }
    }
} else {
    echo "will display normal list";
}

?>