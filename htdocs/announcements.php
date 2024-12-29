<?php 

function mike_dump($v) {
  echo "<pre>";
  var_dump($v);
  echo "</pre>";
}

$announcements = array(
  array(
    "title" => 'Today: Fifth Sunday - Second Hour Combined Meetings',
    // "date" => strtotime("December 29, 2024"),
    // "time" => strtotime("December 29, 2024 10:05:00"),
    // "location" => "Cheyenne Stake Center - 309 Western Hills Blvd.",
    "description" => '<ul>
    <li>Adults will meet together in the Relief Society room.</li> 
    <li>All youth will meet together in the Young Women room.</li>
    </ul>'
  ),
  array(
    "title" => "2025 Sunday Schedule",
    "date" => strtotime("January 5, 2025"),
    "time" => strtotime("January 5, 2025 10:30:00"),
    // "location" => "Cheyenne Stake Center - 309 Western Hills Blvd.",
    "description" => "<p>Happy New Year! Our meeting schedule will change to the <span class='small-caps'>10:30 am</span> block for 2025 with the following schedule:</p>
    <div class='additional'>
      <div class='left-item'>Sacrament Meeting</div>
      <div class='right-item'>10:30 am to 11:25 am</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Second Hour</div>
      <div class='right-item'>11:35 am to 12:30 pm</div>
    </div>
    <h3>Primary Schedule</h3>
    <p>Additionally, starting in 2025, <i>all primary classes</i> (both junior and senior primary) will now meet <i>together</i> for singing time. Primary classes will be directed by the following second hour schedule:</p>
    <div class='additional'>
      <div class='left-item'>Classroom Instruction</div>
      <div class='right-item'>11:35 am to 12:00 pm</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Transition to Singing Time</div>
      <div class='right-item'>12:00 pm to 12:05 pm</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Scripture, Talk</div>
      <div class='right-item'>12:05 am to 12:10 pm</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Singing Time, Closing Prayer</div>
      <div class='right-item'>12:10 pm to 12:30 pm</div>
    </div>"
  ),
  array(
    "title" => "Ward Conference",
    "date" => strtotime("January 26, 2025"),
    "time" => strtotime("January 26, 2025 10:30:00"),
    "description" => "<p>We will be holding Ward Conference on January 26, 2025.</p>"
  ),

/******** THIS ANNOUNCEMENT ALWAYS LAST *********/
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

$meetingDate = strtotime("December 29, 2024");

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
