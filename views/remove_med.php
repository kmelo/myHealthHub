<form action="removemed.php" method="post">
<fieldset>
   <div class="form-group">
    <label for="symbol">Delete a Medication</label>
    </br>
    <select class="form-control" name="drug">
      <?php foreach ($drugs as $drug): ?>
      <option value="<?= $drug["drugName"]?>"><?= $drug["drugName"]?></option>
      <?php endforeach ?>
    </select>
   </div>
    <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
    </div>
</fieldset>
</form>
