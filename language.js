var AlchemyLanguageV1 = require('watson-developer-cloud/alchemy-language/v1');

var alchemy_language = new AlchemyLanguageV1({
  api_key: 'f618223e3eb76e302643583bee381aa88401b0b3'
});

var params = {
  // url: 'http://edition.cnn.com/2016/09/15/politics/donald-trump-medical-details-stamina/index.html'
  url: 'http://peru.com/actualidad/mi-ciudad/peru-lanzara-su-primer-satelite-observacion-perusat-1-al-espacio-noticia-474611?ref=portada_home&ft=modulo_noticias_principales'
  // text: 'IBM Watson won the Jeopardy television show hosted by Alex Trebek'
};

alchemy_language.entities(params, function (err, response) {
  if (err)
    console.log('error:', err);
  else
    console.log(JSON.stringify(response, null, 2));
});