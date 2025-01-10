<div>
  <div>
    <div>
      <h1></h1>
    </div>
  </div>
  <div class="row">
    <form class="form-inline" action="" method="GET">
      <div class="form-group">
        <input type="text" name="search" id="search" />
        <input type="submit" value="search">
      </div>
    </form>
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