
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="facultyadd.css">
    <style>
        /* Add your custom styles here */
        .date-input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            line-height: 1.5;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .date-input::-webkit-calendar-picker-indicator {
            display: none;
        }

        .date-input:focus {
            border-color: #007bff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* Header styles */
        .navbar {
            height: 5rem !important;
        }

        /* Footer styles */
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <!-- Header content -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <!-- Your existing navbar content here -->
        </div>
    </nav>
</header>

<main>
    <!-- Your existing form content here -->
    <div class="container mt-5">
        <!-- Form content -->
        <!-- Example form -->
        <form id="insert" method="post" action="add_course.php">
            <!-- Form fields -->
            <div class="row g-3">
                <!-- Your form fields here -->
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary register-btn col-1" onClick="validateForm()">Add Course</button>
        </form>
    </div>
</main>

<footer>
    <!-- Footer content -->
    <div class="container">
        <p>&copy; Your Company 2024</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Your custom script -->
<script>
    // Your custom JavaScript code here
</script>
</body>
</html>
