<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .result {
            text-align: center;
            border: 1px solid blue;
            margin-top: 25px;
        }
        #s1,
        #s2 {
            margin-top: 25px;
            padding: 0px 35px;
            border: 1px solid blue;
        }
        form {
            border: 1px solid blue;
            padding: 12px;
        }
        form>h2 {
            text-align: center;
        }
        input {
            margin-left: 20px;
        }
        .lc {
            display: flex;
        }
    </style>
    <div class="container">
        <div class="container-first">
            <form action="" method="post">
                <h2>phép tính</h2>
                số thứ 1: <input type="text" name="s1" id="s1" /><br>
                số thứ 2: <input type="text" name="s2" id="s2" />
                <div class="pheptinh">
                    <p>chọn phép tính</p><br>
                    <div class="lc">
                        <input type="radio" id="" name="pheptinh" value="cong">
                        <label for="">Cộng</label><br>
                        <input type="radio" id="" name="pheptinh" value="tru">
                        <label for="">Trừ</label><br>
                        <input type="radio" id="" name="pheptinh" value="nhan">
                        <label for="">Nhân </label><br>
                        <input type="radio" id="" name="pheptinh" value="chia">
                        <label for="">Chia</label>
                    </div>
                    <input style="margin-top: 15px;" type="submit" value="Tính" />
                </div>
            </form>
            <?php
            $arr = array(
                "cong" => "Cộng",
                "tru" => "Trừ",
                "nhan" => "Nhân",
                "chia" => "Chia"
            );
            if (isset($_POST['s1']) && isset($_POST['s2']) && $_POST['pheptinh']) {
                $s1 = $_POST['s1'];
                $s2 = $_POST['s2'];
                $a = $_POST['pheptinh'];
                echo "<div class='result'>";
                echo "<h2>Kết quả</h3>";
                switch ($a):
                    case "cong":
                        echo "Tổng 2 số " . $s1 . " và " . $s2 . " là " . ($s1 + $s2);
                        break;
                    case "tru":
                        echo "tổng 2 số " . $s1 . " và " . $s2 . " là " . ($s1 - $s2);
                        break;
                    case "nhan":
                        echo "Tổng 2 số " . $s1 . " và " . $s2 . " là " . ($s1 * $s2);
                        break;
                    case "chia":
                        if ($s2 != 0) echo "Tổng 2 số " . $s1 . " và " . $s2 . " là " . ($s1 / $s2);
                        else echo "Số thứ 2 phải khác 0";
                        break;
                endswitch;
                echo "<?div>";
            } else {
                echo "Vui lòng nhập đầy đ�� thông tin";
            }
            ?>
        </div>
    </div>
</body>

</html>