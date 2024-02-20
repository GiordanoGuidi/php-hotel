<tr>
    <td><?= $hotel['name'] ?></td>
    <td><?= $hotel['description'] ?></td>
    <td><?= ($hotel['parking']== 1) ? 'parking' : 'no-parking' ?></td>
    <td><?= $hotel['vote'] ?></td>
    <td><?= $hotel['distance_to_center'] ?></td>     
</tr>