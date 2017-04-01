<?php include("template/header.php"); ?>

                <div class="col-md-8">
                  <div class="row">
                    <?php foreach ($items as $item): ?>
                          <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                              <img src="assets/image/items/<?php echo $item['image']; ?>"  style ="width: 200px; height: 200px;"" alt="...">
                              <div class="caption">
                                  <h3>Rs.<?php echo $item['price']; ?></h3>
                                <p><a href="detail.html" class="btn btn-primary" role="button">Detail</a>
                                 <a href="#" class="btn btn-default" role="button">Add To Cart</a></p>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                        <!--item ends-->
                    </div>
                  </div>
<?php include("template/footer.php"); ?>
