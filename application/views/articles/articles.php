<!DOCTYPE html>
<html>
<head>
    <title>My MVC Page</title>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to My MVC Page</h1>
        <!-- Add a button to link to the Auth controller -->
        <a href="<?php echo base_url('Auth'); ?>">Login</a>
    </header>

    <!-- Hero Section -->
    <section>
        <div>
            <h2>Hero Section</h2>
            <!-- You can add any hero content here -->
        </div>
    </section>

    <!-- Content Section with Dummy Cards -->
    <section>
        <h2>Dummy Content</h2>
        <div>
            <?php foreach ($dummy_content as $card): ?>
                <div style="border: 1px solid #ddd; padding: 10px; margin: 10px;">
                    <h3><?php echo $card['title']; ?></h3>
                    <p><?php echo $card['content']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
