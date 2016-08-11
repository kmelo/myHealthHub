<form action="addappts.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="doctor" placeholder="Name of Doctor" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="apptDate" placeholder="Appointment Date" type="text"/>
        </div>
        <div class="form-group">
             <input class="form-control" name="time" placeholder="Appointment Time" type="text"/>            
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Add Appointment
            </button>
        </div>
    </fieldset>
</form>

