<?php get_header(); ?>
<section class="bread-crumb margin-bottom-10">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul
              class="breadcrumb"
              itemscope
              itemtype="https://schema.org/BreadcrumbList"
            >
              <li
                class="home"
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem"
              >
                <a itemprop="item" href="/" title="Trang chủ">
                  <span itemprop="name">Trang chủ</span>
                  <meta itemprop="position" content="1" />
                </a>
                <span><i class="fa fa-angle-right"></i></span>
              </li>

              <li
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem"
              >
                <strong itemprop="name">Giỏ hàng</strong>
                <meta itemprop="position" content="2" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="container white collections-container margin-bottom-20">
      <div class="white-background">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart">
              <div class="visible-md visible-lg">
                <div class="shopping-cart-table">
                  <div class="row">
                    <div class="col-md-12">
                      <h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">
                        Giỏ hàng
                        <span
                          >(<span class="count_item_pr">0</span> sản phẩm)</span
                        >
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <div class="cart-empty">
                        <img
                          src="<?php bloginfo('template_directory'); ?>/bizweb.dktcdn.net/100/321/299/themes/670850/assets/empty-cartf96c.png?1664275285895"
                          class="img-responsive center-block"
                          alt="Giỏ hàng trống"
                        />
                        <div class="btn-cart-empty">
                          <a
                            class="btn btn-default"
                            href="/san-pham"
                            title="Tiếp tục mua sắm"
                            >Tiếp tục mua sắm</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="visible-sm visible-xs">
                <div class="cart-empty">
                  <img
                    src="<?php bloginfo('template_directory'); ?>/bizweb.dktcdn.net/100/321/299/themes/670850/assets/empty-cartf96c.png?1664275285895"
                    class="img-responsive center-block"
                    alt="Giỏ hàng trống"
                  />
                  <div class="btn-cart-empty">
                    <a
                      class="btn btn-default"
                      href="/san-pham"
                      title="Tiếp tục mua sắm"
                      >Tiếp tục mua hàng</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <link
      href="../bizweb.dktcdn.net/100/321/299/themes/670850/assets/bpr-products-modulef96c.css?1664275285895"
      rel="stylesheet"
      type="text/css"
    />
    <div class="sapo-product-reviews-module"></div>
    <?php get_footer(); ?>