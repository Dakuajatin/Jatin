<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
         <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://i.ibb.co/XjSPSpQ/images-9.jpg') no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            height: 100vh;
            color: white;
        }
        
        .select h2 {
        	margin-left: 25px;
        	margin-top: 100px;
            filter: drop-shadow(0px 0px 5px #000);
        }
        
        .option {
        	background-color: #000;
            width: 200px;
            height: 70px;
            border-radius: 10px;
            margin-bottom: 100px;
            display: flex;
            animation: slideUp 1.5s ease-out forwards;
            transition: transform 0.3s ease;
        }
        
        .option img {
        	width: 60px;
            height: 60px;
            border-radius: 10px;
            border: 1.5px solid dimgrey;
            margin-top: 3px;
            margin-left: 4px;
            color: white;
        }
        
        .much {
        	color: white;
            margin-left: 19px;
            margin-top: 15px;
            font-weight: 700;
            font-size: 32px;
          }

@keyframes slideUp {
    0% {
        transform: translateY(100px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Popup background overlay */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: hidden;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    /* Popup content */
    .popup {
      background-color: #fff;
      padding: 20px;
      width: 300px;
      max-width: 80%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      text-align: center;
      transform: scale(0.9);
      opacity: 0;
      animation-duration: 0.3s;
    }

    .popup h2 {
      margin-top: 0;
    }

    .popup p {
      color: #555;
    }

    .popup button {
      padding: 10px 20px;
      border: none;
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1em;
    }

    .popup button:hover {
      background-color: #0056b3;
    }

    /* Show popup */
    .overlay.show {
      visibility: visible;
      opacity: 1;
    }

    /* Fade-in and fade-out animations */
    .overlay.show .popup {
      animation: fadeInScale 0.3s forwards;
    }
    .overlay:not(.show) .popup {
      animation: fadeOutScale 0.3s forwards;
    }

    /* Keyframes for fade-in */
    @keyframes fadeInScale {
      from {
        transform: scale(0.9);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    /* Keyframes for fade-out */
    @keyframes fadeOutScale {
      from {
        transform: scale(1);
        opacity: 1;
      }
      to {
        transform: scale(0.9);
        opacity: 0;
      }
    }

    </style>
</head>
<body>
      <div class="select">
      	<h2>Select Pack</h2>
      <div class="option" onclick="togglePopup()">
      	<img src="https://i.ibb.co/1mDyyLt/Picsart-24-11-01-10-48-19-183.png">
      <div class="much">100</div>
      	</div>
      <div class="option"  onclick="togglePopup()">
      	<img src="https://i.ibb.co/1mDyyLt/Picsart-24-11-01-10-48-19-183.png">
      <div class="much">500</div>
      	</div>
      <div class="option"  onclick="togglePopup()">
      	<img src="https://i.ibb.co/1mDyyLt/Picsart-24-11-01-10-48-19-183.png">
      <div class="much">1000</div>
      	</div>
      
        <!-- Popup overlay and content -->
  <div class="overlay" id="popupOverlay">
    <div class="popup">
      <h2>Task Completed</h2>
      <p>You will get your diamonds after 1-2 hours.  thanks for choosing us.</p>
      <button onclick="togglePopup()">Close</button>
    </div>
  </div>
      
      
       <script>
    // Function to toggle the popup with delay for fade-out
    function togglePopup() {
      const overlay = document.getElementById('popupOverlay');
      if (overlay.classList.contains('show')) {
        overlay.classList.remove('show');
        // Add a small delay before hiding the overlay to allow fade-out animation
        setTimeout(() => {
          overlay.style.visibility = 'hidden';
        }, 300);
      } else {
        overlay.style.visibility = 'visible';
        overlay.classList.add('show');
      }
    }
  </script>
</body>
</html>