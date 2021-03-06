<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Omifood-Contact Us</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
  <script src="fontawesom5/js/all.js"></script>
</head>

<body>
  <!-- NAVBAR AREA -->
  <div style="height: 10px; background: #27aae1;"></div>
  <?php include 'Includes/indexPageNavbar.php';?>

  <div style="height: 10px; background: #27aae1;"></div>
  <!-- END OF NAVBAR AREA -->
  <div class="container my-3 my-sm-5">
    <h1 class="mb-sm-4 text-center">Contact Us Please</h1>
    <div class="row">
      <div class="col-12 col-md-6">
        <h4>Address</h4>
        <address>
          <strong>Omi-Food Building</strong><br />
          350 5th Avenue<br />
          Nairobi, NY 10118<br />
          <abbr title="Telephone">T:</abbr>
          <a href="tel:+12127363100">(212) 736-3100</a><br />
          <abbr title="Mail">M:</abbr>
          <a href="mailto:info@domain.com">info@domain.com</a>
        </address>
      </div>
      <div class="col-12 col-md-6">
        <h4>Opening Hours:</h4>
        <p>
          Monday-Tuesday: <span class="float-right">8 am - 8 pm</span> <br />
          Friday-Saturday:
          <span class="float-right"> 10 am - 6 pm</span>
          <br />
          Sunday: <span class="float-right">1 pm - 6 pm </span> <br />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6 mb-3">
        <h4>Send us a message</h4>
        <form action="contactUs.php" method="POST">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" placeholder="name" required />
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="tel" class="form-control" id="telephone" placeholder="1234567890" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea">Message:</label>
            <textarea id="textarea" class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
      </div>
      <div class="col-12 col-lg-6">
        <h4>Where to find us:</h4>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.818087444746!2d36.81933291445878!3d-1.2829824359837252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f115eefe4043d%3A0x2dac6cbcb627cbaf!2sKilimanjaro%20Restaurant%20Kimathi%20street!5e0!3m2!1sen!2ske!4v1602351108998!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <?php include 'Includes/footer.php';?>

  <!-- END FOOTER -->
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="bootstrap4/js/jquery-3.5.1.min.js"></script>
  <script src="bootstrap4/js/bootstrap.bundle.js"></script>
  <script>
    $("#year").text(new Date().getFullYear());
  </script>
</body>

</html>