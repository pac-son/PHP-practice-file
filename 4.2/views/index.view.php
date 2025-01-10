<div>
  <div>
    <div>
      <h1>Glossary</h1>
    </div>
  </div>
  <div class="row">
    <table>
    <?php foreach($model as $item) : ?>
        <tr>
          <td><a href="detail.php?term=<?= $item->term;?>"><?= $item->term;?></a></td>
          <td><?= $item->definition;?></td>
        </tr>
      <?php endforeach;?>
    </table>
  </div>
</div>