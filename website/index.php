<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
</head>
<body>
    <?php
        $result = file_get_contents("http://node-container:9001/wait_list");
        $wait_list = json_decode($result);
        $image_url='https://static.wixstatic.com/media/a9822b_615f51021d5548e1b18f9a10b5400da5~mv2.png/v1/crop/x_0,y_9,w_400,h_182/fill/w_444,h_202,al_c,lg_1,q_95,enc_auto/a9822b_615f51021d5548e1b18f9a10b5400da5~mv2.png';
    ?>

    <div class="container">
        <img src="<?php echo $image_url;?>"height="140" width="260">
        <table class="table">
            <thead>
                <tr>
                    <th><span style="color: Orange; font-size: 20px;"> Placa </span></th>
                    <th><span style="color: Orange; font-size: 20px;"> Chegada </span></th>
                    <th><span style="color: Orange; font-size: 20px;"> Status </span></th>
                </tr>
            </thead>
        <tbody>
            <?php foreach($wait_list as $wait_list): ?>
            <tr>
                <td><center><?php echo '<span style="color: Darkblue; font-size: 18px;">' . $wait_list->placa .'</span>'; ?></center></td>
                <td><center><?php echo '<span style="color: Darkblue; font-size: 20px;">' . $wait_list->chegada .'</span>'; ?></center></td>
                <td><center><?php echo '<span style="color: Darkblue; font-size: 20px;">' . $wait_list->status .'</span>'; ?></center></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</body>
</html>