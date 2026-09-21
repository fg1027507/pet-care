<?php
$services = [
    'dog-walk' => 'Dog Walking',
    'drop-in' => 'Drop-In Visit',
    'pet-sitting' => 'Pet Sitting',
];

// Read the selected service from $_GET.
$servicekey = $_GET['service'];
// Use isset() to redirect when the key is missing or not in $services.
// When the request method is POST, read the owner and pet names.

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Pet Care</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="bg-light">
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <main class="container py-4" style="max-width: 760px;">
        <h1>Request Pet Care</h1>

        <!-- Display the selected service name with htmlspecialchars(). -->

        <!-- On POST, display a designed request summary. -->

        <!-- On GET, wrap these Bootstrap controls in a working <form>. -->
        <div class="card shadow-sm border-0 mt-4">
            <div class="card-body p-4">
                <div class="mb-3">
                    <label class="form-label" for="owner_name">Owner name</label>
                    <input class="form-control" type="text" id="owner_name" name="owner_name">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="pet_name">Pet name</label>
                    <input class="form-control" type="text" id="pet_name" name="pet_name">
                </div>

                <button class="btn btn-primary" type="submit">Send care request</button>
            </div>
        </div>
    </main>
</body>
</html>
