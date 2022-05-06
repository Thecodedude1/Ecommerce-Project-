<?php




if (isset($_GET["id"])) {
    $item_id = $_GET["id"];
} else {
    echo "no id in the url";
    exit();
}





include "connection.php";

$sql = "select * from items where item_id = $item_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        $item_id = $row["item_id"];
        $item_title = $row["item_title"];
        $item_image = $row["item_image"];
        $item_image2 = $row["item_image2"];
        $item_image3 = $row["item_image3"];
        $item_description = $row["item_description"];
        $item_description = html_entity_decode($item_description);
        $item_price = $row["item_price"];
        $link = "code.addtocart.php?id=$item_id";
    }
} else {
    echo "0 results";
}

include "header.php"; ?>






<style>
    .breadcrumb-list>li {
        font-size: 14px;
        list-style: none;
        display: inline;
    }

    .breadcrumb-list>li a:after {
        content: "/";
        vertical-align: middle;
        margin: 0 5px;
        color: #7a7a7a;
    }

    .action-wishlist:hover,
    .action-wishlist:focus {
        color: #fff;
    }

    .add-to-cart.action-wishlist {
        width: 50px;
        text-align: center;
        padding: 0;
    }

    .add-to-cart.action-wishlist i {
        margin-right: 0px;
    }

    .product-add-to-cart .cart-title,
    .product-add-to-cart .cart-title:hover,
    .product-list-action .cart-title,
    .product-list-action .cart-title:hover {
        background-color: transparent;
        border-bottom: none;
        color: inherit;
    }

    .product-add-to-cart .pro-add-btn i,
    .product-list-action .pro-add-btn i {
        margin-right: 10px;
        font-size: 18px;
    }

    .add-to-cart {
        display: inline-block;
    }

    .action-wishlist:hover,
    .action-wishlist:focus {
        color: #fff;
    }

    .add-to-cart.action-wishlist i {
        margin-right: 0px;
    }

    .product-add-to-cart {
        float: none;
    }

    .single-product-wishlist {
        display: inline-block;
        position: relative;
        margin-left: 20px;
    }

    .product-thumbnail .owl-nav {
        display: none;
    }

    .breadcrumb-area {
        padding: 30px 0;
        background-color: #f3f3f3;
    }

    .breadmome-name {
        color: #ff6a00;
        font-size: 24px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 18px;
    }

    .breadcrumb-content>ul>li {
        display: inline-block;
        list-style: none;
        position: relative;
        font-size: 14px;
        color: #333;
    }

    .breadcrumb-content>ul>li.active {
        color: #ff6a00;
    }

    .breadcrumb-content>ul>li:after {
        content: "/";
        vertical-align: middle;
        margin: 0 5px;
        color: #7a7a7a;
    }

    .breadcrumb-content>ul>li:last-child:after {
        display: none;
    }

    .mt-80 {
        margin-top: 80px
    }

    .mb-80 {
        margin-bottom: 80px
    }

    .single-product-name {
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 900;
        color: #444;
        line-height: 24px;
        margin-bottom: 15px;
    }

    .single-product-reviews {
        margin-bottom: 10px;
    }

    .single-product-price {
        margin-top: 25px;
    }

    .single-product-action {
        margin-top: 30px;
        padding-bottom: 30px;
        border-top: 1px solid #ebebeb;
        border-bottom: 1px solid #ebebeb;
        float: left;
        width: 100%;
    }

    .product-discount {
        display: inline-block;
        margin-bottom: 20px;
    }

    .product-discount span.price {
        font-size: 28px;
        font-weight: 900;
        line-height: 30px;
        display: inline-block;
        color: #008bff;
    }

    .product-info {
        color: #333;
        font-size: 14px;
        font-weight: 400;
    }

    .product-info p {
        line-height: 30px;
        font-size: 14px;
        color: #333;
        margin-top: 30px;
    }

    .product-add-to-cart span.control-label {
        display: block;
        margin-bottom: 10px;
        text-transform: capitalize;
        color: #232323;
        font-size: 14px;
    }

    .product-add-to-cart {
        overflow: hidden;
        margin: 20px 0px;
        float: left;
        width: 100%;
    }

    .cart-plus-minus-box {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        color: #3c3c3c;
        height: 49px;
        text-align: center;
        width: 50px;
        padding: 5px 10px;
    }

    .product-add-to-cart .cart-plus-minus {
        margin-right: 25px;
    }

    .cart-plus-minus {
        position: relative;
        width: 75px;
        float: left;
        padding-right: 25px;
    }

    .add-to-cart {
        background: #008bff;
        border: 0;
        border-bottom: 3px solid #0680e5;
        color: #fff;
        box-shadow: none;
        padding: 0 30px;
        border-radius: 3px;
        font-weight: 400;
        cursor: pointer;
        font-size: 14px;
        text-transform: capitalize;
        height: 50px;
        line-height: 50px;
    }

    .add-to-cart:hover {
        background: #ff6a00;
        border-color: #e96405;
    }
</style>

<link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
(function e(){var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/757RIm2tj1b7gLHomn52ltdblV28ZtLJhV3gIZCt/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
</script>
<!-- Review -->

<div class="wrapper">
   
    </div>
    <main>
        <div id="shopify-section-product-template" class="shopify-section">
            <div class="single-product-area mt-80 mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="product-details-large" id="ProductPhoto">
                                <img id="ProductPhotoImg" class="product-zoom" data-image-id="" alt="12. Aliexpress dropshipping by oberlo" data-zoom-image="<?php echo $item_image; ?>" src="<?php echo $item_image2; ?>">

                            </div>
                            <div id="ProductThumbs" class="product-thumbnail owl-carousel">
                                <a class="product-single__thumbnail active" href="" data-image="<?php echo $item_image2;?>" data-zoom-image="<?php echo $item_image2;?>" data-image-id="">
                                    <img src="<?php echo $item_image2; ?>"></a>

                                <a class="product-single__thumbnail " href="" data-image="<?php echo $item_image3;?>" data-zoom-image="<?php echo $item_image3;?>" data-image-id="">
                                    <img src="<?php echo $item_image3;?>" alt=""></a>

                                <a class="product-single__thumbnail " href="" data-image="<?php echo $item_image;?>" data-zoom-image="<?php echo $item_image;?>" data-image-id="">
                                    <img src="<?php echo $item_image;?>" alt=""></a>

                                <a class="product-single__thumbnail " href="" data-image="<?php echo $item_image;?>" data-zoom-image="<?php echo $item_image;?>" data-image-id="">
                                    <img src="<?php echo $item_image;?>" alt=""></a>
                                    

                                    &nbsp;&nbsp; <!--- Creates a blank space between main image sub images -->

                                <a class="product-single__thumbnail " href="" data-image="<?php echo $item_image;?>" data-zoom-image="<?php echo $item_image;?>" data-image-id="">
                                    <img src="<?php echo $item_image;?>"></a>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                    <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                    <div class="product-details">
                                        <h1 class="single-product-name"><?php echo $item_title; ?></h1>
                                        <div class="single-product-reviews">
                                            <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                        </div>
                                        <div class="product-sku"> <span class="variant-sku">  </span></div>
                                        <div class="single-product-price">
                                            <div class="product-discount"><span class="price" id="ProductPrice"><span class=money>$<?php echo $item_price; ?></span></span></div>
                                        </div>
                                        <div class="product-info"><?php echo $item_description; ?></div>

                                        <div class="single-product-action">
                                            <div class="product-variant-option">
                                                <select name="id" id="productSelect" class="product-single__variants" style="display:none;">
                                                    <option selected="selected" data-sku="YQT71020193" value="19506517377094">Default Title - <span class=money>$20.66 USD</span></option>

                                                </select>


 






                                                <script>
                                                    jQuery(function() {
                                                        jQuery('.swatch :radio').change(function() {
                                                            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                            var optionValue = jQuery(this).val();
                                                            jQuery(this)
                                                                .closest('form')
                                                                .find('.single-option-selector')
                                                                .eq(optionIndex)
                                                                .val(optionValue)
                                                                .trigger('change');proc_nice
                                                        });
                                                    });
                                                </script>
                                            </div>
                                            <style>
                                                .product-variant-option .selector-wrapper {
                                                    display: none;
                                                }
                                            </style>
                                            <div class="product-add-to-cart">
                                                <span class="control-label">Quantity</span>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                                </div>
                                                <div class="add">

                                                    <a class="btn btn-info" href="<?php echo $link; ?>">Add To Cart</a>

                                                    

                                                    <script>
                                                        jQuery('#AddToCart').click(function(e) {
                                                            e.preventDefault();
                                                            Shopify.addItemFromFormStart('AddToCartForm', 1912078270534);
                                                        });
                                                    </script>

                                                   <!--- <div class="single-product-wishlist">
                                                        <a class="add-to-cart action-wishlist wishlist" href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div> WISH LIST--->
                                                </div>
                                            </div>
                                            <div class="secure-payment"><img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/files/guaranteed_safe_checkout1.png?v=1545216773"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .product-details .countdown-timer-wrapper {
                    display: none !important;
                }
            </style>

            <script>
                $(document).ready(function() {
                    $('.fancybox').fancybox();
                });
            </script>
            <script>
                function productZoom() {
                    $(".product-zoom").elevateZoom({
                        gallery: 'ProductThumbs',
                        galleryActiveClass: "active",
                        zoomType: "inner",
                        cursor: "crosshair"
                    });
                    $(".product-zoom").on("click", function(e) {
                        var ez = $('.product-zoom').data('elevateZoom');
                        $.fancybox(ez.getGalleryList());
                        return false;
                    });

                };

                function productZoomDisable() {
                    if ($(window).width() < 767) {
                        $('.zoomContainer').remove();
                        $(".product-zoom").removeData('elevateZoom');
                        $(".product-zoom").removeData('zoomImage');
                    } else {
                        productZoom();
                    }
                };

                productZoomDisable();

                $(window).resize(function() {
                    productZoomDisable();
                });
            </script>
            <script>
                $('.product-thumbnail').owlCarousel({
                    loop: true,
                    center: true,
                    nav: true,
                    dots: false,
                    margin: 10,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    item: 3,
                    responsive: {
                        0: {
                            items: 2
                        },
                        480: {
                            items: 3
                        },
                        992: {
                            items: 3,
                        },
                        1170: {
                            items: 3,
                        },
                        1200: {
                            items: 3
                        }
                    }
                });
            </script>
        </div>
    </main>
</div>

<div class="yotpo yotpo-main-widget"
data-product-id="<?php echo "$item_id"; ?>"
data-price="<?php echo "$item_price"; ?>"
data-currency="TTD"
data-name="<?php echo "$item_title"; ?>"
data-image-url= "<?php echo "$item_image"; ?>">
</div>










<?php 
include "rec.php";
include "footer.php"; ?>