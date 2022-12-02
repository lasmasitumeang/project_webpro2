

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
      <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
              <div class="d-inline-flex align-items-center">
                <a class="text-white pr-3" href="">FAQs</a>
                <span class="text-white">|</span>
                <a class="text-white px-3" href="">Help</a>
                <span class="text-white">|</span>
                <a class="text-white pl-3" href="">Support</a>
              </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
              <div class="d-inline-flex align-items-center">
                <a class="text-white px-3" href="">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-3" href="">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-3" href="">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-3" href="">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-3" href="">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
          <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
              <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Modest</span>Cake</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
              <div class="navbar-nav ml-auto py-0">
                <a href="<?= base_url('user/index') ?>" class="nav-item nav-link">Home</a>
                <!-- <a href="about.html" class="nav-item nav-link">Tentang</a>-->
                <a href="<?= base_url('user/product') ?>" class="nav-item nav-link">Produk</a>
              </div>
              <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Modest</span>Cake</h1>
              </a>
              <div class="navbar-nav mr-auto py-0">
                <!--<a href="service.html" class="nav-item nav-link">Melayani</a>-->
                <a href="<?= base_url('user/cart') ?>" class="nav-item nav-link active">Pesan</a>
                <a href="<?= base_url('user/contact') ?>" class="nav-item nav-link">Kontak</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
      <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Pesan Sekarang!</h1>
        <div class="d-inline-flex align-items-center text-white">
          <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
          <i class="fa fa-circle px-3"></i>
          <p class="m-0">Pesan</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
      
    <main>
        <!-- Start DEMO HTML (Use the following code into your project)-->
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
              <h4 class="badge-pill badge-light mt-3 mb-3 p-2 text-center">Products</h4>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                  <div class="shadow-sm card mb-3 product">
                    <img class="product-img" src="<?= base_url() ?>assets/img/gbr 1.jpg" alt="prd1" onmouseover="animateImg(this)"
                    onmouseout="normalImg(this)"/>
                    <div class="card-body">
                      <h5 class="card-title text-info bold product-name">Cake Mocca</h5>
                      <p class="card-text text-success product-price">Rp.80.000</p>
                      <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                        data-action="add-to-cart">Add to cart</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                  <div class="shadow-sm card mb-3 product">
                    <img class="product-img" src="<?= base_url() ?>assets/img/product-2.jpg" alt="prd2" onmouseover="animateImg(this)"
                    onmouseout="normalImg(this)"/>
                    <div class="card-body">
                      <h5 class="card-title text-info product-name">Assorted Cupcakes</h5>
                      <p class="card-text text-success product-price">Rp.25.000</p>
                      <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                      data-action="add-to-cart">Add to cart</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                  <div class="shadow-sm card mb-3 product">
                    <img class="product-img" src="<?= base_url() ?>assets/img/product-3.jpg" alt="prd3" onmouseover="animateImg(this)"
                    onmouseout="normalImg(this)"/>
                    <div class="card-body">
                      <h5 class="card-title text-info product-name">Wonderlanz</h5>
                      <p class="card-text text-success product-price">Rp.45.000</p>
                      <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" 
                      data-action="add-to-cart">Add to cart</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                  <div class="shadow-sm card mb-3 product">
                    <img class="product-img" src="<?= base_url() ?>assets/img/gbr7.jpg" alt="prd2" onmouseover="animateImg(this)"
                    onmouseout="normalImg(this)"/>
                    <div class="card-body">
                      <h5 class="card-title text-info product-name">Segerzies</h5>
                      <p class="card-text text-success product-price">Rp.35.000</p>
                      <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                      data-action="add-to-cart">Add to cart</button>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-6 col-xs-6">
                  <div class="shadow-sm card mb-3 product">
                    <img class="product-img" src="<?= base_url() ?>assets/img/gbr2.jpg" alt="prd2" onmouseover="animateImg(this)"
                    onmouseout="normalImg(this)"/>
                    <div class="card-body">
                      <h5 class="card-title text-info product-name">Black Forest</h5>
                      <p class="card-text text-success product-price">Rp.30.000</p>
                      <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                      data-action="add-to-cart">Add to cart</button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                  <div class="shadow-sm card mb-3 product">
                    <img class="product-img" src="<?= base_url() ?>assets/img/product-1.jpg" alt="prd2" onmouseover="animateImg(this)"
                    onmouseout="normalImg(this)"/>
                    <div class="card-body">
                      <h5 class="card-title text-info product-name">Coco Cookies</h5>
                      <p class="card-text text-success product-price">Rp.25.000</p>
                      <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                      data-action="add-to-cart">Add to cart</button>
                    </div>
                  </div>
                </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                    <div class="shadow-sm card mb-3 product">
                      <img class="product-img" src="<?= base_url() ?>assets/img/gbr6.jpg" alt="prd2" onmouseover="animateImg(this)"
                      onmouseout="normalImg(this)"/>
                      <div class="card-body">
                        <h5 class="card-title text-info product-name">Blueberry Cake</h5>
                        <p class="card-text text-success product-price">Rp.35.000</p>
                        <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                        data-action="add-to-cart">Add to cart</button>
                      </div>
                    </div>
                  </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                      <div class="shadow-sm card mb-3 product">
                        <img class="product-img" src="<?= base_url() ?>assets/img/gbr4.jpg" alt="prd2" onmouseover="animateImg(this)"
                        onmouseout="normalImg(this)"/>
                        <div class="card-body">
                          <h5 class="card-title text-info product-name">Pandan Cake</h5>
                          <p class="card-text text-success product-price">Rp.25.000</p>
                          <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button"
                          data-action="add-to-cart">Add to cart</button>
                        </div>
                      </div>
                    </div>               
                  </div>
                </div> 
              <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <h4 class="badge-pill badge-light mt-3 mb-3 p-2 text-center">Cart</h4>
              <div class="cart"></div>
            </div>
          </div>
        </div>    
        <!-- END EDMO HTML (Happy Coding!)-->
    </main>

    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
      <div class="container text-center py-5">
        <div class="row">
          <div class="col-12 mb-4">
            <a href="index.php" class="navbar-brand m-0">
              <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Modest</span>Cake</h1>
            </a>
          </div>
          <div class="col-12 mb-4">
            <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="col-12 mt-2 mb-4">
            <div class="row">
              <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                <h5 class="font-weight-bold mb-2">Hubungi Kami</h5>
                <p class="mb-2">Ciganjur, Jakarta Selatan, indonesia</p>
                <p class="mb-0">+012 345 67890</p>
              </div>
              <div class="col-sm-6 text-center text-sm-left">
                <h5 class="font-weight-bold mb-2">Jam Buka</h5>
                <p class="mb-2">Senin – Sabtu, 08.00 – 17.00</p>
                <p class="mb-0">Minggu: 08.00 - 15.00</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <p class="m-0">&copy; <a href="#">ModestCake</a>. All Rights Reserved.  <a href="https://htmlcodex.com"></a>
            </p>
          </div>
        </div>
      </div>
    </div>
      <!-- Footer End -->
    <script>
      "use strict";                        
      let cart = [];
      let cartTotal = 0;
      const cartDom = document.querySelector(".cart");
      const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

      addtocartbtnDom.forEach(addtocartbtnDom => {
        addtocartbtnDom.addEventListener("click", () => {
          const productDom = addtocartbtnDom.parentNode.parentNode;
          const product = {
            img: productDom.querySelector(".product-img").getAttribute("src"),
            name: productDom.querySelector(".product-name").innerText,
            price: productDom.querySelector(".product-price").innerText,
            quantity: 1
        };

      const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
      if (IsinCart === false) {
        cartDom.insertAdjacentHTML("beforeend",`
        <div class="d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
          <div class="p-2">
              <img src="${product.img}" alt="${product.name}" style="max-width: 50px;"/>
          </div>
          <div class="p-2 mt-3">
              <p class="text-info cart_item_name">${product.name}</p>
          </div>
          <div class="p-2 mt-3">
              <p class="text-success cart_item_price">${product.price}</p>
          </div>
          <div class="p-2 mt-3 ml-auto">
              <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
          </div>
          <div class="p-2 mt-3">
            <p class="text-success cart_item_quantity">${product.quantity}</p>
          </div>
          <div class="p-2 mt-3">
            <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
          </div>
          <div class="p-2 mt-3">
            <button class="btn badge badge-danger" type="button" data-action="remove-item">&times;
          </div>
        </div> `);

        if(document.querySelector('.cart-footer') === null){
          cartDom.insertAdjacentHTML("afterend",  `
            <div class="d-flex flex-row shadow-sm card cart-footer mt-2 mb-3 animated flipInX">
              <div class="p-2">
                <button class="btn badge-danger" type="button" data-action="clear-cart">Clear Cart
              </div>
              <div class="p-2 ml-auto">
                <button class="btn badge-dark" type="button" data-action="check-out">Pay <span class="pay"></span> 
                  &#10137;
              </div>
            </div>`); }

          addtocartbtnDom.innerText = "In cart";
          addtocartbtnDom.disabled = true;
          cart.push(product);

          const cartItemsDom = cartDom.querySelectorAll(".cart-items");
          cartItemsDom.forEach(cartItemDom => {

          if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

            cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText) 
            * parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
            document.querySelector('.pay').innerText = " Rp." + cartTotal ;

            // increase item in cart
            cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
              cart.forEach(cartItem => {
                if (cartItem.name === product.name) {
                  cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
                  cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
                  parseInt(cartItem.price) + " Rp ";
                  cartTotal += parseInt(cartItem.price)
                  document.querySelector('.pay').innerText = " Rp." + cartTotal;
                }
              });
            });

            // decrease item in cart
            cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
              cart.forEach(cartItem => {
                if (cartItem.name === product.name) {
                  if (cartItem.quantity > 1) {
                    cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
                    cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
                    parseInt(cartItem.price) + " Rp.";
                    cartTotal -= parseInt(cartItem.price)
                    document.querySelector('.pay').innerText = " Rp." + cartTotal;
                  }
                }
              });
            });

            //remove item from cart
            cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
              cart.forEach(cartItem => {
                if (cartItem.name === product.name) {
                    cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
                    document.querySelector('.pay').innerText = " Rp." + cartTotal ;
                    cartItemDom.remove();
                    cart = cart.filter(cartItem => cartItem.name !== product.name);
                    addtocartbtnDom.innerText = "Add to cart";
                    addtocartbtnDom.disabled = false;
                }
                if(cart.length < 1){
                  document.querySelector('.cart-footer').remove();
                }
              });
            });

            //clear cart
            document.querySelector('[data-action="clear-cart"]').addEventListener("click" , () => {
              cartItemDom.remove();
              cart = [];
              cartTotal = 0;
              if(document.querySelector('.cart-footer') !== null){
                document.querySelector('.cart-footer').remove();
              }
              addtocartbtnDom.innerText = "Add to cart";
              addtocartbtnDom.disabled = false;
            });

            document.querySelector('[data-action="check-out"]').addEventListener("click" , () => {
              if(document.getElementById('paypal-form') === null){
                checkOut();
              }
            });
          }
        });
      }
      });
      });

      function animateImg(img) {
        img.classList.add("animated","shake");
      }

      function normalImg(img) {
        img.classList.remove("animated","shake");
      }

      function checkOut() {
        let paypalHTMLForm = `
        <form id="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="upload" value="1">
          <input type="hidden" name="business" value="gmanish478@gmail.com">
          <input type="hidden" name="currency_code" value="INR">`;
        
        cart.forEach((cartItem,index) => {
        ++index;
        paypalHTMLForm += ` <input type="hidden" name="item_name_${index}" value="${cartItem.name}">
          <input type="hidden" name="amount_${index}" value="${cartItem.price.replace("Rs.","")}">
          <input type="hidden" name="quantity_${index}" value="${cartItem.quantity}">`;
        });
        
        paypalHTMLForm += `<input type="submit" value="PayPal" class="paypal">
        </form><div class="overlay">Please wait...</div>`;
        document.querySelector('body').insertAdjacentHTML("beforeend", paypalHTMLForm);
        document.getElementById("paypal-form").submit();
      }
    </script>  
  </body>
</html>