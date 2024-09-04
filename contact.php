<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We have a wide collection of electronics, phones, books, and games">
    <meta name="keywords" content="phones, books, games, electronics">
    <link rel="stylesheet" href="css/style.css">
    <title>Our Store</title>
    <style>
        /* Contact Info Section */
        .contact-info {
            padding: 20px;
            background-color: #DFD3C3;
            margin: 20px auto;
            border-radius: 8px;
            max-width: 800px;
        }
        .contact-info h2 {
            font-size: 24px;
            color: #982B1C;
            margin-bottom: 15px;
        }
        .contact-info p {
            font-size: 16px;
            color: #555;
        }

        /* Contact Form Section */
        .contact-form {
            padding: 20px;
            background-color: #DFD3C3;
            margin: 20px auto;
            border-radius: 8px;
            max-width: 800px;
        }
        .contact-form h2 {
            font-size: 24px;
            color: #982B1C;
            margin-bottom: 15px;
        }
        .contact-form form {
            display: grid;
            gap: 15px;
        }
        .contact-form label {
            font-size: 16px;
            color: #555;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #C5705D;
            border-radius: 4px;
        }
        .contact-form button {
            background-color: #982B1C;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form button:hover {
            background-color: #C5705D;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            main {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body id="contact">
    <?php include "includes/nav.php"; ?>
    <?php include "includes/header.php"; ?>
    
    <main>
        <div class="contact-info">
            <h2>Our Contact Information</h2>
            <p>Email: info@yourstore.com</p>
            <p>Phone: +1 234 567 890</p>
            <p>Address: Knowledge Park-2, Greater Noida</p>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form id="contact-form" action="submit_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </main>
    
    <?php include "includes/footer.php"; ?>
    
    <script src="javascript/script.js"></script>
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            
            var formData = new FormData(this);

            fetch('submit_form.php', { // Ensure this path is correct
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message); // Show popup message
                    document.getElementById('contact-form').reset(); // Clear form
                } else {
                    alert(data.message); // Show error message
                }
            })
            .catch(error => {
                alert('An error occurred: ' + error.message);
            });
        });
    </script>
</body>
</html>
