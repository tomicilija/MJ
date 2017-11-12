<?php
include_once 'header.html';
?>

<div class="container">
    <form action="customer.php" method="post" role="form">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="customer_name">Name</label>
          <input type="text" class="form-control" id="customer_name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <label for="customer_surname">Surname</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Surname">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input position-static" type="radio" name="genderRadio" id="customer_gender" value="male" aria-label="...">Male
            <input class="form-check-input position-static" type="radio" name="genderRadio" id="customer_gender" value="female" aria-label="...">Female
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="customer_address" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="customer_phone">Phone number</label>
        <input type="text" class="form-control" id="customer_phone" placeholder="999-999-999">
      </div>
      
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>



<?php
include_once 'footer.html';
?>