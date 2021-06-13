<!-- Default box -->
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?= $produk->nama_produk ?></h3>
              <div class="col-12">
                <img src="<?= base_url('assets/gambar/'.$produk->gambar) ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/'.$produk->gambar) ?>" alt="Product Image"></div>
                
                <?php foreach ($gambar as $key => $value) { ?>
                    <div class="product-image-thumb" ><img src="<?= base_url('assets/gambarproduk/'.$value->gambar) ?>" alt="Product Image"></div>
                <?php } ?>
              
            </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?= $produk->nama_produk ?></h3>
              <hr>
              <h5>Kategori : <?= $produk->nama_kategori ?></h5>
              <hr>
              <p><?= $produk->deskripsi ?></p>
              <hr>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp <?= number_format($produk->harga, 0) ?>
                </h2>
              </div>

              <hr>

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div>

              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>