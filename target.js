var async = require('async');
var Nightmare = require('nightmare');
var nightmare = new Nightmare();

// --ssl-protocol=any

// var characters = ["dragon ball", "saint seiya"];
var characters = ["saint seiya"];
var results = [];

async.each(characters, function (character, callback) {
  nightmare
    .goto('http://intl.target.com/s?searchTerm=' + encodeURI(character))
    .wait('body')
    .evaluate(function () {

      var products_url = [];
      $(".l-container-fixed .product").each(function () {
        var product_url = 'http://intl.target.com' + $(".js-redirect-to-pdp", this).attr("href");
        products_url.push(product_url)
      });

      return {
        title: $.trim($(".l-container-fixed .js-plp-search-title").text()),
        total_items: $(".l-container-fixed .title-subtext").text().replace(/ |items/gi, ""),
        products_url: products_url
      }

    })
    // .end()
    .then(function (result) {
      var products = [];
      async.each(result.products_url, function (product_url, callback2) {
        nightmare
          .goto(product_url)
          .wait('body')
          .evaluate(function () {
            return {
              // url: product_url,
              name: $("h2.title-product span:eq(1)").text(),
              brand: $("span[itemprop='brand']").text(),
              // short_description: $("#product-attributes li[data-tab='itemdetails'] section div").text(),
              // short_long: $("#product-attributes li[data-tab='itemdetails'] section").text(),
              price: $("meta[itemprop='price']").attr("content"),
              currency: $("meta[itemprop='priceCurrency']").attr("content"),
              image: $("img[itemprop='image']").attr("src")
            }
          })
          // .end()
          .then(function (product) {
            products.push(product);
            callback2();
          })
          .catch(function (error) {
            console.error('nightmare2 failed:', error);
          })
          ;

      }, function (error) {
        result.products = products;
        results.push(result);
        callback();
      });
    })
    .catch(function (error) {
      console.error('nightmare1 failed:', error);
    })
    ;

}, function (error) {
  console.log('results');
  console.log(JSON.stringify(results, null, 2));
});