<tr>
    <td><?php echo $Product->id; ?></td>
    <td><img src='<?php echo $Product->Image_Source(); ?>' alt='<?php echo $Product->name; ?>' width='50px'/></td>
    <td><?php echo $Product->name; ?></td>
    <td><?php echo $Product->catg; ?></td>
    <td><?php echo $Product->price_component; ?></td>
    <td><?php echo $Product->Price_Fromated(); ?>ریال</td>
    <td><a href='' class='ajaxWorkerLink'><i class='fas fa-trash'></i></a></td>
    <td><a href=''><i class='fas fa-edit'></i></a></td>
</tr>