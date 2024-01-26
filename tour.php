<?php
include('tpl/header.php');
include('tpl/nav.php');
?>
<main class="flex">
    <div class="row">
        <div class="col">
            Актуальная информация о туре:
        </div>
    </div>
    <div class="container-fluid">
        <?php
        include("dbconnect.php");

        $label = 'id';
        $id = false;

        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }

        if ($id !== false) {
            // Используем параметризованный запрос для предотвращения SQL-инъекции
            $stmt = $mysqli->prepare("SELECT * FROM tours WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $myrow = $result->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col">
                        <div class="tour">
                            <div class="country">
                                <img src="<?php echo $myrow['photo']; ?>">
                                <p><?php echo $myrow['name']; ?></p>
                                <p><?php echo $myrow['programm']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "Тур не найден";
            }

            $stmt->close();
        } else {
            echo "ID тура не указан";
        }
        ?>
    </div>
</main>
<?php
include('tpl/footer.php');
?>