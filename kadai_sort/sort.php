<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
            $nums = [15, 4, 18, 23, 10];

            function sort_2way($nums, int $order) {
                if ($order === 1) {
                    echo "昇順にソートします<br>";
                    sort($nums);
                    foreach($nums as $num) {
                        echo "{$num}<br>";
                    }
                } else {
                    echo "降順にソートします<br>";
                    rsort($nums);
                    foreach($nums as $num) {
                        echo "{$num}<br>";
                    }
                }
            } 

            sort_2way($nums, 1);
            sort_2way($nums, 0);
        ?>
    </p>
</body>
</html>