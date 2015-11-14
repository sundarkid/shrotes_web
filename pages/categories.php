<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/14/15
 * Time: 5:44 PM
 */

require "databaseAndFunctions.php";

$sql = "select * from `category_info` ORDER BY `category_name` ASC ";

$result = mysqli_query($DB, $sql);
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['category_id'];
        $name = $row['category_name'];
        $link = "./topics.php/?id=$id";
        echo <<< t
        <br><a href="$link">$name</a></br>
t;

    }

}
?>