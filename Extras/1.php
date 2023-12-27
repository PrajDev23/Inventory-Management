<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
        function dynamicdropdown(listindex) {
            switch (listindex) {
                case "Alur":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Alur", "Alur");
                    document.getElementById("aname").options[2] = new Option("Free Lancer_Alur_d2h", "Free Lancer_Alur_d2h");
                    break;
                case "Arkalgudu":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Arkalgudu", "Arkalgudu");
                    document.getElementById("aname").options[2] = new Option("Kerlapura", "Kerlapura");
                    document.getElementById("aname").options[3] = new Option("Konanur", "Konanur");
                    document.getElementById("aname").options[4] = new Option("Ramnathpura", "Ramnathpura");
                    break;
                case "Arsikere":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Arsikere", "Arkalgudu");
                    document.getElementById("aname").options[2] = new Option("Gandsi", "Gandsi");
                    document.getElementById("aname").options[3] = new Option("Javagal", "Javagal");
                    break;
                case "Belur":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Arehalli", "Arehalli");
                    document.getElementById("aname").options[2] = new Option("Belur", "Belur");
                    document.getElementById("aname").options[3] = new Option("Bikod", "Bikod");
                    document.getElementById("aname").options[3] = new Option("Halebeedu", "Halebeedu");
                    document.getElementById("aname").options[3] = new Option("Javagal", "Javagal");
                    break;
                case "CR Patna":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("CR Patna", "CR Patna");
                    document.getElementById("aname").options[2] = new Option("Hirisave", "Hirisave");
                    document.getElementById("aname").options[3] = new Option("Nuggehalli", "Nuggehalli");
                    document.getElementById("aname").options[3] = new Option("Sharavanbelagola", "Sharavanbelagola");
                    break;
                case "Hassan":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("BLN - SF Engineers", "BLN - SF Engineers");
                    document.getElementById("aname").options[2] = new Option("Dudda", "Dudda");
                    document.getElementById("aname").options[3] = new Option("Free Lancer_Hsn_d2h", "Free Lancer_Hsn_d2h");
                    document.getElementById("aname").options[4] = new Option("Gorur", "Gorur");
                    document.getElementById("aname").options[5] = new Option("Hagare", "Hagare");
                    document.getElementById("aname").options[6] = new Option("Hassan - City", "Hassan - City");
                    document.getElementById("aname").options[7] = new Option("Kittane", "Kittane");
                    document.getElementById("aname").options[8] = new Option("Shanthigrama", "Shanthigrama");
                    document.getElementById("aname").options[9] = new Option("Spares and Others", "Spares and Others");
                    document.getElementById("aname").options[10] = new Option("Hagare", "Hagare");
                    break;
                case "HN Pura":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("HN Pura", "HN Pura");
                    break;
                case "MI - TV - WM":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Arsikere - FL/Dealer/Others", "Arsikere - FL/Dealer/Others");
                    document.getElementById("aname").options[2] = new Option("BLN - SF Engineers", "BLN - SF Engineers");
                    document.getElementById("aname").options[3] = new Option("CR Patna - FL/Dealer/Others", "CR Patna - FL/Dealer/Others");
                    document.getElementById("aname").options[4] = new Option("Sakaleshpura - FL/Dealer/Others", "Sakaleshpura - FL/Dealer/Others");
                    break;
                case "Personal":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Customer/Friends/Relatives", "Customer/Friends/Relatives");
                    document.getElementById("aname").options[2] = new Option("Other Credits", "Other Credits");
                    break;
                case "Rajendra Kodagu":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Bettadpura", "Bettadpura");
                    break;
                case "Sakaleshpura":
                    document.getElementById("aname").options[0] = new Option("Select Taluk", "");
                    document.getElementById("aname").options[1] = new Option("Balupete", "Balupete");
                    document.getElementById("aname").options[2] = new Option("Koodrasthe", "Koodrasthe");
                    document.getElementById("aname").options[3] = new Option("Maaglu_Kodlipete", "Maaglu_Kodlipete");
                    document.getElementById("aname").options[4] = new Option("Magge_Rayarkoppalu", "Magge_Rayarkoppalu");
                    document.getElementById("aname").options[5] = new Option("Sakaleshpura", "Sakaleshpura");
                    break;
            }
            return true;
        }
    </script>
</head>
<title>Dynamic Drop Down List</title>

<body>
    
    <div class="category_div" id="category_div">Source:
        <select id="district" class="district" name="district" 
            onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
            <option value="">Select District</option>
                <option value="Alur">Alur</option>
                <option value="Arkalgudu">Arkalgudu</option>
                <option value="Arsikere">Arsikere</option>
                <option value="Belur">Belur</option>
                <option value="CR Patna">CR Patna</option>
                <option value="Hassan">Hassan</option>
                <option value="HN Pura">HN Pura</option>
                <option value="MI - TV - WM">MI - TV - WM</option>
                <option value="Personal">Personal</option>
                <option value="Rajendra Kodagu">Rajendra Kodagu</option>
                <option value="Sakaleshpura">Sakaleshpura</option>
        </select>
    </div>
    <div class="sub_category_div" id="sub_category_div">Status:
        <script type="text/javascript" language="JavaScript">
            document.write('<select class="taluk" name="aname" id="aname"><option value="none2">Select District</option></select>')
        </script>
        <noscript>
            <select class="taluk" name="aname" id="aname">
                <option value="none2">Select District</option>
            </select>
        </noscript>
    </div>
</body>

</html>