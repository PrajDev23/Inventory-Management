/**
 * Helper function for creating car
 **/
function createDname(name, id) {
  return {
    name: name,
    id: id
  };
}

/**
 * Helper function for creating model
 **/
function createAname(name, id, car) {
  return {
    name: name,
    id: id,
    car: car
  };
}

/**
 * Helper function for creating configuration
 **/
function createShopname(name, id, model) {
  return {
    name: name,
    id: id,
    model: model
  };
}

/**
 * Removes all options but the first value in a given select
 * and than selects the only remaining option
 **/
function removeOptions(select) {
  while (select.options.length > 1) {                
    select.remove(1);
  }

  select.value = "";
}

/**
 * Adds given options to a given select
 **/
function addOptions(select, options) {
  console.log(select, options)
  options.forEach(function(option) {
    select.options.add(new Option(option.name, option.id));
  });
}

/**
 * Select elements references
 **/
var dnameSelect = document.getElementById('dname-select');
var anameSelect = document.getElementById('aname-select');
var shopnameSelect = document.getElementById('shopname-select');

/**
 * Available cars
 **/
var dname = [
  createDname('BMW', 'bmw'),
  createDname('Volkswagen', 'volk'),
  createDname('Ford', 'ford')
];

/**
 * Available models
 **/
var aname = [
  createAname('M6', 'm6', 'bmw'),
  createAname('M5', 'm5', 'bmw'),
  createAname('Golf', 'golf', 'volk'),
  createAname('Passat', 'passat', 'volk'),
  createAname('Focus', 'focus', 'ford'),
  createAname('Mondeo', 'mondeo', 'ford')
];

/**
 * Available configurations
 **/
var shopname = [
  createShopname('M6 Sedan', 'sedan', 'm6'),
  createShopname('M6 Coupe', 'coupe', 'm6'),
  createShopname('M5 Sedan', 'sedan', 'm5'),
  createShopname('M5 Coupe', 'coupe', 'm5'),
  createShopname('Golf Sedan', 'sedan', 'golf'),
  createShopname('Golf Coupe', 'coupe', 'golf'),
  createShopname('Passat Sedan', 'sedan', 'passat'),
  createShopname('Passat Coupe', 'coupe', 'passat'),
  createShopname('Focus Sedan', 'sedan', 'focus'),
  createShopname('Focus Coupe', 'coupe', 'focus'),
  createShopname('Mondeo Sedan', 'sedan', 'mondeo'),
  createShopname('Mondeo Coupe', 'coupe', 'mondeo')
];

//Updates Area Name

 function updateAname() {
  var selectedCar = dnameSelect.value;
  var options = aname.filter(function(model) {
    return model.car === selectedCar;
  });

  removeOptions(anameSelect);
  removeOptions(shopnameSelect);
  addOptions(anameSelect, options);
}

//Updates Shop name
 
function updateShopname() {
  var selectedModel = anameSelect.value;
  var options = shopname.filter(function(configuration) {
    return configuration.model === selectedModel;
  });

  removeOptions(shopnameSelect);
  addOptions(shopnameSelect, options);
}

//Adds options to car select

addOptions(dnameSelect, dname);