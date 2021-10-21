<?php
// pengkondisian / percabangan
// if else
$x = 10;
if ($x < 20) {
    echo "benar";
} else {
    echo "salah";
}
// if else if
$x = 10;
if ($x < 20) {
    echo "benar";
} else if ($x == 20) {
    echo "bingo!!!";
} else {
    echo "salah";
}
//  ternary
$x = 10;
echo  $x < 20 ? "benar" : "salah";
// switch
$k = 30;
switch ($k) {
    case 10:
    case 20:
        echo "Benar";
        break;
    case 30:
        echo "Salah";
        break;
    default:
        echo "anda memasukkan angka yang salah";
        break;
}

?>
<DOCTYPE html>
    <html>

    <head>
        <title></title>
        <style>
        .warnaBackground {
            background-color: silver;
        }
        </style>
    </head>

    <body>

        <table border="1" ; cellspacing="0" ; cellpadding="10" ;>
            <!-- gaya templeting -->
            <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
            <tr class="warnaBackground" ;>
                <?php else : ?>
            <tr>
                <?php endif; ?>
                <?php for ($j = 0; $j < 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </body>

    </html>