<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        #submit {
            padding: 6px 33px;
            margin-top: 24px;
            background-color: yellow;
        }

        .container-form {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            /* Canh giữa theo chiều ngang */
            align-items: center;
            /* Canh giữa theo chiều dọc */
            font-family: Arial, sans-serif;
        }
        .container-form > form {
            border: 2px solid black;
            padding: 25px;
        }
        .result{
            border: 2px solid black;
    margin-top: 40px;
    padding: 15px;
        }
    </style>
    <div class="container-form">
        <form action="" method="post">
            <h1>Bài tập định dạng ngày</h1>
            <label for="ngay">Nhập ngày:</label>
            <input type="text" id="ngay" name="date" placeholder="dd/MM/yyyy" required><br>
            <input id="submit" type="submit" value="Gửi" />
        </form>
    </div>
    <?php
    if ($_POST['date']) {
        $arr = explode("/", $_POST['date']);
        if (count($arr) == 3) {
            $date_time = DateTime::createFromFormat('d/m/Y', $_POST['date']);
            if ($date_time) {
                //tao format B
                $formatb = $date_time->format('l, F d, Y');
            } else {
                echo "loi tao khong thanh cong";
            }
            echo "<div class='result'>";
            echo "<h2> Kết quả</h3>";
            echo "Ngày đã nhập: " . $_POST['date'] . "<br>";
            echo "a. Ngày " . $arr[0] . " tháng " . $arr[1] . " năm " . $arr[2] . "</br>";
            echo "b. " . $formatb;
            echo "</div>";
        }
    }
    ?>

</body>

</html>