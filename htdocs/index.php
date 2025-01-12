<?php 

function mike_dump($v) {
  echo "<pre>";
  var_dump($v);
  echo "</pre>";
}

$leaders = array(
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
  array(
    'assignment' => 'Conducting',
    'name' => 'Bishop Jason Whiting',
    'subline' => ''
  ),
  // array(
  //   'assignment' => 'Conducting',
  //   'name' => 'Bro. Michael Howard',
  //   'subline' => 'Bishopric 1<span class="super-ordinal">st</span> Counselor'
  // ),
  // array(
  //   'assignment' => 'Conducting',
  //   'name' => 'Bro. Ken Burke',
  //   'subline' => 'Bishopric 2<span class="super-ordinal">nd</span> Counselor'
  // ),
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
    'name' => "We Listen to a Prophet's Voice",
    'reference' => '<i>Hymns</i> - No. 22',
  ),
  'sacrament' => array(
    'assignment' => 'Sacrament Hymn',
    'name' => "Again We Meet Around the Board",
    // 'tune' => 'Aeolian',
    'reference' => '<i>Hymns</i> - No. 186',
  ),
  'closing' => array(
    'assignment' => 'Hymn',
    'name' => "Joseph Smith's First Prayer",
    'reference' => '<i>Hymns</i> - No. 26',
  ),
);

$intermissionMusic = array(
  array(
    'assignment' => 'Intermediate Hymn',
    'name' => "Now We'll Sing With One Accord",
    'reference' => '<i>Hymns</i> - No. 25',
  ),
  // array(
  //   'assignment' => 'Musical Number',
  //   'name' => '',
  //   'subline' => ''
  // )
);

$firstSpeakers = array(
  array(
    'assignment' => 'Youth Speaker',
    'name' => 'Bro. Johnny Walker',
    // 'subline' => 'Colorado Fort Collins Mission'
  ),
  array(
    'assignment' => 'Speaker',
    'name' => 'Bro. Hunter Chapman',
    'subline' => ''
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
    'name' => 'Bro. Jeff Rees',
    'subline' => ''
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
    'name' => 'Bro. Mike Lewis',
    // 'subline' => ''
  ),
  'Benediction' => array(
    'assignment' => 'Benediction',
    'name' => 'Sis. Susanna Bird',
    // 'subline' => ''
  )
);

require('globals.php');
$meetingType = ($Fast_And_Testimony ? "Fast & Testimony" : "Sacrament");
$css_timestamp = filemtime('style.css');


function makeHymnLink($title, $tune = '') {
  $output = strtolower($title);
  $output = preg_replace('/[\']+/u', '', $output);
  $output = preg_replace('/[\s\pP]+/u', '-', $output);
  $output .= (strlen($tune) > 0 ? '-'.strtolower($tune) : '');
  $output = "https://www.churchofjesuschrist.org/study/manual/hymns/".$output."?lang=eng";
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
  $hymn['tune'] = isset($hymn['tune']) ? $hymn['tune'] : FALSE;
  $output = '<div class="line-item">';
  $output .= '<div class="left-item">'.$hymn["assignment"].'</div>';
  $output .= '<div class="right-item"><i>'.$hymn["name"];
  $output .= '</i></div>';
  $output .= '</div>'; // End Line Item
  if (isset($hymn["subline"])) {
    $output .= '<div class="subline">'.$hymn["subline"].'</div>';
  }
  if (isset($hymn['reference'])) {
    $output .= '<div class="subline"><a href="'.makeHymnLink($hymn['name'],$hymn['tune']).'" target="_blank">'.$hymn['reference'].'</a></div>';
  }
  echo $output;
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
        foreach ($firstSpeakers as $speaker) {      
          printItem($speaker); 
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
        foreach ($secondSpeakers as $speaker) {      
          printItem($speaker); 
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
