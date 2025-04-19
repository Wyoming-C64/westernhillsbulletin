<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false); // For IE
header("Pragma: no-cache"); // HTTP/1.0

function mike_dump($v) {
  echo "<pre>";
  var_dump($v);
  echo "</pre>";
}

$announcements = array(
  
  // array(
  //   "title" => "Mission Preparation Class",
  //   "date" => strtotime("Sunday, 6:00 pm"),
  //   "time" => strtotime("Sunday, 6:00 pm"),
  //   "location" => "1618 Grove Drive, Cheyenne, WY",
  //   "description" => "<p>The Mission Preparation Class is open to all youth interested in serving a mission. It will be held every Sunday at 6:00 <span class='small-caps'>pm</span> until the cirriculum is completed. The class will be taught by Bro. Randy Davis and various returned missionares.</p>
  //   <p>If you have questions, please direct them to <a href='mailto:tiarelittle@yahoo.com' target='_blank'>Sis. Tia Little</a> or <a href='mailto:samshumway@gmail.com' target='_blank'>Bro. Sam Shumway</a>.</p>"
  // ),
  array(
    "title" => "2025 Ward Temple Schedule",
    "date" => strtotime("May 17, 2025"),
    "time" => strtotime("May 17, 2025 10:00:00"),
    "location" => "Colorado Fort Collins Temple",
    "description" => "<p>Here are the upcoming ward temple events. Please make your own reservations on LDS Tools.</p>
    <p>If you can't join us on these particular dates or times, please try to schedule a temple visit sometime during the same week. If you wish to do different ordinance work for your family's needs, please schedule as you wish. In any case, <i>please join us at the temple!</i></p>
    <div class='additional'>
      <div class='left-item'>May 17, 10:00 am</div>
      <div class='right-item'>Initiatories</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Jun. 13, 7:00 pm</div>
      <div class='right-item'>Endowments</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Jul. 17, 7:00 pm</div>
      <div class='right-item'>Sealings</div>
    </div>"
  ),
  array("title" => "Stake Primary: Stake Conference Rehersal",
    "date" => strtotime("April 27, 2025"),
    "time" => strtotime("April 27, 2025 9:00:00"),
    "location" => "Cheyenne Stake Center - 309 Western Hills Blvd.",
    "description" => "<p>Stake Primary Children will be singing during the <span class='small-caps'>10:00 am</span> session of Stake Conference on Sunday, April 27. During Ward Conferences, each Primary learned <i>My Own Sacred Grove</i> with Pres. Sutphin, and he will lead the Primary children in singing for Stake Conference. All Primary children ages 3 through 11 are invited to participate.<p>

    <p><b>Mark Your Calendars:</b> Before the Conference on Sunday morning, we will have a <span class='strong-small-caps'>9:00 am</span> performance Practice in the Chapel to prepare for the event. We hope to see you there!</p>

    <p>In the meantime, here's a video link of the song to help you practice at home: <a href='https://www.youtube.com/watch?v=W8UnRqgDlr8' target='_blank' title='My Own Sacred Grove video.'>https://www.youtube.com/watch?v=W8UnRqgDlr8</a> (Opens in YouTube.)</p>

    <p>Thanks!<br/>&nbsp;&nbsp;&nbsp;<i>~ Trisha, Christy, Carlie, and Kaylee</i>"
  ),
  array(
    "title" => "Stake Temple Day",
    "date" => strtotime("May 3, 2025"),
    "time" => strtotime("May 3, 2025 14:00"),
    "location" => "Colorado Fort Collins Temple",
    "description" => "<p>Cheyenne Stake Temple Day is scheduled for May 3rd. The Temple Presidency has reserved ordinances for our Stake starting at <span class='small-caps'>2:00 pm</span>. Please note that the starting times on the sign-up sheet are the starting times for the ordinances and plan to arrive at least 15 minutes early to prepare. If you have a living ordinance that you would like to have completed during the Stake Temple Day, please contact <a href='mailto:Steven%20Garber%20&lt;sdgarbs@gmail.com&gt;' target='_blank'>Bro. Steven Garber</a> and he will help you to coordinate with the Temple office.</p>

    <p>This is a wonderful opportunity for our Stake to gather together in the House of the Lord. If you would like to reserve an ordinance and time slot, please sign up using the link below: (opens a sign-up form at SignupGenius.com)</p>
    <p><a href='https://www.signupgenius.com/go/70A054DACAF28A2FB6-55741559-cheyenne' target='_blank'>Stake Temple Day Sign Up</a>"
  ),
  array(
    "title" => "Denver Regional YSA Conference",
    "date" => strtotime("May 29, 2025"),
    "enddate" => strtotime("May 31, 2025"),
    "location" => "Highlands Ranch, Colorado",
    "description" => '<p>Under the direction of the North America Central Area Presidency there will be a Denver Regional Young Single Adult Conference taking place May 29-31, 2025 in Highlands Ranch, CO. This will be a tremendous opportunity for our YSAs (ages 18-35) to gather in a "Think Celestial" spirit of learning, serving, and socializing.</p>
    
    <p>Highlights will include temple worship, outdoor activities, service projects, and a dance. <i><b>Outdoor activities are on a first-come, first-serve basis, so register as soon as possible!</b></i> Workshop teachers and keynote speakers will include two general authority seventies, two Church historians, and other very engaging speakers.</p>
    
    <p>Registration price of $50 per person includes food, lodging, and activities. Use the link below to register today and follow the official social media pages for more conference information.</p>
    
    <p><b>Registration Link:</b> (opens official registration page at Cvent.com)<br/>
    <a href="https://cvent.me/2Zbbw2?rt=iedpfVqUskeBAReXZ8fOxw" target="_blank">Denver Regional YSA Conference Registration</a>.<br/></p>

    <p><b>Follow on:</b><br/>
    Facebook - <a href="https://www.facebook.com/profile.php?id=61558056483060" target="_blank">Denver YSA Conference</a><br/>
    Instagram - <a href="https://www.instagram.com/DenverYSAConference/" target="_blank">@DenverYSAConference</a></p>'
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
    <a href='https://csgirlscamp.weebly.com/' target='_blank' title='Young Women's Camp Registration'>https://csgirlscamp.weebly.com/</a></p>
    <p>If you have questions, please direct them to <a href='mailto:tiarelittle@yahoo.com' target='_blank'>Sis. Tia Little</a> or <a href='mailto:samshumway@gmail.com' target='_blank'>Bro. Sam Shumway</a>.</p>"
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

function printAnnouncement($item) {
  $output = '<div class="announcement">';
  $output .= '<h2 class="announcement-title">'.$item["title"].'</h2>';
  if (isset($item['date'])) {
    $output .= '<div class="date-time">'.date("F j, Y",$item['date']);
  
    if (isset($item['time'])) {
      $output .= date(" - g:i a",$item['time']);
    }

    if (isset($item['enddate'])) {
      $output .= " &mdash; ".date("F j, Y",$item['enddate']);
    }

    if (isset($item['endtime'])) {
      $output .= date(" - g:i a",$item['endtime']);
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
