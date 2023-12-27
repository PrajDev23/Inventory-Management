function getDname(){
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    $.ajax({
        url: 'getDname.php',
        type: "POST",
        data: {user: user,pass: pass},
        success: function(data){
            $("#dname_select").html(data);
            $("#taluk_area").html(data);
            $("#taluk_shop").html(data);

        }
    });
    $.ajax({
        url: 'getItem3.php',
        type: "POST",
        data: {user: user,pass: pass},
        success: function(data){
            $("#iname").html(data);
        }
    });
}
function Submit() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var date = document.getElementById('date_main').value;
    var dname = document.getElementById('dname_select').value;
    var aname = document.getElementById('aname_select').value;
    var sname = document.getElementById('shopname_select').value;
    var iname = document.getElementById('iname').value;
    var credit = document.getElementById('credit').value;
    var cash = document.getElementById('cash').value;
    var remarks = document.getElementById('comment').value;
    if ((dname != "" && aname != "" && sname != "" && iname != "") && (credit != "" || cash != "")) {
        $.ajax({
            url: 'AddElement.php',
            type: "POST",
            data: { dname: dname, aname: aname, sname: sname, iname: iname, credit: credit, cash: cash, date: date,remarks: remarks,user: user,pass: pass },
            success: function (res) {
                getData13();
                alert("Data Inserted Successfully");
                
            }
        });
    }
    else {
        alert('Please fill all the details.');
    }
}

//Get Data
function getAname(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    
    if (val != "") {
        $.ajax({
            type: "POST",
            url: "getAname.php",
            data: {country_id: val,user: user,pass: pass},
            success: function (data) {
                $("#aname_select").html(data);
                getShop();
            }
        });
    }
    else {
        $.ajax({
            type: "POST",
            url: "getAname_reset.php",
            data: {country_id: val},
            success: function (data) {
                $("#aname_select").html(data);
                getShop();
            }
        });
    }
}

function getShop(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    $.ajax({
        type: "POST",
        url: "getShop.php",
        data: {state_id: val,user: user,pass: pass},
        success: function (data) {
            $("#shopname_select").html(data);
        }
    });
    getData13();
}

function createItem() {
    var x = document.getElementById("item_elem");
    var y = document.getElementById("shop_elem");
    var z = document.getElementById("area_elem");
    var g = document.getElementById("taluk_elem");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        g.style.display = "none";
    }
}
function createShop() {
    var x = document.getElementById("shop_elem");
    var y = document.getElementById("item_elem");
    var z = document.getElementById("area_elem");
    var g = document.getElementById("taluk_elem");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        g.style.display = "none";
    }
}
function createArea() {
    var x = document.getElementById("area_elem");
    var y = document.getElementById("shop_elem");
    var z = document.getElementById("item_elem");
    var g = document.getElementById("taluk_elem");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        g.style.display = "none";
    }
}
function createTaluk() {
    var x = document.getElementById("taluk_elem");
    var y = document.getElementById("shop_elem");
    var z = document.getElementById("area_elem");
    var g = document.getElementById("item_elem");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        g.style.display = "none";
    }
}
//Insert Data to table
function addItem() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var iname = document.getElementById('add_Item').value
    if (iname != "") {
        $.ajax({
            url: 'addItem.php',
            type: "POST",
            data: { iname: iname,user: user,pass: pass },
            success: function (data) {
                alert("Data Inserted Successfully");
            }
        });
    }
    else {
        alert('Please fill all the details.');
    }
}
function addTaluk() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var dname = document.getElementById('add_taluk').value;
    if (dname != "") {
        $.ajax({
            url: 'addTaluk.php',
            type: "POST",
            data: { dname: dname,user: user,pass: pass },
            success: function (res) {
                alert("Data Inserted Successfully");
            }
        });
    }
    else {
        alert('Please fill all the details.');
    }
}
function addArea() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var dname = document.getElementById('taluk_area').value;
    var aname = document.getElementById('area_name').value;
    if (dname != "" && aname != "") {
        $.ajax({
            url: 'addArea.php',
            type: "POST",
            data: { dname: dname, aname: aname,user: user,pass: pass },
            success: function (res) {
                alert("Data Inserted Successfully");
            }
        });
    }
    else {
        alert('Please fill all the details.');
    }
}
function addShop() {
    
    var no = 0;
    var sname = document.getElementById('add_shop').value;
    var aname = document.getElementById('area_shop').value;
    console.log(sname);
    console.log(aname);
    no = document.getElementById('phno').value;
    var i,sum=no;
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    for(i=0;i<9;i++)
         sum = sum/10;

    if (sname != "" && aname != "" && (sum == "" || (sum >= 1 && sum < 10))) {
        $.ajax({
            url: 'addShop.php',
            type: "POST",
            data: { sname: sname, aname: aname, no:no,user: user,pass: pass },
            success: function (data) {
                alert("Data Inserted Successfully");
            }
        });
    }
    else if(sum < 1 || sum > 10)
        alert('Phone number is not 10 a digit number');
    else {
        alert('Please fill all the details.');
    }
}

function getAname1(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    $.ajax({
        type: "POST",
        url: "getAname.php",
        data: {country_id: val,user: user,pass: pass},
        success: function (data) {
            $("#area_shop").html(data);
            getShop();
        }
    });
    getData13();
}




function getData1(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    $.ajax({
        type: "POST",
        url: "getData1.php",
        data: {shop_id: val,user: user,pass: pass },
        success: function (data) {
            $("#shopname_select").html(data);
        }
    });
    getData2(val);
}

function getData2(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    $.ajax({
        type: "POST",
        url: "getData2.php",
        data: { shop_id: val,user: user,pass: pass },
        success: function (data) {
            $("#aname_select").html(data);
        }
    });
    getData3(val);
}

function getData3(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    $.ajax({
        type: "POST",
        url: "getData3.php",
        data: { shop_id: val,user: user,pass: pass },
        success: function (data) {
            $("#dname_select").html(data);
            getData13();
        }
    });
}
function search(sname) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    if (sname != "") {

        $.ajax({
            url: 'getDat1.php',
            type: "POST",
            data: { sname: sname,user: user,pass: pass },
            success: function (data) {
                $("#search_cust").html(data);
            }
        });
    }
    else {
        $.ajax({
            url: 'getDat2.php',
            type: "POST",
            data: { sname: sname,user: user,pass: pass },
            success: function (data) {
                $("#search_cust").html(data);
            }
        });
    }
}

function getData13() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var date1 = document.getElementById('date1').value;
    var date2 = document.getElementById('date2').value;
    var date = document.getElementById('date_main').value;
    var dname = document.getElementById('dname_select').value;
    var aname = document.getElementById('aname_select').value;
    var sname = document.getElementById('shopname_select').value;
    var iname = document.getElementById('iname').value;
    var filter = document.getElementById('filter').value;
    var comment = document.getElementById('comment').value;
    if (filter == 1) {
        $.ajax({
            url: 'getIndex.php',
            type: "POST",
            data: { date: date, district: dname, aname: aname, sname: sname, iname: iname, date1: date1, date2: date2, comment: comment,user: user,pass: pass },
            success: function (data) {
                $("#GetData").html(data);
            }
        });
        $.ajax({
            url: 'getCredit.php',
            type: "POST",
            data: { date: date, district: dname, aname: aname, sname: sname, iname: iname, date1: date1, date2: date2, comment: comment,user: user,pass: pass },
            success: function (data) {
                $("#getCredit").html(data);
            }
        });
    }
}

function quantity_status(){
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var low = document.getElementById("low_quantity").value;
    $.ajax({
        url: 'quantity_status.php',
        type: "POST",
        data:{low:low,user: user,pass: pass},
        success: function (data) {
            $("#low").html(data);
            
        }
    });
}

function getData14() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var filter = document.getElementById('filter').value;
    var comment = document.getElementById('serial_search').value;
    if (filter == 1) {
        $.ajax({
            url: 'getIndex.php',
            type: "POST",
            data: {comment: comment,user: user,pass: pass },
            success: function (data) {
                $("#GetData").html(data);
            }
        });
        $.ajax({
            url: 'getCredit.php',
            type: "POST",
            data: { comment: comment,user: user,pass: pass },
            success: function (data) {
                $("#getCredit").html(data);
            }
        });
    }

}
$(document).ready(function () {
    var modal1 = document.getElementById("content1");
    var btn1 = document.getElementById("add_element1");
    var span1 = document.getElementsByClassName("close1")[0];
    btn1.onclick = function () {
        modal1.style.display = "block";
    }
    span1.onclick = function () {
        modal1.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
    
});

    function openFloatingDiv() {
        document.getElementById("floatingDiv").style.display = "block";
        quantity_status();
    }
      
      function closeFloatingDiv() {
        document.getElementById("floatingDiv").style.display = "none";
    }

$(document).ready(function () {
    
    var modal3 = document.getElementById("content3");
    var btn3 = document.getElementById("add_element3");
    var span3 = document.getElementsByClassName("close3")[0];
    btn3.onclick = function () {
        modal3.style.display = "block";
    }
    span3.onclick = function () {
        modal3.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }
});


$(document).ready(function () {
    $("#save").click(function () {
        $("#serial").val('');

        
    });
});



function filter1() {

    var btn = document.getElementById("filter");

    if (btn.value == "0") {
        btn.value = "1";
        btn.innerHTML = "Filter";
    }
    else {
        btn.value = "0";
        btn.innerHTML = "Filter";
    }

}

function filter_status1(val) {
    $.ajax({
        url: 'filter_status.php',
        type: "POST",
        data: { val: val},
        success: function (data) {
            $("#heading1").html(data);
            getData13();
        }
    });
    quantity_status();
}


function updateData12(val) {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;
    var date = document.getElementById("date_main1").value;
    $.ajax({
        url: 'updateCash_data.php',
        type: "POST",
        data: { serial: val, date: date,user: user,pass: pass },
        success: function (data) {
            getData12();
            getData11();
        }
    });

}

function reset1() {
    var user = document.getElementById('username').value ;
    var pass = document.getElementById('password').value ;

    $.ajax({
        url: 'resetTaluk.php' ,
        type: "POST",
        success: function(data){
            $("#dname_select").html(data);
        }
    });
    $.ajax({
        url: 'getAname_reset.php' ,
        type: "POST",
        success: function(data){
            $("#aname_select").html(data);
        }
    });
    $.ajax({
        url: 'resetShop.php' ,
        type: "POST",
        success: function(data){
            $("#shopname_select").html(data);
        }
    });
    $.ajax({
        url: 'resetItem.php' ,
        type: "POST",
        success: function(data){
            $("#iname").html(data);
            getData13();
            getDname();
        }
    });
    $.ajax({
        url: 'resetComment.php' ,
        type: "POST",
        success: function(data){
            $("#remarks").html(data);
            getData13();
            getDname();
            
        }
    });
    

}
function resetComment(){
    $("#comment").val('');
    $("#quantity").val('');
    $("#cash").val('');
    $("#credit").val('');
}


$(document).ready(function () {
    var tableOffset = $("#display").offset().top;
    var $header = $("#display > thead").clone();
    var $fixedHeader = $("#header-fixed").append($header);
    
    $(window).bind("scroll", function() {
        var offset = $(this).scrollTop();
        
        if (offset >= tableOffset && $fixedHeader.is(":hidden")) {
            $fixedHeader.show();
        }
        else if (offset < tableOffset) {
            $fixedHeader.hide();
        }
    });
});

function hide_status(){
    closeFloatingDiv();
}
function reload(){
    location.reload(true);
}
function log_php(stat,val){

    $.ajax({
        type: "POST",
        url:'phplogin.php',
        data:{pass: val,status:stat}
    });
    
}

function dashboard(val){
    var pass = document.getElementById('password').value ;
    log_php(val,pass);
    if(val == 0)
        alert("Logged out Successfully");
    if(val == 1)
        location.href = "https://localhost/phpmyadmin/index.php?route=/database/structure&db=blne";

}