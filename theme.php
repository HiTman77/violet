<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
<meta property="og:url" content="<?= $this->url() ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
<meta name="twitter:site" content="<?= $this->url() ?>" />
<meta name="twitter:title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?= $Wcms->css() ?>
<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>?v<?php echo(rand(1,33));?><?php echo(rand(1,20));?>">
</head>
<body class="d-flex flex-column">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<nav class="navbar navbar-expand-lg navbar-light navbar-default">
<div class="container">
<a class="navbar-brand" href="/"><a class="navbar-brand" href="/"><img src="/data/files/logo.png" alt="<?= $Wcms->siteTitle() ?>"></a>
<div class="navbar-header">
    <button type="button" class="navbar-toggler navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
    <span class="navbar-toggler-icon">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </span>
    </button>
</div>
<div class="collapse navbar-collapse" id="menu-collapse">
<ul class="nav navbar-nav navbar-right ml-auto">
<?= $Wcms->menu() ?>
</ul>
</div>
</div>
</nav>
        <section class="container mt-5 mb-5">
            <div class="row">
<div class="col-lg-12 my-auto text-left padding40">
<h3 align="center"><?= $Wcms->page('keywords') ?></h3>
<h4 align="center"><?= $Wcms->page('description') ?></h4>
<?= $Wcms->page('content') ?>
</div>
</div>
    </section>
    <div class="h-05"></div>
    <section class="container-fluid mt-5 mb-5 flex-grow">
        <div class="row blueBackground">
<div class="col-lg-12 my-auto text-left padding40">
<?= $Wcms->block('subside') ?>
</div>
    </div>
    </section>
        <footer class="mt-4 footer">
            <div class="container-fluid py-3 text-left">
        <?= $Wcms->footer() ?>
            </div>
        </footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
<?= $Wcms->js() ?>
</body>
</html>