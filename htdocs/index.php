<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false); // For IE
header("Pragma: no-cache"); // HTTP/1.0

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
  //   // 'subline' => 'Bishopric 1<span class="super-ordinal">st</span> Counselor'
  // ),
  array(
    'assignment' => 'Conducting',
    'name' => 'Bro. Ken Burke',
    'subline' => 'Bishopric 2<span class="super-ordinal">nd</span> Counselor'
  ),
  // array(
  //   'assignment' => 'Chorister',
  //   'name' => 'Sis. Jean Parks',
  // ),
  array(
      'assignment' => 'Chorister',
      'name' => 'Sis. Adrienne Howard',
    ),
  // array(
  //   'assignment' => 'Accompanist',
  //   'name' => 'Bro. Pam Hall',
  // ),
  array(
    'assignment' => 'Accompanist',
    'name' => 'Bro. Jason Bird',
  ),
  // array(
  //   'assignment' => 'Accompanists',
  //   'name' => 'Sis. Pam Hall<br/>Bro. Jason Bird'
  // )
  // array(
  //   'assignment' => 'Accompanist',
  //   'name' => 'Bro. Joey Bainbridge',
  // ),
);

$hymns = array(
  'opening' => array(
    'assignment' => 'Hymn',
    'reference' => 30,
    'name' => "Come, Come, Ye Saints",
  ),
  'sacrament' => array(
    'assignment' => 'Sacrament Hymn',
    'reference' => 192,
    'name' => "He Died! The Great Redeemer Died",
    // 'tune' => 'Hancock',
  ),
  'closing' => array(
    'assignment' => 'Hymn',
    'reference' => 111,
    'name' => "Rock of Ages",
    // 'href' => ""
  ),
);

$program = array(
  array(
    'type' => 'speaker',
    'content' =>  array(
      'assignment' => 'Speaker',
      'name' => 'Sis. Jerzie Martinez',
      'subline' => '<i>The Garden of Gesthemane</i>'
    ),
  ),
  array(
    'type' => 'music',
    'content' =>  array(
      'assignment' => 'Musical Number',
      'name' => "<i>Gesthemane</i>",
      'subline' => "Children's Choir",
    ),
  ),
  array(
    'type' => 'speaker',
    'content' =>  array(
      'assignment' => 'Speaker',
      'name' => 'Bro. Willet Bird',
      'subline' => '<i>Judas and Caiaphas</i>'
    ),
  ),
  array(
    'type' => 'music',
    'content' =>  array(
      'assignment' => 'Intermediate Hymn',
      'name' => "I Stand All Amazed",
      'reference' => 193,
      // 'tune' => "",
    ),
  ),
  array(
    'type' => 'speaker',
    'content' =>  array(
      'assignment' => 'Speaker',
      'name' => 'Sis. Brayli McKen',
      'subline' => '<i>Peter, Pilate, and a Crown</i>'
    ),
  ),
  array(
    'type' => 'music',
    'content' =>  array(
      'assignment' => 'Intermediate Hymn',
      'name' => "I Believe in Christ",
      'reference' => 134,
      // 'tune' => "",
    ),
  ),
  array(
    'type' => 'speaker',
    'content' =>  array(
      'assignment' => 'Speaker',
      'name' => 'Chris Lewis',
      'subline' => '<i>The Crucifixion</i>'
    ),
  ),
  array(
    'type' => 'music',
    'content' =>  array(
      'assignment' => 'Intermediate Hymn',
      'name' => "Were You There?",
      'reference' => 1206,
      // 'tune' => "",
    ),
  ),
  array(
    'type' => 'speaker',
    'content' =>  array(
      'assignment' => 'Speaker',
      'name' => 'Sadie McKen',
      'subline' => '<i>Joseph of Aramathia and Mary Magdalene</i>'
    ),
  ),
  array(
    'type' => 'music',
    'content' =>  array(
      'assignment' => 'Intermediate Hymn',
      'name' => "He Died! The Great Redeemer Died",
      'reference' => 192,
      // 'tune' => "",
    ),
  ),
  array(
    'type' => 'speaker',
    'content' =>  array(
      'assignment' => 'Speaker',
      'name' => 'Logan Howard',
      'subline' => '<i>Witnesses of the Ressurected Christ</i>'
    ),
  ),
);

$prayers = array(
  'Invocation' => array(
    'assignment' => 'Invocation',
    'name' => 'Sis. Adrienne Howard',
    // 'subline' => 'Colorado Fort Collins Mission'
  ),
  'Benediction' => array(
    'assignment' => 'Benediction',
    'name' => 'Bro. Thomas Finch',
    // 'subline' => ''
  )
);

require('globals.php');

function makeHymnLink($hymnNum, $title, $tune = '', $href=NULL) {
  $output = strtolower($title);
  $output = preg_replace('/[\'\?]+/u', '', $output);
  $output = preg_replace('/[\s\pP]+/u', '-', $output);
  $output .= (strlen($tune) > 0 ? '-'.strtolower($tune) : '');
  if (isset($href)) {
    $output = $href;
  } else {
  $output = ($hymnNum < 1000) ? 
    "https://www.churchofjesuschrist.org/study/manual/hymns/".$output."?lang=eng" :
    "https://www.churchofjesuschrist.org/study/music/hymns-for-home-and-church/".$output."?lang=eng";
  }
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
    $hymn['href'] = isset($hymn['href']) ? $hymn['href'] : NULL;
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
      $output .= '<div class="subline"><a href="'.makeHymnLink($hymn['reference'], $hymn['name'], $hymn['tune'], $hymn['href']).'" target="_blank">'.$bookReference.'</a></div>';
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
      <?php 
            // if ($isSpecial) {
            //   echo "<div class='special-day'>".$specialMeeting[$isSpecial]."</div>";
            // }
      ?>
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
          foreach ($program as $item) {      
            switch ($item['type']) {
              case 'music': 
                printHymn($item['content']);
              break;
              
              case 'speaker':
                printItem($item['content']);
              break; 

              default:
                printItem($itemp['content']);
              }
          }
        } 
        if ($Fast_And_Testimony) {
          echo '<div class="centered-item">Sharing of Testimonies</div>';
        } 
      
        printHymn($hymns['closing']); 
        printItem($prayers['Benediction']); 

      ?>
    </main>
    <footer>
      <a class="button-link" href="announcements.php">Go to Announcements</a>
    </footer>
  </div>
</body>
</html>
