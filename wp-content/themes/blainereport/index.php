<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @package BlaineReport
 * @subpackage Blaine_Report
 * @since Blaine Report 1.0
 */

get_header(); ?>

<div class="homeHero">
  <div class="line">
    <div class="unit size1of1 header">
      <h1>Blaine Report</h1>
    </div>
    <div class="lastUnit size1of1">
      <p>Where I Report & I Decide</p>
    </div>
  </div>
</div>

<div id="main-content" class="main-content">

  <div class="line main-section">
    <div class="lastUnit size1of1 sub-section">

      <!-- <h2>Recent Stories</h2>
      <ol>
        <li><a href="story.php">The Thing (2011)</a></li>
      </ol> -->

    </div>
  </div>
</div>

<?php get_footer(); ?>