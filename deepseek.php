<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: skyblue;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
            margin: 0;
            padding: 0;
        }

        .nav-link, .btn {
            text-decoration: none;
            font-size: 16px;
            color: black;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 30px;
            text-align: center;
            white-space: nowrap;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .nav-link:hover {
            color: #007BFF;
            background-color: rgba(0, 123, 255, 0.1);
        }

        .btn {
            background: linear-gradient(to right, #007BFF, #0056D2);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: auto;
            min-width: 120px;
            padding: 12px 20px;
        }

        .btn:hover {
            background: linear-gradient(to right, #0056D2, #007BFF);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar nav ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                width: 100%;
            }

            .nav-link, .btn {
                width: 100%;
                text-align: left;
                padding: 12px 20px;
                min-width: auto;
            }

            .btn {
                text-align: center;
                width: auto;
                align-self: center;
            }
        }

        /* Hero Section Styling */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .content .animated-heading {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 10px;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeSlideDown 1.5s ease-out forwards;
        }

        .content .animated-text {
            font-size: 1.2em;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeSlideUp 2s ease-out forwards;
            animation-delay: 1s;
        }

        .image .animated-image {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideInFadeIn 1s ease-out forwards;
            animation-delay: 1.5s;
            border-radius: 10px;
        }

        @keyframes fadeSlideDown {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInFadeIn {
            0% { opacity: 0; transform: translateX(-50px); }
            100% { opacity: 1; transform: translateX(0); }
        }

        /* Feature Section Styling */
        .features {
            display: flex;
            justify-content: space-around;
            margin: 50px 0;
        }

        .feature {
            text-align: center;
            width: 30%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: linear-gradient(to right, #f9a825, #ffeb3b);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            width: 80%;
            text-align: center;
        }

        .btn:hover {
            background: linear-gradient(to right, #ffeb3b, #f9a825);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Stats Section Styling */
        .stats-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: skyblue;
            padding: 50px 10%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .stat-box {
            text-align: center;
            margin: 20px;
            background-color: #f0f8ff;
            padding: 40px 30px;
            border-radius: 10px;
            width: 70%;
            min-height: 150px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid #dcdcdc;
        }

        .counter {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
            animation: countUp 2s ease-out forwards;
        }

        @keyframes countUp {
            from { transform: scale(1); }
            to { transform: scale(1.2); }
        }

        .stat-box p {
            font-size: 18px;
            margin: 0;
            text-align: center;
        }

        .stat-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            background-color: #e1f5fe;
        }

        /* Treatment Section Styling */
        .treatment-section {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .treatment-section:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .treatment-section label {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            display: block;
            margin-bottom: 10px;
        }

        .treatment-section input {
            display: none;
        }

        #bill {
            margin-top: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            display: none;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        #bill h3 {
            color: #444;
            margin-bottom: 10px;
        }

        .total {
            font-weight: bold;
            font-size: 20px;
            margin-top: 15px;
        }

        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #218838;
        }

        /* Testimonial Section Styling */
        .testimonial-container {
            background-color: #f5f5f5;
            padding: 40px 20px;
            text-align: center;
            border-radius: 10px;
            margin: 40px auto;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-out;
        }

        .testimonial {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .testimonial:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background-color: #e1f5fe;
        }

        .stars {
            font-size: 1.5rem;
            color: #ffcc00;
            margin-bottom: 10px;
        }

        .testimonial p {
            color: #444;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .highlight {
            color: #0077b6;
            font-weight: bold;
        }

        .review-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            text-align: left;
        }

        .review-form h3 {
            font-size: 1.5rem;
            color: #0077b6;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .review-form input,
        .review-form select,
        .review-form textarea,
        .review-form button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .review-form button {
            background-color: #0077b6;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        .review-form button:hover {
            background-color: #005f86;
        }

        @keyframes fadeInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Follow Us Section Styling */
        .follow-us {
            text-align: center;
            padding: 60px 0;
            background-color: blue;
            color: white;
            border-top: 5px solid #3498db;
            animation: fadeIn 1.5s ease-out;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background-color: #e9e9e9;
            border-radius: 10px;
        }

        .social-icons a {
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s ease;
        }

        .social-icons a img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            background-color: #ecf0f1;
        }

        .social-icons a:hover img {
            transform: scale(1.1);
        }

        
		
		
		
        #contact {
            background-color: #336666;
            color: #FFFFFF;
            padding: 40px 10%;
            text-align: center;
            animation: fadeIn 1.5s ease-out;
        }

        #contact h2 {
            font-size: 36px;
            margin-bottom: 25px;
            font-family: 'Helvetica Neue', sans-serif;
            color: #3498db;
        }

        #contact p {
            font-size: 18px;
            line-height: 1.8;
            margin: 10px 0;
            font-family: Arial, sans-serif;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .social-icons {
                flex-direction: column;
                gap: 10px;
            }
            .social-icons a {
                width: 45px;
                height: 45px;
            }

            #contact {
                padding: 20px 5%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <img src="Dental Clinic4_files\dental logo.jpg" width="80" height="80">
            <nav>
                <ul>
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#treatments" class="nav-link">Treatments</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                   
					
					
					
					
					
					
                    <li><a href="Appointment.php" class="btn">Book Appointment</a></li>
                </ul>
            </nav>
			
			
			 <style>
        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #FF9966;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
            margin: 0;
            padding: 0;
        }

        .nav-link, .btn {
            text-decoration: none;
            font-size: 16px;
            color: black;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 30px;
            text-align: center;
            white-space: nowrap;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .nav-link:hover {
            color: #007BFF;
            background-color: rgba(0, 123, 255, 0.1);
        }

        .btn {
            background: linear-gradient(to right, #007BFF, #0056D2);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: auto;
            min-width: 120px;
            padding: 12px 20px;
        }

        .btn:hover {
            background: linear-gradient(to right, #0056D2, #007BFF);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar nav ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                width: 100%;
            }

            .nav-link, .btn {
                width: 100%;
                text-align: left;
                padding: 12px 20px;
                min-width: auto;
            }

            .btn {
                text-align: center;
                width: auto;
                align-self: center;
            }
        }
    </style>

		<li>
    <a href="dentalpro/login.php" class="button-style">
        <img src="Dental Clinic4_files\admin_login1.jpeg" alt="Login" class="icon-style">
    </a>
</li>

<style>
/* General button styling */
.button-style {
    background-color: #FFCC99; /* Blue color */
    padding: 10px; /* Adjust padding */
    border-radius: 5px; /* Rounded corners */
    display: inline-flex; /* Align icon properly */
    align-items: center; /* Center the icon */
    justify-content: center;
    width: 40px; /* Fixed width */
    height: 40px; /* Fixed height */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Shadow effect */
}

/* Hover effect */
.button-style:hover {
    background-color: #4a4ae8; /* Lighter blue on hover */
}

/* Icon styling */
.icon-style {
    width: 24px; /* Adjust icon size */
    height: 24px;
}
</style>


			
			
			
			
			
			
			
			
			
			
			
			
			
			
        </div>
    </header>

    <section class="hero">
        <div class="content">
            <h1 class="animated-heading">We Care For Your Smile</h1>
            <p class="animated-text">We believe everyone should have easy access to a great dental clinic.</p>
        </div>
        <div class="image">
            <center>
                <img class="animated-image" src="../Dental Clinic4_files/dental medical.jpg" alt="Dental Clinic Illustration" width="500" height="200">
            </center>
        </div>
    </section>

    <div class="stats-container">
        <div class="stat-box">
            <h1 class="counter" data-target="15">0</h1><h2>+</h2>
            <p>Dental Treatments<br>Under One Roof</p>
        </div>
        <div class="stat-box"> 
            <h1 class="counter" data-target="4.9">0</h1><h2>+</h2>
            <p>Rated on Google</p>
        </div>
        <div class="stat-box">
            <h1 class="counter" data-target="15">0</h1><h2>+</h2>
            <p>Years of Experience</p>
        </div>
        <div class="stat-box">
            <h1 class="counter" data-target="15000">0</h1><h2>+</h2>
            <p>Cosmetic Dental<br>Makeovers</p>
        </div>
    </div>
	
	
<style>
  /* Styling the container */
  .stats-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #CCFFCC;
    padding: 50px 10%;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    color: #333;
  }

  /* Styling for individual stat boxes */
  .stat-box {
    text-align: center;
    margin: 20px;
    background-color: #f0f8ff; /* Soft light blue color */
    padding: 40px 30px;  /* Original padding */
    border-radius: 10px;
    width: 70%;  /* Original width */
    min-height: 150px;  /* Original height */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;

    /* Flexbox to center content inside each box */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    /* Adding a border with light gray color */
    border: 2px solid #dcdcdc; /* Light gray border */
  }

  /* Counter animation styles */
  .counter {
    font-size: 50px;
    font-weight: bold;
    margin-bottom: 10px;
    transition: transform 0.3s ease;
    animation: countUp 2s ease-out forwards;
  }

  /* Define keyframes for the counter animation */
  @keyframes countUp {
    from {
      transform: scale(1);
    }
    to {
      transform: scale(1.2); /* Slightly bigger when the animation finishes */
    }
  }

  /* Styling for text under the counter */
  .stat-box p {
    font-size: 18px;
    margin: 0;
    text-align: center; /* Ensure the text is centered within the p tag */
  }

  /* Hover effect to elevate the box */
  .stat-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    background-color: #e1f5fe; /* Light blue hover effect */
  }
</style>


<script>
  
  document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      let current = 0;
      const updateCounter = () => {
        const increment = target / 100;
        if (current < target) {
          current += increment;
          counter.innerText = Math.ceil(current);
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target;
        }
      };
      updateCounter();
    });
  });
</script>

	
	
	
	
	
	
	
	
	
	
	
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Treatments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:#339999;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: #007bff;
        }
        .treatments {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }
        .treatment {
            background: white;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            width: 250px;
        }
        button {
            margin-top: 10px;
            padding: 5px 10px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>


    <section id=treatments>
    <h2>OUR DENTAL TREATMENTS</h2>
    <div class="treatments">
        <div class="treatment">
            <h3>Preventive Care</h3>
            <p>Dental Cleaning</p>
            <button onclick="redirectToPayment('Dental Cleaning', 100)">₹100</button>
        </div>
        <div class="treatment">
            <h3>Restorative Treatments</h3>
            <p>Fillings</p>
            <button onclick="redirectToPayment('Fillings', 200)">₹200</button>
        </div>
		 <div class="treatment">
            <h3>Surgical Treatment</h3>
            <p>Improve appearance</p>
            <button onclick="redirectToPayment('Dental Cleaning', 500)">₹500</button>
        </div>
        <div class="treatment">
            <h3>Cosmetic Dentistry</h3>
            <p>Teeth Whitening</p>
            <button onclick="redirectToPayment('Fillings', 250)">₹250</button>
        </div>
    </div>
	</section>
	<style>
		.treatments{
			background-color:skyblue;
			padding:20px;
		}
		</style>
   <script>
   function redirectToPayment(treatment, price) {
    window.location.href = `dentalpro/payment5.php?treatment=${encodeURIComponent(treatment)}&price=${price}`;
}  </script>

</body>
</html>





    <section id="services">
        <section class="services-section">
            <h1>Our Services</h1>
            <center>Explore our top-notch dental services</center>
            <div class="services-container">
                <div class="service-card">
                    <div class="icon-container">
                        <img src="Dental Clinic4_files\dental_imp.jpg">
                    </div>
                    <h2>Dental Implants</h2>
                    <p>Restore your smile with permanent solutions.</p>
                    <a href="dentalpro\dental implants (2).php">
                        <input type="submit" value="Learn More" name="">
                    </a>
                </div>
                <div class="service-card">
                    <div class="icon-container">
                        <img src="Dental Clinic4_files\clear ali.jpg" alt="Clear Aligners">
                    </div>
                    <h2>Clear Aligners</h2>
                    <p>Straighten your teeth with invisible aligners.</p>
                    <a href="dentalpro\clear alighners.php">
                        <input type="submit" value="Learn More" name="">
                    </a>
                </div>
                <div class="service-card">
                    <div class="icon-container">
                        <img src="Dental Clinic4_files\cos den.jpg" alt="Cosmetic Dentistry">
                    </div>
                    <h2>Cosmetic Dentistry</h2>
                    <p>Enhance the appearance of your teeth.</p>
                    <a href="dentalpro\Cosmetic Dentistry.php">
                        <input type="submit" value="Learn More" name="">
                    </a>
                </div>
                <div class="service-card">
                    <div class="icon-container">
                        <img src="Dental Clinic4_files\tooth white.jpg" alt="Cosmetic Dentistry">
                    </div>
                    <h2>Teeth Whitening</h2>
                    <p>Brighter your smile with professional whitening.</p>
                    <a href="dentalpro\teeth whitening.php">
                        <input type="submit" value="Learn More" name="">
                    </a>
                </div>
                <div class="service-card">
                    <div class="icon-container">
                        <img src="Dental Clinic4_files\root canal.jpg" alt="Cosmetic Dentistry">
                    </div>
                    <h2>Root Canal</h2>
                    <p>Treat and preserve damaged teeth.</p>
                    <a href="dentalpro\Root Canal.php">
                        <input type="submit" value="Learn More" name="">
                    </a>
                </div>
                <div class="service-card">
                    <div class="icon-container">
                        <img src="Dental Clinic4_files\cos den.jpg" alt="Cosmetic Dentistry">
                    </div>
                    <h2>Dental Tourism</h2>
                    <p>Experience affordable dental care abroad.</p>
                    <a href="dentalpro\Dental tourism.php">
                        <input type="submit" value="Learn More" name="">
                    </a>
                </div>
            </div>
        </section>
    </section>
	
	
<style>

.services_container {
     background-color:blue;
	 padding:20px;
	 }

body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f9fa;
  #preventive-section {
    background-color: lightblue;
	
	<script>
	document.getElementById("Services Section").scrollIntoView();
    </script>
   
}

}

/* Section Styles */
.services-section {
  text-align: center;
  padding: 50px 20px;
  background: linear-gradient(to bottom, #ffffff, #e8f5fe);
}

.services-section h1 {
  font-size: 2rem;
  color: #007bff;
  margin-bottom: 10px;
}

.services-section p {
  color: #555;
  font-size: 1rem;
  margin-bottom: 30px;
}

/* Services Container */
.services-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

/* Service Card */
.service-card {
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 250px;
  padding: 20px;
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Icon Styling */
.icon-container {
  background-color: #e3f2fd;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  margin: 0 auto 15px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-container img {
  width: 50px;
  height: 50px;
}

/* Text Styling */
.service-card h2 {
  font-size: 1.2rem;
  color: #333;
  margin: 10px 0;
}

.service-card p {
  color: #666;
  font-size: 0.9rem;
  margin-bottom: 15px;
}

/* Button Link */
.service-card a {
  text-decoration: none;
  color: #007bff;
  font-weight: bold;
  font-size: 0.9rem;
  border: 2px solid #007bff;
  padding: 5px 15px;
  border-radius: 20px;
  transition: background-color 0.3s, color 0.3s;
}

.service-card a:hover {
  background-color: #007bff;
  color: #ffffff;
}
</style>
	
	
	
	
	
	
	
	
	
	

    <div class="testimonial-container">
        <h1>Review Us</h1>
        <div id="testimonial-list">
            <div class="testimonial">
                <h3>Vishwajeet Patil</h3>
                <div class="stars">★★★★★</div>
                <p>
                    I have always received excellent treatment at this clinic. I like that Dr. Mayur explains the issues, 
                    undertakes corrective course of action, and suggests ways in which teeth issues can be avoided. I have 
                    undergone <span class="highlight">painless root canals</span>. I would highly recommend Dr. Prathamesh Joshi for all dental needs.
                </p>
            </div>
            <div class="testimonial">
                <h3>Pankaj Harbhare</h3>
                <div class="stars">★★★★★</div>
                <p>
                    My experience with this clinic has been great, their approach to the patient and treatment is thoroughly 
                    <span class="highlight">professional and friendly</span>.
                </p>
            </div>
            <div class="testimonial">
                <h3>Shubham Siddha</h3>
                <div class="stars">★★★★★</div>
                <p>
                    <span class="highlight">Very affordable</span> dental treatment available here with the best results which are so perfect. 
                    I think Dr. Ashwin Borhade is one of the best dentists in Pune.
                </p>
            </div>
        </div>

        <li><a href="dentalpro/review.php" class="btn">Add your Review</a></li>
	    <p></p>
	    <p></p>
		
	
	
	
	

    <div class="container5">
        <h2>Doctors</h2>
        <div class="grid">
            <div class="card">
                <h2>Dr. Mayur Kalvankar</h2>
                <p>BDS,MDS(Prosthodontist  & Implantologist)</p>
                <a href="dentalpro\Mayur_k.php">
                    <input type="submit" value="Learn More" name="">
                </a>
            </div>
            <div class="card">
                <h2>Dr. Ashwin Borhade</h2>
                <p>MBBS,MDS</p>
                <a href="dentalpro\ashwin_b.php">
                    <input type="submit" value="Learn More" name="">
                </a>
            </div>
            <div class="card">
                <h2>Dr. Kalash Jain</h2>
                <p>BDS,MDS</p>
                <a href="dentalpro\kalash_j.php">
                    <input type="submit" value="Learn More" name="">
                </a>
            </div>
            <div class="card">
                <h2>Dr. Sakshi Jadhav</h2>
                <p>MBBS,(Prosthodontist & Implantologist)</p>
                <a href="dentalpro\sakshi_j.php">
                    <input type="submit" value="Learn More" name="">
                </a>
            </div>
        </div>
    </div>
	
	
<style>
  /* General styling for the container */
  .container5 {
    background-color: #CC9966;
    padding: 40px 5%; /* Reduced padding for better fitting */
    text-align: center;
  }

  /* Header styling */
  .container5 h1 {
    font-size: 28px; /* Decreased font size */
    font-weight: bold;
    margin-bottom: 30px; /* Reduced margin */
    color: #333;
    font-family: Arial, sans-serif;
  }

  /* Grid styling */
  .grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Four cards per row */
    gap: 20px; /* Reduced gap */
    justify-items: center;
    padding: 0 10px; /* Decreased padding */
    animation: fadeIn 1.5s ease-out;
  }

  /* Styling for each doctor card */
  .card {
    background-color: #fff;
    padding: 15px; /* Reduced padding */
    border-radius: 12px;
    width: 220px; /* Slightly reduced card width */
    text-align: center;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
    border: 2px solid #3498db;
    transition: all 0.3s ease;
  }

  /* Card hover animation */
  .card:hover {
    transform: translateY(-8px); /* Slightly reduced hover translation */
    box-shadow: 0 12px 18px rgba(0, 0, 0, 0.2);
    background-color: #eaf4ff;
    border-color: #2980b9;
  }

  /* Styling for Doctor's name */
  .card h2 {
    font-size: 20px; /* Decreased font size */
    font-weight: 600;
    color: #333;
    margin-bottom: 12px; /* Reduced margin */
  }

  /* Styling for doctor's specialty */
  .card p {
    font-size: 14px; /* Reduced font size */
    color: #555;
  }

  /* Keyframes for fadeIn animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive Design: Adjust layout for smaller screens */
  @media (max-width: 1024px) {
    .grid {
      grid-template-columns: repeat(2, 1fr); /* Two cards per row for tablets */
    }
  }

  @media (max-width: 768px) {
    .grid {
      grid-template-columns: 1fr; /* One card per row for mobile */
    }
    .container5 {
      padding: 30px 5%; /* Slightly reduced padding on smaller screens */
    }
    .card {
      width: 85%; /* Make the card width more flexible on small screens */
    }
  }
</style>

	
	
	
	
	
	
	
	
	
	
	
	

    <h2>Recognition & Awards</h2>
    <div class="awards-container">
        <div class="award-item">
            <img src="Dental Clinic4_files\cert1.jpg" alt="Certificate 1">
        </div>
        <div class="award-item">
            <img src="Dental Clinic4_files\cert2.jpg" alt="Certificate 2">
        </div>
        <div class="award-item">
            <img src="Dental Clinic4_files\cert3.jpg" alt="Certificate 3">
        </div>
        <div class="award-item">
            <img src="Dental Clinic4_files\cert4.jpg" alt="Certificate 4">
        </div>
        <div class="award-item">
            <img src="Dental Clinic4_files\cert1.jpg"5 alt="Certificate 5">
        </div>
    </div>

 <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #9999FF;
            margin: 0;
            padding: 20px;
        }
        h2 {
            font-size: 28px;
            color: #333;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 1s ease-out forwards;
        }
        .awards-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .award-item {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 200px;
            opacity: 0;
            transform: scale(0.8);
            animation: fadeInScale 1s ease-out forwards;
        }
        .award-item:nth-child(1) { animation-delay: 0.2s; }
        .award-item:nth-child(2) { animation-delay: 0.4s; }
        .award-item:nth-child(3) { animation-delay: 0.6s; }
        .award-item:nth-child(4) { animation-delay: 0.8s; }
        .award-item:nth-child(5) { animation-delay: 1s; }
        .award-item img {
            width: 100%;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
        }
        .award-item:hover img {
            transform: scale(1.1);
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInScale {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>


	









    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Smile Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .gallery-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .swiper-container {
            width: 100%;
            padding: 20px 0;
        }
        .swiper-slide {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .image-labels {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .image-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .image-container img {
            width: 45%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .swiper-pagination {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>The Smile Gallery</h2>
    <div class="gallery-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-labels">
                        <span>Before</span>
                        <span>After</span>
                    </div>
                    <div class="image-container">
                        <img src="Dental Clinic4_files\WhatsApp Image 2025-02-20 at 18.57.36_b7de505b - Copy.jpg" alt="Before">
                        <img src="Dental Clinic4_files\WhatsApp Image 2025-02-20 at 18.57.52_6f0bb937 - Copy.jpg" alt="After">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-labels">
                        <span>Before</span>
                        <span>After</span>
                    </div>
                    <div class="image-container">
                        <img src="Dental Clinic4_files\WhatsApp Image 2025-02-20 at 18.55.13_f95f6d0d - Copy.jpg" alt="Before">
                        <img src="Dental Clinic4_files\WhatsApp Image 2025-02-20 at 18.55.31_43760a4d - Copy.jpg" alt="After">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-labels">
                        <span>Before</span>
                        <span>After</span>
                    </div>
                    <div class="image-container">
                        <img src="Dental Clinic4_files\WhatsApp Image 2025-02-20 at 18.55.48_f5863586 - Copy.jpg" alt="Before">
                        <img src="Dental Clinic4_files\WhatsApp Image 2025-02-20 at 18.56.03_331c7c44 - Copy.jpg" alt="After">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>

	

	
	
	
	
	
	
	
	
	
	

    <section id="about">
        <div class="container1">
            <div class="content">
                <h2><b>About Us</b></h2>
                <p><b>Best Dental Clinic in Pune:</b></p>
                <p>Welcome to SmileCare, where your oral health is our priority. Our experienced team is dedicated to providing top-notch dental services to ensure your smile stays radiant and healthy.</p>
                <p>"At Smile Care Dental Clinic, we are dedicated to providing exceptional dental care in a warm and welcoming environment. Our team of experienced professionals offers a wide range of services, from routine cleanings to advanced cosmetic and restorative treatments, ensuring personalized care for every patient. With a focus on comfort, quality, and patient education, we strive to help you achieve a healthy, beautiful smile that lasts a lifetime. Your smile is our priority!"</p>
            </div>
        </div>
    </section>
	
	
	<style>
    /* Section Styling */
    #about {
        padding: 60px 10%;
        background: linear-gradient(to right, #F0F8FF, #D6E9F7); /* Soft gradient background */
        color: #333;
    }

    .container1 {
        background-color: #999900; /* White for content area to stand out */
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Heading Styles */
    h2 {
        font-size: 32px;
        color: #007BFF; /* Bright blue for heading */
        margin-bottom: 20px;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2); /* Adds a soft shadow effect */
    }

    /* Subheading Styles */
    p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
        text-align: justify; /* Better for readability */
        color: #444; /* Darker color for content */
        font-family: 'Roboto', sans-serif;
    }

    .container1 p b {
        color: #007BFF;
        font-weight: 700;
        font-size: 20px;
    }

    /* Add animations to the section */
    .content {
        animation: fadeInUp 2s ease-in-out;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive styling for smaller screens */
    @media screen and (max-width: 768px) {
        #about {
            padding: 40px 5%;
        }

        h2 {
            font-size: 26px;
        }

        p {
            font-size: 16px;
        }
    }
</style>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

    <div class="follow-us">
        <h2>Follow Us!</h2>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="../Dental Clinic4_files/twitter.jpeg" alt="Twitter">
            </a>
            <a href="https://instagram.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            </a>
            <a href="https://youtube.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="YouTube">
            </a>
            <a href="https://linkedin.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Linkedin.svg" alt="LinkedIn">
            </a>
        </div>
    </div>

    <div>
        <center><h2>Reach Us</h2></center>
        <div class="map">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.617711318416!2d73.74790361090356!3d18.5009676696999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2be75adb0f065%3A0x9f81f1ded8e93571!2sBhugaon%20Gram%20Panchayat!5e0!3m2!1sen!2sin!4v1737360097681!5m2!1sen!2sin" width="1000%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
        </div>
    </div>

    <footer>
        <section id="contact">
            <div class="container">
                <center><h2>Contact Us</h2>
                <p>Email: info@smilecareclinic.com</p>
                <p>Phone: +918767970104</p>
                <p>+919823314804</p>
                <p>Address: Bhugaon, Mulshi, Pune</p>
                <p>Time: Monday to Saturday (10AM - 10PM)</p>
                <p>Sunday (5PM - 10PM)</p></center>
            </div>
        </section>
    </footer>
	<style>
	.container{
		background-color:#6633FF;
		color:white;
		align:Center;
	}
	</style>
	
	<style>
/* General section styles for 'Follow Us' */
.follow-us {
    text-align: center;
    padding: 60px 0;
    background-color:#6633FF;
	color:white;
    border-top: 5px solid #3498db; /* Blue line on top */
    animation: fadeIn 1.5s ease-out;
}

.follow-us h3 {
    font-size: 30px;
    margin-bottom: 20px;
    font-family: 'Helvetica Neue', sans-serif;
    color: #333;
}

/* Styling social media icons */
.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    background-color: #6633FF; /* Light gray background */
    border-radius: 10px;
}

.social-icons a {
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s ease;
}

.social-icons a img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.social-icons a:hover {
    transform: scale(1.1); /* Slightly larger on hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    background-color: #ecf0f1; /* Subtle background color change on hover */
}

.social-icons a:hover img {
    transform: scale(1.1); /* Enlarge icon smoothly on hover */
}

/* General section styles for contact info */
#contact {
    background-color: white;
    color: #fff;
    padding: 40px 10%;
    text-align: center;
    animation: fadeIn 1.5s ease-out;
}

#contact h2 {
    font-size: 36px;
    margin-bottom: 25px;
    font-family: 'Helvetica Neue', sans-serif;
    color: #3498db;
}

#contact p {
    font-size: 18px;
    line-height: 1.8;
    margin: 10px 0;
    font-family: Arial, sans-serif;
}

/* FadeIn Animation for both sections */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive design adjustments for smaller screens */
@media (max-width: 768px) {
    .social-icons {
        flex-direction: column;
        gap: 10px;
    }
    .social-icons a {
        width: 45px;
        height: 45px;
    }

    #contact {
        padding: 20px 5%;
    }
}
</style>

	
	
	
	
	
	
	
	
	
	
	

    <div class="container">
        <center><h3><p>&copy; 2024 SmileCare Dental Clinic. All rights reserved.</p></h3></center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                let current = 0;
                const updateCounter = () => {
                    const increment = target / 100;
                    if (current < target) {
                        current += increment;
                        counter.innerText = Math.ceil(current);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCounter();
            });
        });

        const reviewForm = document.getElementById('reviewForm');
        const testimonialList = document.getElementById('testimonial-list');
        reviewForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const rating = document.getElementById('rating').value;
            const reviewText = document.getElementById('reviewText').value;
            const newTestimonial = document.createElement('div');
            newTestimonial.className = 'testimonial';
            newTestimonial.innerHTML = `
                <h3>${name}</h3>
                <div class="stars">${rating}</div>
                <p>${reviewText}</p>
            `;
            testimonialList.appendChild(newTestimonial);
            reviewForm.reset();
        });
    </script>
</body>
</html>