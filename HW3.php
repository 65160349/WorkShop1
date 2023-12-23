<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1 style="text-align: center;">ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div style="width: 200px; height: 265px; overflow: auto; margin: 0 auto; text-align: center; font-size: 20px">
        <table style="margin: auto;">
            <tbody>
                <?php for ($i = 1; $i <= 24; $i++) : ?>
                    <tr>
                        <td><?php echo $multi_x ?></td>
                        <td>x</td>
                        <td><?php echo $i ?></td>
                        <td>=</td>
                        <td><?php echo $multi_x * $i ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <style>
        h1{
            padding: 20px;
            text-shadow: 2px 3px 6px rgba(185, 167, 167, 1);
        }
        body{
            background-color: #ffffff;
            background-image: url('https://a-static.besthdwallpaper.com/beautiful-mountain-nature-wallpaper-1280x720-80752_45.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            
            
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
            backdrop-filter: blur(7px);
            background-color: rgba(255, 255, 255, 0.4);;
            
        }

        td {
            text-align: center;
            padding: 5px;
            border: 0px solid #ccc;
        }
    </style>
</body>

</html>
