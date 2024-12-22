<?php 

function mike_dump($v) {
  echo "<pre>";
  var_dump($v);
  echo "</pre>";
}

$announcements = array(
  array(
    "title" => "Stake Christmas Fireside",
    "date" => strtotime("December 15, 2024"),
    "time" => strtotime("December 15, 2024 18:00:00"),
    "location" => "Cheyenne Stake Center - 309 Western Hills Blvd.",
    "description" => "<p>Come join us for a night of music and the spoken word as
    we celebrate the Christmas season and the birth of our Savior, Jesus Christ.
    Invite your firends and family. We have invited the Cheyenne East Stake to join
    us as well. Please come if you are able to do so. The Stake is also providing a
    Zoom link (see below) in the event you are unable to attend in person. Light
    refreshments will be provided.</p>
    <h3><b>Food Drive</b></h3>
    <p>Additionally, the Stake will also be collecting donations of <b>non-perishable</b>
    food items to be given to our local food banks. If you would like to contribute,
    please bring your donated items to the fireside.</p>
    <h3><b>Zoom Details</b></h3>". 
    '<a href="https://zoom.us/">https://zoom.us/j/madeupazoomlinkfortestingbutitdoesntreallywork</a>'. 
    "<p>Meeting ID: 123 4567 8910<br/>
    Passcode: 395562</p>"
  ),
  array(
    "title" => "Building Cleaning",
    "date" => strtotime("December 21, 2024"),
    "time" => strtotime("December 21, 2024 8:00:00"),
    "location" => "Cheyenne Stake Center - 309 Western Hills Blvd.",
    "description" => "<p>This is our month to clean the building. Please volunteer this coming Saturday at <span class='small-caps'>8:00 am</span> to help care for our meetinghouse. <i>Many hands make light work...</i></p>"
  ),
  array(
    "title" => "Next Sunday Meeting Schedule",
    "date" => strtotime("December 22, 2024"),
    "time" => strtotime("December 22, 2024 10:30:00"),
    "description" => "<p>Next Sunday we will be joining the Capitol Hill Ward and meet for <i>Sacrament Meeting only</i> at <b class='small-caps'>10:30 am</b>.</p>
    <p><b>There will be no second hour meetings.</b></p>"
  ),
  array(
    "title" => "Have an Announcement for the Bulletin?",
    "description" => "<p>Send your announcement for upcoming activities and events to Mike Lewis.
    You can communicate the details of your announcement using the following methods (in order of 
    preference):</p>
    <div class='line-item'>
      <div class='left-item'>Email</div>
      <div class='right-item'><a href='mailto:wyoming.c64@gmail.com'>wyoming.c64@gmail.com</a></div>
    </div>
    <div class='additional'>
      <div class='left-item'>Text Message</div>
      <div class='right-item'><a href='sms:13072862641'></a>(307) 286-2641</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Phone Call</div>
      <div class='right-item'><a href='tel:+13072862641'>(307) 286-2641</a></div>
    </div>"
  )

);

$meetingDate = strtotime("December 15, 2024");

function printAnnouncement($item) {
  $output = '<div class="announcement">';
  $output .= '<h2 class="announcement-title">'.$item["title"].'</h2>';
  if (isset($item['date'])) {
    $output .= '<div class="date-time">'.date("F j, Y",$item['date']);
  
    if (isset($item['time'])) {
      $output .= date(" - g:i a",$item['time']);
    }
    $output .= "</div>";
  }
  if (isset($item['location'])) {
    $output .= '<div class="date-time">'.$item['location'].'</div>';
  }
  if (isset($item["description"])) {
    $output .= '<div class="description">'.$item["description"].'</div>';
  }
  $output .= '</div>'; // End Line Item
  
  echo $output;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Western Hills Ward Announcements</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="program">
    <header class="program-header">
      <div class="ward-title">
        <span class="ward-name">Western Hills Ward</span><br/>The Church of Jesus Christ of Latter-day Saints</div>
      <h1>Announcements & Events</h1>
      <div class="meeting-date"><?php echo date("F j, Y",$meetingDate); ?></div>
    </header>
    <main>
      <?php 
        foreach ($announcements as $announcement) {
          printAnnouncement($announcement);
        }
      ?>
    </main>
    <footer>
      <a class="button-link" href="index.php">Go to Program</a>
    </footer>
  </div>
</body>
</html>
