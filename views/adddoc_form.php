<form action="adddocs.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="doctorName" placeholder="Name of Doctor" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="specialty" placeholder="Specialty" type="text"/>
        </div>
        <div class="form-group">
             <input class="form-control" name="number" placeholder="Office Number" type="text"/>            
        </div>
        <div class="form-group">
             <input class="form-control" name="address" placeholder="Address" type="text"/>            
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
        </div>
    </fieldset>
</form>

