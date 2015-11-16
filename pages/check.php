<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/14/15
 * Time: 6:23 PM
 */

require "databaseAndFunctions.php";
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "select * from `note_info` WHERE `topic` = '$id' ORDER BY `title` ASC ";
    $result = mysqli_query($DB, $sql);
    if ($result) {
        echo "<p>Select a Note from the list below.</p>";
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['note_id'];
            $name = $row['title'];
            $link = "./notes.php/?id=$id";
            echo <<< t
                                        <form action="notes.php" method="post">
                                            <input type="hidden" value="$id" name="id">
                                            <input type="submit" value="$name" style="font-size: medium; border: hidden; background: transparent;" onfocus="background-color: #ADADAD">
                                        </form>
t;
        }
    } else {

        echo "<p>No topics available please create one.</p>";
    }
} else {
    $sql = "select * from `note_info` ORDER BY `title` ASC ";
    $result = mysqli_query($DB, $sql);
    if ($result) {
        echo "<p>Select any Note from the list below.</p>";
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['note_id'];
            $name = $row['title'];
            $link = "./notes.php/?id=$id";
            echo <<< t
                                        <form action="notes.php" method="post">
                                            <input type="hidden" value="$id" name="id">
                                            <input type="submit" value="$name" style="font-size: medium; border: hidden; background: transparent;" onfocus="background-color: #ADADAD">
                                        </form>
t;
        }
    }
}

?>