<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehsaase</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://googleusercontent.com/css2?family=Montserrat:wght@400;600;700&display=swap">
</head>
<body>

   <div id="landing-page">
    <img src="css/img/ehsaase_logo.png" alt="Ehsaase Logo">
</div>

    <div id="main-interface">
        <header>
            <div class="logo-header">
                <a href="index.php">Ehsaase</a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Welcome to the official Ehsaase website!</h1>
            <p>This is the official online home for the band Ehsaase. Explore our music, videos, and connect with us.

            Ehsaase is more than a name; it's a musical journey dedicated to evoking feeling and emotion through soulful melodies. Our YouTube channel, Ehsaase - YouTube, is where our musical expressions come to life through a collection of our latest videos, musical performances, and heartfelt creations.

This website serves as the central hub for our community. It's where you can delve deeper into our story, explore our portfolio, and become a part of the Ehsaase family. We invite you to connect with us on this creative journey and experience the feeling in every note.

            </p>

            <h2>Latest Videos</h2>
          <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/swqqHjL_ubw?si=fQ-Jd8TN-Vk_-Fw_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
        </main>

        <footer>
            <p>© 2025 Ehsaase. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.getElementById('landing-page').addEventListener('click', function() {
            // Hide the landing page with a nice transition
            this.style.transform = 'translateY(-100vh)';
            this.style.opacity = '0';
            this.style.position = 'absolute'; // Remove from the document flow after animation

            // Show the main interface
            const mainInterface = document.getElementById('main-interface');
            mainInterface.style.display = 'block';
            setTimeout(() => {
                mainInterface.style.opacity = '1';
                document.body.style.backgroundColor = '#f0f2f5'; // Change body background color
            }, 500); // Wait for the transition to start
        });
    </script>

</body>
</html>