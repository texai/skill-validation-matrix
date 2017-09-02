<?php
$data = include __DIR__.'/data.php';
?>

<!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset=UTF-8 />
    <meta content='width=device-width, initial-scale=1.0' name=viewport />
    <link rel="stylesheet" type="text/css" href="./styles.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   	<script src="./index.js"></script>
  </head>
  <body>

    <div class="container">
      <? foreach($data['skills'] as $section_name => $section): ?>
        <div class="section">
          <div class="header-section" style="background-color: <?=$section['_color']['sh']?>"><?=$section_name?></div>
          <? foreach($section['_cols'] as $col): ?>
            <div class="col">
              <? foreach($col as $block => $topics): ?>
                <div class="block" style="background-color: <?=$section['_color']['to']?>">
                  <div class="header-block" style="background-color: <?=$section['_color']['bh']?>"><?=$block?></div>
                  <? foreach($topics as $topic => $info): ?>
                    <div class="topic">
                      <div class="widget-wrapper">
                        <div class="widget">
                          <?php
                          	$r = rand(1,100); // 65 20 10 5
                            $s1 = ($r<=65?0:($r<=85?1:($r<=95?2:3)));
                            $s2 = min($s1+rand(0,1),3);
                            $s3 = min($s2+rand(0,1),3);
                          ?>
                          <div class="bar seniority-1 value-<?=$s1?>"></div>
                          <div class="bar seniority-2 value-<?=$s2?>"></div>
                          <div class="bar seniority-3 value-<?=$s3?>"></div>
                        </div>
                        <label><?=$topic?></label>
                      </div>
                    </div>
                  <? endforeach; ?>
                </div>
              <? endforeach; ?>
            </div>
          <? endforeach; ?>
        </div>
      <? endforeach; ?>
      <div class="clearfix"></div>
    </div>

    <table class="selector" border="0">
      <thead>
        <tr>
          <th>Profile</th>
          <th colspan="<?=(count($data['seniorities']))?>">Seniority</th>
        </tr>
      </thead>
      <tbody>
        <? foreach($data['profiles'] as $profile): ?>
          <tr>
            <th><?=$profile?></th>
            <? foreach($data['seniorities'] as $sid => $seniority): ?>
              <td data-class="seniority-<?=($sid+1)?>"><?=$seniority?></td>
            <? endforeach; ?>
          </tr>
        <? endforeach; ?>
      </tbody>
    </table>

  </body>
</html>