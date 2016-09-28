'use strict';

var VisualRecognitionV3 = require('watson-developer-cloud/visual-recognition/v3');
var fs = require('fs');

var visual_recognition = new VisualRecognitionV3({
  api_key: '46a5514b1d61c8bd341e176dc3212aec61346786',
  version_date: '2016-09-14'
});

var params = {
  // must be a .zip file containing images
  images_file: fs.createReadStream('./resources/c.jpg')
};

visual_recognition.classify(params, function(err, res) {
  if (err)
    console.log(err);
  else
    console.log(JSON.stringify(res, null, 2));
});
