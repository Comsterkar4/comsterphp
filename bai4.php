<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập mảng số</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Nhập mảng số</h2>

    <form method="post" action="">
        <label for="soluong">Nhập số lượng phần tử:</label>
        <input type="number" id="soluong" name="soluong" min="1" required>
        <input type="submit" name="submit_soluong" value="Xác nhận">
    </form>

    <?php
    if (isset($_POST['submit_soluong'])) {
        $soluong = $_POST['soluong'];
        echo '<h3>Nhập các giá trị:</h3>';
        echo '<form method="post" action="">';
        echo '<table><tr>';

        for ($i = 1; $i <= $soluong; $i++) {
            echo '<td><input type="number" name="so[]" required></td>';
            if ($i % 5 == 0) {
                echo '</tr><tr>'; // Chuyển dòng sau mỗi 5 ô
            }
        }

        echo '</tr></table>';
        echo '<br><input type="submit" name="submit_mang" value="Gửi">';
        echo '</form>';
    }

    if (isset($_POST['submit_mang'])) {
        $mang_so = $_POST['so'];

        echo "<h3>Kết quả:</h3>";
        echo "<p>Mảng đã nhập: " . implode(", ", $mang_so) . "</p>";
    }
    ?>
</body>
</html>
