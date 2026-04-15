<!DOCTYPE html>
<html>
<head>
  <title>Editor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
</head>
<body class="bg-light">
<div class="container py-4">
  <h1 class="mb-4"><?= esc($page['title']) ?> - Editor</h1>

  <div class="mb-3">
    <button class="btn btn-primary" onclick="addBlock('text')">Tambah Text</button>
    <button class="btn btn-success" onclick="addBlock('image')">Tambah Image</button>
    <button class="btn btn-info" onclick="addBlock('video')">Tambah Video</button>
    <button class="btn btn-warning" onclick="addBlock('button')">Tambah Button</button>
    <button class="btn btn-secondary" onclick="addBlock('heading')">Tambah Heading</button>
    <button class="btn btn-dark" onclick="addBlock('quote')">Tambah Quote</button>
    <button class="btn btn-outline-primary" onclick="addBlock('list')">Tambah List</button>
    <button class="btn btn-outline-success" onclick="addBlock('form')">Tambah Form</button>
    <button class="btn btn-outline-danger" onclick="addBlock('map')">Tambah Map</button>
  </div>

  <div class="row">
    <div class="col-md-8">
      <ul id="block-list" class="list-group">
        <?php foreach($blocks as $b): ?>
          <?php $content = json_decode($b['content'] ?? '{}'); ?>
          <li class="list-group-item mb-2" data-id="<?= $b['id'] ?>">
            <div class="card">
              <div class="card-body">
                <strong><?= ucfirst($b['type']) ?></strong><br>

                <?php if($b['type']=='text'): ?>
                  <input type="text" class="form-control" value="<?= esc($content->text ?? '') ?>">
                <?php elseif($b['type']=='image'): ?>
                  <input type="text" class="form-control" value="<?= esc($content->url ?? '') ?>">
                <?php elseif($b['type']=='video'): ?>
                  <input type="text" class="form-control" value="<?= esc($content->url ?? '') ?>">
                <?php elseif($b['type']=='button'): ?>
                  <input type="text" class="form-control mb-2" value="<?= esc($content->label ?? '') ?>">
                  <input type="text" class="form-control" value="<?= esc($content->link ?? '') ?>">
                <?php elseif($b['type']=='heading'): ?>
                  <input type="text" class="form-control" value="<?= esc($content->text ?? '') ?>">
                <?php elseif($b['type']=='quote'): ?>
                  <input type="text" class="form-control mb-2" value="<?= esc($content->text ?? '') ?>">
                  <input type="text" class="form-control" value="<?= esc($content->author ?? '') ?>">
                <?php elseif($b['type']=='list'): ?>
                  <input type="text" class="form-control" value="<?= esc(implode(',', $content->items ?? [])) ?>">
                <?php elseif($b['type']=='form'): ?>
                  <input type="text" class="form-control" value="<?= esc(implode(',', $content->fields ?? [])) ?>">
                <?php elseif($b['type']=='map'): ?>
                  <input type="text" class="form-control" value="<?= esc($content->url ?? '') ?>">
                <?php endif; ?>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col-md-4">
      <button id="saveBtn" class="btn btn-warning w-100">💾 Save Order</button>
    </div>
  </div>
</div>

<script>
  var el = document.getElementById('block-list');
  var sortable = Sortable.create(el, { animation: 150 });

  function addBlock(type){
    let li = document.createElement('li');
    li.className = "list-group-item mb-2";
    let inner = `<div class="card"><div class="card-body"><strong>${type}</strong><br>`;

    if(type === 'text'){
      inner += `<input type="text" class="form-control" placeholder="Isi text">`;
    } else if(type === 'image'){
      inner += `<input type="text" class="form-control" placeholder="URL gambar">`;
    } else if(type === 'video'){
      inner += `<input type="text" class="form-control" placeholder="URL video">`;
    } else if(type === 'button'){
      inner += `<input type="text" class="form-control mb-2" placeholder="Label tombol">
                <input type="text" class="form-control" placeholder="Link tombol">`;
    } else if(type === 'heading'){
      inner += `<input type="text" class="form-control" placeholder="Isi heading">`;
    } else if(type === 'quote'){
      inner += `<input type="text" class="form-control mb-2" placeholder="Isi quote">
                <input type="text" class="form-control" placeholder="Author">`;
    } else if(type === 'list'){
      inner += `<input type="text" class="form-control" placeholder="Item dipisah koma">`;
    } else if(type === 'form'){
      inner += `<input type="text" class="form-control" placeholder="Field dipisah koma">`;
    } else if(type === 'map'){
      inner += `<input type="text" class="form-control" placeholder="URL embed map">`;
    }

    inner += `</div></div>`;
    li.innerHTML = inner;
    document.getElementById('block-list').appendChild(li);
  }

  document.getElementById('saveBtn').addEventListener('click', function(){
    let data = [];
    document.querySelectorAll('#block-list li').forEach((li,i)=>{
      let type = li.querySelector('strong').innerText.toLowerCase();
      let inputs = li.querySelectorAll('input');
      let content = {};

      if(type === 'text'){
        content = { text: inputs[0]?.value || '' };
      } else if(type === 'image'){
        content = { url: inputs[0]?.value || '' };
      } else if(type === 'video'){
        content = { url: inputs[0]?.value || '' };
      } else if(type === 'button'){
        content = { label: inputs[0]?.value || 'Button', link: inputs[1]?.value || '#' };
      } else if(type === 'heading'){
        content = { text: inputs[0]?.value || '' };
      } else if(type === 'quote'){
        content = { text: inputs[0]?.value || '', author: inputs[1]?.value || '' };
      } else if(type === 'list'){
        content = { items: inputs[0]?.value ? inputs[0].value.split(',') : [] };
      } else if(type === 'form'){
        content = { fields: inputs[0]?.value ? inputs[0].value.split(',') : [] };
      } else if(type === 'map'){
        content = { url: inputs[0]?.value || '' };
      }

      data.push({
        id: li.dataset.id || null,
        type: type,
        content: content,
        order_index: i
      });
    });

    fetch('/page/saveBlocks',{
      method:'POST',
      headers:{'Content-Type':'application/json'},
      body: JSON.stringify(data)
    }).then(r=>r.json()).then(res=>alert('Saved!'));
  });
</script>
</body>
</html>
