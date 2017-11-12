<?php
include_once 'header.html';
?>

<div class="container">
    <form action="customer.php" method="post" role="form">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="customer_name">Name</label>
          <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <label for="customer_surname">Surname</label>
          <input type="text" class="form-control" id="customer_surname" name="customer_surname" placeholder="Surname">
        </div>
      </div>
      <div class="form-group">
        <label for="customer_email">Email</label>
        <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="foo@bar.com">
      </div>
      <div class="form-group">
        <label for="customer_address">Address</label>
        <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="customer_phone">Phone number</label>
        <input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="999-999-999">
      </div>
      
      <button type="submit" class="btn btn-primary">Confirm</button>
    </form>
</div>



<?php
include_once 'footer.html';
?>