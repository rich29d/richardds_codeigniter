var fs;
try
{
    fs = require("graceful-fs");
}
catch(e)
{
    fs = require("public/api/less.js-master/lib/less-node/fs");
}
module.exports = fs;
