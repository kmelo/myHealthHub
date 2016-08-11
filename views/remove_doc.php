<form action="removedocs.php" method="post">
<fieldset>
   <div class="form-group">
    <label for="symbol">Remove a Doctor</label>
    </br>
    <select class="form-control" name="doctorName">
      <?php foreach ($doctors as $doctor): ?>
      <option value="<?= $doctor["doctorName"]?>"><?= $doctor["doctorName"]?></option>
      <?php endforeach ?>
    </select>
   </div>
    <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Delete Doctor
            </button>
    </div>
</fieldset>
</form>
