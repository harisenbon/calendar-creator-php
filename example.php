<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar Example</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>


<div style="text-align: center">
    <p>&darr;&darr;&darr;&darr; <strong>Don't forget!</strong> Be sure to add this to your calendar! &darr;&darr;&darr;&darr;</p>
    <?
    require_once('calendarGenerator.php');
    $calendar = new CalendarGenerator(
        'This is the title of the event', // Name of the Event
        strtotime('2014-10-10 12:34 America/New_York'), // Date and time of the event (Don't forget your timezone!)
        '<h1>Event Description</h1><p>All html here!</p>', // Description of the event in HTML (converted to markdown)
        90, // Duration of the event
        'http://example.com/' // Link that's put in the "location" field of the event
    );
    ?>

    <a href="<?= $calendar->google(); ?>" target="_blank"><img src="//www.google.com/calendar/images/ext/gc_button6.gif" border=0 /></a>
    &nbsp;
    <a href="<?= $calendar->iCal(); ?>" target="_blank"><img src="ical_button.gif" border=0 /></a>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>