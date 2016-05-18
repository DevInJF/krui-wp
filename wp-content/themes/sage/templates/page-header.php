<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <h1><?php if (is_archive()){cat_icon(false, $category);} ?><?= Titles\title(); ?></h1>
</div>
