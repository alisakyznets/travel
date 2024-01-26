<?php
session_start();
include('tpl/header.php');
include('tpl/nav.php');
?>

<main class="flex">

    <div class="row">

        <div class="col">

            Наши акции

        </div>

    </div>

    <div class="container-fluid">
        <?php
        include("dbconnect.php");
        $result = $mysqli->query("SELECT * FROM tours");
        $div = '<div class="row">';
        $k = 1;
        while ($myrow = $result->fetch_assoc()) {
            $div .= '<div class="col"><div class="tour"><div class="country">';
            $id = $myrow['id'];
            $div .= '<img src=' . $myrow['photo'] . '>';
            $div .= "<p><a href=tour.php?id=$id>" . $myrow['name'] . '</a></p>';
            $div .= '</div></div></div>';
            $k++;
        }
        $div .= '</div>';
        echo $div;
        ?>
    </div>
</main>
<?php
include('tpl/footer.php');
?>