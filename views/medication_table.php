<table class="table table-striped">
    <thead>
        <tr>
        <th>Name of Drug</th>
        <th>Dose</th>
        <th>Route</th>
        <th>Times Due</th>
        </tr>
    </thead>
<tbody>
<?php foreach ($drugs as $drug): ?>
    <tr>
        <td align="left"><?= $drug["drugName"] ?></td>
        <td align="left"><?= $drug["dose"] ?></td>
        <td align="left"><?= $drug["route"] ?></td>
        <td align="left"><?= $drug["timesDue"] ?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
