<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $data['name'] ?> - <?= $data['title'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?= $data['name'] ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?= $data['title'] ?></span> from <?= $data['place'] ?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">

        <?php
        if ($data['instagram']) {
        ?>
          <a href="<?= $data["instagram"] ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
        }
        ?>

        <?php
        if ($data['github']) {
        ?>
          <a href="<?= $data["github"] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <?php
        }
        ?>

        <?php
        if ($data['linkedin']) {
        ?>
          <a href="<?= $data["linkedin"] ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
        }
        ?>

      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/my_image.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title'] ?></h3>
          <p class="fst-italic">
            <?= $data['slogan'] ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday'])) ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a style="color: white;" href="<?= $data['website'] ?>" target="_blank"><?= $data['website'] ?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a style="color: white;" href="tel:<?= $data['phone'] ?>"><?= $data['phone'] ?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['city'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $data['age'] ?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $data['degree'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?= $data['certification'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a style="color: white;" href="mailto:<?= $data['email'] ?>"><?= $data['email'] ?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                    <?php
                    if ($data['freelance'] == 1) {
                      echo "Available";
                    } else {
                      echo "Not Available";
                    }
                    ?>

                  </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <?php

    $counter = "SELECT * FROM `counter`";
    $counter_result = mysqli_query($con, $counter);

    ?>
    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">
        <?php
        if ($counter_result->num_rows > 0) {
          while ($row = $counter_result->fetch_assoc()) {
        ?>
            <div class="col-lg-3 col-md-6 mt-5">
              <div class="count-box">
                <i class="<?= $row['icon'] ?>"></i>
                <span data-purecounter-start="<?= $row['pre'] ?>" data-purecounter-end="<?= $row['post'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?= $row['title'] ?></p>
              </div>
            </div>
        <?php
          }
        }

        ?>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">

        <?php

        $skills = "SELECT * FROM `skills`";
        $skills_result = mysqli_query($con, $skills);

        if ($skills_result->num_rows > 0) {
          while ($skills_row = $skills_result->fetch_assoc()) {
        ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="<?= $skills_row['icon'] ?>" style="color: #<?= $skills_row['color'] ?>;"></i>
                <h3><?= $skills_row['title'] ?></h3>
              </div>
            </div>
        <?php
          }
        }

        ?>
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <?php

          $quets = "SELECT * FROM `quets`";
          $quets_result = mysqli_query($con, $quets);

          if ($quets_result->num_rows > 0) {
            while ($quets_row = $quets_result->fetch_assoc()) {
          ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $quets_row['quet'] ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?= $quets_row['name'] ?></h3>
                  <h4><?= $quets_row['title'] ?></h4>
                </div>
              </div><!-- End testimonial item -->
          <?php
            }
          }

          ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>Career Objective</h4>
            <p><em>Highly motivated and skilled Fresher Computer Science with a passion for developing innovative software solutions. Proficient in various programming languages including C++, Python, and Java, with experience in developing web applications, designing databases, and debugging software. Collaborative team player with a proven track record of delivering high-quality work and achieving exceptional results.</em></p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Bachelor of Technology</h4>
            <h5>2018 - 2022</h5>
            <p><em>Teerthanker Mahaveer University, Moradabad, IN</em></p>
          </div>
          <div class="resume-item">
            <h4>Intermediate</h4>
            <h5>2017</h5>
            <p><em>S.S Inter College, Moradabad, IN</em></p>
          </div>
          <div class="resume-item">
            <h4>High School</h4>
            <h5>2015</h5>
            <p><em>S.S Inter College, Moradabad, IN</em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Project Details</h3>
          <div class="resume-item">
            <h4>Task Management System</h4>
            <p><em>Web Technology</em></p>
            <h5>2021</h5>
            <p><em>Noida, Uttar Pradesh, IN </em></p>
            <p>
            <ul>
              <li>I contributed to the development of a web application aimed at task management for organizations. Responsibilities included implementing features such as task creation, editing, upload functionalities, and deletion processes. Engaged in various aspects of the project to facilitate seamless task handling within the system.</li>
              <li><a href="https://github.com/shivamsaxena99/task_management_system">Github Link</a></li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Farming Portal</h4>
            <p><em>Web Technology</em></p>
            <h5>2022</h5>
            <p><em>Noida, Uttar Pradesh, IN </em></p>
            <p>
            <ul>
              <li>Designed and developed a user-friendly platform enabling farmers to register, access agricultural insights, and optimize crop yields. Implemented features to deliver farming techniques and predictive analysis for optimal crop selection based on individual area conditions. Established an interactive Internet forum facilitating farmer discussions and information exchange through posted messages, fostering a collaborative farming community.</li>
              <li><a href="https://github.com/shivamsaxena99/farming_portal">Github Link</a></li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>SafeKids Donation</h4>
            <p><em>Web Technology</em></p>
            <h5>2023</h5>
            <p><em>Noida, Uttar Pradesh, IN </em></p>
            <p>
            <ul>
              <li>Led the development of a Safe Kids Donation Website, focused on enabling online contributions to bolster child safety measures. Engineered a streamlined donation system, fostering awareness and bolstering support for initiatives dedicated to child protection.</li>
              <li><a href="https://github.com/shivamsaxena99/safekids_donation">Github Link</a></li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <?php
      $services = "SELECT * FROM `services`";
      $services_result = mysqli_query($con, $services);
      ?>

      <div class="row">
        <?php
        if ($services_result->num_rows > 0) {
          while ($services_data = $services_result->fetch_assoc()) {
        ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="<?= $services_data['icon'] ?>"></i></div>
                <h4><?= $services_data['title'] ?></h4>
                <p><?= $services_data['text'] ?></p>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No Service Found.";
        }
        ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <?php
            $cat_list = "SELECT * FROM `category`";
            $cat_result = mysqli_query($con, $cat_list);
            if ($cat_result->num_rows > 0) {
              while ($cat_data = $cat_result->fetch_assoc()) {
            ?>
                <li data-filter=".<?php echo $cat_data['name'] ?>"><?php echo $cat_data['name'] ?></li>
            <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
        $portfolio = "SELECT * FROM `portfolio`";
        $portfolio_result = mysqli_query($con, $portfolio);

        if ($portfolio_result->num_rows > 0) {
          while ($portfolio_data = $portfolio_result->fetch_assoc()) {
            $category = $portfolio_data['category'];
            $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
            $category_result = mysqli_query($con, $category_sql);
            $category_data = mysqli_fetch_assoc($category_result);
        ?>
            <div class="col-lg-4 col-md-6 portfolio-item <?= $category_data['name'] ?>">
              <div class="portfolio-wrap">
                <img src="<?= $portfolio_data['image'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $portfolio_data['title'] ?></h4>
                  <p><?= $category_data['name'] ?></p>
                  <div class="portfolio-links">
                    <a href="<?= $portfolio_data['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_data['title'] ?>"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php?id=<?php echo $portfolio_data['id'] ?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "NO Portfolio Found.";
        }
        ?>
      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?= $data['address'] ?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">

              <?php
              if ($data['instagram']) {
              ?>
                <a href="<?= $data["instagram"] ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php
              }
              ?>

              <?php
              if ($data['github']) {
              ?>
                <a href="<?= $data["github"] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
              <?php
              }
              ?>

              <?php
              if ($data['linkedin']) {
              ?>
                <a href="<?= $data["linkedin"] ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?= $data['email'] ?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?= $data['phone'] ?></p>
          </div>
        </div>
      </div>
      <?php
      //Import PHPMailer classes into the global namespace
      //These must be at the top of your script, not inside a function
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      //Load Composer's autoloader
      require 'vendor/autoload.php';

      require './PHPMailer/src/Exception.php';
      require './PHPMailer/src/PHPMailer.php';
      require './PHPMailer/src/SMTP.php';

      if (isset($_POST['send_message'])) {
        global $con;
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($con, $contact)); {
          try {
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            //Server settings
            //$mail->SMTPDebug = 2;                                     //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'shivamsaxena8200@gmail.com';           //SMTP username
            $mail->Password   = 'ftdn hbnv lsrf jfva';                  //SMTP password
            $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('shivamsaxena8200@gmail.com', 'Shivam Saxena');
            $mail->addAddress('shivamsaxena8200@gmail.com', 'Shivam Saxena');     //Add a recipient
            $mail->addAddress($email);                                            //Name is optional
            //$mail->addAddress('ellen@example.com');                             //Name is optional
            //$mail->addReplyTo('connectkcoverseas@gmail.com', 'kcoverseas');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                    //Set email format to HTML
            $mail->Subject = "Shivam Saxena Team";
            $mail->Body    = "Hello " . $name . "<br>" . "Thank you for your query. I have received your details." . "<br>" . "<br>" . "Name :" . $name . "<br>" .  "E-mail :" . $email . "<br>" .  "Subject :" . $subject . "<br>" .  "Message :" . $message . "<br>" . "<br>" . "<br>" . "Regards" . "<br>" . "Shivam Saxena Team";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script>alert('Message sent successfully...');
        window.location.href='index.php';</script>";
          } catch (Exception $e) {
            echo "Message could not be sent... Mailer Error: {$mail->ErrorInfo}";
            "<script>window.location.href='index.php';</script>";
          }
        }
      } else {
        echo "";
      }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php

    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result = mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);

    ?>
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="<?= $details_data['url'] ?>" target="_blank"><?= $details_data['company'] ?></a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>