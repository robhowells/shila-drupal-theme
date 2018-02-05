<!DOCTYPE html>
<html class="<?php print isset($htmlClass) ? $htmlClass : '' ?>">
  <head>
    <title><?php print isset($title) ? $title : '' ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="../../css/normalize.css?<?= $cacheBuster ?>" media="all" />

    <!-- Project specific -->
    <link rel="stylesheet" href="../../css/base.css?<?= $cacheBuster ?>" media="all" />
    <link rel="stylesheet" href="../../css/layout.css?<?= $cacheBuster ?>" media="all" />
    <link rel="stylesheet" href="../../css/components.css?<?= $cacheBuster ?>" media="all" />
    <link rel="stylesheet" href="../../css/state.css?<?= $cacheBuster ?>" media="all" />
    <link rel="stylesheet" href="../../css/theme.css?<?= $cacheBuster ?>" media="all" />
    <link rel="stylesheet" href="../../css/print.css?<?= $cacheBuster ?>" media="all" />

    <!-- Style guide specific -->
    <link rel="stylesheet" href="../../css/pattern-scaffolding.css?<?= $cacheBuster ?>" media="all" />

    <!-- Begin Pattern Lab (Required for Pattern Lab to run properly) -->
    <?= $patternLabHead ?>
    <!-- End Pattern Lab -->

  </head>
<body class="<?php print isset($bodyClass) ? $bodyClass : '' ?>">
