<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
</head>

<?php
include('tpl/header.php');
include('tpl/nav.php');
?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Choose Your Tour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-width: 600px;">
                    <form method="get" action="#" id="orderForm">
                        <div class="form-group">
                            <label for="tourSelect">Выберите тур:</label>
                            <select class="form-control" id="inp1">
                                <option value="Крым" selected>Крым</option>
                                <option value="Кавказ">Кавказ</option>
                                <option value="Алтай">Алтай</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="startDate">Выберите дату начала:</label>
                            <input type="date" class="form-control" id="inp2">
                        </div>
                        <div class="form-group">
                            <label for="participantsNumber">Выберите количество участников:</label>
                            <select class="form-control" id="inp3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Ваш E-mail:</label>
                            <input type="email" class="form-control" id="inp4" required="required">
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <main class="flex">
                    <div class="row">
                        <div class="col">
                            Наши туры
                        </div>
                    </div>
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="tour">
                                    <img src="img/crimea.jpg" class="tour_img">
                                    <p>Это прекрасная возможность отдохнуть всей семьей</p>
                                    <button type="button" class="btn btn-primary"data-bs-toggle="modal"
                                        data-bs-target="#myModal">
                                        Рассчитать стоимость
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="tour">
                                    <img src="img/kavkaz.jpg" class="tour_img">
                                    <p>Море, солнце и горы!</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModal">
                                        Рассчитать стоимость
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="tour">
                                    <img src="img/altay.jpg" class="tour_img">
                                    <p>Незабываемые впечатления!</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModal">
                                        Рассчитать стоимость
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
// Используем jQuery для обработки события submit формы
$('#orderForm').on('submit', function () {
    // Получаем название тура
    let tour = $('#inp1').val();

    // Получаем дату
    let date = new Date($('#inp2').val());

    // Получаем месяц из даты
    let month = date.getMonth();

    // Получаем количество участников тура и преобразуем его в число
    let kol = $('#inp3').val();
    kol = Number(kol);

    // Получаем email
    let email = $('#inp4').val();

    // Выполняем условный расчет стоимости
    let stoim = 0;
    if (tour === 'Крым') {
        if (month >= 5 && month <= 8) {
            stoim = kol * 500;
        } else {
            stoim = kol * 300;
        }
    } else if (tour === 'Кавказ') {
        if ((month >= 12 && month <= 2) || (month >= 5 && month <= 8)) {
            stoim = kol * 300;
        } else {
            stoim = kol * 250;
        }
    } else if (tour === 'Алтай') {
        stoim = kol * 1880;
    }

    // Выводим результат в модальное окно
    alert('Примерная стоимость вашего тура на '+kol+' человек составит '+stoim+' у.е. Мы свяжемся с вами!');
});
</script>
</body>

</html>
<?php
include('tpl/footer.php');
?>