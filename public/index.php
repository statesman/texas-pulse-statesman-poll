<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => 'Texas Pulse/Statesman poll 2/23/2016',
        'description' => 'POLL: Cruz leading Trump in Texas, Clinton with a big lead on Sanders. A new Texas Pulse/Statesman poll has the latest data ahead of Super Tuesday.',
        "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
        'thumbnail' => 'assets/share.png',
        'url' => 'http://projects.statesman.com/news/texas-pulse-poll/',
        'twitter' => 'statesman'
      );
    ?>

    <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
    <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">
    <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />
    <link rel="canonical" href="<?php print $meta['url']; ?>" />

    <meta name="description" content="<?php print $meta['description']; ?>">

    <meta property="og:title" content="<?php print $meta['title']; ?>"/>
    <meta property="og:description" content="<?php print $meta['description']; ?>"/>
    <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
    <meta property="og:url" content="<?php print $meta['url']; ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
    <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
    <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
    <meta name="twitter:creator:id" content="15464292" />
    <meta name="twitter:creator:id" content="16235644" />
    <meta name="twitter:image:src" content="<?php print $meta['thumbnail']; ?>" />
    <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

    <link href="dist/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/advertising.inc";?>
    <?php include "includes/metrics-head.inc";?>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
            <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
            <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
        </div>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </nav>

    <article class="container">
      <div class="header">
          <h4>Texas Pulse/Statesman poll</h4>
        <h1>Cruz, Clinton still lead in Texas</h1>

        <p>Despite taking a tumble in national polls and early voting states, U.S. Sen. Ted Cruz still has a 12-percentage-point lead over businessman Donald Trump in the Texas Republican presidential primary, according to the Texas Pulse/Statesman poll released Feb. 24, 2016. On the Democratic side, former Secretary of State Hillary Clinton had a whopping 40-point lead over U.S. Sen. Bernie Sanders.</p>

        <p><strong>Methodology</strong>: This Texas Pulse poll surveyed about 1,000 likely voters &mdash; 620 Republicans and 411 Democrats &mdash; between Feb. 19 and Feb. 22.</p>

        <p><strong>Source</strong>: <a href="http://crosswindpr.com/" target="_blank">Crosswind Media &amp; Public Relations</a></p>

        <p>
            <strong>Related</strong>: <a href="http://www.mystatesman.com/news/news/national/ted-cruz-hillary-clinton-lead-among-texas-voters-i/nqXSs/" target="_blank">Ted Cruz, Hillary Clinton lead among Texas voters in latest poll</a> | <a href="http://statesman.com/elections" target="_blank">More Statesman election coverage</a>

        </p>
      </div>
      <hr style="border-top: 5px solid #ddd; margin-bottom:15px;">

           <div id="poll_output"></div>

      <script type="text/html" class="template">
          <div class="col-xs-12 <%= template_data.party %>">
              <h2 class="partyhed"><%= template_data.hed %></h2>
              <%= template_data.chat %>
              <% _.each(template_data.data.poll, function(v, k) { %>
                  <div class="results">
                      <h2 class="question_title">Q<%= k %>. <%= v.question %></h2>
                      <div class="clearfix" style="margin-bottom:15px;"></div>
                      <% _.each( should_sort(k, v.responses), function(resp_value, resp_key) { %>
                      <div class="row bar-wrapper">
                          <div class="col-xs-12 col-md-6">
                              <%= _.keys(resp_value)[0] %>: <%= getPct(_.values(resp_value)[0]) %>%
                          </div>
                          <div class="col-xs-12 col-md-6">
                              <div class="bar-container">
                                  <div class="bar" style="width:<%= getPct(_.values(resp_value)[0]) %>%; background: <%= template_data.barcolor %>;"></div>
                              </div>
                          </div>
                      </div>
                      <% }); %>
                  </div>
              <% }); %>
          </div>
      </script>
    </article>

    <div class="clearfix" id="ads">
      <div class="visible-xs hidden-sm hidden-md hidden-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-3" class="center-block" style="width:320px; height:50px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-3'); });
          </script>
        </div>
      </div>
      <div class="hidden-xs visible-sm visible-md visible-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-1" class="center-block" style="width:728px; height:90px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-1'); });
          </script>
        </div>
      </div>
    </div>

    <p id="legal" class="center-block text-center"><small>© <?php print date("Y"); ?> <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>

    <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
      <script src="//localhost:35729/livereload.js"></script>
    <?php endif; ?>
  </body>
</html>
