<form action="addmed.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="drugName" placeholder="Name of Medication" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="dose" placeholder="Dosage" type="text"/>
        </div>
        <div class="form-group">
             <input class="form-control" name="route" placeholder="Route" type="text"/>            
        </div>
        <div class="form-group">
             <input class="form-control" name="timesDue" placeholder="Times Due" type="text"/>            
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
        </div>
    </fieldset>
</form>

