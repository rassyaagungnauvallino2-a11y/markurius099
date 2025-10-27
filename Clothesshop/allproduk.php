<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Monx">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clothes Shop | All produk</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- css icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/banner.jpg" type="image/x-icon">
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="../clothesShop">ClothesShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-three-dots-vertical"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <!---
          <form class="d-flex ms-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </form>
          -->
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->
  <main class="flex-shrink-0 container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Start Main -->
        <div class="app">
        <!-- Start Products -->
        <div class="container">
          <div id="message"></div>
          <div class="row mt-2 pb-3">
            <?php
            include 'config.php';
            $stmt = $conn->prepare('SELECT * FROM product WHERE id BETWEEN ? AND ?');
            $startId = 5; // ID awal
            $endId = 1000;  // ID akhir
            $stmt->bind_param("ii", $startId, $endId);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()):
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
              <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                  <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
                  <div class="card-body p-1">
                    <h4 class="card-title text-center text-info" title="<?= $row['product_name'] ?>">
                      <?= $row['product_name'] ?>
                    </h4>
                    <h5 class="card-text text-center text-danger">Rp&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>
                  </div>
                  <div class="card-footer p-1">
                    <form action="" class="form-submit">
                  <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
<!-- End product-->
<!-- Footer Star -->
<footer class="footer" id="profil">
  <div class="container">
    <div class="row">
    <!-- profil -->
    <div class="col-md-6 biodata">
      <h2>Profil</h2>
      <p>ClothesShop menyediakan berbagai produk fashion unik dan langka yang berkualitas tinggi. Kami berkomitmen untuk memberikan pengalaman belanja terbaik kepada pelanggan kami.</p>
    </div>
    <!-- Hubungi Kami  -->
    <div class="col-md-6 contact">
      <h2>Hubungi Kami</h2>
      <div class="social-icons">
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/62881025217141"><i class="bi bi-whatsapp"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-envelope-at"></i></a>
      </div>
    </div>
  </div>
</div>
</footer>
<!--Footer End-->
<!--Toggle To-top-->
<a href="#" class="to-top">
  <i class="bi bi-arrow-up-circle"></i>
</a>
<!--Toggle end-->
</div>
</div>
</main>
<script src="js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();
        var pqty = $form.find(".pqty").val();

        $.ajax({
            url: 'action.php',
            method: 'post',
            data: {
                pid: pid,
                pname: pname,
                pprice: pprice,
                pqty: pqty,
                pimage: pimage,
                pcode: pcode
            },
            success: function(response) {
                $("#message").html(response);
                $("#message").fadeIn().delay(2000).fadeOut();
                load_cart_item_number();
            }
        });
    });

    load_cart_item_number();

    function load_cart_item_number() {
        $.ajax({
            url: 'action.php',
            method: 'get',
            data: { cartItem: "cart_item" },
            success: function(response) {
                $("#cart-item").html(response);
            }
        });
    }
});
</script>
</body>
</html>