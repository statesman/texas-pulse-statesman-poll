<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => 'Cruz, Clinton lead Texas going into primary',
        'description' => 'A new Texas Pulse/Statesman poll surveys likely voters ahead of Super Tuesday.',
        "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
        'thumbnail' => 'http://projects.statesman.com/news/texas-pulse-poll/assets/share.png',
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
                  <div class="results" id="<%= k %>" style="border-top:5px solid <%= template_data.accent %>">
                      <h2 class="question_title">Q<%= k %>. <%= v.question %></h2>
                      <% _.each( should_sort(k, v.responses, "all_lv"), function(resp_value, resp_key) { %>
                      <div class="row bar-wrapper">
                          <div class="col-xs-12 col-md-6">
                              <%= resp_value.text %>: <%= getPct(resp_value.all_lv) %>%
                          </div>
                          <div class="col-xs-12 col-md-6">
                              <div class="bar-container">
                                  <div class="bar" style="width:<%= getPct(resp_value.all_lv) %>%; background: <%= template_data.barcolor %>;"></div>
                              </div>
                          </div>
                      </div>
                      <% }); %>
                      <p style="margin-top:20px;">Click to show responses by ...</p>

                      <% if ( _.has(v.responses[0], "age_18_39") && _.has(v.responses[0], "age_40_64") && _.has(v.responses[0], "age_o65") ) { %>
                      <span class="label label-crosstab label-big label-<% if (template_data.party === 'dem') { %>dem<% } else { %>gop<% }; %> notouch" data-attr="age">age</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "race_w") && _.has(v.responses[0], "race_o") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="race">race</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "sex_w") && _.has(v.responses[0], "sex_m") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="sex">sex</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "income_u30") && _.has(v.responses[0], "income_30_50") && _.has(v.responses[0], "income_50_100") && _.has(v.responses[0], "income_100_200") && _.has(v.responses[0], "income_100_200") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="income">income</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "edu_ahs") && _.has(v.responses[0], "edu_ghs") && _.has(v.responses[0], "edu_ac") && _.has(v.responses[0], "edu_gc") && _.has(v.responses[0], "edu_gs") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="education">education</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "party_o") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="party">party affiliation</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "ideology_m") && _.has(v.responses[0], "ideology_l") && _.has(v.responses[0], "ideology_c") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="ideology">political ideology</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "married_y") && _.has(v.responses[0], "married_n") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="married">marital status</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "children_y") && _.has(v.responses[0], "children_n") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="children">family status</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "voted_y") && _.has(v.responses[0], "voted_n") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="voted">early voting status</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "primary_econ") && _.has(v.responses[0], "primary_wash") && _.has(v.responses[0], "primary_social") && _.has(v.responses[0], "primary_border") && _.has(v.responses[0], "primary_intl") && _.has(v.responses[0], "primary_gen") && _.has(v.responses[0], "primary_other") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="primary">reason for supporting candidate</span>
                      <% }; %>
                      <% if ( _.has(v.responses[0], "issue_ts") && _.has(v.responses[0], "issue_ej") && _.has(v.responses[0], "issue_e") && _.has(v.responses[0], "issue_t") && _.has(v.responses[0], "issue_ib") && _.has(v.responses[0], "issue_h") && _.has(v.responses[0], "issue_s") ) { %>
                      <span class="label label-crosstab label-big label-lite notouch" data-attr="issue">most important issue facing TX</span>
                      <% }; %>
                    <div class="clearfix" style="margin-bottom:20px;"></div>

                    <div class="crosstab_tables">


<% if ( _.has(v.responses[0], "age_18_39") && _.has(v.responses[0], "age_40_64") && _.has(v.responses[0], "age_o65") ) { %>
<div class="ct_table age col-xs-12" style="padding:0; display:inline;">
      <h3 class="crosstab_hed">By age</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">18-39</th>
                  <th class="r">40-64</th>
                  <th class="r">65+</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "age_18_39"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:19%"><%= resp_value.text %></td>
                      <td class="r" style="width:27%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.age_18_39) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.age_18_39) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.age_18_39) %>%, #fafafa <%= getPct(resp_value.age_18_39) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.age_18_39) %>%, #fafafa <%= getPct(resp_value.age_18_39) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.age_18_39) %>%, #fafafa <%= getPct(resp_value.age_18_39) %>%);"><%= getPct(resp_value.age_18_39) %>%</td>

                      <td class="r" style="width:27%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.age_40_64) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.age_40_64) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.age_40_64) %>%, #fafafa <%= getPct(resp_value.age_40_64) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.age_40_64) %>%, #fafafa <%= getPct(resp_value.age_40_64) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.age_40_64) %>%, #fafafa <%= getPct(resp_value.age_40_64) %>%);"><%= getPct(resp_value.age_40_64) %>%</td>

                      <td class="r" style="width:27%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.age_o65) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.age_o65) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.age_o65) %>%, #fafafa <%= getPct(resp_value.age_o65) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.age_o65) %>%, #fafafa <%= getPct(resp_value.age_o65) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.age_o65) %>%, #fafafa <%= getPct(resp_value.age_o65) %>%);"><%= getPct(resp_value.age_o65) %>%</td>
                  </tr>
              <% }); %>
          </tbody>
      </table>

</div>

<% }; %>

<% if ( _.has(v.responses[0], "race_w") && _.has(v.responses[0], "race_o") ) { %>

<div class="ct_table race col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By race</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">White</th>
<% if ( _.has(v.responses[0], "race_b") ) { %><th class="r">Black</th><% }; %>
<% if ( _.has(v.responses[0], "race_h") ) { %><th class="r">Hispanic</th><% }; %>
                  <th class="r">Other</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "race_w"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="<% if (+count_items(v.responses, 'race') === 3 ) { %>25<% } else { %>20<% }; %>%"><%= resp_value.text %></td>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'race') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.race_w) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.race_w) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.race_w) %>%, #fafafa <%= getPct(resp_value.race_w) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.race_w) %>%, #fafafa <%= getPct(resp_value.race_w) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.race_w) %>%, #fafafa <%= getPct(resp_value.race_w) %>%);"><%= getPct(resp_value.race_w) %>%</td>

<% if (_.has(resp_value, "race_b")) { %>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'race') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.race_b) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.race_b) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.race_b) %>%, #fafafa <%= getPct(resp_value.race_b) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.race_b) %>%, #fafafa <%= getPct(resp_value.race_b) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.race_b) %>%, #fafafa <%= getPct(resp_value.race_b) %>%);"><%= getPct(resp_value.race_b) %>%</td>
<% }; %>

<% if (_.has(resp_value, "race_h")) { %>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'race') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.race_h) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.race_h) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.race_h) %>%, #fafafa <%= getPct(resp_value.race_h) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.race_h) %>%, #fafafa <%= getPct(resp_value.race_h) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.race_h) %>%, #fafafa <%= getPct(resp_value.race_h) %>%);"><%= getPct(resp_value.race_h) %>%</td>
<% }; %>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'race') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.race_o) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.race_o) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.race_o) %>%, #fafafa <%= getPct(resp_value.race_o) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.race_o) %>%, #fafafa <%= getPct(resp_value.race_o) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.race_o) %>%, #fafafa <%= getPct(resp_value.race_o) %>%);"><%= getPct(resp_value.race_o) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>

</div>
<% }; %>



<% if ( _.has(v.responses[0], "sex_w") && _.has(v.responses[0], "sex_m") ) { %>

<div class="ct_table sex col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By sex</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Men</th>
                  <th class="r">Women</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "sex_m"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:30%"><%= resp_value.text %></td>
                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.sex_m) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.sex_m) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.sex_m) %>%, #fafafa <%= getPct(resp_value.sex_m) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.sex_m) %>%, #fafafa <%= getPct(resp_value.sex_m) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.sex_m) %>%, #fafafa <%= getPct(resp_value.sex_m) %>%);"><%= getPct(resp_value.sex_m) %>%</td>

                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.sex_w) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.sex_w) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.sex_w) %>%, #fafafa <%= getPct(resp_value.sex_w) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.sex_w) %>%, #fafafa <%= getPct(resp_value.sex_w) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.sex_w) %>%, #fafafa <%= getPct(resp_value.sex_w) %>%);"><%= getPct(resp_value.sex_w) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>

</div>

<% }; %>

<% if ( _.has(v.responses[0], "income_u30") && _.has(v.responses[0], "income_30_50") && _.has(v.responses[0], "income_50_100") && _.has(v.responses[0], "income_100_200") && _.has(v.responses[0], "income_100_200") ) { %>

<div class="ct_table income col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By income</h3>
      <div class="table-responsive">
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Under $30K</th>
                  <th class="r">$30K-$50K</th>
                  <th class="r">$50K-$100K</th>
                  <th class="r">$100K-$200K</th>
                  <th class="r">$200K+</th>
                  <% if ( _.has(v.responses[0], "income_ns") ) { %><th class="r">Not sure</th><% }; %>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "income_u30"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>15<% } else { %>16<% }; %>%"><%= resp_value.text %></td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.income_u30) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.income_u30) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.income_u30) %>%, #fafafa <%= getPct(resp_value.income_u30) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.income_u30) %>%, #fafafa <%= getPct(resp_value.income_u30) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.income_u30) %>%, #fafafa <%= getPct(resp_value.income_u30) %>%);"><%= getPct(resp_value.income_u30) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.income_30_50) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.income_30_50) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.income_30_50) %>%, #fafafa <%= getPct(resp_value.income_30_50) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.income_30_50) %>%, #fafafa <%= getPct(resp_value.income_30_50) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.income_30_50) %>%, #fafafa <%= getPct(resp_value.income_30_50) %>%);"><%= getPct(resp_value.income_30_50) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.income_50_100) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.income_50_100) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.income_50_100) %>%, #fafafa <%= getPct(resp_value.income_50_100) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.income_50_100) %>%, #fafafa <%= getPct(resp_value.income_50_100) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.income_50_100) %>%, #fafafa <%= getPct(resp_value.income_50_100) %>%);"><%= getPct(resp_value.income_50_100) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.income_100_200) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.income_100_200) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.income_100_200) %>%, #fafafa <%= getPct(resp_value.income_100_200) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.income_100_200) %>%, #fafafa <%= getPct(resp_value.income_100_200) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.income_100_200) %>%, #fafafa <%= getPct(resp_value.income_100_200) %>%);"><%= getPct(resp_value.income_100_200) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.income_o200) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.income_o200) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.income_o200) %>%, #fafafa <%= getPct(resp_value.income_o200) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.income_o200) %>%, #fafafa <%= getPct(resp_value.income_o200) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.income_o200) %>%, #fafafa <%= getPct(resp_value.income_o200) %>%);"><%= getPct(resp_value.income_o200) %>%</td>

<% if ( _.has(v.responses[0], "income_ns") ) { %>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'income') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.income_ns) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.income_ns) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.income_ns) %>%, #fafafa <%= getPct(resp_value.income_ns) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.income_ns) %>%, #fafafa <%= getPct(resp_value.income_ns) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.income_ns) %>%, #fafafa <%= getPct(resp_value.income_ns) %>%);"><%= getPct(resp_value.income_ns) %>%</td>
<% }; %>


                  </tr>
              <% }); %>
          </tbody>
      </table>
  </div>

</div>

<% }; %>



<% if ( _.has(v.responses[0], "edu_ahs") && _.has(v.responses[0], "edu_ghs") && _.has(v.responses[0], "edu_ac") && _.has(v.responses[0], "edu_gc") && _.has(v.responses[0], "edu_gs") ) { %>
<div class="ct_table education col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By education</h3>
      <div class="table-responsive">
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Attended high school</th>
                  <th class="r">Graduated high school</th>
                  <th class="r">Attended college</th>
                  <th class="r">Graduated college</th>
                  <th class="r">Graduate school</th>
                  <% if ( _.has(v.responses[0], "edu_ns") ) { %><th class="r">Not sure</th><% }; %>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "edu_ahs"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>15<% } else { %>16<% }; %>%"><%= resp_value.text %></td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.edu_ahs) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.edu_ahs) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.edu_ahs) %>%, #fafafa <%= getPct(resp_value.edu_ahs) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.edu_ahs) %>%, #fafafa <%= getPct(resp_value.edu_ahs) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.edu_ahs) %>%, #fafafa <%= getPct(resp_value.edu_ahs) %>%);"><%= getPct(resp_value.edu_ahs) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.edu_ghs) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.edu_ghs) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.edu_ghs) %>%, #fafafa <%= getPct(resp_value.edu_ghs) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.edu_ghs) %>%, #fafafa <%= getPct(resp_value.edu_ghs) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.edu_ghs) %>%, #fafafa <%= getPct(resp_value.edu_ghs) %>%);"><%= getPct(resp_value.edu_ghs) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.edu_ac) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.edu_ac) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.edu_ac) %>%, #fafafa <%= getPct(resp_value.edu_ac) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.edu_ac) %>%, #fafafa <%= getPct(resp_value.edu_ac) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.edu_ac) %>%, #fafafa <%= getPct(resp_value.edu_ac) %>%);"><%= getPct(resp_value.edu_ac) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.edu_gc) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.edu_gc) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.edu_gc) %>%, #fafafa <%= getPct(resp_value.edu_gc) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.edu_gc) %>%, #fafafa <%= getPct(resp_value.edu_gc) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.edu_gc) %>%, #fafafa <%= getPct(resp_value.edu_gc) %>%);"><%= getPct(resp_value.edu_gc) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.edu_gs) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.edu_gs) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.edu_gs) %>%, #fafafa <%= getPct(resp_value.edu_gs) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.edu_gs) %>%, #fafafa <%= getPct(resp_value.edu_gs) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.edu_gs) %>%, #fafafa <%= getPct(resp_value.edu_gs) %>%);"><%= getPct(resp_value.edu_gs) %>%</td>

<% if ( _.has(v.responses[0], "edu_ns") ) { %>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'edu') === 5 ) { %>17<% } else { %>14<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.edu_ns) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.edu_ns) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.edu_ns) %>%, #fafafa <%= getPct(resp_value.edu_ns) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.edu_ns) %>%, #fafafa <%= getPct(resp_value.edu_ns) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.edu_ns) %>%, #fafafa <%= getPct(resp_value.edu_ns) %>%);"><%= getPct(resp_value.edu_ns) %>%</td>
<% }; %>


                  </tr>
              <% }); %>
          </tbody>
      </table>
  </div>

</div>

<% }; %>


<% if ( _.has(v.responses[0], "party_o") ) { %>
<div class="ct_table party col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By party</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
<% if ( _.has(v.responses[0], "party_r") ) { %><th class="r">Republican</th><% }; %>
<% if ( _.has(v.responses[0], "party_d") ) { %><th class="r">Democrat</th><% }; %>
                  <th class="r">Other</th>
              </tr>
          </thead>
          <tbody>
<% if ( _.has(v.responses[0], "party_r") ) { %>
        <% _.each(should_sort(k, v.responses, "party_r"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:30%"><%= resp_value.text %></td>
                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.party_r) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.party_r) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.party_r) %>%, #fafafa <%= getPct(resp_value.party_r) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.party_r) %>%, #fafafa <%= getPct(resp_value.party_r) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.party_r) %>%, #fafafa <%= getPct(resp_value.party_r) %>%);"><%= getPct(resp_value.party_r) %>%</td>

                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.party_o) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.party_o) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.party_o) %>%, #fafafa <%= getPct(resp_value.party_o) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.party_o) %>%, #fafafa <%= getPct(resp_value.party_o) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.party_o) %>%, #fafafa <%= getPct(resp_value.party_o) %>%);"><%= getPct(resp_value.party_o) %>%</td>
                  </tr>
              <% }); %>
<% }; %>

<% if ( _.has(v.responses[0], "party_d") ) { %>
        <% _.each(should_sort(k, v.responses, "party_d"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:30%"><%= resp_value.text %></td>
                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.party_d) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.party_d) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.party_d) %>%, #fafafa <%= getPct(resp_value.party_d) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.party_d) %>%, #fafafa <%= getPct(resp_value.party_d) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.party_d) %>%, #fafafa <%= getPct(resp_value.party_d) %>%);"><%= getPct(resp_value.party_d) %>%</td>

                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.party_o) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.party_o) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.party_o) %>%, #fafafa <%= getPct(resp_value.party_o) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.party_o) %>%, #fafafa <%= getPct(resp_value.party_o) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.party_o) %>%, #fafafa <%= getPct(resp_value.party_o) %>%);"><%= getPct(resp_value.party_o) %>%</td>
                  </tr>
              <% }); %>
<% }; %>

          </tbody>
      </table>

</div>

<% }; %>

<% if ( _.has(v.responses[0], "ideology_m") && _.has(v.responses[0], "ideology_l") && _.has(v.responses[0], "ideology_c") ) { %>

<div class="ct_table ideology col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By political ideology</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <% if (template_data.party === "gop") { %>
                  <th class="r">Conservative</th>
                  <th class="r">Moderate</th>
                  <th class="r">Liberal</th>
                  <% }; %>
                  <% if (template_data.party === "dem") { %>
                  <th class="r">Liberal</th>
                  <th class="r">Moderate</th>
                  <th class="r">Conservative</th>
                  <% }; %>
<% if ( _.has(v.responses[0], "ideology_ns") ) { %><th class="r">Not sure</th><% }; %>
              </tr>
          </thead>
          <tbody>
         <% if (template_data.party === "gop") { %>
              <% _.each(should_sort(k, v.responses, "ideology_c"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%"><%= resp_value.text %></td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_c) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_c) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_c) %>%, #fafafa <%= getPct(resp_value.ideology_c) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_c) %>%, #fafafa <%= getPct(resp_value.ideology_c) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_c) %>%, #fafafa <%= getPct(resp_value.ideology_c) %>%);"><%= getPct(resp_value.ideology_c) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_m) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_m) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_m) %>%, #fafafa <%= getPct(resp_value.ideology_m) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_m) %>%, #fafafa <%= getPct(resp_value.ideology_m) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_m) %>%, #fafafa <%= getPct(resp_value.ideology_m) %>%);"><%= getPct(resp_value.ideology_m) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_l) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_l) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_l) %>%, #fafafa <%= getPct(resp_value.ideology_l) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_l) %>%, #fafafa <%= getPct(resp_value.ideology_l) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_l) %>%, #fafafa <%= getPct(resp_value.ideology_l) %>%);"><%= getPct(resp_value.ideology_l) %>%</td>

<% if ( _.has(v.responses[0], "ideology_ns") ) { %>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_ns) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_ns) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_ns) %>%, #fafafa <%= getPct(resp_value.ideology_ns) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_ns) %>%, #fafafa <%= getPct(resp_value.ideology_ns) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_ns) %>%, #fafafa <%= getPct(resp_value.ideology_ns) %>%);"><%= getPct(resp_value.ideology_ns) %>%</td>
<% }; %>

                  </tr>
              <% }); %>
        <% }; %>

         <% if (template_data.party === "dem") { %>
              <% _.each(should_sort(k, v.responses, "ideology_l"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%"><%= resp_value.text %></td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_l) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_l) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_l) %>%, #fafafa <%= getPct(resp_value.ideology_l) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_l) %>%, #fafafa <%= getPct(resp_value.ideology_l) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_l) %>%, #fafafa <%= getPct(resp_value.ideology_l) %>%);"><%= getPct(resp_value.ideology_l) %>%</td>

                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_m) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_m) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_m) %>%, #fafafa <%= getPct(resp_value.ideology_m) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_m) %>%, #fafafa <%= getPct(resp_value.ideology_m) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_m) %>%, #fafafa <%= getPct(resp_value.ideology_m) %>%);"><%= getPct(resp_value.ideology_m) %>%</td>

                    <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_c) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_c) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_c) %>%, #fafafa <%= getPct(resp_value.ideology_c) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_c) %>%, #fafafa <%= getPct(resp_value.ideology_c) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_c) %>%, #fafafa <%= getPct(resp_value.ideology_c) %>%);"><%= getPct(resp_value.ideology_c) %>%</td>

<% if ( _.has(v.responses[0], "ideology_ns") ) { %>
                      <td class="r" style="width:<% if (+count_items(v.responses, 'ideology') === 3 ) { %>25<% } else { %>20<% }; %>%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.ideology_ns) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.ideology_ns) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.ideology_ns) %>%, #fafafa <%= getPct(resp_value.ideology_ns) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.ideology_ns) %>%, #fafafa <%= getPct(resp_value.ideology_ns) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.ideology_ns) %>%, #fafafa <%= getPct(resp_value.ideology_ns) %>%);"><%= getPct(resp_value.ideology_ns) %>%</td>
<% }; %>

                  </tr>
              <% }); %>
        <% }; %>

          </tbody>
      </table>

</div>
<% }; %>

<% if ( _.has(v.responses[0], "married_y") && _.has(v.responses[0], "married_n") ) { %>
<div class="ct_table married col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By marital status</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Married</th>
                  <th class="r">Unmarried</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "married_y"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:30%"><%= resp_value.text %></td>
                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.married_y) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.married_y) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.married_y) %>%, #fafafa <%= getPct(resp_value.married_y) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.married_y) %>%, #fafafa <%= getPct(resp_value.married_y) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.married_y) %>%, #fafafa <%= getPct(resp_value.married_y) %>%);"><%= getPct(resp_value.married_y) %>%</td>

                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.married_n) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.married_n) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.married_n) %>%, #fafafa <%= getPct(resp_value.married_n) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.married_n) %>%, #fafafa <%= getPct(resp_value.married_n) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.married_n) %>%, #fafafa <%= getPct(resp_value.married_n) %>%);"><%= getPct(resp_value.married_n) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>

</div>
<% }; %>

<% if ( _.has(v.responses[0], "children_y") && _.has(v.responses[0], "children_n") ) { %>
<div class="ct_table children col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By child-havin'</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Children</th>
                  <th class="r">No children</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "children_y"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:30%"><%= resp_value.text %></td>
                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.children_y) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.children_y) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.children_y) %>%, #fafafa <%= getPct(resp_value.children_y) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.children_y) %>%, #fafafa <%= getPct(resp_value.children_y) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.children_y) %>%, #fafafa <%= getPct(resp_value.children_y) %>%);"><%= getPct(resp_value.children_y) %>%</td>

                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.children_n) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.children_n) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.children_n) %>%, #fafafa <%= getPct(resp_value.children_n) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.children_n) %>%, #fafafa <%= getPct(resp_value.children_n) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.children_n) %>%, #fafafa <%= getPct(resp_value.children_n) %>%);"><%= getPct(resp_value.children_n) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>

</div>
<% }; %>


<% if ( _.has(v.responses[0], "voted_y") && _.has(v.responses[0], "voted_n") ) { %>
<div class="ct_table voted col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By early voter status</h3>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Already voted in primary</th>
                  <th class="r">Haven't voted yet</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "voted_y"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:30%"><%= resp_value.text %></td>
                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.voted_y) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.voted_y) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.voted_y) %>%, #fafafa <%= getPct(resp_value.voted_y) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.voted_y) %>%, #fafafa <%= getPct(resp_value.voted_y) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.voted_y) %>%, #fafafa <%= getPct(resp_value.voted_y) %>%);"><%= getPct(resp_value.voted_y) %>%</td>

                      <td class="r" style="width:35%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.voted_n) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.voted_n) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.voted_n) %>%, #fafafa <%= getPct(resp_value.voted_n) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.voted_n) %>%, #fafafa <%= getPct(resp_value.voted_n) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.voted_n) %>%, #fafafa <%= getPct(resp_value.voted_n) %>%);"><%= getPct(resp_value.voted_n) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>

</div>
<% }; %>


<% if ( _.has(v.responses[0], "primary_econ") && _.has(v.responses[0], "primary_wash") && _.has(v.responses[0], "primary_social") && _.has(v.responses[0], "primary_border") && _.has(v.responses[0], "primary_intl") && _.has(v.responses[0], "primary_gen") && _.has(v.responses[0], "primary_other") ) { %>

<div class="ct_table primary col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By primary reason for supporting candidate</h3>
<div class="table-responsive">
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Ability to manage the economy</th>
                  <th class="r">Ability to change Washington</th>
                  <th class="r">Ability to manage social changes in the country</th>
                  <th class="r">Ability to manage border security</th>
                  <th class="r">Ability to handle international relations and trade issues</th>
                  <th class="r">Ability to win the general election</th>
                  <th class="r">Other</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "primary_econ"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:16%"><%= resp_value.text %></td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_econ) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_econ) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_econ) %>%, #fafafa <%= getPct(resp_value.primary_econ) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_econ) %>%, #fafafa <%= getPct(resp_value.primary_econ) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_econ) %>%, #fafafa <%= getPct(resp_value.primary_econ) %>%);"><%= getPct(resp_value.primary_econ) %>%</td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_wash) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_wash) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_wash) %>%, #fafafa <%= getPct(resp_value.primary_wash) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_wash) %>%, #fafafa <%= getPct(resp_value.primary_wash) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_wash) %>%, #fafafa <%= getPct(resp_value.primary_wash) %>%);"><%= getPct(resp_value.primary_wash) %>%</td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_social) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_social) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_social) %>%, #fafafa <%= getPct(resp_value.primary_social) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_social) %>%, #fafafa <%= getPct(resp_value.primary_social) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_social) %>%, #fafafa <%= getPct(resp_value.primary_social) %>%);"><%= getPct(resp_value.primary_social) %>%</td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_border) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_border) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_border) %>%, #fafafa <%= getPct(resp_value.primary_border) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_border) %>%, #fafafa <%= getPct(resp_value.primary_border) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_border) %>%, #fafafa <%= getPct(resp_value.primary_border) %>%);"><%= getPct(resp_value.primary_border) %>%</td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_intl) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_intl) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_intl) %>%, #fafafa <%= getPct(resp_value.primary_intl) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_intl) %>%, #fafafa <%= getPct(resp_value.primary_intl) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_intl) %>%, #fafafa <%= getPct(resp_value.primary_intl) %>%);"><%= getPct(resp_value.primary_intl) %>%</td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_gen) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_gen) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_gen) %>%, #fafafa <%= getPct(resp_value.primary_gen) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_gen) %>%, #fafafa <%= getPct(resp_value.primary_gen) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_gen) %>%, #fafafa <%= getPct(resp_value.primary_gen) %>%);"><%= getPct(resp_value.primary_gen) %>%</td>

                      <td class="r" style="width:12%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.primary_other) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.primary_other) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.primary_other) %>%, #fafafa <%= getPct(resp_value.primary_other) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.primary_other) %>%, #fafafa <%= getPct(resp_value.primary_other) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.primary_other) %>%, #fafafa <%= getPct(resp_value.primary_other) %>%);"><%= getPct(resp_value.primary_other) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>
  </div>

</div>
<% }; %>

<% if ( _.has(v.responses[0], "issue_ts") && _.has(v.responses[0], "issue_ej") && _.has(v.responses[0], "issue_e") && _.has(v.responses[0], "issue_t") && _.has(v.responses[0], "issue_ib") && _.has(v.responses[0], "issue_h") && _.has(v.responses[0], "issue_s") ) { %>

<div class="ct_table issue col-xs-12" style="padding:0;">
      <h3 class="crosstab_hed">By response to "What is the most important issue facing Texas today?"</h3>
      <div class="table-responsive">
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th></th>
                  <th class="r">Taxes and spending</th>
                  <th class="r">Economy and jobs</th>
                  <th class="r">Education</th>
                  <th class="r">Transportation</th>
                  <th class="r">Immigration and border security</th>
                  <th class="r">Health care</th>
                  <th class="r">Social issues</th>
                  <th class="r">Other</th>
                  <th class="r">Not sure</th>
              </tr>
          </thead>
          <tbody>
              <% _.each(should_sort(k, v.responses, "issue_ts"), function(resp_value, resp_key) { %>
                  <tr>
                      <td class="r" style="width:10%"><%= resp_value.text %></td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_ts) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_ts) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_ts) %>%, #fafafa <%= getPct(resp_value.issue_ts) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_ts) %>%, #fafafa <%= getPct(resp_value.issue_ts) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_ts) %>%, #fafafa <%= getPct(resp_value.issue_ts) %>%);"><%= getPct(resp_value.issue_ts) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_ej) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_ej) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_ej) %>%, #fafafa <%= getPct(resp_value.issue_ej) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_ej) %>%, #fafafa <%= getPct(resp_value.issue_ej) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_ej) %>%, #fafafa <%= getPct(resp_value.issue_ej) %>%);"><%= getPct(resp_value.issue_ej) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_e) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_e) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_e) %>%, #fafafa <%= getPct(resp_value.issue_e) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_e) %>%, #fafafa <%= getPct(resp_value.issue_e) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_e) %>%, #fafafa <%= getPct(resp_value.issue_e) %>%);"><%= getPct(resp_value.issue_e) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_t) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_t) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_t) %>%, #fafafa <%= getPct(resp_value.issue_t) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_t) %>%, #fafafa <%= getPct(resp_value.issue_t) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_t) %>%, #fafafa <%= getPct(resp_value.issue_t) %>%);"><%= getPct(resp_value.issue_t) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_ib) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_ib) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_ib) %>%, #fafafa <%= getPct(resp_value.issue_ib) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_ib) %>%, #fafafa <%= getPct(resp_value.issue_ib) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_ib) %>%, #fafafa <%= getPct(resp_value.issue_ib) %>%);"><%= getPct(resp_value.issue_ib) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_h) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_h) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_h) %>%, #fafafa <%= getPct(resp_value.issue_h) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_h) %>%, #fafafa <%= getPct(resp_value.issue_h) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_h) %>%, #fafafa <%= getPct(resp_value.issue_h) %>%);"><%= getPct(resp_value.issue_h) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_s) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_s) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_s) %>%, #fafafa <%= getPct(resp_value.issue_s) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_s) %>%, #fafafa <%= getPct(resp_value.issue_s) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_s) %>%, #fafafa <%= getPct(resp_value.issue_s) %>%);"><%= getPct(resp_value.issue_s) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_o) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_o) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_o) %>%, #fafafa <%= getPct(resp_value.issue_o) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_o) %>%, #fafafa <%= getPct(resp_value.issue_o) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_o) %>%, #fafafa <%= getPct(resp_value.issue_o) %>%);"><%= getPct(resp_value.issue_o) %>%</td>

                      <td class="r" style="width:10%; background: -webkit-gradient(linear, left top, right top, color-stop(<%= getPct(resp_value.issue_ns) %>%,<%= template_data.accent %>), color-stop(<%= getPct(resp_value.issue_ns) %>%,#fafafa)); background: -moz-linear-gradient(left center, <%= template_data.accent %> <%= getPct(resp_value.issue_ns) %>%, #fafafa <%= getPct(resp_value.issue_ns) %>%); background: -o-linear-gradient(left, <%= template_data.accent %> <%= getPct(resp_value.issue_ns) %>%, #fafafa <%= getPct(resp_value.issue_ns) %>%); background: linear-gradient(to right, <%= template_data.accent %> <%= getPct(resp_value.issue_ns) %>%, #fafafa <%= getPct(resp_value.issue_ns) %>%);"><%= getPct(resp_value.issue_ns) %>%</td>

                  </tr>
              <% }); %>
          </tbody>
      </table>
  </div>

</div>


<% }; %>


  </div>

<div class="clearfix"></div>
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
