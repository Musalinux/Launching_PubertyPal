<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapestry Value Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 80px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select, button {
            padding: 10px;
            width: 100%;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #4cae4c;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            text-align: left;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .logo img {
            height: 50px;
        }
        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .nav-item {
            margin-left: 20px;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            padding: 5px;
            display: block;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.jpg" alt="Gallery Logo">
    </div>
    <nav>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="catalog.php" class="nav-link">Catalog</a></li>
            <li class="nav-item"><a href="owner-referral.php" class="nav-link">Owner Referral</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="exclusives.php" class="nav-link">Exclusives</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1>Check Tapestry Values</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="owner">Select Owner:</label>
            <select name="owner" id="owner">
                <option value="">Please select an owner</option>
                <?php
                include 'conn.php';
                $stmt = $conn->prepare("SELECT owner_id, name FROM Owner");
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['owner_id'] . "'>" . $row['name'] . "</option>";
                }
                $stmt->close();
                ?>
            </select>
        </div>
        <button type="submit" name="submit">Check Values</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $ownerId = $_POST["owner"];

        $stmt = $conn->prepare("
            SELECT 
              t.title,
              t.estimated_value,
              o.name AS owner_name
            FROM 
              Tapestry t
            INNER JOIN 
              Owner o ON t.owner_id = o.owner_id
            WHERE 
              t.owner_id = ?
              AND
              t.estimated_value > (
                SELECT AVG(t2.estimated_value) 
                FROM Tapestry t2 
                WHERE t2.owner_id = t.owner_id
              )
        ");
        $stmt->bind_param("i", $ownerId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<h2>Valuable Tapestries</h2>";
            echo "<table>";
            echo "<tr><th>Title</th><th>Estimated Value</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
                echo "<td>$" . htmlspecialchars($row["estimated_value"]) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>This owner does not have any tapestries valued above the average.</p>";
        }
        $stmt->close();
        $conn->close();
    }
    ?>
</div>

</body>
</html>
