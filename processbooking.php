<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/register.css">
</head>
<body>

<header><h1>Rohirrim Dude Ranch</h1></header>
<nav>
    <ul>
        <li><a href="construction.html">Home</a></li>
        <li><a href="construction.html">Accommodation</a></li>
        <li><a href="construction.html">Horse Riding</a></li>
        <li><a href="construction.html">Sight Seeing</a></li>
        <li><a href="register.html">Book</a></li>
    </ul>
</nav>

<article>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        // Personal details
        $firstname  = isset($_POST['firstname'])  ? $_POST['firstname']  : 'Not provided';
        $lastname   = isset($_POST['lastname'])   ? $_POST['lastname']   : 'Not provided';
        $age        = isset($_POST['age'])        ? $_POST['age']        : 'Not provided';
        $species    = isset($_POST['species'])    ? $_POST['species']    : 'Not provided';

        // Trip details
        $accom      = isset($_POST['accom'])      ? 'Yes' : 'No';
        $fourday    = isset($_POST['4day'])       ? 'Yes' : 'No';
        $tenday     = isset($_POST['10day'])      ? 'Yes' : 'No';
        $food       = isset($_POST['food'])       ? $_POST['food']       : 'None';
        $date       = isset($_POST['bookday'])    ? $_POST['bookday']    : 'Not provided';
        $partysize  = isset($_POST['partysize'])  ? $_POST['partysize']  : 'Not provided';

        // Map species code to label
        $speciesMap = array('M' => 'Human', 'D' => 'Dwarf', 'E' => 'Elf', 'H' => 'Hobbit');
        $speciesLabel = isset($speciesMap[$species]) ? $speciesMap[$species] : $species;
    ?>

    <h2>Your Details</h2>
    <p><strong>First Name:</strong> <?php echo $firstname; ?></p>
    <p><strong>Last Name:</strong> <?php echo $lastname; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>Species:</strong> <?php echo $speciesLabel; ?></p>

    <h2>Your Trip</h2>
    <p><strong>Accommodation:</strong> <?php echo $accom; ?></p>
    <p><strong>4 Day Tour:</strong> <?php echo $fourday; ?></p>
    <p><strong>10 Day Tour:</strong> <?php echo $tenday; ?></p>
    <p><strong>Menu Preference:</strong> <?php echo $food; ?></p>
    <p><strong>Date:</strong> <?php echo $date; ?></p>
    <p><strong>Number of Travellers:</strong> <?php echo $partysize; ?></p>

</article>

<footer>
    <div>
        <h1 class="fineprint">Conditions Apply</h1>
        <p class="fineprint">Rohirrim Dude Ranch management takes no responsibility for any injury, beheadings, spells (sleeping or otherwise), spider-bites suffered by guests, or for anything whatsoever.</p>
    </div>
    <p id="contact">Any enquiries please email the <a href="mailto:something@something.com">manager</a></p>
</footer>

</body>
</html>