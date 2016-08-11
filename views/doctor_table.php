<table class="table table-striped">
    <thead>
        <tr>
        <th>Name of Doctor</th>
        <th>Specialty</th>
        <th>Telephone Number</th>
        <th>Office Address</th>
        </tr>
    </thead>
<tbody>
<?php foreach ($doctors as $doctor): ?>
    <tr>
        <td align="left"><?= $doctor["doctorName"] ?></td>
        <td align="left"><?= $doctor["specialty"] ?></td>
        <td align="left"><?= $doctor["number"] ?></td>
        <td align="left"><?= $doctor["address"] ?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
