var mealsByCategory = {
    
}

function changecat2(value) {
    if (value.length == 0) document.getElementById("sname").innerHTML = "<option></option>";
    else {
        var catOptions = "";
        for (categoryId in mealsByCategory[value]) {
            catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
        }
        document.getElementById("sname").innerHTML = catOptions;
    }
}









var mealsByCategory = {
    "Alur": ["Alur", "Free Lancer_Alur_d2h"],
    "Arkalgudu": ["Arkalgudu", "Kerlapura", "Konanur", "Ramnathpura"],
    "Arsikere": ["Arsikere", "Gandsi", "Javagal"],
    "Belur": ["Arehalli", "Belur", "Bikod", "Halebeedu", "Javagal"],
    "CR Patna": ["CR Patna", "Hirisave", "Nuggehalli", "Sharavanbelagola"],
    "Hassan": ["BLN - SF Engineers", "Dudda", "Free Lancer_Hsn_d2h", "Gorur", "Hagare", "Hassan - City", "Kittane", "Shanthigrama", "Spares and Others"],
    "HN Pura": ["HN Pura"],
    "MI - TV - WM": ["Arsikere - FL/Dealer/Others", "BLN - SF Engineers", "CR Patna - FL/Dealer/Others", "Sakaleshpura - FL/Dealer/Others"],
    "Personal": ["Customer/Friends/Relatives", "Other Credits"],
    "Rajendra Kodagu": ["Bettadpura"],
    "Sakaleshpura": ["Balupete", "Koodrasthe", "Maaglu_Kodlipete", "Magge_Rayarkoppalu", "Sakaleshpura"]
}

function changecat(value) {
    if (value.length == 0) document.getElementById("aname").innerHTML = "<option></option>";
    else {
        var catOptions = "";
        for (categoryId in mealsByCategory[value]) {
            catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
        }
        document.getElementById("aname").innerHTML = catOptions;
    }
}