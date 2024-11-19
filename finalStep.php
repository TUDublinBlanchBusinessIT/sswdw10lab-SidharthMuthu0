<?php
include("finalStepHeader.html");
session_start();

echo "<h4>Passenger First Name: " . htmlspecialchars($_SESSION['passengerFN']) . "</h4>";
echo "<BR>";


echo "<h4>Passenger Surname: " . htmlspecialchars($_SESSION['passengerSN']) . "</h4>";
echo "<BR>";


if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) 
{
   
    echo "<h4>Bags under 10KG: " . htmlspecialchars($_SESSION['subTenKG']) . "</h4>";
    echo "<BR>";

    
    echo "<h4>Bags between 10–20KG: " . htmlspecialchars($_SESSION['overTenKG']) . "</h4>";
    echo "<BR>";
}
?>

?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>
