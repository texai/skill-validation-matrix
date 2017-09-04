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
                            if (is_array($info)){$info = '000,000,000,000,000,000';}
                            $profiles = explode(',', $info);
                          ?>
                          <div class="bar"
                          <?php foreach ($profiles as $pid => $profile ): ?>
                            <?php $seniorities = str_split($profile); ?>
                            <?php foreach ($seniorities as $sid => $value ): ?>
                              data-value-<?=$pid?>-<?=$sid?>="<?=$value?>"
                            <?php endforeach; ?>
                          <?php endforeach; ?>
                          
                          ></div>
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
        <? foreach($data['profiles'] as $pid => $profile): ?>
          <tr>
            <th><?=$profile?></th>
            <? foreach($data['seniorities'] as $sid => $seniority): ?>
              <td data-pid="<?=($pid)?>" data-sid="<?=($sid)?>"><?=$seniority?></td>
            <? endforeach; ?>
          </tr>
        <? endforeach; ?>
      </tbody>
    </table>

  </body>
</html>