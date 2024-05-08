<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Choose your Gmail address</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-image: url('appliances.jpg'); /* Background image */
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    background-color: rgba(255, 255, 255, 0.8); /* Transparent white background */
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    padding: 40px;
    text-align: center;
    width: 400px;
  }
  
  h2 {
    color: #202124;
    margin-bottom: 20px;
  }
  
  p {
    color: #283747 ;
    margin-bottom: 20px;
  }
  
  .example-emails {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 20px;
  }
  
  .example-email {
    background-color: #f2f2f2;
    border: 1px solid #dadce0;
    border-radius: 8px;
    padding: 10px 20px;
    margin: 0 10px 10px 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .example-email:hover {
    background-color: #e0e0e0;
  }
  
  .example-email.active {
    background-color:#5DADE2 ; /* Change the background color when active */
  }
  
  .example-email span {
    color: #202124;
    font-weight: bold;
  }
  
  .button-container {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }
  
  .create-email-button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-bottom: 20px;
    width: 100%;
  }
  
  .create-email-button:hover {
    background-color: #45a049;
  }
  
  .next-button {
    background-color: #737373;
    border: none;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-bottom: 10px;
    width: 100%;
  }
  
  .next-button:hover {
    background-color: #5f5f5f;
  }
  
  /* New styles for the prompt */
  #email-prompt {
    display: none;
    margin-top: 20px;
  }
  
  #email-input {
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
    margin-bottom: 8px;
    width: 100%;
    box-sizing: border-box;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Choose your Email address</h2>
  <p>Pick an Email address or create your own </p>
  <div class="example-emails">
    <div class="example-email" onclick="toggleHighlight(this)">
      <span>jerico123jonson@gmail.com</span>
    </div>
    <div class="example-email" onclick="toggleHighlight(this)">
      <span>yourname@gmail.com</span>
    </div>
    <div class="example-email" onclick="toggleHighlight(this)">
      <span>customaddress@gmail.com</span>
    </div>
  </div>
  <div class="button-container">
    <button class="create-email-button" id="create-email">Create your own email address</button>
    <button class="next-button" id="next-button">Next</button>
  </div>
  <!-- Email prompt -->
  <div id="email-prompt">
    <input type="text" id="email-input" placeholder="Enter your desired email address">
  </div>
</div>

<script>
  // Function to toggle the highlighting of the clicked email
  function toggleHighlight(emailElement) {
    // Check if the email element already has the active class
    const isActive = emailElement.classList.contains('active');

    // Remove active class from all example-email elements
    const exampleEmails = document.querySelectorAll('.example-email');
    exampleEmails.forEach(email => {
      email.classList.remove('active');
    });

    // Add active class to the clicked email element only if it's not already active
    if (!isActive) {
      emailElement.classList.add('active');
    }
  }

  // Get the button and the prompt elements
  const createEmailButton = document.getElementById('create-email');
  const nextButton = document.getElementById('next-button');
  const emailPrompt = document.getElementById('email-prompt');
  const emailInput = document.getElementById('email-input');
  const exampleEmails = document.querySelectorAll('.example-email');

  // Function to toggle the email prompt visibility and remove active class from example emails
  function toggleEmailPrompt() {
    // Remove active class from all example-email elements
    exampleEmails.forEach(email => {
      email.classList.remove('active');
    });

    if (emailPrompt.style.display === 'block') {
      emailPrompt.style.display = 'none'; // Hide the prompt if it's currently visible
      emailInput.value = ''; // Clear the input field
      nextButton.style.marginTop = '0'; // Reset the margin of the "Next" button

      // Enable all example-email elements
      exampleEmails.forEach(email => {
        email.style.pointerEvents = 'auto';
      });
    } else {
      emailPrompt.style.display = 'block'; // Show the prompt if it's currently hidden
      createEmailButton.insertAdjacentElement('afterend', emailPrompt); // Insert the prompt after the "Create your own email address" button
      nextButton.style.marginTop = '20px'; // Move the "Next" button down

      // Disable all example-email elements
      exampleEmails.forEach(email => {
        email.style.pointerEvents = 'none';
      });
    }
  }

  // Event listener for the Next button
  nextButton.addEventListener('click', function() {
    const activeEmail = document.querySelector('.example-email.active span');
    if (activeEmail) {
      // If an email is selected, proceed to the next page
      window.location.href = 'create new password.php'; // Change the URL accordingly
    } else {
      // If no email is selected, prompt the user to select one
      alert('Please select an email address or create your own.');
    }
  });

  // Event listener for the create email button
  createEmailButton.addEventListener('click', toggleEmailPrompt);

  // Event listener for the input field to disable/enable email addresses
  emailInput.addEventListener('input', function() {
    const inputValue = this.value.trim();
    if (inputValue !== '') {
      exampleEmails.forEach(email => {
        email.style.pointerEvents = 'none';
      });
    } else {
      exampleEmails.forEach(email => {
        email.style.pointerEvents = 'auto';
      });
    }
  });
</script>



</body>
</html>
