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
  //   "title" => "",
  //   "date" => strtotime(""),
  //   "time" => strtotime(""),
  //   "location" => "",
  //   "description" => ""
  // ),
  array(
    "title" => "Mission Preparation Class",
    "date" => strtotime("Sunday, 6:00 pm"),
    "time" => strtotime("Sunday, 6:00 pm"),
    "location" => "1618 Grove Drive, Cheyenne, WY",
    "description" => "<p>The Mission Preparation Class is open to all youth interested in serving a mission. It will be held every Sunday at 6:00 <span class='small-caps'>pm</span> until the cirriculum is completed. The class will be taught by Bro. Randy Davis and various returned missionares.</p>
    <p>If you have questions, please direct them to <a href='mailto:tiarelittle@yahoo.com' target='_blank'>Sis. Tia Little</a> or <a href='mailto:samshumway@gmail.com' target='_blank'>Bro. Sam Shumway</a>.</p>"
  ),
  array(
    "title" => "Set Your Soul On Fire",
    "date" => strtotime("May 27, 2025"),
    "time" => strtotime("May 27, 2025 19:00"),
    "location" => "508 Princeton Lane, Cheyenne, WY",
    "description" => "
    
    <p>Please mark your calendar. Our next Relief Society get together will be at Amber Norby's home on Tuesday, May 27, 2025 at 7:00 <span class='small-caps'>pm</span>. Come gather with the sisters of the ward while we sit around a fire roasting s'mores. If you have a camp chair, you are welcome to bring it with you.</p>
    <p><img src='RS-Activity-full.jpg'></p>
    "
  ),
  array(
    "title" => "Young Men / Young Women Calendar",
    // "date" => strtotime("January 26, 2025"),
    // "time" => strtotime("January 26, 2025 10:30:00"),
    "description" => "<p>Bro. and Sis. Rees have put together a calendar (shared Google spreadsheet) for all upcoming youth events and meetings.</p>
    <p>You can access this shared document at: <br/><a href='https://docs.google.com/spreadsheets/d/1zUSsAU1cWavP31NuGN3o1eqZKI8jg8tC1KXJro7zNZo/' target='_blank'>Western Hills Youth Activities Calendar</a></p>"
  ),
  array(
    "title" => "Love Flowers? Temple grounds opportunity for all ages!",
    "date" => strtotime("May 20, 2025"),
    // "time" => strtotime(""),
    "location" => "Fort Collins Colordo Temple",
    "description" => "
    <p>The temple groundskeeper could use lots of drop-in or scheduled help planting flowers from 9:00 <span class='small-caps'>am</span> to 3:00 <span class='small-caps'>pm</span>, Monday through Friday, May 20-31. Scheduled groups will also be welcome on Saturdays.</p>
    
    <p>Individuals, families, and groups are welcome. Small children are welcome if they can be closely supervised. When you arrive, please report to the groundskeeper, Brother Jesse Baker, on the grounds or in the grounds building by the distribution center. Brother Baker's phone number is (970) 889-0126.</p>"
  ),
  array(
    "title" => "Stake Temple Cleaning Assignment",
    "date" => strtotime("May 23, 2025"),
    "time" => strtotime("May 23, 2025 20:30:00"),
    "location" => "Fort Collins Colorado Temple",
    "description" => "<p>Endowed volunteers are needed to help with a Stake Temple Cleaning Assignment this coming Friday evening, May 23, 2025. Volunteers should come in Sunday dress to the Recommend Desk at 8:30 <span class='small-caps'>pm</span> with their current Temple Recommend. After brief instructions, you will change into the temple work clothes which are provided.</p> 
    <p>Please contact Bro. Steve Garber by phone, text, or email listed below if you are available to volunteer so that he can communicate to the temple that our stake is able to fulfill the assignment.</p>
    <p><b>Steve Garber</b><br/>
    <a href='tel:13076402885'>Phone</a> or <a href='sms:13076402885'>text</a>: (307) 640-2885<br/>
    Email: <a href='mailto:Steve Garber &lt;sdgarbs@gmail.com&gt;' target='_blank'>sdgarbs@gmail.com</a></p>"
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
    "title" => "Cheyenne Stake Primary Day Camp",
    "date" => strtotime("June 7, 2025"),
    "time" => strtotime("June 7, 2025 9:00:00"),
    "location" => "Four Mile Meetinghouse<br/>7721 Badger Rd., Cheyenne, WY",
    "description" => "<p>A Stake Primary activity for kids in Valiant 7 and above will be held at the Four Mile meetinghouse on June 7, 2025 from 9:00 <span class='small-caps'>am</span> to 2:00 <span class='small-caps'>pm</span>. The theme is <b>Ministering Missionaries</b>.</p>
    <p>Please RSVP using <a href='https://docs.google.com/forms/d/e/1FAIpQLScOS6AIKRhIykUfFpD0DK1r52xd-wGwqNnuJhhOBs44vInx7g/viewform?usp=header' target='_blank'>this Google form</a>.</p>"
  ),
  array(
    "title" => "2025 Ward Temple Schedule",
    "date" => strtotime("June 13, 2025"),
    "time" => strtotime("June 13, 2025 19:00:00"),
    "location" => "Colorado Fort Collins Temple",
    "description" => "<p>Here are the upcoming ward temple events. Please make your own reservations on LDS Tools.</p>
    <p>If you can't join us on these particular dates or times, please try to schedule a temple visit sometime during the same week. If you wish to do different ordinance work for your family's needs, please schedule as you wish. In any case, <i>please join us at the temple!</i></p>
    <div class='additional'>
      <div class='left-item'>Jun. 13, 7:00 pm</div>
      <div class='right-item'>Endowments</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Jul. 17, 7:00 pm</div>
      <div class='right-item'>Sealings</div>
    </div>
    <div class='additional'>
      <div class='left-item'>Aug. 21, 7:00 pm</div>
      <div class='right-item'>Endowments</div>
    </div>"
  ),
  array(
    "title" => "Stake Youth Summer Activities",
    "description" => "<p><b>Young Women's Camp (ALL Young Women)</b></p>

    <p>July 15-17, 2025<br/>
    Camp Batel<br/>
    $75 per camper</p>

    <p>Registration Website: (opens a Weebly form)<br/>
    <a href='https://csgirlscamp.weebly.com/' target='_blank' title='Young Women's Camp Registration'>https://csgirlscamp.weebly.com/</a></p>
    <p>If you have questions, please direct them to <a href='mailto:tiarelittle@yahoo.com' target='_blank'>Sis. Tia Little</a> or <a href='mailto:samshumway@gmail.com' target='_blank'>Bro. Sam Shumway</a>.</p>"
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
      <div class='right-item'><a href='sms:13072862641'>(307) 286-2641</a></div>
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
    <main class="program-main">
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
