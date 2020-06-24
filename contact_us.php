<?php include('layout/header.php')?>
<link rel="stylesheet" href="./css/about.css">
<body>
  <div class="my-container container-fluid">
      <?php include('layout/menu.php')?>
    <div class="about block-top height-block">
      <div class="row mr-0 ml-0 wrap-container management-team info">
        <div class="col-12 title team-header lf">
          <h1>Contact <span class="span-name">Us</span></h1>
        </div>
      </div>
      <div class="contact-form">
        <div class="row mr-0 ml-0">
          <div class="wrap-container">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="col-12 contact-detail">
                <h3 class="sub-title"><strong>Contact Detail</strong></h3>
                <p><i class="fa fa-envelope icon-contact" aria-hidden="true"></i>
                  <a class="footerlink" href="mailto:info@versea.com">info@versea.com</a></p>
                <p><i class="fa fa-phone icon-contact" aria-hidden="true"></i>
                  +1 (800) 397-0670</p>
                <br>
                <p>Verséa Holdings LTD</p>
              <p>1000 N. Florida Avenue</p>
              <p>Tampa, FL 33602</p>
                <br>
                <p>Hours of operation 9am-5pm EST</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="col-12 title">
                <h3 class="sub-title"><strong>Contact Form</strong></h3>
                <div id="contact_div">
                  <div class="form-group">
                    <select class="form-control blahblahX" id="from" name="from" required="">
                      <option value="" selected="" disabled="" style="color:grey !important;display:none">... Please select ...</option>
                      <option value="PD">I'm a Customer looking for a Healthcare Professional</option>
                      <option value="HCP">I'm a Healthcare Professional interested in Verséa products</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name...">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" id="email" name="email" placeholder="Your Email...">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Your Phone Number...">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" placeholder="Type your message here" style="height:100px"></textarea>
                  </div>
                  <button type="button" class="btn btn-blue" onclick="contact()">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php include('layout/footer.php')?>
  </div>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript">
    function contact() {
      var from = $("#from").val();
      var name = $("#name").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var message = $("#message").val();

      if (from == "" || from == null) {
        $("#from").css("background-color", "pink");
        return false;
      } else {
        $("#from").css("background-color", "#fff");
      }
      if (name == "" || name == null) {
        $("#name").css("background-color", "pink");
        return false;
      } else {
        $("#name").css("background-color", "#fff");
      }
      if (email == "" || email == null) {
        $("#email").css("background-color", "pink");
        return false;
      } else {
        $("#email").css("background-color", "#fff");
      }
      if (message == "" || message == null) {
        $("#message").css("background-color", "pink");
        return false;
      } else {
        $("#message").css("background-color", "#fff");
      }
      // $.ajax({
      //   type: "POST",
      //   url: "https://versea.com/ajax_contact.php",
      //   data: {
      //     from: from,
      //     name: name,
      //     email: email,
      //     phone: phone,
      //     message: message,
      //   },
      //   success: function (data) {
      //     $("#contact_div").html("<span style='color:green;font-size:20px;'>Contact info and message sent!</span>");
      //   }
      // });
      $.get("/submit.php", {
        from: from,
        name: name,
        email: email,
        phone: phone,
        message: message,
      }).done(function (data) {
          console.log(data);
        $("#contact_div").html("<span style='color:green;font-size:20px;'>Contact info and message sent!</span>");
      });
    }
  </script>
</body>

</html>