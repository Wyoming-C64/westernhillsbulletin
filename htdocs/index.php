<?php 

function mike_dump($v) {
  echo "<pre>";
  var_dump($v);
  echo "</pre>";
}

$leaders = array(
  // array(
  //   'assignment' => 'Presiding',
  //   'name' => 'Pres. Ronald Lopez',
  //   'subline' => 'Cheyenne Wyoming Stake'
  // ),
  array(
    'assignment' => 'Presiding',
    'name' => 'Bishop Jason Whiting',
    'subline' => ''
  ),
  // array(
  //   'assignment' => 'Presiding',
  //   'name' => 'Bro. Michael Howard',
  //   'subline' => 'Bishopric 1<span class="super-ordinal">st</span> Counselor'
  // ),
  // array(
  //   'assignment' => 'Presiding',
  //   'name' => 'Bro. Ken Burke',
  //   'subline' => 'Bishopric 2<span class="super-ordinal">nd</span> Counselor'
  // ),
  // array(
  //   'assignment' => 'Conducting',
  //   'name' => 'Bishop Jason Whiting',
  //   'subline' => ''
  // ),
  // array(
  //   'assignment' => 'Conducting',
  //   'name' => 'Bro. Michael Howard',
  //   'subline' => 'Bishopric 1<span class="super-ordinal">st</span> Counselor'
  // ),
  array(
    'assignment' => 'Conducting',
    'name' => 'Bro. Ken Burke',
    'subline' => 'Bishopric 2<span class="super-ordinal">nd</span> Counselor'
  ),
  array(
    'assignment' => 'Chorister',
    'name' => 'Sis. Adrienne Howard',
  ),
  array(
    'assignment' => 'Accompanist',
    'name' => 'Sis. Pam Hall',
  ),
  // array(
  //   'assignment' => 'Accompanist',
  //   'name' => 'Bro. Jason Bird',
  // ),
);

$hymns = array(
  'opening' => array(
    'assignment' => 'Hymn',
    'reference' => 147,
    'name' => "Sweet Is the Work",
  ),
  'sacrament' => array(
    'assignment' => 'Sacrament Hymn',
    'reference' => 178,
    'name' => "O Lord of Hosts",
    // 'tune' => 'Hancock',
  ),
  'closing' => array(
    'assignment' => 'Hymn',
    'reference' => 252,
    'name' => "Put Your Shoulder to the Wheel",
  ),
);

$intermissionMusic = array(
  // array(
  //   'assignment' => 'Intermediate Hymn',
  //   'name' => "Where Can I Turn for Peace?",
  //   'reference' => 129,
  //   // 'tune' => "",
  // ),
  array(
    'assignment' => 'Musical Number',
    'name' => "<i>God's Gracious Love</i>",
    'subline' => "Bro. Sean Trinnaman"
  )
);

$firstSpeakers = array(
  array(
    'assignment' => 'Youth Speaker',
    'name' => 'Bro. Braden Lewis',
    // 'subline' => 'Colorado Fort Collins Mission'
  ),
  array(
    'assignment' => 'Speaker',
    'name' => 'Sister Engstrom',
    'subline' => 'Colorado Fort Collins Mission'
  ),
  // array(
  //   'assignment' => 'Speaker',
  //   'name' => '',
  //   'subline' => ''
  // ),
  // array(
  //   'assignment' => 'Speaker',
  //   'name' => '',
  //   'subline' => ''
  // ),
  
);

$secondSpeakers = array(
  array(
    'assignment' => 'Speaker',
    'name' => 'Sister Alley',
    'subline' => 'Colorado Fort Collins Mission'
  ),
  // array(
  //   'assignment' => 'Speaker',
  //   'name' => '',
  //   'subline' => ''
  // ),
  // array(
  //   'assignment' => 'Speaker',
  //   'name' => '',
  //   'subline' => ''
  // ),
  // array(
  //   'assignment' => 'Speaker',
  //   'name' => '',
  //   'subline' => ''
  // ),
  
);


$prayers = array(
  'Invocation' => array(
    'assignment' => 'Invocation',
    'name' => 'Bro. Robert Huylar',
    // 'subline' => 'Colorado Fort Collins Mission'
  ),
  'Benediction' => array(
    'assignment' => 'Benediction',
    'name' => 'Sis. Teila Walker',
    // 'subline' => ''
  )
);

require('globals.php');
$meetingType = ($Fast_And_Testimony ? "Fast & Testimony" : "Sacrament");
$css_timestamp = filemtime('style.css');


function makeHymnLink($hymnNum, $title, $tune = '') {
  $output = strtolower($title);
  $output = preg_replace('/[\'\?]+/u', '', $output);
  $output = preg_replace('/[\s\pP]+/u', '-', $output);
  $output .= (strlen($tune) > 0 ? '-'.strtolower($tune) : '');
  $output = ($hymnNum < 1000) ? 
    "https://www.churchofjesuschrist.org/study/manual/hymns/".$output."?lang=eng" :
    "https://www.churchofjesuschrist.org/study/music/hymns-for-home-and-church/".$output."?lang=eng";
  return $output;
}


function printItem($individual) {
  $output = '<div class="line-item">';
  $output .= '<div class="left-item">'.$individual["assignment"].'</div>';
  $output .= '<div class="right-item">'.$individual["name"];
  $output .= '</div>';
  $output .= '</div>'; // End Line Item
  if (isset($individual["subline"])) {
    $output .= '<div class="subline">'.$individual["subline"].'</div>';
  }
  echo $output;
}

function printHymn($hymn) {
  if ($hymn['assignment'] == "Musical Number") {
    printItem($hymn);
  } else {
    $hymn['tune'] = isset($hymn['tune']) ? $hymn['tune'] : FALSE;
    $bookReference = ($hymn['reference'] < 1000) ? "Hymns" : "Hymns&mdash;For Home and Church";
    $bookReference .= " - No. ".$hymn['reference'];
    $output = '<div class="line-item">';
    $output .= '<div class="left-item">'.$hymn["assignment"].'</div>';
    $output .= '<div class="right-item"><i>'.$hymn["name"];
    $output .= '</i></div>';
    $output .= '</div>'; // End Line Item
    if (isset($hymn["subline"])) {
      $output .= '<div class="subline">'.$hymn["subline"].'</div>';
    }
    if (isset($hymn['reference'])) {
      $output .= '<div class="subline"><a href="'.makeHymnLink($hymn['reference'], $hymn['name'], $hymn['tune']).'" target="_blank">'.$bookReference.'</a></div>';
    }
    echo $output;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Western Hills Ward Sacrament Meeting</title>
  <link rel="stylesheet" href="style.css?ver=<?php echo $css_timestamp; ?>">
</head>
<body>
  <div class="program">
    <header class="program-header">
      <div class="ward-title">
        <span class="ward-name">Western Hills Ward</span><br/>The Church of Jesus Christ of Latter-day Saints</div>
      <h1><?php echo $meetingType; ?> Meeting</h1>
      <div class="meeting-date"><?php echo date('F j, Y', $meetingDate); ?></div>
      <div class="meeting-leaders">
        <?php
          foreach ($leaders as $leader) {
            printItem($leader);
          }
        ?>
    </div>
    </header>
    <main>
      <?php printHymn($hymns['opening']); ?>
      <?php printItem($prayers['Invocation']); ?>
      <div class="centered-item">Ward / Stake Business</div>
      <?php printHymn($hymns['sacrament']); ?>
      <div class="centered-item">Administration of the Sacrament</div>
      <?php 
        if (!$Fast_And_Testimony) {
          foreach ($firstSpeakers as $speaker) {      
            printItem($speaker); 
          }
        }
      ?>
      <?php 
        if ($Fast_And_Testimony) {
          echo '<div class="centered-item">Sharing of Testimonies</div>';
        } else {
          printHymn($intermissionMusic[0]); 
        }
      ?>
      <?php
        if (!$Fast_And_Testimony) { 
          foreach ($secondSpeakers as $speaker) {      
            printItem($speaker); 
          }
        }
      ?>
      <?php printHymn($hymns['closing']); ?>
      <?php printItem($prayers['Benediction']); ?>
    </main>
    <footer>
      <a class="button-link" href="announcements.php">Go to Announcements</a>
    </footer>
  </div>
</body>
</html>
