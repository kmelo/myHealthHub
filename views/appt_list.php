<table class="table table-striped">
    <thead>
        <tr>
        <th>Name of Doctor</th>
        <th>Date of Appointment</th>
        <th>Time of Appointment</th>
        </tr>
    </thead>
<tbody>
<?php foreach ($appointments as $appointment): ?>
    <tr>
        <td align="left"><?= $appointment["doctor"] ?></td>
        <td align="left"><?= $appointment["apptDate"] ?></td>
        <td align="left"><?= $appointment["time"] ?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
