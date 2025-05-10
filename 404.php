<?php
    http_response_code(404);                   // MUST be first - sets proper HTTP header
    header('X-Robots-Tag: noindex, nofollow'); // Additional protection for bots

    // Config file loading with security check
    $configPath = isset($homePage) ? 'config/config.php' : '../../config/config.php';
    if (file_exists($configPath)) {
        include $configPath;
    }
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow"> <!-- Block indexing -->
    <meta name="description" content="Page not found - Maciej Szelag - Web Desiner ad Web Developer">
    <title>Page Not Found | 404</title>
    <link rel="canonical" href="https://maciejszelag.co.uk/" /> <!-- Points to homepage -->
    <style>
        /* Import czcionek */
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Julius+Sans+One&display=swap');

        /* Zmienne */
        :root {
            --font-primary: "Cormorant Garamond", serif;
            --font-secondary: "Julius Sans One", sans-serif;
            --font-weight-light: 300;
            --font-weight-regular: 400;
            --color-primary: rgb(233, 232, 232);
            --color-secondary: rgb(61, 60, 68);
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--color-secondary);
            color: var(--color-primary);
            font-family: var(--font-primary);
            font-weight: var(--font-weight-light);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            padding: 2rem;
        }

        h1 {
            font-family: var(--font-secondary);
            font-size: 5rem;
            margin: 0;
            letter-spacing: 2px;
        }

        h2 {
            font-weight: var(--font-weight-regular);
            font-size: 1.8rem;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
        }

        a {
            color: var(--color-primary);
            text-decoration: none;
            border: 1px solid var(--color-primary);
            padding: 0.8rem 1.5rem;
            font-family: var(--font-secondary);
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        a:hover {
            background-color: var(--color-primary);
            color: var(--color-secondary);
        }

        .decorative-line {
            width: 100px;
            height: 1px;
            background-color: var(--color-primary);
            margin: 2rem auto;
            opacity: 0.5;
        }
    </style>
    <!-- Structured data for error page -->
    <!-- <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "404 Page Not Found",
        "description": "Error page for BJJ Plymouth website",
        "url": "https://maciejszelag.co.uk/404",
        "isPartOf": {
            "@type": "WebSite",
            "name": "Maciej Szelag - Web Developer Web Designer",
            "url": "https://maciejszelag.co.uk/"
        }
    }
    </script> -->
</head>

<body>
    <div class="container">
        <h1>404</h1>
        <div class="decorative-line"></div>
        <h2>Page Not Found</h2>
        <p>We couldn't find the page you're looking for. It might have been moved or deleted.</p>
        <a href="/">Back to Home Page</a>
    </div>
</body>

</html>