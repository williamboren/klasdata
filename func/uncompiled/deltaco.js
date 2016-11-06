const xmlparser = require('xml2js').parseString,
      reqeust = require('request');

var DeltacoApi = function() {
  var parameters = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];

  this.customerid = parameters.customerid || "";
  this.customerpassword = parameters.customerpassword || "";
  this.companyid = parameters.companyid || "";
  this.baseurl = "https://api.deltaco.se/WebAPIService.svc/?" // database={id}&manufacturername={manuf_name}&customerid={custId}&customerpassword={custPwd}&itemid={itemId}&companyId={companyId}
  this.parameters["customerid"] = this.customerid;
  this.parameters["customerpassword"] = this.customerpassword;
  this.parameters["companyid"] = this.companyid;
};

/* Function to call the api, only to be used locally but can be accessed from elsewhere anyway, because why not */
DeltacoApi.prototype.CallApi = function(params, callback) {
  var self = this;

  var urlParams = Object.keys(params).map(function(key) {
    return encodeURIComponent(key) + '=' + encodeURIComponent(params[key]);
  }).join('&');

  var url = self.baseurl + urlParams;

  request({url: url, encoding: "utf8"}, function(error, response, body) {
    if (!error && response.statusCode == 200) {
      xmlparser(body, function(err, result) {
        if (!err) {
          callback(result);
        }
      });
    }
  });
};

/* Calls the api with the database set to 'item', parameters manuf_name and itemid is optional.
    Passed arguments should be an Object */
DeltacoApi.prototype.GetItemsDatabase() {
  var self = this;
  var parameters = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];
  var options = {};
  // I hope order doesnt matter, but it shouldnt, right??
  options["database"] = "item";
  options += self.parameters;
  if (parameters.manufacturername) options["manufacturername"] = parameters.manufacturername;
  if (parameters.itemid) options["itemid"] = parameters.itemid;

  self.CallApi(options, function(res) {
    // proccess response
  });
}
