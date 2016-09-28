var Nightmare = require('nightmare');

var characters = ["dragon ball", "winnie the pook"];


var google = new Nightmare()
  .goto('http://intl.target.com/s?searchTerm=dragon%20ball')
  .evaluate(function () {
    console.log($(".l-container-fixed .title-text").text())
    return $(".l-container-fixed .title-subtext").text()
  })
  .end()
  .then(function (result) {
    console.log(result)
  })
  .catch(function (error) {
    console.error('Search failed:', error);
  });