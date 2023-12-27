(function (d) {
    "use strict";
         if ("querySelector" in document && "addEventListener" in window) {
                   var theFilter = d.querySelector("#advanced-filter-button");
                  var theFilterParent = d.querySelector("#advanced-filter");
                    var closeButton = d.querySelector("#close");
           theFilter.addEventListener(
                  "click",
                    function (e) {
                         theFilterParent.classList.toggle("open-filter");
                    },
                    false
                     );

           closeButton.addEventListener(
                "click",
                 function (e) {
                     theFilterParent.classList.toggle("open-filter");
             },
                  false
              );
              }
             })(document);