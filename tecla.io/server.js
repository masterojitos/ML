var request = require('request');
var VisualRecognitionV3 = require('watson-developer-cloud/visual-recognition/v3');
var AlchemyLanguageV1 = require('watson-developer-cloud/alchemy-language/v1');
var fs = require('fs');
var async = require('async');

var visual_recognition = new VisualRecognitionV3({
  api_key: '46a5514b1d61c8bd341e176dc3212aec61346786',
  version_date: '2016-09-14'
});
var alchemy_language = new AlchemyLanguageV1({
  api_key: 'f618223e3eb76e302643583bee381aa88401b0b3'
});

var developers = ['andres-garcia', 'andrew-more', 'axel-lessio', 'carlos-pando', 'cesar-velasquez', 'eliezer-de-armas', 'elvis-saavedra', 'erick-arroyo', 'harold-coronado', 'lou-alcala', 'luis-quintanilla', 'michel-hinostroza', 'paul-aguilar', 'ricardo-garcia', 'salvador-coronel', 'wenceslao-paez'];
var total_developers = developers.length;
var genders = [];
genders['MALE'] = 0;
genders['FEMALE'] = 0;
var ages = [];
ages['18-24'] = 0;
ages['25-34'] = 0;
ages['35-44'] = 0;
ages['45-54'] = 0;
ages['55-64'] = 0;
var keywords = [];

console.log("Tecla Labs - Developers Information");
console.log("--------------------------------------------");

async.each(developers, function (developer, callback) {

  request("http://ml.dev/tecla.io/profile/" + developer + "/json.php", function (error, response, body) {
    if(error) console.log(error);

    // body = body.replace(/<\s*br[^>]?>/,'\n').replace(/(<([^>]+)>)/g, "");
    
    body = JSON.parse(body);

    async.parallel([
      function (callback2) {
        /*var params = {
          images_file: fs.createReadStream('./images/' + body.image.replace('../../images/', ''))
        };
        visual_recognition.detectFaces(params, function (error, response) {
          console.log(developer);
          console.log(error)
          console.log(response)
          genders[response.images[0].faces[0].gender.gender]++;
          ages[response.images[0].faces[0].age.min + '-' + response.images[0].faces[0].age.max]++;
          callback2();
        });*/
        callback2();
      },
      function (callback2) {
        var params = {
          // url: "http://ml.dev/tecla.io/profile/" + developer + "/index.php"
          text: body.abstract
        };
        alchemy_language.keywords(params, function (error, response) {
          // console.log(developer)
          // console.log(JSON.stringify(response, null, 2));
          if (response) {
            response.keywords.forEach(function (keyword, i) {
              if (!(keyword in keywords)) keywords[keyword] = 0;
              keywords[keyword]++;
            });
          }
          callback2();
        });
      }
    ], function (error, results) {
      callback();
    });
  });

}, function (error) {

  console.log("");
  console.log("Gender's Percent");
  var percent_male = (genders['MALE'] * 100) / total_developers;
  var percent_female = (genders['FEMALE'] * 100) / total_developers;
  console.log("MALE: " + percent_male + "%");
  console.log("FEMALE: " + percent_female + "%");

  console.log("");
  console.log("Age's Percent");
  var percent_age1 = (ages['18-24'] * 100) / total_developers;
  var percent_age2 = (ages['25-34'] * 100) / total_developers;
  var percent_age3 = (ages['35-44'] * 100) / total_developers;
  var percent_age4 = (ages['45-54'] * 100) / total_developers;
  var percent_age5 = (ages['55-64'] * 100) / total_developers;
  console.log("18-24: " + percent_age1 + "%");
  console.log("25-34: " + percent_age2 + "%");
  console.log("35-44: " + percent_age3 + "%");
  console.log("45-54: " + percent_age4 + "%");
  console.log("55-64: " + percent_age5 + "%");

  console.log("");
  console.log("Priority Keywords");
  console.log(JSON.stringify(keywords, null, 2));
  keywords.forEach(function (keyword, i) {
    console.log(keyword);
  })
});