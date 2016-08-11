<form action="removeappts.php" method="post">
<fieldset>
   <div class="form-group">
    <label for="symbol">Remove an Appointment</label>
    </br>
    <select class="form-control" name="doctor">
      <?php foreach ($appointments as $appointment): ?>
      <option value="<?= $appointment["doctor"]?>"><?= $appointment["doctor"]?></option>
      <?php endforeach ?>
    </select>
   </div>
    <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Delete Appointment
            </button>
    </div>
</fieldset>
</form>
