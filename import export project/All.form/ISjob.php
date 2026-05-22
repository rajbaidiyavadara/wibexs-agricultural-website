<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application - International Sales</title>
    <link rel="icon" href="/image/logo-removebg-preview.png">
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <div class="container">
      <div class="apply_box">
        <h1>
          Job Application
          <span class="title_small">(International Sales)</span>
        </h1>
        <form action="insertISjob.php" method="POST" enctype="multipart/form-data">
          <div class="form_container">
            <div class="form_control">
              <label for="first_name"> First Name </label>
              <input id="first_name" name="first_name" placeholder="Enter First Name..." required />
            </div>
            <div class="form_control">
              <label for="last_name"> Last Name </label>
              <input id="last_name" name="last_name" placeholder="Enter Last Name..." required />
            </div>
            <div class="form_control">
              <label for="email"> Email </label>
              <input type="email" id="email" name="email" placeholder="Enter Email..." required />
            </div>
            <div class="form_control">
              <label for="number">Contact number</label>
              <input type="tel" id="number" name="number" placeholder="+00 00000 00000" required>
            </div>
            <div class="textarea_control">
              <label for="address"> Address </label>
              <textarea id="address" name="address" rows="4" cols="50" placeholder="Enter Address"></textarea>
            </div>
            <div class="form_control">
              <label for="city"> City </label>
              <input id="city" name="city" placeholder="Enter City Name..." />
            </div>
            <div class="form_control">
              <label for="pincode"> Pincode </label>
              <input type="number" id="pincode" name="pincode" placeholder="Enter Pincode..." />
            </div>
            <div class="form_control">
              <label for="date"> Date </label>
              <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
            </div>
            <div class="form_control">
              <label for="upload"> Upload Your CV </label>
              <input type="file" id="upload" name="upload" />
            </div>
          </div>
          <div class="button_container">
            <button type="submit" name="submit">Apply Now</button>
          </div>
        </form>
      </div>
    </div>

    <div class="product_display" style="padding: 20px; color: white;">
        <h3>Available Trade Categories:</h3>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<strong>Category:</strong> " . $row["category"]. " | <strong>Service:</strong> " . $row["product_name"]. "<br>";
            }
        } else {
            echo "No trade records found.";
        }
        ?>
    </div>
  </body>
</html>