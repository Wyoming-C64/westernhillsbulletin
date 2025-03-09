<?php 

function mike_dump($v) {
  echo "<pre>";
  var_dump($v);
  echo "</pre>";
}

$announcements = array(
  array(
    "title" => "Temple Closure",
    "date" => strtotime("February 24, 2025"),
    "location" => "Colorado Fort Collins Temple",
    // "time" => strtotime("February 21, 2025 20:30:00"),
    "description" => "<p>The Colorado Fort Collins Temple will be closed from February 24 through March 10.</p>
    <p>The baptistry will remain closed an additional week through March 17.</p>"
  ),
  array(
    "title" => "2025 Ward Temple Schedule",
    "date" => strtotime("March 20, 2025"),
    "time" => strtotime("March 20, 2025 19:00:00"),
    "location" => "Colorado Fort Collins Temple",
    "description" => "<p>Here are the upcoming ward temple events. Please make your own reservations on LDS Tools.</p>
    <p>If you can't join us on these particular dates or times, please try to schedule a temple visit sometime during the same week. If you wish to do different ordinance work for your family's needs, please schedule as you wish. In any case, <i>please join us at the temple!</i></p>
    <div class='additional'>
      <div class='left-item'>Feb. 24&mdash;Mar. 10</div>
      <div class='right-item'><span class='strong-small-caps'>temple closed</span></div>
    </div>
    <div class='additional'>
      <div class='left-item'>Feb. 24&mdash;Mar. 17</div>
      <div class='right-item'><span class='strong-small-caps'>baptistry closed</span></div>
    </div>
    <div class='additional'>
      <div class='left-item'>Mar. 20, 7:00 pm</div>
      <div class='right-item'>Sealings</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Apr. 17, 7:00 pm</div>
      <div class='right-item'>Endowments</div>
    </div>
    <div class='additional'>
      <div class='left-item'>May 17, 10:00 am</div>
      <div class='right-item'>Initiatories</div>
    </div>"
  ),
  array(
    "title" => "Stake Youth Summer Activities",
    "description" => "<p><b>Youth Conference 2025 (Youth Turning 14 and up)</b></p>

    <p>June 23-25, 2025<br/>
    Laramie County Community College Campus<br/>
    $75 per youth</p>

    <p>Registration Link and flyer to hand out is attached: (opens a Google Doc form)<br/>
    <a href='https://docs.google.com/forms/d/e/1FAIpQLSdcq77yn0s2J8Vzwg-Vaf4KKBYmZXAi17kUHoceltq1zdl-Ww/viewform' target='_blank' title='2025 Youth Conference Registration Form'>2025 Youth Conference Registration Form</a></p> 

    <p><b>Young Women's Camp (ALL Young Women)</b></p>

    <p>July 15-17, 2025<br/>
    Camp Batel<br/>
    $75 per camper</p>

    <p>Registration Website: (opens a Weebly form)<br/>
    <a href='https://csgirlscamp.weebly.com/' target='_blank' title='Young Women's Camp Registration'>https://csgirlscamp.weebly.com/</a></p>"
  ),
  array(
    "title" => "Mission Preparation Class",
    "date" => strtotime("Sunday, 6:00 pm"),
    "time" => strtotime("Sunday, 6:00 pm"),
    "location" => "1618 Grove Drive, Cheyenne, WY",
    "description" => "<p>The Mission Preparation Class is open to all youth interested in serving a mission. It will be held every Sunday at 6:00 <span class='small-caps'>pm</span> until the cirriculum is completed. The class will be taught by Bro. Rndy Davis and various returned missionares.</p>
    <p>If you have questions, please direct them to Sis. Tia Little or Bro. Sam Shumway.</p>"
  ),
  array(
    "title" => "Young Men / Young Women Calendar",
    // "date" => strtotime("January 26, 2025"),
    // "time" => strtotime("January 26, 2025 10:30:00"),
    "description" => "<p>Bro. and Sis. Rees have put together a calendar (shared Google spreadsheet) for all upcoming youth events and meetings.</p>
    <p>You can access this shared document at: <br/><a href='https://docs.google.com/spreadsheets/d/1zUSsAU1cWavP31NuGN3o1eqZKI8jg8tC1KXJro7zNZo/' target='_blank'>Western Hills Youth Activities Calendar</a></p>"
  ),
  

/******** THESE ANNOUNCEMENTS ALWAYS LAST *********/
  // array(
  //   "title" => "Bishopric Appointments",
  //   "description" => "<p>If you need an appointment to meet with the Bishop or one of the counselors, please schedule this with Bro. Joey Bainbridge</p>"
  // ),
  array(
    "title" => "Have an Announcement for the Bulletin?",
    "description" => "<p>Send your announcements for upcoming activities and events to Mike Lewis by
    using one of the following methods (in order of 
    preference):</p>
    <div class='line-item'>
      <div class='left-item'>Email</div>
      <div class='right-item'><a href='mailto:Mike Lewis &lt;wyoming.c64@gmail.com&gt;?subject=Announcement for Ward Bulletin'>wyoming.c64@gmail.com</a></div>
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

require('globals.php');
$css_timestamp = filemtime('style.css');

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
  <link rel="stylesheet" href="style.css?ver=<?php echo $css_timestamp; ?>">
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
