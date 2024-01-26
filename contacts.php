<?php
session_start();
include('tpl/header.php');
include('tpl/nav.php');
?>

    <div id="main">
        <p>Наш адрес: г. Белогорск, ул. Ракетная, 18.</p>
        <form method="get" action="#">
            <table id="tours">
                <?php
                include("dbconnect.php");
                $result = $mysqli->query("SELECT * FROM remarks");
                echo "<table align= 'center'; style='margin-bottom:15px'>";
                while ($myrow = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td style='border: 1px solid black; padding: 15px;'>" . $myrow['tema'] . "</td>";
                    echo "<td style='border: 1px solid black; padding: 15px;'>" . $myrow['text'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </table>
        </form>
    </div>
    <?php
include('tpl/footer.php');
?>
