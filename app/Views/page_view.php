<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($page['title']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
  <h1 class="mb-4 text-center"><?= esc($page['title']) ?></h1>

  <?php foreach($blocks as $b): ?>
    <?php 
      $content = json_decode($b['content'] ?? '{}');
      $settings = json_decode($b['settings'] ?? '{}');
    ?>
    <div class="mb-4">
      <?php if($b['type']=='text'): ?>
        <p class="text-<?= $settings->align ?? 'start' ?>" 
           style="color:<?= $settings->color ?? '#000' ?>">
          <strong>Text :</strong> <?= esc($content->text ?? '') ?>
        </p>

      <?php elseif($b['type']=='image'): ?>
        <?php if(isset($content->url)): ?>
          <div>
            <strong>Image :</strong><br>
            <img src="<?= esc($content->url) ?>" 
                 class="img-fluid <?= ($settings->rounded ?? false) ? 'rounded' : '' ?>" 
                 style="width:<?= $settings->width ?? 'auto' ?>">
          </div>
        <?php endif; ?>

      <?php elseif($b['type']=='video'): ?>
        <?php if(isset($content->url)): ?>
          <div>
            <strong>Video :</strong>
            <div class="ratio ratio-16x9 mt-2">
              <iframe src="<?= esc($content->url) ?>" allowfullscreen></iframe>
            </div>
          </div>
        <?php endif; ?>

      <?php elseif($b['type']=='button'): ?>
        <div>
          <strong>Button :</strong><br>
          <a href="<?= esc($content->link ?? '#') ?>" 
             class="<?= esc($settings->style ?? 'btn btn-primary') ?>">
             <?= esc($content->label ?? 'Button') ?>
          </a>
        </div>

      <?php elseif($b['type']=='carousel'): ?>
        <?php $images = $content->images ?? []; ?>
        <?php if(!empty($images)): ?>
          <div>
            <strong>Carousel :</strong>
            <div id="carousel<?= $b['id'] ?>" class="carousel slide mt-2" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php foreach($images as $i=>$img): ?>
                  <div class="carousel-item <?= $i==0?'active':'' ?>">
                    <img src="<?= esc($img) ?>" class="d-block w-100">
                  </div>
                <?php endforeach; ?>
              </div>
              <button class="carousel-control-prev" type="button" 
                      data-bs-target="#carousel<?= $b['id'] ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" 
                      data-bs-target="#carousel<?= $b['id'] ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
        <?php endif; ?>

      <?php elseif($b['type']=='heading'): ?>
        <<?= $settings->level ?? 'h2' ?> class="text-<?= $settings->align ?? 'start' ?>">
          <strong>Heading :</strong> <?= esc($content->text ?? '') ?>
        </<?= $settings->level ?? 'h2' ?>>

      <?php elseif($b['type']=='quote'): ?>
        <blockquote class="blockquote">
          <p><strong>Quote :</strong> <?= esc($content->text ?? '') ?></p>
          <footer class="blockquote-footer"><?= esc($content->author ?? '') ?></footer>
        </blockquote>

      <?php elseif($b['type']=='list'): ?>
        <?php $items = $content->items ?? []; ?>
        <?php if(!empty($items)): ?>
          <strong>List :</strong>
          <ul>
            <?php foreach($items as $item): ?>
              <li><?= esc($item) ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

      <?php elseif($b['type']=='form'): ?>
        <strong>Form :</strong>
        <form action="<?= esc($settings->action ?? '#') ?>" method="<?= esc($settings->method ?? 'post') ?>" class="mt-2">
          <?php foreach($content->fields ?? [] as $field): ?>
            <div class="mb-3">
              <label class="form-label"><?= esc($field) ?></label>
              <input type="text" name="<?= strtolower($field) ?>" class="form-control">
            </div>
          <?php endforeach; ?>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

      <?php elseif($b['type']=='map'): ?>
        <?php if(isset($content->url)): ?>
          <strong>Map :</strong>
          <div style="height:<?= $settings->height ?? '300px' ?>" class="mt-2">
            <iframe src="<?= esc($content->url) ?>" width="100%" height="100%" style="border:0;" allowfullscreen></iframe>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
