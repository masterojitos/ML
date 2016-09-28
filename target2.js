var Nightmare = require('nightmare');
var nightmare = new Nightmare();

var characters = ["dragon ball", "saint seiya"];
// var characters = ['saint seiya'];
characters.reduce(function (accumulator, character) {
  return accumulator.then(function (results) {
    return nightmare.goto('http://intl.target.com/s?searchTerm=' + encodeURI(character))
      .wait('body')
      .evaluate(function () {

        var products_url = [];
        $(".l-container-fixed .product").each(function () {
          var product_url = 'http://intl.target.com' + $(".js-redirect-to-pdp", this).attr("href");
          products_url.push(product_url)
        });

        return {
          title: $.trim($(".l-container-fixed .js-plp-search-title").text()),
          // total_items: $(".l-container-fixed .title-subtext").text().replace(/ |items/gi, ""),
          products_url: products_url
        }

      })
      .then(function (result) {

          results.push(result);
          return results;

      });
  });
}, Promise.resolve([])).then(function (results) {

  var i = 0;
  var characters_reduce = function (character_reduce) {

    character_reduce.products_url.reduce(function (accumulator, product_url) {
      return accumulator.then(function (products) {

        return nightmare.goto(product_url)
          .wait(2000)
          .evaluate(function () {

            return {
              name: $("h2.title-product span:eq(1)").text(),
              price: $("meta[itemprop='price']").attr("content"),
            }

          })
          .then(function (product) {

            products.push(product);
            return products;

          });
      });
    }, Promise.resolve([])).then(function (products) {

      character_reduce.products = products;
      results[i] = character_reduce;
      i++;
      if (results.length > i) {
        characters_reduce(results[i]);
      } else {
        console.log(JSON.stringify(results, null, 2));
      }

    });

  };

  if (results.length > i) {
    characters_reduce(results[i]);
  }

});